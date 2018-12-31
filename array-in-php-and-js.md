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

| পিএইচপি তে | জাভাস্ক্রিপ্টে |
| --- | --- |
count( $array ); <br/> এই ফাংশনটি সেকেন্ড প্যারামিটার হিসেবে COUNT_RECURSIVE কন্সট্যান্ট এ্যাক্সেপ্ট করে। যার কাজ হচ্ছে মাল্টিডায়মেশনাল অ্যারে থেকে key এবং value সকল কিছু সে গননা রাখবে <br/> echo count($array, COUNT_RECURSIVE); | array.length

## explode, implode, join এর ব্যাবহারঃ (অ্যারে থেকে স্ট্রিং - স্ট্রিং থেকে অ্যারে)

| পিএইচপি তে | জাভাস্ক্রিপ্টে |
| --- | --- |
$serial = [1, 2, 3, 4, 5]; <br/> $serial_str = implode(', ', $serial); <br/> *এই `', '` অংশটাকে বলা হয় delimiter* <br/> *implode এর পরিবর্তে join ব্যাবহার করা যেতে পারে* <br/> $serial_str = join(', ', $serial); <br/> *join এর ক্ষেত্রে এই `', '` অংশটাকে বলা যায় glue* <br/> var_dump($serial_str); <br/><br/> $serial_int = explode(', ', $serial_str); <br/> var_dump($serial_int); <br/><br/> $serial_two = [a, b,c, d, e]; <br/> *লক্ষ করুন b এর পরে c এর আগে স্পেস নেই* <br/> *এ ক্ষেত্রে আমরা preg_split ফাংশানে regex বা regular expression ব্যাবহার করতে পারি* <br/> `preg_split('/(, \|,)/', a, b,c, d, e);` <br/> *এখানে "কমা" এর সাথে স্পেস অথবা শুধু "কমা" দুইটাকেই গ্রহন করে স্ট্রিং থেকে অ্যারেতে কনভার্ট করতে বলা হয়েছে* | var fruits = ["Banana", "Orange", "Apple", "Mango"]; <br/> var fruitsStr = fruits.join(' '); <br/> console.log(fruitsStr); <br/><br/> var fruitsArr = fruitsStr.split(" "); <br/> console.log(fruitsArr);

## Associative array তে আলাদাভাবে key এবং value পাওয়ার জন্যঃ

| পিএইচপি তে | জাভাস্ক্রিপ্টে |
| --- | --- |
array_keys() এবং array_values() <br/><br/> এছাড়াও foreach ব্যাবহার করা যায়। foreach হচ্ছে একটা iterator <br/> foreach ( $array as $key => $value ) {...} | var serial = { "one" : 1, "two" : 2, "three": 3 }; <br/> var keys = Object.keys(serial); <br/> var values = Object.values(serial); <br/> console.log(keys); <br/> console.log(values); <br/><br/> *আর iterator ব্যাবহার করতে চাইলেঃ* <br/> var serial = { "one" : 1, "two" : 2, "three": 3 }; <br/> var keys = []; <br/> for (var key in serial) { <br/> keys.push(key); <br/> } <br/> console.log(keys);

> পিএইচপিতে যে কোন string কে খুব সহজে array হিসেবে treat করা যায় যেমনঃ $array[0]=='s'

## Array কে string রুপে রেখে দিয়ে পরবর্তীতে অন্য কোথাও ব্যাবহার করতে দুইটা পদ্ধতি আছেঃ

| পিএইচপি তে | জাভাস্ক্রিপ্টে |
| --- | --- |
serialize( $array ) // আনসিরিয়ালাইজ করতে চাইলে unserialize( $array ) <br> অথবা <br> json_encode( $array ) // ডিকোড করতে চাইলে json_decode( $array ) <br> // উল্লেখ্য ডিকোডের ক্ষেত্রে পিএইচপি যখন ডিকোড করে তখন সেটা Object এ Convert করে ফেলে। তো আমরা যদি Array হিসেবেই রুপান্তর করতে চাই তাহলে সেকেন্ড প্যারামিটার হিসেবে true পাস করে দিতে হবে এইভাবেঃ <br> json_decode( $array, true ) | পরে সময় করে লিখব।

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
এই চারটা ফাংশান একসাথে রাখা হয়েছে কারন মিল রয়েছে বুঝতে সুবিধা হবে -
array_walk প্রতিটা এলিমেন্টের উপর কাজ চালায়। কিন্তু এটা শুধু echo বা print করার ক্ষেত্রে <br>
array_map অ্যারে ওয়াকের মতই কাজ করে কিন্তু return করার ক্ষেত্রে <br>
array_filter অ্যারে মেপের মতই কাজ করে কিন্তু true হলে return করে আর false হলে return করেনা।
array_reduce এটাও প্রতিটা এলিমেন্টের উপর কাজ করে কিন্তু অ্যারেকে ছোট করে ফেলে যেমনঃ


![alt text](https://github.com/forhad-php/Array_PHP_JS/blob/master/Screenshot_1.png "Logo Title Text 1")
![alt text](https://github.com/forhad-php/Array_PHP_JS/blob/master/Screenshot_2.png "Logo Title Text 1")



<table>
	<caption>Monthly savings</caption>
	<tr>
      <th>Month</th>
      <th>Savings</th>
  	</tr>
	<tr>
	<td>

  ```php
  const int x = 3;
  const string y = "foo";
  readonly Object obj = getObject();
  ```
</td>
<td>

  ```javascript
  def x : int = 3;
  def y : string = "foo";
  def obj : Object = getObject();
  ```
</td>
</tr>
</table>



[Back_to_top](#আসুন-অ্যারে-সম্পর্কে-জানি-একইসাথে-পিএইচপি-এবং-জাভাস্ক্রিপ্টেঃ)
