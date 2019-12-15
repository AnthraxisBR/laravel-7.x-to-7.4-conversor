<?php


namespace AnthraxisBR\PHP7xTo74Conversor\Php;


class _Class
{

    public string $class;

    public ClassAttributes $classAttributes;

    public function __construct(string $class)
    {
        $this->setClass($class);
    }

    /**
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * @param string $class
     */
    public function setClass(string $class): void
    {
        $this->class = $class;
    }

    /**
     * @return ClassAttributes
     */
    public function getClassAttributes(): ClassAttributes
    {
        return $this->classAttributes;
    }

    /**
     * @param ClassAttributes $classAttributes
     */
    public function setClassAttributes(ClassAttributes $classAttributes): void
    {
        $this->classAttributes = $classAttributes;
    }
}