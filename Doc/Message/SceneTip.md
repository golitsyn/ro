######SceneTip.proto

##GameTipCmd
##2016-03-23
##shw
1.消息结构:
enum ETipOpt
{ 
  ETIPOPT_MIN = 0;
  ETIPOPT_UPDATE = 1;
  ETIPOPT_DELETE = 2;
}

enum ETipItemOpt
{ 
  //ETIPITEMOPT_MIN = 0;
  ETIPITEMOPT_ADD = 1; 
  ETIPITEMOPT_DELETE = 2;
  //ETIPITEM0PT_IGNORE = 3;
}

message RedTip
{
  optional ERedSys redsys = 1 [ default = EREDSYS_MIN ];
  optional ETipItemOpt optItem = 2 [ default = ETIPITEMOPT_ADD]; 
  repeated uint64 tipid = 3;
} 
  
// scene -> client
message GameTipCmd
{ 
  optional Command cmd = 1 [ default = SCENE_USER_TIP_PROTOCMD ];
  optional TipParam param = 2 [ default = TIPPARAM_RED ];

  optional ETipOpt opt = 3 [ default = ETIPOPT_MIN ];
  repeated RedTip redtip = 4;
} 

2.描述:通知客户端红点显示
3.处理进程:SceneServer,client	
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##GameTipCmd

##BrowseRedTipCmd
##2016-03-23
##shw
1.消息结构:
message BrowseRedTipCmd
{
  optional Command cmd = 1 [ default = SCENE_USER_TIP_PROTOCMD ];
  optional TipParam param = 2 [ default = TIPPARAM_BROWSE ];
  
  optional ERedSys red = 3 [ default = EREDSYS_MIN ];
} 

2.描述:客户端通知红点已浏览
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##BrowseRedTipCmd
