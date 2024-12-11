#!/bin/bash

# Check the status of the working directory
STATUS="$(git status --porcelain)"

# Ensure the working tree is clean
if [[ -z $STATUS ]]; then
    echo "Working tree is clean. Proceeding with deployment..."

    # Check if remote branch gh-pages exists and delete if present
    if git ls-remote --exit-code --heads origin gh-pages &>/dev/null; then
        echo "Deleting existing gh-pages branch..."
        git push origin --delete gh-pages
    fi

    # Force-add build_production folder
    echo "Adding build_production folder..."
    git add -f build_production

    # Commit the changes
    echo "Committing build..."
    git commit -m "Build for deploy"

    # Push subtree to gh-pages
    echo "Pushing subtree to gh-pages..."
    git subtree push --prefix build_production origin gh-pages

    # Revert the commit to avoid dirtying the working tree
    echo "Reverting temporary commit..."
    git reset --soft HEAD~
    git reset

    echo "Deployment successful."
else
    echo "Need a clean working directory to publish. Aborting."
fi

