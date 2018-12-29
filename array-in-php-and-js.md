# আসুন অ্যারে সম্পর্কে জানি, একইসাথে পিএইচপি এবং জাভাস্ক্রিপ্টেঃ

In PHP, there are three types of arrays :
	- Indexed arrays : Arrays with a numeric index.
	- Associative arrays : Arrays with named keys. (যে অ্যারেরে key এবং value থাকে)
	- Multidimensional arrays / Nested array : Arrays containing one or more arrays. (একটা অ্যারে এর ভিতর এক বা একাধিক অ্যারে)

JavaScript does not support associative arrays. এক্ষেত্রে আমরা object কে ব্যাবহার করতে পারি। আর object ব্যাবহারের ক্ষেত্রে শুধুমাত্র [] হলেই চলবে। অর্থাৎ new কিওয়ার্ডের দরকার নেই। যেমনঃ

var points = new Array();     // Bad
var points = [];              // Good 

এখন এই অ্যারেগুলো ম্যানুপুলেট করার জন্য মজার মজার কিছু ফাংশান / মেথড আছে। চলুন এদের সম্পর্কে জানি। এরা array helper নামেও বেশ পরিচিত।

## অ্যারে এর ভিতর কয়টা এলিমেন্ট আছে তা জানার জন্যঃ

| পিএইচপি তে | জাভাস্ক্রিপ্টে |
| --- | --- |
count( $array ) | array.length

## Associative array তে আলাদাভাবে key এবং value পাওয়ার জন্যঃ

| পিএইচপি তে | জাভাস্ক্রিপ্টে |
| --- | --- |
array_keys() এবং array_values() \
এছাড়াও foreach ব্যাবহার করা যায়। foreach হচ্ছে একটা iterator \
foreach ( $array as $key => $value ) {...} | var serial = { "one" : 1, "two" : 2, "three": 3 }; \
var keys = Object.keys(serial); \
var values = Object.values(serial); \
console.log(keys); \
console.log(values);

আর iterator ব্যাবহার করতে চাইলেঃ
var serial = { "one" : 1, "two" : 2, "three": 3 };
var keys = [];
for (var key in serial) {
    keys.push(key);
}
console.log(keys);

## explode এবং join এর ব্যাবহারঃ (অ্যারে থেকে স্ট্রিং - স্ট্রিং থেকে অ্যারে)

পিএইচপি তে
$serial = [1, 2, 3, 4, 5];
$serial_str = implode(', ', $serial); // এই ', ' অংশটাকে বলা হয় delimiter
// implode এর পরিবর্তে join ব্যাবহার করা যেতে পারে
$serial_str = join(', ', $serial); // join এর ক্ষেত্রে এই ', ' অংশটাকে বলা যায় glue
var_dump($serial_str);
$serial_int = explode(', ', $serial_str);
var_dump($serial_int);

$serial_two = [a, b,c, d, e]; // লক্ষ করুন b এর পরে c এর আগে স্পেস নেই।
// এ ক্ষেত্রে আমরা preg_split ফাংশানে regex বা regular expression ব্যাবহার করতে পারি
preg_split('/(, |,)/', a, b,c, d, e); // এখানে "কমা" এর সাথে স্পেস অথবা শুধু "কমা" দুইটাকেই গ্রহন করে স্ট্রিং থেকে অ্যারেতে কনভার্ট করতে বলা হয়েছে

জাভাস্ক্রিপ্টেঃ
var fruits = ["Banana", "Orange", "Apple", "Mango"];
var fruitsStr = fruits.join(' ');
console.log(fruitsStr);
var fruitsArr = fruitsStr.split(" ");
console.log(fruitsArr);
