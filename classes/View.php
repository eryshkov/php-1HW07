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

    protected function putAtBuffer($template):void
    {
        ob_start( null,null,PHP_OUTPUT_HANDLER_CLEANABLE | PHP_OUTPUT_HANDLER_REMOVABLE);
        $data = serialize($this->storage[$template]);
        echo $data;
    }

    public function display(string $template):void
    {
        echo $this->render($template);
    }

    public function render(string $template):string
    {
        $this->putAtBuffer($template);
        return include  TEMPLATES_FOLDER . $template;
    }
}