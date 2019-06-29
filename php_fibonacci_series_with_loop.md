# লুপ দিয়ে ফিবোনাচ্চি সিরিজ প্রিন্ট করাঃ

// 0 1 1 2 3 5 8 13 21 34 55 89 144 233 377 610 987 1597 2584...
$veryOld = 0;
$old     = 1;
$new     = 1;

for ( $i = 0; $i < 10; $i++ ) {
	echo $veryOld . ' ';
	$old     = $new;
	$new     = $old + $veryOld;
	$veryOld = $old;
}

/* ইনিশিয়ালঃ
$veryOld = 0
$old     = 1
$new     = 1 */

/* প্রথম লুপেঃ
$veryOld = 1
$old     = 1
$new     = 1 */

/* দ্বিতীয় লুপেঃ
$veryOld = 1
$old     = 1
$new     = 2 */

/* তৃতীয় লুপেঃ
$veryOld = 2
$old     = 2
$new     = 3 */

/* পঞ্চম লুপেঃ
$veryOld = 3
এভাবে চলবে... */
