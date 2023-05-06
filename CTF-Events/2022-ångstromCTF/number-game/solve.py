#!user/bin/python3
from pwn import *

# =========================================================
#                          SETUP                         
# =========================================================
exe = './number-game'
host = 'challs.actf.co'
port = 31334
context.log_level = 'debug'
# io = process(exe)
io = remote(host, port)

# =========================================================
#                          LOGIC
# =========================================================

input1st = 314159265
input2nd = 513371337 - input1st
input3rd = 'the airspeed velocity of an unladen swallow'

io.sendlineafter(b'first number: ', str(input1st).encode())
io.sendlineafter(b'follow it up? ', str(input2nd).encode())
io.sendlineafter(b'the Maltese alphabet?', input3rd.encode())

io.interactive()