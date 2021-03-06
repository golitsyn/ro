<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneQuest.proto

namespace RO\Cmd {

  class QuestDetail extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $id = 0;
    
    /**  @var int */
    public $time = 0;
    
    /**  @var int */
    public $map = 0;
    
    /**  @var boolean */
    public $complete = false;
    
    /**  @var boolean */
    public $trace = true;
    
    /**  @var int[]  */
    public $details = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QuestDetail');

      // OPTIONAL UINT32 id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "id";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 time = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "time";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 map = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "map";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL complete = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "complete";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL BOOL trace = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "trace";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = true;
      $descriptor->addField($f);

      // REPEATED UINT32 details = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "details";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <id> has a value
     *
     * @return boolean
     */
    public function hasId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <id> value
     *
     * @return \RO\Cmd\QuestDetail
     */
    public function clearId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <id> value
     *
     * @return int
     */
    public function getId(){
      return $this->_get(1);
    }
    
    /**
     * Set <id> value
     *
     * @param int $value
     * @return \RO\Cmd\QuestDetail
     */
    public function setId( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <time> has a value
     *
     * @return boolean
     */
    public function hasTime(){
      return $this->_has(2);
    }
    
    /**
     * Clear <time> value
     *
     * @return \RO\Cmd\QuestDetail
     */
    public function clearTime(){
      return $this->_clear(2);
    }
    
    /**
     * Get <time> value
     *
     * @return int
     */
    public function getTime(){
      return $this->_get(2);
    }
    
    /**
     * Set <time> value
     *
     * @param int $value
     * @return \RO\Cmd\QuestDetail
     */
    public function setTime( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <map> has a value
     *
     * @return boolean
     */
    public function hasMap(){
      return $this->_has(3);
    }
    
    /**
     * Clear <map> value
     *
     * @return \RO\Cmd\QuestDetail
     */
    public function clearMap(){
      return $this->_clear(3);
    }
    
    /**
     * Get <map> value
     *
     * @return int
     */
    public function getMap(){
      return $this->_get(3);
    }
    
    /**
     * Set <map> value
     *
     * @param int $value
     * @return \RO\Cmd\QuestDetail
     */
    public function setMap( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <complete> has a value
     *
     * @return boolean
     */
    public function hasComplete(){
      return $this->_has(4);
    }
    
    /**
     * Clear <complete> value
     *
     * @return \RO\Cmd\QuestDetail
     */
    public function clearComplete(){
      return $this->_clear(4);
    }
    
    /**
     * Get <complete> value
     *
     * @return boolean
     */
    public function getComplete(){
      return $this->_get(4);
    }
    
    /**
     * Set <complete> value
     *
     * @param boolean $value
     * @return \RO\Cmd\QuestDetail
     */
    public function setComplete( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <trace> has a value
     *
     * @return boolean
     */
    public function hasTrace(){
      return $this->_has(5);
    }
    
    /**
     * Clear <trace> value
     *
     * @return \RO\Cmd\QuestDetail
     */
    public function clearTrace(){
      return $this->_clear(5);
    }
    
    /**
     * Get <trace> value
     *
     * @return boolean
     */
    public function getTrace(){
      return $this->_get(5);
    }
    
    /**
     * Set <trace> value
     *
     * @param boolean $value
     * @return \RO\Cmd\QuestDetail
     */
    public function setTrace( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <details> has a value
     *
     * @return boolean
     */
    public function hasDetails(){
      return $this->_has(6);
    }
    
    /**
     * Clear <details> value
     *
     * @return \RO\Cmd\QuestDetail
     */
    public function clearDetails(){
      return $this->_clear(6);
    }
    
    /**
     * Get <details> value
     *
     * @param int $idx
     * @return int
     */
    public function getDetails($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <details> value
     *
     * @param int $value
     * @return \RO\Cmd\QuestDetail
     */
    public function setDetails( $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <details>
     *
     * @return int[]
     */
    public function getDetailsList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <details>
     *
     * @param int $value
     * @return \RO\Cmd\QuestDetail
     */
    public function addDetails( $value){
     return $this->_add(6, $value);
    }
  }
}

