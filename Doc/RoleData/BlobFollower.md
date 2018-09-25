#BlobFollower
#liuxin
#2016-03-14
##1.定义:
optional BlobFollower follower = 6;
##2.结构:
version:0
message FollowerItem
{
  optional uint32 id = 1;
  optional float spdRatio = 2;
  optional uint32 behaviours = 3;
}

message BlobFollower
{
  optional uint32 version = 1;
  repeated FollowerItem list = 2;
}
##3.描述:
跟随玩家的npc
##4.保存:
version:0
```
void Follower::save(Cmd::BlobFollower *data)
{
  if (!data) return;
  data->Clear();
  if (!m_oListData.empty())
  {
    XLOG("[Follower],save size:%u", m_oListData.size());
    for (auto it=m_oListData.begin(); it!=m_oListData.end(); ++it)
    {
      FollowerItem *bf = data->add_list();
      bf->set_id((*it).nameID);
      bf->set_spdratio((*it).spdRatio);
      bf->set_behaviours((*it).behaviours);
      XLOG("[Follower],save:%u", (*it).nameID);
    }
  }

  SceneUser* pUser = dynamic_cast<SceneUser*>(m_pEntry);
  if (pUser != nullptr)
    XLOG("[跟随者-保存] %llu, %llu, %u, %s 数据大小 : %u", pUser->accid, pUser->id, pUser->getProfession(), pUser->name, data->ByteSize());
}
```
##5.加载:
version:0
```
void Follower::load(const Cmd::BlobFollower &data)
{
  int size = data.list_size();
  if (!size) return;

  XLOG("[Follower],load size:%u", size);
  for (int i=0; i<size; ++i)
  {
    SFollow sfData;
    sfData.nameID = data.list(i).id();
    sfData.spdRatio = data.list(i).spdratio();
    sfData.behaviours = data.list(i).behaviours();
    m_oListData.push_back(sfData);
    XLOG("[Follower],load:%u", sfData.nameID);
  }
}
```
##6.异常:
###6.1:加载失败:
玩家的跟随者消失
###6.2:版本更新后配置异常:
npc表加载不到，无法出现跟随者。
###6.3:版本回退:
暂时无新版本
###6.4:版本更新:
暂时无新版本
###6.5:老号处理:
不用处理
###6.6:数据异常:
无法出现跟随者。
##7.异常处理:
临时数据，异常数据全部删除，由调用的功能保证正确性。
