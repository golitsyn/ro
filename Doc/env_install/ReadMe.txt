#服务器环境配置

#将env_install文件夹scp到待配置服务器root下
scp -r env_install root@xx.xx.xx.xx:/root

#登陆服务器, 修改权限并运行env_install中的install.sh

#添加user后, 登陆 user@xx.xx.xx.xx 设置bash_profile
添加:
ulimit -c unlimited
LD_LIBRARY_PATH=/usr/local/lib:/usr/local/libxls/lib:/usr/lib64:$LD_LIBRARY_PATH
export LD_LIBRARY_PATH

