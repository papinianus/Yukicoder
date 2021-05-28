using System;
using System.Linq;

namespace No477
{
    class Program
    {
        static void Main(string[] args)
        {
            var inputs = Console.ReadLine().ToLongArray(' ');

            Console.WriteLine(inputs[0] / (inputs[1] + 1) + 1);
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
            return value.Split(splitChar).Select(x => Convert.ToInt32(x)).ToArray();
        }
        public static long[] ToLongArray(this string value, char splitChar)
        {
            return value.Split(splitChar).Select(x => Convert.ToInt64(x)).ToArray();
        }
    }
}
