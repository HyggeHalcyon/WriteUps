#!/usr/bin/bash

USERNAME='bandit12'
HOST='bandit.labs.overthewire.org'
PASSWORD='JVNBBFSmZwKKOP0XbFXOoW8chDz5yVRv'
PORT=2220

SOLUTION="strings data.txt | tr 'A-Za-z' 'N-ZA-Mn-za-m'"

sshpass -p ${PASSWORD} ssh -o StrictHostKeyChecking=no ${USERNAME}@${HOST} -p ${PORT} #${SOLUTION}