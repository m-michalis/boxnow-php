#!/usr/bin/env bash
find . -mindepth 1 -maxdepth 1 ! -iname "*generate*" ! -iname "*partner_api*" ! -iname ".git" ! -iname ".idea" -exec rm -rf {} \;

wget https://www.boxnow.gr/media/yaml/partner_api_1.65.yaml -O partner_api.yaml

docker run --rm -v "${PWD}:/local" openapitools/openapi-generator-cli generate \
    -i /local/partner_api.yaml \
    -g php \
    -o /local/ \
    -c /local/generate-config.yaml \
    --invoker-package "Boxnow"

# sudo chown -R michalis:michalis .
