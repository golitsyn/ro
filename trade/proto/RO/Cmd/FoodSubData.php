<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneFood.proto

namespace RO\Cmd {

  class FoodSubData extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\EFoodStatus */
    public $status = null;
    
    /**  @var int */
    public $itemid = 0;
    
    /**  @var int */
    public $exp = 0;
    
    /**  @var int */
    public $level = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.FoodSubData');

      // OPTIONAL ENUM status = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "status";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EFoodStatus';
      $descriptor->addField($f);

      // OPTIONAL UINT32 itemid = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "itemid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 exp = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "exp";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 level = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "level";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <status> has a value
     *
     * @return boolean
     */
    public function hasStatus(){
      return $this->_has(1);
    }
    
    /**
     * Clear <status> value
     *
     * @return \RO\Cmd\FoodSubData
     */
    public function clearStatus(){
      return $this->_clear(1);
    }
    
    /**
     * Get <status> value
     *
     * @return int - \RO\Cmd\EFoodStatus
     */
    public function getStatus(){
      return $this->_get(1);
    }
    
    /**
     * Set <status> value
     *
     * @param int - \RO\Cmd\EFoodStatus $value
     * @return \RO\Cmd\FoodSubData
     */
    public function setStatus( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <itemid> has a value
     *
     * @return boolean
     */
    public function hasItemid(){
      return $this->_has(2);
    }
    
    /**
     * Clear <itemid> value
     *
     * @return \RO\Cmd\FoodSubData
     */
    public function clearItemid(){
      return $this->_clear(2);
    }
    
    /**
     * Get <itemid> value
     *
     * @return int
     */
    public function getItemid(){
      return $this->_get(2);
    }
    
    /**
     * Set <itemid> value
     *
     * @param int $value
     * @return \RO\Cmd\FoodSubData
     */
    public function setItemid( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <exp> has a value
     *
     * @return boolean
     */
    public function hasExp(){
      return $this->_has(3);
    }
    
    /**
     * Clear <exp> value
     *
     * @return \RO\Cmd\FoodSubData
     */
    public function clearExp(){
      return $this->_clear(3);
    }
    
    /**
     * Get <exp> value
     *
     * @return int
     */
    public function getExp(){
      return $this->_get(3);
    }
    
    /**
     * Set <exp> value
     *
     * @param int $value
     * @return \RO\Cmd\FoodSubData
     */
    public function setExp( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <level> has a value
     *
     * @return boolean
     */
    public function hasLevel(){
      return $this->_has(4);
    }
    
    /**
     * Clear <level> value
     *
     * @return \RO\Cmd\FoodSubData
     */
    public function clearLevel(){
      return $this->_clear(4);
    }
    
    /**
     * Get <level> value
     *
     * @return int
     */
    public function getLevel(){
      return $this->_get(4);
    }
    
    /**
     * Set <level> value
     *
     * @param int $value
     * @return \RO\Cmd\FoodSubData
     */
    public function setLevel( $value){
      return $this->_set(4, $value);
    }
  }
}
