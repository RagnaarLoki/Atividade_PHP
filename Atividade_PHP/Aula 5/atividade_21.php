<html>
    <body>
        <?php
        echo"<b>Seu sistema operacional é: </b>" . $_POST["sistema"] . "<br><br>";

        if(isset($_POST["numeros"]))
        {
            echo "<b>Os números de sua preferência são:</b><br>";
            foreach($_POST["numeros"]as$numero)
            {
                echo "- " . $numero . "<BR><br>";
            }
        }
        else
        {
            echo "<b>Você não escolheu número preferido!</b><br><br>";
        }
        echo "<b>seu processador é: </b>" . $_POST["processador"] ."<BR>";       
        ?>
    </body>
</html>