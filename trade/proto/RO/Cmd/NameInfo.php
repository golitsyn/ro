<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordTrade.proto

namespace RO\Cmd {

  class NameInfo extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var int */
    public $zoneid = null;
    
    /**  @var int */
    public $count = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.NameInfo');

      // OPTIONAL STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 zoneid = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "zoneid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 count = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "count";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \RO\Cmd\NameInfo
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \RO\Cmd\NameInfo
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <zoneid> has a value
     *
     * @return boolean
     */
    public function hasZoneid(){
      return $this->_has(2);
    }
    
    /**
     * Clear <zoneid> value
     *
     * @return \RO\Cmd\NameInfo
     */
    public function clearZoneid(){
      return $this->_clear(2);
    }
    
    /**
     * Get <zoneid> value
     *
     * @return int
     */
    public function getZoneid(){
      return $this->_get(2);
    }
    
    /**
     * Set <zoneid> value
     *
     * @param int $value
     * @return \RO\Cmd\NameInfo
     */
    public function setZoneid( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <count> has a value
     *
     * @return boolean
     */
    public function hasCount(){
      return $this->_has(3);
    }
    
    /**
     * Clear <count> value
     *
     * @return \RO\Cmd\NameInfo
     */
    public function clearCount(){
      return $this->_clear(3);
    }
    
    /**
     * Get <count> value
     *
     * @return int
     */
    public function getCount(){
      return $this->_get(3);
    }
    
    /**
     * Set <count> value
     *
     * @param int $value
     * @return \RO\Cmd\NameInfo
     */
    public function setCount( $value){
      return $this->_set(3, $value);
    }
  }
}
