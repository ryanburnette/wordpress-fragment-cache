<?php
function fragment_cache($key, $ttl, $function) {
  $key = apply_filters('fragment_cache_prefix','fragment_cache_').$key;
  $output = get_transient($key);
  if ( false === $output ) {
    ob_start();
    call_user_func($function);
    $output = ob_get_clean();
    set_transient($key, $output, $ttl);
  }
  echo $output;
}
?>
