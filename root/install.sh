#!/bin/bash

# Get PreReq!
rpm -Uvh http://dl.fedoraproject.org/pub/epel/epel-release-latest-6.noarch.rpm
rpm -Uvh --nosignature ftp://195.220.108.108/linux/sourceforge/i/it/itmos/rely%20on%20cnz/rpmforge-release-0.5.3-1.el6.rf.x86_64.rpm
rpm -Uvh --nosignature http://www.packetfence.org/downloads/SOGo/RHEL6/nightly/x86_64/RPMS/libwbxml-0.11.2-4.centos6.x86_64.rpm
rpm -Uvh --nosignature http://rpms.famillecollet.com/enterprise/6/php56/x86_64/php-pecl-zip-1.12.5-1.el6.remi.5.6.x86_64.rpm
rpm -Uvh --nosignature http://www.packetfence.org/downloads/SOGo/RHEL6/nightly/x86_64/RPMS/libwbxml-0.11.2-4.centos6.x86_64.rpm
yum update -y && yum upgrade -y
yum install wget zip unzip git glib* tmux gdb glibc.i686 glibc-devel.i686 glibc-i686 libstdc++.i686 -y
wget http://www.rarlab.com/rar/rarlinux-x64-5.4.b2.tar.gz
tar -zxvf rarlinux-x64-5.4.b2.tar.gz
cd rar
make
make install
cd ../
rm -rf rar
rm -rf *.tar.gz
# Setenforce to 0
setenforce 0 >> /dev/null

# Flush the IP Tables
iptables -F >> /dev/null
iptables -P INPUT ACCEPT >> /dev/null

SOFTACULOUS_FILREPO=http://www.softaculous.com
VIRTUALIZOR_FILEREPO=http://files.virtualizor.com
FILEREPO=http://files.webuzo.com
LOG=/root/webuzo-install.log
SOFT_CONTACT_FILE=/var/webuzo/users/soft/contact
EMPS=/usr/local/emps
CONF=/usr/local/webuzo/conf/webuzo
MINE=https://raw.githubusercontent.com/jsEveryDay/webuzo/master/root



#----------------------------------
# Enabling Webuzo repo
#----------------------------------
wget http://mirror.softaculous.com/webuzo/webuzo.repo -O /etc/yum.repos.d/webuzo.repo >> $LOG 2>&1
user="soft"
adduser $user >> $LOG 2>&1
chmod 755 /home/soft >> $LOG 2>&1
/bin/ln -s /sbin/chkconfig /usr/sbin/chkconfig >> $LOG 2>&1

yum -y install gcc gcc-c++ unzip apr make vixie-cron sendmail
mkdir $EMPS >> $LOG 2>&1
wget -N -O $EMPS/EMPS.tar.gz "http://files.softaculous.com/emps.php?arch=64" >> $LOG 2>&1

# Extract EMPS
tar -xvzf $EMPS/EMPS.tar.gz -C /usr/local/emps

# Create the folder
rm -rf /usr/local/webuzo
mkdir /usr/local/webuzo >> $LOG 2>&1

# Get our installer
wget -O /usr/local/webuzo/install.php $MINE/install.php >> $LOG 2>&1


echo "4) Downloading System Apps"
# Run our installer
/usr/local/emps/bin/php -d zend_extension=/usr/local/emps/lib/php/ioncube_loader_lin_5.3.so /usr/local/webuzo/install.php $*
phpret=$?

# Was there an error
if ! [ $phpret == "8" ]; then
	echo " "
	echo "ERROR :"
	echo "There was an error while installing Webuzo"
	echo "Please check $LOG for errors"
	echo "Exiting Installer"	
 	exit 1;
fi



# Get our initial setup tool
wget -O /usr/local/webuzo/enduser/webuzo/install.php $FILEREPO/initial.inc

# Disable selinux
if [ -f /etc/selinux/config ] ; then 
	mv /etc/selinux/config /etc/selinux/config_  
	echo "SELINUX=disabled" >> /etc/selinux/config 
	echo "SELINUXTYPE=targeted" >> /etc/selinux/config 
	echo "SETLOCALDEFS=0" >> /etc/selinux/config 
fi

#----------------------------------
# Starting Webuzo Services
#----------------------------------
echo "Starting Webuzo Services" >> $LOG 2>&1
/etc/init.d/webuzo restart >> $LOG 2>&1

wget -O /usr/local/webuzo/enduser/universal.php $FILEREPO/universal.inc >> $LOG 2>&1

#-------------------------------------------
# FLUSH and SAVE IPTABLES / Start the CRON
#-------------------------------------------
service crond restart >> $LOG 2>&1

/sbin/iptables -F >> $LOG 2>&1

/etc/init.d/iptables save >> $LOG 2>&1
/usr/sbin/chkconfig crond on >> $LOG 2>&1

#----------------------------------
# GET the IP
#----------------------------------
wget -O /root/ip.php $FILEREPO/ip.php
ip=$(cat ip.php) 

echo "Done With Webuzo"

cd /root
wget $MINE/postinstall.sh
chmod 0755 postinstall.sh
echo "All Set"

cd /root
read -p 'Continue with ./postinstall.sh (y/n)?: ' postinst
if [ "$postinst" == "y" ]; then 
	./postinstall.sh
	echo "Done!!"
else echo "Skipped"
fi