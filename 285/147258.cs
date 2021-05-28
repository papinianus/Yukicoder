using System;

namespace No285
{
    class Program
    {
        static void Main(string[] args)
        {
            var d = Convert.ToInt64(Console.ReadLine()) * 108;
            var strd = d.ToString();
            Console.WriteLine(strd.Substring(0,strd.Length-2) + "." + strd.Substring(strd.Length-2));
        }
    }
}