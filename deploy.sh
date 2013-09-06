#!/bin/bash
export GIT_SSH="ssh -oUserKnownHostsFile=/home/git/.ssh/known_hosts -i /home/git/.ssh/id_rsa"
git pull origin master