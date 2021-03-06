<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneMap.proto

namespace RO\Cmd {

  class SpEffectCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_MAP_PROTOCMD;
    
    /**  @var int - \RO\Cmd\MapParam */
    public $param = \RO\Cmd\MapParam::MAPPARAM_USER_SPEFFECT;
    
    /**  @var int */
    public $senderid = null;
    
    /**  @var \RO\Cmd\SpEffectData */
    public $data = null;
    
    /**  @var boolean */
    public $isadd = true;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SpEffectCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_MAP_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\MapParam';
      $f->default   = \RO\Cmd\MapParam::MAPPARAM_USER_SPEFFECT;
      $descriptor->addField($f);

      // OPTIONAL UINT64 senderid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "senderid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE data = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "data";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SpEffectData';
      $descriptor->addField($f);

      // OPTIONAL BOOL isadd = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "isadd";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = true;
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
     * @return \RO\Cmd\SpEffectCmd
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
     * @return \RO\Cmd\SpEffectCmd
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
     * @return \RO\Cmd\SpEffectCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\MapParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\MapParam $value
     * @return \RO\Cmd\SpEffectCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <senderid> has a value
     *
     * @return boolean
     */
    public function hasSenderid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <senderid> value
     *
     * @return \RO\Cmd\SpEffectCmd
     */
    public function clearSenderid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <senderid> value
     *
     * @return int
     */
    public function getSenderid(){
      return $this->_get(3);
    }
    
    /**
     * Set <senderid> value
     *
     * @param int $value
     * @return \RO\Cmd\SpEffectCmd
     */
    public function setSenderid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <data> has a value
     *
     * @return boolean
     */
    public function hasData(){
      return $this->_has(4);
    }
    
    /**
     * Clear <data> value
     *
     * @return \RO\Cmd\SpEffectCmd
     */
    public function clearData(){
      return $this->_clear(4);
    }
    
    /**
     * Get <data> value
     *
     * @return \RO\Cmd\SpEffectData
     */
    public function getData(){
      return $this->_get(4);
    }
    
    /**
     * Set <data> value
     *
     * @param \RO\Cmd\SpEffectData $value
     * @return \RO\Cmd\SpEffectCmd
     */
    public function setData(\RO\Cmd\SpEffectData $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <isadd> has a value
     *
     * @return boolean
     */
    public function hasIsadd(){
      return $this->_has(5);
    }
    
    /**
     * Clear <isadd> value
     *
     * @return \RO\Cmd\SpEffectCmd
     */
    public function clearIsadd(){
      return $this->_clear(5);
    }
    
    /**
     * Get <isadd> value
     *
     * @return boolean
     */
    public function getIsadd(){
      return $this->_get(5);
    }
    
    /**
     * Set <isadd> value
     *
     * @param boolean $value
     * @return \RO\Cmd\SpEffectCmd
     */
    public function setIsadd( $value){
      return $this->_set(5, $value);
    }
  }
}

