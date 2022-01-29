"""
1.How are the boolean values represented?

2.What operators are short-circuited?

3.How are the results of short-circuited operators computed? (Consider also function calls)

4.What are the advantages about short-circuit evaluation?

5.What are the potential problems about short-circuit evaluation?
"""

# 1) In Python, boolean values are represented with "True" and "False"
x = 2
print(x == 2) #Prints true
print(x == 3) #Prints false
# Also, all data types has boolean value with typecasting(coercion)
a = []
print(bool(a)) #Prints false since it is empty
a.append(5)
print(bool(a)) #Prints true
a = ""
print(bool(a)) #Prints false since it is empty
a += "s"
print(bool(a)) #Prints true
a = 0
print(bool(a)) #Prints false since it is empty
a += 45
print(bool(a)) #Prints true
print("-" * 50)

# 2) The short circuited operators are "and" and "or"
a = 47
b = 32
print(a < 50 and b > 12) # It prints true
print(a < 50 or b > 40) 
print("-" * 50)

# 3) How are the results of short-circuited operators computed? (Consider also function calls)
# 3) The results computed left to right
#This function returns false since returns the empty string
def foo():
    return ""
#This function returns true since returns the non-empty string
def foo1():
    return "a"
#For "or" operator
# First, the left expression will be computed, if it is true, the result will be it
# However, if it is false, the result will be the right expression
print(3 == 4 or foo1()) #The result is right expression since the left is false
print(3 < 4 or  foo()) #The result is left expression since it is true
#For "and" operator
#First, the left expression is calculated, if it is true, then, right expression will be computed
#However, when it is false, the result will be left expression
print(6 < 15 and foo1()) #Left is true, so right will be the result
print(foo() and 4 > 1) #Left is false, so it is the result
print("-" * 50)

# 4) It avoids computationally complex tasks.
# This function creates infinite loop
def inf_loop(x):
    if(x == 1):
        return 0
    else:
        return inf_loop(x)
a = 2
print(a < 3 or inf_loop(999999999)) #It does not calculate infinite loop because the left is true 
print(a > 3 and inf_loop(999999999)) #It does not calculate infinite loop because the left is false

#It provides a check for the left without the runtime error for the right.
def err():
    l = []
    return l[15]

print(a < 3 or err()) #It does not calculate error because the left is true
print(a > 3 and err()) #It does not calculate infinite loop because the left is false
print("-" * 50)

# 5) It can cause unexpected behavior if not used properly.
# For any function in the code snippet 
# that does some kind of allocation of system resources/memory allocation
# , we may get unexpected behavior.
# Code execution becomes less efficient with short-circuited execution paths
# because in some compilers the new checks for short-circuits are extra execution cycles in themselves.