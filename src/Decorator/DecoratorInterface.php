<?php

namespace CLImate\Decorator;

interface DecoratorInterface
{
    public function add($key, $value);

    /**
     * @return void
     */
    public function defaults();

    public function get($val);

    public function set($val);

    public function all();

    public function current();

    /**
     * @return void
     */
    public function reset();
}
