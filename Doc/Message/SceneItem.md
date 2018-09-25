######SceneItem.proto
##队伍
##2016-03-28
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
message RefineCompose
{
  optional uint32 id = 1 [ default = 0 ];
  optional uint32 num = 2 [ default = 0 ];
}
message EquipData
{
  optional uint32 strengthlv = 1 [ default = 0 ];
  optional uint32 refinelv = 2 [ default = 0 ];

  optional uint32 strengthCost = 3 [ default = 0 ];
  repeated RefineCompose refineCompose = 4;

  optional uint32 cardslot = 5 [ default = 0 ];

  repeated uint32 buffid = 6;
  optional bool damage = 7 [ default = false ];
}
message CardData
{
  optional string guid = 1;
  optional uint32 id = 2 [ default = 0 ];
}
message ItemInfo
{
  optional string guid = 1;

  optional uint32 id = 2 [ default = 0 ];
  optional uint32 count = 3 [ default = 0 ];
  optional uint32 index = 4 [ default = 0 ];
  optional uint32 createtime = 5 [ default = 0 ];
  optional uint64 cd = 6 [ default = 0 ];

  optional EItemType type = 7 [ default = EITEMTYPE_MIN ];
  optional EBindType bind = 8 [ default = EBINDTYPE_MIN ];
  optional EExpireType expire = 9 [ default = EEXPIRETYPE_MIN ];
  optional EQualityType quality = 10 [ default = EQUALITYTYPE_MIN ];
  optional EEquipType equipType = 11 [ default = EEQUIPTYPE_MIN ];
  optional ESource source = 12 [ default = ESOURCE_NORMAL ];

  optional bool isnew = 13 [ default = false ];
  optional uint32 maxcardslot = 14 [ default = 0 ];
}
message ItemData
{
  optional ItemInfo base = 1;

  optional bool equiped = 2 [ default = false ];
  optional uint32 battlepoint = 3 [ default = 0 ];

  optional EquipData equip = 4;
  repeated CardData card = 5;
}

##PackageItem
##2016-03-28
##gsj

1.消息结构:
message PackageItem
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_PACKAGEITEM ];

  optional EPackType type = 3 [ default = EPACKTYPE_MIN ];
  repeated ItemData data = 4;
}

2.描述:客户端请求指定类型包裹信息
3.处理进程:SceneServer, client
4.网关转发:SceneServer
5.重入:多发送一次包裹信息
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##PackageItem



##PackageUpdate
##2016-03-28
##gsj

1.消息结构:
message PackageUpdate
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_PACKAGEUPDATE ];

  optional EPackType type = 3 [ default = EPACKTYPE_MIN ];
  repeated ItemData updateItems = 4;
  repeated ItemData delItems = 5;
}

2.描述:包裹信息变化时通知客户端
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##PackageUpdate



##ItemUse
##2016-03-28
##gsj

1.消息结构:
message ItemUse
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_ITEMUSE ];

  optional string itemguid = 3;
}

2.描述:玩家使用消耗类道具
3.处理进程:SceneServer
4.网关转发:SceneServer
5.重入:会判断物品能否使用
6.错误数据:无
7.玩家是否获得道具:是
8.玩家是否获得货币:是
##ItemUse



##PackageSort
##2016-03-28
##gsj

1.消息结构:
message SortInfo
{
  optional string guid = 1;
  optional uint32 index = 2 [ default = 0 ];
}
message PackageSort
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_PACKAGESORT ];

  optional EPackType type = 3 [ default = EPACKTYPE_MIN ];
  repeated SortInfo item = 4;
}

2.描述:客户端请求包裹物品排序
3.处理进程:SceneServer
4.网关转发:SceneServer
5.重入:会再次发送物品排序列表
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##PackageSort



##Equip
##2016-03-28
##gsj

1.消息结构:
message Equip
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_EQUIP ];

  optional EEquipOper oper = 3 [ default = EEQUIPOPER_MIN ];
  optional EEquipPos pos = 4 [ default = EEQUIPPOS_MIN ];
  optional string guid = 5;
}

2.描述:客户端请求更换装备
3.处理进程:SceneServer
4.网关转发:SceneServer
5.重入:忽视相同的消息
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##Equip



##SellItem
##2016-03-28
##gsj

1.消息结构:
message SItem
{
  optional string guid = 1;
  optional uint32 count = 2 [ default = 0 ];
}
message SellItem
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_SELLITEM ];

  repeated SItem items = 3;
}

2.描述:出售背包中的物品
3.处理进程:SceneServer
4.网关转发:SceneServer
5.重入:会判断是否能够出售
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:是
##SellItem



##EquipStrength
##2016-03-28
##gsj

1.消息结构:
enum EStrengthResult
{
  ESTRENGTHRESULT_MIN = 0;
  ESTRENGTHRESULT_SUCCESS = 1;
  ESTRENGTHRESULT_NOMATERIAL = 2;
  ESTRENGTHRESULT_MAXLV = 3;
}
message EquipStrength
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_EQUIPSTRENGTH ];

  optional string guid = 3;

  optional uint32 destcount = 4 [ default = 0 ];
  optional uint32 count = 5 [ default = 0 ];
  optional uint32 cricount = 6 [ default = 0 ];
  optional uint32 oldlv = 7 [ default = 0 ];
  optional uint32 newlv = 8 [ default = 0 ];

  optional EStrengthResult result = 9 [ default = ESTRENGTHRESULT_MIN ];
}

2.描述:装备强化
3.处理进程:SceneServer, client
4.网关转发:SceneServer
5.重入:会判断能否继续强化
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##EquipStrength



##PreProduce
##2016-03-28
##gsj

1.消息结构:
message PreProduce
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_PREPRODUCE ];

  optional uint64 npcid = 3 [ default = 0 ];
  optional uint32 composeid = 4 [ default = 0 ];
}

2.描述:合成物品准备
3.处理进程:SceneServer, client
4.网关转发:SceneServer
5.重入:NPC多次播放动画
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##PreProduce



##Produce
##2016-03-28
##gsj

1.消息结构:
message Produce
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_PRODUCE ];

  optional uint32 composeid = 3 [ default = 0 ];
  optional uint64 npcid = 4 [ default = 0 ];
  optional string destitem = 5;
}
2.描述:合成物品
3.处理进程:SceneServer, client
4.网关转发:SceneServer
5.重入:会检查能否合成
6.错误数据:无
7.玩家是否获得道具:是
8.玩家是否获得货币:否
##Produce



##ProduceDone
##2016-03-28
##gsj

1.消息结构:
message ProduceDone
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_PRODUCEDONE ];

  optional uint64 npcid = 3 [ default = 0 ];
  optional uint32 itemid = 4 [ default = 0 ];
}

2.描述:通知9屏玩家合成物品成功
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##ProduceDone



##EquipRefine
##2016-03-28
##gsj

1.消息结构
enum ERefineResult
{
  EREFINERESULT_MIN = 0;
  EREFINERESULT_SUCCESS = 1;
  EREFINERESULT_FAILSTAY = 2;
  EREFINERESULT_FAILBACK = 3;
  EREFINERESULT_FAILSTAYDAM = 4;
  EREFINERESULT_FAILBACKDAM = 5;
  EREFINERESULT_MAX = 6;
}
message EquipRefine
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_REFINE ];

  optional string guid = 3;
  optional uint32 composeid = 4 [ default = 0 ];

  optional uint32 refinelv = 5 [ default = 0 ];
  optional ERefineResult eresult = 6 [ default = EREFINERESULT_MIN ];
}

2.描述:客户端请求精炼装备, 服务端回复精炼结果
3.处理进程:SceneServer, client
4.网关转发:SceneServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:否
8.玩家是否获得货币:否
##EquipRefine



##EquipDecompose
##2016-03-28
##gsj

1.消息结构
message EquipDecompose
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_DECOMPOSE ];

  optional bool bKeepOriEquip = 3 [ default = false ];
  optional string guid = 4;
}

2.描述:装备分解
3.处理进程:SceneServer
4.网关转发:SceneServer
5.重入:会检查是否分解该件装备
6.错误数据:无
7.玩家是否获得道具:是
8.玩家是否获得货币:是
##EquipDecompose



##QueryEquipData
##2016-03-28
##gsj

1.消息结构
message QueryEquipData
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_QUERYEQUIPDATA ];

  optional string guid = 3;
  optional EquipData data = 4;
}

2.描述:客户端请求某件装备的信息
3.处理进程:SceneServer, client
4.网关转发:SceneServer
5.重入:会再次发送该装备信息
6.错误数据:无
7.玩家是否获得道具:无
8.玩家是否获得货币:无
##QueryEquipData



##BrowsePackage
##2016-03-28
##gsj

1.消息结构
message BrowsePackage
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_BROWSEPACK ];

  optional EPackType type = 3 [ default = EPACKTYPE_MIN ];
}
2.描述:标记指定类型的包裹已经被查看
3.处理进程:SceneServer, client
4.网关转发:SceneServer
5.重入:无
6.错误数据:无
7.玩家是否获得道具:无
8.玩家是否获得货币:无
##BrowsePackage



##EquipCard
##2016-03-28
##gsj

1.消息结构
enum ECardOper
{
  ECARDOPER_MIN = 0;
  ECARDOPER_EQUIPON = 1;
  ECARDOPER_EQUIPOFF = 2;
  ECARDOPER_MAX = 3;
}
message EquipCard
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_EQUIPCARD ];

  optional ECardOper oper = 3 [ default = ECARDOPER_MIN ];
  optional string cardguid = 4;
  optional string equipguid = 5;
}

2.描述:装备卡片
3.处理进程:SceneServer, client
4.网关转发:SceneServer
5.重入:会检查能否插卡
6.错误数据:无
7.玩家是否获得道具:无
8.玩家是否获得货币:无
##EquipCard



##ItemShow
##2016-03-28
##gsj

1.消息结构
message ItemModel
{
  optional uint32 id = 1 [ default = 0 ];
  optional uint32 count = 2 [ default = 0 ];
}
message ItemShow
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_ITEMSHOW ];

  repeated ItemModel items = 3;
}
2.描述:服务端通知客户端物品展示
3.处理进程:client
4.网关转发:无
5.重入:无
6.错误数据:无
7.玩家是否获得道具:无
8.玩家是否获得货币:无
##ItemShow



##EquipRepair
##2016-03-28
##gsj

1.消息结构
message EquipRepair
{
  optional Command cmd = 1 [ default = SCENE_USER_ITEM_PROTOCMD ];
  optional ItemParam param = 2 [ default = ITEMPARAM_REPAIR ];

  optional string targetguid = 3;
  optional bool success = 4 [ default = false ];
}

2.描述:装备修复
3.处理进程:SceneServer, client
4.网关转发:SceneServer
5.重入:会判定是否需要修复
6.错误数据:无
7.玩家是否获得道具:无
8.玩家是否获得货币:无
##EquipRepair
