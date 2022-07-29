<?php

class Collection
{
    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }


    public function sum($key)
    {

         return array_sum(array_map(function($item) use ($key)
         {
            return $item->$key;
         }, $this->items));
    }

    /**
     * or
     * public function sum($key) 
     *
     *   { 
     *          
     *   return array_sum(array_map(fn($item) => $this->$key, $this->items)); 
     *   
     *   } 
     */
}

class VideosCollections extends Collection
{
    public function length()
    {
        return $this->sum('length');
    }
}

class Video
{
    public $title;

    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;

    }

}

$videos = new VideosCollections([

    new Video('Some Video', 100),
    new Video('Some Video', 200),
    new Video('Some Video', 300),
]);

echo $videos->length(); 