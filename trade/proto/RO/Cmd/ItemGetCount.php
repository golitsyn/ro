<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordCmd.proto

namespace RO\Cmd {

  class ItemGetCount extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $itemid = 0;
    
    /**  @var int */
    public $getcount = 0;
    
    /**  @var int - \RO\Cmd\ESource */
    public $source = \RO\Cmd\ESource::ESOURCE_MIN;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ItemGetCount');

      // OPTIONAL UINT32 itemid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "itemid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 getcount = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "getcount";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM source = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "source";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ESource';
      $f->default   = \RO\Cmd\ESource::ESOURCE_MIN;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <itemid> has a value
     *
     * @return boolean
     */
    public function hasItemid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <itemid> value
     *
     * @return \RO\Cmd\ItemGetCount
     */
    public function clearItemid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <itemid> value
     *
     * @return int
     */
    public function getItemid(){
      return $this->_get(1);
    }
    
    /**
     * Set <itemid> value
     *
     * @param int $value
     * @return \RO\Cmd\ItemGetCount
     */
    public function setItemid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <getcount> has a value
     *
     * @return boolean
     */
    public function hasGetcount(){
      return $this->_has(2);
    }
    
    /**
     * Clear <getcount> value
     *
     * @return \RO\Cmd\ItemGetCount
     */
    public function clearGetcount(){
      return $this->_clear(2);
    }
    
    /**
     * Get <getcount> value
     *
     * @return int
     */
    public function getGetcount(){
      return $this->_get(2);
    }
    
    /**
     * Set <getcount> value
     *
     * @param int $value
     * @return \RO\Cmd\ItemGetCount
     */
    public function setGetcount( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <source> has a value
     *
     * @return boolean
     */
    public function hasSource(){
      return $this->_has(3);
    }
    
    /**
     * Clear <source> value
     *
     * @return \RO\Cmd\ItemGetCount
     */
    public function clearSource(){
      return $this->_clear(3);
    }
    
    /**
     * Get <source> value
     *
     * @return int - \RO\Cmd\ESource
     */
    public function getSource(){
      return $this->_get(3);
    }
    
    /**
     * Set <source> value
     *
     * @param int - \RO\Cmd\ESource $value
     * @return \RO\Cmd\ItemGetCount
     */
    public function setSource( $value){
      return $this->_set(3, $value);
    }
  }
}
