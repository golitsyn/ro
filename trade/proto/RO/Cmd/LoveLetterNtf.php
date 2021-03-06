<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: ChatCmd.proto

namespace RO\Cmd {

  class LoveLetterNtf extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::CHAT_PROTOCMD;
    
    /**  @var int - \RO\Cmd\ChatParam */
    public $param = \RO\Cmd\ChatParam::CHATPARAM_LOVE_LETTER;
    
    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $content = null;
    
    /**  @var int */
    public $type = null;
    
    /**  @var string */
    public $bg = null;
    
    /**  @var int */
    public $letterID = 0;
    
    /**  @var int */
    public $configID = 0;
    
    /**  @var string */
    public $content2 = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.LoveLetterNtf');

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
      $f->default   = \RO\Cmd\ChatParam::CHATPARAM_LOVE_LETTER;
      $descriptor->addField($f);

      // OPTIONAL STRING name = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING content = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "content";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 type = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING bg = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "bg";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 letterID = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "letterID";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 configID = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "configID";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL STRING content2 = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "content2";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
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
     * @return \RO\Cmd\LoveLetterNtf
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
     * @return \RO\Cmd\LoveLetterNtf
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
     * @return \RO\Cmd\LoveLetterNtf
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
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(3);
    }
    
    /**
     * Clear <name> value
     *
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function clearName(){
      return $this->_clear(3);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(3);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function setName( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <content> has a value
     *
     * @return boolean
     */
    public function hasContent(){
      return $this->_has(4);
    }
    
    /**
     * Clear <content> value
     *
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function clearContent(){
      return $this->_clear(4);
    }
    
    /**
     * Get <content> value
     *
     * @return string
     */
    public function getContent(){
      return $this->_get(4);
    }
    
    /**
     * Set <content> value
     *
     * @param string $value
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function setContent( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(5);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function clearType(){
      return $this->_clear(5);
    }
    
    /**
     * Get <type> value
     *
     * @return int
     */
    public function getType(){
      return $this->_get(5);
    }
    
    /**
     * Set <type> value
     *
     * @param int $value
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function setType( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <bg> has a value
     *
     * @return boolean
     */
    public function hasBg(){
      return $this->_has(6);
    }
    
    /**
     * Clear <bg> value
     *
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function clearBg(){
      return $this->_clear(6);
    }
    
    /**
     * Get <bg> value
     *
     * @return string
     */
    public function getBg(){
      return $this->_get(6);
    }
    
    /**
     * Set <bg> value
     *
     * @param string $value
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function setBg( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <letterID> has a value
     *
     * @return boolean
     */
    public function hasLetterID(){
      return $this->_has(7);
    }
    
    /**
     * Clear <letterID> value
     *
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function clearLetterID(){
      return $this->_clear(7);
    }
    
    /**
     * Get <letterID> value
     *
     * @return int
     */
    public function getLetterID(){
      return $this->_get(7);
    }
    
    /**
     * Set <letterID> value
     *
     * @param int $value
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function setLetterID( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <configID> has a value
     *
     * @return boolean
     */
    public function hasConfigID(){
      return $this->_has(8);
    }
    
    /**
     * Clear <configID> value
     *
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function clearConfigID(){
      return $this->_clear(8);
    }
    
    /**
     * Get <configID> value
     *
     * @return int
     */
    public function getConfigID(){
      return $this->_get(8);
    }
    
    /**
     * Set <configID> value
     *
     * @param int $value
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function setConfigID( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <content2> has a value
     *
     * @return boolean
     */
    public function hasContent2(){
      return $this->_has(9);
    }
    
    /**
     * Clear <content2> value
     *
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function clearContent2(){
      return $this->_clear(9);
    }
    
    /**
     * Get <content2> value
     *
     * @return string
     */
    public function getContent2(){
      return $this->_get(9);
    }
    
    /**
     * Set <content2> value
     *
     * @param string $value
     * @return \RO\Cmd\LoveLetterNtf
     */
    public function setContent2( $value){
      return $this->_set(9, $value);
    }
  }
}

