######InfiniteTower.proto
##无限塔
##2016-03-21
##gsj
1.消息结构:
2.描述:
3.处理进程:
4.网关转发:(这里填'无'要在网关里面加上处理,否则网关会有默认转发)
5.重入:
6.错误数据:
7.玩家是否获得道具:
8.玩家是否获得货币:
##无限塔

##TeamTowerInfoCmd
##2016-03-21
##gsj

1.消息结构:
message TeamTowerInfoCmd
{
  optional Command cmd = 1 [ default = INFINITE_TOWER_PROTOCMD ];
  optional TowerParam param = 2 [ default = ETOWERPARAM_TEAMTOWERINFO ];
  optional uint32 teamid = 3 [ default = 0 ];
}

2.描述:client 请求队伍无限塔数据
3.处理进程:SceneServer
4.网关转发:SceneServer
5.重入:多发送一次队伍无限塔数据
6.错误数据:无
7.玩家是否获得道具:no
8.玩家是否获得货币:no


##TeamTowerSummaryCmd
##2016-03-21
##gsj

1.消息结构:
message UserTowerLayer
{
  optional uint32 layer = 1 [ default = 0 ];
  optional uint32 utime = 2 [ default = 0 ];
  optional bool rewarded = 3 [ default = false ];
}

message UserTowerInfo
{
  optional uint32 oldmaxlayer = 1 [ default = 0 ];
  optional uint32 curmaxlayer = 2 [ default = 0 ];

  repeated UserTowerLayer layers = 3;
}

message TeamTowerSummary
{
  optional uint32 teamid = 1 [ default = 0 ];
  optional uint32 layer = 2 [ default = 0 ];

  optional UserTowerInfo leadertower = 4;

  repeated uint64 members = 3;
}

message TeamTowerInfoCmd
{
  optional Command cmd = 1 [ default = INFINITE_TOWER_PROTOCMD ];
  optional TowerParam param = 2 [ default = ETOWERPARAM_TEAMTOWERINFO ];
  optional uint32 teamid = 3 [ default = 0 ];
}

message TeamTowerSummaryCmd
{
  optional Command cmd = 1 [ default = INFINITE_TOWER_PROTOCMD ];
  optional TowerParam param = 2 [ default = ETOWERPARAM_TEAMTOWERSUMMARY ];

  optional TeamTowerSummary teamtower = 3;
  optional uint32 maxlayer = 4 [ default = 0 ];
}

2.描述:server发送到client的队伍无限塔数据
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:无
8.玩家是否获得货币:无


##TeamTowerInviteCmd
##2016-03-21
##gsj

1.消息结构:
message TeamTowerInviteCmd
{
  optional Command cmd = 1 [ default = INFINITE_TOWER_PROTOCMD ];
  optional TowerParam param = 2 [ default = ETOWERPARAM_INVITE ];
}

2.描述:队长邀请队伍成员进入无限塔
3.处理进程:SessionServer, SceneServer
4.网关转发:SessionServer
5.重入:给所有队友再次发送邀请信息
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否


##TeamTowerReplyCmd
##2016-03-21
##gsj

1.消息结构
enum ETowerReply
{
  ETOWERREPLY_AGREE = 1;
  ETOWERREPLY_DISAGREE = 2;
}

message TeamTowerReplyCmd
{
  optional Command cmd = 1 [ default = INFINITE_TOWER_PROTOCMD ];
  optional TowerParam param = 2 [ default = ETOWERPARAM_REPLY ];

  optional ETowerReply eReply = 3 [ default = ETOWERREPLY_DISAGREE ];
  optional uint64 userid = 4 [ default = 0 ];
}

2.描述:队员回复队长是否接受进入无限塔的邀请
3.处理进程:SessionServer, client
4.网关转发:SessionServer
5.重入:队长多次收到队员回复信息
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否


##EnterTower
##2016-03-21
##gsj

1.消息结构
message EnterTower
{
  optional Command cmd = 1 [ default = INFINITE_TOWER_PROTOCMD ];
  optional TowerParam param = 2 [ default = ETOWERPARAM_ENTERTOWER ];

  optional uint32 layer = 3 [ default = 0 ];
  optional uint64 userid = 4 [ default = 0 ];
}

2.描述:队长带领队伍进入无限塔指定层数
3.处理进程:SceneServer, SessionServer
4.网关转发:SceneServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
7.玩家是否获得货币:否


##UserTowerInfoCmd
##2016-03-21
##gsj

1.消息结构
message UserTowerLayer
{
  optional uint32 layer = 1 [ default = 0 ];
  optional uint32 utime = 2 [ default = 0 ];
  optional bool rewarded = 3 [ default = false ];
}

message UserTowerInfo
{
  optional uint32 oldmaxlayer = 1 [ default = 0 ];
  optional uint32 curmaxlayer = 2 [ default = 0 ];

  repeated UserTowerLayer layers = 3;
}

message UserTowerInfoCmd
{
  optional Command cmd = 1 [ default = INFINITE_TOWER_PROTOCMD ];
  optional TowerParam param = 2 [ default = ETOWERPARAM_USERTOWERINFO ];

  optional UserTowerInfo usertower = 3;
}

2.描述:玩家上线时, 发送至client, 自己的无限塔数据
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否


##TowerInfoCmd
##2016-03-21
##gsj

1.消息结构
message TowerInfoCmd
{
  optional Command cmd = 1 [ default = INFINITE_TOWER_PROTOCMD ];
  optional TowerParam param = 2 [ default = ETOWERPARAM_TOWERINFO ];

  optional uint32 maxlayer = 3 [ default = 0 ];
}

2.描述:client请求无限塔最大层数
3.处理进程:SceneServer, client
4.网关转发:SceneServer
5.重入:多次发送最大层数
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否

