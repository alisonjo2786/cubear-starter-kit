# Drupal 8.4.0-alpha1 + Composer

This project is a Drupal 8 codebase based on [drupal-composer/drupal-scaffold](https://github.com/drupal-composer/drupal-scaffold), plus the changes I had to make to be able to upgrade to the 4.x branch of Drupal 8 -- a process that wasn't *super* easy, b/c of some gaps in my knowledge, and oh btw the 4.x branch relies on a newer major version of Symfony :D  FWIW, this d.o thread was extremely helpful for me: https://www.drupal.org/node/2874827(Drush 8.x doesn't install Drupal 8.4.x and Drush master doesn't install Drupal 8.3.x)

## What's inside

* `drupal-composer/drupal-project`
* upgraded Drupal core to 8.4.0-alpha1
  * which included changes to composer.json from the regular drupal-composer/drupal-project
    * ps this was somewhat of a nightmare -- apparently 8.4.0 requires a newer major version of symfony, and that caused all sorts of pain...
    * this thread was one of my main resources: https://www.drupal.org/node/2874827 
* added some of the pantheon files from [pantheon-systems/example-drops-8-composer](https://github.com/pantheon-systems/example-drops-8-composer)
* added all config from our working demo site (omitted link)

## Vanilla-er

The `vvanilla` branch is a much plainer codebase -- no config or Pantheon files -- see my [commit #7d4a62e message](https://github.com/alisonjo2786/vanilla2/commit/7d4a62eae45696da1c370aabaa90115fb28748c7) for more info.

# See also

Refer to the [drupal-composer/drupal-scaffold](https://github.com/drupal-composer/drupal-scaffold) README for more info about that project template, and how to use it (and therefore how to use this project).
