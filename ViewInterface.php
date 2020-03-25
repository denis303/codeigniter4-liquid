<?php

namespace Denis303\Liquid;

interface ViewInterface
{

    public function getTemplatesPath() : ?string;

    public function findFile(string $template) : ?string;

    public function toString() :  string;

    public function renderFile(string $filename, array $params = []) :  string;

    public function render(string $template, array $params = []) :  string;

}