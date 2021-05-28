using System;
using System.Linq;
using static System.Console;
using static System.String;
//using System.Reactive.Linq;

namespace No593
{
    class Program
    {
        static void Main(string[] args)
        {
            var p4 = ReadLine().Trim();
            WriteLine(ToFizzBuzzString(p4));
        }
        static string ToFizzBuzzString(string p4)
        {
            var isTriple = p4.ToCharArray().Select(x => x - '0').Sum() % 3 == 0;
            var evens = p4.ToCharArray().Where((x, i) => i % 2 == 0).Select(x => x - '0').Sum();
            var odds = p4.ToCharArray().Where((x, i) => i % 2 == 1).Select(x => x - '0').Sum();
            var isQuintuple = Math.Abs(evens - odds) % 5 == 0;
            return $"{(isTriple ? "Fizz" : Empty)}{(isQuintuple ? "Buzz" : Empty)}{(!isTriple && !isQuintuple ? p4 : Empty)}";
        }
        //static string ToFizzBuzzStringInReactive(string p4)
        //{
        //    var isTriple = p4.ToCharArray().Select(x => x - '0').Sum() % 3 == 0;
        //    var isQuintuple = false;
        //    p4.ToCharArray().Select((x, i) => new { index = i, val = x - '0' }).ToObservable()
        //        .Publish(rx => rx.Where(ri => ri.index % 2 == 0).Select(rv => rv.val).Sum()
        //            .Zip(rx.Where(rj => rj.index % 2 == 1).Select(rw => rw.val).Sum(), (even, odd) => Math.Abs(even - odd) % 5 == 0)).Subscribe(r => isQuintuple = r);
        //    return $"{(isTriple ? "Fizz" : Empty)}{(isQuintuple ? "Buzz" : Empty)}{(!isTriple && !isQuintuple ? p4 : Empty)}";
        //}
    }
}
