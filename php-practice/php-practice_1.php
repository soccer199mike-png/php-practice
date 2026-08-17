<?php
// Q1 変数と文字列

class User 
{
    public $name;
    public function __construct($userName)
    {
        $this->name = $userName;
    }

    public function introduce()
    {
        echo '私の名前は「' . $this->name . '」です。' . "\n";
    }

}
$kitano = new User('北野');

$kitano->introduce();


// Q2 四則演算

$x = 5;
$y = 4;
$z = 2;

$num = $x * $y;
$v = $num / $z;

echo $num . "\n";
echo $v;

// Q3 日付操作

date_default_timezone_set('Asia/Tokyo');
echo date ("Y年m月d日H時i分s秒");

// Q4 条件分岐-1 if文

$device = 'mac';
if ($device === 'windows'){
    echo '使用OSは、'.$device.'です。';
}else{if ($device === 'mac'){
    echo '使用OSは、'.$device.'です。';
}else{
    echo 'どちらでもありません。';
}}

// Q5 条件分岐-2 三項演算子

$age = 20;
if ($age < 18 ){
    echo '未成年です。';
}else{
    echo '成人です。';
}

// Q6 配列

$array = ['東京都','埼玉県','栃木県','千葉県','神奈川県','群馬県','茨城県'];
echo $array[2] . 'と' . $array[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1

$array = ['東京都' => '新宿区','神奈川県' => '横浜市','千葉県' => '千葉市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市','群馬県' => '前橋市','茨城県' => '水戸市'];
echo $array['東京都'] ."\n". $array['神奈川県'] ."\n". $array['千葉県'] ."\n". $array['埼玉県'] ."\n". $array['栃木県'] ."\n". $array['群馬県'] ."\n". $array['茨城県'] ."\n";

// Q8 連想配列-2

$array = ['東京都' => '新宿区','神奈川県' => '横浜市','千葉県' => '千葉市','埼玉県' => 'さいたま市','栃木県' => '宇都宮市','群馬県' => '前橋市','茨城県' => '水戸市'];
$keys = array_keys($array);
echo $keys[3].'の県庁所在地は' . $array['埼玉県'] . 'です。';

// Q9 連想配列-3

$array = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
    ];

$cities = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県', '愛知県', '大阪府'];

foreach ($cities as $city) {
    if (array_key_exists($city , $array)){
        echo $city . 'の県庁所在地は' . $array[$city] . 'です。' . "\n";
    } else {
        echo $city . 'は関東地方ではありません。' . "\n";
    }
}

// Q10 関数-1

function sayHi($name)
{
    echo  $name .'、こんにちは。' ."\n";
}
sayHi('金谷さん');
sayHi('安藤さん');

// Q11 関数-2

function calcTaxInPrice($price) {
    return $price * 1.1;
}

$price = 1000;
$taxInPrice = calcTaxInPrice($price);

echo $price . "円の商品の税込み価格は" . $taxInPrice . "円です。";

// Q12 関数とif文
function distinguishNum($num) {

if ($num % 2 === 0){
    echo $num . "は偶数です。"."\n";
}
else{
    echo $num . "は奇数です。"."\n";
}
}

$numbers = [11,24];

foreach($numbers as $num){
    distinguishNum($num);
    }

// Q13 関数とswitch文

function evaluateGrade($grade) {

switch ($grade) {
    case 'A':
    case 'B':
        echo '合格です。' . "\n";
        break;

    case 'C':
        echo '合格ですが追加課題があります。' . "\n";
        break;    
        
    case 'D':
        echo '不合格です。' . "\n";
        break;

    default:
        echo '判定不明です。講師に問い合わせてください。' . "\n";
        break;
}}

$grades = ['A','f'];
foreach ($grades as $grade) {
    evaluateGrade($grade);
    }

?>