git filter-branch --index-filter 'git update-index --remove ToDo' HEAD
git push --force --verbose --dry-run
git push --force
