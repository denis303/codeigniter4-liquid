<?php

namespace Denis303\Liquid;

use Exception;

abstract class View implements ViewInterface
{

    public $templatesPath;

    abstract function toString() : string;

    public function renderFile(string $filename, array $params = []) : string
    {
        return service('liquid')->renderFile($filename, $params);
    }

    public function render(string $template, array $params = []) : string
    {
        $filename = $this->findFile($template, true);

        return $this->renderFile($filename, $params);
    }

    public function getTemplatesPath() : ?string
    {
        return $this->templatesPath;
    }

    public function findFile(string $template, $throwExceptions = true) : ?string
    {
        $filename = $this->getTemplatesPath() . '/' . $template;

        if (is_file($filename))
        {
            return $return;
        }

        if ($throwExceptions)
        {
            throw new Exception('File not found: ' . $template);
        }

        return null;
    }

}