# PrismicBundle

This Bundle integrates the http://prismic.io [php-kit](https://github.com/prismicio/php-kit) with the Symfony Framework:

## Installation

Add the following bundle as a dependency to your project:

```bash
composer require osavchenko/prismic-bundle
```

## Configuration

Full default configuration for bundle:

```yaml
prismic:
  api:
    endpoint:               ~      # Required
    access_token:           ~
    client_id:              ~
    client_secret:          ~
  oauth:
    redirect_route:         home   # Name of the route
    redirect_route_params:  []     # An array with additional route params
  cache:                    true   # Default apc built-in cache
  link_resolver_route:      detail # Name of the route
```

## LinkResolver Customization

You can override `prismic.link_resolver_route` parameter with route name to handle link resolver.
This route can have `$id` or `$slug` parameter to find document.
If you want to implement custom logic for your LinkResolver you can override service `prismic.link_resolver`.

## HOWTOs

[Quick Start](https://github.com/osavchenko/PrismicBundle/wiki/Quick-Start) contains some basic example of bundle usage

## TODOs

- [ ] Add tests
- [ ] Make caching configurable
- [ ] Check oAuth stuff and add some examples
- [ ] Provide twig templates to render documents

## Credits

Thanks to [contributors of original bundle](https://github.com/prismicio/SymfonyBundle/graphs/contributors)!
