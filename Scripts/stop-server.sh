#!/bin/bash
existerver = `pgrep nginx`
if [[-n $existerver ]]; then
   sudo systemctl stop nginx
fi
