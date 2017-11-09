<?php
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Theme\ThemeSettings;
use Drupal\system\Form\ThemeSettingsForm;
use Drupal\Core\Form;

function quatro_form_system_theme_settings_alter(&$form, Drupal\Core\Form\FormStateInterface $form_state) {
  $form['st_settings'] = array(
        '#type' => 'fieldset',
        '#title' => t('Quatro Theme Settings'),
        '#collapsible' => true,
        '#collapsed' => true,
    );

   
  // Color
  $form['st_settings']['tabs']['them_color_config'] = array(
    '#type' => 'fieldset',
    '#title' => t('Color setting'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  
  $form['st_settings']['tabs']['them_color_config']['theme_color'] = array(
    '#type' => 'select',
    '#title' => t('Color'),
    '#default_value' => theme_get_setting('theme_color'),
    '#options'  => array(
        'red'              => t('Red - Default'),
        'blue'             => t('Blue'),
        'green'           => t('Green'),
        'orange'           => t('Orange'),
        'pink'           => t('Pink'),
        'purple'           => t('Purple'),
        'yellow'           => t('Yellow'),
        'dark'             => t('Dark')
    ),
  );
  
}

