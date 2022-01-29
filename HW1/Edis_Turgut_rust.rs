fn main(){
    /** 
    1 - What types are legal for subscripts?
    2 - Are subscripting expressions in element references range checked?
    3 - When are subscript ranges bound?
    4 - When does allocation take place?
    5 - Are ragged or rectangular multidimensional arrays allowed, or both?
    6 - Can array objects be initialized?
    7 - Are any kind of slices supported?
    8 - Which operators are provided? 
     */
    //6 - Array objects can be initialized when the array is creating.
    let arr: [i32; 10] = [34,56,78,44,57,61,70,88,99,110];
    //Print the array
    println!("{:?}",arr);
    
    //1 - Only integers is legal for subscripts
    println!("first element of the array: {}", arr[0]);
    
    //2 - Range is checked when subscripting the array
    //If the index out of bounds, it will return error
    let num = arr[3];
    println!("{}",num);

    //3 - The arrays in Rust are static and stored in stack and ranges are bound at runtime.
    
    //4 - The allocation is static stack. It is bound at runtime.
    
    //5 - Only rectangular multidimensional array is supported in Rust.
    let mult = [[1;4];4];
    println!("{:?}",mult);
    
    //7 - Slicing is supported.
    let x1 = &arr[2..5];
    println!("{:?}",&x1[..]);

    //8 - It is unknown whether the arrays support array operators or not.
}