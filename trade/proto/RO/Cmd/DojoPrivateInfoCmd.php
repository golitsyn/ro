<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: Dojo.proto

namespace RO\Cmd {

  class DojoPrivateInfoCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::DOJO_PROTOCMD;
    
    /**  @var int - \RO\Cmd\DojoParam */
    public $param = \RO\Cmd\DojoParam::EDOJOPARAM_DOJO_PRIVATE_INFO;
    
    /**  @var int */
    public $groupid = null;
    
    /**  @var int[]  */
    public $completed_id = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.DojoPrivateInfoCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::DOJO_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\DojoParam';
      $f->default   = \RO\Cmd\DojoParam::EDOJOPARAM_DOJO_PRIVATE_INFO;
      $descriptor->addField($f);

      // OPTIONAL UINT32 groupid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "groupid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED UINT32 completed_id = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "completed_id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <cmd> has a value
     *
     * @return boolean
     */
    public function hasCmd(){
      return $this->_has(1);
    }
    
    /**
     * Clear <cmd> value
     *
     * @return \RO\Cmd\DojoPrivateInfoCmd
     */
    public function clearCmd(){
      return $this->_clear(1);
    }
    
    /**
     * Get <cmd> value
     *
     * @return int - \RO\Cmd\Command
     */
    public function getCmd(){
      return $this->_get(1);
    }
    
    /**
     * Set <cmd> value
     *
     * @param int - \RO\Cmd\Command $value
     * @return \RO\Cmd\DojoPrivateInfoCmd
     */
    public function setCmd( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <param> has a value
     *
     * @return boolean
     */
    public function hasParam(){
      return $this->_has(2);
    }
    
    /**
     * Clear <param> value
     *
     * @return \RO\Cmd\DojoPrivateInfoCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\DojoParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\DojoParam $value
     * @return \RO\Cmd\DojoPrivateInfoCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <groupid> has a value
     *
     * @return boolean
     */
    public function hasGroupid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <groupid> value
     *
     * @return \RO\Cmd\DojoPrivateInfoCmd
     */
    public function clearGroupid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <groupid> value
     *
     * @return int
     */
    public function getGroupid(){
      return $this->_get(3);
    }
    
    /**
     * Set <groupid> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoPrivateInfoCmd
     */
    public function setGroupid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <completed_id> has a value
     *
     * @return boolean
     */
    public function hasCompletedId(){
      return $this->_has(4);
    }
    
    /**
     * Clear <completed_id> value
     *
     * @return \RO\Cmd\DojoPrivateInfoCmd
     */
    public function clearCompletedId(){
      return $this->_clear(4);
    }
    
    /**
     * Get <completed_id> value
     *
     * @param int $idx
     * @return int
     */
    public function getCompletedId($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <completed_id> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoPrivateInfoCmd
     */
    public function setCompletedId( $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <completed_id>
     *
     * @return int[]
     */
    public function getCompletedIdList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <completed_id>
     *
     * @param int $value
     * @return \RO\Cmd\DojoPrivateInfoCmd
     */
    public function addCompletedId( $value){
     return $this->_add(4, $value);
    }
  }
}

