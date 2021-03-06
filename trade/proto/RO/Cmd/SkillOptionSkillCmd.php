<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneSkill.proto

namespace RO\Cmd {

  class SkillOptionSkillCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_SKILL_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SkillParam */
    public $param = \RO\Cmd\SkillParam::SKILLPARAM_SKILLOPTIONS;
    
    /**  @var \RO\Cmd\SkillOption */
    public $set_opt = null;
    
    /**  @var \RO\Cmd\SkillOption[]  */
    public $all_opts = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SkillOptionSkillCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_SKILL_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SkillParam';
      $f->default   = \RO\Cmd\SkillParam::SKILLPARAM_SKILLOPTIONS;
      $descriptor->addField($f);

      // OPTIONAL MESSAGE set_opt = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "set_opt";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SkillOption';
      $descriptor->addField($f);

      // REPEATED MESSAGE all_opts = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "all_opts";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\SkillOption';
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
     * @return \RO\Cmd\SkillOptionSkillCmd
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
     * @return \RO\Cmd\SkillOptionSkillCmd
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
     * @return \RO\Cmd\SkillOptionSkillCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\SkillParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\SkillParam $value
     * @return \RO\Cmd\SkillOptionSkillCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <set_opt> has a value
     *
     * @return boolean
     */
    public function hasSetOpt(){
      return $this->_has(3);
    }
    
    /**
     * Clear <set_opt> value
     *
     * @return \RO\Cmd\SkillOptionSkillCmd
     */
    public function clearSetOpt(){
      return $this->_clear(3);
    }
    
    /**
     * Get <set_opt> value
     *
     * @return \RO\Cmd\SkillOption
     */
    public function getSetOpt(){
      return $this->_get(3);
    }
    
    /**
     * Set <set_opt> value
     *
     * @param \RO\Cmd\SkillOption $value
     * @return \RO\Cmd\SkillOptionSkillCmd
     */
    public function setSetOpt(\RO\Cmd\SkillOption $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <all_opts> has a value
     *
     * @return boolean
     */
    public function hasAllOpts(){
      return $this->_has(4);
    }
    
    /**
     * Clear <all_opts> value
     *
     * @return \RO\Cmd\SkillOptionSkillCmd
     */
    public function clearAllOpts(){
      return $this->_clear(4);
    }
    
    /**
     * Get <all_opts> value
     *
     * @param int $idx
     * @return \RO\Cmd\SkillOption
     */
    public function getAllOpts($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <all_opts> value
     *
     * @param \RO\Cmd\SkillOption $value
     * @return \RO\Cmd\SkillOptionSkillCmd
     */
    public function setAllOpts(\RO\Cmd\SkillOption $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <all_opts>
     *
     * @return \RO\Cmd\SkillOption[]
     */
    public function getAllOptsList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <all_opts>
     *
     * @param \RO\Cmd\SkillOption $value
     * @return \RO\Cmd\SkillOptionSkillCmd
     */
    public function addAllOpts(\RO\Cmd\SkillOption $value){
     return $this->_add(4, $value);
    }
  }
}

