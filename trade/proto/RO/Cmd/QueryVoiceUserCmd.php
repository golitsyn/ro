<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ChatCmd.proto

namespace RO\Cmd {

  class QueryVoiceUserCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::CHAT_PROTOCMD;
    
    /**  @var int - \RO\Cmd\ChatParam */
    public $param = \RO\Cmd\ChatParam::CHATPARAM_QUERY_VOICE;
    
    /**  @var int */
    public $voiceid = 0;
    
    /**  @var string */
    public $voice = null;
    
    /**  @var int */
    public $msgid = 0;
    
    /**  @var boolean */
    public $msgover = false;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QueryVoiceUserCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::CHAT_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ChatParam';
      $f->default   = \RO\Cmd\ChatParam::CHATPARAM_QUERY_VOICE;
      $descriptor->addField($f);

      // OPTIONAL UINT32 voiceid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "voiceid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BYTES voice = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "voice";
      $f->type      = \DrSlump\Protobuf::TYPE_BYTES;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 msgid = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "msgid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL msgover = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "msgover";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
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
     * @return \RO\Cmd\QueryVoiceUserCmd
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
     * @return \RO\Cmd\QueryVoiceUserCmd
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
     * @return \RO\Cmd\QueryVoiceUserCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\ChatParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\ChatParam $value
     * @return \RO\Cmd\QueryVoiceUserCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <voiceid> has a value
     *
     * @return boolean
     */
    public function hasVoiceid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <voiceid> value
     *
     * @return \RO\Cmd\QueryVoiceUserCmd
     */
    public function clearVoiceid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <voiceid> value
     *
     * @return int
     */
    public function getVoiceid(){
      return $this->_get(3);
    }
    
    /**
     * Set <voiceid> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryVoiceUserCmd
     */
    public function setVoiceid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <voice> has a value
     *
     * @return boolean
     */
    public function hasVoice(){
      return $this->_has(4);
    }
    
    /**
     * Clear <voice> value
     *
     * @return \RO\Cmd\QueryVoiceUserCmd
     */
    public function clearVoice(){
      return $this->_clear(4);
    }
    
    /**
     * Get <voice> value
     *
     * @return string
     */
    public function getVoice(){
      return $this->_get(4);
    }
    
    /**
     * Set <voice> value
     *
     * @param string $value
     * @return \RO\Cmd\QueryVoiceUserCmd
     */
    public function setVoice( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <msgid> has a value
     *
     * @return boolean
     */
    public function hasMsgid(){
      return $this->_has(8);
    }
    
    /**
     * Clear <msgid> value
     *
     * @return \RO\Cmd\QueryVoiceUserCmd
     */
    public function clearMsgid(){
      return $this->_clear(8);
    }
    
    /**
     * Get <msgid> value
     *
     * @return int
     */
    public function getMsgid(){
      return $this->_get(8);
    }
    
    /**
     * Set <msgid> value
     *
     * @param int $value
     * @return \RO\Cmd\QueryVoiceUserCmd
     */
    public function setMsgid( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <msgover> has a value
     *
     * @return boolean
     */
    public function hasMsgover(){
      return $this->_has(9);
    }
    
    /**
     * Clear <msgover> value
     *
     * @return \RO\Cmd\QueryVoiceUserCmd
     */
    public function clearMsgover(){
      return $this->_clear(9);
    }
    
    /**
     * Get <msgover> value
     *
     * @return boolean
     */
    public function getMsgover(){
      return $this->_get(9);
    }
    
    /**
     * Set <msgover> value
     *
     * @param boolean $value
     * @return \RO\Cmd\QueryVoiceUserCmd
     */
    public function setMsgover( $value){
      return $this->_set(9, $value);
    }
  }
}
