<?php


namespace AnthraxisBR\PHP7xTo74Conversor\Php;


class Attribute
{

    const startArray = '[';

    const endArray = ']';

    const endAttribute = ';';

    public function __construct(array $startingLines, int $startingIndex)
    {
        $this->findAttribute($startingLines, $startingIndex);
    }

    public function findAttribute(array $startingLines, int $startingIndex)
    {
        $endIndex = $this->getEndAttributeIndex($startingLines, $startingIndex);
        foreach ($startingLines as $startingLine) {
            
        }
    }

    private function getEndAttributeIndex(array $startingLines, int $startingIndex) : int
    {
        for ($i = $startingIndex; $i <= count($startingLines); $i++) {
            $lastChar = substr($startingLines[$i], -1);
            if($lastChar === $this::endAttribute){
                return $i;
            }
        }
    }

}