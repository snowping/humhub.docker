# Requirements

## Linux

* Newest docker for distribution: https://docs.docker.com/engine/installation/linux/ubuntulinux/

## Windows
* Docker for Windows (Windows 10 or newer)
* Download: https://docs.docker.com/engine/installation/windows/#/docker-for-windows

## OSX

* Docker for Mac (Yosemite or newer)
* Download: https://docs.docker.com/engine/installation/mac/#/docker-for-mac

# Administration

## Enable debug mode

* Copy ./app/templates_for_devmode/protected/* to ./app/src/protected/ (contains dev config and module generator)
* Enable module generator using administration panel

## Develop new module

* Navigate to index.php?r=gii
* Click on start at "HumHub Module Generator"
* Rename "example" to whatever module name you like
* Click on preview and generate basic module

## Run bash within app root directory

    docker exec -it <container_id of app> bash

## Remove current db configuration (start from scratch)
    rm ./app/src/protected/config/dynamic.php

## Trigger db migration
    docker exec -it <container_id> bash
    php yii migrate/up --includeModuleMigrations=1
