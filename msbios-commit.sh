#!/usr/bin/env bash

bash $(pwd)/msbios.sh
git add . && git commit -a -m "Lazy Composer MSBios Commit Script" && git push;