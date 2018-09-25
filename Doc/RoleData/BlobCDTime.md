#BlobCDTime
#liuxin
#2016-03-08
##1.定义:
optional BlobCDTime cdtime = 4;
##2.结构:
version:0
message BlobCDTime
{
  optional uint32 version = 1;
  repeated CDTimeItem list = 2;
}
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
##3.描述:
技能使用，道具使用的cd时间
##4.保存:
version:0
```
void CDTimeM::save(Cmd::BlobCDTime *data)
{
  if (data == nullptr)
    return;

  if (m_list[CD_TYPE_SKILL].empty() && m_list[CD_TYPE_ITEM].empty()) return;

  QWORD curTime = xTime::getCurUSec()/1000;

  data->clear_list();
  for (int i=0; i<CD_TYPE_ARRAYSIZE; ++i)
  {
    m_iter it = m_list[i].begin(), end = m_list[i].end();
    for ( ;it!=end; ++it)
    {
      if (it->second > curTime)
      {
        Cmd::CDTimeItem *pItem = data->add_list();

        pItem->set_id(it->first);
        pItem->set_time(it->second);
        pItem->set_type((CD_TYPE)i);
      }
    }
  }

  SceneUser* pUser = dynamic_cast<SceneUser*>(m_pEntry);
  if (pUser != nullptr)
    XLOG("[CD-保存] %llu, %llu, %u, %s 数据大小 : %u", pUser->accid, pUser->id, pUser->getProfession(), pUser->name, data->ByteSize());
}
```
##5.加载:
version:0
```
void CDTimeM::load(const Cmd::BlobCDTime &data)
{
  int size = data.list_size();
  if (!size) return;

  QWORD curTime = xTime::getCurUSec()/1000;
  for (int i=0; i<size; ++i)
  {
    const Cmd::CDTimeItem &item = data.list(i);
    DWORD id = item.id();
    QWORD time = item.time();
    CD_TYPE type = item.type();
    if (id && time>curTime)
    {
      if (CD_TYPE_IsValid(type))
      {
        m_list[type][id] = time;
      }
    }
  }
}
```
##6.异常:
###6.1:加载失败:
玩家的cd数据消失,可以再次使用技能和道具,之后恢复正常
###6.2:版本更新后配置异常:
数据有时效性，超时不会保存加载
###6.3:版本回退:
暂时无新版本
###6.4:版本更新:
暂时无新版本
###6.5:老号处理:
不用处理
###6.6:数据异常:
时间无限大，会导致玩家无法使用该技能或道具，处理方法:增加一个上限，当前时间加上限超过保存的时间清除数据?
##7.异常处理:
增加GM指令 //patch act=clearcdtime id=
