#!user/bin/python3
from pwn import *

# =========================================================
#                          SETUP                         
# =========================================================
io = remote('challs.actf.co', 31310)
exe = './leek'
elf = context.binary = ELF(exe, checksec=False)
context.log_level = 'debug'


# =========================================================
#                         EXPLOITS
# =========================================================

# Got manually through cyclic gdb-pwndbg
offset = 72

# 
payload = flat({
    offset: [

    ]
})

io.interactive()