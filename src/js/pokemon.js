(function ($, Drupal) {
  "use strict";
  Drupal.behaviors.pokemon = {
    attach: function (context, settings) {
      $('div.field--name-field-red').css('display', 'none');
      $('#blue').click(function() {
        $('div.field--name-field-red').css('display', 'none');
        $('div.field--name-field-blue').css('display', 'inherit');
      });
      $('#red').click(function() {
        $('div.field--name-field-red').css('display', 'inherit');
        $('div.field--name-field-blue').css('display', 'none');
      });
    }
  }
} (jQuery, Drupal));