using System;
using System.Linq;

namespace No445
{
    class Program
    {
        static void Main(string[] args)
        {
            var inputs = Console.ReadLine().ToIntArray(' ');
            Console.WriteLine(CalcurateScore(inputs[0], inputs[1]));
        }

        static string CalcurateScore(int n, int k)
        {
            return Math.Floor((50*n)+((50*n)/(0.8+0.2*k))).ToString();
        }
    }

    static class StringExtention
    {
        public static string[] ToStringArray(this string value, char splitChar)
        {
            return value.Split(splitChar);
        }
        public static int[] ToIntArray(this string value, char splitChar)
        {
            return value.Split(splitChar).Select(x=>Convert.ToInt32(x)).ToArray();
        }
        public static long[] ToLongArray(this string value, char splitChar)
        {
            return value.Split(splitChar).Select(x => Convert.ToInt64(x)).ToArray();
        }
    }
}
