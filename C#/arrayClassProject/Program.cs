using System;

namespace arrayClassProject
{
    class Program
    {
        
        static void Main(string[] args)
        {


            Console.WriteLine("How many numbers are there?");
            string aSize = Console.ReadLine();
            int i = Convert.ToInt32(aSize);
            int [] numbers = new int [i];
            
            Console.WriteLine("Please enter numbers.");
            double[] testNumbers = new double[numbers.Length];
            for(int a = 0; a < numbers.Length; a++)
            {
                testNumbers[a] = Convert.ToDouble(Console.ReadLine());
            }
            Console.WriteLine('\n');
            for(int a = 0; a < numbers.Length; a++)
            {
                Array.Sort(testNumbers);
                Console.WriteLine(testNumbers[a]);
            }

         }
    }
}
