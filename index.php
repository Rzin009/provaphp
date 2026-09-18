<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
body {
    background-color: #bfc2c5;
}


table {
    background-color: #81868d;
}


</style>
    
<?php
include_once "funcoes.php";
$dados = [];
$dados = lerDados("dados.json");
$id = $_GET['id'] ?? "";
$msg = $_GET['msg'] ?? '';
$registro = [];
if ($id >= 0) {
    $registro = $dados[$id];
}
?>



    
<h1>Cadastro de usuários</h1>
    <form action="salvar.php?id=<?= $id ?>" method="post">
        <div>
            <label for="nome">Nome</label>
            <input type="text" 
            name="nome" 
            id="nome" 
            placeholder="Nome do produto"
            value="<?=$registro['nome']?? ''?>">
        </div>
        <div>
            <label for="descricao">Descrição</label>
            <br>
            <textarea 
            type="text"
            name="descricao" 
            id="descricao" 
            placeholder="Descrição do produto"
            value="<?=$registro['descricao']?? '' ?>">
            </textarea>
        </div>
        
        <div>
            <label for="preco">Preço</label>
            <input type="text" 
            name="preco" 
            id="preco"
            placeholder="Preço do produto"
            value="<?=$registro['preco']?? '' ?>">
        </div>
           <div>
            <label for="imagem">Imagem</label>
            <input type="text" 
            name="imagem" 
            id="imagem"
            placeholder="Link da imagem do produto"
            value="<?=$registro['imagem']?? '' ?>">
        </div>
           <div>
            <label for="categoria">Categoria</label>
            <input type="text" 
            name="categoria" 
            id="categoria"
            placeholder="Categoria do produto"
            value="<?=$registro['categoria']?? '' ?>">
        </div>







        <div>
            <button type="reset">Cancelar</button>
            <button type="submit">Salvar</button>
        </div>
    </form>
    <div style="color: #023a82; border: 1 pix solid #023a82"> <?=$msg ?> </div>
    <hr>

    <table border = "1">
        <thead>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Imagem</th>
            <th>Categoria</th>
</tr>
</thead>
<tbody>
    <?php
    foreach($dados as $id => $item) {
    ?>
    

    <tr>
        <td><?=$id?></td>
        <td><?=$item['nome']?? '' ?></td>
        <td><?=$item['descricao']?? ''?></td>
        <td><?=$item['preco']?? ' '?></td>
        <td><?=$item['imagem']?? ''?></td>
        <td><?=$item['categoria']?? ''?></td>
        <td><a href="index.php?id=<?=$id?>">Editar</a> | <a href="apagar.php?id=<?= $id ?>">Apagar </a>  </td>


        
    </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
    </body>
    </html>
            
