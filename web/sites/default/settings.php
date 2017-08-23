<?php

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * Include the Pantheon-specific settings file.
 *
 * n.b. The settings.pantheon.php file makes some changes
 *      that affect all envrionments that this site
 *      exists in.  Always include this file, even in
 *      a local development environment, to ensure that
 *      the site settings remain consistent.
 */
include __DIR__ . "/settings.pantheon.php";

/**
 * Place the config directory outside of the Drupal root.
 */
$config_directories = array(
  CONFIG_SYNC_DIRECTORY => dirname(DRUPAL_ROOT) . '/config',
);

/**
 * Load local development override configuration, if available.
 */
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}

/**
 * Hardcode the install profile setting, to prevent the installer from
 * modifying settings.php.
 *
 * See: tests/installer-features/installer.feature
 */
$settings['install_profile'] = 'minimal';
$databases['default']['default'] = array (
  'database' => 'vanilla3',
  'username' => 'vanilla3',
  'password' => 'pass',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'U1VlmFjmRXdo_xXqaSZdygTUjKMWSrIgNfyETeJWruUzU552zw_TNkwNXcpdLORwhkSMAOgr4Q';
