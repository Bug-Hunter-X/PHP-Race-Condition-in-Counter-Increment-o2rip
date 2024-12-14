This corrected code uses a mutex (or similar locking mechanism) to prevent race conditions.  The `mutex_lock` and `mutex_unlock` functions (or their equivalent in your chosen approach) ensure that only one process can access and update the `$counter` at any given time.  This guarantees atomicity and prevents the incorrect count.

```php
<?php

$counter = 0;
$mutex = fopen('mutex.lock', 'w+'); // create mutex file

function check_and_update() {
  global $counter, $mutex;
  flock($mutex, LOCK_EX); //Acquire exclusive lock
  if ($counter < 10) {
    sleep(1); // Simulate some work
    $counter++;
  }
flock($mutex, LOCK_UN); //release the lock
}

for ($i = 0; $i < 10; $i++) {
  check_and_update();
}

echo "Counter: " . $counter;
fclose($mutex);
unlink('mutex.lock'); // Remove mutex file
?>
```