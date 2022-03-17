<?php
include 'data/conexao.php';

$sql = "SELECT * FROM usuario_nivel WHERE usu_niv_usuario = '$v_id_usuario'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {

        $nivel =  $row["usu_niv_nivel"];
    }
}else{

    $nivel = '0';

}

?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <span class="glyphicon glyphicon-shopping-cart"></span>
            </a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">
                    <span class="glyphicon glyphicon-home"></span>
                    Inicio
                </a></li>
            <?php 
            // ADMINISTRADOR
            if( $nivel == 1 ){
            
            ?>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="glyphicon glyphicon-user"></span>
                    Promotores
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="cadastro-promotor.php">
                            <span class="glyphicon glyphicon-plus"></span>
                            Cadastro
                        </a></li>
                    <li><a href="consulta-promotor.php">
                            <span class="glyphicon glyphicon-search"></span>
                            Consulta
                        </a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="glyphicon glyphicon-briefcase"></span>
                    Fornecedores
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="fornecedor.php">
                            <span class="glyphicon glyphicon-plus"></span>
                            Cadastro
                        </a></li>
                    <li><a href="consulta-fornecedor.php">
                            <span class="glyphicon glyphicon-search"></span>
                            Consulta
                        </a></li>
                </ul>
            </li>
            <li>
                <a href="permissoes.php">
                    <span class="glyphicon glyphicon-lock"></span>
                    Permissões
                </a>
            </li>
            <li>
                <a href="painel.php">
                    <span class="glyphicon glyphicon-dashboard"></span>
                    Painel
                </a>
            </li>
            <?php  
            // GLP
            }elseif( $nivel == 2 ){ ?>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="glyphicon glyphicon-briefcase"></span>
                    Fornecedores
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="fornecedor.php">
                            <span class="glyphicon glyphicon-plus"></span>
                            Cadastro
                        </a></li>
                    <li><a href="consulta-fornecedor.php">
                            <span class="glyphicon glyphicon-search"></span>
                            Consulta
                        </a></li>
                </ul>
            </li>

            <li>
                <a href="consulta-promotor.php">
                    <span class="glyphicon glyphicon-search"></span>
                    Consulta
                </a>
            </li>

            <?php 
            //CADASTRO
            } elseif( $nivel == 3 ){ ?>

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="glyphicon glyphicon-user"></span>
                    Promotores
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="cadastro-promotor.php">
                            <span class="glyphicon glyphicon-plus"></span>
                            Cadastro
                        </a></li>
                    <li><a href="consulta-promotor.php">
                            <span class="glyphicon glyphicon-search"></span>
                            Consulta
                        </a></li>
                </ul>
            </li>
            <li>
                <a href="consulta-fornecedor.php">
                    <span class="glyphicon glyphicon-search"></span>
                    Consulta Fornecedores
                </a>
            </li>
            <?php } ?>
            <li>
                <a href="relatorios.php">
                    <span class="glyphicon glyphicon-th-list"></span>
                    Relatorios
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">
                    <span class="glyphicon glyphicon-off"></span>
                    SAIR
                </a>
            </li>
        </ul>
    </div>
</nav>