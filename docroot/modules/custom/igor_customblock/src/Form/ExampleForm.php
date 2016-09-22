<?php

namespace Drupal\igor_customblock\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ExampleForm.
 *
 * @package Drupal\igor_customblock\Form
 */
class ExampleForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'example_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state, $placeholder = NULL) {

    $form['name'] = [
      '#title' => $this->t('Name'),
      '#type' => 'textfield',
      '#maxlength' => 64,
      '#size' => 64,
    ];

    $form['message'] = [
      '#title' => $this->t('Message'),
      '#type' => 'textarea',
      '#rows' => 5,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

  }

}
