<?php

/*
Copyright (c) 2017, Till Brehm, projektfarm Gmbh
All rights reserved.

Redistribution and use in source and binary forms, with or without modification,
are permitted provided that the following conditions are met:

    * Redistributions of source code must retain the above copyright notice,
      this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright notice,
      this list of conditions and the following disclaimer in the documentation
      and/or other materials provided with the distribution.
    * Neither the name of ISPConfig nor the names of its contributors
      may be used to endorse or promote products derived from this software without
      specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY
OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
*/

//***  Debian 9 default settings

//* Main
$conf['language'] = 'en';
$conf['distname'] = 'freebsd';
$conf['hostname'] = 'server1.domain.tld'; // Full hostname
$conf['ispconfig_install_dir'] = '/usr/local/ispconfig';
$conf['ispconfig_config_dir'] = '/usr/local/ispconfig';
$conf['ispconfig_log_priority'] = 2;  // 0 = Debug, 1 = Warning, 2 = Error
$conf['ispconfig_log_dir'] = '/var/log/ispconfig';
$conf['server_id'] = 1;
$conf['init_scripts'] = '/usr/local/etc/rc.d';
$conf['runlevel'] = '/usr/local/etc';
$conf['shells'] = '/etc/shells';
$conf['pam'] = '/etc/pam.d';

//* Services provided by this server, this selection will be overridden by the expert mode
$conf['services']['mail'] = true;
$conf['services']['web'] = true;
$conf['services']['dns'] = true;
$conf['services']['file'] = true;
$conf['services']['db'] = true;
$conf['services']['vserver'] = true;
$conf['services']['proxy'] = false;
$conf['services']['firewall'] = false;

//* MySQL
$conf['mysql']['installed'] = false; // will be detected automatically during installation
$conf['mysql']['init_script'] = 'mysql';
$conf['mysql']['host'] = '127.0.0.1';
$conf['mysql']['ip'] = '127.0.0.1';
$conf['mysql']['port'] = '3306';
$conf['mysql']['database'] = 'dbispconfig';
$conf['mysql']['admin_user'] = 'root';
$conf['mysql']['admin_password'] = '';
$conf['mysql']['charset'] = 'utf8';
$conf['mysql']['ispconfig_user'] = 'ispconfig';
$conf['mysql']['ispconfig_password'] = md5(uniqid(rand()));
$conf['mysql']['master_slave_setup'] = 'n';
$conf['mysql']['master_host'] = '';
$conf['mysql']['master_database'] = 'dbispconfig';
$conf['mysql']['master_admin_user'] = 'root';
$conf['mysql']['master_admin_password'] = '';
$conf['mysql']['master_ispconfig_user'] = '';
$conf['mysql']['master_ispconfig_password'] = md5(uniqid(rand()));

//* Apache
$conf['apache']['installed'] = false; // will be detected automatically during installation
$conf['apache']['user'] = 'www';
$conf['apache']['group'] = 'www';
$conf['apache']['init_script'] = 'apache2';
$conf['apache']['version'] = '2.4';
$conf['apache']['vhost_conf_dir'] = '/usr/local/etc/apache2/sites-available';
$conf['apache']['vhost_conf_enabled_dir'] = '/usr/local/etc/apache2/sites-enabled';
$conf['apache']['vhost_port'] = '8080';
$conf['apache']['php_ini_path_apache'] = '/usr/local/etc/php.ini';
$conf['apache']['php_ini_path_cgi'] = '/usr/local/etc/php.ini';

//* Website base settings
$conf['web']['website_basedir'] = '/var/www';
$conf['web']['website_path'] = '/var/www/clients/client[client_id]/web[website_id]';
$conf['web']['website_symlinks'] = '/var/www/[website_domain]/:/var/www/clients/client[client_id]/[website_domain]/';

//* Apps base settings
$conf['web']['apps_vhost_ip'] = '0.0.0.0';
$conf['web']['apps_vhost_port'] = '8081';
$conf['web']['apps_vhost_servername'] = '';
$conf['web']['apps_vhost_user'] = 'ispapps';
$conf['web']['apps_vhost_group'] = 'ispapps';

//* Fastcgi
$conf['fastcgi']['fastcgi_phpini_path'] = '/usr/local/etc/php.ini';
$conf['fastcgi']['fastcgi_starter_path'] = '/var/www/php-fcgi-scripts/[system_user]/';
$conf['fastcgi']['fastcgi_bin'] = '/usr/local/bin/php-cgi';

//* Postfix
$conf['postfix']['installed'] = false; // will be detected automatically during installation
$conf['postfix']['config_dir'] = '/usr/local/etc/postfix';
$conf['postfix']['init_script'] = 'postfix';
$conf['postfix']['user'] = 'postfix';
$conf['postfix']['group'] = 'postfix';
$conf['postfix']['vmail_userid'] = '5000';
$conf['postfix']['vmail_username'] = 'vmail';
$conf['postfix']['vmail_groupid'] = '5000';
$conf['postfix']['vmail_groupname'] = 'vmail';
$conf['postfix']['vmail_mailbox_base'] = '/var/vmail';

//* Mailman
$conf['mailman']['installed'] = false; // will be detected automatically during installation
$conf['mailman']['config_dir'] = '/usr/local/etc/mailman';
$conf['mailman']['init_script'] = 'mailman';

//* mlmmj
$conf['mlmmj']['installed'] = false; // will be detected automatically during installation
$conf['mlmmj']['config_dir'] = '/usr/local/etc/mlmmj';

//* Getmail
$conf['getmail']['installed'] = false; // will be detected automatically during installation
$conf['getmail']['config_dir'] = '/usr/local/etc/getmail';
$conf['getmail']['program'] = '/usr/local/bin/getmail';

//* Courier
$conf['courier']['installed'] = false; // will be detected automatically during installation
$conf['courier']['config_dir'] = '/usr/local/etc/courier';
$conf['courier']['courier-authdaemon'] = 'courier-authdaemon';
$conf['courier']['courier-imap'] = 'courier-imap';
$conf['courier']['courier-imap-ssl'] = 'courier-imap-ssl';
$conf['courier']['courier-pop'] = 'courier-pop';
$conf['courier']['courier-pop-ssl'] = 'courier-pop-ssl';

//* Dovecot
$conf['dovecot']['installed'] = false; // will be detected automatically during installation
$conf['dovecot']['config_dir'] = '/usr/local/etc/dovecot';
$conf['dovecot']['init_script'] = 'dovecot';

//* SASL
$conf['saslauthd']['installed'] = false; // will be detected automatically during installation
$conf['saslauthd']['config'] = '/usr/local/lib/sasl2/Sendmail.conf';
$conf['saslauthd']['init_script'] = 'saslauthd';

//* Amavisd
$conf['amavis']['installed'] = false; // will be detected automatically during installation
$conf['amavis']['config_file'] = '/usr/local/etc/amavisd.conf';
$conf['amavis']['init_script'] = 'amavisd';
$conf['amavis']['config_dir'] = '/usr/local/etc/amavis';
//* ClamAV
$conf['clamav']['installed'] = false; // will be detected automatically during installation
$conf['clamav']['init_script'] = 'clamav-clamd';

//* Pureftpd
$conf['pureftpd']['installed'] = false; // will be detected automatically during installation
$conf['pureftpd']['config_dir'] = '/usr/local/etc/pure-ftpd';
$conf['pureftpd']['init_script'] = 'pure-ftpd';

//* MyDNS
$conf['mydns']['installed'] = false; // will be detected automatically during installation
$conf['mydns']['config_dir'] = '/usr/local/etc';
$conf['mydns']['init_script'] = 'mydns';

//* PowerDNS
$conf['powerdns']['installed'] = false; // will be detected automatically during installation
$conf['powerdns']['database'] = 'powerdns';
$conf['powerdns']['config_dir'] = '/usr/local/etc/powerdns/pdns.d';
$conf['powerdns']['init_script'] = 'pdns';

//* BIND DNS Server
$conf['bind']['installed'] = false; // will be detected automatically during installation
$conf['bind']['bind_user'] = 'root';
$conf['bind']['bind_group'] = 'bind';
$conf['bind']['bind_zonefiles_dir'] = '/usr/local/etc/namedb';
$conf['bind']['named_conf_path'] = '/usr/local/etc/namedb/named.conf';
$conf['bind']['named_conf_local_path'] = '/usr/local/etc/namedb/named.conf';
$conf['bind']['init_script'] = 'named';

//* Jailkit
$conf['jailkit']['installed'] = false; // will be detected automatically during installation
$conf['jailkit']['config_dir'] = '/usr/local/etc/jailkit';
$conf['jailkit']['jk_init'] = 'jk_init.ini';
$conf['jailkit']['jk_chrootsh'] = 'jk_chrootsh.ini';
$conf['jailkit']['jailkit_chroot_app_programs'] = '/usr/bin/groups /usr/bin/id /usr/bin/dircolors /usr/bin/lesspipe /usr/bin/basename /usr/bin/dirname /usr/bin/nano /usr/bin/pico /usr/bin/mysql /usr/bin/mysqldump /usr/bin/git /usr/bin/git-receive-pack /usr/bin/git-upload-pack /usr/bin/unzip /usr/bin/zip /bin/tar /bin/rm /usr/bin/patch';
$conf['jailkit']['jailkit_chroot_cron_programs'] = '/usr/bin/php /usr/bin/perl /usr/share/perl /usr/share/php';

//* Squid
$conf['squid']['installed'] = false; // will be detected automatically during installation
$conf['squid']['config_dir'] = '/usr/local/etc/squid';
$conf['squid']['init_script'] = 'squid';

//* Nginx
$conf['nginx']['installed'] = false; // will be detected automatically during installation
$conf['nginx']['user'] = 'www';
$conf['nginx']['group'] = 'www';
$conf['nginx']['config_dir'] = '/usr/local/etc/nginx';
$conf['nginx']['vhost_conf_dir'] = '/usr/local/etc/nginx/sites-available';
$conf['nginx']['vhost_conf_enabled_dir'] = '/usr/local/etc/nginx/sites-enabled';
$conf['nginx']['init_script'] = 'nginx';
$conf['nginx']['vhost_port'] = '8080';
$conf['nginx']['cgi_socket'] = '/var/run/fcgiwrap.socket';
$conf['nginx']['php_fpm_init_script'] = 'php-fpm';
$conf['nginx']['php_fpm_ini_path'] = '/usr/local/etc/php.ini';
$conf['nginx']['php_fpm_pool_dir'] = '/usr/local/etc/php-fpm.d';
$conf['nginx']['php_fpm_start_port'] = 9010;
$conf['nginx']['php_fpm_socket_dir'] = '/var/lib/php-fpm';

//* OpenVZ
$conf['openvz']['installed'] = false;

//*Bastille-Firwall
$conf['bastille']['installed'] = false;
$conf['bastille']['config_dir'] = '/usr/local/etc/Bastille';

//* vlogger
$conf['vlogger']['config_dir'] = '/usr/local/etc';

//* cron
$conf['cron']['init_script'] = 'cron';
$conf['cron']['crontab_dir'] = '/etc/cron.d';
$conf['cron']['wget'] = '/usr/local/bin/wget';

//* Metronome XMPP
$conf['metronome']['installed'] = false;
$conf['metronome']['init_script'] = 'metronome';
$conf['metronome']['initial_modules'] = 'saslauth, tls, dialback, disco, discoitems, version, uptime, time, ping, admin_adhoc, admin_telnet, bosh, posix, announce, offline, webpresence, mam, stream_management, message_carbons';

//* Prosody XMPP
$conf['prosody']['installed'] = false;
$conf['prosody']['init_script'] = 'prosody';
$conf['prosody']['storage_database'] = 'prosody';
$conf['prosody']['storage_user'] = 'prosody';
$conf['prosody']['storage_password'] = md5(uniqid(rand()));
$conf['prosody']['initial_modules'] = 'roster, saslauth, tls, dialback, disco, carbons, pep, private, blocklist, vcard, version, uptime, time, ping, admin_adhoc, mam, bosh, websocket, http_files, announce, proxy65, offline, posix, websocket, webpresence, smacks, csi_battery_saver, pep_vcard_avatar, omemo_all_access';

?>
