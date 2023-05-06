# obtained through disassemble main at gdb-pwndbg
scatter_flag = ['686d657b66746361', 
                '657a656d64696170',
                '72616c6c6f646f72',
                '74656b616d6f7473',
                '6c6c616863736968',
                '6f6d615f65676e65',
                '7d737567'
                ]

flag = ''

for h in scatter_flag:
        flag += ''.join([chr(i) for i in bytes.fromhex(h)])[::-1]

print(flag)