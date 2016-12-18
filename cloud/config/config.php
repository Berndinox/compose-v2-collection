<?php
$CONFIG = array (
  'datadirectory' => '/data',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/nextcloud/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/apps2',
      'url' => '/apps2',
      'writable' => true,
    ),
  ),
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => '/tmp/redis.sock',
    'port' => 0,
    'timeout' => 0.0,
  ),
  'instanceid' => 'ocadc83b19e7',
  'passwordsalt' => 'AQZPdncG4FYhULMMqBwHUV1IwJNj/K',
  'secret' => 'n8K6meykDujHSmPPnGGMCoxLFTOjF3M7vzYj7u8dKQjkkkYj',
  'trusted_domains' => 
  array (
    0 => 'cloud.berndklaus.at',
  ),
  'overwrite.cli.url' => 'https://cloud.berndklaus.at',
  'dbtype' => 'mysql',
  'version' => '11.0.0.10',
  'dbname' => 'nextcloud',
  'dbhost' => 'nc-mysql',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mail_smtpmode' => 'smtp',
  'mail_from_address' => 'cloud',
  'logtimezone' => 'UTC',
  'mail_domain' => 'berndklaus.at',
  'logdateformat' => 'Y-m-d H:i:s',
  'dbuser' => 'nextcloud',
  'dbpassword' => '${PASSWORD}',
  'installed' => true,
  'mail_smtpsecure' => 'ssl',
  'mail_smtpauthtype' => 'LOGIN',
  'mail_smtpauth' => 1,
  'mail_smtphost' => 'mail.berndklaus.at',
  'mail_smtpport' => '465',
  'mail_smtpname' => 'admin@berndklaus.at',
  'mail_smtppassword' => '${PASSWORD}',
  'objectstore' => 
  array (
    'class' => 'OC\\Files\\ObjectStore\\Swift',
    'arguments' => 
    array (
      'username' => 'zc99fbUqtumW',
      'password' => '${OVH_PASSWORD}',
      'container' => 'nextcloud',
      'autocreate' => true,
      'region' => 'GRA1',
      'url' => 'https://auth.cloud.ovh.net/v2.0',
      'tenantName' => '4057108283929314',
      'serviceName' => 'swift',
    ),
  ),
  'loglevel' => 3,
  'maintenance' => false,
);
