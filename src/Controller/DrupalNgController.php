<?php

/**
 * @file
 * Contains \Drupal\drupal_ng\Controller\BscModelController.
 */

namespace Drupal\drupal_ng\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller for js_example pages.
 *
 * @ingroup js_example
 */
class DrupalNgController extends ControllerBase {

  /**
   * Accordion page implementation.
   *
   * We're allowing a twig template to define our content in this case,
   * which isn't normally how things work, but it's easier to demonstrate
   * the JavaScript this way.
   *
   * @return array
   *   A renderable array.
   */
  public function viewDrupalNg() {
    $title = t('Hello!');
    $build['myelement'] = array(
      '#theme' => 'drupal_ng_view',
      '#title' => $title,
    );
    $build['myelement']['#attached']['library'][] = 'drupal_ng/angularjs';
    $build['myelement']['#attached']['library'][] = 'bsc_model/model';
    // Return the renderable array.
    return $build;
  }

}
