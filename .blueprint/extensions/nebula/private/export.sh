#!/bin/bash

cd "$BLUEPRINT_EXPORT_DIRECTORY"

MINIFY() {
  local dir="$1"
  for file in "$dir"/*; do
    if [ -f "$file" ]; then
      file=$(echo "$file" | sed "s~ ~\ ~g")
      if [[ $file != *"node_modules"* ]]; then
        if [[ $file == *".js" ]]; then 
          echo -e "\x1b[34;3m - (UGLIFY-JS) ${file}"
          touch $file.bak
          ./node_modules/uglify-js/bin/uglifyjs -c -m --webkit -- $file > $file.bak
          cp $file.bak $file
          rm $file.bak
        fi
        #if [[ $file == *".css" ]]; then fi
        if [[ $file == *".html" ]]; then
          echo -e "\x1b[34;3m - (HTML-MINIFIER) ${file}"
          touch $file.bak
          ./node_modules/html-minifier/cli.js --minify-css --minify-js -- $file > $file.bak
          cp $file.bak $file
          rm $file.bak
        fi
      fi
    elif [ -d "$file" ]; then
      MINIFY "$file"
    fi
  done
}

yarn add uglify-js html-minifier -g 
MINIFY "."
rm yarn.lock
rm package.json
rm README.node_modules
rm .gitignore
rm -R node_modules