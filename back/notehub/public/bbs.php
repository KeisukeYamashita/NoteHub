<?php
$testFile = "test.log";

// ajaxを$_GET[js変数]で受信
// もしmodeが0、つまり書き込みモードなら以下のコマンドを実行
if($_GET['mode'] == "0"){
// htmlspecialcharsは特殊な文字をhtml表示にきちんと変換する関数
// 下の2行は入力フォームのuserとメッセージを取得
$user = htmlspecialchars($_GET['user'], ENT_QUOTES, "utf-8");
$message = htmlspecialchars($_GET['message'], ENT_QUOTES, "utf-8");
// class="(left or right)_balloon"でどっちに出すかを決める
$inputValue = "<div class='user'>".$user."</div><div class='right_balloon'>".$message."</div>";

// ファイルにデータを書き込み
if($inputValue){
	// ファイルをオープンできたか、fopenはファイルまたはurlを開く
	if(!$fp = fopen($testFile, "a")){
		echo "could not open";
		exit;
	}
	// 書き込みできたか
	// fwriteは$fpは$fopenして作成したファイルを書く、そこに$inputValueを書き込む
	if(fwrite($fp, $inputValue) === false) {
		echo "could not write";
		exit;
	}
	// 書き込めなかったら終了処理
	fclose($fp);
} else {
	echo "not writable";
	exit;
}

// ファイルからデータを読み込み
// if(!$fp = fopen($testFile, "r")){
// 	echo "could not open";
// 	exit;
// }
// $outputValue = fread($fp, filesize($testFile));
// echo $outputValue;
// fclose($fp);

//file_get_contents(ファイル名)はファイル内のすべての文字列を読み込み、echoする
$outputValue = file_get_contents($testFile);
echo $outputValue;

}else{  // もし読み込みモードなら
	$outputValue = file_get_contents($testFile);
	echo $outputValue;
}
