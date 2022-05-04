<?php

namespace Drupal\port_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a socialmedia block.
 *
 * @Block(
 *   id = "port_core_socialmedia",
 *   admin_label = @Translation("socialmedia"),
 *   category = @Translation("Custom")
 * )
 */
class SocialmediaBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['content'] = [
      '#theme' => 'socialmedia',
    ];
    return $build;
  }

}
