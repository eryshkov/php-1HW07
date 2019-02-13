<?php
include_once __DIR__ . '/../constants.php';

class View
{

    /**
     * @var []
     */
    protected $storage;

    public function __construct(string $name, $value)
    {
        $this->assign($name, $value);
    }

    public function assign(string $name, $value): void
    {
        $this->storage[$name] = $value;
    }

    public function render(string $template):string
    {
        $this->putAtBuffer($template);
        return include  TEMPLATES_FOLDER . $template;
    }

    public function display(string $template):void
    {
        echo $this->render($template);
    }

    protected function putAtBuffer($template):void
    {
        ob_start( null,null,PHP_OUTPUT_HANDLER_CLEANABLE | PHP_OUTPUT_HANDLER_REMOVABLE);
        $data = serialize($this->storage[$template]);
        echo $data;
    }
}