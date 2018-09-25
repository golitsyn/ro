<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneManual.proto

namespace RO\Cmd {

  class ManualVersion extends \DrSlump\Protobuf\Message {

    /**  @var int - \RO\Cmd\EManualType */
    public $type = \RO\Cmd\EManualType::EMANUALTYPE_MIN;
    
    /**  @var int */
    public $version = 0;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.ManualVersion');

      // OPTIONAL ENUM type = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "type";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EManualType';
      $f->default   = \RO\Cmd\EManualType::EMANUALTYPE_MIN;
      $descriptor->addField($f);

      // OPTIONAL UINT32 version = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "version";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
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
     * @return \RO\Cmd\ManualVersion
     */
    public function clearType(){
      return $this->_clear(1);
    }
    
    /**
     * Get <type> value
     *
     * @return int - \RO\Cmd\EManualType
     */
    public function getType(){
      return $this->_get(1);
    }
    
    /**
     * Set <type> value
     *
     * @param int - \RO\Cmd\EManualType $value
     * @return \RO\Cmd\ManualVersion
     */
    public function setType( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <version> has a value
     *
     * @return boolean
     */
    public function hasVersion(){
      return $this->_has(2);
    }
    
    /**
     * Clear <version> value
     *
     * @return \RO\Cmd\ManualVersion
     */
    public function clearVersion(){
      return $this->_clear(2);
    }
    
    /**
     * Get <version> value
     *
     * @return int
     */
    public function getVersion(){
      return $this->_get(2);
    }
    
    /**
     * Set <version> value
     *
     * @param int $value
     * @return \RO\Cmd\ManualVersion
     */
    public function setVersion( $value){
      return $this->_set(2, $value);
    }
  }
}
