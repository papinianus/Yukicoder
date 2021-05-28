using System;
using System.Linq;

namespace No476
{
    class Program
    {
        static void Main(string[] args)
        {
            var manual = Console.ReadLine().ToLongArray(' ');
            long manualSum = manual[0] * manual[1];

            var items = Console.ReadLine().ToLongArray(' ');
            long itemsSum = items.Sum();
            if(manualSum == itemsSum)
            {
                Console.WriteLine("YES");
            }
            else
            {
                Console.WriteLine("NO");
            }
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
