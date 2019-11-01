#!/bin/sh
CONTAINER="container_name"
REPO="user/repo"
docker stop $CONTAINER
docker rmi $REPO
docker run -d --name $CONTAINER --rm -p 443:443 -p 80:80 $REPO
