<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class TalkInfo extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
    
    /**  @var int - \RO\Cmd\User2Param */
    public $param = \RO\Cmd\User2Param::USER2PARAM_TALKINFO;
    
    /**  @var int */
    public $guid = 0;
    
    /**  @var int */
    public $talkid = null;
    
    /**  @var string */
    public $talkmessage = null;
    
    /**  @var \RO\Cmd\MsgParam[]  */
    public $params = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.TalkInfo');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER2_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\User2Param';
      $f->default   = \RO\Cmd\User2Param::USER2PARAM_TALKINFO;
      $descriptor->addField($f);

      // OPTIONAL UINT64 guid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "guid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 talkid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "talkid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING talkmessage = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "talkmessage";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REPEATED MESSAGE params = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "params";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\MsgParam';
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
     * @return \RO\Cmd\TalkInfo
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
     * @return \RO\Cmd\TalkInfo
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
     * @return \RO\Cmd\TalkInfo
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\User2Param
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\User2Param $value
     * @return \RO\Cmd\TalkInfo
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <guid> has a value
     *
     * @return boolean
     */
    public function hasGuid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <guid> value
     *
     * @return \RO\Cmd\TalkInfo
     */
    public function clearGuid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <guid> value
     *
     * @return int
     */
    public function getGuid(){
      return $this->_get(3);
    }
    
    /**
     * Set <guid> value
     *
     * @param int $value
     * @return \RO\Cmd\TalkInfo
     */
    public function setGuid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <talkid> has a value
     *
     * @return boolean
     */
    public function hasTalkid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <talkid> value
     *
     * @return \RO\Cmd\TalkInfo
     */
    public function clearTalkid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <talkid> value
     *
     * @return int
     */
    public function getTalkid(){
      return $this->_get(4);
    }
    
    /**
     * Set <talkid> value
     *
     * @param int $value
     * @return \RO\Cmd\TalkInfo
     */
    public function setTalkid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <talkmessage> has a value
     *
     * @return boolean
     */
    public function hasTalkmessage(){
      return $this->_has(5);
    }
    
    /**
     * Clear <talkmessage> value
     *
     * @return \RO\Cmd\TalkInfo
     */
    public function clearTalkmessage(){
      return $this->_clear(5);
    }
    
    /**
     * Get <talkmessage> value
     *
     * @return string
     */
    public function getTalkmessage(){
      return $this->_get(5);
    }
    
    /**
     * Set <talkmessage> value
     *
     * @param string $value
     * @return \RO\Cmd\TalkInfo
     */
    public function setTalkmessage( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <params> has a value
     *
     * @return boolean
     */
    public function hasParams(){
      return $this->_has(6);
    }
    
    /**
     * Clear <params> value
     *
     * @return \RO\Cmd\TalkInfo
     */
    public function clearParams(){
      return $this->_clear(6);
    }
    
    /**
     * Get <params> value
     *
     * @param int $idx
     * @return \RO\Cmd\MsgParam
     */
    public function getParams($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <params> value
     *
     * @param \RO\Cmd\MsgParam $value
     * @return \RO\Cmd\TalkInfo
     */
    public function setParams(\RO\Cmd\MsgParam $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <params>
     *
     * @return \RO\Cmd\MsgParam[]
     */
    public function getParamsList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <params>
     *
     * @param \RO\Cmd\MsgParam $value
     * @return \RO\Cmd\TalkInfo
     */
    public function addParams(\RO\Cmd\MsgParam $value){
     return $this->_add(6, $value);
    }
  }
}
