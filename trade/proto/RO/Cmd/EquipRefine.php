<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneItem.proto

namespace RO\Cmd {

  class EquipRefine extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\Command */
    public $cmd = \RO\Cmd\Command::SCENE_USER_ITEM_PROTOCMD;
    
    /**  @var int - \RO\Cmd\ItemParam */
    public $param = \RO\Cmd\ItemParam::ITEMPARAM_REFINE;
    
    /**  @var string */
    public $guid = null;
    
    /**  @var int */
    public $composeid = 0;
    
    /**  @var int */
    public $refinelv = 0;
    
    /**  @var int - \RO\Cmd\ERefineResult */
    public $eresult = \RO\Cmd\ERefineResult::EREFINERESULT_MIN;
    
    /**  @var int */
    public $npcid = 0;
    
    /**  @var boolean */
    public $saferefine = false;
    
    /**  @var string[]  */
    public $itemguid = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.EquipRefine');

      // OPTIONAL ENUM cmd = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "cmd";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\Command';
      $f->default   = \RO\Cmd\Command::SCENE_USER_ITEM_PROTOCMD;
      $descriptor->addField($f);

      // OPTIONAL ENUM param = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "param";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ItemParam';
      $f->default   = \RO\Cmd\ItemParam::ITEMPARAM_REFINE;
      $descriptor->addField($f);

      // OPTIONAL STRING guid = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "guid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL UINT32 composeid = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "composeid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 refinelv = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "refinelv";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM eresult = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "eresult";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\ERefineResult';
      $f->default   = \RO\Cmd\ERefineResult::EREFINERESULT_MIN;
      $descriptor->addField($f);

      // OPTIONAL UINT64 npcid = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "npcid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL BOOL saferefine = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "saferefine";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // REPEATED STRING itemguid = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "itemguid";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
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
     * @return \RO\Cmd\EquipRefine
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
     * @return \RO\Cmd\EquipRefine
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
     * @return \RO\Cmd\EquipRefine
     */
    public function clearParam(){
      return $this->_clear(2);
    }
    
    /**
     * Get <param> value
     *
     * @return int - \RO\Cmd\ItemParam
     */
    public function getParam(){
      return $this->_get(2);
    }
    
    /**
     * Set <param> value
     *
     * @param int - \RO\Cmd\ItemParam $value
     * @return \RO\Cmd\EquipRefine
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
     * @return \RO\Cmd\EquipRefine
     */
    public function clearGuid(){
      return $this->_clear(3);
    }
    
    /**
     * Get <guid> value
     *
     * @return string
     */
    public function getGuid(){
      return $this->_get(3);
    }
    
    /**
     * Set <guid> value
     *
     * @param string $value
     * @return \RO\Cmd\EquipRefine
     */
    public function setGuid( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <composeid> has a value
     *
     * @return boolean
     */
    public function hasComposeid(){
      return $this->_has(4);
    }
    
    /**
     * Clear <composeid> value
     *
     * @return \RO\Cmd\EquipRefine
     */
    public function clearComposeid(){
      return $this->_clear(4);
    }
    
    /**
     * Get <composeid> value
     *
     * @return int
     */
    public function getComposeid(){
      return $this->_get(4);
    }
    
    /**
     * Set <composeid> value
     *
     * @param int $value
     * @return \RO\Cmd\EquipRefine
     */
    public function setComposeid( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <refinelv> has a value
     *
     * @return boolean
     */
    public function hasRefinelv(){
      return $this->_has(5);
    }
    
    /**
     * Clear <refinelv> value
     *
     * @return \RO\Cmd\EquipRefine
     */
    public function clearRefinelv(){
      return $this->_clear(5);
    }
    
    /**
     * Get <refinelv> value
     *
     * @return int
     */
    public function getRefinelv(){
      return $this->_get(5);
    }
    
    /**
     * Set <refinelv> value
     *
     * @param int $value
     * @return \RO\Cmd\EquipRefine
     */
    public function setRefinelv( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <eresult> has a value
     *
     * @return boolean
     */
    public function hasEresult(){
      return $this->_has(6);
    }
    
    /**
     * Clear <eresult> value
     *
     * @return \RO\Cmd\EquipRefine
     */
    public function clearEresult(){
      return $this->_clear(6);
    }
    
    /**
     * Get <eresult> value
     *
     * @return int - \RO\Cmd\ERefineResult
     */
    public function getEresult(){
      return $this->_get(6);
    }
    
    /**
     * Set <eresult> value
     *
     * @param int - \RO\Cmd\ERefineResult $value
     * @return \RO\Cmd\EquipRefine
     */
    public function setEresult( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <npcid> has a value
     *
     * @return boolean
     */
    public function hasNpcid(){
      return $this->_has(7);
    }
    
    /**
     * Clear <npcid> value
     *
     * @return \RO\Cmd\EquipRefine
     */
    public function clearNpcid(){
      return $this->_clear(7);
    }
    
    /**
     * Get <npcid> value
     *
     * @return int
     */
    public function getNpcid(){
      return $this->_get(7);
    }
    
    /**
     * Set <npcid> value
     *
     * @param int $value
     * @return \RO\Cmd\EquipRefine
     */
    public function setNpcid( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <saferefine> has a value
     *
     * @return boolean
     */
    public function hasSaferefine(){
      return $this->_has(8);
    }
    
    /**
     * Clear <saferefine> value
     *
     * @return \RO\Cmd\EquipRefine
     */
    public function clearSaferefine(){
      return $this->_clear(8);
    }
    
    /**
     * Get <saferefine> value
     *
     * @return boolean
     */
    public function getSaferefine(){
      return $this->_get(8);
    }
    
    /**
     * Set <saferefine> value
     *
     * @param boolean $value
     * @return \RO\Cmd\EquipRefine
     */
    public function setSaferefine( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <itemguid> has a value
     *
     * @return boolean
     */
    public function hasItemguid(){
      return $this->_has(9);
    }
    
    /**
     * Clear <itemguid> value
     *
     * @return \RO\Cmd\EquipRefine
     */
    public function clearItemguid(){
      return $this->_clear(9);
    }
    
    /**
     * Get <itemguid> value
     *
     * @param int $idx
     * @return string
     */
    public function getItemguid($idx = NULL){
      return $this->_get(9, $idx);
    }
    
    /**
     * Set <itemguid> value
     *
     * @param string $value
     * @return \RO\Cmd\EquipRefine
     */
    public function setItemguid( $value, $idx = NULL){
      return $this->_set(9, $value, $idx);
    }
    
    /**
     * Get all elements of <itemguid>
     *
     * @return string[]
     */
    public function getItemguidList(){
     return $this->_get(9);
    }
    
    /**
     * Add a new element to <itemguid>
     *
     * @param string $value
     * @return \RO\Cmd\EquipRefine
     */
    public function addItemguid( $value){
     return $this->_add(9, $value);
    }
  }
}

