<pre>
<?php


    //$banco = new mysqli("host", "usuario", "senha", "nome-banco")
    $banco = new mysqli("localhost:3307", "root", "", "php-segunda-manha");
    // var_dump($banco);

    $q = "SELECT * FROM usuarios";
    $resp = $banco->query($q);
    var_dump($resp);

    $usu = $resp->fetch_object();
    print_r($usu);

    $usu2 = $resp->fetch_object();
    print_r($usu2);

    echo "<hr>";
    $q = "SELECT * FROM usuarios WHERE usuario='maria_ofc'";
    $res = $banco->query($q);

    var_dump($res);

    $usu = $res->fetch_object();
    print_r($usu);

    echo "<br>ID: " . $usu->id;
    echo "<br>Usuario: " . $usu->usuario;
    echo "<br>Nome: " . $usu->nome;
    echo "<br>Senha: " . $usu->senha;
    

?>
</pre>