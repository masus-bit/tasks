<?php
class ArrayWorker
{
    protected $array = [];

    protected function fill()
    {
        for ($i = 0; $i <= rand(1, 100); $i++) {
            array_push($this->array, rand(1, 1000));
        }

    }
    protected function reindex()
    {
        $maxI = array_search(max($this->array), $this->array);
        $minI = array_search(min($this->array), $this->array);
        $max = $this->array[$maxI];
        $min = $this->array[$minI];
        $this->array[$maxI] = $min;
        $this->array[$minI] = $max;
        var_dump($this->array);
    }
    public function dump()
    {
        $sum = array_search(max($this->array), $this->array) + array_search(min($this->array), $this->array);
        var_dump($sum);
    }
    public function __construct()
    {
        $this->fill();
        $this->reindex();
    }
}
