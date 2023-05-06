#!/usr/bin/bash

USERNAME='leviathan0'
HOST='leviathan.labs.overthewire.org'
PASSWORD='leviathan0'
PORT=2223

SOLUTION='cd ./.backup; cat bookmarks.html | grep password'

# scp -P ${PORT} ${USERNAME}@${HOST}:./.backup/bookmarks.html .
sshpass -p ${PASSWORD} ssh -o StrictHostKeyChecking=no ${USERNAME}@${HOST} -p ${PORT} ${SOLUTION}