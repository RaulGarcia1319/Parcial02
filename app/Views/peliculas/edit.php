<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista Actualizar Peliculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">

    <h1>ACTUALIZAR PELICULA</h1>
    
    <a class="btn btn-primary" href="<?php echo base_url(); ?>peliculas/">Regresar</a>
            
            <br><br>
            <form method="post" action="<?= base_url('actualizar'); ?>">

            <input type="number" hidden name="id" value="<?= $pelicula->id?>">      
                <label for="">Nombre:</label>
                <input type="text" name="nombre" value="<?= $pelicula->nombre?>">
                <br><br>  

                <label for="genero">Genero:</label>
                    <select name="genero">
                    <?php foreach ($genero as $data): ?>
                    <option value="<?= $data->id ?>" <?php if ($data->id == $genero_actual) echo 'selected' ?>>
                    <?= $data->nombre ?>
                    </option>
                    <?php endforeach; ?>
                    </select> 

                <br><br>
                <label for="">Puntuacion:</label>
                <input type="text" name="puntuacion" value="<?= $pelicula->puntuacion?>">
                <br><br>
                <label for="">Año:</label>
                <input type="text" name="anio" value="<?= $pelicula->anio?>">
                <br><br> 
                
                <label for="popularidad">Popularidad:</label>
                <select name="popularidad">
                    <?php foreach ($popularidad as $data): ?>
                    <option value="<?= $data->id ?>" <?php if ($data->id == $popularidad_actual) echo 'selected' ?>>
                    <?= $data->nombre ?>
                    </option>
                    <?php endforeach; ?>
                </select>  
                <br>   
                <br>        
                    <input class="btn btn-success" type="submit" value="Actualizar">
    </form>

           
            
    </div>
    
   



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>