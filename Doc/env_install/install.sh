cd
yum install glibc.i686 -y
yum -y install gcc+ gcc-c++
yum install mysql-devel -y
yum install boost-devel.x86_64 -y
yum install libxml2-devel.x86_64 -y
yum install log4cxx-devel.x86_64 -y
yum install jansson-devel.x86_64 -y
yum install svn -y
yum install git -y
yum install gzip -y
yum install bzip2 -y

cp env_install/premake4 /usr/local/bin

cp env_install/protobuf-2.6.1.tar.gz ./
cp env_install/jemalloc-3.4.0.tar.bz2 ./

git clone git://github.com/redis/hiredis.git
cd hiredis
make -j8
make install
cd

tar -zvxf protobuf-2.6.1.tar.gz
tar -vxf jemalloc-3.4.0.tar.bz2
rm protobuf-2.6.1.tar.gz
rm jemalloc-3.4.0.tar.bz2

cd protobuf-2.6.1
./configure
make -j8
make check -j8
make install
cd


cd jemalloc-3.4.0
./configure
make -j8
make install
cd


#ssh-keygen -t rsa

