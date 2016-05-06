 <?php
      ini_set('default_charset', 'UTF-8');
      require_once '../../include/config.php';
      require_once '../../include/crud.php';
      
      @$id   = $_POST["id"];
      @$acao = $_POST["acao"];
      
      $txt_editora = $_POST["txt_editora"];
      $txt_ativo = $_POST["txt_ativo"];
      
      
      
      $dados = array(
                    "editora"         => $txt_editora,
                    "ativo_editora"   => $txt_ativo
 );
 
$op = false;      
$url_sucesso = URL_ADMIN ."index.php?link=6";
$url_erro = URL_ADMIN ."index.php?link=7";

if($acao=="Cadastrar")      
    $op = inserir("editora", $dados);
elseif($acao=="Alterar")
    $op = alterar ("editora", $dados, "id_editora = $id");
elseif($acao=="Excluir")
    $op = deletar ("editora", "id_editora = $id");


 if ($op)
    print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url_sucesso'>
         <script type = 'text/javascript'> alert('Operação realizada com sucesso') </script>";
         
else 
    print "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url_erro'>
         <script type = 'text/javascript'> alert('Operação não foi realizada') </script>";
