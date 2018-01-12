<?php
$link = mysqli_connect("127.0.0.1", "root", "", "rsvp");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <script type="text/javascript" src="https://use.typekit.net/hqe8byh.js"></script>
  <script type="text/javascript">
    try {
      Typekit.load({
        async: true
      });
    } catch (e) {}
  </script>
  <script type="text/javascript"
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="/js/all.js"></script>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="/css/tachyons.css">
  <link rel="stylesheet" type="text/css" href="http://unpkg.com/tachyons-rotations@1.0.4/css/tachyons-rotations.min.css" />
  <title>RSVP – El &amp; Meg's Wedding</title>
</head>
<body>
 <main class="pa4 black-80">
  <form class="measure center" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
    <fieldset id="sign_up" class="ba b--transparent ph0 mh0">
      <legend class="f4 fw6 ph0 mh0">RSVP</legend>
      <div class="mt3">
        <label class="db fw6 lh-copy f6" for="email-address">Email</label>
        <input class="pa2 input-reset ba bg-transparent hover-bg-black hover-white w-100" type="email" name="email-address"  id="email-address">
      </div>
    </fieldset>
    <div class="">
      <input class="b ph3 pv2 input-reset ba b--black bg-transparent grow pointer f6 dib" type="submit" value="Submit">
    </div>
  </form>
</main> 
</body>
</html>
