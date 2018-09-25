<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneItem.proto

namespace RO\Cmd {

  class EnchantData extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\EEnchantType */
    public $type = \RO\Cmd\EEnchantType::EENCHANTTYPE_MIN;
    
    /**  @var \RO\Cmd\EnchantAttr[]  */
    public $attrs = array();
    
    /**  @var \RO\Cmd\EnchantExtra[]  */
    public $extras = array();
    
    /**  @var int[]  */
    public $patch = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.EnchantData');

      // OPTIONAL ENUM type = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EEnchantType';
      $f->default   = \RO\Cmd\EEnchantType::EENCHANTTYPE_MIN;
      $descriptor->addField($f);

      // REPEATED MESSAGE attrs = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "attrs";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\EnchantAttr';
      $descriptor->addField($f);

      // REPEATED MESSAGE extras = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "extras";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\EnchantExtra';
      $descriptor->addField($f);

      // REPEATED UINT32 patch = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "patch";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <type> has a value
     *
     * @return boolean
     */
    public function hasType(){
      return $this->_has(1);
    }
    
    /**
     * Clear <type> value
     *
     * @return \RO\Cmd\EnchantData
     */
    public function clearType(){
      return $this->_clear(1);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\EEnchantType
     */
    public function getType(){
      return $this->_get(1);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\EEnchantType $value
     * @return \RO\Cmd\EnchantData
     */
    public function setType( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <attrs> has a value
     *
     * @return boolean
     */
    public function hasAttrs(){
      return $this->_has(2);
    }
    
    /**
     * Clear <attrs> value
     *
     * @return \RO\Cmd\EnchantData
     */
    public function clearAttrs(){
      return $this->_clear(2);
    }
    
    /**
     * Get <attrs> value
     *
     * @param int $idx
     * @return \RO\Cmd\EnchantAttr
     */
    public function getAttrs($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <attrs> value
     *
     * @param \RO\Cmd\EnchantAttr $value
     * @return \RO\Cmd\EnchantData
     */
    public function setAttrs(\RO\Cmd\EnchantAttr $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <attrs>
     *
     * @return \RO\Cmd\EnchantAttr[]
     */
    public function getAttrsList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <attrs>
     *
     * @param \RO\Cmd\EnchantAttr $value
     * @return \RO\Cmd\EnchantData
     */
    public function addAttrs(\RO\Cmd\EnchantAttr $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <extras> has a value
     *
     * @return boolean
     */
    public function hasExtras(){
      return $this->_has(3);
    }
    
    /**
     * Clear <extras> value
     *
     * @return \RO\Cmd\EnchantData
     */
    public function clearExtras(){
      return $this->_clear(3);
    }
    
    /**
     * Get <extras> value
     *
     * @param int $idx
     * @return \RO\Cmd\EnchantExtra
     */
    public function getExtras($idx = NULL){
      return $this->_get(3, $idx);
    }
    
    /**
     * Set <extras> value
     *
     * @param \RO\Cmd\EnchantExtra $value
     * @return \RO\Cmd\EnchantData
     */
    public function setExtras(\RO\Cmd\EnchantExtra $value, $idx = NULL){
      return $this->_set(3, $value, $idx);
    }
    
    /**
     * Get all elements of <extras>
     *
     * @return \RO\Cmd\EnchantExtra[]
     */
    public function getExtrasList(){
     return $this->_get(3);
    }
    
    /**
     * Add a new element to <extras>
     *
     * @param \RO\Cmd\EnchantExtra $value
     * @return \RO\Cmd\EnchantData
     */
    public function addExtras(\RO\Cmd\EnchantExtra $value){
     return $this->_add(3, $value);
    }
    
    /**
     * Check if <patch> has a value
     *
     * @return boolean
     */
    public function hasPatch(){
      return $this->_has(4);
    }
    
    /**
     * Clear <patch> value
     *
     * @return \RO\Cmd\EnchantData
     */
    public function clearPatch(){
      return $this->_clear(4);
    }
    
    /**
     * Get <patch> value
     *
     * @param int $idx
     * @return int
     */
    public function getPatch($idx = NULL){
      return $this->_get(4, $idx);
    }
    
    /**
     * Set <patch> value
     *
     * @param int $value
     * @return \RO\Cmd\EnchantData
     */
    public function setPatch( $value, $idx = NULL){
      return $this->_set(4, $value, $idx);
    }
    
    /**
     * Get all elements of <patch>
     *
     * @return int[]
     */
    public function getPatchList(){
     return $this->_get(4);
    }
    
    /**
     * Add a new element to <patch>
     *
     * @param int $value
     * @return \RO\Cmd\EnchantData
     */
    public function addPatch( $value){
     return $this->_add(4, $value);
    }
  }
}
