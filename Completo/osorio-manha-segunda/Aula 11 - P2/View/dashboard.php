<h2>Tarefas de <?=$usuario?>:</h2>

<?php
    while($tarefa = $resp->fetch_object()){
?>
        <li> 
            [ <?=$tarefa->id?> ] - <?=$tarefa->texto?>
            [ <a href="apagar.php?id=<?=$tarefa->id?>">apagar</a> ]
            [ <a href="editar.php?id=<?=$tarefa->id?>">editar</a> ]
        </li>
<?php 
   }
?>

<hr>
<form action="?p=add" method="post">
    Nova Tarefa <input type="text" name="tarefa">
    <input type="submit" value="Adicionar">
</form>
