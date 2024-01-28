#!/bin/bash

# Replace these variables with your cPanel details
FTP_SERVER="ftp.modabpaints.com"
FTP_USERNAME=${{ secrets.USERNAME }}
FTP_PASSWORD=${{ secrets.PASSWORD }}
REMOTE_PATH="/public_html"

echo "Deploying to cPanel..."
# Add your deployment logic here, for example, using FTP
lftp -e "mirror -R -e ./ $REMOTE_PATH; quit" -u $FTP_USERNAME,$FTP_PASSWORD $FTP_SERVER
