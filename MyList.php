<?php

class MyList
{
    const DEFAULT_CAPACITY = 10;
    public $size;
    public $arrayElement;

    public function __construct()
    {
        $this->size = 0;
        $this->arrayElement = array("Quang", 3, "Huy", 4);
    }

    public function getArrayElement()
    {
        return $this->arrayElement;
    }

    public function add($index, $array)
    {
        if ($index >= 0 && $index < count($this->arrayElement)) {
            array_splice($this->arrayElement, $index, 0, $array);
        } else {
            echo "Index less than 0 or more than Array length";
        }
        return $this->arrayElement;
    }
}

?>
