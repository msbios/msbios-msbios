#!/usr/bin/env bash

bash $( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null && pwd )/msbios.sh
git add . && git commit -a -m "Lazy Composer MSBios Commit Script" && git push;