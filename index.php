<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - Atividade TPA</title>

    <!-- icone janela nav -->
    <link rel="shortcut icon" href="resources/icone_profile.png" type="image/x-icon">
    
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  
    <!-- icones bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- google fonts - opens sans -->
    <link href="fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>

    <!-- folha de estilo(css)-->
    <style type="text/css">
    body {
        margin:20px;
        background-color: #ffff
    }

    *{
        font-family:'Open Sans', sans-serif;
    }

    h2{
        font-family:'Open Sans', sans-serif
    }

    .thead{
        background-color: #f7f7f7;
    }
</style>
</head>
<body>
    
<!-- container (conteudo da pagina)-->
<div class="container">
<h2 class="text-center"> Lista de Clientes <i class="bi bi-people-fill"> </i> </h2>

<h5 class="text-end">
<a href="view/page_register.php" class="btn btn-primary btn-xs">
<i class="bi bi-person-plus-fill"></i>
</a>
</h5>
<div class="table-responsive">
<table class="table table-hover">
<thead class="thead">
<tr>
<th>ID</th>
<th>NOME</th>
<th>E-MAIL</th>
<th>CPF</th>
<th>DT. DE NASCIMENTO</th>
<th>ENDERECO</th>
<th>TELEFONE</th>
<th colspan="3">ACOES</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Stephanie Carvalho</td>
<td>stephaniecarvalho@gmail.com</td>
<td>333.444.555-33</td>
<td>11/10/2003</td>
<td>Rua Queiroz Junior, 12</td>
<td>(31) 2392-4182</td>
<td>
<form method="POST">
<button class="btn btn-warning btn-xs">
<i class="bi bi-pencil-square"></i>
</button>
</form>
</td>
</td>
<form method="POST" onclick="return confirm('Certeza na sua decisão?');">
<button class="btn btn-danger btn-xs">
<i class="bi bi-trash"></i>
</button>
</form>
</td>
</tr>
</tbody>
</table>

</div>


<!-- jquery e jquerymask-->
<script type="text/javascript" src="https://cdnjs.cloudfare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudfare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>
</html>