#!/bin/bash
docker build -t f4rr4ll/appweb:1.0/ .
docker build -t f4rr4ll/appmysql:1.0/ .

docker push f4rr4ll/appweb:1.0
docker push f4rr4ll/appmysql:1.0

kubectl apply -f ./services.yml

kubectl apply -f ./deployment.yml