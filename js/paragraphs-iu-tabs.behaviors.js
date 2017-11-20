/**
 * @file
 * JavaScript behaviors for tabs.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Initialize Tabs.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.iuTabs = {
    attach: function (context) {
      $('.paragraph--type--iu-tabs', context).once('iuTabs').tabs();
    }
  };
})(jQuery, Drupal);
