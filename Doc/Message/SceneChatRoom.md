######SceneChatRoom.proto
##队伍
##2016-04-07
##gsj
1.消息结构:
2.描述:
3.处理进程:
4.网关转发:(这里填'无'要在网关里面加上处理,否则网关会有默认转发)
5.重入:
6.错误数据:
7.玩家是否获得道具:
8.玩家是否获得货币:
##队伍

## 数据结构
message ChatRoomMember
{
  optional uint64 id = 1 [ default = 0 ];
  optional string name = 2;
  optional uint32 portrait = 3 [ default = 0 ];
  optional uint32 frame = 4 [ default = 0 ];

  optional EChatRoomJob job = 5 [ default = ECHATROOM_MEMBER ];
  optional EProfession rolejob = 6 [ default = EPROFESSION_MIN ];
}

message ChatRoomData
{
  optional uint32 roomid = 1 [ default = 0 ];
  optional string name = 2;
  optional string pswd = 3;
  optional uint64 ownerid = 4 [ default = 0 ];
  optional uint32 maxnum = 5 [ default = 2 ];
  optional EChatRoomType roomtype = 6 [ default = ECHATROOMTYPE_PUBLIC ];
  repeated ChatRoomMember members = 7;
}

##CreateChatRoom
##2016-04-07
##gsj

1.消息结构:
message CreateChatRoom
{
  optional Command cmd = 1 [ default = SCENE_USER_CHATROOM_PROTOCMD ];
  optional EChatRoomParam param = 2 [ default = ECHATROOMPARAM_CREATE];
  optional string roomname = 3;
  optional uint32 maxnum = 4 [ default = 2 ];
  optional string pswd = 5;
}

2.描述:客户端请求创建聊天室
3.处理进程:SceneServer
4.网关转发:SceneServer
5.重入:只能创建一次, 第二次消息忽略
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##CreateChatRoom



##JoinChatRoom
##2016-04-07
##gsj

1.消息结构:
message JoinChatRoom
{
  optional Command cmd = 1 [ default = SCENE_USER_CHATROOM_PROTOCMD ];
  optional EChatRoomParam param = 2 [ default = ECHATROOMPARAM_JOIN ];

  optional uint64 roomid = 3 [ default = 0 ];
  optional string pswd = 4;
}
2.描述:玩家加入聊天室
3.处理进程:SceneServer
4.网关转发:SceneServer
5.重入:只能加入一次, 第二次消息忽略
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##JoinChatRoom



##ExitChatRoom
##2016-04-07
##gsj

1.消息结构:
message ExitChatRoom
{
  optional Command cmd = 1 [ default = SCENE_USER_CHATROOM_PROTOCMD ];
  optional EChatRoomParam param = 2 [ default = ECHATROOMPARAM_EXIT ];

  optional uint64 roomid = 3 [ default = 0 ];
  optional uint64 userid = 4 [ default = 0 ];
}
2.描述:玩家请求退出聊天室, 服务端通知客户端确认退出聊天室
3.处理进程:SceneServer, client
4.网关转发:SceneServer
5.重入:只能退出一次, 第二次消息忽略
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##ExitChatRoom



##KickChatMember
##2016-04-07
##gsj

1.消息结构:
message KickChatMember
{
  optional Command cmd = 1 [ default = SCENE_USER_CHATROOM_PROTOCMD ];
  optional EChatRoomParam param = 2 [ default = ECHATROOMPARAM_KICKMEMBER ];

  optional uint64 roomid = 3 [ default = 0 ];
  optional uint64 memberid = 4 [ default = 0 ];
}
2.描述:将某成员踢出聊天室; 通知客户端,玩家被踢出聊天室
3.处理进程:SceneServer, client
4.网关转发:SceneServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##KickChatMember



##ExchangeRoomOwner
##2016-04-07
##gsj

1.消息结构:
message ExchangeRoomOwner
{
  optional Command cmd = 1 [ default = SCENE_USER_CHATROOM_PROTOCMD ];
  optional EChatRoomParam param = 2 [ default = ECHATROOMPARAM_CHANGEOWNER ];

  optional uint64 userid = 3 [ default = 0 ];
}
2.描述:聊天室管理员移交管理员权限
3.处理进程:SceneServer
4.网关转发:SceneServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##ExchangeRoomOwner



##RoomMemberUpdate
##2016-04-07
##gsj

1.消息结构:
message RoomMemberUpdate
{
  optional Command cmd = 1 [ default = SCENE_USER_CHATROOM_PROTOCMD ];
  optional EChatRoomParam param = 2 [ default = ECHATROOMPARAM_MEMBERUPDATE ];

  repeated ChatRoomMember updates = 3;
  repeated uint64 deletes = 4;
}
2.描述:聊天室成员数据更新
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##RoomMemberUpdate



##EnterChatRoom
##2016-04-07
##gsj

1.消息结构:
message EnterChatRoom
{
  optional Command cmd = 1 [ default = SCENE_USER_CHATROOM_PROTOCMD ];
  optional EChatRoomParam param = 2 [ default = ECHATROOMPARAM_ENTERROOM ];

  optional ChatRoomData data = 3;
}
2.描述:服务端通知客户端, 玩家加入聊天室
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##EnterChatRoom



##ChatRoomDataSync
##2016-04-07
##gsj

1.消息结构:
message ChatRoomSummary
{
  optional uint64 ownerid = 1 [ default = 0 ];
  optional uint32 roomid = 2 [ default = 0 ];
  optional string name = 3;
  optional EChatRoomType roomtype = 4 [ default = ECHATROOMTYPE_PUBLIC ];
  optional uint32 maxnum = 5 [ default = 0 ];
  optional uint32 curnum = 6 [ default = 0 ];
  optional string pswd = 7;
}

enum EChatRoomSync
{
  ECHATROOMSYNC_UPDATE = 1;
  ECHATROOMSYNC_REMOVE = 2;
}

message ChatRoomDataSync
{
  optional Command cmd = 1 [ default = SCENE_USER_CHATROOM_PROTOCMD ];
  optional EChatRoomParam param = 2 [ default = ECHATROOMPARAM_ROOMDATASYNC ];

  optional EChatRoomSync esync = 3 [ default = ECHATROOMSYNC_UPDATE ];
  optional ChatRoomSummary data = 4;
}

2.描述:聊天室数据同步
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##ChatRoomDataSync



##ChatRoomTip
##2016-04-07
##gsj

1.消息结构:
message ChatRoomTip
{
  optional Command cmd = 1 [ default = SCENE_USER_CHATROOM_PROTOCMD ];
  optional EChatRoomParam param = 2 [ default = ECHATROOMPARAM_ROOMTIP ];
  optional EChatRoomTip tip = 3 [ default = ECHATROOMTIP_JOIN ];

  optional uint64 userid = 4 [ default = 0 ];
  optional string name = 5;
}
2.描述:聊天室红点提示,仅提示聊天室成员
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##ChatRoomTip

