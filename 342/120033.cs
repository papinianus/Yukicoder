using System;
using System.Collections.Generic;
using System.Linq;
using System.Text.RegularExpressions;

namespace no342
{
    class Program
    {
        static void Main(string[] args)
        {
            var str = Console.ReadLine();
            var exp = @"(?<phrase>[^ｗ]+?)(?<ws>[ｗ]+)";
            var reg = new Regex(exp, (RegexOptions.Multiline | RegexOptions.CultureInvariant));
            var matches = reg.Matches(str);
            var substrs = new Dictionary<int, string>();
            foreach(Match match in matches)
            {
                var wlen = match.Groups["ws"].ToString().Length;
                var phrase = match.Groups["phrase"].ToString();
                if (substrs.ContainsKey(wlen))
                {
                    substrs[wlen] += "\r\n" + phrase;
                }
                else
                {
                    substrs.Add(wlen, phrase);
                }
            }
            Console.WriteLine(substrs.OrderByDescending(x=>x.Key).FirstOrDefault().Value);
        }
    }
}