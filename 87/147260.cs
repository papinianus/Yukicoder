using System;
using System.Linq;

namespace No87
{
    class Program
    {
        static void Main(string[] args)
        {
            var N = Convert.ToInt64(Console.ReadLine()) - 2014;
            var repeat = N / 400;
            var rest = N % 400 + 2014;
            var m = 3; // 1/1の曜日で判断すると、1/1の曜日は同じだが、閏年であるために3/1以降がずれる年を同じと判定してしまう
            var d = 1;
            var stdDay = (new DateTime(2014, m, d)).DayOfWeek;
            var cnt400 = 0;
            var cntPeriod = 0;
            var i = 0;
            foreach (var y in Enumerable.Range(2015, 400))
            {
                var compDay = (new DateTime(y, m, d)).DayOfWeek;
                if (compDay == stdDay)
                {
                    cnt400++;
                }
                if (y == rest)
                {
                    cntPeriod = cnt400;
                }
                i = y;

            }
            Console.WriteLine((cnt400 * repeat + cntPeriod).ToString());
        }
    }
}
