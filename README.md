# Drupal 8.4.x + Composer

This project is a Drupal 8 codebase based on [drupal-composer/drupal-project](https://github.com/drupal-composer/drupal-project), [pantheon-systems/example-drops-8-composer](https://github.com/pantheon-systems/example-drops-8-composer), plus the changes I had to make to be able to upgrade to the 4.x branch of Drupal 8 -- a process that wasn't *super* easy, b/c of some gaps in my knowledge, and oh btw the 4.x branch relies on a newer major version of Symfony :D  FWIW, this d.o thread was extremely helpful for me: https://www.drupal.org/node/2874827 (Drush 8.x doesn't install Drupal 8.4.x and Drush master doesn't install Drupal 8.3.x)

## What's inside

* `drupal-composer/drupal-project`
* upgraded Drupal core to 8.4.0-beta1
  * which included changes to composer.json from the regular drupal-composer/drupal-project
    * ps this was somewhat of a nightmare -- apparently 8.4.0 requires a newer major version of symfony, and that caused all sorts of pain...
    * this thread was one of my main resources: https://www.drupal.org/node/2874827
* added some of the pantheon files from [pantheon-systems/example-drops-8-composer](https://github.com/pantheon-systems/example-drops-8-composer)
* added all config from our working demo site (omitted link)
  * (if you work with me, ping me and I'll give you the site UUID for importing the config)

### Usage
**NOTE:** For best results, make sure your Drush version is updated to the latest stable version, Drush 8.1.12.

1. `git clone git@github.com:CU-CommunityApps/cubear-starter-kit.git ajm-cubear-vanilla`
1. `cd ajm-cubear-vanilla`
1. `composer install`
1. Then install drupal using the *config_installer* install profile (via UI, or `drush`).
1. *maybe removing these steps; futher testing needed...*
    1. Then back in your terminal...
    1. `cd web`
    1. `drush cget system.site uuid`
        * Record this value so you can go back to it later.
    1. `drush cset system.site uuid qwerty-the-uuid-you-got-from-me-see-above`
    1. `drush cim`
    1. `drush entity-updates`
        * Most likely you'll see "The node.body field needs to be updated." (say `y`)
    1. `drush cr`
    1. Check your new site a litte bit, then...
    1. `drush cset system.site uuid asdfgh-the-original-uuid-you-recorded-earlier`
    1. `drush cr`
    1. Then, either delete all the config files in `config/` (because now you can just move forward with whatever), OR, update `config/system.site.yml`:
        1. In your browser, go to:<br />
        admin/config/development/configuration/single/export
        1. Select "Simple configuration" > "system.site"
        1. Replace the contents of config/system.site.yml with the contents of "Here is your configuration"
1. *end of "maybe removing"*

**That's it! :)**  Enjoy your new Drupal 8.4.x + composer site!

### For a Pantheon site
The instructions are similar, but not optimally elegant *yet*.

[will add these tomorrow -- but it's basically, create an empty pantheon site, clone the repo down, completely replace the code with the code from THIS repo, run composer install, update .gitignore so you can commit all those composer-generated artifacts to the repo, push back to pantheon, and then proceed with the process above -- using terminus drush commands, and skipping the "cd" commands of course]
[and also, do the redis thing -- configure redis https://pantheon.io/docs/redis/ -- @todo: prevent redis from being enabled]

## Vanilla-er

The `vvanilla` branch is a much plainer codebase -- no config or Pantheon files -- see my [commit #7d4a62e message](https://github.com/CU-CommunityApps/cubear-starter-kit/commit/1de45592d7780a2aa0fe16943078b4771ec73c25) for more info.

## See also

Refer to the [drupal-composer/drupal-scaffold](https://github.com/drupal-composer/drupal-scaffold) README for more info about that project template, and how to use it (and therefore how to use this project).

Refer to the [pantheon-systems/terminus-build-tools-plugin](https://github.com/pantheon-systems/terminus-build-tools-plugin) README for more info about using `terminus build:project:create` (below) and other `build` funtionality.

## Pantheon + GH + CircleCI instructions
1. Prerequisites: Terminus (1.x) and `terminus-build-tools-plugin` -- need to use 2.x branch (as of 2017-08-22 there's a 2.0.0-alpha2 tag).
1. Heads-ups:
    1. **IMPORTANT:** When you're done, do **NOT** make changes/commits to your new site codebase from the GH interface -- there's a .gitignore thing from the Pantheon template, that's totally on-purpose, but it means that files will be lost if you commit in GH, so we might need to undo that, idk yet.<br />
    _(and, during the build process itself...)_
    1. You'll be prompted for GitHub and CircleCI personal access tokens, but the prompts have documentation links, so just follow those as you go along.
        1. Alternatively, you can set your tokens ahead of time like this:
    https://github.com/pantheon-systems/terminus-build-tools-plugin/tree/2.0.0-alpha2#credentials
    1. You'll also be prompted for a password for "user 1" on the new site you're about to create; personally, I leave it blank and use `drush user-login` after installation, i.e.<br />
    `terminus drush ajm-cubear-vanilla.dev -- uli`
        1. "user 1" username will be "admin."
    1. **IMPORTANT:** While most of the build takes care of itself, toward the end you'll get two "authenticity of host can't be established" prompts -- make sure you type "yes"!!
1. Create or edit ~/.terminus/config.yml (in your local env), to add a "starter site shortcut" [like these examples](https://github.com/pantheon-systems/terminus-build-tools-plugin/tree/2.0.0-alpha2#starter-site-shortcuts).
    1. Mine contains the following:<br />
    ```
    command:
      build:
        project:
          create:
            shortcuts:
              cubear-starter-kit: cubear/drupal-8-starter-kit:dev-master
    ```
1. Then, run `terminus build:project:create` with the applicable options -- my command looks like this:<br />
`terminus build:project:create --team="cornell-university-cornell-information-technologies" cubear-starter-kit ajm-cubear-vanilla`
1. Now, clone the repo FROM github to your local, do work locally, and push changes back up to github -- that will trigger CircleCI builds, and eventual merging of changes into "dev" on Pantheon.
    1. OR, better, yet, create a new branch locally and use a Pull Request workflow :)
1. Optionally, update the README in your new site repo with the CircleCI badge, so that it's easier to get from your repo to that project's CircleCI things (for some reason the badge isn't getting automatically added right now).  You can get the "status badge" embed code by going to your project on CircleCI ([example](https://circleci.com/gh/alisonjo2786/ajm-cubear-vanilla)) > settings gear at top-right > "status badge" in left sidebar menu.
