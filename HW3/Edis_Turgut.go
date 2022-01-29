/**
    This example code shows the answers for the design issues.
	Each function represents the design issues which is written before the function in comment.
	Therefore, the code is appropriate enough to explain the design issues. 
*/
package main

import "fmt"

//Rec_fibo function is used to explain the design issue of nested subprogram definitions.
func rec_fibo(n int) int{
	var fibo func(int) int
	fibo = func(x int) int{
		if x == 0 {
			return 0
		}
		if x == 1 {
			return 1
		}
		return fibo(x-1) + fibo(x-2)
	}
	return fibo(n)
}

//Below x initialization local and mult functions are used to explain the design issue of scope of local variables. 
//Global x variable
var x int = 56

func local() {
	//Local variable x
	var x int = 15
	fmt.Print("Local X inside the local function is ")
	fmt.Println(x)
}

func mult(y int, z int) int {
	fmt.Printf("The y inside the mult function is %d\n", y)
	fmt.Printf("The z inside the mult function is %d\n", z)
	return y * z
}

//setXPbV and setXPbR functions are used to explain the design issue of parameter passing methods.  
func setXPbV(x int) {
	x = 66
}

func setXPbR(x *int) {
	*x = 45
}

//sumList function is used to explain the design issue of keyword and default parameters.
func sumList(numbers ...int) int {
	n := 0
	for _, i := range numbers{
		n += i
	}
	return n
}

//anon_func function is used to explain the design issue of closures.
func anon_func() func() int{
	x := 1
	return func() int {
		x += 2
		return x
	}

}

func main(){
	fmt.Println("The rec_fibo is returning the function fibo.")
	fmt.Println("The fibo is a function that calculate the fibonacci result of the given number.")
	fmt.Print("The fibonacci of 10 is ")
	fmt.Println(rec_fibo(10))
	fmt.Println("------------------------------------------------------------")
	local()
	fmt.Print("Global X is ")
	fmt.Println(x)
	var a int = 11
	//Local variable x
	var x int = 15
	fmt.Println("When the function is called, the variable in the local scope is going to be used")
	fmt.Println("This is called formal scope in golang")
	fmt.Printf("So, the result of x * a will be %d\n", mult(x,a))
	fmt.Println("------------------------------------------------------------")
	fmt.Println("Pass by value and Pass by reference is possible in golang")
	fmt.Println("The pass by value to the function cannot be modified since it is in formal scope")
	fmt.Printf("The value before the function call with pass by value is %d\n", x)
	setXPbV(x)
	fmt.Printf("The value after the function call with pass by value is %d\n", x)
	fmt.Println("However, when the function takes the reference, the value can be modified")
	fmt.Printf("The value before the function call with pass by reference is %d\n", x)
	setXPbR(&x)
	fmt.Printf("The value after the function call with pass by reference is %d\n", x)
	fmt.Println("------------------------------------------------------------")
	fmt.Println("Golang does not support default and optional parameters and method overloading")
	fmt.Print("However it accepts variadic function which is basically ")
	fmt.Println("unlimited variables with the same type and the type is indicated at the end")
	fmt.Println("sumList function can take unlimited variables")
	fmt.Printf("sumList() is %d\n", sumList())
	fmt.Printf("sumList(56,89) is %d\n", sumList(56,89))
	fmt.Printf("sumList(1,25,46,77) is %d\n", sumList(1,25,46,77))
	fmt.Println("------------------------------------------------------------")
	fmt.Println("The golang supports the closure with the anonymous function")
	fmt.Print("Anonymous function is the function returns another function with no variable name ")
	fmt.Println("so the name of the function will be the name of the variable")
	anon := anon_func()
	fmt.Printf("The result of the anon_func which returns anonymous function is %d\n", anon())
}
