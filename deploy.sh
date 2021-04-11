#!/bin/bash

tar --exclude ".env" --exclude "public/storage" -czf plutool.tar.gz .

scp -P 65002 ./plutool.tar.gz u648750589@31.170.166.124:~/public_html/public_html/tools/plutool/

ssh -p 65002 u648750589@31.170.166.124 "cd ~/public_html/public_html/tools/plutool/;tar -xvzf plutool.tar.gz;php artisan storage:link"
