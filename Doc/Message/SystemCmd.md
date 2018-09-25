######SystemCmd.proto

##HeartBeatSystemCmd
##2016-04-20
##shw
1.消息结构:
message HeartBeatSystemCmd
{
  optional SystemCmd cmd = 1;
  optional SystemParam param = 2 [ default = HEART_BEAT_SYSCMD ];
} 

2.描述:服务器心跳
3.处理进程:无
4.网关转发:无
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##HeartBeatSystemCmd

##VerifyConnSystemCmd
##2016-04-20
##shw
1.消息结构:
message VerifyConnSystemCmd
{ 
  optional SystemCmd cmd = 1;
  optional SystemParam param = 2 [ default = VERIFY_CONN_SYSCMD ];
  optional string type = 3;
  optional string name = 4;
  optional bool ret = 5;
}

2.描述:服务器连接认证
3.处理进程:GateServer, RecordServer, SuperServer, SceneServer, SessionServer
4.网关转发:无
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##VerifyConnSystemCmd

##ServerListSystemCmd
##2016-04-20
##shw
1.消息结构:
message ServerListSystemCmd
{ 
  optional SystemCmd cmd = 1;
  optional SystemParam param = 2 [ default = SERVER_LIST_SYSCMD ];
  message Item
  {
    optional string type = 1;
    optional string name = 2;
    optional string ip = 3;
    optional uint32 port = 4;
  }
  repeated Item list = 3;
}

2.描述:服务器列表同步
3.处理进程:SuperServer, RegServer
4.网关转发:无
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ServerListSystemCmd

##ServerInitOkConnSystemCmd
##2016-04-20
##shw
1.消息结构:
message ServerInitOkConnSystemCmd
{ 
  optional SystemCmd cmd = 1;
  optional SystemParam param = 2 [ default = SERVER_INIT_OK_SYSCMD ];
  optional string name = 3;
}

2.描述:服务器启动完成通知
3.处理进程:GateServer, RecordServer, SuperServer, SceneServer, SessionServer
4.网关转发:无
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ServerInitOkConnSystemCmd

##ServerTimeSystemCmd
##2016-04-20
##shw
1.消息结构:
message ServerTimeSystemCmd
{ 
  optional SystemCmd cmd = 1;
  optional SystemParam param = 2 [ default = SERVER_TIME_SYSCMD ];
  optional uint32 adjust = 3;
}

2.描述:服务器系统时间调整
3.处理进程:GateServer, RecordServer, SuperServer, SceneServer, SessionServer
4.网关转发:无
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ServerTimeSystemCmd
