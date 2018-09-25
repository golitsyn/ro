<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser.proto

namespace RO\Cmd {

  class ShareDamTarget extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $charid = 0;
    
    /**  @var int */
    public $damage = 0;
    
    /**  @var int */
    public $type = 1;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ShareDamTarget');

      // OPTIONAL UINT64 charid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "charid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL INT32 damage = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "damage";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL INT32 type = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_INT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 1;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <charid> has a value
     *
     * @return boolean
     */
    public function hasCharid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <charid> value
     *
     * @return \RO\Cmd\ShareDamTarget
     */
    public function clearCharid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <charid> value
     *
     * @return int
     */
    public function getCharid(){
      return $this->_get(1);
    }
    
    /**
     * Set <charid> value
     *
     * @param int $value
     * @return \RO\Cmd\ShareDamTarget
     */
    public function setCharid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <damage> has a value
     *
     * @return boolean
     */
    public function hasDamage(){
      return $this->_has(2);
    }
    
    /**
     * Clear <damage> value
     *
     * @return \RO\Cmd\ShareDamTarget
     */
    public function clearDamage(){
      return $this->_clear(2);
    }
    
    /**
     * Get <damage> value
     *
     * @return int
     */
    public function getDamage(){
      return $this->_get(2);
    }
    
    /**
     * Set <damage> value
     *
     * @param int $value
     * @return \RO\Cmd\ShareDamTarget
     */
    public function setDamage( $value){
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
     * @return \RO\Cmd\ShareDamTarget
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
     * @return \RO\Cmd\ShareDamTarget
     */
    public function setType( $value){
      return $this->_set(3, $value);
    }
  }
}
