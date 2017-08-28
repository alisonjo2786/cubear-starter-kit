<?php
namespace Drupal\cwd_base_bootstrap\Plugin\Setting\cwd_base_bootstrap\Cornell;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "cwd_base_bootstrap_color" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "cwd_base_bootstrap_color",
 *   weight = 3,
 *   type = "select",
 *   title = @Translation("Cornell Brand Color"),
 *   defaultValue = "cu-default",
 *   description = @Translation("Choose a color theme for the Cornell branding header."),
 *   groups = {
 *     "cwd_base_bootstrap" = "Cornell Branding",
 *   },
 *   options = {
 *     "cu-default" = @Translation("Default Light Gray"),
 *     "cu-red" = @Translation("Cornell Red"),
 *     "cu-black" = @Translation("Black"),
 *     "cu-gray" = @Translation("Dark Gray"),
 *   },
 * )
 */

class CornellBrandColor extends SettingBase {}
