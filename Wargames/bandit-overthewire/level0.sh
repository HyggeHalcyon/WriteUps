#!/usr/bin/bash

sshpass -p "bandit0" ssh -o StrictHostKeyChecking=no bandit0@bandit.labs.overthewire.org -p 2220

# solution:
# $ cat readme