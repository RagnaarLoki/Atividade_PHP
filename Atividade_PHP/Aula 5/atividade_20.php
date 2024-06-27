<!DOCTYPE html>
<html>
    <body>
        <form id="formCadastro" name="formcadrastro" method="post" action="recebeform.php">
            <b>Qual seu sistema operacional</b><br>
            <input type=radio name=sistema value="windows 8.1"> win 98 <br>
            <input type=radio name=sistema value="windows 10"> win xp <br>
            <input type=radio name=sistema value="Linux"> Linux <br>
            <input type=radio name=sistema value="Mac"> Mac <br> <br>

            <b>Qual seu sistema operacional</b>
            <input type=checkbox name="numeros[]" value=10> 10 <br>
            <input type=checkbox name="numeros[]" value=100> 100 <br>
            <input type=checkbox name="numeros[]" value=1000> 1000 <br>

            <b>Qual seu processador?</b><br>
            <select name=processador>
            <option value=pentium>pentium</option>
            <option value=amd>amd</option>
            <option value=celeron>celeron</option>
            </select><br><br>
            <input id="botaoEnviar" type="submit" value="Enviar">


        </form>
    </body>
</html>