<?php

class View
{

    /**
     * @var []
     */
    public $storage;

    public function assign($name, $value): void
    {
        $this->storage[$name] = $value;
}
}