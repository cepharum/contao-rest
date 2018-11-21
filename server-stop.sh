#!/bin/bash

cd $(dirname "$0")

chmod u+x $0

bin/console server:stop
