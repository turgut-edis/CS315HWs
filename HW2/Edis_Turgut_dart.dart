/**
1.How are the boolean values represented?

2.What operators are short-circuited?

3.How are the results of short-circuited operators computed? (Consider also function calls)

4.What are the advantages about short-circuit evaluation?

5.What are the potential problems about short-circuit evaluation?
 */
void main(){
//1) The boolean values are represented as false and true.
var x = 10;
var res = x==11;
print(res);
res = x==10;
print(res);
print("-------------------------------------------------------------------");
//2) The operators "||" (or) and "&&" (and) are short-circutied in Dart.
var res2 = res || (x==15);
print(res2);
res2 = res && (x==15);
print(res2);
//3) When the operation is computed,
//for || operation
//if the left is true, the right is not computed and returns true
//otherwise, the right is checked and the value of right is returned.
x = 20;
var res3 = foo() || (x<=21); //Since the left is false, the right is calculated
print(res3);
res3 = (x < 22) || (x > 30);
print(res3);

//for && operation
//if the left is true, the result will be the right
//otherwise the result will be the same as the left
x = 11;
var res4 = (x>1) && (x>11);
print(res4);
res4 = (x<9) && foo();
print(res4);
print("-------------------------------------------------------------------");

//4) It avoids computationally complex tasks.
var res5 = (3<4) || inf_loop(15);
print(res5);
//It provides a check for the left without the runtime error for the right.

//5) It can cause unexpected behavior if not used properly.
//For any function in the code snippet 
//that does some kind of allocation of system resources/memory allocation
//, we may get unexpected behavior.
//Code execution becomes less efficient with short-circuited execution paths
//because in some compilers the new checks for short-circuits are extra execution cycles in themselves.

}
bool foo(){
    return true;
}
//It creates a infinite loop
bool inf_loop(int x){
    if (x == 1){
        return false;
    } else {
        return inf_loop(x);
    }
}