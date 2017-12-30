<?php
if(!@($conexao = pg_connect("host=127.0.0.1 dbname=db port=5432 user=postgres password=lucas")))
{
   print "Não foi possível estabelecer uma conexão com o banco de dados.";
}
else
{
   $u = pg_escape_string($_POST['u']);
   $p =  sha1($_POST['p']);
   $e = pg_escape_string($_POST['e']);

   $editados = "INSERT INTO accounts (login, password, email, money) VALUES ('$u', '$p', '$e', '9999999')";
   $concluido = pg_query($conexao, $editados);

}

?>