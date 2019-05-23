<?php

/**
 * @file
 * Contains tax_receipt_entity.page.inc.
 *
 * Page callback for Tax receipt entity entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Tax receipt entity templates.
 *
 * Default template: tax_receipt_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_tax_receipt_entity(array &$variables) {
  // Fetch TaxReceiptEntity Entity Object.
  $tax_receipt_entity = $variables['elements']['#tax_receipt_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
