# Generator

The code inside this repo (besides the `generator` directory)
is generated with [openapi-generator](https://github.com/OpenAPITools/openapi-generator)
with the following commands.

```
wget https://repo1.maven.org/maven2/org/openapitools/openapi-generator-cli/5.4.0/openapi-generator-cli-5.4.0.jar -O openapi-generator-cli.jar
java -jar openapi-generator-cli.jar generate -i https://cloud.supla.org/api-docs/supla-api-docs-2.4.0.yaml -g php -o .. -c config.yml
```
