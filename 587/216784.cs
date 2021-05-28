using System.Linq;
using static System.Console;

namespace No587
{
    class Program
    {
        static void Main(string[] args)
        {
            var chars = ReadLine().ToCharArray();
            if (WillBeSevenPair(chars))
            {
                WriteLine(FindSoloChar(chars));
                return;
            }
            WriteLine("Impossible");
            return;
        }

        static bool WillBeSevenPair(char[] chars)
        {
            var charGroup = chars.GroupBy(x => x);
            var c = charGroup.Count();
            var n = charGroup.Select(x => x.Count()).ToArray();
            return charGroup.Count() == 7 && charGroup.Select(x=>x.Count()).All(y => y == 1 || y == 2);
        }
        static char FindSoloChar(char[] chars) => chars.GroupBy(x => x).Select(x => new { chr = x.Key, cnt = x.Count() }).Single(y => y.cnt == 1).chr;
    }
}
