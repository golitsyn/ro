// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: ErrorUserCmd.proto

#ifndef PROTOBUF_ErrorUserCmd_2eproto__INCLUDED
#define PROTOBUF_ErrorUserCmd_2eproto__INCLUDED

#include <string>

#include <google/protobuf/stubs/common.h>

#if GOOGLE_PROTOBUF_VERSION < 2006000
#error This file was generated by a newer version of protoc which is
#error incompatible with your Protocol Buffer headers.  Please update
#error your headers.
#endif
#if 2006001 < GOOGLE_PROTOBUF_MIN_PROTOC_VERSION
#error This file was generated by an older version of protoc which is
#error incompatible with your Protocol Buffer headers.  Please
#error regenerate this file with a newer version of protoc.
#endif

#include <google/protobuf/generated_message_util.h>
#include <google/protobuf/message.h>
#include <google/protobuf/repeated_field.h>
#include <google/protobuf/extension_set.h>
#include <google/protobuf/generated_enum_reflection.h>
#include <google/protobuf/unknown_field_set.h>
#include "xCmd.pb.h"
// @@protoc_insertion_point(includes)

namespace Cmd {

// Internal implementation detail -- do not call these.
void  protobuf_AddDesc_ErrorUserCmd_2eproto();
void protobuf_AssignDesc_ErrorUserCmd_2eproto();
void protobuf_ShutdownFile_ErrorUserCmd_2eproto();

class RegErrUserCmd;
class KickUserErrorCmd;
class MaintainUserCmd;

enum ErrCmdParam {
  REG_ERR_USER_CMD = 1,
  REG_KICK_USER_CMD = 2,
  MAINTAIN_USER_CMD = 3
};
bool ErrCmdParam_IsValid(int value);
const ErrCmdParam ErrCmdParam_MIN = REG_ERR_USER_CMD;
const ErrCmdParam ErrCmdParam_MAX = MAINTAIN_USER_CMD;
const int ErrCmdParam_ARRAYSIZE = ErrCmdParam_MAX + 1;

const ::google::protobuf::EnumDescriptor* ErrCmdParam_descriptor();
inline const ::std::string& ErrCmdParam_Name(ErrCmdParam value) {
  return ::google::protobuf::internal::NameOfEnum(
    ErrCmdParam_descriptor(), value);
}
inline bool ErrCmdParam_Parse(
    const ::std::string& name, ErrCmdParam* value) {
  return ::google::protobuf::internal::ParseNamedEnum<ErrCmdParam>(
    ErrCmdParam_descriptor(), name, value);
}
enum RegErrRet {
  REG_ERR_SUCC = 0,
  REG_ERR_SERVER_STOP = 1,
  REG_ERR_SERVER_STOP_LOGIN = 2,
  REG_ERR_DUPLICATE_LOGIN = 3,
  REG_ERR_RELOGIN_OVERTIME = 4,
  REG_ERR_NEW_VERSION = 5,
  REG_ERR_PROFESSION_NOOPEN = 6,
  REG_ERR_NAME_INVALID = 7,
  REG_ERR_NAME_EMPTY = 8,
  REG_ERR_NAME_OVERMAXLEN = 9,
  REG_ERR_NAME_DUPLICATE = 10,
  REG_ERR_SEQUENCE = 16,
  REG_ERR_DELETE_ERROR = 17,
  REG_ERR_DELETE_ERROR_LOCKED = 18,
  REG_ERR_PASSWD_INVALID = 20,
  REG_ERR_OVERTIME = 21,
  REG_ERR_ACC_FORBID = 22,
  REG_ERR_SERVER_UNOPENED = 51,
  REG_ERR_RELOGIN_SCENE = 100,
  REG_ERR_SESSION_CREATE_FAILD = 101,
  REG_ERR_NOTIFY_SCENE = 102,
  REG_ERR_SCENE_CREATE_FAILD = 103,
  REG_ERR_FIND_GATE = 104,
  REG_ERR_REQ_DATA_FROM_RECORD = 105,
  REG_ERR_SET_USER_DATA_SCENE = 106,
  REG_ERR_FORBID_REG = 107,
  REG_ERR_ENTER_SCENE = 108,
  REG_ERR_GET_USER_DATA = 109
};
bool RegErrRet_IsValid(int value);
const RegErrRet RegErrRet_MIN = REG_ERR_SUCC;
const RegErrRet RegErrRet_MAX = REG_ERR_GET_USER_DATA;
const int RegErrRet_ARRAYSIZE = RegErrRet_MAX + 1;

const ::google::protobuf::EnumDescriptor* RegErrRet_descriptor();
inline const ::std::string& RegErrRet_Name(RegErrRet value) {
  return ::google::protobuf::internal::NameOfEnum(
    RegErrRet_descriptor(), value);
}
inline bool RegErrRet_Parse(
    const ::std::string& name, RegErrRet* value) {
  return ::google::protobuf::internal::ParseNamedEnum<RegErrRet>(
    RegErrRet_descriptor(), name, value);
}
// ===================================================================

class RegErrUserCmd : public ::google::protobuf::Message {
 public:
  RegErrUserCmd();
  virtual ~RegErrUserCmd();

  RegErrUserCmd(const RegErrUserCmd& from);

  inline RegErrUserCmd& operator=(const RegErrUserCmd& from) {
    CopyFrom(from);
    return *this;
  }

  inline const ::google::protobuf::UnknownFieldSet& unknown_fields() const {
    return _unknown_fields_;
  }

  inline ::google::protobuf::UnknownFieldSet* mutable_unknown_fields() {
    return &_unknown_fields_;
  }

  static const ::google::protobuf::Descriptor* descriptor();
  static const RegErrUserCmd& default_instance();

  void Swap(RegErrUserCmd* other);

  // implements Message ----------------------------------------------

  RegErrUserCmd* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const RegErrUserCmd& from);
  void MergeFrom(const RegErrUserCmd& from);
  void Clear();
  bool IsInitialized() const;

  int ByteSize() const;
  bool MergePartialFromCodedStream(
      ::google::protobuf::io::CodedInputStream* input);
  void SerializeWithCachedSizes(
      ::google::protobuf::io::CodedOutputStream* output) const;
  ::google::protobuf::uint8* SerializeWithCachedSizesToArray(::google::protobuf::uint8* output) const;
  int GetCachedSize() const { return _cached_size_; }
  private:
  void SharedCtor();
  void SharedDtor();
  void SetCachedSize(int size) const;
  public:
  ::google::protobuf::Metadata GetMetadata() const;

  // nested types ----------------------------------------------------

  // accessors -------------------------------------------------------

  // optional .Cmd.Command cmd = 1 [default = ERROR_USER_PROTOCMD];
  inline bool has_cmd() const;
  inline void clear_cmd();
  static const int kCmdFieldNumber = 1;
  inline ::Cmd::Command cmd() const;
  inline void set_cmd(::Cmd::Command value);

  // optional .Cmd.ErrCmdParam param = 2 [default = REG_ERR_USER_CMD];
  inline bool has_param() const;
  inline void clear_param();
  static const int kParamFieldNumber = 2;
  inline ::Cmd::ErrCmdParam param() const;
  inline void set_param(::Cmd::ErrCmdParam value);

  // required .Cmd.RegErrRet ret = 3 [default = REG_ERR_SUCC];
  inline bool has_ret() const;
  inline void clear_ret();
  static const int kRetFieldNumber = 3;
  inline ::Cmd::RegErrRet ret() const;
  inline void set_ret(::Cmd::RegErrRet value);

  // optional uint64 accid = 4 [default = 0];
  inline bool has_accid() const;
  inline void clear_accid();
  static const int kAccidFieldNumber = 4;
  inline ::google::protobuf::uint64 accid() const;
  inline void set_accid(::google::protobuf::uint64 value);

  // optional uint32 zoneID = 5 [default = 0];
  inline bool has_zoneid() const;
  inline void clear_zoneid();
  static const int kZoneIDFieldNumber = 5;
  inline ::google::protobuf::uint32 zoneid() const;
  inline void set_zoneid(::google::protobuf::uint32 value);

  // optional uint64 charid = 6 [default = 0];
  inline bool has_charid() const;
  inline void clear_charid();
  static const int kCharidFieldNumber = 6;
  inline ::google::protobuf::uint64 charid() const;
  inline void set_charid(::google::protobuf::uint64 value);

  // repeated uint32 args = 7;
  inline int args_size() const;
  inline void clear_args();
  static const int kArgsFieldNumber = 7;
  inline ::google::protobuf::uint32 args(int index) const;
  inline void set_args(int index, ::google::protobuf::uint32 value);
  inline void add_args(::google::protobuf::uint32 value);
  inline const ::google::protobuf::RepeatedField< ::google::protobuf::uint32 >&
      args() const;
  inline ::google::protobuf::RepeatedField< ::google::protobuf::uint32 >*
      mutable_args();

  // @@protoc_insertion_point(class_scope:Cmd.RegErrUserCmd)
 private:
  inline void set_has_cmd();
  inline void clear_has_cmd();
  inline void set_has_param();
  inline void clear_has_param();
  inline void set_has_ret();
  inline void clear_has_ret();
  inline void set_has_accid();
  inline void clear_has_accid();
  inline void set_has_zoneid();
  inline void clear_has_zoneid();
  inline void set_has_charid();
  inline void clear_has_charid();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::google::protobuf::uint32 _has_bits_[1];
  mutable int _cached_size_;
  int cmd_;
  int param_;
  ::google::protobuf::uint64 accid_;
  int ret_;
  ::google::protobuf::uint32 zoneid_;
  ::google::protobuf::uint64 charid_;
  ::google::protobuf::RepeatedField< ::google::protobuf::uint32 > args_;
  friend void  protobuf_AddDesc_ErrorUserCmd_2eproto();
  friend void protobuf_AssignDesc_ErrorUserCmd_2eproto();
  friend void protobuf_ShutdownFile_ErrorUserCmd_2eproto();

  void InitAsDefaultInstance();
  static RegErrUserCmd* default_instance_;
};
// -------------------------------------------------------------------

class KickUserErrorCmd : public ::google::protobuf::Message {
 public:
  KickUserErrorCmd();
  virtual ~KickUserErrorCmd();

  KickUserErrorCmd(const KickUserErrorCmd& from);

  inline KickUserErrorCmd& operator=(const KickUserErrorCmd& from) {
    CopyFrom(from);
    return *this;
  }

  inline const ::google::protobuf::UnknownFieldSet& unknown_fields() const {
    return _unknown_fields_;
  }

  inline ::google::protobuf::UnknownFieldSet* mutable_unknown_fields() {
    return &_unknown_fields_;
  }

  static const ::google::protobuf::Descriptor* descriptor();
  static const KickUserErrorCmd& default_instance();

  void Swap(KickUserErrorCmd* other);

  // implements Message ----------------------------------------------

  KickUserErrorCmd* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const KickUserErrorCmd& from);
  void MergeFrom(const KickUserErrorCmd& from);
  void Clear();
  bool IsInitialized() const;

  int ByteSize() const;
  bool MergePartialFromCodedStream(
      ::google::protobuf::io::CodedInputStream* input);
  void SerializeWithCachedSizes(
      ::google::protobuf::io::CodedOutputStream* output) const;
  ::google::protobuf::uint8* SerializeWithCachedSizesToArray(::google::protobuf::uint8* output) const;
  int GetCachedSize() const { return _cached_size_; }
  private:
  void SharedCtor();
  void SharedDtor();
  void SetCachedSize(int size) const;
  public:
  ::google::protobuf::Metadata GetMetadata() const;

  // nested types ----------------------------------------------------

  // accessors -------------------------------------------------------

  // optional .Cmd.Command cmd = 1 [default = ERROR_USER_PROTOCMD];
  inline bool has_cmd() const;
  inline void clear_cmd();
  static const int kCmdFieldNumber = 1;
  inline ::Cmd::Command cmd() const;
  inline void set_cmd(::Cmd::Command value);

  // optional .Cmd.ErrCmdParam param = 2 [default = REG_KICK_USER_CMD];
  inline bool has_param() const;
  inline void clear_param();
  static const int kParamFieldNumber = 2;
  inline ::Cmd::ErrCmdParam param() const;
  inline void set_param(::Cmd::ErrCmdParam value);

  // optional uint64 accid = 3 [default = 0];
  inline bool has_accid() const;
  inline void clear_accid();
  static const int kAccidFieldNumber = 3;
  inline ::google::protobuf::uint64 accid() const;
  inline void set_accid(::google::protobuf::uint64 value);

  // @@protoc_insertion_point(class_scope:Cmd.KickUserErrorCmd)
 private:
  inline void set_has_cmd();
  inline void clear_has_cmd();
  inline void set_has_param();
  inline void clear_has_param();
  inline void set_has_accid();
  inline void clear_has_accid();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::google::protobuf::uint32 _has_bits_[1];
  mutable int _cached_size_;
  int cmd_;
  int param_;
  ::google::protobuf::uint64 accid_;
  friend void  protobuf_AddDesc_ErrorUserCmd_2eproto();
  friend void protobuf_AssignDesc_ErrorUserCmd_2eproto();
  friend void protobuf_ShutdownFile_ErrorUserCmd_2eproto();

  void InitAsDefaultInstance();
  static KickUserErrorCmd* default_instance_;
};
// -------------------------------------------------------------------

class MaintainUserCmd : public ::google::protobuf::Message {
 public:
  MaintainUserCmd();
  virtual ~MaintainUserCmd();

  MaintainUserCmd(const MaintainUserCmd& from);

  inline MaintainUserCmd& operator=(const MaintainUserCmd& from) {
    CopyFrom(from);
    return *this;
  }

  inline const ::google::protobuf::UnknownFieldSet& unknown_fields() const {
    return _unknown_fields_;
  }

  inline ::google::protobuf::UnknownFieldSet* mutable_unknown_fields() {
    return &_unknown_fields_;
  }

  static const ::google::protobuf::Descriptor* descriptor();
  static const MaintainUserCmd& default_instance();

  void Swap(MaintainUserCmd* other);

  // implements Message ----------------------------------------------

  MaintainUserCmd* New() const;
  void CopyFrom(const ::google::protobuf::Message& from);
  void MergeFrom(const ::google::protobuf::Message& from);
  void CopyFrom(const MaintainUserCmd& from);
  void MergeFrom(const MaintainUserCmd& from);
  void Clear();
  bool IsInitialized() const;

  int ByteSize() const;
  bool MergePartialFromCodedStream(
      ::google::protobuf::io::CodedInputStream* input);
  void SerializeWithCachedSizes(
      ::google::protobuf::io::CodedOutputStream* output) const;
  ::google::protobuf::uint8* SerializeWithCachedSizesToArray(::google::protobuf::uint8* output) const;
  int GetCachedSize() const { return _cached_size_; }
  private:
  void SharedCtor();
  void SharedDtor();
  void SetCachedSize(int size) const;
  public:
  ::google::protobuf::Metadata GetMetadata() const;

  // nested types ----------------------------------------------------

  // accessors -------------------------------------------------------

  // optional .Cmd.Command cmd = 1 [default = ERROR_USER_PROTOCMD];
  inline bool has_cmd() const;
  inline void clear_cmd();
  static const int kCmdFieldNumber = 1;
  inline ::Cmd::Command cmd() const;
  inline void set_cmd(::Cmd::Command value);

  // optional .Cmd.ErrCmdParam param = 2 [default = MAINTAIN_USER_CMD];
  inline bool has_param() const;
  inline void clear_param();
  static const int kParamFieldNumber = 2;
  inline ::Cmd::ErrCmdParam param() const;
  inline void set_param(::Cmd::ErrCmdParam value);

  // optional string content = 3;
  inline bool has_content() const;
  inline void clear_content();
  static const int kContentFieldNumber = 3;
  inline const ::std::string& content() const;
  inline void set_content(const ::std::string& value);
  inline void set_content(const char* value);
  inline void set_content(const char* value, size_t size);
  inline ::std::string* mutable_content();
  inline ::std::string* release_content();
  inline void set_allocated_content(::std::string* content);

  // optional string tip = 4;
  inline bool has_tip() const;
  inline void clear_tip();
  static const int kTipFieldNumber = 4;
  inline const ::std::string& tip() const;
  inline void set_tip(const ::std::string& value);
  inline void set_tip(const char* value);
  inline void set_tip(const char* value, size_t size);
  inline ::std::string* mutable_tip();
  inline ::std::string* release_tip();
  inline void set_allocated_tip(::std::string* tip);

  // optional string picture = 5;
  inline bool has_picture() const;
  inline void clear_picture();
  static const int kPictureFieldNumber = 5;
  inline const ::std::string& picture() const;
  inline void set_picture(const ::std::string& value);
  inline void set_picture(const char* value);
  inline void set_picture(const char* value, size_t size);
  inline ::std::string* mutable_picture();
  inline ::std::string* release_picture();
  inline void set_allocated_picture(::std::string* picture);

  // @@protoc_insertion_point(class_scope:Cmd.MaintainUserCmd)
 private:
  inline void set_has_cmd();
  inline void clear_has_cmd();
  inline void set_has_param();
  inline void clear_has_param();
  inline void set_has_content();
  inline void clear_has_content();
  inline void set_has_tip();
  inline void clear_has_tip();
  inline void set_has_picture();
  inline void clear_has_picture();

  ::google::protobuf::UnknownFieldSet _unknown_fields_;

  ::google::protobuf::uint32 _has_bits_[1];
  mutable int _cached_size_;
  int cmd_;
  int param_;
  ::std::string* content_;
  ::std::string* tip_;
  ::std::string* picture_;
  friend void  protobuf_AddDesc_ErrorUserCmd_2eproto();
  friend void protobuf_AssignDesc_ErrorUserCmd_2eproto();
  friend void protobuf_ShutdownFile_ErrorUserCmd_2eproto();

  void InitAsDefaultInstance();
  static MaintainUserCmd* default_instance_;
};
// ===================================================================


// ===================================================================

// RegErrUserCmd

// optional .Cmd.Command cmd = 1 [default = ERROR_USER_PROTOCMD];
inline bool RegErrUserCmd::has_cmd() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void RegErrUserCmd::set_has_cmd() {
  _has_bits_[0] |= 0x00000001u;
}
inline void RegErrUserCmd::clear_has_cmd() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void RegErrUserCmd::clear_cmd() {
  cmd_ = 2;
  clear_has_cmd();
}
inline ::Cmd::Command RegErrUserCmd::cmd() const {
  // @@protoc_insertion_point(field_get:Cmd.RegErrUserCmd.cmd)
  return static_cast< ::Cmd::Command >(cmd_);
}
inline void RegErrUserCmd::set_cmd(::Cmd::Command value) {
  assert(::Cmd::Command_IsValid(value));
  set_has_cmd();
  cmd_ = value;
  // @@protoc_insertion_point(field_set:Cmd.RegErrUserCmd.cmd)
}

// optional .Cmd.ErrCmdParam param = 2 [default = REG_ERR_USER_CMD];
inline bool RegErrUserCmd::has_param() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void RegErrUserCmd::set_has_param() {
  _has_bits_[0] |= 0x00000002u;
}
inline void RegErrUserCmd::clear_has_param() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void RegErrUserCmd::clear_param() {
  param_ = 1;
  clear_has_param();
}
inline ::Cmd::ErrCmdParam RegErrUserCmd::param() const {
  // @@protoc_insertion_point(field_get:Cmd.RegErrUserCmd.param)
  return static_cast< ::Cmd::ErrCmdParam >(param_);
}
inline void RegErrUserCmd::set_param(::Cmd::ErrCmdParam value) {
  assert(::Cmd::ErrCmdParam_IsValid(value));
  set_has_param();
  param_ = value;
  // @@protoc_insertion_point(field_set:Cmd.RegErrUserCmd.param)
}

// required .Cmd.RegErrRet ret = 3 [default = REG_ERR_SUCC];
inline bool RegErrUserCmd::has_ret() const {
  return (_has_bits_[0] & 0x00000004u) != 0;
}
inline void RegErrUserCmd::set_has_ret() {
  _has_bits_[0] |= 0x00000004u;
}
inline void RegErrUserCmd::clear_has_ret() {
  _has_bits_[0] &= ~0x00000004u;
}
inline void RegErrUserCmd::clear_ret() {
  ret_ = 0;
  clear_has_ret();
}
inline ::Cmd::RegErrRet RegErrUserCmd::ret() const {
  // @@protoc_insertion_point(field_get:Cmd.RegErrUserCmd.ret)
  return static_cast< ::Cmd::RegErrRet >(ret_);
}
inline void RegErrUserCmd::set_ret(::Cmd::RegErrRet value) {
  assert(::Cmd::RegErrRet_IsValid(value));
  set_has_ret();
  ret_ = value;
  // @@protoc_insertion_point(field_set:Cmd.RegErrUserCmd.ret)
}

// optional uint64 accid = 4 [default = 0];
inline bool RegErrUserCmd::has_accid() const {
  return (_has_bits_[0] & 0x00000008u) != 0;
}
inline void RegErrUserCmd::set_has_accid() {
  _has_bits_[0] |= 0x00000008u;
}
inline void RegErrUserCmd::clear_has_accid() {
  _has_bits_[0] &= ~0x00000008u;
}
inline void RegErrUserCmd::clear_accid() {
  accid_ = GOOGLE_ULONGLONG(0);
  clear_has_accid();
}
inline ::google::protobuf::uint64 RegErrUserCmd::accid() const {
  // @@protoc_insertion_point(field_get:Cmd.RegErrUserCmd.accid)
  return accid_;
}
inline void RegErrUserCmd::set_accid(::google::protobuf::uint64 value) {
  set_has_accid();
  accid_ = value;
  // @@protoc_insertion_point(field_set:Cmd.RegErrUserCmd.accid)
}

// optional uint32 zoneID = 5 [default = 0];
inline bool RegErrUserCmd::has_zoneid() const {
  return (_has_bits_[0] & 0x00000010u) != 0;
}
inline void RegErrUserCmd::set_has_zoneid() {
  _has_bits_[0] |= 0x00000010u;
}
inline void RegErrUserCmd::clear_has_zoneid() {
  _has_bits_[0] &= ~0x00000010u;
}
inline void RegErrUserCmd::clear_zoneid() {
  zoneid_ = 0u;
  clear_has_zoneid();
}
inline ::google::protobuf::uint32 RegErrUserCmd::zoneid() const {
  // @@protoc_insertion_point(field_get:Cmd.RegErrUserCmd.zoneID)
  return zoneid_;
}
inline void RegErrUserCmd::set_zoneid(::google::protobuf::uint32 value) {
  set_has_zoneid();
  zoneid_ = value;
  // @@protoc_insertion_point(field_set:Cmd.RegErrUserCmd.zoneID)
}

// optional uint64 charid = 6 [default = 0];
inline bool RegErrUserCmd::has_charid() const {
  return (_has_bits_[0] & 0x00000020u) != 0;
}
inline void RegErrUserCmd::set_has_charid() {
  _has_bits_[0] |= 0x00000020u;
}
inline void RegErrUserCmd::clear_has_charid() {
  _has_bits_[0] &= ~0x00000020u;
}
inline void RegErrUserCmd::clear_charid() {
  charid_ = GOOGLE_ULONGLONG(0);
  clear_has_charid();
}
inline ::google::protobuf::uint64 RegErrUserCmd::charid() const {
  // @@protoc_insertion_point(field_get:Cmd.RegErrUserCmd.charid)
  return charid_;
}
inline void RegErrUserCmd::set_charid(::google::protobuf::uint64 value) {
  set_has_charid();
  charid_ = value;
  // @@protoc_insertion_point(field_set:Cmd.RegErrUserCmd.charid)
}

// repeated uint32 args = 7;
inline int RegErrUserCmd::args_size() const {
  return args_.size();
}
inline void RegErrUserCmd::clear_args() {
  args_.Clear();
}
inline ::google::protobuf::uint32 RegErrUserCmd::args(int index) const {
  // @@protoc_insertion_point(field_get:Cmd.RegErrUserCmd.args)
  return args_.Get(index);
}
inline void RegErrUserCmd::set_args(int index, ::google::protobuf::uint32 value) {
  args_.Set(index, value);
  // @@protoc_insertion_point(field_set:Cmd.RegErrUserCmd.args)
}
inline void RegErrUserCmd::add_args(::google::protobuf::uint32 value) {
  args_.Add(value);
  // @@protoc_insertion_point(field_add:Cmd.RegErrUserCmd.args)
}
inline const ::google::protobuf::RepeatedField< ::google::protobuf::uint32 >&
RegErrUserCmd::args() const {
  // @@protoc_insertion_point(field_list:Cmd.RegErrUserCmd.args)
  return args_;
}
inline ::google::protobuf::RepeatedField< ::google::protobuf::uint32 >*
RegErrUserCmd::mutable_args() {
  // @@protoc_insertion_point(field_mutable_list:Cmd.RegErrUserCmd.args)
  return &args_;
}

// -------------------------------------------------------------------

// KickUserErrorCmd

// optional .Cmd.Command cmd = 1 [default = ERROR_USER_PROTOCMD];
inline bool KickUserErrorCmd::has_cmd() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void KickUserErrorCmd::set_has_cmd() {
  _has_bits_[0] |= 0x00000001u;
}
inline void KickUserErrorCmd::clear_has_cmd() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void KickUserErrorCmd::clear_cmd() {
  cmd_ = 2;
  clear_has_cmd();
}
inline ::Cmd::Command KickUserErrorCmd::cmd() const {
  // @@protoc_insertion_point(field_get:Cmd.KickUserErrorCmd.cmd)
  return static_cast< ::Cmd::Command >(cmd_);
}
inline void KickUserErrorCmd::set_cmd(::Cmd::Command value) {
  assert(::Cmd::Command_IsValid(value));
  set_has_cmd();
  cmd_ = value;
  // @@protoc_insertion_point(field_set:Cmd.KickUserErrorCmd.cmd)
}

// optional .Cmd.ErrCmdParam param = 2 [default = REG_KICK_USER_CMD];
inline bool KickUserErrorCmd::has_param() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void KickUserErrorCmd::set_has_param() {
  _has_bits_[0] |= 0x00000002u;
}
inline void KickUserErrorCmd::clear_has_param() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void KickUserErrorCmd::clear_param() {
  param_ = 2;
  clear_has_param();
}
inline ::Cmd::ErrCmdParam KickUserErrorCmd::param() const {
  // @@protoc_insertion_point(field_get:Cmd.KickUserErrorCmd.param)
  return static_cast< ::Cmd::ErrCmdParam >(param_);
}
inline void KickUserErrorCmd::set_param(::Cmd::ErrCmdParam value) {
  assert(::Cmd::ErrCmdParam_IsValid(value));
  set_has_param();
  param_ = value;
  // @@protoc_insertion_point(field_set:Cmd.KickUserErrorCmd.param)
}

// optional uint64 accid = 3 [default = 0];
inline bool KickUserErrorCmd::has_accid() const {
  return (_has_bits_[0] & 0x00000004u) != 0;
}
inline void KickUserErrorCmd::set_has_accid() {
  _has_bits_[0] |= 0x00000004u;
}
inline void KickUserErrorCmd::clear_has_accid() {
  _has_bits_[0] &= ~0x00000004u;
}
inline void KickUserErrorCmd::clear_accid() {
  accid_ = GOOGLE_ULONGLONG(0);
  clear_has_accid();
}
inline ::google::protobuf::uint64 KickUserErrorCmd::accid() const {
  // @@protoc_insertion_point(field_get:Cmd.KickUserErrorCmd.accid)
  return accid_;
}
inline void KickUserErrorCmd::set_accid(::google::protobuf::uint64 value) {
  set_has_accid();
  accid_ = value;
  // @@protoc_insertion_point(field_set:Cmd.KickUserErrorCmd.accid)
}

// -------------------------------------------------------------------

// MaintainUserCmd

// optional .Cmd.Command cmd = 1 [default = ERROR_USER_PROTOCMD];
inline bool MaintainUserCmd::has_cmd() const {
  return (_has_bits_[0] & 0x00000001u) != 0;
}
inline void MaintainUserCmd::set_has_cmd() {
  _has_bits_[0] |= 0x00000001u;
}
inline void MaintainUserCmd::clear_has_cmd() {
  _has_bits_[0] &= ~0x00000001u;
}
inline void MaintainUserCmd::clear_cmd() {
  cmd_ = 2;
  clear_has_cmd();
}
inline ::Cmd::Command MaintainUserCmd::cmd() const {
  // @@protoc_insertion_point(field_get:Cmd.MaintainUserCmd.cmd)
  return static_cast< ::Cmd::Command >(cmd_);
}
inline void MaintainUserCmd::set_cmd(::Cmd::Command value) {
  assert(::Cmd::Command_IsValid(value));
  set_has_cmd();
  cmd_ = value;
  // @@protoc_insertion_point(field_set:Cmd.MaintainUserCmd.cmd)
}

// optional .Cmd.ErrCmdParam param = 2 [default = MAINTAIN_USER_CMD];
inline bool MaintainUserCmd::has_param() const {
  return (_has_bits_[0] & 0x00000002u) != 0;
}
inline void MaintainUserCmd::set_has_param() {
  _has_bits_[0] |= 0x00000002u;
}
inline void MaintainUserCmd::clear_has_param() {
  _has_bits_[0] &= ~0x00000002u;
}
inline void MaintainUserCmd::clear_param() {
  param_ = 3;
  clear_has_param();
}
inline ::Cmd::ErrCmdParam MaintainUserCmd::param() const {
  // @@protoc_insertion_point(field_get:Cmd.MaintainUserCmd.param)
  return static_cast< ::Cmd::ErrCmdParam >(param_);
}
inline void MaintainUserCmd::set_param(::Cmd::ErrCmdParam value) {
  assert(::Cmd::ErrCmdParam_IsValid(value));
  set_has_param();
  param_ = value;
  // @@protoc_insertion_point(field_set:Cmd.MaintainUserCmd.param)
}

// optional string content = 3;
inline bool MaintainUserCmd::has_content() const {
  return (_has_bits_[0] & 0x00000004u) != 0;
}
inline void MaintainUserCmd::set_has_content() {
  _has_bits_[0] |= 0x00000004u;
}
inline void MaintainUserCmd::clear_has_content() {
  _has_bits_[0] &= ~0x00000004u;
}
inline void MaintainUserCmd::clear_content() {
  if (content_ != &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    content_->clear();
  }
  clear_has_content();
}
inline const ::std::string& MaintainUserCmd::content() const {
  // @@protoc_insertion_point(field_get:Cmd.MaintainUserCmd.content)
  return *content_;
}
inline void MaintainUserCmd::set_content(const ::std::string& value) {
  set_has_content();
  if (content_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    content_ = new ::std::string;
  }
  content_->assign(value);
  // @@protoc_insertion_point(field_set:Cmd.MaintainUserCmd.content)
}
inline void MaintainUserCmd::set_content(const char* value) {
  set_has_content();
  if (content_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    content_ = new ::std::string;
  }
  content_->assign(value);
  // @@protoc_insertion_point(field_set_char:Cmd.MaintainUserCmd.content)
}
inline void MaintainUserCmd::set_content(const char* value, size_t size) {
  set_has_content();
  if (content_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    content_ = new ::std::string;
  }
  content_->assign(reinterpret_cast<const char*>(value), size);
  // @@protoc_insertion_point(field_set_pointer:Cmd.MaintainUserCmd.content)
}
inline ::std::string* MaintainUserCmd::mutable_content() {
  set_has_content();
  if (content_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    content_ = new ::std::string;
  }
  // @@protoc_insertion_point(field_mutable:Cmd.MaintainUserCmd.content)
  return content_;
}
inline ::std::string* MaintainUserCmd::release_content() {
  clear_has_content();
  if (content_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    return NULL;
  } else {
    ::std::string* temp = content_;
    content_ = const_cast< ::std::string*>(&::google::protobuf::internal::GetEmptyStringAlreadyInited());
    return temp;
  }
}
inline void MaintainUserCmd::set_allocated_content(::std::string* content) {
  if (content_ != &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    delete content_;
  }
  if (content) {
    set_has_content();
    content_ = content;
  } else {
    clear_has_content();
    content_ = const_cast< ::std::string*>(&::google::protobuf::internal::GetEmptyStringAlreadyInited());
  }
  // @@protoc_insertion_point(field_set_allocated:Cmd.MaintainUserCmd.content)
}

// optional string tip = 4;
inline bool MaintainUserCmd::has_tip() const {
  return (_has_bits_[0] & 0x00000008u) != 0;
}
inline void MaintainUserCmd::set_has_tip() {
  _has_bits_[0] |= 0x00000008u;
}
inline void MaintainUserCmd::clear_has_tip() {
  _has_bits_[0] &= ~0x00000008u;
}
inline void MaintainUserCmd::clear_tip() {
  if (tip_ != &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    tip_->clear();
  }
  clear_has_tip();
}
inline const ::std::string& MaintainUserCmd::tip() const {
  // @@protoc_insertion_point(field_get:Cmd.MaintainUserCmd.tip)
  return *tip_;
}
inline void MaintainUserCmd::set_tip(const ::std::string& value) {
  set_has_tip();
  if (tip_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    tip_ = new ::std::string;
  }
  tip_->assign(value);
  // @@protoc_insertion_point(field_set:Cmd.MaintainUserCmd.tip)
}
inline void MaintainUserCmd::set_tip(const char* value) {
  set_has_tip();
  if (tip_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    tip_ = new ::std::string;
  }
  tip_->assign(value);
  // @@protoc_insertion_point(field_set_char:Cmd.MaintainUserCmd.tip)
}
inline void MaintainUserCmd::set_tip(const char* value, size_t size) {
  set_has_tip();
  if (tip_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    tip_ = new ::std::string;
  }
  tip_->assign(reinterpret_cast<const char*>(value), size);
  // @@protoc_insertion_point(field_set_pointer:Cmd.MaintainUserCmd.tip)
}
inline ::std::string* MaintainUserCmd::mutable_tip() {
  set_has_tip();
  if (tip_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    tip_ = new ::std::string;
  }
  // @@protoc_insertion_point(field_mutable:Cmd.MaintainUserCmd.tip)
  return tip_;
}
inline ::std::string* MaintainUserCmd::release_tip() {
  clear_has_tip();
  if (tip_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    return NULL;
  } else {
    ::std::string* temp = tip_;
    tip_ = const_cast< ::std::string*>(&::google::protobuf::internal::GetEmptyStringAlreadyInited());
    return temp;
  }
}
inline void MaintainUserCmd::set_allocated_tip(::std::string* tip) {
  if (tip_ != &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    delete tip_;
  }
  if (tip) {
    set_has_tip();
    tip_ = tip;
  } else {
    clear_has_tip();
    tip_ = const_cast< ::std::string*>(&::google::protobuf::internal::GetEmptyStringAlreadyInited());
  }
  // @@protoc_insertion_point(field_set_allocated:Cmd.MaintainUserCmd.tip)
}

// optional string picture = 5;
inline bool MaintainUserCmd::has_picture() const {
  return (_has_bits_[0] & 0x00000010u) != 0;
}
inline void MaintainUserCmd::set_has_picture() {
  _has_bits_[0] |= 0x00000010u;
}
inline void MaintainUserCmd::clear_has_picture() {
  _has_bits_[0] &= ~0x00000010u;
}
inline void MaintainUserCmd::clear_picture() {
  if (picture_ != &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    picture_->clear();
  }
  clear_has_picture();
}
inline const ::std::string& MaintainUserCmd::picture() const {
  // @@protoc_insertion_point(field_get:Cmd.MaintainUserCmd.picture)
  return *picture_;
}
inline void MaintainUserCmd::set_picture(const ::std::string& value) {
  set_has_picture();
  if (picture_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    picture_ = new ::std::string;
  }
  picture_->assign(value);
  // @@protoc_insertion_point(field_set:Cmd.MaintainUserCmd.picture)
}
inline void MaintainUserCmd::set_picture(const char* value) {
  set_has_picture();
  if (picture_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    picture_ = new ::std::string;
  }
  picture_->assign(value);
  // @@protoc_insertion_point(field_set_char:Cmd.MaintainUserCmd.picture)
}
inline void MaintainUserCmd::set_picture(const char* value, size_t size) {
  set_has_picture();
  if (picture_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    picture_ = new ::std::string;
  }
  picture_->assign(reinterpret_cast<const char*>(value), size);
  // @@protoc_insertion_point(field_set_pointer:Cmd.MaintainUserCmd.picture)
}
inline ::std::string* MaintainUserCmd::mutable_picture() {
  set_has_picture();
  if (picture_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    picture_ = new ::std::string;
  }
  // @@protoc_insertion_point(field_mutable:Cmd.MaintainUserCmd.picture)
  return picture_;
}
inline ::std::string* MaintainUserCmd::release_picture() {
  clear_has_picture();
  if (picture_ == &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    return NULL;
  } else {
    ::std::string* temp = picture_;
    picture_ = const_cast< ::std::string*>(&::google::protobuf::internal::GetEmptyStringAlreadyInited());
    return temp;
  }
}
inline void MaintainUserCmd::set_allocated_picture(::std::string* picture) {
  if (picture_ != &::google::protobuf::internal::GetEmptyStringAlreadyInited()) {
    delete picture_;
  }
  if (picture) {
    set_has_picture();
    picture_ = picture;
  } else {
    clear_has_picture();
    picture_ = const_cast< ::std::string*>(&::google::protobuf::internal::GetEmptyStringAlreadyInited());
  }
  // @@protoc_insertion_point(field_set_allocated:Cmd.MaintainUserCmd.picture)
}


// @@protoc_insertion_point(namespace_scope)

}  // namespace Cmd

#ifndef SWIG
namespace google {
namespace protobuf {

template <> struct is_proto_enum< ::Cmd::ErrCmdParam> : ::google::protobuf::internal::true_type {};
template <>
inline const EnumDescriptor* GetEnumDescriptor< ::Cmd::ErrCmdParam>() {
  return ::Cmd::ErrCmdParam_descriptor();
}
template <> struct is_proto_enum< ::Cmd::RegErrRet> : ::google::protobuf::internal::true_type {};
template <>
inline const EnumDescriptor* GetEnumDescriptor< ::Cmd::RegErrRet>() {
  return ::Cmd::RegErrRet_descriptor();
}

}  // namespace google
}  // namespace protobuf
#endif  // SWIG

// @@protoc_insertion_point(global_scope)

#endif  // PROTOBUF_ErrorUserCmd_2eproto__INCLUDED
