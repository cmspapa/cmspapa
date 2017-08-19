<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CMSPAPA</title>

    <!-- Bootstrap -->
    <link href="/themes_start_assets/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
     /* body{
        background-color: #673AB7;
        color:#fff;
      }*/
      .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
          border: 1px solid #fff;
          background: #eee;
      }

      footer {
        background-color: #f2f2f2;
        padding: 25px;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
	<div id="app">
  
  <structure></structure>
  </div>
	<script type="text/javascript">
		// Send objects to Vue
		var vueComponents = {!! json_encode($vueComponents) !!};
	</script>
	<script src="/js/app.js"></script>
</body>
</html>