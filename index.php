<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tarea #2 </title>
</head>

<body background="Imagen/imagen1.jpg">
    <center>
        <form id=" forme1" name="forme1" method="POST" action="index.php">
            <div>
                <br>
                <table style="text-align: center; width:30%; border-color:coral;" border="1px">
                    <tr>
                        <td style="color:black"><h3> Calcular el Area y Perimetro de un triangulo</h3>
                        </td>
                    </tr>
                </table>
            </div>
            <br>
            <div>
                <br>
                <table style="text-align: center; width:30%; border-color:rosybrown;" border="1px">
                    <tr>
                        <td style="color:coral"> <h3>Ingresar Valores</h3> </td>
                    </tr>
                </table> 
            </div>
            <div>
                <table style="text-align: center; width:30%; border-color: coral;" border="1px">
                    <tr>
                        <td style="color:black">Altura
                        </td>
                        <td><input type="number" id="idAlt" name="idAlt"></td>
                    </tr>
                    <tr>
                        <td style="color: black">Base
                        </td>
                        <td><input type="number" id="idbase" name="idbase"></td>
                    </tr>
                    <tr>
                        <td style="color: black">Lado 1
                        </td>
                        <td><input type="number" id="idlado1" name="idlado1"></td>
                    </tr>
                     <tr>
                        <td style="color: black">Lado 2
                        </td>
                        <td><input type="number" id="idlado2" name="idlado2"></td>
                    </tr>
                    <tr>
                        <td style="color: black">Lado 3
                        </td>
                        <td><input type="number" id="idlado3" name="idlado3"></td>
                    </tr>
                </table><br>
             </div>
                <table style="text-align:center">
             
                    <td style="text-align: center"><button type="submit" id="btnenviar1" name="btnenviar1" style="
                   color: black;background-color:window;width:200%"><h3>Calcular</h3></button>
                    </td>
                     
                </table>
        </form>
         <?php
        $Area = "";
        $Perimetro = "";
        $Altura = "";
        $Base=  "";
        $Lado1="";
       $Lado2="";
       $Lado3="";
        $Altura = $_POST["idAlt"];
        $Base = $_POST["idbase"];
        $Lado1 = $_POST["idlado1"];
        $Lado2 = $_POST["idlado2"];
        $Lado3 = $_POST["idlado3"];
        $Area = ($Base * $Altura) / 2;
        $Perimetro = ($Lado1+$Lado2+$Lado3);
        ?>
        <br>
        <Center>
            <div>
                <table style="text-align: center; width:28.5%; border-color:coral;" border="4px">
                    <tr>
                        <td style="color: blueviolet">
                            <?php
                          echo "El area es: $Area";
                          ?>
                        </td>
                    </tr>
                </table>
            </div>
            <div>
                <table style="text-align: center; width:28.5%; border-color:coral;" border="4px">
                    <tr>
                        <td style="color: blueviolet">
                            <?php
                          echo "El Perimetro es: $Perimetro";
                          ?>
                        </td>
                    </tr>
                </table>
            </div>
    </center>
    </body>
    </html>


