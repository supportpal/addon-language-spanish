<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Language Name (required)
    |--------------------------------------------------------------------------
    |
    | The name of your language pack, which will be displayed in the Languages
    | list in the operator area. Can be either a plain text name or a language
    | key to work with translations.
    |
    */

    'name' => 'Spanish',

    /*
    |--------------------------------------------------------------------------
    | Language Code (required)
    |--------------------------------------------------------------------------
    |
    | The code of your language pack, confirming to BCP 47 using a ISO_639-1
    | locale code and an optional ISO_3166-1 ALPHA-2 regional identifier. For
    | example, valid identifiers are: 'en', 'es', 'en-GB', 'en-US'.
    |
    */

    'code' => 'es',

    /*
    |--------------------------------------------------------------------------
    | Language URI (optional)
    |--------------------------------------------------------------------------
    |
    | The home page of the language pack - where you may store documentation
    | or general information about the language.
    |
    */

    'uri' => '',

    /*
    |--------------------------------------------------------------------------
    | Language Version (optional)
    |--------------------------------------------------------------------------
    |
    | The current version number of the language pack, such as 1.0 or 1.0.3.
    | Note that versions are compared using version_compare() e.g. 1.02 is
    | greater than 1.1.
    |
    */

    'version' => '1.3',

    /*
    |--------------------------------------------------------------------------
    | Language Author (optional)
    |--------------------------------------------------------------------------
    |
    | The name of the language pack  author. More than one author may be
    | listed as a string.
    |
    */

    'author' => 'SupportPal Limited',

    /*
    |--------------------------------------------------------------------------
    | Language Author URI (optional)
    |--------------------------------------------------------------------------
    |
    | Optionally provide a link to the author's profile or contact page.
    |
    */

    'author_uri' => '',

    /*
    |--------------------------------------------------------------------------
    | Language Icon (optional)
    |--------------------------------------------------------------------------
    |
    | An icon for the language pack. Set the full path to an image on the file
    | system.
    |
    */

    'icon' => __DIR__ . '/Views/assets/img/icon.png',

    /*
    |--------------------------------------------------------------------------
    | Supported help desk version
    |--------------------------------------------------------------------------
    |
    | A version constraint to specify which versions of the help desk the
    | addon is compatible with. For supported constraints, see
    | https://getcomposer.org/doc/articles/versions.md
    |
    */

    'supports' => '>=5.2',

];
