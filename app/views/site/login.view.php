<?php
session_start();
require_once 'app/views/include/LoginView.php';
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>batcavrna</title>
    <link rel="stylesheet" href= "../../../public/css/login.css"/>
    <sript src="../../../public/js/index.js"></sript>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="principal">
      <div id="batc"><img src="../../../public/assets/batcaverna2.png" ></div>
      <div class="simbolo"><img src="../../../public/assets/sb.png" ></div>
        <div class="segundaria">  
            <div class="alfred"><img src="../../../public/assets/alfred.png" ></div> 
            <div class="ptres">      
      <div class="bv"><p class="hbv">Bem Vindo(a) à BATCAVERNA!</p></div>
      <div class="login">
        <form class="formulario" action="/login" method="post">
            <div class="name">  <input type="text" name="username" placeholder="e-mail" /> <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="#747272" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 2a2 2 0 0 0-2 2a2 2 0 0 0 2 2a2 2 0 0 0 2-2a2 2 0 0 0-2-2m0 7c2.67 0 8 1.33 8 4v3H4v-3c0-2.67 5.33-4 8-4m0 1.9c-2.97 0-6.1 1.46-6.1 2.1v1.1h12.2V17c0-.64-3.13-2.1-6.1-2.1"/></svg> </div>
           <div class="name"> <input type="password" name="pwd" placeholder="senha" /><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16"><path fill="#c8c1c1" d="M14.78.22a.75.75 0 0 0-1.061 0L10.56 3.379a8.815 8.815 0 0 0-2.561-.378c-3.489 0-6.514 2.032-8 5a9.176 9.176 0 0 0 2.703 3.236L.218 13.721a.75.75 0 0 0 1.06 1.061l13.5-13.5a.75.75 0 0 0 0-1.061zM6.5 5a1.5 1.5 0 0 1 1.421 1.019L6.019 7.921A1.5 1.5 0 0 1 6.5 5M1.721 8a7.594 7.594 0 0 1 2.52-2.462A3.981 3.981 0 0 0 4 6.907c0 .858.27 1.652.73 2.303l-.952.952A7.625 7.625 0 0 1 1.721 8M12 6.906c0-.424-.066-.833-.189-1.217l-5.028 5.028A4 4 0 0 0 12 6.906"/><path fill="#c8c1c1" d="m12.969 4.531l-1.084 1.084l.059.037c.94.6 1.737 1.403 2.335 2.348a7.594 7.594 0 0 1-2.335 2.348a7.326 7.326 0 0 1-5.725.933l-1.201 1.201A8.808 8.808 0 0 0 8 13c3.489 0 6.514-2.032 8-5a9.142 9.142 0 0 0-3.031-3.469"/></svg> </div>
            <button class="buttonred"type="submit" name="submit">Login<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="white" d="M.75 8S5 7 8 9c0 0 .5 3.75 2.5 3.75V11s.5 1 1.5 1s1.5-1 1.5-1v1.75C15.5 12.75 16 9 16 9c3-2 7.25-1 7.25-1c-2 1-2.25 4.5-2.25 4.5c-4 0-4 3.25-4 3.25c-5-1-5 2.75-5 2.75s0-3.75-5-2.75c0 0 0-3.25-4-3.25C3 12.5 2.75 9 .75 8"/></svg></button>
        </form>
          <p class = "errormsg">
        <?php
        check_login_erros();
        ?>
        </p>
      </div>
      </div>
    </div>
  </body>
</html>