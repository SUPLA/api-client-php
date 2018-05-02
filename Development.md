# Regenerate the Client:

1. Download resolved JSON API Specification from [SwaggerHub](https://app.swaggerhub.com/apis/supla/supla-cloud-api) and save it as `swagger.json` in project's root.
1. Download `swagger-codegent-cli` jar file from the [Maven repo](http://central.maven.org/maven2/io/swagger/swagger-codegen-cli/) and save it as `swagger-codegen.jar` in project's root.
1. Make sure you have `java` installed and available in your command line.
1. Run `composer install`
1. Run `composer run-script generate`
1. Declare all possibly new endpoints in the `SuplApi` class PHPDOC.
1. Review, commit and push API changes. 
