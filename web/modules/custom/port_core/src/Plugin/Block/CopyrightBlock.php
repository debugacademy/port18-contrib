<?php

namespace Drupal\port_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a copyright block.
 *
 * @Block(
 *   id = "port_core_copyright",
 *   admin_label = @Translation("Copyright"),
 *   category = @Translation("Custom")
 * )
 */
class CopyrightBlock extends BlockBase
{

  /**
   * {@inheritdoc}
   */
  public function build()
  {
    $build['content'] = [
      '#theme' => 'copyright',
      '#year' => date("Y"),
    ];
    return $build;
  }
}
