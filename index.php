<!DOCTYPE html>
<?php 
   include_once "conf/default.inc.php";
   require_once "conf/Conexao.php";
   $title = "Atividade Prática";
   $procurar = isset($_POST["procurar"]) ? $_POST["procurar"] : "";
   $tipo = isset($_POST["tipo"]) ? $_POST["tipo"] : 1;
   ini_set('display_errors', 0 );error_reporting(0);  
?>
<html>
<head>

</head>
<body>
    <meta charset="UTF-8">
    <title> <?php echo $title; ?> </title>

    <form method="post">
        <fieldset>
            <legend>Vendas</legend>
            <input type="text"   name="procurar" id="procurar" size="37" value="<?php echo $procurar;?>">
            <input type="submit" name="acao"     id="acao" >
            <input type="radio"   name="tipo" size="37" value="1" <?php if($tipo == 1) echo 'checked'?>>Nome
            <input type="radio"   name="tipo" size="37" value="2" <?php if($tipo == 2) echo 'checked'?>>Salário Fixo

            <br><br>
            <table border="1">
            <tr><th>Código</th>
                <th>Nome</th>
                <th>Janeiro</th>
                <th>Comisão de Janeiro</th>
                <th>Fevereiro</th>
                <th>Comisão de Fevereiro</th>
                <th>Março</th>
                <th>Comisão de Março</th>
                <th>Abril</th>
                <th>Comisão de Abril</th>
                <th>Maio</th>
                <th>Comisão de Maio</th>
                <th>Junho</th>
                <th>Comisão de Junho</th>
                <th>Julho</th>
                <th>Comisão de Julho</th>
                <th>Agosto</th>
                <th>Comisão de Agosto</th>
                <th>Setembro</th>
                <th>Comisão de Setembro</th>
                <th>Outubro</th>
                <th>Comisão de Outubro</th>
                <th>Novembro</th>
                <th>Comisão de Novembro</th>
                <th>Dezembro</th>
                <th>Comisão de Dezembro</th>
                <th>Salário</th>
                <th>Data de Contratação</th>
                <th>Valor de vendas por ano</th>
                <th>Tempo em anos</th>
                <th>Bônus</th>
            </tr>

            <?php
                $pdo = Conexao::getInstance();

                if($tipo == 1) {
                     $consulta = $pdo->query("SELECT * FROM venda 
                                                WHERE nome LIKE '$procurar%' 
                                                ORDER BY nome");  
                } 
                 elseif($tipo == 2) {
                    $consulta = $pdo->query("SELECT * FROM venda 
                                                WHERE fixo<=  '$procurar%' 
                                                ORDER BY fixo");
                }

                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {     
                        $totalvendas = $linha['janeiro'] + $linha['fevereiro'] + $linha['marco'] + $linha['abril'] + $linha['maio'] + $linha['junho'] + $linha['julho'] + $linha['agosto'] + $linha['setembro'] + $linha['outubro'] + $linha['novembro'] + $linha['dezembro'];
                        $com1 = $linha['janeiro'] * 0.03;
                        $com2 = $linha['fevereiro'] * 0.03;
                        $com3 = $linha['marco'] * 0.03;
                        $com4 = $linha['abril'] * 0.03;
                        $com5 = $linha['maio'] * 0.03;
                        $com6 = $linha['junho'] * 0.03;
                        $com7 = $linha['julho'] * 0.03;
                        $com8 = $linha['agosto'] * 0.03;
                        $com9 = $linha['setembro'] * 0.03;
                        $com10 = $linha['outubro'] * 0.03;
                        $com11 = $linha['novembro'] * 0.03;
                        $com12 = $linha['dezembro'] * 0.03;
                        $hoje = date("Y");
                        $fab = date("Y", strtotime($linha['dataContratacao']));
                        $anos = $hoje - $fab;
                        $bonus = $anos * 50;
                        if ($anos >= 10)
                            $cor = "blue";
                        //janeiro
                        if ($linha['janeiro'] < 5000)
                            $cor1 = "red";
                        elseif ($linha['janeiro'] > 10000)
                            $cor1 = "blue";
                        else
                            $cor1 = "";
                        //fevereiro
                        if ($linha['fevereiro'] < 5000)
                            $cor2 = "red";
                        elseif ($linha['fevereiro'] > 10000)
                            $cor2 = "blue";
                        else
                            $cor2 = "";
                        //março
                        if ($linha['marco'] < 5000)
                            $cor3 = "red";
                        elseif ($linha['marco'] > 10000)
                            $cor3 = "blue";
                        else
                            $cor3 = "";
                        //abril
                        if ($linha['abril'] < 5000)
                            $cor4 = "red";
                        elseif ($linha['abril'] > 10000)
                            $cor4 = "abril";
                        else
                            $cor4 = "";
                        //maio
                        if ($linha['maio'] < 5000)
                            $cor5 = "red";
                        elseif ($linha['maio'] > 10000)
                            $cor5 = "blue";
                        else
                            $cor5 = "";
                        //junho
                        if ($linha['junho'] < 5000)
                            $cor6 = "red";
                        elseif ($linha['junho'] > 10000)
                            $cor6 = "blue";
                        else
                            $cor6 = "";
                        //julho
                        if ($linha['julho'] < 5000)
                            $cor7 = "red";
                        elseif ($linha['julho'] > 10000)
                            $cor7 = "blue";
                        else
                            $cor7 = "";
                        //agosto
                        if ($linha['agosto'] < 5000)
                            $cor8 = "red";
                        elseif ($linha['agosto'] > 10000)
                            $cor8 = "blue";
                        else
                            $cor8 = "";
                        //setembro
                        if ($linha['setembro'] < 5000)
                            $cor9 = "red";
                        elseif ($linha['setembro'] > 10000)
                            $cor9 = "blue";
                        else
                            $cor9 = "";
                        //outubro
                        if ($linha['outubro'] < 5000)
                            $cor10 = "red";
                        elseif ($linha['outubro'] > 10000)
                            $cor10 = "blue";
                        else
                            $cor10 = "";
                        //novembro
                        if ($linha['novembro'] < 5000)
                            $cor11 = "red";
                        elseif ($linha['novembro'] > 10000)
                            $cor11 = "blue";
                        else
                            $cor11 = "";
                        //dezembro
                        if ($linha['dezembro'] < 5000)
                            $cor12 = "red";
                        elseif ($linha['dezembro'] > 10000)
                            $cor12 = "blue";
                        else
                            $cor12 = "";
            ?>

            <tr>
                <td><?php echo $linha['id'];?></td>
                <td><?php echo $linha['nome'];?></td>   
                <td style="color:<?php echo $cor1; ?>;"><?php echo number_format($linha['janeiro'], 1, ',', '.');?></td>
                <td><?php echo number_format($com1, 1, ',', '.');?></td>
                <td style="color:<?php echo $cor2; ?>;"><?php echo number_format($linha['fevereiro'], 1, ',', '.');?></td>
                <td><?php echo number_format($com2, 1, ',', '.');?></td>
                <td style="color:<?php echo $cor3; ?>;"><?php echo number_format($linha['marco'], 1, ',', '.');?></td>
                <td><?php echo number_format($com3, 1, ',', '.');?></td>
                <td style="color:<?php echo $cor4; ?>;"><?php echo number_format($linha['abril'], 1, ',', '.');?></td>
                <td><?php echo number_format($com4, 1, ',', '.');?></td>
                <td style="color:<?php echo $cor5; ?>;"><?php echo number_format($linha['maio'], 1, ',', '.');?></td>
                <td><?php echo number_format($com5, 1, ',', '.');?></td>
                <td style="color:<?php echo $cor6; ?>;"><?php echo number_format($linha['junho'], 1, ',', '.');?></td>
                <td><?php echo number_format($com6, 1, ',', '.');?></td>
                <td style="color:<?php echo $cor7; ?>;"><?php echo number_format($linha['julho'], 1, ',', '.');?></td>
                <td><?php echo number_format($com7, 1, ',', '.');?></td>
                <td style="color:<?php echo $cor8; ?>;"><?php echo number_format($linha['agosto'], 1, ',', '.');?></td>
                <td><?php echo number_format($com8, 1, ',', '.');?></td>
                <td style="color:<?php echo $cor9; ?>;"><?php echo number_format($linha['setembro'], 1, ',', '.');?></td>
                <td><?php echo number_format($com9, 1, ',', '.');?></td>
                <td style="color:<?php echo $cor10; ?>;"><?php echo number_format($linha['outubro'], 1, ',', '.');?></td>
                <td><?php echo number_format($com10, 1, ',', '.');?></td>
                <td style="color:<?php echo $cor11; ?>;"><?php echo number_format($linha['novembro'], 1, ',', '.');?></td>
                <td><?php echo number_format($com11, 1, ',', '.');?></td>
                <td style="color:<?php echo $cor12; ?>;"><?php echo number_format($linha['dezembro'], 1, ',', '.');?></td>
                <td><?php echo number_format($com12, 1, ',', '.');?></td>
                <td><?php echo number_format($linha['fixo'], 1, ',', '.');?></td>
                <td><?php echo date("d/m/Y",strtotime($linha['dataContratacao']));?></td> 
                <td><?php echo number_format($totalvendas, 2, ',', '.');?></td>
                <td style="color:<?php echo $cor; ?>;"><?php echo $anos;?></td> 
                <td><?php echo number_format($bonus, 1, ',', '.');?></td>        
            </tr>
            <?php } ?>
            </table>

        </fieldset>
    </form>
</body>
</html>