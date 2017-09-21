    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="~/Scripts/AssetsBS3/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/Scripts/AssetsBS3/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .red{
      color:red;
    }
    </style>
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" action="insert.php" method="post">
        <h2 class="form-signin-heading">帳號申請</h2>
        <label for="inputAccount" class="sr-only">Account</label>
        <input type="Account" name="account" id="inputAccount" class="form-control" placeholder="輸入您的帳號" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="輸入您的密碼" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 記住我
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">註冊</button>
      </form>

    <!--</div> <!-- /container -->
    <!--<div class="alert alert-danger" role="alert">
    <strong>Same Acoount have been registered! </strong> Change another account name and try submitting again.
    </div>-->
   


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/Scripts/AssetsBS3/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

