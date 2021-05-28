//deno run --allow-net --unstable --allow-read --allow-write fetch.ts

import { ensureDir, exists, existsSync } from "https://deno.land/std/fs/mod.ts";
import {
  DOMParser,
  Element,
} from "https://deno.land/x/deno_dom/deno-dom-wasm.ts";

interface problemStatistics {
  Total: number;
  Solved: number;
  FirstAcceptedTimeSecond: number;
  FurstAcSubmissionId: number;
  ShortCodeSumbissionId: number;
  PureShortCodeSubmissionId: number;
  FastSubmissionId: number;
}
interface yukicoderProblem {
  No: number;
  ProblemId: number;
  Title: string;
  AuthorId: number;
  TesterId: number;
  TesterIds: string;
  Level: number;
  ProblemType: number;
  Tags: string;
  Date: Date;
  Statistics: problemStatistics;
}
type submissionInfo = [
  problemNo: number,
  submissonId: number,
  extension: string
];
const userId = "1954";
// 1. mkdir
// 9000,9001,9002 aren't included
const solvedNumbers = await fetch(
  `https://yukicoder.me/api/v1/solved/id/${userId}`
)
  .then((response) => response.json())
  .then((json) => (json as yukicoderProblem[]).map((e) => e.No.toString()));
await Promise.all(solvedNumbers.map(ensureDir));

// 2. fetch submission numbers
// // can took all submission counts from userpage but cannot fetch AC submissions
const languageToExtension = (lang: string): string => {
  if (/^PHP/i.test(lang)) return "php";
  if (lang === "C#") return "cs";
  console.info(`unknown langue ${lang}`);
  return "txt";
};

/* ACs from user page */
const submissionInfos = (
  await Promise.all(
    [1, 2, 3, 4, 5].map((n) =>
      fetch(
        `https://yukicoder.me/users/${userId}/submissions?page=${n}&status=AC`
      )
        .then((response) => response.text())
        .then((html) => new DOMParser().parseFromString(html, "text/html")!)
        .then((doc) =>
          [...doc.querySelectorAll("tbody>tr")!].map(
            (tr) =>
              [
                Number(
                  (tr.children[4].querySelector("a") as Element)
                    .getAttribute("href")!
                    .match(/\d+$/)![0]
                ),
                Number(tr.children[0].textContent),
                languageToExtension(tr.children[5].textContent),
              ] as submissionInfo
          )
        )
    )
  )
).flat(1);

// 3. fetch source codes, write file

console.table(submissionInfos);
const filePath = (no: number, submissionId: number, extension: string) =>
  `./${no}/${submissionId}.${extension}`;
const a = await Promise.all(
  submissionInfos.map((submission) =>
    existsSync(filePath(...submission))
      ? Promise.resolve(false)
      : fetch(`https://yukicoder.me/submissions/${submission[1]}/source`)
          .then((data) => data.text())
          .then((txt) => Deno.writeTextFile(filePath(...submission), txt))
          .then(() => true)
          .catch((e) => console.log(e))
  )
);

const writeIfNotExists = (path: string, contents: string): void => {
  exists(path).then((b) => {
    if (b) return;
    Deno.writeTextFile(path, contents);
  });
};
