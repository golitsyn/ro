<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionTeam.proto

namespace RO\Cmd {

  class TeamList extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_USER_TEAM_PROTOCMD;
    
    /**  @var int - \RO\Cmd\TeamParam */
    public $param = \RO\Cmd\TeamParam::TEAMPARAM_TEAMLIST;
    
    /**  @var int */
    public $type = 0;
    
    /**  @var int */
    public $page = 0;
    
    /**  @var int */
    public $lv = 0;
    
    /**  @var \RO\Cmd\TeamData[]  */
    public $list = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.TeamList');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SESSION_USER_TEAM_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\TeamParam';
      $f->default   = \RO\Cmd\TeamParam::TEAMPARAM_TEAMLIST;
      $descriptor->addField($f);

      // OPTIONAL UINT32 type = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 page = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "page";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 lv = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "lv";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED MESSAGE list = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "list";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\TeamData';
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
     * @return \RO\Cmd\TeamList
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
     * @return \RO\Cmd\TeamList
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
     * @return \RO\Cmd\TeamList
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\TeamParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\TeamParam $value
     * @return \RO\Cmd\TeamList
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(3);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\TeamList
     */
    public function clearType(){
      return $this->_clear(3);
    }
    
    /**
     * Get <type> value
     *
     * @return int
     */
    public function getType(){
      return $this->_get(3);
    }
    
    /**
     * Set <type> value
     *
     * @param int $value
     * @return \RO\Cmd\TeamList
     */
    public function setType( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <page> has a value
     *
     * @return boolean
     */
    public function hasPage(){
      return $this->_has(4);
    }
    
    /**
     * Clear <page> value
     *
     * @return \RO\Cmd\TeamList
     */
    public function clearPage(){
      return $this->_clear(4);
    }
    
    /**
     * Get <page> value
     *
     * @return int
     */
    public function getPage(){
      return $this->_get(4);
    }
    
    /**
     * Set <page> value
     *
     * @param int $value
     * @return \RO\Cmd\TeamList
     */
    public function setPage( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <lv> has a value
     *
     * @return boolean
     */
    public function hasLv(){
      return $this->_has(5);
    }
    
    /**
     * Clear <lv> value
     *
     * @return \RO\Cmd\TeamList
     */
    public function clearLv(){
      return $this->_clear(5);
    }
    
    /**
     * Get <lv> value
     *
     * @return int
     */
    public function getLv(){
      return $this->_get(5);
    }
    
    /**
     * Set <lv> value
     *
     * @param int $value
     * @return \RO\Cmd\TeamList
     */
    public function setLv( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <list> has a value
     *
     * @return boolean
     */
    public function hasList(){
      return $this->_has(6);
    }
    
    /**
     * Clear <list> value
     *
     * @return \RO\Cmd\TeamList
     */
    public function clearList(){
      return $this->_clear(6);
    }
    
    /**
     * Get <list> value
     *
     * @param int $idx
     * @return \RO\Cmd\TeamData
     */
    public function getList($idx = NULL){
      return $this->_get(6, $idx);
    }
    
    /**
     * Set <list> value
     *
     * @param \RO\Cmd\TeamData $value
     * @return \RO\Cmd\TeamList
     */
    public function setList(\RO\Cmd\TeamData $value, $idx = NULL){
      return $this->_set(6, $value, $idx);
    }
    
    /**
     * Get all elements of <list>
     *
     * @return \RO\Cmd\TeamData[]
     */
    public function getListList(){
     return $this->_get(6);
    }
    
    /**
     * Add a new element to <list>
     *
     * @param \RO\Cmd\TeamData $value
     * @return \RO\Cmd\TeamList
     */
    public function addList(\RO\Cmd\TeamData $value){
     return $this->_add(6, $value);
    }
  }
}

