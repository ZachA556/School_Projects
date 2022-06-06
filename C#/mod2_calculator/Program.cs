using System;

namespace mod2_calculator
{
    class Program
    {
        static void Main(string[] args)
        {
            int usernum1 = 0;
            int usernum2 = 0;
            char choice1 = ' ';
            char choice2 = ' ';


            Console.WriteLine("Welcome to the Calculator");
                Console.WriteLine("Insert Number: ");
                usernum1 = Convert.ToInt32(Console.ReadLine());
                Console.WriteLine("Insert Second Number: ");
                usernum2 = Convert.ToInt32(Console.ReadLine());
                Console.WriteLine("Would you like to M, D, A, S, or Q (Multiply, Divide, Add, Subtract, Quit)");
                choice1 = Console.ReadLine()[0];
                if (choice1 == 'm' || choice1 == 'M')
                {
                    Console.WriteLine(usernum1 * usernum2);
                    Console.WriteLine("Would you like to solve another problem:  (Y/N)");
                choice2 = Console.ReadLine()[0];
                if (choice2 == 'Y' || choice2 == 'y')
                {
                    Main(args);
                }
                else
                {
                    Console.WriteLine("Goodbye");
                }

            }
                else if (choice1 == 'D' || choice1 == 'd')
                {
                    Console.WriteLine(usernum1 / usernum2);
                Console.WriteLine("Would you like to solve another problem:  (Y/N)");
                choice2 = Console.ReadLine()[0];
                if (choice2 == 'Y' || choice2 == 'y')
                {
                    Main(args);
                }
                else
                {
                    Console.WriteLine("Goodbye");
                }
            }
                else if (choice1 == 'A' || choice1 == 'a')
                {
                    Console.WriteLine(usernum1 + usernum2);
                Console.WriteLine("Would you like to solve another problem:  (Y/N)");
                choice2 = Console.ReadLine()[0];
                if (choice2 == 'Y' || choice2 == 'y')
                {
                    Main(args);
                }
                else
                {
                    Console.WriteLine("Goodbye");
                }
            }
                else if (choice1 == 'S' || choice1 == 's')
                {
                    Console.WriteLine(usernum1 + usernum2);
                Console.WriteLine("Would you like to solve another problem:  (Y/N)");
                choice2 = Console.ReadLine()[0];
                if (choice2 == 'Y' || choice2 == 'y')
                {
                    Main(args);
                }
                else
                {
                    Console.WriteLine("Goodbye");
                }
            }
                else if (choice1 == 'Q' || choice1 == 'q')
                {
                    Console.WriteLine("Goodbye");
                }
                else
                {
                    Console.WriteLine("Imput Error");
                }

            }
            
            
        
    }
}
