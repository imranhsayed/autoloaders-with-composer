## Autoloading with Composer

> Demo for autoloading with composer.

[Useful blog on this](https://medium.com/tech-tajawal/php-composer-the-autoloader-d676a2f103aa)


## Concept

Using `classmap`, we are telling composer that this is the way to do mapping, and it is a very basic way to map namespaces to paths.

```ruby
{
  "autoload": {
	"classmap": [
	  "classes/"
	]
  }
}
```
