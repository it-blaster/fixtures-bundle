FixturesBundle
====================

[![Build Status](https://scrutinizer-ci.com/g/it-blaster/fixtures-bundle/badges/build.png?b=master)](https://scrutinizer-ci.com/g/it-blaster/fixtures-bundle/build-status/master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/it-blaster/fixtures-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/it-blaster/fixtures-bundle/?branch=master)

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


Dump - Создание фикстур
------------
Таск создания fixtures запускается командой `php app/console it-blaster:fixtures:dump`. Файл с фикстурами будет создан в `app/propel/fixtures`.


Load - Загрузка из фикстур в базу
------------
Таск загрузки fixtures запускается командой `php app/console it-blaster:fixtures:load @AppMainBundle`, где @AppMainBundle имя бандла, где у вас лежат файлы-fixtures. По умолчанию файлы-fixtures будут браться из папки `app/propel/fixtures`.


Credits
-------

It-Blaster <it-blaster@yandex.ru>