<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: GuildSCmd.proto

namespace RO\Cmd {

  class GuildUserInfo extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $giftpoint = 0;
    
    /**  @var int */
    public $contribute = 0;
    
    /**  @var \RO\Cmd\GuildMemberPray[]  */
    public $prays = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.GuildUserInfo');

      // OPTIONAL UINT32 giftpoint = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "giftpoint";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 contribute = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "contribute";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // REPEATED MESSAGE prays = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "prays";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\GuildMemberPray';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <giftpoint> has a value
     *
     * @return boolean
     */
    public function hasGiftpoint(){
      return $this->_has(1);
    }
    
    /**
     * Clear <giftpoint> value
     *
     * @return \RO\Cmd\GuildUserInfo
     */
    public function clearGiftpoint(){
      return $this->_clear(1);
    }
    
    /**
     * Get <giftpoint> value
     *
     * @return int
     */
    public function getGiftpoint(){
      return $this->_get(1);
    }
    
    /**
     * Set <giftpoint> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildUserInfo
     */
    public function setGiftpoint( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <contribute> has a value
     *
     * @return boolean
     */
    public function hasContribute(){
      return $this->_has(2);
    }
    
    /**
     * Clear <contribute> value
     *
     * @return \RO\Cmd\GuildUserInfo
     */
    public function clearContribute(){
      return $this->_clear(2);
    }
    
    /**
     * Get <contribute> value
     *
     * @return int
     */
    public function getContribute(){
      return $this->_get(2);
    }
    
    /**
     * Set <contribute> value
     *
     * @param int $value
     * @return \RO\Cmd\GuildUserInfo
     */
    public function setContribute( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <prays> has a value
     *
     * @return boolean
     */
    public function hasPrays(){
      return $this->_has(3);
    }
    
    /**
     * Clear <prays> value
     *
     * @return \RO\Cmd\GuildUserInfo
     */
    public function clearPrays(){
      return $this->_clear(3);
    }
    
    /**
     * Get <prays> value
     *
     * @param int $idx
     * @return \RO\Cmd\GuildMemberPray
     */
    public function getPrays($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <prays> value
     *
     * @param \RO\Cmd\GuildMemberPray $value
     * @return \RO\Cmd\GuildUserInfo
     */
    public function setPrays(\RO\Cmd\GuildMemberPray $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <prays>
     *
     * @return \RO\Cmd\GuildMemberPray[]
     */
    public function getPraysList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <prays>
     *
     * @param \RO\Cmd\GuildMemberPray $value
     * @return \RO\Cmd\GuildUserInfo
     */
    public function addPrays(\RO\Cmd\GuildMemberPray $value){
     return $this->_add(3, $value);
    }
  }
}
