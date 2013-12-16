WordPress Fragment Cache
========================

This snippet is used for caching fragments of PHP output in
WordPress.

This technique is well documented in [this post on CSS-Tricks][1].

Example
-------

In order to fragment cache a bit of output, include this function
either by pasting `fragment_cache.php` into your `functions.php`
file in your WordPress theme
or by installing as a Composer dependency.

Then wrap some PHP to cache its output.

```php
<?php fragment_cache('my_block_tag', DAY_IN_SECONDS, function() { ?>

[...]

<?php } ?>
```

Version History
---------------

+ 0.1.0
  + Initial

[1]: http://css-tricks.com/wordpress-fragment-caching-revisited/
