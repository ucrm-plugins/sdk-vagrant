#!/usr/bin/env bash

UISP_VERSION=${1:-1.4.2}
BOX_PATH=./boxes/${UISP_VERSION}/uisp.box
BOX_REPO=ucrm-plugins/uisp-1.4.2

vagrant cloud box show ${BOX_REPO} 2> /dev/null
[ ! $? -eq 0 ] && echo "Not Found!"
#then
#    echo "Not Found!"
#else
#    echo "Found!"
#fi


exit


if [ ! -f $BOX_PATH ];
then
    echo "Could not find a box to publish at ${BOX_PATH}"

    #select yn in "Yes" "No"; do
    while true; do
        read -p "Do you wish to package the current box? [y/N] " yn
        case $yn in
            [Yy]* ) ./package.sh ${UISP_VERSION}; break;;
            [Nn]* ) exit;;
            * ) echo "Please answer (Y)es or (N)o.";;
        esac
    done
fi

vagrant cloud publish \
    ucrm-plugins/uisp \
    $UISP_VERSION \
    virtualbox \
    ./boxes/${UISP_VERSION}/uisp.box
    --description "A clean installation of UISP ${UISP_VERSION} on Ubuntu 20.04." \
    --short-description "UISP ${UISP_VERSION}" \
    --version-description "Generated by our 'package.sh' script." \
    --release