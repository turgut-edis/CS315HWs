void main() {
  /** 
    * 1 - What types are legal for subscripts?
    * 2 - Are subscripting expressions in element references range checked?
    * 3 - When are subscript ranges bound?
    * 4 - When does allocation take place?
    * 5 - Are ragged or rectangular multidimensional arrays allowed, or both?
    * 6 - Can array objects be initialized?
    * 7 - Are any kind of slices supported?
    * 8 - Which operators are provided? 
  */
  //Create array with 6 elements
  var arr = [1, 2, 3, 4, 5, 6];
  print(arr);

  //1 - What types are legal for subscripts?
  //Only integers are legal for subscripts
  var element = arr[3];
  print(element);

  //2-Are subscripting expressions in element references range checked?
  //The range is checked in Dart. Program will throw error if the index is out of the bounds of the array
  print(arr[4]);

  //3-When are subscript ranges bound?
  //The array is heap-dynamic in Dart and the ranges are dynamic and bound at runtime
  var exampleArray = [6, 7, 8];
  print(exampleArray);

  //4-When does allocation take place?
  //Allocation is dynamic and takes place at runtime
  var exampleArray1 = [9, 10, 11];
  print(exampleArray1);

  //5-Are ragged or rectangular multidimensional arrays allowed, or both?
  //Both the regged and rectangular multidimensional arrays are allowed in Dart.
  List<List<int>> rectArray = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
  ];
  List<List<int>> regArray = [
    [1, 2, 3],
    [4, 5, 6, 7],
    [7],
    [8, 9]
  ];
  print(rectArray);
  print(regArray);

  //6-Can array objects be initialized?
  //The array objects can be initialized both with function and implicitly.
  var dynArray = List.generate(6, (index) => index + 1);
  var stArray = [1, 2, 3, 4, 5, 6];
  print(dynArray);
  print(stArray);

  //7-Are any kind of slices supported?
  //The slicing is possible with .sublist method in Dart
  var arr2 = List.generate(10, (index) => index * 1);
  print(arr2.sublist(4, 7));
  
  //8-Which operators are provided?
  //The array operations are not provided in Dart
}