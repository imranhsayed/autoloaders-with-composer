## Autoloading with Composer

✅ Demo for autoloading with composer.

[Useful blog on this](https://medium.com/tech-tajawal/php-composer-the-autoloader-d676a2f103aa)

## Steps taken

✅ 1. Create two classes `A.php` and `B.php` in classes directory.

✅ 2. Create a `composer.json` file in the root of your project and add the below code for autoloading.

```ruby
    {
      "autoload": {
        "classmap": [
          "classes/"
        ]
      }
    }
```

> Using `classmap`, above we are telling composer that this is the way to do mapping, and it is a very basic way to map namespaces to paths.

✅ 3. Now when we run the command `composer install` in the root of our project, it will replace our spl_autoload_register function in the `autoload.php` with its own code and also
create the below files automatically in the composer directory.  

```ruby
└── vendor
    ├── autoload.php
    └── composer
        ├── ClassLoader.php
        ├── LICENSE
        ├── autoload_classmap.php
        ├── autoload_namespaces.php
        ├── autoload_psr4.php
        ├── autoload_real.php
        ├── autoload_static.php
        └── installed.json
```

✅ 4. Require this `autoload.php` file in `index.php` and instantiate the `class A`.

```ruby
require __DIR__ . '/vendor/autoload.php';
/**
 * Load A class
 * By using spl autoload register,
 * PHP is telling you “I will give you the chance to go and load your class even if you didn’t load it before your statement $a = new A();
 * after that, I will throw an error if it didn’t work”.
 */
$a = new A();
```


        
✅ 5.It will now load all of this files automatically and the class that is instantiated . So if we run in index.php, we get

```ruby
// check the list of all loaded files
echo '<pre>';
print_r( get_included_files() );
```

```ruby
Array
(
    [0] => /Applications/MAMP/htdocs/autoloaders-with-composer/index.php
    [1] => /Applications/MAMP/htdocs/autoloaders-with-composer/vendor/autoload.php
    [2] => /Applications/MAMP/htdocs/autoloaders-with-composer/vendor/composer/autoload_real.php
    [3] => /Applications/MAMP/htdocs/autoloaders-with-composer/vendor/composer/ClassLoader.php
    [4] => /Applications/MAMP/htdocs/autoloaders-with-composer/vendor/composer/autoload_static.php
    [5] => /Applications/MAMP/htdocs/autoloaders-with-composer/classes/A.php
)
``` 
