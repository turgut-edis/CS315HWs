/**
 * 1.      How are the boolean values represented?

    2.      What operators are short-circuited?

    3.      How are the results of short-circuited operators computed? (Consider also function calls)

    4.      What are the advantages about short-circuit evaluation?

    5.      What are the potential problems about short-circuit evaluation?
 */
fn main(){

   //1) In Rust, boolean values represented as True and False
   let val1 = 5 > 4;
   println!("{}", val1);
   let val2 = false;
   println!("{}", val2);
   let val3 = val1 as u8;
   let val4 = val2 as u8;
   //Also, when true and false is typecasted as integer, 1 displayed for true and 0 displayed for false
   println!("{}", val3);
   println!("{}", val4);

   //2) The && (and) and || (or) operators are short-circuited in Rust.

   //3) For || operation,
   //First, left is calculated and if it is true, the value will be left right wont be calculated, otherwise the result will be the right
   // For && operation,
   //First left is calculated and if it is true, the result will be the right, otherwise the result is left and right wont be calculated
   fn foo() -> u8{
      15
   }
   let val5 = (4<15) || (5<1); //It wont calculate right because left is true
   println!("{}", val5);
   let val6 = (4<1) && (foo() != 0); //It wont calculate right because left is false
   println!("{}", val6);

   //4) It helps to avoid the unwanted situations such as errors and infinite loops.
   fn inf_loop(val: u8) -> u8{
      if val != 0{
         loop{
            println!("inf_loop");
         }
         
      }
      else {
         0
      }
   }
   let val7 = (4>1) || (inf_loop(5) != 0); //It wont calculate infinite loop because left is true
   let val8 = (1>8) && (inf_loop(4) != 0); //It wont calculate infinite loop because left is false
   println!("{}", val7);
   println!("{}", val8);

   // 5) It can cause unexpected behavior if not used properly.
   // For any function in the code snippet 
   // that does some kind of allocation of system resources/memory allocation
   // , we may get unexpected behavior.
   
   // Code execution becomes less efficient with short-circuited execution paths
   // because in some compilers the new checks for short-circuits are extra execution cycles in themselves.
}