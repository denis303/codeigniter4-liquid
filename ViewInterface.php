<?php

namespace Denis303\Liquid;

interface ViewInterface
{

    public function toString() :  string;

    public function renderFile(string $template, array $params = []) :  string;

}