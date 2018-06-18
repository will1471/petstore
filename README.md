# PetStore

Playing around with building a server from an [OpenAPI Specification](https://github.com/OAI/OpenAPI-Specification).


## Files

- `build.sh` builds generated code, starts a server, calls an endpoint
  - downloads tools
  - downloads pet store example schema
  - builds symfony bundle package from schema
  - creates a symfony project and imports the generated bundle and the implementation bundle (will1471-petstoreBundle) 
- `clean.sh` removes built code
- `will1471-petstoreBundle` implementations of the generated API interfaces
- `php-symfony-config.json` config for OpenAPI code generator
- `AppKernel.php` - adds bundles to symfony project


## Issues

Generated Controller references `container` property but it does not exist.


Some of the generated class names are invalid, (missing leading ` \ `.)


Authentication and Authorization happen in the API Interface via eg `setapi_key`
, which then presumably needs to be checked in the API method (eg 
`findPetsByTags`.) I've not yet found an elegant way to apply auth checks across
all endpoints.


Pet Id is defined as an int, setting it to a string appears to cast to 0, it
would be good if it could throw errors.


```php
    public function findPetsByTags(array $tags, &$responseCode, array &$responseHeaders)
    {
        $pet = new Pet();
        $pet->setId("adf");
        $pet->setName('Some Pet');
        return [$pet];
    }
```