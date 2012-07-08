<?php

use Heystack\Subsystem\Ecommerce\Purchasable\Interfaces\PurchasableInterface;
use Heystack\Subsystem\Core\Storage\DataObjectCodeGenerator\Interfaces\DataObjectCodeGeneratorInterface;

class Product extends DataObject implements PurchasableInterface, Serializable, DataObjectCodeGeneratorInterface
{

    use Heystack\Subsystem\Products\Product\DataObjectTrait;

    public static $db = array(
        'Name' => 'Varchar(255)',
        'TestStuff' => 'Varchar(255)'
    );
    
    public static $has_one = array(
        'SingleStorable' => 'TestStorable'
    );
    
    public static $has_many = array(
        'MultiStorable' => 'TestStorable'
    );
    
    public static $many_many = array(
        'ManyStorable'=> 'TestStorable'
    );

    public function getPrice()
    {
        return 100;
    }
    
    public function getStorableData()
    {
        return array(
            'Name' => 'Varchar(255)'
        );
    }
    
    public function getStorableSingleRelations()
    {
       
        return self::$has_one;
  
    }
    
    public function getStorableManyRelations()
    {
        
        //return self::$has_many;
        return array_merge(self::$has_many, self::$many_many);
        
    }

}
