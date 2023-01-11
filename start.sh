#!/bin/bash
cd ./Docker/phpmyadmin
docker build -t phpmyadminssl .
cd ../projet-docker-php
docker build -t php-projet-docker-3iw3 .
cd ../../
docker compose --env-file ./variable.env up