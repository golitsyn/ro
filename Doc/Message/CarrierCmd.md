######CarrierCmd.proto
##载具
##2016-03-21
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

##CarrierInfoUserCmd
##2016-03-21
##shw
1.消息结构:
message CarrierMember
{ 
  optional uint64 id = 1; 
  optional uint32 index = 2;
  optional string name = 3;
}

message CarrierInfoUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_CARRIER_INFO ];
  
  optional uint32 carrierid = 3;
  optional uint64 masterid = 4;
  repeated CarrierMember members = 5;
  optional uint32 needanimation = 6 [ default = 1 ];
}

2.描述:查询载具信息
3.处理进程:SceneServer,client	
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##CarrierInfoUserCmd

##CreateCarrierUserCmd
##2016-03-21
##shw
1.消息结构:
message CreateCarrierUserCmd
{ 
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_CREATE_CARRIER ];
  
  optional uint32 carrierid = 3;
  optional uint32 line = 4;
} 

2.描述:创建载具对象模型
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:第一次创建成功，之后创建消息会被忽略
6.错误数据:不合法载具id失败
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##CreateCarrierUserCmd

##InviteCarrierUserCmd
##2016-03-21
##shw
1.消息结构:
message InviteCarrierUserCmd
{ 
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_INVITE_CARRIER ];
  
  optional uint64 masterid = 3;
  optional string mastername = 4;
  optional uint32 carrierid = 5;
} 

2.描述:邀请玩家进入载具
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:玩家多次收到邀请
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##InviteCarrierUserCmd

##JoinCarrierUserCmd
##2016-03-21
##shw
1.消息结构:
message JoinCarrierUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_JOIN_CARRIER ];

  optional uint64 masterid = 3;
  optional string mastername = 4;
  optional uint32 carrierid = 5;
  optional bool agree = 6;
}

2.描述:邀请信息通知和应答
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:多次收到通知和应答
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##JoinCarrierUserCmd

##RetJoinCarrierUserCmd
##2016-03-21
##shw
1.消息结构:
message RetJoinCarrierUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_RET_JOIN_CARRIER ];

  optional string membername = 3;
  optional bool agree = 4;
  optional uint64 memberid = 5;
  optional uint64 masterid = 6;
}

2.描述:成员应答反馈给载具拥有者
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:多次收到应答
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##RetJoinCarrierUserCmd

##LeaveCarrierUserCmd
##2016-03-21
##shw
1.消息结构:
message LeaveCarrierUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_LEAVE_CARRIER ];

  optional uint64 charid = 3;
  optional ScenePos pos = 4;
  optional uint64 masterid = 5;
  optional uint64 newmasterid = 6;
  optional bool all = 7 [ default = false ];
}

2.描述:离开载具
3.处理进程:SceneServer,client
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##LeaveCarrierUserCmd

##ReachCarrierUserCmd
##2016-03-21
##shw
1.消息结构:
message ReachCarrierUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_REACH_CARRIER ];

  optional ScenePos pos = 3;
  optional uint64 masterid = 4;
}

2.描述:载具到达目的地
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ReachCarrierUserCmd

##CarrierMoveUserCmd
##2016-03-21
##shw
1.消息结构:
message CarrierMoveUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_CARRIER_MOVE ];

  optional ScenePos pos = 3;
  optional uint32 progress = 4;
  optional uint64 masterid = 5;
}

2.描述:客户端移动过程位置同
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:相同进程只会出发一次
6.错误数据:错误进程不会出发
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##CarrierMoveUserCmd

##CarrierStartUserCmd
##2016-03-21
##shw
1.消息结构:
message CarrierStartUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_CARRIER_START ];

  optional uint32 line = 3;
  optional uint64 masterid = 4;
}

2.描述:载具启动
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:重置载具开始状态
6.错误数据:
7.玩家是否获得道具:
8.玩家是否获得货币:
##CarrierStartUserCmd

##CarrierWaitListUserCmd
##2016-03-21
##shw
1.消息结构:
message CarrierWaitListUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_CARRIER_WAIT_LIST ];

  repeated CarrierMember members = 3;
  optional uint64 masterid = 4;
}

2.描述:载具开启前乘员列表
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##CarrierWaitListUserCmd

##ChangeCarrierUserCmd
##2016-03-21
##shw
1.消息结构:
message ChangeCarrierUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_CHANGE_CARRIER ];

  optional uint32 carrierid = 3[ default = 0 ];
  optional uint64 masterid = 4 [ default = 0 ];
}

2.描述:更换载具
3.处理进程:SceneServer,client
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ChangeCarrierUserCmd

##FerrisWheelUserCmd
##2016-03-21
##shw
1.消息结构:
message FerrisWheelUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_FERRISWHEEL ];

  optional string name = 3;
  optional uint32 ret = 4;
  optional uint32 carrierid = 5 [ default = 0 ];
  optional uint64 charid = 6 [ default = 0 ];
}

2.描述:开启摩天轮并邀请进入摩天轮
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##FerrisWheelUserCmd

##StartFerrisWheelUserCmd
##2016-03-21
##shw
1.消息结构:
message StartFerrisWheelUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_START_FERRISWHEEL ];

  optional uint64 charid = 3 [ default = 0 ];
  optional uint64 masterid = 4 [ default = 0 ];
}

2.描述:开启摩天轮副本
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:创建唯一一个副本
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##StartFerrisWheelUserCmd

##CatchUserJoinCarrierUserCmd
##2016-03-21
##shw
1.消息结构:
message CatchUserJoinCarrierUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_CARRIER_PROTOCMD ];
  optional CarrierParam param = 2 [ default = MAPPARAM_CATCH_USER_JOIN_CARRIER ];

  optional uint64 charid = 3 [ default = 0 ];
  optional uint64 masterid = 4 [ default = 0 ];
  optional uint32 mapid = 5 [ default = 0 ];
}

2.描述:拉玩家进入载具
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:相同玩家只能拉一次
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##CatchUserJoinCarrierUserCmd
