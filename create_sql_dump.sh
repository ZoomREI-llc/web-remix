#!/bin/bash

# Load environment variables from .env file
if [ -f .env ]; then
  export $(cat .env | grep -v '#' | awk '/=/ {print $1}')
fi

# Variables
DB_USER=$DB_USER
DB_PASSWORD=$DB_PASSWORD
DB_NAME=$DB_NAME
DB_CONTAINER_NAME=$DB_CONTAINER_NAME
DUMP_PATH=./db/backup/backup.sql

# Docker command to create the SQL dump
docker exec -i $DB_CONTAINER_NAME mysqldump -u$DB_USER -p$DB_PASSWORD $DB_NAME > $DUMP_PATH