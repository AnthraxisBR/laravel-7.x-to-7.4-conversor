<?php


namespace AnthraxisBR\PHP7xTo74Conversor\Php;

/**
 * Class _Class
 * @package AnthraxisBR\PHP7xTo74Conversor\Php
 */
class _Class
{

    /**
     * @var string
     */
    public string $class;

    /**
     * @var ClassAttributes
     */
    public ClassAttributes $classAttributes;

    /**
     * _Class constructor.
     * @param string $class
     */
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