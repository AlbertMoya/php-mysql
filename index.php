<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
    </head>
    <body>
        <h1>Code PHP</h1>
        <?php
            // echo "Hello!"
            // $texto = "Vamos";
            // $numero1 = 1;
            // $numero2 = 2;

            // Tipos de Datos
        //     $x = "Primero";
        //     $y = "Datos";

        //     echo $x;
        //     echo "<br>";
        //     echo $y;
        
        // class Carro{
        //     public $color;
        //     public $model;
        //     public function __construct($color, $model){
        //         $this->color = $color;
        //         $this->model = $model;
        //     }
        //     public function mensaje(){
        //         return "Mi carro es un " . $this->model . " " . $this->color . "!";
        //     }
        // }

        // $miCarro = new Carro("negro", "Volvo");
        // echo $miCarro -> mensaje();
        
            // echo(min(0, 150, 30, 20, -8, -200));
            // echo "<br>";
            // echo(max(0, 150, 30, 20, -8, -200));


            $colorFavorito = "Verde";

            switch($colorFavorito){
                case "Verde": 
                    echo "Tu color favorito es Verde";
                    break;
                case "Azul": 
                    echo "Tu color favorito es Azul";
                    break;
                case "Rojo": 
                    echo "Tu color favorito es Rojo";
                    break;
                case "Negro": 
                    echo "Tu color favorito es Negro";
                    break;
                default: "Tu color favorito NO es ni Verde, ni Azul, ni Rojo, ni Negro";                 
            }
        ?>
    </body>
</html>