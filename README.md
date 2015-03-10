FixturesBundle
====================

Symfony2 bundle for propel fixtures.
Т.к. обычный таск `propel:fixtures:load` выдаёт ошибку `Attempted to call method "getPeerClassname" on class "Propel\Runtime\Map\TableMap".`, чтобы его поправить пришлось переопределить таск и файлы папки `DataFixtures/Loader`.
Всё это вынесено в отдельный бандл <b>FixturesBundle</b>.

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

Usage
------------
Таск загрузки fixtures запускается командов `php app/console it-blaster:fixtures:load @AppMainBundle`, где @AppMainBundle имя бандла, где у вас лежат файлы-fixtures.


Credits
-------

It-Blaster <it-blaster@yandex.ru>