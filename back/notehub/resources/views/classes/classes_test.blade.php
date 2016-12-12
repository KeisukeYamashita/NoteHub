<!DOCTYPE html>
<html>
  <head>
    <title>{{ $class->className }}</title>
    <!-- 共同作業のためのcssファイルをもらってくる  -->
    <link href="https://www.gstatic.com/realtime/quickstart-styles.css" rel="stylesheet" type="text/css"/>
    <!-- Bootsrap3を使うためのファイルをもらってくる -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- チャットのcssファイルをもらってくる -->
    <link rel="stylesheet" href="/css/chat.css">
    <!-- このページの全体のcssファイルをもらってくる -->
    <link rel="stylesheet" href="/css/classes_test.css">
    <!--L共同作業のためのjsファイルをgoogleのサーバーからもらってくる-->
    <script src="https://apis.google.com/js/api.js"></script>
    <!-- 共同作業用のjsファイル(ユーザー側)-->
    <script src="https://www.gstatic.com/realtime/realtime-client-utils.js"></script>
  </head>

  <body>
    <!-- ライブストリーミングのコード -->
    <!-- 共同作業のコード -->
    <div class = "container social_note_taking">
    <main>
      <h1>共同でノートを作っていきましょう。</h1>
      <p>{{ $class->className }}のノート作りをテスト中。<a onclick="window.open(window.location.href);return false;" target="_blank">新しいタブ</a> を作って確認して。</p>
      <!-- 入力エリアを作成 -->
      <div class="btn-toolbar" role="toolbar">
      	<div class="btn-group" role="group">
      		<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-font" aria-hidden="true"></span></button>
      		<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-bold" aria-hidden="true"></span></button>
      		<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-italic" aria-hidden="true"></span></button>
      	</div>
      	<div class="btn-group" role="group">
      		<button type="button" class="btn btn-default">中央寄せ</button>
      		<button type="button" class="btn btn-default">右寄せ</button>
      	</div>
      </div>
      <textarea id="text_area" style="display:block; color:red"></textarea>
      <button id="auth_button">Authorize</button>
    </main>
    <script>
      // ここAPIキーなので絶対にいじらないこと
      var clientId = '78241857609-vn445jdj4pdtsjg07o02hdcta1c3qugt.apps.googleusercontent.com';
      if (!/^([0-9])$/.test(clientId[0])) {
        alert('ただしいクライアントキーを入力してください（注：APIキーとは異なります?)');
      }
      // Create a new instance of the realtime utility with your client ID.
      // コードに書いたクライアントAPIキーでインスタンスを作成。
      var realtimeUtils = new utils.RealtimeUtils({ clientId: clientId });

      authorize();

      //有効化をする関数
      function authorize() {
        // Attempt to authorize
        // 有効かしようとする
        realtimeUtils.authorize(function(response){
          if(response.error){
            // Authorization failed because this is the first time the user has used your application,
            // show the authorize button to prompt them to authorize manually.
            // もし有効化ができないならボタンを「有効化ボタン」を表示
            var button = document.getElementById('auth_button');
            button.classList.add('visible');
            button.addEventListener('click', function () {
              realtimeUtils.authorize(function(response){
                start();
              }, true);
            });
          } else {
              start();
          }
        }, false);
      }

      //ファイルのロード、および作成を行う
      function start() {
        // With auth taken care of, load a file, or create one if there
        // is not an id in the URL.
        var id = realtimeUtils.getParam('id');
        if (id) {
          // Load the document id from the URL
          // もしすでにファイルがあるならURLからファイルをロードする
          realtimeUtils.load(id.replace('/', ''), onFileLoaded, onFileInitialize);
        } else {
          // Create a new document, add it to the URL
          // もしファイルがないなら、新しいドキュメントを作成する.
          realtimeUtils.createRealtimeFile('New Quickstart File', function(createResponse) {
            window.history.pushState(null, null, '?id=' + createResponse.id);
            realtimeUtils.load(createResponse.id, onFileLoaded, onFileInitialize);
          });
        }
      }

      // The first time a file is opened, it must be initialized with the
      // document structure. This function will add a collaborative string
      // to our model at the root.
      // はじめてファイルが開かれたとき、？？？
      function onFileInitialize(model) {
        var string = model.createString();
        string.setText('ようこそNoteHubへ!さっそくノートを取っていきましょう');
        model.getRoot().set('demo_string', string);
      }

      // After a file has been initialized and loaded, we can access the
      // document. We will wire up the data model to the UI.
      // ファイルが初期化されてロードされたとき、ドキュメントにアクセスできる。
      function onFileLoaded(doc) {
        var collaborativeString = doc.getModel().getRoot().get('demo_string');
        wireTextBoxes(collaborativeString);
      }

      // Connects the text boxes to the collaborative string
      // お互いのデータを交換する
      function wireTextBoxes(collaborativeString) {
        var textArea = document.getElementById('text_area');
        gapi.drive.realtime.databinding.bindString(collaborativeString, textArea);
      }
    </script>
  </div>
    <!-- チャットの基礎コード（フロント) -->
    <div class = "container chat_field">
    	<div id="container">
    	<h1>チャット</h1>
      <h2>質問や疑問を投げてみてください</h2>
    	<div id="talkField">
    		<div id="result"></div>
    		<br class="clear_balloon"/>
    		<div id="end"></div>
    	</div>
    	<div id="inputField">
    		<p class="username">
    			<span class="glyphicon glyphicon-user" aria-hidden="true"></span> 名前<br> <input type="text" name="user" id="user"></p>
    		<p class="message">
          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> メッセージ<textarea type="text" name="message" id="message"></textarea>
    			<input type="button" id="greet" value="送信する">
    		</p>
    	</div>
      <!-- チャットで使うjquery(ajax)を組み込む -->
    	<script src="/js/jquery-2.1.4.min.js"></script>
      <!--  チャットを実装するためのjavascriptファイルを組み込む　-->
    	<script src="/js/chats/chat{{$class->classid}}.js"></script>
    </div>
    </div>
  </body>
</html>
