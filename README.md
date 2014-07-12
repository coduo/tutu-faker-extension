# TuTu faker extension

This extensions integrates [fzaninotto/faker](https://github.com/fzaninotto/Faker) with TuTu.

To use extension simply add it to TuTu composer dependencies:

```
    "require": {
        "coduo/tutu-faker-extension": "1.0.*@dev-master"
    }
```

Update composer

```
$ composer update
```

Enable extension in TuTu configuration

```
# config/config.yml

extensions:
    Coduo\TuTu\Extension\Faker: ~
```

From now you should be able to access ``faker`` object in twig templates.
Example:

```
hello_world:
  path: /hello/world
  content: |
    Hello {{ faker.firstName }}
```
