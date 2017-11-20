/**
 * @file
 * JavaScript behaviors for accordion.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Initialize accordion.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.iuAccordion = {
    attach: function (context) {
      $('.paragraph--type--iu-accordion', context).once('iuAccordion').accordion();
    }
  };
})(jQuery, Drupal);
