<?php
namespace Drupal\cwd_base_bootstrap\Plugin\Setting\cwd_base_bootstrap\Cornell;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "cwd_base_bootstrap_h3" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "cwd_base_bootstrap_h3",
 *   weight = 2,
 *   type = "textfield",
 *   title = @Translation("Optional Subheading"),
 *   defaultValue = "Edit These Headings in Theme Settings",
 *   groups = {
 *     "cwd_base_bootstrap" = "Cornell Branding",
 *   },
 * )
 */

class CornellBrandH3 extends SettingBase {}
