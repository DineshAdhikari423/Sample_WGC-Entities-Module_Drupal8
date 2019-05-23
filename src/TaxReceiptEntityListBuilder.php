<?php

namespace Drupal\wgc_entities;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Tax receipt entity entities.
 *
 * @ingroup wgc_entities
 */
class TaxReceiptEntityListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Tax receipt entity ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\wgc_entities\Entity\TaxReceiptEntity */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->getOwner()->getAccountName() . ' ' . $entity->label(),
      'entity.tax_receipt_entity.edit_form',
      ['tax_receipt_entity' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
