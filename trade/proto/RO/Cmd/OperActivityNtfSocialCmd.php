<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionSociality.proto

namespace RO\Cmd {

  class OperActivityNtfSocialCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SESSION_USER_SOCIALITY_PROTOCMD;
    
    /**  @var int - \RO\Cmd\SocialityParam */
    public $param = \RO\Cmd\SocialityParam::SOCIALITYPARAM_OPER_ACTIVITY_NTF;
    
    /**  @var \RO\Cmd\OperActivity[]  */
    public $activity = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.OperActivityNtfSocialCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SESSION_USER_SOCIALITY_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\SocialityParam';
      $f->default   = \RO\Cmd\SocialityParam::SOCIALITYPARAM_OPER_ACTIVITY_NTF;
      $descriptor->addField($f);

      // REPEATED MESSAGE activity = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "activity";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\OperActivity';
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
     * @return \RO\Cmd\OperActivityNtfSocialCmd
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
     * @return \RO\Cmd\OperActivityNtfSocialCmd
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
     * @return \RO\Cmd\OperActivityNtfSocialCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\SocialityParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\SocialityParam $value
     * @return \RO\Cmd\OperActivityNtfSocialCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <activity> has a value
     *
     * @return boolean
     */
    public function hasActivity(){
      return $this->_has(3);
    }
    
    /**
     * Clear <activity> value
     *
     * @return \RO\Cmd\OperActivityNtfSocialCmd
     */
    public function clearActivity(){
      return $this->_clear(3);
    }
    
    /**
     * Get <activity> value
     *
     * @param int $idx
     * @return \RO\Cmd\OperActivity
     */
    public function getActivity($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <activity> value
     *
     * @param \RO\Cmd\OperActivity $value
     * @return \RO\Cmd\OperActivityNtfSocialCmd
     */
    public function setActivity(\RO\Cmd\OperActivity $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <activity>
     *
     * @return \RO\Cmd\OperActivity[]
     */
    public function getActivityList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <activity>
     *
     * @param \RO\Cmd\OperActivity $value
     * @return \RO\Cmd\OperActivityNtfSocialCmd
     */
    public function addActivity(\RO\Cmd\OperActivity $value){
     return $this->_add(3, $value);
    }
  }
}
