<?php
// Q1 tic-tac問題

echo "1から100までのカウントを開始します\n\n";

for ($i = 1; $i <= 100; $i++){
    if($i % 5 === 0 && $i % 4 === 0){
        echo "tic-tac\n";
    }
    elseif($i % 4 === 0){
        echo "tic\n";
    }
    elseif($i % 5 === 0){
        echo "tac\n";
    }
    else{
        echo $i . "\n";
    }
}


// Q2 多次元連想配列

$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel'  => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel'  => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel'  => '09055556666'
    ],
];
// Q=1
echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。\n";

// Q=2
foreach ($personalInfos as $index => $personalInfo){
    $number = $index + 1;
echo $number . "番目の" . $personalInfo['name'] . "のメールアドレスは" . $personalInfos['mail'] . "で" . "、電話番号は" . $personalInfo['tel'] . "です。\n";
}
// Q=3

$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $personalInfo) {
    $personalInfos[$index]['age'] = $ageList[$index];
}

var_dump($personalInfos);

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function introduce()
    {
        echo '学籍番号' . $this->studentId .'番の生徒は'. $this->studentName .'です。';
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student('120','山田');

$yamada->introduce();


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function introduce()
    {
        echo '学籍番号' . $this->studentId .'番の生徒は'. $this->studentName .'です。';
    }

    public function attend($subject)
    {
        echo $this->studentName.'は'.$subject.'の授業に出席しました。' . '学籍番号:' . $this->studentId;
    }
}

$yamada = new Student('120','山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// 問1
$date = new DateTime();
$date->modify('-1 month');

echo $date->format('Y-m-d');
// 問2 
$today = new DateTime(); // 今日の日付
$day = new DateTime('1992-04-25'); // 基準となる日付

$interval = $today->diff($day); // 2つの日付の差を計算

echo 'あの日から' . $interval->days . '日経過しました。';

?>