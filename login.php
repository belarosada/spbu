<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login Admin</title>

    <link rel="stylesheet" href="css/style_login.css" media="screen" type="text/css" />

</head>

<body>

  <html lang="en-US">
<head>

	<meta charset="utf-8">

</head>

<body>

    <div id="login-form">

        <h3>Login admin</h3>
        <fieldset>

            <form action="action/proses_login.php" method="post">

                <input name="username" type="text" required id="username" onFocus="if(this.value=='Username')this.value='' " onBlur="if(this.value=='')this.value='Username'" value="Username"> <!-- JS because of IE support; better: placeholder="Email" -->

                <input name="password" type="password" required id="password" onFocus="if(this.value=='Password')this.value='' " onBlur="if(this.value=='')this.value='Password'" value="Password"> <!-- JS because of IE support; better: placeholder="Password" -->

                <input type="submit" value="Login">

                <footer class="clearfix">

                  

              </footer>

            </form>

        </fieldset>

    </div> <!-- end login-form -->

</body>
</html>

  <script src='http://codepen.io/assets/libs/fullpage/none.js'></script>

</body>

</html>