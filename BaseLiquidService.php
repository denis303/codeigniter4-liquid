<?php

namespace Denis303\Liquid;

use Liquid\Template;

abstract class BaseLiquidService
{

    public $templatesPath;

    public function renderContent(string $content, array $params = [], $path = null) : string
    {
        $template = new Template($path ?? $this->templatesPath);

        $template->parse($content);

        return $template->render($params);
    }

    public function renderFile(string $filename, array $params = [], $path = null) : string
    {
        $content = file_get_contents($filename);

        return $this->renderContent($content, $params, $path ?? path_info($filename, PATHINFO_DIRNAME));
    }

}