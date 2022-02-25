#!/usr/bin/env bash

UISP_VERSION=${1:-1.4.2}

vagrant package --output ./boxes/${UISP_VERSION}/uisp.box
