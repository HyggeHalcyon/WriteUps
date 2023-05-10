p = 29

for a in range(0, p):
    if(pow(a, 2, p) == 18 % p):
        print(a)

ints = [14, 6, 11]
residue_roots = [[], [], []]

for i in range(0, 3):  
    for a in range(0, p):
        if(pow(a, 2, p) == ints[i] % p):
            residue_roots[i].append(a)

for i in range(0, 3):
    if residue_roots[i]:
        for j in residue_roots[i]:
            print(f'Quardratic Residue: {j}')
        print(f'Flag: {min(residue_roots[1])}')