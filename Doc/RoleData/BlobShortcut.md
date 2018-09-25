#BlobShortcut
#liuxin
#2016-03-12
##1.定义:
optional BlobShortcut shortcuts = 5;
##2.结构:
version:0
message BlobShortcut
{
  repeated ShortcutItem cut = 1;
  repeated uint32 firstauto = 2;
  optional uint32 version = 3 [ default = 0 ];
}
message ShortcutItem
{
  optional string guid = 1;

  optional uint32 type = 2 [ default = 0 ];
  optional uint32 pos = 3 [ default = 0 ];
}
##3.描述:
快捷栏
##4.保存:
version:0
```
bool Shortcut::save(BlobShortcut* pData)
{
  if (pData == nullptr)
  {
    XERR("[Shortcut::save] user = %u name = %s protobuf error", m_pUser->id, m_pUser->name);
    return false;
  }

  pData->clear_cut();
  for (auto v = m_vecShortcut.begin(); v != m_vecShortcut.end(); ++v)
  {
    ShortcutItem* pCut = pData->add_cut();
    if (pCut == nullptr)
    {
      XERR("[Shortcut::save] user = %u name = %s pos = %u protobuf error", m_pUser->id, m_pUser->name, v->pos());
      continue;
    }

    pCut->CopyFrom(*v);
  }

  pData->clear_firstauto();
  for (auto v = m_vecFirstAuto.begin(); v != m_vecFirstAuto.end(); ++v)
    pData->add_firstauto(*v);

  XLOG("[快捷键-保存] %llu, %llu, %u, %s 数据大小 : %u", m_pUser->accid, m_pUser->id, m_pUser->getProfession(), m_pUser->name, pData->ByteSize());
  return true;
}
```
##5.加载:
version:0
```
bool Shortcut::load(const BlobShortcut& rData)
{
  m_vecShortcut.clear();
  for (int i = 0; i < rData.cut_size(); ++i)
    m_vecShortcut.push_back(rData.cut(i));

  m_vecFirstAuto.clear();
  for (int i = 0; i < rData.firstauto_size(); ++i)
    m_vecFirstAuto.push_back(rData.firstauto(i));

  initShortcut();
  return true;
}
```
##6.异常:
###6.1:加载失败:
玩家的快捷键数据消失,可以再次设置
###6.2:版本更新后配置异常:
数据可重复设置
###6.3:版本回退:
暂时无新版本
###6.4:版本更新:
暂时无新版本
###6.5:老号处理:
不用处理
###6.6:数据异常:
数据可重复设置
##7.异常处理:
数据可重复设置
