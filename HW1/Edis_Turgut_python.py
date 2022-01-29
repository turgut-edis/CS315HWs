#Import numpy library to create arrays
import numpy as np
import random

""" 
    1 - What types are legal for subscripts?
    2 - Are subscripting expressions in element references range checked?
    3 - When are subscript ranges bound?
    4 - When does allocation take place?
    5 - Are ragged or rectangular multidimensional arrays allowed, or both?
    6 - Can array objects be initialized?
    7 - Are any kind of slices supported?
    8 - Which operators are provided? 
"""

#Since Python has not any built-in array data type, numpy module is inspected for python arrays.
print('Python Arrays')
print("-" * 50)
#Create 1-D array with size 10
arr = np.array([random.randint(1,100) for i in range(10)])
print(arr)
print("-" * 50)

#1 - What types are legal for subscripts? 
#Only integer, range and slice types are legal for subscripting (indexing) the array.
pos = random.randint(1,len(arr))
print(arr[pos])
rng = range(4)
print(arr[rng])
print(arr[3:7])
print("-" * 50)

#2 - Are subscripting expressions in element references range checked?
#Range checking is supported in Python
#If the range is out of the index of the array, the error will be thrown.
print(arr[5])
print("-" * 50)

#3 - When are subscript ranges bound?
#The arrays in Python is heap-dynamic, then ranges are dynamic and bound at run-time
arr1 = np.array([random.randint(1,50) for i in range(5)])
print(arr1)
print("-" * 50)

#4 - When does allocation take place?
#In Python, the allocation is heap-dynamic, storage allocation is dynamic and takes place at runtime
arr2 = np.array([random.randint(1,50) for i in range(5)])
print(arr2)
print("-" * 50)

#5 - Are ragged or rectangular multidimensional arrays allowed, or both?
#Both ragged and rectangular multidimensional arrays are allowed in Python as array of array
#However, in the ragged array, the types will become list instead of numpy.ndarray
arrRect = np.array([[random.randint(1,50) for i in range(3)],[47,59,63],[77,84,91]])
arrRag = np.array([[10,11,13,46],[48,75,36],[random.randint(1,50) for i in range(3)]],dtype=np.ndarray)
print(type(arrRect[0]))
print(type(arrRag[0]))
print("-" * 50)

#6 - Can array objects be initialized?
#Yes, the array objects can be initialized when the array is created.
arr = np.array([45,32,11,36,29,76,63,88,92,100])
#Also, you can create an array with writing for loop inside
arr_withFor = np.array([random.randint(1,50) for i in range(8)])
print(arr)
print(arr_withFor)
arr1_withFor = np.array([i+1 for i in range(8)])
print(arr1_withFor)
print("-" * 50)

#7 - Are any kind of slices supported?
#Python support slices as if the data in the array is accessed.
arr1 = np.array([45,32,11,36,29,76,63,88,92,100])
print(arr1[:3])
print(arr1[4:6])
print("-" * 50)

#8 - Which operators are provided?
#In numpy of Python, all vector operators (+,-,/,*) are provided
arr1 = np.array([[1,0,0],[0,1,0],[0,0,1]])
arr2 = np.array([[10,11,12],[13,14,15],[16,17,18]])
print('arr1: ', arr1)
print('arr2: ', arr2)
arr3 = arr1 + arr2
print("arr1 + arr2 = ")
print(arr3)
arr3 = arr1 * arr2
print("arr1 * arr2 = ")
print(arr3)
arr3 = arr2 - arr1
print("arr2 - arr1 = ")
print(arr3)
arr3 = arr1 / arr2
print("arr1 / arr2 = ")
print(arr3)
print("-" * 50)

print("End of the Python Arrays")