<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordTrade.proto

namespace RO\Cmd {

  class QucikTakeLogTradeCmd extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::RECORD_USER_TRADE_PROTOCMD;
    
    /**  @var int - \RO\Cmd\RecordUserTradeParam */
    public $param = \RO\Cmd\RecordUserTradeParam::QUICK_TAKE_LOG_TRADE_PARAM;
    
    /**  @var int - \RO\Cmd\ETradeType */
    public $trade_type = \RO\Cmd\ETradeType::ETRADETYPE_TRADE;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.QucikTakeLogTradeCmd');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::RECORD_USER_TRADE_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\RecordUserTradeParam';
      $f->default   = \RO\Cmd\RecordUserTradeParam::QUICK_TAKE_LOG_TRADE_PARAM;
      $descriptor->addField($f);

      // OPTIONAL ENUM trade_type = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "trade_type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ETradeType';
      $f->default   = \RO\Cmd\ETradeType::ETRADETYPE_TRADE;
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
     * @return \RO\Cmd\QucikTakeLogTradeCmd
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
     * @return \RO\Cmd\QucikTakeLogTradeCmd
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
     * @return \RO\Cmd\QucikTakeLogTradeCmd
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\RecordUserTradeParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\RecordUserTradeParam $value
     * @return \RO\Cmd\QucikTakeLogTradeCmd
     */
    public function setParam( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <trade_type> has a value
     *
     * @return boolean
     */
    public function hasTradeType(){
      return $this->_has(3);
    }
    
    /**
     * Clear <trade_type> value
     *
     * @return \RO\Cmd\QucikTakeLogTradeCmd
     */
    public function clearTradeType(){
      return $this->_clear(3);
    }
    
    /**
     * Get <trade_type> value
     *
     * @return int - \RO\Cmd\ETradeType
     */
    public function getTradeType(){
      return $this->_get(3);
    }
    
    /**
     * Set <trade_type> value
     *
     * @param int - \RO\Cmd\ETradeType $value
     * @return \RO\Cmd\QucikTakeLogTradeCmd
     */
    public function setTradeType( $value){
      return $this->_set(3, $value);
    }
  }
}

