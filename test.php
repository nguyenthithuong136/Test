<?php
//cau 1: kiem tra so chan, le
echo 'Cau 1: ';
$numberCheck = 16;
function checkEven($numberCheck){
    if($numberCheck % 2 == 0){
        echo $numberCheck. ' la so chan';
    }else{
        echo $numberCheck. ' la so le';
    }
}
checkEven($numberCheck);
echo '<br>';

//cau 2: tinh tong tu 1->n
echo 'Cau 2: ';
function sum($n){
    $sum = 0;
    for($i = 1; $i <= $n; $i++){
        $sum += $i;
    }return $sum;
}
echo 'Sum: '.sum(10). '<br>';

//cau 3: in bang cuu chuong tu 1->10
?>

<table border = "1px">
<tr>
<?php
echo 'Cau 3: Bang cuu chuong tu 1 den 10';
function printfTable(){
    for($i = 1; $i <= 10; $i++){
        echo '<td>';
        for($j = 1; $j <= 10; $j++){
            echo "$i x $j = " . ($i * $j). '<br>';
        }
    }
}printfTable();
?>
</tr>
</table>
<?php
//cau 4: kiem tra tu nam trong chuoi
echo 'Cau 4: ';
$string = 'Nguyen Thi Thuong';
$word = 'Thuong';
function checkString($string,$word){
    if(strpos($string,$word) == true){
        echo 'Tu nam trong chuoi';
    }else{
        echo 'Tu khong nam trong chuoi';
    }
}
checkString($string,$word);
echo '<br>';

//cau 5: tim min, max trong mang
echo 'Cau 5: ';
function findMinMax($arr){
    $max = max($arr);
    $min = min($arr);
    echo $max. ' la so lon nhat'. ', ';
    echo $min. ' la so be nhat';
}
$arr = [1,9,2,6,10];
findMinMax($arr);
echo '<br>';

//cau 6: xap mang tang dan
echo 'Cau 6: ';
function arrangeArr($array){
    $n = count($array);
    for($i = 0; $i < $n - 1; $i++){
        for($j = 0; $j < $n - $i - 1; $j++){
            if($array[$j] > $array[$j + 1]){
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }return $array;
}
$array = [1,8,2,9,3];
$sortedArray = arrangeArr($array);
echo 'Mang tang dan: ';
foreach($sortedArray as $array){
    echo $array. ' ';
}
echo '<br>';

//cau 7: tinh giai thua cua so nguyen duong
echo 'Cau 7: ';
$n = 4;
function calculateFact($n){
    $factorial = 1;
    for($i=1; $i<=$n; $i++){
        $factorial *=$i;
    }
    return $factorial;
}
echo 'Giai thua cua ' . $n . ' la '. calculateFact($n);
echo '<br>';

//cau 8: tim so nguyen to trong khoang cho truoc
echo 'Cau 8: ';
function checkPrime($n){
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0){
            return false;
        }
    }
     return true;
}
function showPrime($a, $b){
    for ($i = $a; $i <= $b; $i++){
        if(checkPrime($i))
            echo $i. ' ';
     }
}
$a = 30;
$b = 90;
echo 'So nguyen to trong khoang '.$a. ' den '. $b. ' la: ';
showPrime($a, $b);
echo '<br>';

//cau 9: tinh tong mang
echo 'Cau 9: ';
function sumArr($arr){
    $sum=0;
    foreach($arr as $arr){
        $sum += $arr;
    }return $sum;
}
$arr =[1,6,3,2];
echo 'Tong: '.sumArr($arr);
echo '<br>';

//cau 10: in ra cac so Fibonacci trong khoang cho truoc

//cau 11: kiem tra so Armstrong
echo 'Cau 11: ';
function isArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;
    $digits = strlen((string) $number);
    while ($temp > 0) {
        $remainder = $temp % 10;
        $sum += pow($remainder, $digits);
        $temp = (int) ($temp / 10);
    }return $number === $sum;
}
$number = 153;
if (isArmstrongNumber($number)) {
    echo "$number la so Armstrong";
} else {
    echo "$number khong la so Armstrong";
}
echo '<br>';

//cau 12: chen vao vi tri bat ky trong mang
echo 'Cau 12: ';
function insertElement($array, $element, $position) {
    $result = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($i == $position) {
            $result[] = $element;
        }
        $result[] = $array[$i];
    }return $result;
}
$numbers = [8,9,3,2,0];
$element = 4;
$position = 3;
$result = insertElement($numbers, $element, $position);
echo "Mang sau khi chen:";
foreach ($result as $number) {
    echo $number . " ";
}
echo '<br>';

//cau 13: loai bo phan tu trung lap trong mang
echo 'Cau 13: ';
function removeDuplicates1($array) {
    $result = [];
    foreach ($array as $element) {
        if (!in_array($element, $result)) {
            $result[] = $element;
        }
    }return $result;
}
$numbers = [2,2,5,6,9,2];
$uniqueNumbers = removeDuplicates1($numbers);
echo "Mang moi: ";
foreach ($uniqueNumbers as $number) {
    echo $number . " ";
}
echo '<br>';

//cau 14: tim vi tri phan tu trong mang
echo 'Cau 14: ';
function findElementPosition($array, $element) {
    $position = -1;
    $length = count($array);
    for ($i = 0; $i < $length; $i++) {
        if ($array[$i] === $element) {
            $position = $i;
            break;
        }
    }return $position;
}
$numbers = [4,6,3,7,9];
$searchElement = 3;
$position = findElementPosition($numbers, $searchElement);
if ($position !== -1) {
    echo "Phan tu $searchElement co vi tri la $position trong mang.";
} else {
    echo "Phan tu $searchElement khong co trong mang.";
}
echo '<br>';

//cau 15: dao nguoc chuoi
echo 'Cau 15: ';
function reverseString($stringNumber){
    $n = strlen($stringNumber);
    if ($n == 1){
        return $stringNumber;
    }else{
        $n--;
        return reverseString(substr($stringNumber,1,$n)) . substr($stringNumber,0,1);
    }
}
print_r(reverseString('13062002'));
echo '<br>';

//cau 16: dem so luong phan tu trong mang
echo 'Cau 16: ';
function countElements1($array) {
    $count = 0;
    foreach ($array as $element) {
        $count++;
    }return $count;
 }
$array = [1, 2, 3, 4, 5];
echo "So luong phan tu trong mang la: " .countElements1($array). '<br>';

//cau 17: kiem tra chuoi Palindrome
echo 'Cau 17: ';
function checkPalindrome($string) {
    $length = strlen($string);
    for ($i = 0; $i < $length / 2; $i++) {
        if ($string[$i] != $string[$length - 1 - $i]) {
            echo $string . " khong phai la chuoi palindrome";
        }
    }
    echo $string . " la chuoi palindrome";
}
$string = "madam";
echo checkPalindrome($string). '<br>';
//cau 18: dem so luong xuat hien phan tu trong mang
echo 'Cau 18: ';
function countOccurrences1($array, $element) {
    $count = 0;
    foreach ($array as $arr) {
        if ($arr == $element) {
            $count++;
        }
    }return $count;
}
$array = [5,6,6,4,1,8,9];
$element = 6;
echo "So lan xuat hien cua phan tu $element la: ". countOccurrences1($array, $element). '<br>';

//cau 19: xep mang giam dan
echo 'Cau 19: ';
function sortArr($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }return $array;
}
$array = [5, 2, 8, 1, 3];
$sortedArray = sortArr($array);
echo "Mnag sau sap xep: ";
foreach ($sortedArray as $element) {
    echo $element . " ";
}
echo '<br>';

//cau 20: them vao dau chuoi
echo 'Cau 20: ';
function addElement($array, $element, $position) {
   if ($position == "end") {
       array_push($array, $element);
   } else if ($position == "begin") {
       array_unshift($array, $element);
   }return $array;
}
$array = array( "H", "U", "N");
$element = "T";
$position = "begin"; // "end"
$new_array = addElement($array, $element, $position);
print_r($new_array);
echo '<br>';

//cau 21: tim so lon thu hai trong mang
echo 'Cau 21: ';
function secondLargest($array) {
   $uniquearray = array_unique($array);
   rsort($uniquearray);
   return $uniquearray[1];
}
$array = [1,6,9,10,2,3];
$secondlargest = secondLargest($array);
echo "So lon thu hai trong mang la:  " . $secondlargest. '<br>';

//cau 22: tim UCLN va BCNN
echo 'Cau 22: ';
function USCLN($a, $b) {
 if ($b == 0) return $a;
 return USCLN( $b,  $a % $b);
}
function BSCNN($a, $b) {
 return ($a * $b) / USCLN($a, $b);
}
$a = 8;
$b = 6;
echo ("USCLN của $a và $b là: " . USCLN($a, $b)) . ", ";
echo ("BSCNN của $a và  $b là: " . BSCNN($a, $b));
echo '<br>';
//cau 23: kiem tra so hoan hao
echo 'Cau 23: ';
function check($a){
    $sum = 0;
    for($i = 1; $i <= $a/2; $i++){
        if($a % $i == 0){
            $sum += $i;
        }
    }if($sum = $a) return true;
    return false;
}
if (check(6)){
    echo 'La so hoan hao';
}else{
    echo 'Khong phai la so hoan hao';
}
echo '<br>';

//cau 24: tim so le lon nhat trong mang
echo 'Cau 24: ';
function largestOdd($arr){
    $largesNumber = max($arr);
    if($largesNumber %2 == 1){
        return $largesNumber;
    }else{
        return 'Khong co so le lon nhat';
    }
}
$arr = [2,4,3,2,10,13];
echo 'So le lon nhat trong mang la: '. largestOdd($arr). '<br>';

//cau 25: kiem tra so nguyen to
echo 'Cau 25: ';
function checkPrimeNumber($n){
    if($n < 2){
        return false;
    }else{
        for($i = 2; $i <= sqrt($n); $i++){
            if($n % $i == 0){
                return false;
            }
        }
    }return true;
}
if(checkPrimeNumber(7)){
    echo 'La so nguyen to';
}else{
    echo 'Khong la so nguyen to';
}
echo '<br>';

//cau 26: tim so duong lon nhat trong mang
echo 'Cau 26: ';
function findLargestPositive($arr){
    $largestPositive = null;
    foreach ($arr as $num) {
        if ($num > 0 && ($largestPositive == null || $num > $largestPositive)) {
            $largestPositive = $num;
        }
    }
    return $largestPositive;
}
$arr = [1,2,7,3,9,10];
echo "So duong lon nhat trong mang la: " . findLargestPositive($arr). '<br>';

//cau 27: tim so am lon nhat trong mang
echo 'Cau 27: ';
function findLargestNegative($arr){
    $largestNegative = null;
    foreach ($arr as $num) {
        if ($num < 0 && ($largestNegative == null || $num > $largestNegative)) {
            $largestNegative = $num;
        }
    }
    return $largestNegative;
}
$arr = [-2,-5,-1,-6,-10];
echo "So am lon nhat trong mang la: " . findLargestNegative($arr).'<br>';
 
//cau 28: tinh tong le tu 1->10
echo 'Cau 28: ';
function checkEvenNumber($n){
    if($n % 2 == 1){
        return true;
    }return false;
}
function sumEven($k){
    $sum = 0;
    for($i = 1; $i <= $k; $i++){
        if(checkEvenNumber($i)){
            $sum += $i;
        }
    }return $sum;
}
echo 'Tong: '.sumEven(10). '<br>';

//cau 29: tim so chinh phuong trong mang cho truoc
echo 'Cau 29: ';
function findPerfectSquares($start, $end){
      $perfectSquares = array();
      for ($i = $start; $i <= $end; $i++) {
          if (sqrt($i) == floor(sqrt($i))) {
              array_push($perfectSquares, $i);
          }
      }return $perfectSquares;
}
$start = 50;
$end = 100;
$perfectSquares = findPerfectSquares($start, $end);
echo "Cac so chinh phuong trong khoang tu " . $start . " den " . $end . " la: ";
foreach ($perfectSquares as $number) {
      echo $number . " ";
}
echo '<br>';

//cau 30: kiem tra chuoi co la chuoi con cua chuoi khac khong
echo 'Cau 30: ';
function isSubstring($string, $substring){
    if (strpos($string, $substring) !== false) {
        return true;
    } else {
        return false;
    }
}
$string = "Hello world";
$substring = "world";
if (isSubstring($string, $substring)) {
    echo "Chuoi " . $substring . " la chuoi con cua chuoi " . $string ;
} else {
    echo "Chuoi " . $substring . " khong phai la chuoi con cua chuoi " . $string ;
}
?>
 


 

