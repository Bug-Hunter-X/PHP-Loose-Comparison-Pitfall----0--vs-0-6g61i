function foo(array $arr): array {
  foreach ($arr as $key => $value) {
    if ($value === '0') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

function fooCorrected(array $arr): array {
  foreach ($arr as $key => $value) {
    if ($value === 0 || $value === '0') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 0, 'd', '0'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => a [1] => b [3] => d [4] => 0)

$resultCorrected = fooCorrected($arr);
print_r($resultCorrected); // Output: Array ( [0] => a [1] => b [3] => d )