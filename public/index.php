<?php

$paginas = ["home"=>"", "sobre"=>""];

$paginas["home"] = "<p>Inicio do Site</p>";

$paginas["sobre"] = "<p>Sobre mim</p>";

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de aprendizado dinamico</title>
    <meta charset="utf-8">
    <style>
      * {
          margin: 0;
          box-sizing: border-box;
          padding: 0;
          font-family: sans-serif;
      }
      header {
          height: 50px;
          background-color: #068;
          display: flex;
          align-items: center;
          justify-content: center;
          text-align: center;
          gap: 40px;
      }
      
      section {
          max-width: 960px;
          margin: 20px auto;
          padding: 0 2%;
      }
      
      h2 {
          color: white;
          padding: 8px 10px;
          background-color: #068;
          border-radius: 6px;
      }
      
      a {
          margin: 0 10px;
          color: white;
          text-decoration: none;
          transition: 0.5s;
      }
      
      a:hover {
          color: #ccf;
          text-decoration: underline;
      }
      
      p {
          margin-top: 10px;
          font-size: 15pt;
      }
    </style>
  </head>
  <body>
    <header>
      <?php
      
      foreach($paginas as $key => $value){
          echo "<a href='?page=$key'>".ucfirst($key)."</a>";
      }
    
      ?>
    </header>
    <section>
      <h2><?php
        
        $pagina = (isset($_GET["page"]) ? $_GET["page"] : "home");
        
        if(!array_key_exists($pagina, $paginas)){
            $pagina = "home";
        }
        
        echo ucfirst($pagina);
        
      ?></h2>
      <p><?php echo $paginas[$pagina]; ?></p>
    </section>
  </body>
</html>
