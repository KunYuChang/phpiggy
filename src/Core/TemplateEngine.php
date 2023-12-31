<?php

declare(strict_types=1);

namespace Core;

class TemplateEngine
{
    private array $globalTemplateData = [];

    public function __construct(
        private string $basePath
    ) {
    }

    public function render(string $template, array $data = [])
    {
        // extract 可以依據陣列中的 key 創建變數。
        // EXTR_SKIP 代表如果 extract 創建的變數名稱與原本的存在的變數相同時，則忽略不創建。
        extract($data, EXTR_SKIP);
        extract($this->globalTemplateData, EXTR_SKIP);

        ob_start();
        include $this->fullPath($template);
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
    }

    public function fullPath(string $path)
    {
        return "{$this->basePath}/{$path}";
    }

    public function addGlobal(string $key, mixed $value)
    {
        $this->globalTemplateData[$key] = $value;
    }
}
