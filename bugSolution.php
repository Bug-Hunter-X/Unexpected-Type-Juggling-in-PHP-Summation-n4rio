```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) { // Explicit type checking
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately, e.g., throw an exception or skip
      trigger_error('Non-numeric value encountered in array', E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; // Output will now be more predictable
```