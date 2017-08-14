<?php
namespace Drupal\cwd_base_bootstrap\Plugin\Setting\cwd_base_bootstrap\Cornell;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "cwd_base_bootstrap_h2" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "cwd_base_bootstrap_h2",
 *   weight = 1,
 *   type = "textfield",
 *   title = @Translation("Main Unit Heading"),
 *   defaultValue = "Your Unit Name",
 *   groups = {
 *     "cwd_base_bootstrap" = "Cornell Branding",
 *   },
 * )
 */

class CornellBrandH2 extends SettingBase {}
