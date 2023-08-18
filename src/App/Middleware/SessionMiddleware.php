<?php

declare(strict_types=1);

namespace App\Middleware;

use Core\Contracts\MiddlewareInterface;
use App\Exceptions\SessionException;

class SessionMiddleware implements MiddlewareInterface
{
    public function process(callable $next)
    {
        // 檢查是否已經有一個 PHP Session 已經啟動。
        if (session_status() === PHP_SESSION_ACTIVE) {
            throw new SessionException("Session already active.");
        }

        // 檢查是否已經有輸出被送到瀏覽器，以避免在 session_start() 前設定 "Set-Cookie" 標頭時可能的問題。
        if (headers_sent()) {
            throw new SessionException("Headers already sent.");
        }

        // 啟動 PHP 會話，設定 "Set-Cookie" 標頭以儲存 Session 識別碼。
        session_start();

        // 呼叫下一個中介軟體（或請求處理程序）以繼續處理請求。
        $next();

        session_write_close();
    }
}
