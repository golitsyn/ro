######FuBenCmd.proto
##副本
##2016-03-22
##gsj
1.消息结构:
2.描述:
3.处理进程:
4.网关转发:(这里填'无'要在网关里面加上处理,否则网关会有默认转发)
5.重入:
6.错误数据:
7.玩家是否获得道具:
8.玩家是否获得货币:
##副本

##TrackFuBenUserCmd
##2016-03-22
##gsj

1.消息结构:

message TrackData
{
  optional uint32 star = 1;
  optional uint32 id = 2;
}

message TrackFuBenUserCmd
{
  optional Command cmd = 1 [ default = FUBEN_PROTOCMD ];
  optional FuBenParam param = 2 [ default = TRACK_FUBEN_USER_CMD ];

  repeated TrackData data = 3;
  optional uint32 dmapid = 4;
  optional uint32 endtime = 5;
}

2.描述:发送至client副本信息
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否


##FailFuBenUserCmd
##2016-03-22
##gsj

1.消息结构
message FailFuBenUserCmd
{
  optional Command cmd = 1 [ default = FUBEN_PROTOCMD ];
  optional FuBenParam param = 2 [ default = FAIL_FUBEN_USER_CMD ];
}
2.描述:通知客户端副本失败
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8:玩家是否获得货币:否


##LeaveFuBenUserCmd
##2016-03-22
##gsj

1.消息结构
message LeaveFuBenUserCmd
{
  optional Command cmd = 1 [ default = FUBEN_PROTOCMD ];
  optional FuBenParam param = 2 [ default = LEAVE_FUBEN_USER_CMD ];
  optional uint32 mapid = 3;
}
2.描述:通知客户端离开副本
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否


##SuccessFuBenUserCmd
##2016-03-22
##gsj

1.消息结构
message SuccessFuBenUserCmd
{
  optional Command cmd = 1 [ default = FUBEN_PROTOCMD ];
  optional FuBenParam param = 2 [ default = SUCCESS_FUBEN_USER_CMD ];
}

2.描述:通知客户端成功完成副本
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否


##MonsterCountUserCmd
##2016-03-22
##gsj

1.消息结构
message MonsterCountUserCmd
{
  optional Command cmd = 1 [ default = FUBEN_PROTOCMD ];
  optional FuBenParam param = 2 [ default = MONSTER_COUNT_USER_CMD ];

  optional uint32 num = 3;
}

2.描述:通知客户端副本内剩余怪物数量
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否


## -----------------无效协议----------------
message WorldStageItem
message StageStepItem
message WorldStageUserCmd
message StageNormalStepItem
message StageHardStepItem
message StageStepUserCmd
message StartStageUserCmd
message GetRewardStageUserCmd
message StageStepStarUserCmd
## -----------------无效协议----------------

