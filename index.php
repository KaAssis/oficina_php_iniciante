<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Oficina PHPWomen</title>
    </head>

    <body>
                        
        <?php

           $cor = "amarelo"; //para comnentar
           /*$cor = "vermelho"; //só vai aparecer a última linha*/
            /*echo $cor;*/
      
     
            /*var_dump($cor);
      
            var_dump("Olá");
      
            var_dump(23.482);
     
            var_dump(array("maça", "uva", "coco"));*/
      
      /*$nome = "Ana";
      echo "Olá". $nome . "!"; */
      
      
         /* $a = 3;
          $b = 5;
     
      
         $resultado = $a + $b;
            $resultado = $a * $b;
            $resultado = $a / $b;
            $resultado = $a % $b;
            
            echo $resultado;*/
      
      /*$a = 5;
      $b = 2;
      
      if ($a>$b) {
        echo "a é maior que b";
      } else if($a == $b) {
        echo "a é igual a b";
      } else {
        echo "a é menor que b";
      }*/
      
        //aqui dentro de () vem a condição
      
     /* $a = 1;
      $b = 3;
      
      if ($a > $b) {
        echo "a maior que b";
      } else if ($a == $b) {
        echo "a é igual ab";
      } else {
      echo "a é menor que b;
      }
      --------
      if ($a == $b) {
        echo "a igual b";
      } else {
        "a diferente de b"
      }*/
      
      
      
      /*$i = 1;
      
      while($i <= 10) {
        $i = $i + 1;
        echo $i . "<br>";
      }*/
      
      /*$i = 1;
      
      while($i < 10) {
        $i = $i + 1;
        if($i%2 == 0) {
          echo "$i é par<br>"; //você pode também concatenar ".$i."
        } else {
          echo "$i é ímpar<br>";
        } 
      }*/
      
      // é um comentário de uma linha só
      
      /*for($i=1; $i < 10; $i++) { //$i++ = $i = $i + 1
        echo "o valor de i é: $i<br>";
      }*/
      
      /*$nome = "Karina";
      
      switch ($nome) {
      case "Ana";
      echo "olá Ana";;
          break;
          
          
      case "Pedro";
          echo "Olá Pedro";
          break;// não repete a regra infinitamente
          
        default: 
          echo "Não sei quem vocé é.";
      }*/
      
      
      /*function soma($a, $b) {
        $resultado = $a + $b;
        return $resultado;
      }
      
      $numero1 = 23;
      $numero2 = 20;
      
      $resultadoFuncao = soma($numero1, $numero2);
      
      echo $resultadoFuncao;*/
      
      /*function soma($a, $b) {
        $resultado = $a + $b;
        return $resultado;
      }
      
      $numero1 = 1;
      $numero2 = 5;
      
      $resultadoTotal = soma($numero1, $numero2);
      
      echo $resultadoTotal;*/
      
     
       /*function soma($a, $b) {
        $resultado = $a + $b;
        return $resultado;
      }
      
      $numero1 = 7;
      $numero2 = 8;
      
      $resultadoTotal = soma($numero1, $numero2);
      
      echo $resultadoTotal;*/
      
      
        /*function soma($a, $b) {
        $resultado = $a + $b;
        return $resultado;
      }
      
      $numero1 = 10.2;
      $numero2 = 6;
      
      $resultadoTotal = soma($numero1, $numero2);
      
      echo $resultadoTotal;*/
      
      /*$cores = ["vermelho", "azul", "verde", "rosa"];
      echo $cores[3];*/
      
      /*$pessoa = ["nome" => "Ana", "idade" => 23, "endereço" => "carlos gomes, 263"];
      echo $pessoa ["endereço"];*/
      
     /* $numeros = [1, 2, 3, 4];
      array_push($numeros, 3);
      echo $numeros[4];*/
      
      /*$frutas = array(“maça”, “pera”, “uva”, “banana”, “morango”);

        foreach($frutas as $fruta) {
        echo “A fruta é" . $fruta . "<br>”;
         }*/
      
      $comidas = array("brigadeiro", "pipoca", "sorvete", "açaí");
      foreach($comidas as $comida){
        echo "$comida<br>";
      }
      
      array_push($comidas, "sopa de cebola");
      
      foreach($comidas as $comida){
      echo "$comida<br>";
      }
       array_pop($comidas);
     
      foreach($comidas as $comida){
        echo "$comida<br>";
      }
      
      
      
      
        ?>
      

    </body>
</html>