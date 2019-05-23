CONTENTS OF THIS FILE
---------------------

* Introduction
* Requirements
* Installation
* Configuration


INTRODUCTION
------------

The WGC Entities module is a custom module to create custom entities as below

* Tax Receipt Entity

The modules provide CRUD operations over custom entites.

REQUIREMENTS
------------
Drupal standard profile

INSTALLING DRUPAL
------------
Make sure the Drupal 8 is installed in your system, if not than please follow below links.

    * Drupal 8 installation :  You need a web server with a database and PHP. The server could be your personal computer, or at an online web host. You can use of any version of PHP above 7.x
        * Step 1: Get the Code => Download https://www.drupal.org/download-latest/tar.gz from and just copy these files into your apache base folder (www / htdocs)
        * Step 2: Install dependencies with composer => If you installed or updated the codebase using git, then install required PHP libraries with composer.
        * Step 3: Create a database => Create a database for Drupal to use.
        * Step 4: Configure your installation => Set up the web server and PHP to work together.
        * Step 5: Run the installer => Run the installation script.
        * Step 6: Status check => Check the status of your site at Administration > Reports > Status report. 
    * Now copy "wgc_entities" folder in /modules/ folder
    * Check Home > Administration > Extend (/admin/modules)
    * You will be able to see our module Custom Entities  Under wgc
    * Just Enable it and save the page
    OR
    *  Activate the module through with drush.
        drush en wgc_entities

CONFIGURATION
-------------

The custom entities can be configured in the specific settings page under `admin/structure/tax_receipt_entity/settings`.


