<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SessionSociality.proto

namespace RO\Cmd {

  class SocialData extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $guid = 0;
    
    /**  @var int */
    public $accid = 0;
    
    /**  @var int */
    public $level = 0;
    
    /**  @var int */
    public $offlinetime = 0;
    
    /**  @var int */
    public $relation = 0;
    
    /**  @var int */
    public $portrait = 0;
    
    /**  @var int */
    public $frame = 0;
    
    /**  @var int */
    public $hair = 0;
    
    /**  @var int */
    public $haircolor = 0;
    
    /**  @var int */
    public $body = 0;
    
    /**  @var int */
    public $head = 0;
    
    /**  @var int */
    public $face = 0;
    
    /**  @var int */
    public $mouth = 0;
    
    /**  @var int */
    public $eye = 0;
    
    /**  @var int */
    public $profic = 0;
    
    /**  @var int */
    public $adventurelv = 0;
    
    /**  @var int */
    public $adventureexp = 0;
    
    /**  @var int */
    public $appellation = 0;
    
    /**  @var int */
    public $mapid = 0;
    
    /**  @var int */
    public $zoneid = 0;
    
    /**  @var int - \RO\Cmd\EProfession */
    public $profession = \RO\Cmd\EProfession::EPROFESSION_MIN;
    
    /**  @var int - \RO\Cmd\EGender */
    public $gender = \RO\Cmd\EGender::EGENDER_MIN;
    
    /**  @var boolean */
    public $blink = false;
    
    /**  @var boolean */
    public $recall = false;
    
    /**  @var boolean */
    public $canrecall = false;
    
    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $guildname = null;
    
    /**  @var string */
    public $guildportrait = null;
    
    /**  @var string */
    public $createtime = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'Cmd.SocialData');

      // OPTIONAL UINT64 guid = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "guid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT64 accid = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "accid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 level = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "level";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 offlinetime = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "offlinetime";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 relation = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "relation";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 portrait = 6
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 6;
      $f->name      = "portrait";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 frame = 7
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 7;
      $f->name      = "frame";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 hair = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "hair";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 haircolor = 9
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 9;
      $f->name      = "haircolor";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 body = 10
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 10;
      $f->name      = "body";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 head = 11
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 11;
      $f->name      = "head";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 face = 12
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 12;
      $f->name      = "face";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 mouth = 13
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 13;
      $f->name      = "mouth";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 eye = 14
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 14;
      $f->name      = "eye";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 profic = 15
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 15;
      $f->name      = "profic";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 adventurelv = 16
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 16;
      $f->name      = "adventurelv";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 adventureexp = 17
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 17;
      $f->name      = "adventureexp";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 appellation = 18
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 18;
      $f->name      = "appellation";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 mapid = 19
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 19;
      $f->name      = "mapid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL UINT32 zoneid = 20
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 20;
      $f->name      = "zoneid";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = 0;
      $descriptor->addField($f);

      // OPTIONAL ENUM profession = 21
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 21;
      $f->name      = "profession";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EProfession';
      $f->default   = \RO\Cmd\EProfession::EPROFESSION_MIN;
      $descriptor->addField($f);

      // OPTIONAL ENUM gender = 22
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 22;
      $f->name      = "gender";
      $f->type      = \DrSlump\Protobuf::TYPE_ENUM;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->reference = '\RO\Cmd\EGender';
      $f->default   = \RO\Cmd\EGender::EGENDER_MIN;
      $descriptor->addField($f);

      // OPTIONAL BOOL blink = 23
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 23;
      $f->name      = "blink";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL BOOL recall = 24
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 24;
      $f->name      = "recall";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL BOOL canrecall = 25
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 25;
      $f->name      = "canrecall";
      $f->type      = \DrSlump\Protobuf::TYPE_BOOL;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $f->default   = false;
      $descriptor->addField($f);

      // OPTIONAL STRING name = 26
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 26;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING guildname = 27
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 27;
      $f->name      = "guildname";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING guildportrait = 28
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 28;
      $f->name      = "guildportrait";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // OPTIONAL STRING createtime = 29
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 29;
      $f->name      = "createtime";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <guid> has a value
     *
     * @return boolean
     */
    public function hasGuid(){
      return $this->_has(1);
    }
    
    /**
     * Clear <guid> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearGuid(){
      return $this->_clear(1);
    }
    
    /**
     * Get <guid> value
     *
     * @return int
     */
    public function getGuid(){
      return $this->_get(1);
    }
    
    /**
     * Set <guid> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setGuid( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <accid> has a value
     *
     * @return boolean
     */
    public function hasAccid(){
      return $this->_has(2);
    }
    
    /**
     * Clear <accid> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearAccid(){
      return $this->_clear(2);
    }
    
    /**
     * Get <accid> value
     *
     * @return int
     */
    public function getAccid(){
      return $this->_get(2);
    }
    
    /**
     * Set <accid> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setAccid( $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <level> has a value
     *
     * @return boolean
     */
    public function hasLevel(){
      return $this->_has(3);
    }
    
    /**
     * Clear <level> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearLevel(){
      return $this->_clear(3);
    }
    
    /**
     * Get <level> value
     *
     * @return int
     */
    public function getLevel(){
      return $this->_get(3);
    }
    
    /**
     * Set <level> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setLevel( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <offlinetime> has a value
     *
     * @return boolean
     */
    public function hasOfflinetime(){
      return $this->_has(4);
    }
    
    /**
     * Clear <offlinetime> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearOfflinetime(){
      return $this->_clear(4);
    }
    
    /**
     * Get <offlinetime> value
     *
     * @return int
     */
    public function getOfflinetime(){
      return $this->_get(4);
    }
    
    /**
     * Set <offlinetime> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setOfflinetime( $value){
      return $this->_set(4, $value);
    }
    
    /**
     * Check if <relation> has a value
     *
     * @return boolean
     */
    public function hasRelation(){
      return $this->_has(5);
    }
    
    /**
     * Clear <relation> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearRelation(){
      return $this->_clear(5);
    }
    
    /**
     * Get <relation> value
     *
     * @return int
     */
    public function getRelation(){
      return $this->_get(5);
    }
    
    /**
     * Set <relation> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setRelation( $value){
      return $this->_set(5, $value);
    }
    
    /**
     * Check if <portrait> has a value
     *
     * @return boolean
     */
    public function hasPortrait(){
      return $this->_has(6);
    }
    
    /**
     * Clear <portrait> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearPortrait(){
      return $this->_clear(6);
    }
    
    /**
     * Get <portrait> value
     *
     * @return int
     */
    public function getPortrait(){
      return $this->_get(6);
    }
    
    /**
     * Set <portrait> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setPortrait( $value){
      return $this->_set(6, $value);
    }
    
    /**
     * Check if <frame> has a value
     *
     * @return boolean
     */
    public function hasFrame(){
      return $this->_has(7);
    }
    
    /**
     * Clear <frame> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearFrame(){
      return $this->_clear(7);
    }
    
    /**
     * Get <frame> value
     *
     * @return int
     */
    public function getFrame(){
      return $this->_get(7);
    }
    
    /**
     * Set <frame> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setFrame( $value){
      return $this->_set(7, $value);
    }
    
    /**
     * Check if <hair> has a value
     *
     * @return boolean
     */
    public function hasHair(){
      return $this->_has(8);
    }
    
    /**
     * Clear <hair> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearHair(){
      return $this->_clear(8);
    }
    
    /**
     * Get <hair> value
     *
     * @return int
     */
    public function getHair(){
      return $this->_get(8);
    }
    
    /**
     * Set <hair> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setHair( $value){
      return $this->_set(8, $value);
    }
    
    /**
     * Check if <haircolor> has a value
     *
     * @return boolean
     */
    public function hasHaircolor(){
      return $this->_has(9);
    }
    
    /**
     * Clear <haircolor> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearHaircolor(){
      return $this->_clear(9);
    }
    
    /**
     * Get <haircolor> value
     *
     * @return int
     */
    public function getHaircolor(){
      return $this->_get(9);
    }
    
    /**
     * Set <haircolor> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setHaircolor( $value){
      return $this->_set(9, $value);
    }
    
    /**
     * Check if <body> has a value
     *
     * @return boolean
     */
    public function hasBody(){
      return $this->_has(10);
    }
    
    /**
     * Clear <body> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearBody(){
      return $this->_clear(10);
    }
    
    /**
     * Get <body> value
     *
     * @return int
     */
    public function getBody(){
      return $this->_get(10);
    }
    
    /**
     * Set <body> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setBody( $value){
      return $this->_set(10, $value);
    }
    
    /**
     * Check if <head> has a value
     *
     * @return boolean
     */
    public function hasHead(){
      return $this->_has(11);
    }
    
    /**
     * Clear <head> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearHead(){
      return $this->_clear(11);
    }
    
    /**
     * Get <head> value
     *
     * @return int
     */
    public function getHead(){
      return $this->_get(11);
    }
    
    /**
     * Set <head> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setHead( $value){
      return $this->_set(11, $value);
    }
    
    /**
     * Check if <face> has a value
     *
     * @return boolean
     */
    public function hasFace(){
      return $this->_has(12);
    }
    
    /**
     * Clear <face> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearFace(){
      return $this->_clear(12);
    }
    
    /**
     * Get <face> value
     *
     * @return int
     */
    public function getFace(){
      return $this->_get(12);
    }
    
    /**
     * Set <face> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setFace( $value){
      return $this->_set(12, $value);
    }
    
    /**
     * Check if <mouth> has a value
     *
     * @return boolean
     */
    public function hasMouth(){
      return $this->_has(13);
    }
    
    /**
     * Clear <mouth> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearMouth(){
      return $this->_clear(13);
    }
    
    /**
     * Get <mouth> value
     *
     * @return int
     */
    public function getMouth(){
      return $this->_get(13);
    }
    
    /**
     * Set <mouth> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setMouth( $value){
      return $this->_set(13, $value);
    }
    
    /**
     * Check if <eye> has a value
     *
     * @return boolean
     */
    public function hasEye(){
      return $this->_has(14);
    }
    
    /**
     * Clear <eye> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearEye(){
      return $this->_clear(14);
    }
    
    /**
     * Get <eye> value
     *
     * @return int
     */
    public function getEye(){
      return $this->_get(14);
    }
    
    /**
     * Set <eye> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setEye( $value){
      return $this->_set(14, $value);
    }
    
    /**
     * Check if <profic> has a value
     *
     * @return boolean
     */
    public function hasProfic(){
      return $this->_has(15);
    }
    
    /**
     * Clear <profic> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearProfic(){
      return $this->_clear(15);
    }
    
    /**
     * Get <profic> value
     *
     * @return int
     */
    public function getProfic(){
      return $this->_get(15);
    }
    
    /**
     * Set <profic> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setProfic( $value){
      return $this->_set(15, $value);
    }
    
    /**
     * Check if <adventurelv> has a value
     *
     * @return boolean
     */
    public function hasAdventurelv(){
      return $this->_has(16);
    }
    
    /**
     * Clear <adventurelv> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearAdventurelv(){
      return $this->_clear(16);
    }
    
    /**
     * Get <adventurelv> value
     *
     * @return int
     */
    public function getAdventurelv(){
      return $this->_get(16);
    }
    
    /**
     * Set <adventurelv> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setAdventurelv( $value){
      return $this->_set(16, $value);
    }
    
    /**
     * Check if <adventureexp> has a value
     *
     * @return boolean
     */
    public function hasAdventureexp(){
      return $this->_has(17);
    }
    
    /**
     * Clear <adventureexp> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearAdventureexp(){
      return $this->_clear(17);
    }
    
    /**
     * Get <adventureexp> value
     *
     * @return int
     */
    public function getAdventureexp(){
      return $this->_get(17);
    }
    
    /**
     * Set <adventureexp> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setAdventureexp( $value){
      return $this->_set(17, $value);
    }
    
    /**
     * Check if <appellation> has a value
     *
     * @return boolean
     */
    public function hasAppellation(){
      return $this->_has(18);
    }
    
    /**
     * Clear <appellation> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearAppellation(){
      return $this->_clear(18);
    }
    
    /**
     * Get <appellation> value
     *
     * @return int
     */
    public function getAppellation(){
      return $this->_get(18);
    }
    
    /**
     * Set <appellation> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setAppellation( $value){
      return $this->_set(18, $value);
    }
    
    /**
     * Check if <mapid> has a value
     *
     * @return boolean
     */
    public function hasMapid(){
      return $this->_has(19);
    }
    
    /**
     * Clear <mapid> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearMapid(){
      return $this->_clear(19);
    }
    
    /**
     * Get <mapid> value
     *
     * @return int
     */
    public function getMapid(){
      return $this->_get(19);
    }
    
    /**
     * Set <mapid> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setMapid( $value){
      return $this->_set(19, $value);
    }
    
    /**
     * Check if <zoneid> has a value
     *
     * @return boolean
     */
    public function hasZoneid(){
      return $this->_has(20);
    }
    
    /**
     * Clear <zoneid> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearZoneid(){
      return $this->_clear(20);
    }
    
    /**
     * Get <zoneid> value
     *
     * @return int
     */
    public function getZoneid(){
      return $this->_get(20);
    }
    
    /**
     * Set <zoneid> value
     *
     * @param int $value
     * @return \RO\Cmd\SocialData
     */
    public function setZoneid( $value){
      return $this->_set(20, $value);
    }
    
    /**
     * Check if <profession> has a value
     *
     * @return boolean
     */
    public function hasProfession(){
      return $this->_has(21);
    }
    
    /**
     * Clear <profession> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearProfession(){
      return $this->_clear(21);
    }
    
    /**
     * Get <profession> value
     *
     * @return int - \RO\Cmd\EProfession
     */
    public function getProfession(){
      return $this->_get(21);
    }
    
    /**
     * Set <profession> value
     *
     * @param int - \RO\Cmd\EProfession $value
     * @return \RO\Cmd\SocialData
     */
    public function setProfession( $value){
      return $this->_set(21, $value);
    }
    
    /**
     * Check if <gender> has a value
     *
     * @return boolean
     */
    public function hasGender(){
      return $this->_has(22);
    }
    
    /**
     * Clear <gender> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearGender(){
      return $this->_clear(22);
    }
    
    /**
     * Get <gender> value
     *
     * @return int - \RO\Cmd\EGender
     */
    public function getGender(){
      return $this->_get(22);
    }
    
    /**
     * Set <gender> value
     *
     * @param int - \RO\Cmd\EGender $value
     * @return \RO\Cmd\SocialData
     */
    public function setGender( $value){
      return $this->_set(22, $value);
    }
    
    /**
     * Check if <blink> has a value
     *
     * @return boolean
     */
    public function hasBlink(){
      return $this->_has(23);
    }
    
    /**
     * Clear <blink> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearBlink(){
      return $this->_clear(23);
    }
    
    /**
     * Get <blink> value
     *
     * @return boolean
     */
    public function getBlink(){
      return $this->_get(23);
    }
    
    /**
     * Set <blink> value
     *
     * @param boolean $value
     * @return \RO\Cmd\SocialData
     */
    public function setBlink( $value){
      return $this->_set(23, $value);
    }
    
    /**
     * Check if <recall> has a value
     *
     * @return boolean
     */
    public function hasRecall(){
      return $this->_has(24);
    }
    
    /**
     * Clear <recall> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearRecall(){
      return $this->_clear(24);
    }
    
    /**
     * Get <recall> value
     *
     * @return boolean
     */
    public function getRecall(){
      return $this->_get(24);
    }
    
    /**
     * Set <recall> value
     *
     * @param boolean $value
     * @return \RO\Cmd\SocialData
     */
    public function setRecall( $value){
      return $this->_set(24, $value);
    }
    
    /**
     * Check if <canrecall> has a value
     *
     * @return boolean
     */
    public function hasCanrecall(){
      return $this->_has(25);
    }
    
    /**
     * Clear <canrecall> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearCanrecall(){
      return $this->_clear(25);
    }
    
    /**
     * Get <canrecall> value
     *
     * @return boolean
     */
    public function getCanrecall(){
      return $this->_get(25);
    }
    
    /**
     * Set <canrecall> value
     *
     * @param boolean $value
     * @return \RO\Cmd\SocialData
     */
    public function setCanrecall( $value){
      return $this->_set(25, $value);
    }
    
    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(26);
    }
    
    /**
     * Clear <name> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearName(){
      return $this->_clear(26);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(26);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \RO\Cmd\SocialData
     */
    public function setName( $value){
      return $this->_set(26, $value);
    }
    
    /**
     * Check if <guildname> has a value
     *
     * @return boolean
     */
    public function hasGuildname(){
      return $this->_has(27);
    }
    
    /**
     * Clear <guildname> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearGuildname(){
      return $this->_clear(27);
    }
    
    /**
     * Get <guildname> value
     *
     * @return string
     */
    public function getGuildname(){
      return $this->_get(27);
    }
    
    /**
     * Set <guildname> value
     *
     * @param string $value
     * @return \RO\Cmd\SocialData
     */
    public function setGuildname( $value){
      return $this->_set(27, $value);
    }
    
    /**
     * Check if <guildportrait> has a value
     *
     * @return boolean
     */
    public function hasGuildportrait(){
      return $this->_has(28);
    }
    
    /**
     * Clear <guildportrait> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearGuildportrait(){
      return $this->_clear(28);
    }
    
    /**
     * Get <guildportrait> value
     *
     * @return string
     */
    public function getGuildportrait(){
      return $this->_get(28);
    }
    
    /**
     * Set <guildportrait> value
     *
     * @param string $value
     * @return \RO\Cmd\SocialData
     */
    public function setGuildportrait( $value){
      return $this->_set(28, $value);
    }
    
    /**
     * Check if <createtime> has a value
     *
     * @return boolean
     */
    public function hasCreatetime(){
      return $this->_has(29);
    }
    
    /**
     * Clear <createtime> value
     *
     * @return \RO\Cmd\SocialData
     */
    public function clearCreatetime(){
      return $this->_clear(29);
    }
    
    /**
     * Get <createtime> value
     *
     * @return string
     */
    public function getCreatetime(){
      return $this->_get(29);
    }
    
    /**
     * Set <createtime> value
     *
     * @param string $value
     * @return \RO\Cmd\SocialData
     */
    public function setCreatetime( $value){
      return $this->_set(29, $value);
    }
  }
}
