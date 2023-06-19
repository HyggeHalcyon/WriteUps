#!usr/bin/python3
from pwn import *

# =========================================================
#                          SETUP                         
# =========================================================
exe = './chall'
elf = context.binary = ELF(exe, checksec=True)
libc = '/lib/x86_64-linux-gnu/libc.so.6'
libc = ELF(libc, checksec=False)
context.log_level = 'debug'
host, port = 'chall.server', 1337

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
#                         EXPLOITS
# =========================================================
io = start()
rop = ROP(exe)

# Got manually through cyclic gdb-pwndbg
offset = 1337

# flattening  payload here
payload = flat({
    offset: [
        0x1337
    ]
})

# sending payload
io.sendlineafter(b'>', payload)

io.interactive()