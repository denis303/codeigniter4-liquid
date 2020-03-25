<?php

namespace Denis303\Liquid;

abstract class View implements ViewInterface
{

    abstract function toString() : string;

}