<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        <h1>Hello, {{$Name}}!</h1>
        <p>Thank you for contacting TruckJee. Our expert team would get back to you soon.</p>
        <br><br><br>
        <p>This is an automatically generated e-mail. Please do not respond to this mail.</p>
        <p>TruckJee <br>
            AH-16, Shanthi Colony,<br>
            Anna Nagar,<br>
            Chennai - 600040.<br>
            044 42127143<br>
            info@truckjee.com<br>
        </p>
    </div>
  </body>
</html>