<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function ptb1($a, $b) {
            if ($a == 0) {
                if ($b == 0)
                    $x = "PTVSN";
                else
                    $x = "PTVN";
            }
            else {
                $x = "x = round(-($b/$a),2";
            }
            return $x;
        }

        function ptb2($a, $b, $c) {
            if ($a == 0)
                $x = ptb1($b, $c);
            else {
                $d = $b * $b - (4 * $a * $c);
                if ($d < 0) {
                    $x = "PTVN";
                } elseif ($d == 0) {
                    $x = "x = " . -($b / 2 * $a);
                } else {
                    $x1 = (-$b + sqrt($d)) / (2 * $a);
                    $x2 = (-$b - sqrt($d)) / (2 * $a);
                    $x = "x1 = " . round($x1, 2) . " ,x2 = " . round($x2, 2);
                }
                return $x;
            }
        }
        
        if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
            
            $x = ptb2($_POST["a"], $_POST["b"], $_POST["c"]);
        }
        ?>
        <form action="bai5.php" method="post" >
            <table width="806" border="1">
                <tr>
                    <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
                </tr>
                <tr>
                    <td width="83">Phương trình </td>
                    <td width="236">
                        <input name="a" type="text" />
                        X^2 + </td>
                    <td width="218"><label for="textfield3"></label>
                        <input type="text" name="b" id="textfield3" />
                        X+</td>
                    <td width="241"><label for="textfield"></label>
                        <input type="text" name="c" id="textfield" />
                        =0</td>
                </tr>
                <tr>
                    <td colspan="4">
                        Nghiệm  
                        <label for="textfield2"></label>
                        <input name="textfield" type="text" id="textfield2" width="400" 
                               value="<?php  if (isset($x)) echo $x;  ?>" /></tr>
                <tr>
                    <td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>
