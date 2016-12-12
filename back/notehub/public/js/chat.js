//　ここらへんはjQueryを使っている。
//　id属性がgreetのクリックイベントに対して行われる
$(function(){
    $('#greet').click(function(){
      //　.val()は値(テキスト)取得:もしidのuserかmessageのどっちかが空ならreturn
    	if(!$('#user').val() || !$('#message').val()) return;
        $.get('bbs.php', {
        	user: $('#user').val(),
        	message: $('#message').val(),
        	mode: "0" // 書き込み
        }, function(data){ //dataにbbs.phpのechoの出力が格納されると予想
        	$('#result').html(data);  //id属性resultの中身をdataというhtml文字列に置き換える
        	 scTarget();
        });
    });
    loadLog();
    logAll();
});

// ログをロードする
function loadLog(){
	$.get('bbs.php', {
		mode: "1" // 読み込み
    }, function(data){
    	$('#result').html(data);
    	// scTarget();
    });
}

// 一定間隔でログをリロードする
// setTimeout(function(){コマンド},実行するまでの時間)
function logAll(){
	setTimeout(function(){
		loadLog();
		logAll();
	},5000); //リロード時間はここで調整
}

/*
 * 画面を最下部へ移動させる
 */
function scTarget(){
	var pos = $("#end").offset().top;
	$("#talkField").animate({
		scrollTop:pos
	}, 0, "slow","swing"); //swingで0が良さそう
	return false;
}
