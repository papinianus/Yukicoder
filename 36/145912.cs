using System;
using System.Linq;

namespace No36
{
    class Program
    {
        static void Main(string[] args)
        {
            var N = Convert.ToInt64(Console.ReadLine());
            var count = 0;

            foreach (var i in Enumerable.Range(2, Convert.ToInt32(Math.Floor(Math.Sqrt(N)))))
            {
                while((N % i) == 0)
                {
                    N /= i;
                    count++;
                }
            }
            if(N > 1) { count++; }
            if (count > 2) { Console.WriteLine("YES"); }
            else { Console.WriteLine("NO"); }
        }
    }
}