<?php
namespace Drupal\cwd_base_bootstrap\Plugin\Setting\cwd_base_bootstrap\Cornell;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "cwd_base_bootstrap_mobile45red" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "cwd_base_bootstrap_mobile45red",
 *   weight = 7,
 *   type = "checkbox",
 *   title = @Translation("Also force the mobile 45px banner to red"),
 *   defaultValue = 0,
 *   description = @Translation("Paired with the option above, this setting will also change the 45px mobile banner to red, regardless of the base color selection."),
 *   groups = {
 *     "cwd_base_bootstrap" = "Cornell Branding",
 *   },
 *   options = {
 *     0 = @Translation("No"),
 *     1 = @Translation("Yes")
 *   },
 * )
 */

class CornellBrandForceMobile45red extends SettingBase {}
