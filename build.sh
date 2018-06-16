#!/usr/bin/env bash

set -x

# download code generator

if [ ! -f openapi-generator-cli.jar ]; then
    wget http://central.maven.org/maven2/org/openapitools/openapi-generator-cli/3.0.1/openapi-generator-cli-3.0.1.jar -O openapi-generator-cli.jar
fi

# download symfony project generator

if [ ! -f symfony ]; then
    curl -LsS https://symfony.com/installer -o symfony
    chmod a+x symfony
fi

# download the api spec

if [ ! -f ./openapi3/openapi.yaml ]; then
    rm -r ./openapi3
    mkdir openapi3
    cd openapi3
    wget https://raw.githubusercontent.com/OpenAPITools/openapi-petstore/master/src/main/resources/openapi.yaml -O openapi.yaml
    cd ..
fi

# build server bundle from api spec

rm -r ./will1471-petstoreServerGenBundle
java -jar openapi-generator-cli.jar generate -i ./openapi3/openapi.yaml -g php-symfony -o ./will1471-petstoreServerGenBundle/ -c ./php-symfony-config.json


# create symfony project

rm -r ./will1471-petstoreServer
./symfony new will1471-petstoreServer 3.4

# update the composer file to import generated bundle and implementation bundle

jq '.repositories=[{"type":"path","url":"./../will1471-petstoreServerGenBundle"},{"type":"path","url":"./../will1471-petstoreBundle"}] | ."prefer-stable"=true | ."minimum-stability"="dev" | .require."will1471/petstoreServerGenBundle"="*" | .require."will1471/petstoreBundle"="*"' ./will1471-petstoreServer/composer.json > tmp.json
mv tmp.json ./will1471-petstoreServer/composer.json
cd will1471-petstoreServer
composer update
cd ..

# tell symfony to use the bundles

diff ./AppKernel.php ./will1471-petstoreServer/app/AppKernel.php
cp ./AppKernel.php ./will1471-petstoreServer/app/AppKernel.php

# register generated routes

echo "pet_store_server_gen_bundle:" >> ./will1471-petstoreServer/app/config/routing.yml
echo "    resource: \"@PetStoreServerGenBundleBundle/Resources/config/routing.yml\"" >> ./will1471-petstoreServer/app/config/routing.yml


cd will1471-petstoreServer
composer update
./bin/console server:start

sleep 2

curl -i localhost:8000/pet/findByTags?tag=foo -H 'Accept: application/json' -H 'Authorization: Bearer foo'

sleep 2
./bin/console server:stop
cd ..