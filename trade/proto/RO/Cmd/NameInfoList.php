<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: RecordTrade.proto

namespace RO\Cmd {

  class NameInfoList extends \DrSlump\Protobuf\Message {

    /**  @var \RO\Cmd\NameInfo[]  */
    public $name_infos = array();
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.NameInfoList');

      // REPEATED MESSAGE name_infos = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name_infos";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\RO\Cmd\NameInfo';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name_infos> has a value
     *
     * @return boolean
     */
    public function hasNameInfos(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name_infos> value
     *
     * @return \RO\Cmd\NameInfoList
     */
    public function clearNameInfos(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name_infos> value
     *
     * @param int $idx
     * @return \RO\Cmd\NameInfo
     */
    public function getNameInfos($idx = NULL){
      return $this->_get(1, $idx);
    }
    
    /**
     * Set <name_infos> value
     *
     * @param \RO\Cmd\NameInfo $value
     * @return \RO\Cmd\NameInfoList
     */
    public function setNameInfos(\RO\Cmd\NameInfo $value, $idx = NULL){
      return $this->_set(1, $value, $idx);
    }
    
    /**
     * Get all elements of <name_infos>
     *
     * @return \RO\Cmd\NameInfo[]
     */
    public function getNameInfosList(){
     return $this->_get(1);
    }
    
    /**
     * Add a new element to <name_infos>
     *
     * @param \RO\Cmd\NameInfo $value
     * @return \RO\Cmd\NameInfoList
     */
    public function addNameInfos(\RO\Cmd\NameInfo $value){
     return $this->_add(1, $value);
    }
  }
}

