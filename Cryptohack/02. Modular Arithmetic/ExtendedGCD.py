#Extended Euclidian Algorithm writes a GCD between two numbers as a Linear Combinatio
#Linear Combination can be written as a * u + b * v = gcd(a,b)

def gcd(a,b):
    if(b > a):
        a,b = b,a
    while(b > 0):
        a, b = b, a % b
    return a

def extendedGCD(a, b):
    gcd = gcd(a,b)

p = 26513
q = 32321

