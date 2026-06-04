#!/bin/bash
set -___

TAG=$(git describe --tags --abbrev=0)
echo "Deploying version: $TAG"

docker build -t myapp:___ .
docker push myapp:$TAG

kubectl set image deployment/myapp myapp=myapp:___ --namespace=production
kubectl rollout ___ deployment/myapp --namespace=production
