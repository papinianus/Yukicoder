using System;

namespace No36
{
    class Program
    {
        static void Main(string[] args)
        {
            var N = Convert.ToInt64(Console.ReadLine());
            var count = 0;

            for(Int64 i = 2; i*i <= N; i++)
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