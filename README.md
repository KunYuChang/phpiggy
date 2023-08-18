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

## Form Validation

- GET - Retrieve a resource
- POST - Create/Update a resource
- DELETE - Delete a resource

## Understanding Services

Learn how services keep our codebase clean and concise.

重新思考控制器（Controllers）

控制器負責處理頁面的邏輯，但這是一個相當寬泛的定義，因為不同頁面的複雜程度有所不同。有些頁面可能只是呈現 HTML 內容，而其他頁面則可能涉及上傳文件、驗證表單資料、處理交易，甚至是播放影片等操作。單個頁面上可能需要執行多種不同的操作，這可能導致控制器變得極長，甚至長達數百行。大多數開發者（Developers）認為這種情況並不理想。

為了避免這種情況，有一種被稱為 "Shinny Controllers, Fat Services" 的最佳實踐方法。這種方法的核心理念是，讓控制器只負責接收請求（Requests）並返回響應（Responses），而將其他具體的操作委託給服務（services）來處理。這樣可以使控制器保持精簡，將具體的業務邏輯與處理過程放在服務中，從而使程式碼更加組織有序且易於維護。

## php What is the RuntimeException category?

Thus category is meant for errors that will only occur while the application is running. It's meant for code that does not have to be fixed, but handled.

[RuntimeException](https://www.php.net/manual/en/class.runtimeexception.php)

## php What is an HTTP status code?

An HTTP status code is a three-digit integer to inform the browser the status of a request.

## php Types of Status Codes

- 1xx - information
- 2xx - Success
- 3xx - Redirection
- 4xx - Client Error
- 5xx - Server Error

[HTTP response status codes](https://developer.mozilla.org/en-US/docs/Web/HTTP/Status)

## php What is PRG?

PRG is a pattern that stands for POST, Redirect, GET.

該模式的優點是可以防止使用者重複提交表單。

## HTTP Referrer

[HTTP Referrer](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Referer)

HTTP Referrer（HTTP 引薦人）是一種在網際網路通訊協定中的一個標頭字段，它通常會被瀏覽器或用戶端應用程式在發送請求時附加在請求中。這個字段包含了先前網頁的網址，即從哪個頁面跳轉到了當前頁面。這對於網站分析、廣告追蹤和頁面間的流量控制等都非常有用。例如，當你點擊一個連結或者在網址欄輸入網址並按下 Enter 鍵時，瀏覽器會將來源網址作為 Referrer 發送給目標網址的伺服器，從而目標網址的伺服器知道了你是從哪個頁面跳轉過來的。

然而，需要注意的是，由於隱私和安全的考慮，現在許多瀏覽器和網站已經限制了對於 Referrer 的傳遞，特別是當你從加密連接（HTTPS）的網址跳轉到非加密連接（HTTP）的網址時，通常不會將 Referrer 傳遞過去，以保護使用者的隱私。

## php What are sessions?

Sessions are feature for storing data longer than a single request. They are destroyed after a user closes a browser.