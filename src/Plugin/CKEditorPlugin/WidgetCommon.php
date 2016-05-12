<?php

namespace Drupal\ck_widget\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "widgetcommon" plugin.
 *
 * NOTE: The plugin ID ('id' key) corresponds to the CKEditor plugin name.
 * It is the first argument of the CKEDITOR.plugins.add() function in the
 * plugin.js file.
 *
 * @CKEditorPlugin(
 *   id = "widgetcommon",
 *   label = @Translation("Widget Common")
 * )
 */
class WidgetCommon extends CKEditorPluginBase {


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
    //$path = drupal_get_path('module', 'ck_widget') . '/js/plugins/widgetcommon';
    $path = libraries_get_path('widgetcommon');
    return array(
      'WidgetCommon' => array(
        'label' => t('Widget Common'),
        'image' => $path . '/icons/widgetcommonBox.png',
      ),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    // Make sure that the path to the plugin.js matches the file structure of
    // the CKEditor plugin you are implementing.
    return libraries_get_path('widgetcommon') . '/plugin.js';

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
  public function getConfig(Editor $editor) {
    return array();
  }

}
