######SceneSkill.proto

##技能数据结构
enum SkillParam
{
  SKILLPARAM_SKILLITEM = 1;
  SKILLPARAM_SKILLUPDATE = 2;
  SKILLPARAM_LEVELUPSKILL = 3;
  SKILLPARAM_EQUIPSKILL = 4;
  SKILLPARAM_RESETSKILL = 5;
  SKILLPARAM_SKILLVALIDPOS = 6;
  SKILLPARAM_CHANGE_SKILL = 7;
}

enum ESkillType
{
  ESKILLTYPE_MIN = 0;
  ESKILLTYPE_ACTIVE = 1;
  ESKILLTYPE_BUFF = 2;
  ESKILLTYPE_PASSIVE = 3;
  ESKILLTYPE_HEAL = 4;
  ESKILLTYPE_TELESPORT = 5;
  ESKILLTYPE_BOWLINGBASH = 6;
  ESKILLTYPE_PURIFY = 7;
  ESKILLTYPE_TRANSPORT = 8;
  ESKILLTYPE_COLLECT = 9;
  ESKILLTYPE_SUMMON = 10;
  ESKILLTYPE_SUICIDE = 11;
  ESKILLTYPE_FLASH = 12;
  ESKILLTYPE_FAKEDEAD = 13;
  ESKILLTYPE_EXPEL = 14;
  ESKILLTYPE_REBIRTH = 15;
  ESKILLTYPE_TRAPSKILL = 16;
  ESKILLTYPE_REPAIR = 17;
  ESKILLTYPE_BEATBACK = 18;
  ESKILLTYPE_MAX = 19;
}

enum ESkillLogic
{
  ESKILLLOGIC_MIN = 0;
  ESKILLLOGIC_ADDBUFF = 1;
  ESKILLLOGIC_FORWARDRECT = 2;
  ESKILLLOGIC_LOCKEDTARGET = 3;
  ESKILLLOGIC_SELFRANGE = 4;
  ESKILLLOGIC_POINTRANGE = 5;
  ESKILLLOGIC_POINTRANGEEFFECTIVE = 6;
  ESKILLLOGIC_POINTRECT = 7;
  ESKILLLOGIC_MISSILE = 8;
  ESKILLLOGIC_MAX = 9;
};

enum ESkillCamp
{
  ESKILLCAMP_MIN = 0;
  ESKILLCAMP_FRIEND = 1;
  ESKILLCAMP_ENEMY = 2;
  ESKILLCAMP_MAX = 3;
};

enum EElementType
{
  EELEMENTTYPE_MIN = 0;
  EELEMENTTYPE_WIND = 1;
  EELEMENTTYPE_EARTH = 2;
  EELEMENTTYPE_WATER = 3;
  EELEMENTTYPE_FIRE = 4;
  EELEMENTTYPE_NEUTRAL = 5;
  EELEMENTTYPE_HOLY = 6;
  EELEMENTTYPE_SHADOW = 7;
  EELEMENTTYPE_GHOST = 8;
  EELEMENTTYPE_UNDEAD = 9;
  EELEMENTTYPE_POSION = 10;
  EELEMENTTYPE_MAX = 11;
};

message SkillConsume
{
  optional uint32 curvalue = 1 [ default = 0 ];
  optional uint32 maxvalue = 2 [ default = 0 ];
  optional uint32 nexttime = 3 [ default = 0 ];
}

message SkillItem
{
  optional uint32 id = 1 [ default = 0 ];
  optional uint32 pos = 2 [ default = 0 ];
  optional uint32 cd = 3 [ default = 0 ];

  optional bool active = 4 [ default = false ];
  optional bool learn = 5 [ default = false ];
  optional ESource source = 6 [ default = ESOURCE_MIN ];
  optional EProfession profession = 7 [ default = EPROFESSION_MIN ];
  optional SkillConsume consume = 8;

  optional uint32 sourceid = 9 [ default = 0 ];
  optional bool shadow = 10 [ default = false ];

  optional uint32 autopos = 11 [ default = 0 ];
}

message SkillData
{
  optional uint32 usedpoint = 1 [ default = 0 ];

  optional EProfession profession = 2 [ default = EPROFESSION_MIN ];
  repeated SkillItem items = 3;
}

##技能数据结构

##ReqSkillData
##2016-03-23
##shw
1.消息结构:
message ReqSkillData
{
  optional Command cmd = 1 [ default = SCENE_USER_SKILL_PROTOCMD ];
  optional SkillParam param = 2 [ default = SKILLPARAM_SKILLITEM ];

  repeated SkillData data = 3;
}

2.描述:客户端技能数据请求
3.处理进程:SceneServer,client	
4.网关转发:SceneServer
5.重入:发送一次，获得一次技能数据
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ReqSkillData

##SkillUpdate
##2016-03-23
##shw
1.消息结构:
message SkillUpdate
{
  optional Command cmd = 1 [ default = SCENE_USER_SKILL_PROTOCMD ];
  optional SkillParam param = 2 [ default = SKILLPARAM_SKILLUPDATE ];

  repeated SkillData update = 3;
  repeated SkillData del = 4;
}

2.描述:技能的添加和删除更新
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SkillUpdate

##LevelupSkill
##2016-03-23
##shw
1.消息结构:
enum ELevelupType
{
  ELEVELUPTYPE_MIN = 0;
  ELEVELUPTYPE_MT = 1;
  ELEVELUPTYPE_AT = 2;
  ELEVELUPTYPE_MAX = 3;
}
message LevelupSkill
{
  optional Command cmd = 1 [ default = SCENE_USER_SKILL_PROTOCMD ];
  optional SkillParam param = 2 [ default = SKILLPARAM_LEVELUPSKILL ];

  optional ELevelupType type = 3 [ default = ELEVELUPTYPE_MIN ];
  repeated uint32 skillids = 4;
}

2.描述:升级技能
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:一个技能同一等级只能被学习一次，相同的学习只能执行一次
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##LevelupSkill

##EquipSkill
##2016-03-23
##shw
1.消息结构:
message EquipSkill
{
  optional Command cmd = 1 [ default = SCENE_USER_SKILL_PROTOCMD ];
  optional SkillParam param = 2 [ default = SKILLPARAM_EQUIPSKILL ];

  optional uint32 skillid = 3 [ default = 0 ];
  optional uint32 pos = 4 [ default = 0 ];
  optional uint32 sourceid = 5 [ default = 0 ];
  optional ESkillShortcut efrom = 6 [ default = ESKILLSHORTCUT_MIN ];
  optional ESkillShortcut eto = 7 [ default = ESKILLSHORTCUT_MIN ];
}

2.描述:装备技能到技能槽
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:新技能会覆盖旧技能位置
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##EquipSkill

##ResetSkill
##2016-03-23
##shw
1.消息结构:
message ResetSkill
{
  optional Command cmd = 1 [ default = SCENE_USER_SKILL_PROTOCMD ];
  optional SkillParam param = 2 [ default = SKILLPARAM_RESETSKILL ];
}

2.描述:重置技能
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ResetSkill

##SkillValidPos
##2016-03-23
##shw
1.消息结构:
message SkillValidPos
{
  optional Command cmd = 1 [ default = SCENE_USER_SKILL_PROTOCMD ];
  optional SkillParam param = 2 [ default = SKILLPARAM_SKILLVALIDPOS ];

  repeated uint32 pos = 3;
  repeated uint32 autopos = 4;
}

2.描述:技能槽数据请求和发送
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SkillValidPos

##ChangeSkillCmd
##2016-03-23
##shw
1.消息结构:
message ChangeSkillCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_SKILL_PROTOCMD ];
  optional SkillParam param = 2 [ default = SKILLPARAM_CHANGE_SKILL ];

  optional uint32 skillid = 3;
  optional string type = 4;
  optional uint32 isadd = 5;
  optional uint32 key = 6;
}

2.描述:修改技能参数
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ChangeSkillCmd
