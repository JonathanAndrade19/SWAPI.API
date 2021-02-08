<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consuminfo API</title>
    <!-- Bootastrap 5 CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .top{
            margin-top: 5%;
        }
        h1{
            flex: 1;
            text-align: center;
            align-items: center; 
            justify-content: center;
            text-transform: uppercase;
        }
        .header{
            font-size: 16px;
            text-transform: uppercase;
            font-weight: 600;
        }
        .body{
            font-size: 12px;
            text-transform: none;
            font-weight: 200;
        }

    </style>
</head>
<body>
    <?php
        $url = "https://swapi.dev/api/people/?page=2";
        $resultConsulta = json_decode(file_get_contents($url));
        $swapi = $resultConsulta->results;
    ?>
    <div class="container top">
        <div>
            <h1>Listando A Segunda Pagina do SWAPI.API</h1>
        </div>
        <div class="card">
            <table class="table table-striped table-hover">
                <tr class="header">
                    <td>Nome</td>
                    <td>Altura</td>
                    <td>Massa</td>
                    <td>Cor de cabelo</td>
                    <td>Cor da pele</td>
                    <td>Cor dos Olhos</td>
                    <td>Ano de Nascimento</td>
                    <td>Gênero</td>
                </tr>
                <?php foreach($swapi as $s) :?>
                    <tr class="body">
                        <td><?php echo $s->name ?></td>
                        <td><?php echo $s->height ?></td>
                        <td><?php echo $s->mass ?></td>
                        <td><?php echo $s->hair_color ?></td>
                        <td><?php echo $s->skin_color ?></td>
                        <td><?php echo $s->eye_color ?></td>
                        <td><?php echo $s->birth_year ?></td>
                        <td><?php echo $s->gender ?></td>
                    </tr>
            <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>