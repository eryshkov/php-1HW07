<?php
include_once __DIR__ . '/../constants.php';

class View
{

    /**
     * @var []
     */
    protected $storage;

    public function assign(string $name, string $value): void
    {
        $this->storage[$name] = $value;
    }

    public function display(string $template):void
    {
        echo $this->render($template);
    }

    public function render(string $template):string
    {
        return include  TEMPLATES_FOLDER . $template;
    }
}