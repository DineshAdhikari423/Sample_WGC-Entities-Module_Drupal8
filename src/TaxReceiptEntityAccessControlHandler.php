<?php

namespace Drupal\wgc_entities;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Tax receipt entity entity.
 *
 * @see \Drupal\wgc_entities\Entity\TaxReceiptEntity.
 */
class TaxReceiptEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\wgc_entities\Entity\TaxReceiptEntityInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished tax receipt entity entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published tax receipt entity entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit tax receipt entity entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete tax receipt entity entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add tax receipt entity entities');
  }

}
