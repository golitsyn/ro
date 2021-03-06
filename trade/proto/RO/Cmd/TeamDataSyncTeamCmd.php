<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: TeamCmd.proto

namespace RO\Cmd {

  class TeamDataSyncTeamCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::TEAM_PROTOCMD;
    
    /**  @var int - \RO\Cmd\ServerTeamParam */
    public $param = \RO\Cmd\ServerTeamParam::SERVERTEAMPARAM_TEAMDATA_SYNC;
    
    /**  @var int */
    public $charid = 0;
    
    /**  @var \RO\Cmd\TeamInfo */
    public $info = null;
    
    /**  @var boolean */
    public $online = false;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.TeamDataSyncTeamCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::TEAM_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ServerTeamParam';
      $f->default   = \RO\Cmd\ServerTeamParam::SERVERTEAMPARAM_TEAMDATA_SYNC;
      $descriptor->addField($f);

      // OPTIONAL UINT64 charid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE info = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "info";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\TeamInfo';
      $descriptor->addField($f);

      // OPTIONAL BOOL online = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "online";
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
     * @return \RO\Cmd\TeamDataSyncTeamCmd
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
     * @return \RO\Cmd\TeamDataSyncTeamCmd
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
     * @return \RO\Cmd\TeamDataSyncTeamCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\ServerTeamParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\ServerTeamParam $value
     * @return \RO\Cmd\TeamDataSyncTeamCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(3);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\TeamDataSyncTeamCmd
     */
    public function clearCharid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(3);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\TeamDataSyncTeamCmd
     */
    public function setCharid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <info> has a value
     *
     * @return boolean
     */
    public function hasInfo(){
      return $this->_has(4);
    }
    
    /**
     * Clear <info> value
     *
     * @return \RO\Cmd\TeamDataSyncTeamCmd
     */
    public function clearInfo(){
      return $this->_clear(4);
    }
    
    /**
     * Get <info> value
     *
     * @return \RO\Cmd\TeamInfo
     */
    public function getInfo(){
      return $this->_get(4);
    }
    
    /**
     * Set <info> value
     *
     * @param \RO\Cmd\TeamInfo $value
     * @return \RO\Cmd\TeamDataSyncTeamCmd
     */
    public function setInfo(\RO\Cmd\TeamInfo $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <online> has a value
     *
     * @return boolean
     */
    public function hasOnline(){
      return $this->_has(5);
    }
    
    /**
     * Clear <online> value
     *
     * @return \RO\Cmd\TeamDataSyncTeamCmd
     */
    public function clearOnline(){
      return $this->_clear(5);
    }
    
    /**
     * Get <online> value
     *
     * @return boolean
     */
    public function getOnline(){
      return $this->_get(5);
    }
    
    /**
     * Set <online> value
     *
     * @param boolean $value
     * @return \RO\Cmd\TeamDataSyncTeamCmd
     */
    public function setOnline( $value){
      return $this->_set(5, $value);
    }
  }
}

