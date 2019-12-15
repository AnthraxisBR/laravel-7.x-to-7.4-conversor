<?php

namespace AnthraxisBR\PHP7xTo74Conversor\Parser;

use AnthraxisBR\PHP7xTo74Conversor\Php\ClassAttributes;
use AnthraxisBR\PHP7xTo74Conversor\Php\ClassFunctions;

class ParseClass extends Parser
{

    public ClassAttributes $classAttributes;

    public ClassFunctions $classFunctions;

    public int $classInitIndex;

    public int $firstFunctionClassIndex;

    public function __construct(string $filePath)
    {
        parent::__construct($filePath);

        $this->setClassAttributes(new ClassAttributes());
    }

    public function getAttributes()
    {
        for ($i = $this->getClassInitIndex(); $i <= $this->getFirstFunctionClassIndex(); $i++) {
            if($this->getClassAttributes()->lineHasAttribute($this->getLineContectFromIndex($i))){
                echo $this->getLineContectFromIndex($i);
            }
        }
    }

    /**
     *
     */
    public function findClassInitIndex()
    {
        foreach ($this->getExplodedFileContents() as $line => $string){
            if(strpos($string, 'class ') !== false){
                $this->setClassInitIndex($line);
                break;
            }
        }
    }

    /**
     *
     */
    public function findFirstFunctionIndex() : void
    {
        foreach ($this->getExplodedFileContents() as $line => $string){
            if(strpos($string, ' function ') !== false){
                $this->setFirstFunctionClassIndex($line);
                break;
            }
        }
    }

    /**
     * @param int $index
     * @return mixed
     */
    public function getLineContectFromIndex(int $index) : string
    {
        return $this->getExplodedFileContents()[$index];
    }

    /**
     * @param ClassAttributes $classAttributes
     */
    public function setClassAttributes(ClassAttributes $classAttributes): void
    {
        $this->classAttributes = $classAttributes;
    }

    /**
     * @return ClassAttributes
     */
    public function getClassAttributes(): ClassAttributes
    {
        return $this->classAttributes;
    }

    /**
     * @return ClassFunctions
     */
    public function getClassFunctions(): ClassFunctions
    {
        return $this->classFunctions;
    }

    /**
     * @param ClassFunctions $classFunctions
     */
    public function setClassFunctions(ClassFunctions $classFunctions): void
    {
        $this->classFunctions = $classFunctions;
    }

    /**
     * @param int $firstFunctionClassIndex
     */
    public function setFirstFunctionClassIndex(int $firstFunctionClassIndex): void
    {
        $this->firstFunctionClassIndex = $firstFunctionClassIndex;
    }

    /**
     * @return int
     */
    public function getFirstFunctionClassIndex(): int
    {
        return $this->firstFunctionClassIndex;
    }

    /**
     * @return int
     */
    public function getClassInitIndex(): int
    {
        return $this->classInitIndex;
    }

    /**
     * @param int $classInitIndex
     */
    public function setClassInitIndex(int $classInitIndex): void
    {
        $this->classInitIndex = $classInitIndex;
    }
}