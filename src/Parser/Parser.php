<?php

namespace AnthraxisBR\PHP7xTo74Conversor\Parser;

/**
 * Class Parser
 * @package AnthraxisBR\PHP7xTo74Conversor\Parser
 */
class Parser
{
    /**
     * @var string
     */
    public string $filePath;

    /**
     * @var string
     */
    public string $fileContents;

    /**
     * @var array
     */
    public array $explodedFileContents;

    /**
     * Parser constructor.
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->setFilePath($filePath);

        $this->readFile();
    }

    /**
     *
     */
    public function readFile() : void
    {
        $this->setFileContents(file_get_contents($this->getFilePath()));
    }

    public function explodeFileContents() : void
    {
        $this->setExplodedFileContents(preg_split('/\r\n|\r|\n/', $this->getFileContents()));
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @param string $filePath
     */
    public function setFilePath(string $filePath): void
    {
        $this->filePath = $filePath;
    }

    /**
     * @return string
     */
    public function getFileContents(): string
    {
        return $this->fileContents;
    }

    /**
     * @param string $fileContents
     */
    public function setFileContents(string $fileContents): void
    {
        $this->fileContents = $fileContents;
    }

    /**
     * @return array
     */
    public function getExplodedFileContents(): array
    {
        return $this->explodedFileContents;
    }

    /**
     * @param array $explodedFileContents
     */
    public function setExplodedFileContents(array $explodedFileContents): void
    {
        $this->explodedFileContents = $explodedFileContents;
    }
}