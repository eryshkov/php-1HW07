<?php
require_once __DIR__ . '/Article.php';
require_once __DIR__ . '/../constants.php';

class News
{
    protected $path;

    /**
     * @var Article[]
     */
    protected $newsStorage;

    public function __construct($path)
    {
        $this->path = $path;
        $this->newsStorage = $this->load($path);
    }

    public function save(): News
    {
        $result = [];
        foreach ($this->newsStorage as $article) {
            $line = implode(FILE_DELIMITER, [$article->getShortText(),
                                                        $article->getFullText()]);
            $result[] = $line;
        }
        file_put_contents($this->path, implode(PHP_EOL, $result));

        return $this;
    }

    protected function load($path): array
    {
        $dataArray = file($path, FILE_IGNORE_NEW_LINES);
        $result = [];

        foreach ($dataArray as $line) {
            [$shortText, $fullText] = explode(FILE_DELIMITER, $line);
            $article = new Article($shortText, $fullText);
            $result[] = $article;
        }

        return $result;
    }

    /**
     * @return Article[]
     */
    public function getNews(): array
    {
        return $this->newsStorage;
    }

    public function addRecord(Article $article): News
    {
        $this->newsStorage[] = $article;

        return $this;
    }
}