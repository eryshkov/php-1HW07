<?php

class View
{

    /**
     * @var []
     */
    protected $storage;

    public function assign(string $name, $value): View
    {
        $this->storage[$name] = $value;
        return $this;
    }

    public function render(string $template):string
    {
        ob_start();
        $this->display($template);
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }

    public function display(string $template):View
    {
        require_once $template;
        return $this;
    }
}