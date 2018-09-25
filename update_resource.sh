#!/bin/bash

CFG=$1
VER=$2
if [ "x$CFG" = "x" ]; then
  CFG=Debug
fi
if [ "x$VER" = "x" ]; then
  VER=client-trunk
fi

co_lua()
{
  if [ $VER = "client-trunk" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-trunk/Cehua/Lua
  elif [ $VER = "Studio" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-branches/Studio/Cehua/Lua
  elif [ $VER = "banshu" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-branches/banshu/Cehua/Lua
  elif [ $VER = "Release" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-branches/Release/Cehua/Lua
  elif [ $VER = "TF" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-branches/TF/Cehua/Lua
  elif [ $VER = "Release_New" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-branches/Release_New/Cehua/Lua
  elif [ $VER = "TF_New" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-branches/TF_New/Cehua/Lua
  fi
}

co_export()
{
  if [ $VER = "client-trunk" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-trunk/client-export
  elif [ $VER = "Studio" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-branches/Studio/client-export
  elif [ $VER = "banshu" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-branches/banshu/client-export
  elif [ $VER = "Release" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-branches/Release/client-export
  elif [ $VER = "TF" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-branches/TF/client-export
  elif [ $VER = "Release_New" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-branches/Release_New/client-export
  elif [ $VER = "TF_New" ]; then
    svn co svn://svn.sg.xindong.com/RO/client-branches/TF_New/client-export
  fi
}

mkdir -p bin/$CFG
cd ./bin/$CFG
if [ -d "Lua" ]; then
  var=$(svn info Lua | grep URL | awk -F'[/]' '{print $(NF-2)}')
  if [ $VER = $var ]; then
    svn update Lua
  else
    rm -rf Lua
    co_lua
  fi
else
  co_lua
fi

if [ -d "client-export" ]; then
  var=$(svn info client-export | grep URL | awk -F'[/]' '{print $(NF-1)}')
  if [ $VER = $var ]; then
    svn update client-export
  else
    rm -rf client-export
    co_export
  fi
else
  co_export
fi

