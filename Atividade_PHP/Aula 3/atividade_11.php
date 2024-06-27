<html>
    <body>
        <?php
            $nome = "fulano";

            switch($nome)
            {
                case "fulano": 
                    echo "E ai fulano!";
                break;
                case "Sicrano": 
                    echo "E ai Sicrano!";
                break;
                case "Beltranho": 
                    echo "E ai Beltrano!";
                break;
                default: 
                    echo "Qual o seu nome?";
                break;                
            }
        ?>
    </body>
</html>