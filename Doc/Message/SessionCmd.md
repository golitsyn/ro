######SessionCmd.proto

##MapRegSessionCmd
##2016-03-29
##shw
1.消息结构:
message RaidMapData
{
  optional uint32 raidid = 1;
  optional uint32 index = 2;
  optional uint64 charid = 3;
  optional uint32 teamid = 4;
  optional uint32 restrict = 5;
  repeated uint64 memberlist = 6;
  optional ScenePos imagecenter = 7;
  optional uint32 imagerange = 8;
  optional ScenePos enterpos = 9;

  optional uint32 sealid = 10 [ default = 0 ];
  optional uint32 follow = 11 [ default = 0 ];
}

message MapRegSessionCmd
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = MAP_REG_SESSIONCMD ];
  optional uint32 mapid = 3;
  optional string mapname = 4;
  optional string scenename = 5;
  optional RaidMapData data = 6;
}

2.描述:场景地图向会话注册
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##MapRegSessionCmd

##CreateRaidMapSessionCmd
##2016-03-29
##shw
1.消息结构:
message CreateRaidMapSessionCmd
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CREATE_RAIDMAP_SESSIONCMD ];
  optional RaidMapData data = 3;
}

2.描述:创建副本
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##CreateRaidMapSessionCmd

##DeleteDMapSessionCmd
##2016-03-29
##shw
1.消息结构:
message DeleteDMapSessionCmd
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = DELETE_DMAP_SESSIONCMD ];
  optional uint32 mapid = 3;
}

2.描述:关闭副本
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##DeleteDMapSessionCmd

##ChangeSceneSessionCmd
##2016-03-29
##shw
1.消息结构:
message ChangeSceneSessionCmd
{ 
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CHANGE_SCENE_SESSIONCMD ];
  optional uint32 mapid = 3;
  repeated uint64 charid = 4;
  optional ScenePos pos = 5; 
}

2.描述:场景跳转请求
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ChangeSceneSessionCmd

##ChangeSceneResultSessionCmd
##2016-03-29
##shw
1.消息结构:
message ChangeSceneResultSessionCmd
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CHANGE_SCENE_RESULT_SESSIONCMD ];
  optional uint32 mapid = 3;
  optional uint64 charid = 4;
  //optional string mapname = 5; 
  optional ScenePos pos = 6;
}

2.描述:场景跳转应答
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ChangeSceneResultSessionCmd

##UserDataSync
##2016-03-29
##shw
1.消息结构:
message UserDataSync
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_USER_DATA_SYNC ];

  optional uint64 id = 3 [ default = 0 ];
  
  optional float x = 4 [ default = 0 ];
  optional float y = 5 [ default = 0 ];
  optional float z = 6 [ default = 0 ];

  repeated UserData datas = 7;
  repeated UserAttr attrs = 8;
}

2.描述:玩家数据会话同步
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UserDataSync

##SummonBossSessionCmd
##2016-03-29
##shw
1.消息结构:
message SummonBossSessionCmd
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = SUMMON_BOSS_SESSIONCMD ];

  optional uint32 mapid = 3;
  optional uint32 npcid = 4;
}

2.描述:通知场景召唤boss
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SummonBossSessionCmd

##BossDieSessionCmd
##2016-03-29
##shw
1.消息结构:
message BossDieSessionCmd
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = BOSS_DIE_SESSIONCMD ];

  optional uint32 npcid = 3;
  optional string killer = 4;
}

2.描述:通知会话boss死亡
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##BossDieSessionCmd

##GoToUserMapSessionCmd
##2016-03-29
##shw
1.消息结构:
message GoToUserMapSessionCmd
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = GOTO_USER_MAP_SESSIONCMD ];
  
  optional uint64 targetuserid = 3 [ default = 0 ];
  optional uint64 gotouserid = 4 [ default = 0 ];
} 

2.描述:传送到玩家id的地图
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##GoToUserMapSessionCmd

##LoadLuaSessionCmd
##2016-03-29
##shw
1.消息结构:
message LoadLuaSessionCmd
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = LOAD_LUA_SESSIONCMD ];

  optional string table = 3;
  optional string lua = 4;
}

2.描述:重置加载配置表和lua脚本
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##LoadLuaSessionCmd

##BuyItem
##2016-03-29
##shw
1.消息结构:
message BuyItem
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = BUY_ITEM ];
  
  optional uint64 charid = 3 [ default = 0 ];
  
  optional uint32 shopid = 4 [ default = 0 ];
  optional uint32 count = 5 [ default = 0 ];
}

2.描述:会话通知场景进行购买操作
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##BuyItem

##WantedQuestList
##2016-03-29
##shw
1.消息结构:
message WantedItem
{
  optional uint32 questid = 1 [ default = 0 ];

  optional uint32 baseexp = 2 [ default = 0 ];
  optional uint32 jobexp = 3 [ default = 0 ];
  optional uint32 gold = 4 [ default = 0 ];
  optional uint32 rob = 5 [ default = 0 ];

  repeated ItemInfo items = 6;
}
message WantedItemList
{
  optional uint32 wantedid = 1 [ default = 0 ];

  repeated WantedItem items = 2;
}
message WantedQuest
{
  optional uint32 minlv = 1 [ default = 0 ];
  optional uint32 maxlv = 2 [ default = 0 ];

  repeated WantedItemList quests = 3;
}
message WantedQuestList
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = WANTED_QUEST_LIST ];

  optional uint32 time = 3 [ default = 0 ];
  optional uint32 nexttime = 4 [ default = 0 ];
  optional uint32 refreshindex = 5 [ default = 0 ];

  repeated WantedQuest quest = 6;
}

2.描述:看板任务列表通知到场景
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##WantedQuestList

##SceneTowerUpdate
##2016-03-29
##shw
1.消息结构:
message TowerLayer
{
  optional uint32 layer = 1 [ default = 0 ];
  repeated uint32 curmonsterids = 3;
}
message TowerInfo
{
  optional uint32 maxlayer = 1 [ default = 0 ];
  optional uint32 cleartime = 2 [ default = 0 ];

  repeated uint32 killmonsters = 3;
  repeated TowerLayer layers = 4;
}
message SceneTowerUpdate
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = TOWERINFO_UPDATE ];

  optional TowerInfo info = 3;
}

2.描述:无限塔数据通知
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SceneTowerUpdate

##TowerTeamUpdate
##2016-03-29
##shw
1.消息结构:
message TowerTeamUpdate
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default =  TOWERTEAM_UPDATE ];

  optional TeamTowerSummary summary = 3;
  optional string svrname = 4;
}

2.描述:无限塔实时数据场景服务器之间通知
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##TowerTeamUpdate

##TowerMonsterKill
##2016-03-29
##shw
1.消息结构:
message TowerMonsterKill
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = TOWER_MONSTERKILL ];

  optional uint32 monsterid = 3 [ default = 0 ];
}

2.描述:怪物击杀，场景通知会话，更新无限塔逻辑
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##TowerMonsterKill

##TeamSceneLoad
##2016-03-29
##shw
1.消息结构:
message TeamSceneLoad
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_TEAM_LOAD ];

  repeated TeamData datas = 3;
}

2.描述:队伍数据通知
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##TeamSceneLoad

##TeamSceneUpdate
##2016-03-29
##shw
1.消息结构:
message TeamSceneUpdate
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_TEAM_UPDATE ];

  optional TeamData update = 4;
  optional uint32 del = 5 [ default = 0 ];
}

2.描述:队伍场景数据更新
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##TeamSceneUpdate

##TMemberUpdate
##2016-03-29
##shw
1.消息结构:
message TMemberUpdate
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_TEAM_MEMBER ];

  optional uint32 teamid = 3 [ default = 0 ];

  repeated TeamMember updates = 4;
  repeated uint64 dels = 5;
}

2.描述:队伍成员场景数据更新
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##TMemberUpdate

##SendMail
##2016-03-29
##shw
1.消息结构:
message SendMail
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_SEND_MAIL ];

  optional uint64 senderid = 3 [ default = 0 ];
  optional uint64 receiveid = 4 [ default = 0 ];

  optional uint32 mailid = 5 [ default = 0 ];

  optional EMailType type = 6 [ default = EMAILTYPE_MIN ];

  optional string title = 7;
  optional string sender = 8;
  optional string msg = 9;

  optional BlobAttach attachs = 10;
}

2.描述:场景邮件发送
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SendMail

##SessionSceneUserCmd
##2016-03-29
##shw
1.消息结构:
message SessionSceneUserCmd
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_SCENEUSERCMD ];
  optional uint64 userid = 3 [ default = 0 ];
  optional bytes cmddata = 4;
}

2.描述:玩家消息场景之间转发
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SessionSceneUserCmd

##GetReward
##2016-03-29
##shw
1.消息结构:
message GetReward
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_GETREWARD ];

  optional uint64 charid = 3 [ default = 0 ];
  repeated ItemInfo items = 4;
}

2.描述:通知场景玩家获得奖励
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:yes
8.玩家是否获得货币:yes
##GetReward

##FollowerIDCheck
##2016-03-29
##shw
1.消息结构:
message FollowerIDCheck
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_FOLLOWERIDCHECK ];

  optional uint64 userid = 3 [ default = 0 ];
  optional uint64 followid = 4 [ default = 0 ];
}

2.描述:玩家跟随检查
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##FollowerIDCheck

##Event
##2016-03-29
##shw
1.消息结构:
enum EEventType
{
  EEVENTTYPE_MIN = 0;
  EEVENTTYPE_SOCIALAPPLY_ADD = 1;
  EEVENTTYPE_TEAMAPPLY_ADD = 2;
  EEVENTTYPE_TEAMAPPLY_CLEAR = 3;
  EEVENTTYPE_TEAMLEADER_DONE = 4;
  EEVENTTYPE_TEAMLEADER_FIRE = 5;
  EEVENTTYPE_MAX = 6;
}
message Event
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_EVENT ];

  optional uint64 guid = 3 [ default = 0 ];
  optional EEventType type = 4 [ default = EEVENTTYPE_MIN ];
  repeated uint64 params = 5;
}

2.描述:玩家逻辑时间通知
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##Event

##ChatMsgSession
##2016-03-29
##shw
1.消息结构:
message ChatMsgSession
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CHAT_MSG ];

  optional uint64 targetid = 3 [ default = 0 ];
  optional string msg = 4;
  optional EGameChatChannel channel = 5 [default = ECHAT_CHANNEL_MIN ];
  optional uint64 selfid = 6 [default = 0];
}

2.描述:玩家聊天消息通知
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ChatMsgSession

##SetGlobalDaily
##2016-03-29
##shw
1.消息结构:
message SetGlobalDaily
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_SET_GLOBL_DAILY ];
  optional uint32 value = 3 [ default = 0 ];
}

2.描述:设置抗击魔潮经验倍率
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SetGlobalDaily

##RefreshQuest
##2016-03-29
##shw
1.消息结构:
message RefreshQuest
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_REFRESH_QUEST ];
  optional uint32 value = 3 [ default = 0 ];
}

2.描述:强化刷新任务
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##RefreshQuest

##QuerySealTimer
##2016-03-29
##shw
1.消息结构:
message QuerySealTimer
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_SEALTIMER ];
  required uint64 userid = 3 [ default = 0 ];
  required uint64 teamid = 4 [ default = 0 ];
}

2.描述:通知场景玩家封印时间
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##QuerySealTimer

##DelSceneImage
##2016-03-29
##shw
1.消息结构:
enum ESceneImageType
{
  ESCENEIMAGE_MIN      = 0;
  ESCENEIMAGE_SEAL     = 1;
  ESCENEIMAGE_MAX      = 2;
}

message DelSceneImage
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = DEL_SCENE_IMAGE ];

  optional uint64 guid = 3 [ default = 0 ];
  optional uint32 realscene = 4 [ default = 0 ];
  optional ESceneImageType etype = 5 [ default = ESCENEIMAGE_MIN ];
}

2.描述:删除镜像副本
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##DelSceneImage

##SetTeamSeal
##2016-03-29
##shw
1.消息结构:
enum ESetSealStatus
{
  ESETSEALSTATUS_MIN = 0;
  ESETSEALSTATUS_BEGIN = 1;
  ESETSEALSTATUS_FINISH = 2;
  ESETSEALSTATUS_FAIL = 3;
  ESETSEALSTATUS_CREATE = 4;
  ESETSEALSTATUS_SETPOS = 5;
  ESETSEALSTATUS_ABANDON = 6;
}

// scene <-> session
message SetTeamSeal
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_SET_SEAL ];

  optional uint32 sealid = 3 [ default = 0 ];
  optional uint64 teamid = 4 [ default = 0 ];
  optional uint32 mapid = 5 [ default = 0 ];

  optional ESetSealStatus estatus = 6 [ default = ESETSEALSTATUS_MIN ];
  optional ScenePos pos = 7;
}

2.描述:场景同步封印数据
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SetTeamSeal

##HandSync
##2016-03-29
##shw
1.消息结构:
message HandSync
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = CMDPARAM_HANDS ];

  optional UserHandsCmd hand = 3;
}

2.描述:牵手状态同步到会话
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##HandSync

##HandSync
##2016-03-29
##shw
1.消息结构:
message UserLoginNtfSessionCmd
{
  optional Command cmd = 1 [ default = SCENE_SESSION_PROTOCMD ];
  optional SessionParam param = 2 [ default = SESSIONPARAM_USERLOGIN_NTF ];
  optional uint64 charid = 3 [ default = 0 ];
  optional string servername = 4;
}

2.描述:场景玩家登录通知
3.处理进程:SceneServer,SessionServer
4.网关转发:no
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UserLoginNtfSessionCmd
