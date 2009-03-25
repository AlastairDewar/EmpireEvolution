#!/bin/bash

MESSAGE=$1

if [ "$MESSAGE" = "" ]; then
  # Show help and exit
  echo "Please enter the commit message"
fi

echo "Submitting to SVN Repository ..."

svn commit ~/Projects/Empire\ Evolution/ -m "$MESSAGE" -q

echo "Submitting to Git Repository ..."

git svn fetch
git add .
git commit -m "$MESSAGE"

echo "Empire Evolution repositories have been successfully updated."
