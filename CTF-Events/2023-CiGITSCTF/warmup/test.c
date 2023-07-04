void main(void)
{
  char local_18 [16];
  
  setvbuf(stdin,(char *)0x0,2,0);
  setvbuf(stdout,(char *)0x0,2,0);
  gets(local_18);
  return;
}

void win1(void)
{
  printf("You win! Now try to use this program to call /bin/sh");
  return;
}

void win2(char *param_1)
{
  system(param_1);
  return;
}
