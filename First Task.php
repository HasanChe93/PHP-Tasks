 <!-- <?php
echo "My first PHP script!";
?>
<?php echo '<br>'
?>
<?php
Print "Hello Coders";
?>
<?php echo '<br>'
?>
<?php print 'Hasan' ?>

<?php
echo '<br>';
$user = "Hasan";
$rnd = 30;
print $user;
print '<br>';
print $rnd;
$test = array("hello","world");
echo $test[0]
?> 

 <?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg();
?> 
1-a-
<?php
echo strtoupper("hasan abuhashem");
?> 

<?php
echo '<br>';
echo strtolower("1-b-HASAN ABUHASHEM");
?>


<?php
echo '<br>';
echo ucfirst("1-c hasan abu hashem");
?> 

<?php
echo '<br>';
echo ucwords("1-d hasan abu hashem");
?> 

<?php
$TIME = "085119";
echo '<br>';
echo date("2- H:i:s",(strtotime($TIME)))

?>

<?php
echo '<br>';
$word = "orange";
$mystring = "I am a full stack developer at orange coding academy";
 
if(strpos($mystring, $word) !== false){
    echo "3-Word Found!";
} else{
    echo "3-Word Not Found!";
}
?>
<?php
echo '<br>';
$path = 'www.orange.com/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
?>

<?php
echo '<br>';

$email  = 'info@orange.com';
$username = strstr($email, '@', true); 
  echo  $username."\n";
?>

<?php
echo '<br>';
$str1 = 'info@orange.com';
echo substr($str1, -3)."\n";
?>

<?php
echo '<br>';
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
?>

<?php
echo '<br>';

$str = 'That new trainee is so genius.';
echo preg_replace('/That/', 'Our', $str, 1)."\n"; 
?>

<?php
echo '<br>';
$str1 = 'dragonball';
$str2 = 'dragonboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>

<?php
echo '<br>';
$first = array("Twinkle", "twinkle", "twinkle", "litlestar");  
var_dump($first); 
?>

<?php
echo '<br>';
$cha = 'z';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
?>

<?php
echo '<br>';
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
?>

<?php
echo '<br>';
$x = '0000657022.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
?>

<?php
echo '<br>';
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";
?>

<?php
echo '<br>';
$my_str = 'The quick brown fox jumps over the lazy dog---';
echo rtrim($my_str, '-')."\n";
?>

<?php
echo '<br>';
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
?>

<?php
  echo '<br>';

  function RemoveSpecialChar($str){
 
      $res = str_ireplace( array('"',
      ',' , ';', '/', '*', '+','-',':' ), ' ', $str);
        return $res;
      } 
 $str = '"1+2/3*2:2-3/4*3';
  $str1 = RemoveSpecialChar($str);
  echo $str1;
?>

<?php
echo '<br>';
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
?>

<?php
echo '<br>';

for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"
?> -->


<?php
echo 
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
?>
