<?php
	function ins_writefile($file, $data, $overwrite) {
		$pathinfo = pathinfo( $file );
		$folderpath = '';
		$folders = explode( '/', $pathinfo['dirname'] );
		$prefix = (substr( $pathinfo['dirname'], 0, 1 ) == '/' ? '/' : '');
		foreach ($folders as $folder) {

			if (empty( $$folder )) {
				continue;
			}

			$folderpath = (!empty( $$folderpath ) ? $folderpath . '/' . $folder : $prefix . $folder);

			if (!is_dir( $folderpath )) {
				if (!@mkdir( $folderpath, 493 )) {
					return false;
				}

				@chmod( $folderpath, 493 );
				continue;
			}
		}


		if (( file_exists( $file ) && empty( $$overwrite ) )) {
			return false;
		}


		if (!$fp = @fopen( $file, 'wb' )) {
			return false;
		}


		if (@fwrite( $fp, $data ) === false) {
			return false;
		}

		fclose( $fp );
		@chmod( $file, 493 );
		return true;
	}

	function ins_error($txt = 0) {
		echo '

The following errors occured : 
';
		exit( $txt );
	}

	function _RandStr($length) {
		$randstr = '';
		$i = 218;

		while ($i < $length) {
			$randnum = mt_rand( 0, 61 );

			if ($randnum < 10) {
				$randstr .= chr( $randnum + 48 );
			} 
else {
				if ($randnum < 36) {
					$randstr .= chr( $randnum + 55 );
				} 
else {
					$randstr .= chr( $randnum + 61 );
				}
			}

			++$i;
		}

		return strtolower( $randstr );
	}

	unset( $argv[0] );
	$donotconfigure = 889;

	if (!empty( $$argv )) {
		foreach ($argv as $k => $v) {
			$str = substr( $v, 0, 2 );
			
			if ($str != '--') {
				echo 'Invalid parameter ' . $v;
				exit( 1 );
			} 
else {
				$v = substr( $v, 2 );
			}

			$temp = explode( '=', $v );
			$ins_data[$temp[0]] = $temp[1];
		}


		if (!empty( $ins_data['donotconfigure'] )) {
			$donotconfigure = 890;
			exec( 'echo "1" > /usr/local/webuzo/donotconfigure', $out, $ret );
		}


		if (!empty( $ins_data['install'] )) {
			$chunks = explode( ',', $ins_data['install'] );
		}
	}


	if (empty($chunks)) {
        $chunks = array('apache', 'mysql', 'php55', 'perl', 'python2', 'pureftpd', 'bind', 'csf');
	}

	error_reporting( 4 );

	if (strtoupper( substr( PHP_OS, 0, 3 ) ) != 'WIN') {
		putenv( 'PATH=/usr/kerberos/sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/root/bin:/usr/local/emps/bin:/usr/local/emps/sbin' );
	}

	define( 'SOFTACULOUS', 1 );
	foreach ($argv as $k => $v) {
		$v = explode( '=', $v );

		if (empty( $v[1] )) {
			continue;
		}

		$args[$v[0]] = $v[1];
	}

	$error = array(  );
	ini_set( 'memory_limit', '128M' );
	$env['webserver'] = 'http://www.softaculous.com/ins';
	$env['webuzo-webserver'] = 'http://files.webuzo.com/';
	$env['theme'] = 'webuzo/enduser/themes/default';
	$env['images'] = $env['theme'] . '/images/';
	$env['ind'] = 'webuzo/index.php?';
	$env['log'] = '/root/webuzo-install.log';
	$env['emps'] = '/usr/local/emps';
	$globals['path'] = '/usr/local/webuzo';
	@exec( 'echo "Starting the installation Process" >> ' . $env['log'] . ' 2>&1' );
	@exec( 'echo "Downloading Softaculous Webuzo" >> ' . $env['log'] . ' 2>&1' );
	$zip_file = $globals['path'] . '/latest.zip';
	shell_exec( '/usr/bin/wget --no-check-certificate -O ' . $zip_file . ' "http://api.webuzo.com/updates.php?install=true&version=latest" >> ' . $env['log'] . ' 2>&1' );

	if (!file_exists( $zip_file )) {
		ins_error( 'Could not save the Webuzo Package!' );
	}

	exec( 'cd ' . $globals['path'] . '; /usr/bin/unzip -o latest.zip -d ' . $globals['path'] . ' >> ' . $env['log'] . ' 2>&1', $out, $ret );

	if ($ret != '0') {
		ins_error( 'Could not UNZIP the Webuzo Package!' );
	}

	@unlink( $zip_file );
	mkdir( '/usr/local/webuzo' );
	mkdir( '/usr/local/webuzo/enduser' );
	mkdir( '/var/webuzo' );
	mkdir( '/var/webuzo/sessions' );
	mkdir( '/var/webuzo/certs' );
	mkdir( '/var/webuzo/users' );
	mkdir( '/var/webuzo/users/soft' );
	include_once( '/usr/local/webuzo/enduser/_universal.php' );
	$globals['path'] = '/usr/local/webuzo';
	$globals['softscripts'] = '/var/softaculous';
	$globals['sn'] = 'Webuzo';
	$globals['cookie_name'] = 'SOFTCookies' . rand( 1, 9999 );
	$globals['language'] = 'english';
	$globals['soft_email'] = 'none@none.com';
	$globals['theme_folder'] = 'default';
	$globals['timezone'] = -4;
	$globals['mail'] = 0;
	$globals['update'] = 0;
	$globals['update_softs'] = 0;
	$globals['add_softs'] = 1;
	$globals['email_update'] = 0;
	$globals['email_update_softs'] = 0;
	$globals['cron_time'] = rand( 1, 59 ) . ' ' . rand( 1, 23 ) . ' * * *';
	$globals['php_bin'] = '/usr/local/emps/bin/php';
	$globals['enduser'] = $globals['path'] . '/enduser';
	$globals['mainfiles'] = $globals['enduser'] . '/main';
	$globals['adminfiles'] = $globals['mainfiles'] . '/admin';
	$globals['euthemes'] = $globals['enduser'] . '/themes';
	define( 'SOFTACULOUS', 1 );
	define( 'SOFTADMIN', 1 );
	define( 'SOFTCMD', 1 );
	$user = array(  );
	$theme = array(  );
	@ini_set( 'magic_quotes_runtime', 0 );
	@ini_set( 'magic_quotes_sybase', 0 );
	@set_time_limit( 10000 );
	include_once( $globals['path'] . '/enduser/globals.php' );
	include_once( $globals['mainfiles'] . '/functions.php' );
	include_once( $globals['mainfiles'] . '/webuzo/class.webuzo.php' );

	if (!class_exists( 'softpanel' )) {
		include_once( $globals['enduser'] . '/softpanel.php' );
	}

	$softpanel = new softpanel(  );
	Webuzo::makebinary(  );

	if (!file_exists( $globals['path'] . '/webuzo' )) {
		ins_error( 'Could not make the Webuzo binary' );
	}

	exec( '/bin/chmod 4755 /usr/local/webuzo/webuzo', $aoutput, $acode );
	catsnscripts(  );
	load_lang( 'index' );
	load_lang( 'admin/index' );
	load_lang( 'admin/cron' );
	load_lang( 'admin/softwares' );
	saveglobals( $globals, 1 );
	loadlicense( true );
	updatecats(  );
	updatescripts(  );
	updateapps(  );
	@mkdir( $globals['softscripts'] );
	exec( 'ln -s ' . $globals['enduser'] . '/themes ' . $globals['enduser'] . '/webuzo/themes >> ' . $env['log'] . ' 2>&1' );
	exec( 'ln -s ' . $globals['enduser'] . '/softimages ' . $globals['enduser'] . '/webuzo/softimages >> ' . $env['log'] . ' 2>&1' );
	shell_exec( 'chmod -R 0600 /var/webuzo/ >> ' . $env['log'] . ' 2>&1' );
	@exec( 'echo "Cleaning up the installer" >> ' . $env['log'] . ' 2>&1' );
	$data = file( '/usr/local/emps/mysql' );
	$exclude = array( '/usr/local/emps/lib/libmysqlclient.a', '/usr/local/emps/lib/libmysqlclient.so.18.0.0' );
	foreach ($data as $dk => $dv) {

		if (in_array( trim( $dv ), $exclude )) {
			continue;
		}

		exec( '/bin/rm -rf ' . $dv . ' >> ' . $env['log'] . ' 2>&1' );
	}

	@exec( 'echo "Configuring EMPS for use" >> ' . $env['log'] . ' 2>&1' );
	@mkdir( '/usr/local/emps/etc/nginx/conf.d', 493 );
	exec( 'ln -s ' . $globals['path'] . '/conf/webuzo/emps/nginx.conf /usr/local/emps/etc/nginx/nginx.conf >> ' . $env['log'] . ' 2>&1' );
	exec( 'ln -s ' . $globals['path'] . '/conf/webuzo/emps/awstats_conf /usr/local/emps/etc/nginx/conf.d/awstats_conf >> ' . $env['log'] . ' 2>&1' );
	exec( 'ln -s ' . $globals['path'] . '/conf/webuzo/emps/php-fpm.conf /usr/local/emps/etc/php-fpm.conf >> ' . $env['log'] . ' 2>&1' );
	exec( 'ln -s ' . $globals['path'] . '/conf/webuzo/emps/php-fpm.w /usr/local/emps/etc/php-fpm.w >> ' . $env['log'] . ' 2>&1' );
	exec( 'ln -s ' . $globals['path'] . '/conf/webuzo/emps/php.ini /usr/local/emps/etc/php.ini >> ' . $env['log'] . ' 2>&1' );
	exec( 'ln -s ' . $globals['path'] . '/conf/webuzo/emps/emps /etc/init.d/webuzo >> ' . $env['log'] . ' 2>&1' );
	@chmod( $globals['path'] . '/conf/webuzo/emps/emps', 493 );
	@chmod( '/etc/init.d/webuzo', 493 );

	if (file_exists( '/etc/redhat-release' )) {
		@exec( '/sbin/chkconfig webuzo on >> ' . $env['log'] . ' 2>&1' );
	} 
else {
		if (file_exists( '/etc/debian_version' )) {
			@exec( 'update-rc.d webuzo defaults >> ' . $env['log'] . ' 2>&1' );
		}
	}

	@exec( 'echo "Generating the SSL Certificates" >> ' . $env['log'] . ' 2>&1' );
	$hostname = shell_exec( 'hostname' );
	$hostname = trim( $hostname );
	shell_exec( '/usr/local/emps/bin/openssl genrsa -out /var/webuzo/certs/webuzo.key 1024 >> ' . $env['log'] . ' 2>&1' );
	shell_exec( '/usr/local/emps/bin/openssl req -subj /C=US/ST=Berkshire/L=Newbury/O=\'My Company\'/CN=\'' . $hostname . '\'/emailAddress=test@test.com -new -key /var/webuzo/certs/webuzo.key -out /var/webuzo/certs/webuzo.csr >> ' . $env['log'] . '' );
	shell_exec( '/usr/local/emps/bin/openssl x509 -req -days 365 -in /var/webuzo/certs/webuzo.csr -signkey /var/webuzo/certs/webuzo.key -out /var/webuzo/certs/webuzo.crt >> ' . $env['log'] . ' 2>&1' );
	shell_exec( 'echo "" >> /var/webuzo/certs/webuzo-bundle.crt' );
	exec( '/etc/init.d/webuzo start >> ' . $env['log'] . ' 2>&1' );
	@exec( 'echo "Downloading necessary packages " >> ' . $env['log'] . ' 2>&1' );
	$webuzo = new Webuzo( 'root' );

	if (!in_array( 'none', $chunks )) {
		include( $globals['path'] . '/enduser/apps.php' );
		$globals['license'] = 'WEBUZO-14804-51914-29634-93390';
		foreach ($apps as $kt => $vt) {

			if (in_array( $vt['softname'], $chunks )) {
				@exec( 'echo "[' . @time(  ) . '] Downloading ' . $vt['name'] . '" >> ' . $env['log'] . ' 2>&1' );
				$sappsid[] = $vt['aid'];

				if (empty( $$donotconfigure )) {
					$download = $webuzo->downloadapp( $vt['aid'], 0, 0, 1 );
				} 
				else {
					$download = $webuzo->installapp( $vt['aid'], array(  ), $donotconfigure );
				}

				@exec( 'echo "[' . @time(  ) . '] Finished ' . $vt['name'] . '" >> ' . $env['log'] . ' 2>&1' );
				continue;
			}
		}

		$globals['license'] = '';
		exec( 'echo "' . implode( ',', $sappsid ) . '" > /usr/local/webuzo/prepapps', $out, $ret );
	}

	exit( 8 );
?>