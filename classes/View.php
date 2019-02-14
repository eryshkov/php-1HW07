<?php

class View
{
    protected $storage = [];

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
        foreach ($this->storage as $key => $value) {
            $$key = $value;
        }
        require_once $template;
        return $this;
    }
}