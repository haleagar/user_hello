<?php
/**
 * @file
 * Contains \Drupal\user_hello\Controller\HelloAdminController.
 */
namespace Drupal\user_hello\Controller;
class HelloAdminController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Admin Page TBD'),
    );
  }
}
