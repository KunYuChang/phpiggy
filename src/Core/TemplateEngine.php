<?php

declare(strict_types=1);

namespace Core;

class TemplateEngine
{
    public function __construct(
        private string $basePath
    ) {
    }

    public function render(string $template, array $data = [])
    {
        // extract 可以依據陣列中的 key 創建變數。
        // EXTR_SKIP 代表如果 extract 創建的變數名稱與原本的存在的變數相同時，則忽略不創建。
        extract($data, EXTR_SKIP);
        include "{$this->basePath}/{$template}";
    }
}
