<?php

namespace App\Entity;

class Tag extends Persistable
{
    // Note these match item fields for convenience
    const CATEGORY_ITEM_LOCATION = 'locations';
    const CATEGORY_ITEM_TYPE = 'types';

    /** @var string Tag type, one of TAG_CATEGORY_* */
    protected $category = self::CATEGORY_ITEM_TYPE;

    /** @var string */
    protected $name = '';

    /** @var int */
    protected $count = 0;

    public function setCategory(string $category) 
    {
        $this->category = $category;
    }

    public function getCategory() : string
    {
        return $this->category;
    }

    public function setName(string $name) 
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function incrementCount()
    {
        $this->count++;
    }

    public function decrementCount()
    {
        $this->count--;
    }

    public function getCount() : int
    {
        return $this->count;
    }

    public function __toString()
    {
        return $this->name;
    }
}
