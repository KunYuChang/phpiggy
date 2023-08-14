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

php What is escaping?

Escaping is the process converting a character into a different character for security.

[htmlspecialchars](https://www.php.net/manual/en/function.htmlspecialchars.php)

php What is XSS?

XSS is short for cross-site scripting. It's when malicious code is inserted into a template.

## Containers and Dependency Injection

依賴注入是一種軟體設計技巧，管理物件之間的依賴關係，實務上的運用原理為將一個物件所需要的相依物件通過外部方式（例如構造函數、方法參數等）傳遞給該物件，而不是讓該物件自行創建。這樣可以減少物件之間的耦合，增加程式碼的可測試性和可維護性。

容器則是依賴注入的實現方式之一。它是一個物件，包含了創建其他類別實例的指示，通常這些指示會在容器定義檔中配置。當我們需要某個類別的實例時，我們不直接在程式碼中創建，而是通過函數來動態生成所需的實例。

這種從函數中創建出實例的方式，也被稱為工廠設計模式。設計模式是軟體工程中的一種經過概括和抽象的解決特定軟體設計問題的常見方法或指導原則。這些模式通常是過去實踐經驗的總結，被廣泛接受並被證明是有效的解決方案，可以用於許多不同情境的軟體設計中。

## Reflective Programming

A feature for a program to look at itself and inspect its properties.

## Middleware

php What is middleware?

A function that can run before or after a controller has been executed.