# phpiggy

Core/App.php 設計為管理框架所有的工具。

App/bootstrap.php 負責加載和配置應用程式所需的文件。

public/index.php 負責啟動應用程式。

## Autoload

1. PSR-4 並不是唯一可用於 Autoload 的標準，PHP 社群還有其他可用於 Autoload 的標準。
2. 因此，我們必須指定我們想要使用的標準。
3. key使用命名空間，value則是類別的目錄。
4. 修改Composer.json之後，需要手動更新autoload列表。
    `composer dump-autoload`

## Reference

Text Editors: 

[Visual Studio Code](https://code.visualstudio.com/)

[JetBrains PHPStorm](https://www.jetbrains.com/phpstorm/)

LAMP stack:

[XAMPP](https://www.apachefriends.org/)

[MAMP](https://www.mamp.info/en/windows/)

[Laragon](https://laragon.org/)

Configuring Virtual Hosts in Apache:

[How to Edit Hosts File](https://www.hostinger.com/tutorials/how-to-edit-hosts-file)

Configuring PHP

[php.ini](https://www.php.net/manual/en/ini.list.php)

Understanding PSR

[PHP Fig](https://www.php-fig.org/)

Installing Composer

[Packagist](https://packagist.org/)

[Composer](https://getcomposer.org/)

[composer.json schema](https://getcomposer.org/doc/04-schema.md#the-composer-json-schema)

## Routing

Apache Mod Rewrite

[Apache Module mod_rewrite](https://httpd.apache.org/docs/2.4/mod/mod_rewrite.html)

[Server Superglobal Variable](https://www.php.net/manual/en/reserved.variables.server.php)

[htaccess File](https://httpd.apache.org/docs/2.4/howto/htaccess.html)

HTTP Methods in Routes

[HTTP Request Methods](https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods)

Regular Expressions in PHP

[regex101](https://regex101.com/)

[PCRE Functions](https://www.php.net/manual/en/ref.pcre.php)

PSR-12 Auto Formatting

[PSR-12](https://www.php-fig.org/psr/psr-12/)

## Template Engines

Extracting Arrays

[extract() Function](https://www.php.net/manual/en/function.extract.php)

php PHP Behavior

By default, PHP sends content directly to the browser as its written.

php What is output buffering?

A feature for storing content in memory to prevent it from being sent to the browser immediately.