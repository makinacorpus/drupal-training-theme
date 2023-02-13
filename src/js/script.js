(function ($, Drupal, drupalSettings, once) {

  Drupal.behaviors.myOnceBehavior = {
    attach: function (context, settings) {
      once('myOnceBehavior', 'html', context).forEach( function (element) {
        console.log('Hello world - Only at the first loading of the DOM')
      })
    }
  }

  Drupal.behaviors.myBehavior = {
    attach: function (context, settings) {
      console.log('Hello world - Each time the DOM is loaded')
    }
  }

  // See training_theme_preprocess_html() in training_theme.theme.
  Drupal.behaviors.exposeDrupalSettings = {
    attach: function (context, settings) {
      console.log(drupalSettings.vars.value)
    }
  }
} (jQuery, Drupal, drupalSettings, once));