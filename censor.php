<?
$userWord = $_POST['censor_word'];
$userText = $_POST['censor_text'];
$textCensored = str_replace($userWord, "xxx", $userText);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- indispensabile per far funzionare le media-queries -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>PHP HELLO</title>


  <!-- font-family: 'Roboto', sans-serif; -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <!-- font-family: fontawesome -->
  <script src="https://kit.fontawesome.com/a19b158346.js" crossorigin="anonymous"></script>

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>


<body>
  <div class="container position-relative mt-5 pt-5">
    <div class="rounded-3 px-5 pb-5 pt-3" style="border:2px solid #436bff4a">

      <h3 class="text-center p-3">
        <span class="">Parola da cesnurare:</span>
        <span class="text-uppercase"><? echo $userWord ?></span>
      </h3>

      <div class="row">

        <div class="col">
          <h2 >Testo da cesnurare inserito:</h2>
          <p><? echo $userText ?></p>
          <div>
            <h5>lunghzza paragrafo originale:</h5><? echo strlen($userText) ?>
          </div>

        </div>
        <div class="col">
          <h2>Testo censurato:</h2>
          <p><? echo $textCensored; ?></p>

          <div>
            <h5>lunghzza paragrafo censurato:</h5><? echo strlen($textCensored) ?>
          </div>
        </div>
      </div>





    </div>
  </div>
</body>

</html>