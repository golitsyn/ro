<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneSeal.proto

namespace RO\Cmd {

  class EndSeal extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_SEAL_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SealParam */
    public $param = \RO\Cmd\SealParam::SEALPARAM_ENDSEAL;
    
    /**  @var boolean */
    public $success = false;
    
    /**  @var int */
    public $sealid = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.EndSeal');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_SEAL_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SealParam';
      $f->default   = \RO\Cmd\SealParam::SEALPARAM_ENDSEAL;
      $descriptor->addField($f);

      // OPTIONAL BOOL success = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "success";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL UINT32 sealid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "sealid";
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
     * @return \RO\Cmd\EndSeal
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
     * @return \RO\Cmd\EndSeal
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
     * @return \RO\Cmd\EndSeal
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\SealParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\SealParam $value
     * @return \RO\Cmd\EndSeal
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <success> has a value
     *
     * @return boolean
     */
    public function hasSuccess(){
      return $this->_has(3);
    }
    
    /**
     * Clear <success> value
     *
     * @return \RO\Cmd\EndSeal
     */
    public function clearSuccess(){
      return $this->_clear(3);
    }
    
    /**
     * Get <success> value
     *
     * @return boolean
     */
    public function getSuccess(){
      return $this->_get(3);
    }
    
    /**
     * Set <success> value
     *
     * @param boolean $value
     * @return \RO\Cmd\EndSeal
     */
    public function setSuccess( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <sealid> has a value
     *
     * @return boolean
     */
    public function hasSealid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <sealid> value
     *
     * @return \RO\Cmd\EndSeal
     */
    public function clearSealid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <sealid> value
     *
     * @return int
     */
    public function getSealid(){
      return $this->_get(4);
    }
    
    /**
     * Set <sealid> value
     *
     * @param int $value
     * @return \RO\Cmd\EndSeal
     */
    public function setSealid( $value){
      return $this->_set(4, $value);
    }
  }
}
