<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: Dojo.proto

namespace RO\Cmd {

  class DojoReplyCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::DOJO_PROTOCMD;
    
    /**  @var int - \RO\Cmd\DojoParam */
    public $param = \RO\Cmd\DojoParam::EDOJOPARAM_REPLY;
    
    /**  @var int - \RO\Cmd\EDojoReply */
    public $eReply = \RO\Cmd\EDojoReply::EDOJOREPLY_DISAGREE;
    
    /**  @var int */
    public $userid = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.DojoReplyCmd');

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
      $f->default   = \RO\Cmd\DojoParam::EDOJOPARAM_REPLY;
      $descriptor->addField($f);

      // OPTIONAL ENUM eReply = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "eReply";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EDojoReply';
      $f->default   = \RO\Cmd\EDojoReply::EDOJOREPLY_DISAGREE;
      $descriptor->addField($f);

      // OPTIONAL UINT64 userid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "userid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
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
     * @return \RO\Cmd\DojoReplyCmd
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
     * @return \RO\Cmd\DojoReplyCmd
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
     * @return \RO\Cmd\DojoReplyCmd
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
     * @return \RO\Cmd\DojoReplyCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <eReply> has a value
     *
     * @return boolean
     */
    public function hasEReply(){
      return $this->_has(3);
    }
    
    /**
     * Clear <eReply> value
     *
     * @return \RO\Cmd\DojoReplyCmd
     */
    public function clearEReply(){
      return $this->_clear(3);
    }
    
    /**
     * Get <eReply> value
     *
     * @return int - \RO\Cmd\EDojoReply
     */
    public function getEReply(){
      return $this->_get(3);
    }
    
    /**
     * Set <eReply> value
     *
     * @param int - \RO\Cmd\EDojoReply $value
     * @return \RO\Cmd\DojoReplyCmd
     */
    public function setEReply( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <userid> has a value
     *
     * @return boolean
     */
    public function hasUserid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <userid> value
     *
     * @return \RO\Cmd\DojoReplyCmd
     */
    public function clearUserid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <userid> value
     *
     * @return int
     */
    public function getUserid(){
      return $this->_get(4);
    }
    
    /**
     * Set <userid> value
     *
     * @param int $value
     * @return \RO\Cmd\DojoReplyCmd
     */
    public function setUserid( $value){
      return $this->_set(4, $value);
    }
  }
}
