<?
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

<div class="container">
  <form action="censor.php" method="POST" class=" mt-5 pt-5">
    <fieldset class="rounded-3 px-5 pb-5 pt-3 d-flex form-row gap-3 align-items-end" style="border:2px solid #436bff4a">
      <legend class="fs-3 text-capitalize float-none w-auto rounded-5 px-4 py-1 text-light" style=" background-color:#3288ff;">censura</legend>


    <label class="col-8" for="censor_text">inserisci il testo da censurare:
      <input type="text" id="censor_text" name="censor_text" class="form-control" placeholder="aggiungi un paragrafo">
    </label>
    <label class="col flex-fill">scegli la parola da censurare:
      <input type="text" id="censor_word" name="censor_word" class="form-control" placeholder="parola">
    </label>
    <div class="col" for="censor_word">
      <button type="text" class="form-control btn btn-primary" placeholder="Zip">Censura!</button>
</div>

  </div>

    </fieldset>
  </form>
</div>




</body>

</html>