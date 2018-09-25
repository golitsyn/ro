######LoginUserCmd.proto
##载具
##2016-03-23
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

##AccPassRegUserCmd
##2016-03-23
##shw
1.消息结构:
message AccPassRegUserCmd
{
  optional Command cmd = 1 [ default = LOGIN_USER_PROTOCMD ];
  optional LoginCmdParam param = 2 [ default = ACCPASS_REG_USER_CMD ];
  required string acc = 3;
  required uint32 zoneID = 4;
}

2.描述:客户端登陆验证(选择服务器GateServer地址)
3.处理进程:RegServer,client	
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##AccPassRegUserCmd

##GateIPUserCmd
##2016-03-23
##shw
1.消息结构:
message LoginDataPB
{
  required string sha1 = 1;
  required uint64 accid = 2;
  required uint32 loginTime = 3;
  required uint32 zoneid = 4;
  required uint32 addict = 5;
  required string source = 6;
  required string accName = 7;
  required uint32 accCreateTime = 8;
  required uint32 firstZoneID = 9;
  required uint32 version = 10;
}

message GateIPUserCmd
{
  optional Command cmd = 1 [ default = LOGIN_USER_PROTOCMD ];
  optional LoginCmdParam param = 2 [ default = GATE_IP_USER_CMD ];
  required uint32 ip = 3;
  required uint32 port = 4;
  required LoginDataPB data = 5;
}

2.描述:通知客户端网关地址
3.处理进程:RegServer,client
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##GateIPUserCmd

##RegGateUserCmd
##2016-03-21
##shw
1.消息结构:
message LoginDataPB
{
  required string sha1 = 1;
  required uint64 accid = 2;
  required uint32 loginTime = 3;
  required uint32 zoneid = 4;
  required uint32 addict = 5;
  required string source = 6;
  required string accName = 7;
  required uint32 accCreateTime = 8;
  required uint32 firstZoneID = 9;
  required uint32 version = 10;
}
message RegGateUserCmd
{
  optional Command cmd = 1 [ default = LOGIN_USER_PROTOCMD ];
  optional LoginCmdParam param = 2 [ default = REG_GATE_USER_CMD ];
  required LoginDataPB data = 3;
}

2.描述:客户端登陆请求
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##RegGateUserCmd

##RegResultUserCmd
##2016-03-23
##shw
1.消息结构:
message RegResultUserCmd
{
  optional Command cmd = 1 [ default = LOGIN_USER_PROTOCMD ];
  optional LoginCmdParam param = 2 [ default = REG_RESULT_USER_CMD ];
  required uint32 id = 3 [ default = 0 ];
  required RegErrRet ret = 4;
}

2.描述:客户端登陆结果返回(错误)
3.处理进程:RegServer,client
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##RegResultUserCmd

##CreateCharUserCmd
##2016-03-23
##shw
1.消息结构:
message CreateCharUserCmd
{
  optional Command cmd = 1 [ default = LOGIN_USER_PROTOCMD ];
  optional LoginCmdParam param = 2 [ default = CREATE_CHAR_USER_CMD ];
  required LoginDataPB data = 3;
  required string name = 4;
  required uint32 role_sex = 5;
  required uint32 profession = 6;
  required uint32 hair = 7;
  required uint32 haircolor = 8;
  required uint32 clothcolor = 9;
}

2.描述:封印结束通知
3.处理进程:GateServer,client
4.网关转发:GateServer
5.重入:第二次创建会失败
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##CreateCharUserCmd

##SnapShotUserCmd
##2016-03-22
##shw
1.消息结构:
message SnapShotUserCmd
{
  optional Command cmd = 1 [ default = LOGIN_USER_PROTOCMD ];
  optional LoginCmdParam param = 2 [ default = SNAPSHOT_USER_CMD ];
  required SnapShotDataPB data = 3;
}

2.描述:玩家角色快照数据
3.处理进程:GateServer,client
4.网关转发:GateServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SnapShotUserCmd

##SelectRoleUserCmd
##2016-03-21
##shw
1.消息结构:
message SelectRoleUserCmd
{
  optional Command cmd = 1 [ default = LOGIN_USER_PROTOCMD ];
  optional LoginCmdParam param = 2 [ default = SELECT_ROLE_USER_CMD ];
  required uint64 id = 3;
  optional uint32 zoneID = 4;
  optional uint64 accid = 5;
}

2.描述:客户端选择角色进入游戏
3.处理进程:GateServer,client
4.网关转发:GateServer
5.重入:重登陆
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SelectRoleUserCmd

##LoginResultUserCmd
##2016-03-21
##shw
1.消息结构:
message LoginResultUserCmd
{
  optional Command cmd = 1 [ default = LOGIN_USER_PROTOCMD ];
  optional LoginCmdParam param = 2 [ default = LOGIN_RESULT_USER_CMD ];
  required uint32 ret = 3 [ default = 0 ];
}

2.描述:选择角色后登陆结果返回
3.处理进程:GateServer,client
4.网关转发:GateServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##LoginResultUserCmd

##DeleteCharUserCmd
##2016-03-21
##shw
1.消息结构:
message DeleteCharUserCmd
{
  optional Command cmd = 1 [ default = LOGIN_USER_PROTOCMD ];
  optional LoginCmdParam param = 2 [ default = DELETE_CHAR_USER_CMD ];
  required uint64 id = 3;
}

2.描述:删除游戏角色
3.处理进程:GateServer,client
4.网关转发:GateServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##DeleteCharUserCmd

##HeartBeatUserCmd
##2016-03-21
##shw
1.消息结构:
message HeartBeatUserCmd
{
  optional Command cmd = 1 [ default = LOGIN_USER_PROTOCMD ];
  optional LoginCmdParam param = 2 [ default = HEART_BEAT_USER_CMD ];

  optional uint64 time = 3 [ default = 0 ];
}

2.描述:客户端心跳包
3.处理进程:GateServer,client
4.网关转发:GateServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##HeartBeatUserCmd

##ServerTimeUserCmd
##2016-03-21
##shw
1.消息结构:
message ServerTimeUserCmd
{
  optional Command cmd = 1 [ default = LOGIN_USER_PROTOCMD ];
  optional LoginCmdParam param = 2 [ default = SERVERTIME_USER_CMD ];

  optional uint64 time = 3 [ default = 0 ];
}

2.描述:客户端请求服务器时间
3.处理进程:GateServer,client
4.网关转发:GateServer
5.重入:获得服务器时间
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ServerTimeUserCmd
