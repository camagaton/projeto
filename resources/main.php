<?php
    if(isset($_POST["acao"])){
        if($user->addUsers($_POST['nome'],$_POST['email'])){
            header('Location:http://localhost/projeto');
        }
        
        if(isset($_GET['edit'])){
            $id = $_GET['edit'];
            $data = $user->selecionarUsuario($id);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto Danki code</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 mb-3">
                <form method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" value="<?php !empty($data['nome']) ? $data['nome'] : '' ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?php !empty($data['email']) ? $data['email'] : '' ?>">
                        </div>
                        <div class="col-md-4 mt-2">
                            <button type="submit" value="acao" name="acao" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td><?=$user['nome'] ?></td>
                        <td><?=$user['email'] ?></td>
                        <td><a href="http://localhost/projeto?edit=<?=$user['id']?>">Editar</a></td>
                        <td><a href="http://localhost/projeto?del=<?=$user['id']?>">Excluir</a></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>