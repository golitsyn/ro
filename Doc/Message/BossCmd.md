######BossCmd.proto
##Demo
##2016-03-08
##liuxin
1.消息结构:
2.描述:
3.处理进程:
4.网关转发:(这里填'无'要在网关里面加上处理,否则网关会有默认转发)
5.重入:
6.错误数据:
7.玩家是否获得道具:
8.玩家是否获得货币:
##2016-03-08 修改
##liuxin
##Demo

##BossListUserCmd
##2016-03-08
##liuxin
1.消息结构:
message BossInfoItem
{
  optional uint32 id = 1;
  optional uint32 refreshTime = 2;
  optional string lastKiller = 3;
}

message BossListUserCmd
{
  optional Command cmd = 1 [ default = SCENE_BOSS_PROTOCMD ];
  optional BossParam param = 2 [ default = BOSS_LIST_USER_CMD ];

  repeated BossInfoItem bosslist = 3;
}

2.描述:boss列表数据
3.处理进程:SessionServer,Client
4.网关转发:SessionServer
5.重入:多收到一次boss列表
6.错误数据:请求无参数
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##BossListUserCmd

##BossPosUserCmd
##2016-03-08
##liuxin
1.消息结构:
message BossPosUserCmd
{
  optional Command cmd = 1 [ default = SCENE_BOSS_PROTOCMD ];
  optional BossParam param = 2 [ default = BOSS_POS_USER_CMD ];

  optional ScenePos pos = 3;
}
2.描述:同步boss坐标
2.处理进程:Client
3.网关转发:无
4.重入:no
5.错误数据:no
6.玩家是否获得道具:no
7.玩家是否获得货币:no
##BossPosUserCmd

##KillBossUserCmd
##2016-03-08
##liuxin
1.消息结构:
message KillBossUserCmd
{
  optional Command cmd = 1 [ default = SCENE_BOSS_PROTOCMD ];
  optional BossParam param = 2 [ default = BOSS_KILL_USER_CMD ];

  optional uint64 userid = 3 [ default = 0];
}
2.描述:玩家击杀了boss
3.处理进程:Client
4.网关转发:无
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##KillBossUserCmd
