######SceneManual.proto
##冒险手册
##2016-03-24
##gsj
1.消息结构:
2.描述:
3.处理进程:
4.网关转发:(这里填'无'要在网关里面加上处理,否则网关会有默认转发)
5.重入:
6.错误数据:
7.玩家是否获得道具:
8.玩家是否获得货币:
##冒险手册

##QueryVersion
##2016-03-24
##gsj

1.消息结构:

enum EManualType
{
  EMANUALTYPE_MIN = 0;
  EMANUALTYPE_FASHION = 1;
  EMANUALTYPE_CARD = 2;
  EMANUALTYPE_EQUIP = 3;
  EMANUALTYPE_ITEM = 4;
  EMANUALTYPE_MOUNT = 5;
  EMANUALTYPE_MONSTER = 6;
  EMANUALTYPE_NPC = 7;
  EMANUALTYPE_HOMEPAGE = 8;
  EMANUALTYPE_MAP = 9;
  EMANUALTYPE_ACHIEVE = 10;
  EMANUALTYPE_SCENERY = 11;
  EMANUALTYPE_MAX = 12;
}

enum EManualStatus
{
  EMANUALSTATUS_MIN = 0;
  EMANUALSTATUS_DISPLAY = 1;
  EMANUALSTATUS_UNLOCK_CLIENT = 2;
  EMANUALSTATUS_UNLOCK = 3;
  EMANUALSTATUS_MAX = 4;
}
message ManualSubItem
{
  optional EManualStatus status = 1 [ default = EMANUALSTATUS_MIN ];
  optional uint32 id = 2 [ default = 0 ];
  optional bool unlock = 3 [ default = false ];
}
message ManualItem
{
  optional EManualType type = 1 [ default = EMANUALTYPE_MIN ];

  optional uint32 version = 2 [ default = 0 ];
  repeated ManualSubItem items = 3;
}
message ManualData
{
  optional uint32 point = 1 [ default = 0 ];
  optional uint32 level = 2 [ default = 0 ];

  repeated ManualItem items = 3;
}

message ManualVersion
{
  optional EManualType type = 1 [ default = EMANUALTYPE_MIN ];
  optional uint32 version = 2 [ default = 0 ];
}
message QueryVersion
{
  optional Command cmd = 1 [ default = SCENE_USER_MANUAL_PROTOCMD ];
  optional ManualParam param = 2 [ default = MANUALPARAM_QUERYVERSION ];

  repeated ManualVersion versions = 3;
}

2.描述:玩家上线时, 将当前冒险手册版本发送至客户端
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##QueryVersion



##QueryManualData
##2016-03-24
##gsj

1.消息结构:
message QueryManualData
{
  optional Command cmd = 1 [ default = SCENE_USER_MANUAL_PROTOCMD ];
  optional ManualParam param = 2 [ default = MANUALPARAM_QUERYDATA ];

  optional EManualType type = 3 [ default = EMANUALTYPE_MIN ];
  optional ManualItem item = 4;
}

2.描述:客户端请求发送冒险手册信息/服务端发送冒险手册信息
3.处理进程:SceneServer, client
4.网关转发:SceneServer
5.重入:多发送一次冒险手册信息
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##QueryManualData



##PointSync
##2016-03-24
##gsj

1.消息结构:
message PointSync
{
  optional Command cmd = 1 [ default = SCENE_USER_MANUAL_PROTOCMD ];
  optional ManualParam param = 2 [ default = MANUALPARAM_POINTSYNC ];

  optional uint32 point = 3 [ default = 0 ];
}

2.描述:玩家上线或冒险手册积分变化时, 发送积分至客户端
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##PointSync



##ManualUpdate
##2016-03-24
##gsj

1.消息结构:
message ManualUpdate
{
  optional Command cmd = 1 [ default = SCENE_USER_MANUAL_PROTOCMD ];
  optional ManualParam param = 2 [ default = MANUALPARAM_UPDATE ];

  optional ManualItem update = 3;
}

2.描述:冒险手册信息变化时, 通知客户端
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##ManualUpdate



##GetAchieveReward
##2016-03-24
##gsj
##################### 该消息暂时无效 ##################

1.消息结构:
message GetAchieveReward
{
  optional Command cmd = 1 [ default = SCENE_USER_MANUAL_PROTOCMD ];
  optional ManualParam param = 2 [ default = MANUALPARAM_GETREWARD ];

  optional uint32 id = 3 [ default = 0 ];
}

2.描述:领取成就奖励
3.处理进程:SceneServer
4.网关转发:SceneServer
5.重入:第二次接收无效
6.错误数据:无
7.玩家是否获得道具:是
8.玩家是否获得货币:是
##GetAchieveReward



##Unlock
##2016-03-24
##gsj

1.消息结构:
message Unlock
{
  optional Command cmd = 1 [ default = SCENE_USER_MANUAL_PROTOCMD ];
  optional ManualParam param = 2 [ default = MANUALPARAM_UNLOCK ];

  optional EManualType type = 3 [ default = EMANUALTYPE_MIN ];
  optional uint32 id = 4 [ default = 0 ];
}

2.描述:客户端点击可解锁的冒险手册, 进行解锁
3.处理进程:SceneServer
4.网关转发:SceneServer
5.重入:第二次接收到相同消息,会检测不合法过滤掉
6.错误数据:无
7.玩家是否获得道具:是
8.玩家是否获得货币:是
##Unlock



##SkillPointSync
##2016-03-24
##gsj

1.消息结构:
message SkillPointSync
{
  optional Command cmd = 1 [ default = SCENE_USER_MANUAL_PROTOCMD ];
  optional ManualParam param = 2 [ default = MANUALPARAM_SKILLPOINTSYNC ];

  optional uint32 skillpoint = 3 [ default = 0 ];
}

2.描述:玩家上线或冒险技能积分变化时, 发送冒险技能积分至客户
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##SkillPointSync

