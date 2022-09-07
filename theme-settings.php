<?php

use Drupal\Core\Form\FormStateInterface;

/**
 * Implements hook_form_system_theme_settings_alter() for theme settings.
 */
function training_theme_form_system_theme_settings_alter(&$form, FormStateInterface $form_state) {
  $form['configuration'] = [
    '#type' => 'textfield',
    '#title' => t('Set your configuration'),
    '#default_value' => theme_get_setting('configuration'),
    '#description'   => t("An exemple of custom configuration."),
  ];
}
