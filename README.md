# WebProsjekt

## Dependencies
#### Composer
`composer init` in the root project folder (not `src/`)

This project requires the Carbon library for date handling.

>composer require "nesbot/carbon"

## Setup

#### php.ini

Enable the following extensions:
>php_mbstring.dll

>php_openssl.dll

>php_pdo_mysqli.dll

*Windows: May need to change the path to the ext directory `extension_dir =` or prepend ext/ to the extensions like so: `ext/extension`.*
