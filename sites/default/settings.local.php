<?php

$settings['update_free_access'] = FALSE;
$settings['file_private_path'] = DRUPAL_ROOT . '/private-files';
$settings['file_temp_path'] = DRUPAL_ROOT . '/tmp';
$settings['config_sync_directory'] = DRUPAL_ROOT . '/sync';

$settings['trusted_host_patterns'] = [
  '^aruncounselling\.com$',
  '^.+\.aruncounselling\.com$',
  '^aruncounselling\.hyperluminal\.co\.uk$',
  '^.+\.aruncounselling\.hyperluminal\.co\.uk$',
  '^aruncounselling10\.ddev\.site$',
  '^.+\.aruncounselling10\.ddev\.site$',
];
