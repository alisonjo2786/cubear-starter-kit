<?php
namespace Drupal\cwd_base_bootstrap\Plugin\Setting\cwd_base_bootstrap\Cornell;

use Drupal\bootstrap\Annotation\BootstrapSetting;
use Drupal\bootstrap\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "cwd_base_bootstrap_cusealright" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "cwd_base_bootstrap_cusealright",
 *   weight = 5,
 *   type = "checkbox",
 *   title = @Translation("Cornell seal aligned right"),
 *   defaultValue = 0,
 *   description = @Translation("For use with the standalone seal only, this option swaps the position of the seal and headings (desktop only)."),
 *   groups = {
 *     "cwd_base_bootstrap" = "Cornell Branding",
 *   },
 *   options = {
 *     0 = @Translation("No"),
 *     1 = @Translation("Yes")
 *   },
 * )
 */

class CornellBrandSealRight extends SettingBase {}
