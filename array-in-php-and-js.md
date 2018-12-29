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

## explode, implode, join এর ব্যাবহারঃ (অ্যারে থেকে স্ট্রিং - স্ট্রিং থেকে অ্যারে)

| পিএইচপি তে | জাভাস্ক্রিপ্টে |
| --- | --- |
$serial = [1, 2, 3, 4, 5]; <br/> $serial_str = implode(', ', $serial); <br/> // এই ', ' অংশটাকে বলা হয় delimiter <br/> // implode এর পরিবর্তে join ব্যাবহার করা যেতে পারে <br/> $serial_str = join(', ', $serial); <br/> // join এর ক্ষেত্রে এই ', ' অংশটাকে বলা যায় glue <br/> var_dump($serial_str); <br/><br/> $serial_int = explode(', ', $serial_str); <br/> var_dump($serial_int); <br/><br/> $serial_two = [a, b,c, d, e]; <br/> // লক্ষ করুন b এর পরে c এর আগে স্পেস নেই। <br/> // এ ক্ষেত্রে আমরা preg_split ফাংশানে regex বা regular expression ব্যাবহার করতে পারি <br/> preg_split('/(, &#124;,)/', a, b,c, d, e); <br/> // এখানে "কমা" এর সাথে স্পেস অথবা শুধু "কমা" দুইটাকেই গ্রহন করে স্ট্রিং থেকে অ্যারেতে কনভার্ট করতে বলা হয়েছে | var fruits = ["Banana", "Orange", "Apple", "Mango"]; <br/> var fruitsStr = fruits.join(' '); <br/> console.log(fruitsStr); <br/><br/> var fruitsArr = fruitsStr.split(" "); <br/> console.log(fruitsArr);

## Associative array তে আলাদাভাবে key এবং value পাওয়ার জন্যঃ

| পিএইচপি তে | জাভাস্ক্রিপ্টে |
| --- | --- |
array_keys() এবং array_values() <br/><br/> এছাড়াও foreach ব্যাবহার করা যায়। foreach হচ্ছে একটা iterator <br/> foreach ( $array as $key => $value ) {...} | var serial = { "one" : 1, "two" : 2, "three": 3 }; <br/> var keys = Object.keys(serial); <br/> var values = Object.values(serial); <br/> console.log(keys); <br/> console.log(values); <br/><br/> আর iterator ব্যাবহার করতে চাইলেঃ <br/> var serial = { "one" : 1, "two" : 2, "three": 3 }; <br/> var keys = []; <br/> for (var key in serial) { <br/> keys.push(key); <br/> } <br/> console.log(keys);
