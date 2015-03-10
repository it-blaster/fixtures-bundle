FixturesBundle
====================

Symfony2 bundle for propel fixtures

Installation
------------

Добавьте <b>ItBlasterFixturesBundle</b> в `composer.json`:

```js
{
    "require": {
        "it-blaster/fixtures-bundle": "dev-master"
	},
}
```

Теперь запустите композер, чтобы скачать бандл командой:

``` bash
$ php composer.phar update it-blaster/fixtures-bundle
```

Композер установит бандл в папку проекта `vendor/it-blaster/fixtures-bundle`.

Далее подключите бандл в ядре `AppKernel.php`:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new ItBlaster\FixturesBundle\ItBlasterFixturesBundle(),
    );
}
```

Credits
-------

It-Blaster <it-blaster@yandex.ru>