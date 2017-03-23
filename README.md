WordPress Fragment Cache
========================

> Old and deprecated.

This snippet is used for caching fragments of PHP output in
WordPress. As seen on [CSS-Tricks][1].

## Example

```php
<?php fragment_cache('my_block_tag', DAY_IN_SECONDS, function() { ?>

[...]

<?php } ?>
```

## License

Apache2

[1]: http://css-tricks.com/wordpress-fragment-caching-revisited/
