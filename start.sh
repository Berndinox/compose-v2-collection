#!/bin/bash


# Start this with "source ./start.sh"

if [ -z "$PASSWORD" ]
then
    read -p  "Enter PASSWORD:" input1
    export PASSWORD=$input1
fi

# IF OVH Storage, uncomment this!
#
#if [ -z "$OVH_PASSWORD" ]
#then
#    read -p  "Enter OVH_PASSWORD:" input2
#    export OVH_PASSWORD=$input2
#fi
#if [ -z "$OVH_USER" ]
#then
#    read -p  "Enter OVH_USER:" input3
#    export OVH_USER=$input3
#fi
#if [ -z "$OVH_TENANT" ]
#then
#    read -p  "Enter OVH_TENANT:" input4
#    export OVH_TENANT=$input4
#fi


if [[ "$(docker network ls | grep proxy 2> /dev/null)" == "" ]]; then
  docker network create proxy -d bridge
fi

for d in `ls -d */`;
do
    ( cd $d && docker-compose up -d )
done
