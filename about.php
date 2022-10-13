<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
    crossorigin="anonymous">
    <title>PHP сайт</title>
  </head>
  <body>

   <?php require 'blocks/header.php'; ?>

   <div class="container mt-5">
     <h3>Контактна форма</h3>
     <form action="check.php" method="post">
       <input type="email.php" name="email" placeholder="Введіть Email" class="form-control"><br>
       <textarea name="message" class="form-control" placeholder="Введіть ваше повідомлення"></textarea><br>
       <button type="submit" name="send" class="btn btn-success">Відправити</button>
     </form>
   </div>

   </form>

   <?php require 'blocks/footer.php'; ?>

 </header>
  </body>
</html>
