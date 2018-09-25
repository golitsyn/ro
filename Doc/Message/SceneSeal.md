######SceneSeal.proto
##载具
##2016-03-22
##shw
1.消息结构:
2.描述:
3.处理进程:
4.网关转发:(这里填'无'要在网关里面加上处理,否则网关会有默认转发)
5.重入:
6.错误数据:
7.玩家是否获得道具:
8.玩家是否获得货币:
##载具

##QuerySeal
##2016-03-22
##shw
1.消息结构:
message SealItem
{
  optional uint32 config = 1 [ default = 0 ];
  optional uint32 refreshtime = 2 [ default = 0 ];
  optional bool ownseal = 3 [ default = false ];
  optional ScenePos pos = 4;

  optional uint64 sealid = 5 [ default = 0 ];
  optional bool issealing = 6 [ default = false ];
  optional ESealType etype = 7 [ default = ESEALTYPE_NORMAL ];
}
message SealData
{
  optional uint32 mapid = 1 [ default = 0 ];
  repeated SealItem items = 2;
}
message QuerySeal
{
  optional Command cmd = 1 [ default = SCENE_USER_SEAL_PROTOCMD ];
  optional SealParam param = 2 [ default = SEALPARAM_QUERYSEAL ];

  repeated SealData datas = 3;
}

2.描述:发送当前地图上的封印
3.处理进程:SceneServer,client	
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##QuerySeal

##UpdateSeal
##2016-03-22
##shw
1.消息结构:
message UpdateSeal
{
  optional Command cmd = 1 [ default = SCENE_USER_SEAL_PROTOCMD ];
  optional SealParam param = 2 [ default = SEALPARAM_UPDATESEAL ];

  repeated SealData newdata = 3;
  repeated SealData deldata = 4;
}

2.描述:封印增删更新
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UpdateSeal

##SealTimer
##2016-03-21
##shw
1.消息结构:
message SealTimer
{
  optional Command cmd = 1 [ default = SCENE_USER_SEAL_PROTOCMD ];
  optional SealParam param = 2 [ default = SEALPARAM_SEALTIMER ];

  optional int32 speed = 3 [ default = 0 ];

  optional uint32 curvalue = 4 [ default = 0 ];
  optional uint32 maxvalue = 5 [ default = 0 ];

  optional uint32 stoptime = 6 [ default = 0 ];
  optional uint32 maxtime = 7 [ default = 0 ];
}

2.描述:封印进度更新
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SealTimer

##BeginSeal
##2016-03-22
##shw
1.消息结构:
message BeginSeal
{
  optional Command cmd = 1 [ default = SCENE_USER_SEAL_PROTOCMD ];
  optional SealParam param = 2 [ default = SEALPARAM_BEGINSEAL ];

  optional uint64 sealid = 3 [ default = 0 ];
}

2.描述:开始修复封印
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:只允许一个封印修复，第二次消息会被忽略
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##BeginSeal

##EndSeal
##2016-03-22
##shw
1.消息结构:
message EndSeal
{
  optional Command cmd = 1 [ default = SCENE_USER_SEAL_PROTOCMD ];
  optional SealParam param = 2 [ default = SEALPARAM_ENDSEAL ];

  optional bool success = 3 [ default = false ];
}

2.描述:封印结束通知
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:多次收到应答
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##EndSeal

##SealUserLeave
##2016-03-22
##shw
1.消息结构:
message SealUserLeave
{
  optional Command cmd = 1 [ default = SCENE_USER_SEAL_PROTOCMD ];
  optional SealParam param = 2 [ default = SEALPARAM_USERLEAVE ];
}

2.描述:通知离开封印范围
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:离开范围后无法继续触发
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SealUserLeave

##SealQueryList
##2016-03-21
##shw
1.消息结构:
message SealQueryList
{
  optional Command cmd = 1 [ default = SCENE_USER_SEAL_PROTOCMD ];
  optional SealParam param = 2 [ default = SEALPARAM_QUERYLIST ];

  repeated uint32 configid = 3;
  optional uint32 donetimes = 4 [ default = 0 ];
  optional uint32 maxtimes = 5 [ default = 0 ];
}

2.描述:查询开启的封印列表
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:获得相同的列表
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SealQueryList

##SealAcceptCmd
##2016-03-21
##shw
1.消息结构:
message SealAcceptCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_SEAL_PROTOCMD ];
  optional SealParam param = 2 [ default = SEALPARAM_ACCEPTSEAL ];

  optional uint32 seal = 3 [ default = 0 ];
  optional ScenePos pos = 4;

  optional bool abandon = 5 [ default = false ];
}

2.描述:接受或者放弃封印
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:错误进程不会出发
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SealAcceptCmd
