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
        if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])){
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
            $x1 = $x2 = 0;
            $test = ptb2($a,$b,$c,$x1,$x2);
            
                    
        }
        function ptb2($a, $b, $c, $x1, $x2){
            $d = $b * $b - 4 * $a * $c;
            if($d < 0){
                 $x1 = "PTVN";
                return 0;
            }
               
            elseif ($d == 0){
                 $x1 = -$b /(2 * $a);
                 return 1;
                
            }
               
            else {
                $x1 = (-$b + sqrt($d))/(2*$a);
                $x2 = (-$b - sqrt($d))/(2*$a);
                return 2;

            }
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
                           value="<?php if (isset($test)){
                                if ($test == 0) echo 'PTVN'; 
                                elseif ($test == 1) echo 'x1 = '.$x1; 
                                else echo 'x1 = '. $x1 .' x2 = '.$x2;
                           }  ?>" /></tr>
                <tr>
                    <td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>
