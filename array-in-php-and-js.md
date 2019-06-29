# আসুন অ্যারে সম্পর্কে জানি, একইসাথে পিএইচপি এবং জাভাস্ক্রিপ্টেঃ

## Table of content :
- [অ্যারে প্রকারভেদ](#)
- [অ্যারে এর ভিতর কয়টা এলিমেন্ট আছে তা জানার জন্য](#অ্যারে-এর-ভিতর-কয়টা-এলিমেন্ট-আছে-তা-জানার-জন্যঃ)
- [অ্যারে থেকে স্ট্রিং - স্ট্রিং থেকে অ্যার](#explode-implode-join-এর-ব্যাবহারঃ-অ্যারে-থেকে-স্ট্রিং---স্ট্রিং-থেকে-অ্যারে)
- [Array কে string রুপে রেখে দিয়ে পরবর্তীতে অন্য কোথাও ব্যাবহার করতে](#array-কে-string-রুপে-রেখে-দিয়ে-পরবর্তীতে-অন্য-কোথাও-ব্যাবহার-করতে-দুইটা-পদ্ধতি-আছেঃ)
- [Deep copy এবং Shallow copy](#deep-copy-এবং-shallow-copy-কি-জিনিস)
- [Associative অ্যারে থেকে key ধরে তার value সব ডিলিট করে দিত](#associative-অ্যারে-থেকে-key-ধরে-তার-value-সব-ডিলিট-করে-দিতে-চাইলেঃ)

## অ্যারে প্রকারভেদঃ

In PHP, there are three types of arrays :
- Indexed arrays : Arrays with a numeric index.
- Associative arrays : Arrays with named keys. (যে অ্যারেরে key এবং value থাকে)
- Multidimensional arrays / Nested array : Arrays containing one or more arrays. (একটা অ্যারে এর ভিতর এক বা একাধিক অ্যারে)

JavaScript does not support associative arrays. এক্ষেত্রে আমরা object কে ব্যাবহার করতে পারি। আর object ব্যাবহারের ক্ষেত্রে শুধুমাত্র [] হলেই চলবে। অর্থাৎ new কিওয়ার্ডের দরকার নেই। যেমনঃ

```javascript
var points = new Array(); // Bad practice
```
```javascript
var points = []; // Good practice
```

এখন এই অ্যারেগুলো ম্যানুপুলেট করার জন্য মজার মজার কিছু ফাংশান / মেথড আছে। চলুন এদের সম্পর্কে জানি। এরা array helper নামেও বেশ পরিচিত।

## অ্যারে এর ভিতর কয়টা এলিমেন্ট আছে তা জানার জন্যঃ

<table>
<tr>
<th>পিএইচপিতে</th>
<th>জাভাস্ক্রিপ্টে</th>
</tr>
<tr>

<td>

```php
count( $array );
/* এই ফাংশনটি সেকেন্ড প্যারামিটার হিসেবে COUNT_RECURSIVE কন্সট্যান্ট এ্যাক্সেপ্ট করে।
যার কাজ হচ্ছে মাল্টিডায়মেশনাল অ্যারে থেকে key এবং value সকল কিছু সে গননা রাখবে */
echo count($array, COUNT_RECURSIVE);
```
</td>

<td>

```javascript
array.length
```
</td>

</tr>
</table>

## explode, implode, join এর ব্যাবহারঃ (অ্যারে থেকে স্ট্রিং - স্ট্রিং থেকে অ্যারে)

<table>
<tr>
<th>পিএইচপিতে</th>
<th>জাভাস্ক্রিপ্টে</th>
</tr>
<tr>

<td>

```php
$serial = [1, 2, 3, 4, 5];
$serial_str = implode(', ', $serial);
/* এই ', ' অংশটাকে বলা হয় delimiter
implode এর পরিবর্তে join ব্যাবহার করা যেতে পারে */
$serial_str = join(', ', $serial);
// join এর ক্ষেত্রে এই ', ' অংশটাকে বলা যায় glue
var_dump($serial_str);

$serial_int = explode(', ', $serial_str);
var_dump($serial_int);

$serial_two = [a, b,c, d, e];
/* লক্ষ করুন b এর পরে c এর আগে স্পেস নেই
এ ক্ষেত্রে আমরা preg_split ফাংশানে regex 
বা regular expression ব্যাবহার করতে পারি */
preg_split('/(, |,)/', a, b,c, d, e);
/* এখানে "কমা" এর সাথে স্পেস অথবা শুধু "কমা" দুইটাকেই 
গ্রহন করে স্ট্রিং থেকে অ্যারেতে কনভার্ট করতে বলা হয়েছে */
```
</td>

<td>

```javascript
var fruits = ["Banana", "Orange", "Apple", "Mango"];
var fruitsStr = fruits.join(' ');
console.log(fruitsStr);

var fruitsArr = fruitsStr.split(" ");
console.log(fruitsArr);
```
</td>

</tr>
</table>

## Associative array তে আলাদাভাবে key এবং value পাওয়ার জন্যঃ

| পিএইচপি তে | জাভাস্ক্রিপ্টে |
| --- | --- |
array_keys() এবং array_values() <br/><br/> এছাড়াও foreach ব্যাবহার করা যায়। foreach হচ্ছে একটা iterator <br/> foreach ( $array as $key => $value ) {...} | var serial = { "one" : 1, "two" : 2, "three": 3 }; <br/> var keys = Object.keys(serial); <br/> var values = Object.values(serial); <br/> console.log(keys); <br/> console.log(values); <br/><br/> *আর iterator ব্যাবহার করতে চাইলেঃ* <br/> var serial = { "one" : 1, "two" : 2, "three": 3 }; <br/> var keys = []; <br/> for (var key in serial) { <br/> keys.push(key); <br/> } <br/> console.log(keys);

> পিএইচপিতে যে কোন string কে খুব সহজে array হিসেবে treat করা যায় যেমনঃ $array[0]=='s'

## Array কে string রুপে রেখে দিয়ে পরবর্তীতে অন্য কোথাও ব্যাবহার করতে দুইটা পদ্ধতি আছেঃ

<table>
<tr>
<th>পিএইচপিতে</th>
<th>জাভাস্ক্রিপ্টে</th>
</tr>
<tr>

<td>

```php
serialize( $array ) 
/* আনসিরিয়ালাইজ করতে চাইলে unserialize( $array )
অথবা
json_encode( $array )
ডিকোড করতে চাইলে json_decode( $array ) 
উল্লেখ্য ডিকোডের ক্ষেত্রে পিএইচপি যখন ডিকোড করে 
তখন সেটা Object এ Convert করে ফেলে।
তো আমরা যদি Array হিসেবেই রুপান্তর করতে চাই 
তাহলে সেকেন্ড প্যারামিটার হিসেবে true পাস করে দিতে হবে এইভাবেঃ 
json_decode( $array, true ) */
```
</td>

<td>

```javascript
JSON.parse()
```
</td>

</tr>
</table>

## Deep copy এবং Shallow copy কি জিনিস?
> Deep copy মানে Copy by value যেমনঃ $array = $newarray

> আর Shallow copy মানে Copy by reference যেমনঃ $array = &$newarray

## Associative অ্যারে থেকে key ধরে তার value সব ডিলিট করে দিতে চাইলেঃ
| পিএইচপি তে | জাভাস্ক্রিপ্টে |
| --- | --- |
unset( $array['keyname'] ) | পরে লিখব

## array_slice() এবং array_splice()
| পিএইচপি তে | জাভাস্ক্রিপ্টে |
| --- | --- |
array_slice() মূল অ্যারেকে পরিবর্তন করেনা <br> array_splice() মূল অ্যারে পরিবর্তন করে ফেলে এবং ইচ্ছা করলে ঐ Delete করা Value এর জায়গায় নতুন Value যোগ করা যায়। | Later..

## একটা অ্যারের সাথে আরেকটা অ্যারে যোগ করার বিভিন্ন উপায়
## অ্যারে সর্টিং
## অ্যারে সার্চ

## অ্যারে Difference এবং অ্যারে Intersection
array_intersect() // যেগুলো মিলেছে সেগুলো সে তুলে আনবে
array_diff() // যেগুলা মিলেনি সেগুলা তুলে আনবে

## array_walk() , array_map() , array_filter() , array_reduce()
> এই চারটা ফাংশান একসাথে রাখা হয়েছে কারন মিল রয়েছে বুঝতে সুবিধা হবে - <br>
array_walk প্রতিটা এলিমেন্টের উপর কাজ চালায়। কিন্তু এটা শুধু echo বা print করার ক্ষেত্রে <br>
array_map অ্যারে ওয়াকের মতই কাজ করে কিন্তু return করার ক্ষেত্রে <br>
array_filter অ্যারে মেপের মতই কাজ করে কিন্তু true হলে return করে আর false হলে return করেনা।
array_reduce এটাও প্রতিটা এলিমেন্টের উপর কাজ করে অ্যারেকে reduces করে একটা single value তে রুপ আনে।
যেমনঃ দেখুন → [অ্যারে_রিডিউস()](#array_reduce)

## Difference between array_map, array_walk and array_filter (Topic from stackoverflow)

Changing Values:
array_map cannot change the values inside input array(s) while array_walk can; in particular, array_map never changes its arguments.

Array Keys Access:
array_map cannot operate with the array keys, array_walk can.

Return Value:
array_map returns a new array, array_walk only returns true/false. Hence, if you don't want to create an array as a result of traversing one array, you should use array_walk.

Iterating Multiple Arrays:
array_map also can receive an arbitrary number of arrays and it can iterate over them in parallel, while array_walk operates only on one.

Passing Arbitrary Data to Callback:
array_walk can receive an extra arbitrary parameter to pass to the callback. This mostly irrelevant since PHP 5.3 (when anonymous functions were introduced).

Length of Returned Array:
The resulting array of array_map has the same length as that of the largest input array; array_walk does not return an array but at the same time it cannot alter the number of elements of original array; array_filter picks only a subset of the elements of the array according to a filtering function. It does preserve the keys.

Example:
```php
$origarray1 = array(2.4, 2.6, 3.5);
$origarray2 = array(2.4, 2.6, 3.5);

print_r(array_map('floor', $origarray1)); // $origarray1 stays the same

// changes $origarray2
array_walk($origarray2, function (&$v, $k) { $v = floor($v); }); 
print_r($origarray2);

// this is a more proper use of array_walk
array_walk($origarray1, function ($v, $k) { echo "$k => $v", "\n"; });

// array_map accepts several arrays
print_r(
    array_map(function ($a, $b) { return $a * $b; }, $origarray1, $origarray2)
);

// select only elements that are > 2.5
print_r(
    array_filter($origarray1, function ($a) { return $a > 2.5; })
);

/*
Result:
Array
(
    [0] => 2
    [1] => 2
    [2] => 3
)
Array
(
    [0] => 2
    [1] => 2
    [2] => 3
)
0 => 2.4
1 => 2.6
2 => 3.5
Array
(
    [0] => 4.8
    [1] => 5.2
    [2] => 10.5
)
Array
(
    [1] => 2.6
    [2] => 3.5
)
*/
```
## array_reduce()
```PHP
// array_reduce() ফাংশনে অবশ্যই ২ টা প্যারামিটার দিতে হবে এবং প্রথম প্যারামিটার অবশ্যই array() হতে হবে।
// তাহলে প্রথমেই একটা এরে নিয়ে নেই এবং এর ভিতরে ১ থেকে ৫ পর্যন্ত ৫ টা এলিমেন্ট নিলাম
$numbers = array( 1, 2, 3, 4, 5 );

// এখানে 'sum' একটা কলব্যাক ফাংশান এবং এর দুইটা প্যারামিটার নেয়া হল,
// যে দুইটা প্যারামিটারের উপর ভিত্তি করে array_reduce() ফাংশনটি তার কাজ চালাবে।
function sum( $oldValue, $newValue ) {

	return $oldValue + $newValue;
}

// array_reduce() ফাংশনের ভিতর প্রথম আরগুমেন্টে একটা $numbers এরেটা পাস করে দিলাম 
// পরের আরগুমেন্টে 'sum' নামের একটা কলব্যাক ফাংশন পাস করে দিলাম।
$sum = array_reduce( $numbers, 'sum' );

echo $sum; // output = 15

// এখনে প্রথম $oldValue হচ্ছে '0' তার সাথে $newValue '1' যোগ হয়ে যোগফল হয়েছে = 1
// তার পরের ধাপে $oldValue '1' এর সাথে $newValue '2' যোগ হয়ে যোগফল = 3
// একইভাবে $oldValue '3' + $newValue '3' = 6
// তারপর $oldValue '6' + $newValue '4' = 10
// সর্বশেষ $oldValue '10' + $newValue '5' = 15
```
[এই পুরো প্রক্রিয়াটি বুঝতে অসুবিধা হলে এই কোডটা দেখুন](https://github.com/forhad-php/Array_PHP_JS/blob/master/php_fibonacci_series_with_loop.md)

## নির্দিষ্ট রকমের Array Key ধরে ডিলেট করার জন্যঃ

```php
function array_remove_keys( $array, $keys = array() ) {
 
	// If array is empty or not an array at all, don't bother
	// doing anything else.
	if( empty( $array ) || ( ! is_array( $array ) ) ) {
		return $array;
	}
 
	// If $keys is a comma-separated list, convert to an array.
	if( is_string( $keys ) ) {
		$keys = explode( ',', $keys );
	}
 
	// At this point if $keys is not an array, we can't do anything with it.
	if( ! is_array( $keys ) ) {
		return $array;
	}
 
  // array_diff_key() expected an associative array.
  $assocKeys = array();
  foreach( $keys as $key ) {
      $assocKeys[ $key ] = true;
  }

  return array_diff_key( $array, $assocKeys );
}
 
// Example:
$data = array(
  "a_one"   => "red",
  "a_two"   => "green",
  "c"       => "blue",
  "a_three" => "yellow"
  );
 
// Output before array_remove_keys()
var_dump($data);
 
// Remove the specific keys where "a_" only.
$data = array_remove_keys($data, preg_grep( '/^a_/', array_keys(  $data ) ) );
 
// Output after array_remove_keys()
var_dump($data);
```

## Array key ধরে কোন value খালি আছে কিনা check করব যেভাবে..

```PHP
$cars = array(
    array("Make"=>"Toyota", "Model"=>"Corolla", "Color"=>"White"),
    array("Make"=>"Toyota", "Model"=>"Camry", "Color"=>"Black"),
    array("Make"=>"Honda", "Model"=>"", "Color"=>"White"),
    array("Make"=>"Nissan", "Model"=>"Juke", "Color"=>"Red")
  );

$cars_model = array_column( $cars, 'Model' );

if(count(array_filter($cars_model)) == count($cars_model)) {
    echo 'OK';
} else {
    echo 'ERROR';
}

// Echo : Error
// Because of the third array "Model" key have no value
```

## WordPress এ array helper - (নিচে একটা হেল্পার উল্লেখ করা হলো বাকিগুলো পরবর্তীতে আপডেট করা হবে)
```PHP
// 1. wp_list_pluck( $list, $field, $index_key = null );

$cars = array(
	array("Make"=>"Toyota", "Model"=>"Corolla", "Color"=>"White"),
	array("Make"=>"Toyota", "Model"=>"Camry", "Color"=>"Black"),
	array("Make"=>"Honda", "Model"=>"", "Color"=>"White"),
	array("Make"=>"Nissan", "Model"=>"Juke", "Color"=>"Red")
);
$cars_model = wp_list_pluck($cars, 'Model');
/* Array(
[0] => Corolla
[1] => Camry
[2] => 
[3] => Juke
) */
```

## নির্দিষ্ট কোন key এর সকল value খালি কিনা?

```PHP
$cars = array(
	array("Make"=>"Toyota", "Model"=>"", "Color"=>"White"),
	array("Make"=>"Toyota", "Model"=>"", "Color"=>"Black"),
	array("Make"=>"Honda", "Model"=>"", "Color"=>"White"),
	array("Make"=>"Nissan", "Model"=>"", "Color"=>"Red")
);

$cars_model = array_column( $cars, 'Model' );

if(!array_filter($cars_model)) {
    echo 'All Model Empty';
}else{
  echo 'Its OK';
}

/* Result
"All Model Empty"
Because all of the value of model is empty. */
```

[Back_to_top](#আসুন-অ্যারে-সম্পর্কে-জানি-একইসাথে-পিএইচপি-এবং-জাভাস্ক্রিপ্টেঃ)
