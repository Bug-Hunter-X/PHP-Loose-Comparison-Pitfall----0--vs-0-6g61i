function foo(array $arr): array {
  foreach ($arr as $key => $value) {
    if ($value === '0') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 0, 'd'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => a [1] => b [3] => d )

$arr = ['a', 'b', '0', 'd'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => a [1] => b [2] => 0 [3] => d )