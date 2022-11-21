
<?php
if (!isset($_COOKIE['status'])) {
  header('location: login.php');
}
?>

<html>
<head>

    <title>Admin panel</title>
</head>
<style>
    body {
        background-image: url('/safin_part/post.jpg');
        background-size: cover;
        margin: 0;
    }
    table {
        border: 10px solid #FFFFFF;
        border-top: 0;
        color: blue;
        font-family: 'Monoton', cursive;
        height: 100vh;
        width: 100%;
    }
    a {
        color: #FFFFFF;
        font-size: 25px;
        text-decoration: none;
    }
    .header {
        border: 10px solid #FFFFFF;
        font-size: 75px;
        height: 30px;
        text-align: center;
    }
   
   
  
    form {
        text-align: center;
    }
    fieldset {
        background-color:gray;
        font-size: 25px;
        font-family: 'Open Sans', sans-serif;
        text-align: left;
    }
    input {
        width: 100%;
    }
    textarea {
        width: 100%;
        height: 150px;
    }
   
    input[type = 'submit'] {
        font-size: 30px;
        border: 5px solid gray;
        background-color: gray;
        color: blue;
    }
    input[type = 'submit']:hover {
        background-color:gray;
        color: black;
    }

</style>
<body>
    <table class="header">
        <tr>
            <td>TiffinBox</td>
        </tr>
</table>
<table>
        
            <td >
                <form action="upload.php" method="POST"  enctype="multipart/form-data" >
                    <fieldset>
                        <p class="subheader">Publish posts</p>
                        <hr>
                        <label for="caption">Caption : </label>
                        <hr>
                        <textarea name="caption" id="caption"></textarea>
                        <hr>
                        <label for="iamge">Image : </label>
                        <hr>
                        <input type="file" name="image" id="image">
                        <hr>
                        <input type="submit" value="Post">
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
