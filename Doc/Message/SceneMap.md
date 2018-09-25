######SceneMap.proto

##AddMapItem
##2016-03-23
##shw
1.消息结构:
message MapItem
{
  optional uint64 guid = 1 [ default = 0 ];

  optional uint32 id = 2 [ default = 0 ];
  optional uint32 time = 3 [ default = 0 ];

  optional uint64 sourceid = 4 [ default = 0 ];

  optional ScenePos pos = 5;

  repeated uint64 owners = 6;
}

message AddMapItem
{
  optional Command cmd = 1 [ default = SCENE_USER_MAP_PROTOCMD ];
  optional MapParam param = 2 [ default = MAPPARAM_ADDMAPITEM ];

  repeated MapItem items = 3;
}

2.描述:在地图创建一个物品
3.处理进程:SceneServer,client	
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##AddMapItem

##PickupItem
##2016-03-23
##shw
1.消息结构:
message PickupItem
{
  optional Command cmd = 1 [ default = SCENE_USER_MAP_PROTOCMD ];
  optional MapParam param = 2 [ default = MAPPARAM_PICKUPITEM ];

  optional uint64 playerguid = 3 [ default = 0 ];
  optional uint64 itemguid = 4 [ default = 0 ];
  optional bool success = 5 [ default = false ];
}

2.描述:捡取地图上的一个物品
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##PickupItem

##AddMapUser
##2016-03-23
##shw
1.消息结构:
message MapUser
{
  optional uint64 guid = 1 [ default = 0 ];
  optional string name = 2;
  optional EGender gender = 3 [ default = EGENDER_MIN ];

  optional ScenePos pos = 4;
  optional ScenePos dest = 5;

  repeated UserAttr attrs = 6;
  repeated UserData datas = 7;
  repeated BufferData buffs = 8;

  optional uint32 skillid = 9;

  optional uint32 teamid = 10;
  optional string teamname = 11;
  optional CarrierInfo carrier = 12;
  optional ChatRoomSummary chatroom = 13;
  optional uint64 handsmaster = 14;
}

message AddMapUser
{
  optional Command cmd = 1 [ default = SCENE_USER_MAP_PROTOCMD ];
  optional MapParam param = 2 [ default = MAPPARAM_ADDMAPUSER ];

  repeated MapUser users = 3;
}

2.描述:在地图上添加一个玩家角色
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##AddMapUser

##AddMapNpc
##2016-03-23
##shw
1.消息结构:
message MapNpc
{
  optional uint64 id = 1 [ default = 0 ];
  optional string name = 2;
  optional uint32 npcID = 3 [ default = 0 ];
  optional uint32 scale = 4 [ default = 0 ];

  repeated uint32 character = 5;

  optional ScenePos pos = 6;
  optional ScenePos dest = 7;
  optional uint32 dir = 8;

  repeated UserData datas = 9;
  repeated UserAttr attrs = 10;

  optional uint64 owner = 11 [ default = 0 ];
  optional uint32 behaviour = 12 [ default = 0 ];
  optional uint32 uniqueid = 13 [ default = 0 ];

  optional string waitaction = 14;
  optional uint32 teamid = 15 [ default = 0 ];
  optional uint32 searchrange = 16 [ default = 0 ];
}

message AddMapNpc
{
  optional Command cmd = 1 [ default = SCENE_USER_MAP_PROTOCMD ];
  optional MapParam param = 2 [ default = MAPPARAM_ADDMAPNPC ];

  repeated MapNpc npcs = 3;
}

2.描述:在地图上添加一个npc
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##AddMapNpc

##AddMapTrap
##2016-03-23
##shw
1.消息结构:
message MapTrap
{
  optional uint64 id = 1;
  optional uint32 skillID = 2;
  optional ScenePos pos = 3;
  optional uint32 dir = 4;
  optional uint64 masterid = 5;
}

message AddMapTrap
{
  optional Command cmd = 1 [ default = SCENE_USER_MAP_PROTOCMD ];
  optional MapParam param = 2 [ default = MAPPARAM_ADDMAPTRAP ];

  repeated MapTrap traps = 3;
}

2.描述:在地图上添加一个陷阱
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##AddMapTrap

##AddMapAct
##2016-03-23
##shw
1.消息结构:
enum EActType
{
  EACTTYPE_MIN = 0;
  EACTTYPE_PURIFY = 1;
  EACTTYPE_SEAL = 2;
  EACTTYPE_MAX = 3;
}

message MapAct
{
  optional uint64 id = 1 [ default = 0 ];
  optional uint32 range = 2 [ default = 0 ];
  optional uint64 masterid = 3 [ default = 0 ];
  optional EActType type = 4 [ default = EACTTYPE_MIN ];
  optional uint32 actvalue = 5 [ default = 0 ];
  optional ScenePos pos = 6;
}

message AddMapAct
{
  optional Command cmd = 1 [ default = SCENE_USER_MAP_PROTOCMD ];
  optional MapParam param = 2 [ default = MAPPARAM_ADDMAPACT ];

  repeated MapAct acts = 3;
}

2.描述:在地图添加一个行为装置
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##AddMapAct

##ExitPointState
##2016-03-23
##shw
1.消息结构:
message ExitPointState
{
  optional Command cmd = 1 [ default = SCENE_USER_MAP_PROTOCMD ];
  optional MapParam param = 2 [ default = MAPPARAM_EXIT_POINT_STATE ];

  optional uint32 exitid = 3;
  optional uint32 visible = 4;
}

2.描述:设置传送点可见不可见
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ExitPointState

##MapCmdEnd
##2016-03-23
##shw
1.消息结构:
message MapCmdEnd
{
  optional Command cmd = 1 [ default = SCENE_USER_MAP_PROTOCMD ];
  optional MapParam param = 2 [ default = MAPPARAM_MAP_CMD_END ];
}

2.描述:玩家角色进入场景后完成通知
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##MapCmdEnd

##NpcSearchRangeCmd
##2016-03-23
##shw
1.消息结构:
message NpcSearchRangeCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_MAP_PROTOCMD ];
  optional MapParam param = 2 [ default = MAPPARAM_NPC_SEARCH_RANGE ];

  optional uint64 id = 3 [ default = 0 ]; 
  optional uint32 range = 4 [ default = 0 ];
}

2.描述:设置npc的寻敌范围
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##NpcSearchRangeCmd

##UserHandsCmd
##2016-03-23
##shw
1.消息结构:
message UserHandsCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_MAP_PROTOCMD ];
  optional MapParam param = 2 [ default = MAPPARAM_USER_HANDS ];

  optional uint64 player1 = 3 [ default = 0 ];
  optional uint64 player2 = 4 [ default = 0 ];

  optional uint32 isadd = 5 [ default = 1 ];
}

2.描述:玩家牵手通知
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UserHandsCmd
