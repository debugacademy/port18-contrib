<?php

namespace Drupal\demo_page;

use Drupal\Core\Controller\ControllerBase;

class DemoPageController extends ControllerBase {

  /**
   * Returns a render-able array for a test page.
   */
  public function render() {
    return [
      '#markup' => '<p>Embed a component by updating the twig file preview.html.twig</p>',
      '#theme' => 'preview'
    ];
  }
}
