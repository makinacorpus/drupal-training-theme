<?php

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter() for theme settings.
 */
function training_theme_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  // Alter form.
  $form['theme_settings']['#open'] = FALSE;
  $form['logo']['#open'] = FALSE;
  $form['favicon']['#open'] = FALSE;
  // Custom configuration.
  $form['custom'] = [
    '#type' => 'fieldset',
    '#title' => t('Custom configuration'),
  ];
  $form['custom']['site_background_color'] = [
    '#type' => 'select',
    '#title' => t('Background'),
    '#options' => [
      'red' => t('Red'),
      'blue' => t('Blue'),
      'grey' => t('Grey'),
    ],
    '#empty_option' => t('- Choose a color of the header -'),
    '#default_value' => theme_get_setting('site_background_color'),
  ];
}
