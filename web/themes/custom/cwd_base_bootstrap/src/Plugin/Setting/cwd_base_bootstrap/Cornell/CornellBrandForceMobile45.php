<?php
namespace Drupal\cwd_base_bootstrap\Plugin\Setting\cwd_base_bootstrap\Cornell;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "cwd_base_bootstrap_mobile45" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "cwd_base_bootstrap_mobile45",
 *   weight = 6,
 *   type = "checkbox",
 *   title = @Translation("Force 45px banner at mobile size"),
 *   defaultValue = 0,
 *   description = @Translation("This option overrides the Logo selection above at mobile screen size, allowing for the combination of large Cornell logo on desktops and compact 45px banner for mobile."),
 *   groups = {
 *     "cwd_base_bootstrap" = "Cornell Branding",
 *   },
 *   options = {
 *     0 = @Translation("No"),
 *     1 = @Translation("Yes")
 *   },
 * )
 */

class CornellBrandForceMobile45 extends SettingBase {}
