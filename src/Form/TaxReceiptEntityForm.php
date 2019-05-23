<?php

namespace Drupal\wgc_entities\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Tax receipt entity edit forms.
 *
 * @ingroup wgc_entities
 */
class TaxReceiptEntityForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\wgc_entities\Entity\TaxReceiptEntity */
    $form = parent::buildForm($form, $form_state);

    $entity = $this->entity;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = $this->entity;

    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Tax receipt entity.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Tax receipt entity.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.tax_receipt_entity.canonical', ['tax_receipt_entity' => $entity->id()]);
  }

}
