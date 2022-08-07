using System;
using System.Linq;

namespace Yukicoder
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine(Console.ReadLine().ToIntArray(' ').Min());
        }
    }

    static class StringExtention
    {
        public static string[] ToStringArray(this string value, char splitChar) => value.Split(splitChar);
        public static int[] ToIntArray(this string value, char splitChar) => value.Split(splitChar).Select(x=>Convert.ToInt32(x)).ToArray();
        public static long[] ToLongArray(this string value, char splitChar) => value.Split(splitChar).Select(x => Convert.ToInt64(x)).ToArray();
    }
}