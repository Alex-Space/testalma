<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
  <meta name="viewport" content="minimal-ui">
  <!-- Apple device hack starts -->
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
  <!-- Apple device hack ends -->
  <meta name="format-detection" content="telephone=no">
  
  <meta name="keywords" content="" />
  <meta name="description" content="Описание сайта для поисковых систем">
  <title>TEST</title>

  <link rel="icon" href="favicon.ico">
  <link href="css/style.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
  <?php  if ($_SESSION["res"]) {
  echo $_SESSION["res"];
  unset($_SESSION["res"]);
  }
  ?>

  <div class="blabla">
    <a href="#">Link</a>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem, labore deleniti natus consectetur saepe necessitatibus, rerum vel eligendi ab nam hic at totam adipisci veritatis dignissimos ad dolorum voluptate.
    </p>
  </div>
  <p class="veritati">Ой все.</p>
  <!-- sctipt area begin  -->
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/scripts.js"></script>
  <!-- sctipt area end  -->
  
</body>
</html>