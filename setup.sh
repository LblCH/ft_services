#!/bin/sh
echo "Starting docker daemon."
docker-machine create --driver virtualbox default
eval "$(docker-machine env default)"
echo "Starting minikube."
minikube start --vm-driver=virtualbox
minikube addons enable metallb
minikube addons enable dashboard
minikube addons enable metrics-server
minikube dashboard &

eval $(minikube docker-env)

IP=$(kubectl get node -o=custom-columns='DATA:status.addresses[0].address' | sed -n 2p)
printf "Minikube IP: ${IP}"
kubectl apply -f ./srcs/configmap.yaml
docker build -t nginx-image ./srcs/nginx
kubectl apply -f ./srcs/nginx.yaml
docker build -t mysql-image ./srcs/mysql
kubectl apply -f ./srcs/mysql.yaml
docker build -t wordpress-image ./srcs/wordpress
kubectl apply -f ./srcs/wordpress.yaml
