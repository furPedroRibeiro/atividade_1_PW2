<html>
  <head>
    <meta charset="UTF-8" />
    <meta lang="pt-br" />
    <title>Formulário</title>
    <style>
      span {
        color: yellowgreen;
      }
    </style>
  </head>
  <body>
    <form action="" method="GET">

      <span>Digite a medida do 1° lado do triângulo: </span>
      <input type="number" name="lado1" placeholder="Ex: 22" />
      <br><br>
      <span>Digite a medida do 2° lado do triângulo: </span>
      <input type="number" name="lado2" placeholder="Ex: 18" />
      <br><br>
      <span>Digite a medida do 3° lado do triângulo: </span>
      <input type="number" name="lado3" placeholder="Ex: 25" />
      <br><br>
    
      <button>Enviar fds</button>
    </form>
    <?php
    if($_GET['lado1']>0 && $_GET['lado2']>0 && $_GET['lado3']>0){
      if($_GET['lado1'] == $_GET['lado2'] && $_GET['lado2'] == $_GET['lado3']){
        echo '<br>'.('É um triângulo equilátero: ').'<br><br><img src="http://4.bp.blogspot.com/-X1JefSkbg-M/UwyDcfGoamI/AAAAAAAABog/91stHygx4hE/s1600/tri%C3%A2ngulo+equil%C3%A1tero.png" alt="">';
      } else if($_GET['lado1'] == $_GET['lado2'] && $_GET['lado2'] != $_GET['lado3']){
        echo '<br>'.('É um triângulo isósceles: ').'<br><br><img src="https://static.preparaenem.com/2021/06/2-propriedade-1-angulos.jpg" alt="">';
      } else if($_GET['lado1'] != $_GET['lado2'] && $_GET['lado2'] != $_GET['lado3']){
        echo '<br>'.('É um triângulo escaleno: ').'<br><br><img src="https://s4.static.brasilescola.uol.com.br/be/2021/06/ex.jpg" alt="">';
      }
    }
    else{
      echo '<br>'.('Não é um triângulo ;-; <br> Tente novamente');
    }
    ?>
  </body>
</html>
