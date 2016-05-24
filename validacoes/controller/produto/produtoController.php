<?php

require_once '../../config.inc.php';

session_start();

$bo = new ProdutoBO();
//$dao = new ProdutoDAO();

$acao= $_POST['acao'];
var_dump($acao);
if ($acao == 'cadastrar' || $acao == 'alterar'){
    $vlProduto = str_replace(",",".", $_POST['vlProduto']);
    $dados = [
        'cd_produto'=> '',
        'CONFEITEIRO_cd_confeiteiro'=> $_SESSION['codigo'],
        'nm_produto' => $_POST['nmProduto'],
        'vl_produto' => $vlProduto,
        'nm_categoria' => $_POST['nmCategoria'],
        'nm_tipo_produto' => $_POST['nmTipoProduto'],
        'ds_produto' => $_POST['dsProduto'], 
        'nm_situacao' => 'A'
        ];
}
switch ($acao){
    
    case 'cadastrar';
        $bean = $bo->populaBean($dados);
        $bo->cadastrarProduto($bean);
        echo "<script>alert('Produto Cadastrado com Sucesso!!!')</script>";
        echo "<script>window.location.assign('../../view/produto/produto.php')</script>";
        break;
    case 'alterar';
        $dados['cd_produto']= $_SESSION['cdProduto'];
        $bean = $bo->populaBean($dados);
        $bo->alterarProduto($bean);
        $_SESSION['cdProduto']='';
        $_SESSION['nmProduto']='';
        $_SESSION['vlProduto']='';
        $_SESSION['dsProduto']='';
        $_SESSION['nmTipoProduto']='';
        $_SESSION['nmSituacao']='';
        $_SESSION['nmCategoria']='';
        echo "<script>alert('Dados Alterados com Sucesso!')</script>";
        echo "<script>window.location.assign('../../view/produto/listaProduto.php')</script>";
        break;
    case 'alterarDados';
        $produto = $bo->findByPk($_POST['cdProduto']);
        $bo->carregaProduto($produto);
        header('Location: ../../view/produto/Produto.php?acao=alterarDados');
        break;
    case 'desativar';
        $produto = $bo->findByPk($_POST['cdProduto']);
        $bean = $bo->populaBean($produto[0]);
        $bo->desativarProduto($bean);
        break;
    case 'deletar';
        $produto = $bo->findByPk($_POST['cdProduto']);
        $bean = $bo->populaBean($produto[0]);
        $bo->deletarProduto($bean);
        header('Location: ../../view/produto/listaProduto.php');
        break;
}
