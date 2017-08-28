<?php
namespace Drupal\cwd_base_bootstrap\Plugin\Setting\cwd_base_bootstrap\Cornell;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "cwd_base_bootstrap_culogo" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "cwd_base_bootstrap_culogo",
 *   weight = 4,
 *   type = "select",
 *   title = @Translation("Cornell Logo Size and Style"),
 *   defaultValue = "cu-45",
 *   description = @Translation("Select between 45px banner and large standalone seal (standalone lockup and college lockups NYI)"),
 *   groups = {
 *     "cwd_base_bootstrap" = "Cornell Branding",
 *   },
 *   options = {
 *     "cu-45" = @Translation("45px Banner"),
 *     "cu-seal" = @Translation("Standalone Cornell Seal"),
 *     "cu-lockup" = @Translation("Cornell Lockup (NYI)"),
 *     "unit-lockup" = @Translation("Unit Lockup (NYI)"),
 *   },
 * )
 */

class CornellBrandLogo extends SettingBase {}
