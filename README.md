# Games

Website displaying a video games database created with Symfony and React.

## Installation

```bash
git clone https://github.com/InFinity54/games
cd games
composer install
```

## Startup

```bash
cd games
symfony server:start --no-tls
```

## Publish

```bash
git clone https://github.com/InFinity54/games
cd games
composer install --no-dev --optimize-autoloader
```
To publish the website, you will need to edit the _.env_ file and set the _APP_ENV_ value to _prod_. Send all files (except the _var_ folder) to your web server (with FTP, for example), and set your domain to check in the _public_ subfolder.

## Common errors
### Unrecognized options "dir_name, namespace" under "doctrine_migrations"

Complete message :
```html
Unrecognized options "dir_name, namespace" under "doctrine_migrations". Available options are "all_or_nothing", "check_database_platform", "connection", "custom_template", "em", "migrations", "migrations_paths", "name", "organize_migrations", "services", "storage"
```

To fix it :
```bash
composer recipes:install --force -v
composer install
```

### The local web server is already running

To fix it :
```bash
symfony local:server:stop
```