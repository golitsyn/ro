<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneItem.proto

namespace RO\Cmd {

  class RefineData extends \DrSlump\Protobuf\Message {

    /**  @var boolean */
    public $lastfail = false;
    
    /**  @var int */
    public $repaircount = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.RefineData');

      // OPTIONAL BOOL lastfail = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "lastfail";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL UINT32 repaircount = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "repaircount";
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
     * Check if <lastfail> has a value
     *
     * @return boolean
     */
    public function hasLastfail(){
      return $this->_has(1);
    }
    
    /**
     * Clear <lastfail> value
     *
     * @return \RO\Cmd\RefineData
     */
    public function clearLastfail(){
      return $this->_clear(1);
    }
    
    /**
     * Get <lastfail> value
     *
     * @return boolean
     */
    public function getLastfail(){
      return $this->_get(1);
    }
    
    /**
     * Set <lastfail> value
     *
     * @param boolean $value
     * @return \RO\Cmd\RefineData
     */
    public function setLastfail( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <repaircount> has a value
     *
     * @return boolean
     */
    public function hasRepaircount(){
      return $this->_has(2);
    }
    
    /**
     * Clear <repaircount> value
     *
     * @return \RO\Cmd\RefineData
     */
    public function clearRepaircount(){
      return $this->_clear(2);
    }
    
    /**
     * Get <repaircount> value
     *
     * @return int
     */
    public function getRepaircount(){
      return $this->_get(2);
    }
    
    /**
     * Set <repaircount> value
     *
     * @param int $value
     * @return \RO\Cmd\RefineData
     */
    public function setRepaircount( $value){
      return $this->_set(2, $value);
    }
  }
}
