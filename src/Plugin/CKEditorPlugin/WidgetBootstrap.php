<?php

namespace Drupal\ck_widget\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "widgetbootstrap" plugin.
 *
 * NOTE: The plugin ID ('id' key) corresponds to the CKEditor plugin name.
 * It is the first argument of the CKEDITOR.plugins.add() function in the
 * plugin.js file.
 *
 * @CKEditorPlugin(
 *   id = "widgetbootstrap",
 *   label = @Translation("Widget Bootstrap")
 * )
 */
class WidgetBootstrap extends CKEditorPluginBase {


  /**
   * {@inheritdoc}
   *
   * NOTE: The keys of the returned array corresponds to the CKEditor button
   * names. They are the first argument of the editor.ui.addButton() or
   * editor.ui.addRichCombo() functions in the plugin.js file.
   */
  public function getButtons() {
    // Make sure that the path to the image matches the file structure of
    // the CKEditor plugin you are implementing.
    $path = drupal_get_path('module', 'ck_widget') . '/js/plugins/widgetbootstrap';
    return array(
      'widgetbootstrapLeftCol' => array(
        'label' => t('Left Col Widget'),
        'image' => $path . '/icons/widgetbootstrapLeftCol.png',
      ),
      'widgetbootstrapRightCol' => array(
        'label' => t('Right Col Widget'),
        'image' => $path . '/icons/widgetbootstrapRightCol.png',
      ),
      'widgetbootstrapThreeCol' => array(
        'label' => t('Three Col Widget'),
        'image' => $path . '/icons/widgetbootstrapThreeCol.png',
      ),
      'widgetbootstrapTwoCol' => array(
        'label' => t('Two Col Widget'),
        'image' => $path . '/icons/widgetbootstrapTwoCol.png',
      ),
      'widgetbootstrapAccordion' => array(
        'label' => t('Accordion Widget'),
        'image' => $path . '/icons/widgetbootstrapAccordion.png',
      ),
      'widgetbootstrapAlert' => array(
        'label' => t('Alert Widget'),
        'image' => $path . '/icons/widgetbootstrapAlert.png',
      )
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    // Make sure that the path to the plugin.js matches the file structure of
    // the CKEditor plugin you are implementing.
    return drupal_get_path('module', 'ck_widget') . '/js/plugins/widgetbootstrap/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return array(
      'widget'
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return array();
  }

}
