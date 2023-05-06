#!/usr/bin/bash

USERNAME='leviathan1'
HOST='leviathan.labs.overthewire.org'
PASSWORD='PPIfmI1qsA'
PORT=2223

SOLUTION=''

sshpass -p ${PASSWORD} ssh -o StrictHostKeyChecking=no ${USERNAME}@${HOST} -p ${PORT} #${SOLUTION}