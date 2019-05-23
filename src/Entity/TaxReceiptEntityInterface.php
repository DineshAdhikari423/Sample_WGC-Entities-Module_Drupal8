<?php

namespace Drupal\wgc_entities\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Tax receipt entity entities.
 *
 * @ingroup wgc_entities
 */
interface TaxReceiptEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  /**
   * Gets the Tax receipt entity name.
   *
   * @return string
   *   Name of the Tax receipt entity.
   */
  public function getName();

  /**
   * Sets the Tax receipt entity name.
   *
   * @param string $name
   *   The Tax receipt entity name.
   *
   * @return \Drupal\wgc_entities\Entity\TaxReceiptEntityInterface
   *   The called Tax receipt entity entity.
   */
  public function setName($name);

  /**
   * Gets the Tax receipt entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Tax receipt entity.
   */
  public function getCreatedTime();

  /**
   * Sets the Tax receipt entity creation timestamp.
   *
   * @param int $timestamp
   *   The Tax receipt entity creation timestamp.
   *
   * @return \Drupal\wgc_entities\Entity\TaxReceiptEntityInterface
   *   The called Tax receipt entity entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Tax receipt entity published status indicator.
   *
   * Unpublished Tax receipt entity are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Tax receipt entity is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Tax receipt entity.
   *
   * @param bool $published
   *   TRUE to set this Tax receipt entity to published,
   *     FALSE to set it to unpublished.
   *
   * @return \Drupal\wgc_entities\Entity\TaxReceiptEntityInterface
   *   The called Tax receipt entity entity.
   */
  public function setPublished($published);

}
