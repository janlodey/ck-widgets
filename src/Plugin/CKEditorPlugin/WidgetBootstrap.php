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
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    // Make sure that the path to the plugin.js matches the file structure of
    // the CKEditor plugin you are implementing.
    //return drupal_get_path('module', 'ck_widget') . '/js/plugins/widgetbootstrap/plugin.js';
    return libraries_get_path('widgetbootstrap') . '/plugin.js';
  }


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
    $path = libraries_get_path('widgetbootstrap');
    return [
      'widgetbootstrapLeftCol' => [
        'label' => t('Left Col Widget'),
        'image' => $path . '/icons/widgetbootstrapLeftCol.png',
      ],
      'widgetbootstrapRightCol' => [
        'label' => t('Right Col Widget'),
        'image' => $path . '/icons/widgetbootstrapRightCol.png',
      ],
      'widgetbootstrapThreeCol' => [
        'label' => t('Three Col Widget'),
        'image' => $path . '/icons/widgetbootstrapThreeCol.png',
      ],
      'widgetbootstrapTwoCol' => [
        'label' => t('Two Col Widget'),
        'image' => $path . '/icons/widgetbootstrapTwoCol.png',
      ],
      'widgetbootstrapAccordion' => [
        'label' => t('Accordion Widget'),
        'image' => $path . '/icons/widgetbootstrapAccordion.png',
      ],
      'widgetbootstrapAlert' => [
        'label' => t('Alert Widget'),
        'image' => $path . '/icons/widgetbootstrapAlert.png',
      ]
    ];
  }


  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

}
