######SceneUser2.proto

##GoCity
##2016-03-25
##shw
1.消息结构:
message GoCity
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ]; 
  optional User2Param param = 2 [ default = USER2PARAM_GOCITY ];

  optional uint32 mapid = 3 [ default = 0 ];
}

2.描述:通知客户端地图跳转
3.处理进程:SceneServer,client	
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##GoCity

##SysMsg
##2016-03-25
##shw
1.消息结构:
enum EMessageType
{
  EMESSAGETYPE_MIN = 0;
  EMESSAGETYPE_FRAME = 1;
  EMESSAGETYPE_GETEXP = 2;
  EMESSAGETYPE_TIME_DOWN  = 3;
  EMESSAGETYPE_TIME_DOWN_NOT_CLEAR  = 4;
  EMESSAGETYPE_MAX = 5;
}

enum EMessageActOpt
{
  EMESSAGEACT_ADD = 1;
  EMESSAGEACT_DEL = 2;
}

message MsgParam
{
  optional string param = 1;
}
message SysMsg
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_SYSMSG ];

  optional uint32 id = 3 [ default = 0 ];
  optional EMessageType type = 4 [ default = EMESSAGETYPE_MIN ];
  repeated MsgParam params = 5;

  optional EMessageActOpt act = 6 [ default = EMESSAGEACT_ADD ];
}

2.描述:系统消息通知
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SysMsg

##NpcDataSync
##2016-03-25
##shw
1.消息结构:
message NpcDataSync
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_NPCDATASYNC ];

  optional uint64 guid = 3 [ default = 0 ];
  repeated UserAttr attrs = 4;
  repeated UserData datas = 5;
}

2.描述:npc数据和属性同步
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##NpcDataSync

##UserNineSyncCmd
##2016-03-25
##shw
1.消息结构:
message UserNineSyncCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_USERNINESYNC ];

  optional uint64 guid = 3 [ default = 0 ];

  repeated UserData datas = 4;
  repeated UserAttr attrs = 5;
}

2.描述:玩家九屏数据同步
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UserNineSyncCmd

##UserActionNtf
##2016-03-25
##shw
1.消息结构:
enum EUserActionType
{
  EUSERACTIONTYPE_MIN = 0;
  EUSERACTIONTYPE_ADDHP = 1;
  EUSERACTIONTYPE_REFINE = 2;
  EUSERACTIONTYPE_EXPRESSION = 3;
  EUSERACTIONTYPE_MOTION = 4;
  EUSERACTIONTYPE_GEAR_ACTION = 5;
  EUSERACTIONTYPE_NORMALMOTION = 6;
  EUSERACTIONTYPE_MAX = 7;
}
message UserActionNtf
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_ACTION ];

  optional uint64 charid = 3 [ default = 0 ];
  optional uint64 value = 5 [ default = 0 ];

  optional EUserActionType type = 4 [ default = EUSERACTIONTYPE_MIN ];
}

2.描述:玩家动作表情播放
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UserActionNtf

##UserBuffNineSyncCmd
##2016-03-25
##shw
1.消息结构:
message BufferData
{
  optional uint32 id = 1 [ default = 0 ];
  optional uint32 layer = 2 [ default = 0 ];
}
message UserBuffNineSyncCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_BUFFERSYNC ];

  optional uint64 guid = 3 [ default = 0 ];

  repeated BufferData updates = 4;
  repeated uint32 dels = 5;
}

2.描述:玩家buff数据九屏同步
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UserBuffNineSyncCmd

##ExitPosUserCmd
##2016-03-25
##shw
1.消息结构:
message ExitPosUserCmd
{ 
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_EXIT_POS ];
  
  optional ScenePos pos = 3;
  optional uint32 exitid = 4;
  optional uint32 mapid = 5;
}

2.描述:传送点事件
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:触发前会重置，多次触发则进行多次事件流程
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ExitPosUserCmd

##Relive
##2016-03-25
##shw
1.消息结构:
enum EReliveType
{
  ERELIVETYPE_MIN = 0;
  ERELIVETYPE_RETURN = 1;
  ERELIVETYPE_MONEY = 2;
  ERELIVETYPE_RAND = 3;
  ERELIVETYPE_MAX = 4;
}
message Relive
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_RELIVE ];

  optional EReliveType type = 3 [ default = ERELIVETYPE_MIN ];
}

2.描述:复活事件
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:复活无法继续触发
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##Relive

##VarUpdate
##2016-03-25
##shw
1.消息结构:
message VarUpdate
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_VAR ];

  repeated Var vars = 3;
}

2.描述:事件变量更新
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:复活无法继续触发
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##VarUpdate

##TalkInfo
##2016-03-25
##shw
1.消息结构:
message TalkInfo
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_TALKINFO ];

  optional uint64 guid = 3 [ default = 0 ];
  optional uint32 talkid = 4;
  optional string talkmessage = 5;
}

2.描述:npc说话
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##TalkInfo

##ServerTime
##2016-03-25
##shw
1.消息结构:
message ServerTime
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_SERVERTIME ];

  optional uint64 time = 3 [ default = 0 ];
}

2.描述:请求服务器时间
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ServerTime

##EffectUserCmd
##2016-03-25
##shw
1.消息结构:
enum EEffectOpt
{
  EEFFECTOPT_PLAY = 1;
  EEFFECTOPT_STOP = 2;
  EEFFECTOPT_DELETE = 3;
}

enum EEffectType
{
  EEFFECTTYPE_NORMAL = 1;
  EEFFECTTYPE_ACCEPTQUEST = 2;
  EEFFECTTYPE_FINISHQUEST = 3;
  EEFFECTTYPE_MVPSHOW = 4;
}

message EffectUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_EFFECT ];
  optional EEffectType effecttype = 3 [ default = EEFFECTTYPE_NORMAL ];
  
  optional uint64 charid = 4;
  optional uint32 effectpos = 5;
  optional ScenePos pos = 6;
  optional string effect = 7;
  optional uint32 msec = 8 [ default = 0 ];
  optional uint32 times = 9 [ default = 1 ];
  optional uint32 index = 10 [ default = 1 ];
  
  optional EEffectOpt opt = 11 [ default = EEFFECTOPT_PLAY ];
  optional bool posbind = 12 [ default = false ];
  optional bool epbind = 13 [ default = false ];
}

2.描述:服务器通知客户端播放特效
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##EffectUserCmd

##MenuList
##2016-03-25
##shw
1.消息结构:
message MenuList
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_MENU ];

  repeated uint32 list = 3;
}

2.描述:客户端请求已开启功能列表
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##MenuList

##NewMenu
##2016-03-25
##shw
1.消息结构:
message NewMenu
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_NEWMENU ];

  optional bool animplay = 3 [ default = true ];
  repeated uint32 list = 4;
}

2.描述:新功能开启客户端同步
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##NewMenu

##TeamInfoNine
##2016-03-25
##shw
1.消息结构:
message TeamInfoNine
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_TEAMINFONINE ];

  optional uint64 userid = 3 [ default = 0 ];
  optional uint32 id = 4 [ default = 0 ];
  optional string name = 5;
}

2.描述:组队信息九屏同步
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##TeamInfoNine

##UsePortrait
##2016-03-25
##shw
1.消息结构:
message UsePortrait
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_USEPORTRAIT ];

  optional uint32 id = 3 [ default = 0 ];
}

2.描述:使用头像
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:相同id的头像只能使用一次
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UsePortrait

##UseFrame
##2016-03-25
##shw
1.消息结构:
message UseFrame
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_USEFRAME ];

  optional uint32 id = 3 [ default = 0 ];
}

2.描述:使用相框
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:相同id的相框只能使用一次
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UseFrame

##NewPortraitFrame
##2016-03-25
##shw
1.消息结构:
message NewPortraitFrame
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_NEWPORTRAITFRAME ];

  repeated uint32 portrait = 3;
  repeated uint32 frame = 4;
}

2.描述:新头像相框同步通知
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##NewPortraitFrame

##UseHair
##2016-03-25
##shw
1.消息结构:
message UseHair
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_USEHAIR ];

  optional uint32 id = 3 [ default = 0 ];
  optional uint32 type = 4 [ default = 0 ];
}

2.描述:使用发型或衣服颜色
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UseHair

##NewHair
##2016-03-25
##shw
1.消息结构:
message NewHair
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_NEWHAIR ];

  repeated uint32 hairids = 3;
}

2.描述:新发型同步更新
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##NewHair

##AddAttrPoint
##2016-03-25
##shw
1.消息结构:
enum PointType
{
  POINTTYPE_ADD = 1;
  POINTTYPE_RESET = 2;
}
message AddAttrPoint
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_ADDATTRPOINT ];

  optional PointType type = 3 [ default = POINTTYPE_ADD ];

  optional uint32 strpoint = 4 [ default = 0 ];
  optional uint32 intpoint = 5 [ default = 0 ];
  optional uint32 agipoint = 6 [ default = 0 ];
  optional uint32 dexpoint = 7 [ default = 0 ];
  optional uint32 vitpoint = 8 [ default = 0 ];
  optional uint32 lukpoint = 9 [ default = 0 ];
}

2.描述:素质点增加和重置
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##AddAttrPoint

##QueryShopGotItem
##2016-03-25
##shw
1.消息结构:
message ShopGotItem
{
  optional uint32 id = 1 [ default = 0 ];
  optional uint32 count = 2 [ default = 0 ];
}
message QueryShopGotItem
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_QUERYSHOPGOTITEM ];

  repeated ShopGotItem items = 3;
}

2.描述:查询已购买商店物品
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:多次获取已购买物品列表
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##QueryShopGotItem

##OpenUI
##2016-03-25
##shw
1.消息结构:
message OpenUI
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_OPENUI ];

  optional uint32 id = 3 [ default = 0 ];
  optional uint32 ui = 4 [ default = 0 ];
}

2.描述:打开一个ui界面
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##OpenUI

##DbgSysMsg
##2016-03-25
##shw
1.消息结构:
enum EDbgMsgType
{
  EDBGMSGTYPE_MIN = 0;
  EDBGMSGTYPE_TEST = 1;
}

message DbgSysMsg
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_DBGSYSMSG ];

  required EDbgMsgType type = 3 [ default = EDBGMSGTYPE_MIN ];
  required string content = 4;
}

2.描述:在客户端弹出一个文本
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##DbgSysMsg

##FollowTransferCmd
##2016-03-25
##shw
1.消息结构:
message FollowTransferCmd 
{ 
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_FOLLOWTRANSFER ];
  
  optional uint64 targetId = 3;
}

2.描述:同地图组员传送请求
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:多次传送到组员身边
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##FollowTransferCmd

##CallNpcFuncCmd
##2016-03-25
##shw
1.消息结构:
message CallNpcFuncCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_NPCFUNC ];
  
  optional uint32 type = 3 [ default = 0 ];
  optional string funparam = 4;
}

2.描述:调用一个npc功能
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##CallNpcFuncCmd

##ModelShow
##2016-03-25
##shw
1.消息结构:
message ModelShow
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_MODELSHOW ];
  
  optional uint32 type = 3 [ default = 0 ];
  optional string data = 4;
}

2.描述:模型展示
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ModelShow

##SoundEffectCmd
##2016-03-25
##shw
1.消息结构:
message SoundEffectCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_SOUNDEFFECT ];

  optional string se = 3;
  optional ScenePos pos = 4;

  optional uint32 msec = 5 [ default = 0 ];
  optional uint32 times = 6 [ default = 1 ];

}

2.描述:音效播放
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SoundEffectCmd

##PresetMsgCmd
##2016-03-25
##shw
1.消息结构:
message PresetMsg
{ 
  optional uint32 msgid = 1 [default = 0];
  optional string msg = 2;
}
message PresetMsgCmd
{ 
  optional Command cmd = 1 [default = SCENE_USER2_PROTOCMD];
  optional User2Param param = 2 [default = USER2PARAM_PRESETCHATMSG];
  
  repeated string msgs = 3;
}

2.描述:快捷回复文本保存
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:保存最后一次消息文本
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##PresetMsgCmd

##ChangeBgmCmg
##2016-03-25
##shw
1.消息结构:
message ChangeBgmCmg
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_CHANGEBGM ];

  optional string bgm = 3;
}

2.描述:播放背景音乐
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ChangeBgmCmg

##QueryFighterInfo
##2016-03-25
##shw
1.消息结构:
message FighterInfo
{
  repeated UserData datas = 1;
  repeated UserAttr attrs = 2;
}
message QueryFighterInfo
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_QUERYFIGHTERINFO ];

  repeated FighterInfo fighters = 3;
}

2.描述:玩家职业角色数据同步
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##QueryFighterInfo

##UserBarrageCmd
##2016-03-25
##shw
1.消息结构:
enum EBarrageOpt
{
  EBARRAGE_OPEN = 1;
  EBARRAGE_CLOSE = 2;
}

message  UserBarrageCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_BARRAGE ];

  optional EBarrageOpt opt = 3 [ default = EBARRAGE_CLOSE ];
}

2.描述:通知服务器进入弹幕发送界面
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:按最后一次消息的结果
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UserBarrageCmd

##UserBarrageMsgCmd
##2016-03-25
##shw
1.消息结构:
message ColorInfo
{
  optional uint32 r = 1 [ default = 255 ];
  optional uint32 g = 2 [ default = 255 ];
  optional uint32 b = 3 [ default = 255 ];
} 
message UserBarrageMsgCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_BARRAGEMSG ];
  
  optional string str = 3;
  optional ScenePos msgpos = 4;
  optional ColorInfo clr = 5;
} 

2.描述:弹幕发送请求
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:多次发送消息
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UserBarrageMsgCmd

##GameTimeCmd
##2016-03-25
##shw
1.消息结构:
enum GameTimeOpt
{
  EGAMETIMEOPT_SYNC = 1;
  EGAMETIMEOPT_ADJUST = 2;
}
// scene -> client : user's game time
message GameTimeCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_GAMETIME ];

  optional GameTimeOpt opt = 3 [ default = EGAMETIMEOPT_SYNC ] ;
  optional uint32 sec = 4 [ default = 1 ];
  optional uint32 speed = 5 [ default = 1 ];
}

2.描述:游戏时间同步
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##GameTimeCmd

##CDTimeUserCmd
##2016-03-25
##shw
1.消息结构:
enum CD_TYPE
{
  CD_TYPE_SKILL = 0;
  CD_TYPE_ITEM = 1;
  CD_TYPE_SKILLDEALY = 2;
}

message CDTimeItem
{
  optional uint32 id = 1;
  optional uint64 time = 2;
  optional CD_TYPE type = 3;
}

message CDTimeUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_CDTIME ];

  repeated CDTimeItem list = 3;
}

2.描述:游戏CD时间同步
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##CDTimeUserCmd

##StateChange
##2016-03-25
##shw
1.消息结构:
message StateChange
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_STATECHANGE ];

  optional ECreatureStatus status = 3 [ default = ECREATURESTATUS_MIN ];
}

2.描述:在非死亡模式下切换玩家状态(目前只支持摄影和普通状态切换)
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:设置新状态
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##StateChange

##Photo
##2016-03-25
##shw
1.消息结构:
message Photo
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_PHOTO ];

  optional uint64 guid = 3 [ default = 0 ];
}

2.描述:广播拍照
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:九屏转发
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##Photo

##ShakeScreen
##2016-03-25
##shw
1.消息结构:
message ShakeScreen
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_SHAKESCREEN ];

  optional uint32 maxamplitude = 3 [ default = 3 ];
  optional uint32 msec = 4 [ default = 0 ];
  optional uint32 shaketype = 5 [ default = 1 ];
}

2.描述:震屏
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ShakeScreen

##QueryShortcut
##2016-03-25
##shw
1.消息结构:
message ShortcutItem
{
  optional string guid = 1;

  optional uint32 type = 2 [ default = 0 ];
  optional uint32 pos = 3 [ default = 0 ];
}

message QueryShortcut
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_QUERYSHORTCUT ];

  repeated ShortcutItem list = 3;
}

2.描述:快捷格子数据同步
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##QueryShortcut

##PutShortcut
##2016-03-25
##shw
1.消息结构:
message ShortcutItem
{
  optional string guid = 1;

  optional uint32 type = 2 [ default = 0 ];
  optional uint32 pos = 3 [ default = 0 ];
}

message PutShortcut
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_PUTSHORTCUT ];

  optional ShortcutItem item = 3;
}

2.描述:放置一个物品快捷到快捷栏
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:发送一次，放置一个
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##PutShortcut

##NpcChangeAngle
##2016-03-25
##shw
1.消息结构:
message NpcChangeAngle
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_NPCANGLE ];

  optional uint64 guid = 3 [ default = 0 ];
  optional uint64 targetid = 4 [ default = 0 ];
  optional uint32 angle = 5 [ default = 0 ];
}

2.描述:npc朝向和角度改变
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##NpcChangeAngle

##CameraFocus
##2016-03-25
##shw
1.消息结构:
message CameraFocus
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_CAMERAFOCUS ];

  repeated uint64 targets = 3;
}

2.描述:拍照聚焦npc,使npc转身
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##CameraFocus

##GoToListUserCmd
##2016-03-25
##shw
1.消息结构:
message GoToListUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_GOTO_LIST ];

  repeated uint32 mapid = 3;
}

2.描述:发送已保存位置的地图
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##GoToListUserCmd

##GoToGearUserCmd
##2016-03-25
##shw
1.消息结构:
message GoToGearUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_GOTO_GEAR ];

  optional uint32 mapid = 3;
}

2.描述:请求传送到已存档的地图
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:发送一次，符合条件，传送一次
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##GoToGearUserCmd

##NewTransMapCmd
##2016-03-25
##shw
1.消息结构:
message NewTransMapCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_NEWTRANSMAP];

  repeated uint32 mapid = 3;
}

2.描述:新存档地图解锁通知
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##NewTransMapCmd

##FollowerUser
##2016-03-25
##shw
1.消息结构:
message FollowerUser
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_FOLLOWER ];

  optional uint64 userid = 3 [ default = 0 ];
}

2.描述:请求更随玩家
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:每次消息设置新的跟随
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##FollowerUser

##LaboratoryUserCmd
##2016-03-25
##shw
1.消息结构:
message LaboratoryUserCmd
{ 
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_LABORATORY ];

  optional uint32 round = 3 [ default = 0 ];
  optional uint32 curscore = 4 [ default = 0 ];
  optional uint32 maxscore = 5 [ default = 0 ];
} 

2.描述:研究所数据同步
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##LaboratoryUserCmd

##GotoLaboratoryUserCmd
##2016-03-25
##shw
1.消息结构:
message GotoLaboratoryUserCmd
{ 
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_GOTO_LABORATORY ];
}

2.描述:研究所数据同步
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:进入同一个副本地图
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##GotoLaboratoryUserCmd

##NpcScaleChange
##2016-03-25
##shw
1.消息结构:
message NpcScaleChange
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_NPCSCALECHANGE ];

  optional uint64 guid = 3 [ default = 0 ];
  optional uint32 scale = 4 [ default = 0 ];
}

2.描述:改变npc的缩放值
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##NpcScaleChange

##ExchangeProfession
##2016-03-25
##shw
1.消息结构:
message ExchangeProfession
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_EXCHANGEPROFESSION ];

  optional uint64 guid = 3 [ default = 0 ];

  repeated UserData datas = 4;
  repeated UserAttr attrs = 5;
  repeated UserAttr pointattrs = 6;
}

2.描述:职业切换
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ExchangeProfession

##SceneryUserCmd
##2016-03-25
##shw
1.消息结构:
message SceneryUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_SCENERY ];

  optional uint32 mapid = 3 [ default = 0 ];
  repeated uint32 sceneryid = 4;
}

2.描述:职业切换
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SceneryUserCmd

##GoMapQuestUserCmd
##2016-03-25
##shw
1.消息结构:
message GoMapQuestUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_GOMAP_QUEST ];

  optional uint32 questid = 3 [ default = 0 ];
}

2.描述:跳转到任务对应的地图
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##GoMapQuestUserCmd

##GoMapFollowUserCmd
##2016-03-25
##shw
1.消息结构:
message GoMapFollowUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_GOMAP_FOLLOW ];

  optional uint32 mapid = 3 [ default = 0 ];
  optional uint64 charid = 4 [ default = 0 ];
}

2.描述:职业切换
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##GoMapFollowUserCmd

##UserAutoHitCmd
##2016-03-25
##shw
1.消息结构:
message UserAutoHitCmd
{ 
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_AUTOHIT ];
  
  optional uint64 charid = 3 [ default = 0 ];
}

2.描述:通知客户端自动攻击怪
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UserAutoHitCmd

##UploadSceneryPhotoUserCmd
##2016-03-26
##shw
1.消息结构:
message UploadSceneryPhotoUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_UPLOAD_SCENERY_PHOTO ];

  optional string photomd5 = 3;     // client cmd required
  optional uint32 sceneryid = 4;    // client cmd required
  optional string policy = 5;
  optional string signature = 6;
  optional uint32 file_blocks = 7;    // client cmd required
  optional string file_hash = 8;    // client cmd required
  optional uint32 file_size = 9;    // client cmd required
}

2.描述:请求获取景点上传验证码
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:请求一次，获取一次
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UploadSceneryPhotoUserCmd

##DownloadSceneryPhotoUserCmd
##2016-03-26
##shw
1.消息结构:
message DownloadSceneryPhotoUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_DOWNLOAD_SCENERY_PHOTO ];

  optional string url = 3;
}

2.描述:请求获取景点下载路径
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:请求一次，获取一次
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##DownloadSceneryPhotoUserCmd

##QueryMapArea
##2016-03-26
##shw
1.消息结构:
message QueryMapArea
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_QUERY_MAPAREA ];

  repeated uint32 areas = 3;
}

2.描述:请求获取解锁区域列表
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:请求一次，获取一次
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##QueryMapArea

##NewMapAreaNtf
##2016-03-26
##shw
1.消息结构:
message NewMapAreaNtf
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default =  USER2PARAM_NEW_MAPAREA ];

  optional uint32 area = 3 [ default = 0 ];
}

2.描述:新区域解锁通知
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##NewMapAreaNtf

##TowerCurLayerSync
##2016-03-26
##shw
1.消息结构:
message TowerCurLayerSync
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_TOWER_CURLAYER ];

  optional uint32 layer = 3 [ default = 0 ];
}

2.描述:当前无限塔层数通知
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##TowerCurLayerSync

##BuffForeverCmd
##2016-03-26
##shw
1.消息结构:
message BuffForeverCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_FOREVER_BUFF ];

  repeated BufferData buff = 3;
}

2.描述:永久buff通知
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##BuffForeverCmd

##InviteJoinHandsUserCmd
##2016-03-26
##shw
1.消息结构:
message InviteJoinHandsUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_INVITE_JOIN_HANDS ];

  optional uint64 charid = 3 [ default = 0 ];
  optional uint64 masterid = 4 [ default = 0 ];
  optional uint32 time = 5 [ default = 0 ];
  optional string mastername = 6;
  optional bytes sign = 7;
}

2.描述:牵手邀请
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##InviteJoinHandsUserCmd

##BreakUpHandsUserCmd
##2016-03-26
##shw
1.消息结构:
message BreakUpHandsUserCmd
{ 
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_BREAK_UP_HANDS ];
}

2.描述:牵手打断
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:只可打断一次
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##BreakUpHandsUserCmd

##QueryShow
##2016-03-26
##shw
1.消息结构:
message QueryShow
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_QUERY_ACTION ];

  repeated uint32 actionid = 3;
  repeated uint32 expression = 4;
}

2.描述:表情动作列表同步和新表情动作更新
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##QueryShow

##QueryMusicList
##2016-03-26
##shw
1.消息结构:
message MusicItem
{
  optional uint64 charid = 1 [ default = 0 ];
  optional uint32 demandtime = 2 [ default = 0 ];
  optional uint32 mapid = 3 [ default = 0 ];
  optional uint32 npcid = 4 [ default = 0 ];
  optional uint32 musicid = 5 [ default = 0 ];
  optional uint32 starttime = 6 [ default = 0 ];
  optional uint32 endtime = 7 [ default = 0 ];
  optional uint32 status = 8 [ default = 0 ];
  optional string name = 9;
}
message QueryMusicList
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_MUSIC_LIST ];

  optional uint64 npcid = 3 [ default = 0 ];
  repeated MusicItem items = 4;
}

2.描述:请求音乐盒列表和音乐盒列表同步
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:多次请求，多次获得
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##QueryMusicList

##DemandMusic
##2016-03-26
##shw
1.消息结构:
message DemandMusic
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_MUSIC_DEMAND ];

  optional uint64 npcid = 3 [ default = 0 ];
  optional uint32 musicid = 4 [ default = 0 ];
}

2.描述:点播歌曲
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:点播一次，扣除相应道具
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##DemandMusic

##CloseMusicFrame
##2016-03-26
##shw
1.消息结构:
message CloseMusicFrame
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_MUSIC_CLOSE ];
}

2.描述:关闭音乐盒界面通知，优化列表广播(对于未打开过界面的玩家不进行列表同步更新)
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:指关闭一次，之后消息无效
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##CloseMusicFrame

##UploadOkSceneryUserCmd
##2016-03-26
##shw
1.消息结构:
message UploadOkSceneryUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_UPLOAD_OK_SCENERY ];

  optional uint32 sceneryid = 3 [ default = 0 ];
}

2.描述:景点照片上传完成通知
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:多次发送，多次设置
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UploadOkSceneryUserCmd

##JoinHandsUserCmd
##2016-03-26
##shw
1.消息结构:
message JoinHandsUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_JOIN_HANDS ];

  optional uint64 masterid = 3 [ default = 0 ];
  optional string sign = 4;
  optional uint32 time = 5 [ default = 0 ]; 
}

2.描述:被牵手答应反馈
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:牵手后此消息失效
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##JoinHandsUserCmd

##QueryTraceList
##2016-03-26
##shw
1.消息结构:
message TraceItem
{
  optional uint32 itemid = 1 [ default = 0 ];
  optional uint32 monsterid = 2 [ default = 0 ];
}
message QueryTraceList
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_QUERY_TRACE_LIST ];

  repeated TraceItem items = 3; 
}

2.描述:物品追踪列表请求
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:多次获得
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##QueryTraceList

##UpdateTraceList
##2016-03-26
##shw
1.消息结构:
message UpdateTraceList
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_UPDATE_TRACE_LIST ];

  repeated TraceItem updates = 3;
  repeated uint32 dels = 4;
}

2.描述:物品追踪列表更新
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:一个消息，一次设置
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##UpdateTraceList

##SetDirection
##2016-03-26
##shw
1.消息结构:
message SetDirection
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_SET_DIRECTION ];

  optional uint32 dir = 3 [ default = 0 ];
}

2.描述:设置玩家Y轴旋转角度
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:一个消息，一次设置
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##SetDirection

##ChatUserCmd
##2016-03-26
##shw
1.消息结构:
enum EGameChatChannel
{
  ECHAT_CHANNEL_MIN = 0;
  ECHAT_CHANNEL_ROUND = 1;
  ECHAT_CHANNEL_TEAM = 2;
  ECHAT_CHANNEL_GUILD = 3;
  ECHAT_CHANNEL_FRIEND = 4;
  ECHAT_CHANNEL_WORLD = 5;
  ECHAT_CHANNEL_MAP = 6;
  ECHAT_CHANNEL_SYS = 7;
  ECHAT_CHANNEL_ROOM = 8;
  ECHAT_CHANNEL_BARRAGE = 9;
  ECHAT_CHANNEL_MAX = 10;
}

message ChatUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_CHAT_USER_CMD ];

  optional EGameChatChannel channel = 3 [ default = ECHAT_CHANNEL_ROUND ];
  required string str = 4;

  optional uint64 desID = 5;
}

2.描述:玩家聊天消息发送
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:多次发送
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ChatUserCmd

##ChatRetUserCmd
##2016-03-26
##shw
1.消息结构:
enum EGameChatChannel
{
  ECHAT_CHANNEL_MIN = 0;
  ECHAT_CHANNEL_ROUND = 1;
  ECHAT_CHANNEL_TEAM = 2;
  ECHAT_CHANNEL_GUILD = 3;
  ECHAT_CHANNEL_FRIEND = 4;
  ECHAT_CHANNEL_WORLD = 5;
  ECHAT_CHANNEL_MAP = 6;
  ECHAT_CHANNEL_SYS = 7;
  ECHAT_CHANNEL_ROOM = 8;
  ECHAT_CHANNEL_BARRAGE = 9;
  ECHAT_CHANNEL_MAX = 10;
}

message ChatRetUserCmd
{
  optional Command cmd = 1 [ default = SCENE_USER2_PROTOCMD ];
  optional User2Param param = 2 [ default = USER2PARAM_CHAT_RET_USER_CMD ];

  optional EGameChatChannel channel = 3 [ default = ECHAT_CHANNEL_ROUND ];
  required string str = 4;
  required string name = 5;
  required uint64 id = 6;
  required uint32 portrait = 7;
  required uint32 frame = 8;
  optional EProfession rolejob = 9 [ default = EPROFESSION_MIN ];
}

2.描述:玩家聊天消息推送
3.处理进程:SceneServer,client
4.网关转发:SceneServer
5.重入:no
6.错误数据:no
7.玩家是否获得道具:no
8.玩家是否获得货币:no
##ChatRetUserCmd
