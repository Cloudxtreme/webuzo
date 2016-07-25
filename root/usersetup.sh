#!/bin/bash

wget -O $HOME/ip.php $FILEREPO/ip.php
ip=$(cat ip.php) 

sed -i '$ a alias mycron="env EDITOR=nano crontab -e"' $HOME/.bashrc
sed -i '$ a alias tara="tar cvzf"' $HOME/.bashrc
sed -i '$ a alias tarx="tar -zxvf"' $HOME/.bashrc
sed -i '$ a alias myip="wget -qO- http://ipecho.net/plain ; echo"' $HOME/.bashrc

read -p 'User: ' myUser
read -p 'Pass: ' myPass
#----------------------------------
# Setup Node Only
#----------------------------------

read -p 'Setup Node?: ' mynode

if [ "$mynode" == "y" ]; then
	read -p 'Node Version?: ' nodev
		git clone https://github.com/creationix/nvm.git ~/.nvm
		printf "\n\n# NVM\nif [ -s ~/.nvm/nvm.sh ]; then\n\tNVM_DIR=~/.nvm\n\tsource ~/.nvm/nvm.sh\nfi" >> ~/.bashrc
		NVM_DIR=~/.nvm
		source ~/.nvm/nvm.sh
		nvm install $nodev
		nvm alias default $nodev
		nvm use $nodev
	echo "Done!!"
else echo "Skipped"
fi
#----------------------------------
# Setup C9
#----------------------------------

read -p 'Setup C9?: ' setupc9
if [ "$setupc9" == "y" ]; then 
		git clone git://github.com/c9/core.git c9sdk
		cd c9sdk
		scripts/install-sdk.sh
		pip install -U virtualenv
		virtualenv --python=python2 $HOME/.c9/python2
		source $HOME/.c9/python2/bin/activate
		mkdir /tmp/codeintel
		pip install --download /tmp/codeintel codeintel==0.9.3
		cd /tmp/codeintel
		tar xf CodeIntel-0.9.3.tar.gz
		mv CodeIntel-0.9.3/SilverCity CodeIntel-0.9.3/silvercity
		tar czf CodeIntel-0.9.3.tar.gz CodeIntel-0.9.3
		pip install -U --no-index --find-links=/tmp/codeintel codeintel
		sed -i '$ a alias myc9="cd $HOME/c9sdk && node server.js -p 8080 -l $ip -a $myUser:$myPass -w $HOME"' $HOME/.bashrc
	echo "Done!!"
else echo "Skipped"
fi