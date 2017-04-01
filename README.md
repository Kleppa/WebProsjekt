# WebProsjekt

## Dependencies
#### Composer

>composer require "illuminate/database"

#### php.ini

Enable the following extensions:
>php_mbstring.dll

>php_openssl.dll

>php_pdo_mysql.dll

*Windows: May need to change the path to the ext directory `extension_dir =` or prepend ext/ to the extensions like so: `ext/extension`.*

## Setup

#### Database initializing script

run the sql script `src/dbscript.sql`
