<?=$this->include('plantilla/header')?>
<body>

    <div class="container">

    <h1>LISTA PELICULAS</h1>
    
        
            <a class="btn btn-success" href="<?php echo base_url(); ?>peliculas/new">Nueva Pelicula</a>
            <br><br>
            <div class="container-md">
                <table class="table table-bordered table-light table-striped text-center">
                    <thead>
                        <tr>
                            <th hidden>Id</th>
                            <th>Nombre</th>                
                            <th>Genero</th>
                            <th>Puntuacion</th>
                            <th>Año</th>
                            <th>Popularidad</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($pelicula) && !empty($pelicula)): ?>
                    <?php foreach($pelicula as $data): ?>
                        <tr>
                            <td hidden><?php echo $data->id; ?></td>
                            <td><?php echo $data->name; ?></td>
                            <td><?php echo $data->nombre; ?></td>
                            <td><?php echo $data->puntuacion; ?></td>
                            <td><?php echo $data->anio; ?></td>
                            <td><?php echo $data->namePopu; ?></td>
                        <td>
                        <a class="btn btn-warning" href="<?php echo base_url('editar/' . $data->id);?>">Editar</a>
                        <a class="btn btn-danger" href="<?php echo base_url('eliminar/' . $data->id); ?>">Eliminar</a>
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