# Foodtrucks.pro Setup

## Database
Database dump is located in the `DB` folder.

## Configuration
If you have a different host, update the following in `../foodtrucks.pro/includes/config.php`:

```JSON
'site_url' => 'http://localhost/foodtrucks.pro/',
'style_file' => 'http://localhost/foodtrucks.pro/css/stylesheet.css',
```
Also, update the database settings if they are different:

```php
'db' => array(
    'server'   => 'localhost',
    'username' => 'root',
    'password' => '',
    'db_name'  => 'foodtrucks'
),
```
