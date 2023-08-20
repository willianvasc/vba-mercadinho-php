<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
</head>

<body style="background-color: burlywood;">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 py-2 text-center">

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <session class="d-flex justify-content-center align-items-center">
                    <div class="bg-form_cadastro p-5 rounded">
                    <h1 class="text-dark">
                    Cadastre um produto
                </h1>
                        <form action="back/cadastro.php" method="POST">
                            <label class="text-white pt-3">Nome do produto</label>
                            <input type="text" name="nome_prod" class="input-group-text" id="nome_prod" placeholder="nome do produto">
                            <label class="text-white pt-3">Valor do produto</label>
                            <input type="number" name="valor_prod" class="input-group-text" id="valor_prod" placeholder="valor do produto">
                            <label class="text-white pt-3">Estoque do produto</label>
                            <input type="number" name="estoque_prod" class="input-group-text" id="estoque_prod" placeholder="estoque do produto">
                            <div class="w-100 pt-4 text-center ">
                                <input class="btn btn-primary" type="submit" name="cadastrar">
                            </div>
                            <img src="imagens/fullsize_2011_11_19_03_WDL-Logo-9022_24337_041853502_515461355-removebg-preview.png" width="200" alt="logo">
                        </form>
                    </div>
                </session>
            </div>
        </div>
</body>

</html>