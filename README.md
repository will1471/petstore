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

Generated Controller references container property but it does not exist.
