#!/bin/bash


# Start this with "source ./start.sh"

if [ -z "$PASSWORD" ]
then
    read -p  "Enter PASSWORD:" input1
    export PASSWORD=$input1
fi

if [ -z "$OVH_PASSWORD" ]
then
    read -p  "Enter OVH_PASSWORD:" input2
    export OVH_PASSWORD=$input2
fi


if [[ "$(docker network ls | grep proxy 2> /dev/null)" == "" ]]; then
  docker network create proxy -d bridge
fi

for d in `ls -d */`;
do
    ( cd $d && docker-compose up -d )
done
