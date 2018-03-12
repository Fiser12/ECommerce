# LIN3S - E-Commerce

> Headless E-Commerce skeleton built with Sylius

## Installation

* Clone this project.

* Install dependencies:

```bash
$ composer install
```

* Generate assets:

```bash
$ sh ./etc/bash/generate_assets.sh 
```

* Run migrations (make sure DB already exists):

```bash
$ ./etc/bin/symfony-console doctrine:migrations:migrate
```

* Generate keys for JWT authentication following [LexikJWTLexikJWTAuthenticationBundle docs](https://github.com/lexik/LexikJWTAuthenticationBundle/blob/master/Resources/doc/index.md#installation)

* Start built in server:

```bash
$ ./etc/bin/symfony-console server:run
```

* You can optionally load data fixtures:

```bash
$ ./etc/bin/symfony-console sylius:install:sample-data  
``` 

> It will create two admin users with this credentials:  
> Admin: sylius / sylius   
> API: api / sylius-api
