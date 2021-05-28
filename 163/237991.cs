using System.Linq;
using static System.Console;
using static System.Char;
public class yukicoder163{
    public static void Main(){
        WriteLine(ReadLine().Select(x=>IsUpper(x) ? ToLower(x) : ToUpper(x)).ToArray());
    }
}