######SessionTeam.proto
##队伍
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
##队伍

##TeamList
##2016-03-22
##gsj

1.消息结构:

enum ETeamJob
{
  ETEAMJOB_MIN = 0;
  ETEAMJOB_LEADER = 1;
  ETEAMJOB_MEMBER = 2;
  ETEAMJOB_MAX = 3;
}
enum EMemberData
{
  EMEMBERDATA_MIN = 0;
  EMEMBERDATA_BASELEVEL = 1;
  EMEMBERDATA_PROFESSION = 2;
  EMEMBERDATA_MAPID = 3;
  EMEMBERDATA_PORTRAIT = 4;
  EMEMBERDATA_FRAME = 5;
  EMEMBERDATA_RAIDID = 6;
  EMEMBERDATA_OFFLINE = 7;
  EMEMBERDATA_HP = 8;
  EMEMBERDATA_MAXHP = 9;
  EMEMBERDATA_SP = 10;
  EMEMBERDATA_MAXSP = 11;
  EMEMBERDATA_JOB = 12;
  EMEMBERDATA_TARGETID = 13;
  EMEMBERDATA_MAX = 14;
};

message MemberData
{
  optional EMemberData type = 1 [ default = EMEMBERDATA_MIN ];
  optional uint64 value = 2 [ default = 0 ];
}

message TeamMember
{
  optional uint64 guid = 1 [ default = 0 ];
  optional string name = 2;

  repeated MemberData datas = 3;
}

message TeamApply
{
  optional uint64 guid = 1 [ default = 0 ];
  optional uint32 time = 2 [ default = 0 ];
  optional string name = 3;

  repeated MemberData datas = 4;
}

message TeamSealData
{
  optional uint32 seal = 1 [ default = 0 ];
  optional ScenePos pos = 2;
}

enum ETeamData
{
  ETEAMDATA_MIN = 0;
  ETEAMDATA_TYPE = 1;
  ETEAMDATA_MINLV = 2;
  ETEAMDATA_MAXLV = 3;
  ETEAMDATA_OVERTIME = 4;
  ETEAMDATA_AUTOACCEPT = 5;
  ETEAMDATA_MEMBERCOUNT = 6;
  ETEAMDATA_MAX = 7;
}
message TeamSummaryItem
{
  optional ETeamData type = 1 [ default = ETEAMDATA_MIN ];
  optional uint64 value = 2 [ default = 0 ];
}

message TeamData
{
  optional uint32 guid = 1 [ default = 0 ];
  optional string name = 2;

  repeated TeamSummaryItem items = 3;
  repeated TeamMember members = 4;
  repeated TeamApply applys = 5;

  optional TeamSealData seal = 6;
}

message TeamList
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_TEAMLIST ];

  optional uint32 type = 3 [ default = 0 ];
  optional uint32 lv = 4 [ default = 0 ];

  repeated TeamData list = 5;
}

2.描述:客户端请求搜索指定类型与等级的队伍列表
3.处理进程:SessionServer, client
4.网关转发:SessionServer
5.重入:多发送一次队伍列表
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##TeamDataUpdate
##2016-03-22
##gsj

1.消息结构
message TeamDataUpdate
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_DATAUPDATE ];

  optional string name = 3;

  repeated TeamSummaryItem datas = 4;
}

2.描述:队伍数据gengxin
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##TeamMemberUpdate
##2016-03-22
##gsj

1.消息结构
message TeamMemberUpdate
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_MEMBERUPDATE ];

  repeated TeamMember updates = 3;
  repeated uint64 deletes = 4;
}

2.描述:更新队伍成员信息
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##TeamApplyUpdate
##2016-03-22
##gsj

1.消息结构
message TeamApplyUpdate
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_APPLYUPDATE ];

  repeated TeamApply updates = 3;
  repeated uint64 deletes = 4;
}

2.描述:更新队伍申请列表
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##CreateTeam
##2016-03-22
##gsj

1.消息结构
message CreateTeam
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_CREATETEAM ];

  optional uint32 minlv = 3 [ default = 0 ];
  optional uint32 maxlv = 4 [ default = 0 ];
  optional uint32 type = 5 [ default = 0 ];

  optional bool autoaccept = 6 [ default = false ];

  optional string name = 7;
}

2.描述:创建一只新队伍
3.处理进程:SessionServer
4.网关转发:SessionServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##InviteMember
##2016-03-22
##gsj

1.消息结构
message InviteMember
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_INVITEMEMBER ];

  optional uint64 userguid = 3 [ default = 0 ];

  optional string teamname = 4;
  optional string username = 5;
}

2.描述:邀请其他人组队
3.处理进程:SessionServer, client
4.网关转发:SessionServer
5.重入:发送已邀请提示
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##ProcessTeamInvite
##2016-03-22
##gsj

1.消息结构
enum ETeamInviteType
{
  ETEAMINVITETYPE_MIN = 0;
  ETEAMINVITETYPE_AGREE = 1;
  ETEAMINVITETYPE_DISAGREE = 2;
  ETEAMINVITETYPE_MAX = 3;
}
message ProcessTeamInvite
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_PROCESSINVITE ];

  optional ETeamInviteType type = 3 [ default = ETEAMINVITETYPE_MIN ];
  optional uint64 userguid = 4 [ default = 0 ];
}

2.描述:回复组队邀请
3.处理进程:SessionServer, client
4.网关转发:SessionServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##TeamMemberApply
##2016-03-22
##gsj

1.消息结构
message TeamMemberApply
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_MEMBERAPPLY ];

  optional uint32 guid = 3 [ default = 0 ];
}

2.描述:申请加入队伍
3.处理进程:SessionServer
4.网关转发:SessionServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##ProcessTeamApply
##2016-03-22
##gsj

1.消息结构
enum ETeamApplyType
{
  ETEAMAPPLYTYPE_MIN = 0;
  ETEAMAPPLYTYPE_AGREE = 1;
  ETEAMAPPLYTYPE_DISAGREE = 2;
  ETEAMAPPLYTYPE_MAX = 3;
}
message ProcessTeamApply
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_PROCESSAPPLY ];

  optional ETeamApplyType type = 3 [ default = ETEAMAPPLYTYPE_MIN ];
  optional uint64 userguid = 4 [ default = 0 ];
}

2.描述:回复申请加入队伍者
3.处理进程:SessionServer, client
4.网关转发:SessionServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##KickMember
##2016-03-22
##gsj

1.消息结构
message KickMember
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_KICKMEMBER ];

  optional uint64 userid = 3 [ default = 0 ];
}

2.描述:将某玩家踢出队伍
3.处理进程:SessionServer
4.网关转发:SessionServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##ExchangeLeader
##2016-03-22
##gsj

1.消息结构
message ExchangeLeader
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_EXCHANGELEADER ];

  optional uint64 userid = 4 [ default = 0 ];
}

2.描述:更换队长
3.处理进程:SessionServer
4.网关转发:SessionServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##ExitTeam
##2016-03-22
##gsj

1.消息结构
message ExitTeam
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_EXITTEAM ];

  optional uint32 teamid = 3 [ default = 0 ];
}

2.描述:退出队伍
3.处理进程:SessionServer, client
4.网关转发:SessionServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##EnterTeam
##2016-03-22
##gsj

1.消息结构
message EnterTeam
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_ENTERTEAM ];

  optional TeamData data = 3;
}

2.描述:新添加成员(或上线时)到队伍
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##MemberPosUpdate
##2016-03-22
##gsj

1.消息结构
message MemberPosUpdate
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_MEMBERPOSUPDATE ];

  optional uint64 id = 3 [ default = 0 ];

  optional ScenePos pos = 4;
}

2.描述:同步队友位置
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##MemberDataUpdate
##2016-03-22
##gsj

1.消息结构
message MemberDataUpdate
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_MEMBERDATAUPDATE ];

  optional uint64 id = 3 [ default = 0 ];

  repeated MemberData members = 4;
}

2.描述:同步更新队友数据
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##LockTarget
##2016-03-22
##gsj

1.消息结构
message LockTarget
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_LOCKTARGET ];

  optional uint64 targetid = 3 [ default = 0 ];
}

2.描述:当前锁定怪物, 同步给队伍成员
3.处理进程:SessionServer, client
4.网关转发:SessionServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##TeamSummon
##2016-03-22
##gsj

1.消息结构
message TeamSummon
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_SUMMON ];

  optional uint32 raidid = 3 [ default = 0 ];
}

2.描述:队长召唤队友进入副本
3.处理进程:SessionServer, client
4.网关转发:SessionServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##ClearApplyList
##2016-03-22
##gsj
##已被屏蔽, 无效


##ClearApplyList
##2016-03-22
##gsj

1.消息结构
message QuickEnter
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_QUICKENTER ];

  optional uint32 type = 3 [ default = 0 ];
}

2.描述:快速加入指定类型的队伍
3.处理进程:SessionServer
4.网关转发:SessionServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否



##SetTeamOption
##2016-03-22
##gsj

1.消息结构
message SetTeamOption
{
  optional Command cmd = 1 [ default = SESSION_USER_TEAM_PROTOCMD ];
  optional TeamParam param = 2 [ default = TEAMPARAM_SETOPTION ];

  optional string name = 3;
  repeated TeamSummaryItem items = 4;
}

2.描述:设置队伍目标、等级限制等选项
3.处理进程:SessionServer
4.网关转发:SessionServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否

