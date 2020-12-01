#!/bin/bash

CONFIG=~/.docker/config.json
if [ -f $CONFIG ]; then
  echo '[wsl-docker-wordpress] *** Removing Docker `config.json` ***'
  rm $CONFIG
fi