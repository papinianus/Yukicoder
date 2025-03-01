//deno run --allow-net --allow-read --allow-write fetch-latest.ts

import { ensureDir, exists, existsSync } from 'https://deno.land/std/fs/mod.ts';
import {
  DOMParser,
  Element,
} from 'https://deno.land/x/deno_dom/deno-dom-wasm.ts';

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
  Date: string;
  Statistics: problemStatistics;
}
type submissionInfo = [
  problemNo: number,
  submissonId: number,
  extension: string,
];
const userId = '1954';
const filename = new URL(import.meta.url).pathname.replace(/\.ts$/, '.txt');
// 1. last executed
const previousExecution = new Date(Deno.readTextFileSync(filename));
const currentExecution = new Date().toISOString();
// 2. fetch solved from api

const solvedProblems = await fetch(
  `https://yukicoder.me/api/v1/solved/id/${userId}`,
)
  .then((response) => response.json())
  .then((json) => json as yukicoderProblem[]);
const problemsToFetch = solvedProblems
  .filter((p) => new Date(p.Date) > previousExecution)
  .map((e) => e.No.toString());
// 3. mkdir
await Promise.all(problemsToFetch.map(ensureDir));
// 4. fetch submissions from ProblemPage
// https://yukicoder.me/problems/no/700/submissions?submitter=1954&status=AC
const languageToExtension = (lang: string): string => {
  if (/^PHP/i.test(lang)) return 'php';
  if (/^C#/i.test(lang)) return 'cs';
  console.info(`unknown langue ${lang}`);
  return 'txt';
};
const submissionInfos = (
  await Promise.all(
    problemsToFetch.map((n) =>
      fetch(
        `https://yukicoder.me/problems/no/${n}/submissions?submitter=${userId}&status=AC`,
      )
        .then((response) => response.text())
        .then((html) => new DOMParser().parseFromString(html, 'text/html')!)
        .then((doc) =>
          [...doc.querySelectorAll('tbody>tr')!].map(
            (tr) =>
              [
                Number(
                  (tr.children[4].querySelector('a') as Element)
                    .getAttribute('href')!
                    .match(/\d+$/)![0],
                ),
                Number(tr.children[0].textContent),
                languageToExtension(tr.children[5].textContent),
              ] as submissionInfo,
          ),
        ),
    ),
  )
).flat(1);
const filePath = (no: number, submissionId: number, extension: string) =>
  `./${no}/${submissionId}.${extension}`;
await Promise.all(
  submissionInfos.map((submission) =>
    existsSync(filePath(...submission))
      ? Promise.resolve(false)
      : fetch(`https://yukicoder.me/submissions/${submission[1]}/source`)
          .then((data) => data.text())
          .then((txt) => Deno.writeTextFile(filePath(...submission), txt))
          .then(() => true)
          .catch((e) => console.log(e)),
  ),
);
Deno.writeTextFileSync(filename, currentExecution);
