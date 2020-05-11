$words = ['サスケェ！','お前は','オレにとっての','新たな','光だ！'];
$seikai = join('',$words);
$totaltimes=0;
do{
    $str ='';
    for($times=1;$times<=count($words);$times++){
        $str .=$words[rand(0,count($words)-1)];
    }
    echo ++$totaltimes."回目：$str\n";
}while($str!= $seikai);          
