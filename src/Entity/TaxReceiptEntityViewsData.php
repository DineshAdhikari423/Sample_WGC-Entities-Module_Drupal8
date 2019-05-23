<?php

namespace Drupal\wgc_entities\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Tax receipt entity entities.
 */
class TaxReceiptEntityViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.
    return $data;
  }

}
