<!DOCTYPE html>
<html>
  <head>
    <title>有機化学</title>
  </head>
  <body>

    <!-- Load Styles  -->
    <link href="https://www.gstatic.com/realtime/quickstart-styles.css" rel="stylesheet" type="text/css"/>

    <!--Load the Realtime JavaScript library-->
    <script src="https://apis.google.com/js/api.js"></script>

     <!-- Load the utility library -->
    <script src="https://www.gstatic.com/realtime/realtime-client-utils.js"></script>
  </head>
  <body>
    <main>
      <h1>共同でノートを作っていきましょう。</h1>
      <p>有機合成化学のノート作りをテスト中。<a onclick="window.open(window.location.href);return false;" target="_blank">新しいタブ</a> を作って確認して。</p>
      <textarea id="text_area_1"></textarea>
      <textarea id="text_area_2"></textarea>
      <button id="auth_button">Authorize</button>
    </main>
    <script>
      var clientId = '78241857609-vn445jdj4pdtsjg07o02hdcta1c3qugt.apps.googleusercontent.com';
      if (!/^([0-9])$/.test(clientId[0])) {
        alert('Invalid Client ID - did you forget to insert your application Client ID?');
      }
      // Create a new instance of the realtime utility with your client ID.
      var realtimeUtils = new utils.RealtimeUtils({ clientId: clientId });

      authorize();

      function authorize() {
        // Attempt to authorize
        realtimeUtils.authorize(function(response){
          if(response.error){
            // Authorization failed because this is the first time the user has used your application,
            // show the authorize button to prompt them to authorize manually.
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

      function start() {
        // With auth taken care of, load a file, or create one if there
        // is not an id in the URL.
        var id = realtimeUtils.getParam('id');
        if (id) {
          // Load the document id from the URL
          realtimeUtils.load(id.replace('/', ''), onFileLoaded, onFileInitialize);
        } else {
          // Create a new document, add it to the URL
          realtimeUtils.createRealtimeFile('New Quickstart File', function(createResponse) {
            window.history.pushState(null, null, '?id=' + createResponse.id);
            realtimeUtils.load(createResponse.id, onFileLoaded, onFileInitialize);
          });
        }
      }

      // The first time a file is opened, it must be initialized with the
      // document structure. This function will add a collaborative string
      // to our model at the root.
      function onFileInitialize(model) {
        var string = model.createString();
        string.setText('Welcome to the Quickstart App!');
        model.getRoot().set('demo_string', string);
      }

      // After a file has been initialized and loaded, we can access the
      // document. We will wire up the data model to the UI.
      function onFileLoaded(doc) {
        var collaborativeString = doc.getModel().getRoot().get('demo_string');
        wireTextBoxes(collaborativeString);
      }

      // Connects the text boxes to the collaborative string
      function wireTextBoxes(collaborativeString) {
        var textArea1 = document.getElementById('text_area_1');
        var textArea2 = document.getElementById('text_area_2');
        gapi.drive.realtime.databinding.bindString(collaborativeString, textArea1);
        gapi.drive.realtime.databinding.bindString(collaborativeString, textArea2);
      }
    </script>
    <link rel="stylesheet" href="/css/chat.css">
    </head>
    <body>
    	<div id="container">
    	<h1>Chat</h1>
    	<div id="talkField">
    		<div id="result"></div>
    		<br class="clear_balloon"/>
    		<div id="end"></div>
    	</div>
    	<div id="inputField">
    		<p>
    			Name: <input type="text" name="user" id="user">
    			Message: <input type="text" name="message" id="message">
    			<input type="button" id="greet" value="send">
    		</p>
    	</div>
    	</div>
    	<script src="/js/jquery-2.1.4.min.js"></script>
    	<script src="/js/chat.js"></script>
  </body>
</html>