<?php

class Categories extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $category_id;

    /**
     *
     * @var string
     */
    public $category_name;
    /**
     *
     * @var string
     */
    public $category_link;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'category_id' => 'category_id', 
            'category_name' => 'category_name',
            'category_link' => 'category_link'
        );
    }



}
