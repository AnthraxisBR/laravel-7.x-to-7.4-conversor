<?php


namespace AnthraxisBR\PHP7xTo74Conversor\Php;

class ClassAttributes
{

    private array $attributesTypes = [
        'private', 'protected', 'public'
    ];


    public function lineHasAttribute(string $line) : bool
    {
        return preg_match("~\b({$this->implodeAvailableAttributesTypes()})\b~i", $line);
    }

    public function implodeAvailableAttributesTypes() : string
    {
        return implode('|', $this->getAttributesTypes());
    }

    /**
     * @return array
     */
    public function getAttributesTypes(): array
    {
        return $this->attributesTypes;
    }

    /**
     * @param array $attributesTypes
     */
    public function setAttributesTypes(array $attributesTypes): void
    {
        $this->attributesTypes = $attributesTypes;
    }
}