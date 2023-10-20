<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Genero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">

        <h1>Vista Genero</h1>
    
        
            <a class="btn btn-success" href="<?php echo base_url(); ?>genero/new">Nuevo Genero</a>
            <br><br>
            <div class="container-md">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th> 
                            <th>Creado</th>               
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($genero) && !empty($genero)): ?>
                    <?php foreach($genero as $data): ?>
                        <tr>
                            <td><?php echo $data->id; ?></td>
                            <td><?php echo $data->nombre; ?></td>
                            <td><?php echo $data->descripcion; ?></td>
                            <td><?php echo $data->creado; ?></td>
                        <td>
                <!-- Acciones -->
                        </td>
                        </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>     
        </tbody>
       
            </table>
            </div>
           
            
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>