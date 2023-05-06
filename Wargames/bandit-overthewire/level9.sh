#!/usr/bin/bash

USERNAME='bandit9'
HOST='bandit.labs.overthewire.org'
PASSWORD='EN632PlfYiZbn3PhVK3XOGSlNInNE00t'
PORT=2220

SOLUTION=''

sshpass -p ${PASSWORD} ssh -o StrictHostKeyChecking=no ${USERNAME}@${HOST} -p ${PORT} #${SOLUTION}