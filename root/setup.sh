#!/bin/bash

read -p 'URL: ' MINE
read -p 'IP: ' myIp
read -p 'User: ' myUser
read -p 'Pass: ' myPass
read -p 'Domain: ' myDomain

#----------------------------------
# Setup VirtualEnv and PIP for C9
#----------------------------------

yum -y install python-pip
pip install --upgrade pip
pip install virtualenv
yum install python-devel.x86_64 -y
wget -O /root/autoinstall.php $MINE/WebuzoSetup.inc
chmod 0755 autoinstall.php
/usr/local/emps/bin/php autoinstall.php $myIp $myUser $myPass $myDomain
wget -O /usr/local/webuzo/enduser/universal.php $MINE/universal.inc

#----------------------------------
# CSF
#----------------------------------
cd /root
read -p 'InstallCSF (y/n)?: ' mycsf
if [ "$mycsf" == "y" ]; then 
	/etc/init.d/iptables stop
	yum install perl-Crypt-SSLeay perl-Net-SSLeay -y
	cd /usr/src
	rm -fv csf.tgz
	wget https://download.configserver.com/csf.tgz
	tar -xzf csf.tgz
	cd csf
	./install.generic.sh
	wget -O /etc/csf/csf.conf $MINE/csf.conf
	csf -r
	echo "Done!!"
else echo "Skipped"
fi



#----------------------------------
# Change SSH Port
#----------------------------------

cd /root
read -p 'Set SSH Port: ' sshport
if [ -n "$sshport" ]; then 
		sed -i "s/#Port 22/Port $sshport/" /etc/ssh/sshd_config
	echo "Done!!"
else echo "Skipped"
fi

#----------------------------------
# CleanUP
#----------------------------------
cd /root
read -p 'Cleanup and Secure (y/n)?: ' cleanme
if [ "$cleanme" == "y" ]; then 
	rm -rf rar
	rm -rf *.tar.gz
	rm -rf install.sh
	rm -rf ip.php
	rm -rf *.rpm
	rm -rf *.log
	yum -y install yum-cron
	/etc/init.d/yum-cron start
	chkconfig yum-cron on
	rm -rf /var/webuzo/users/$myUser/*
	chmod 000 /var/webuzo/users/$myUser
	echo "Done!!"
else echo "Skipped"
fi

echo "DONT FORGET"
echo "-------------------------------------"
echo "Delete webuzo http 2002 and 2004"
echo "nano /usr/local/webuzo/conf/webuzo/emps/nginx.conf"
echo "-------------------------------------"
echo "New SSH Port $sshport"