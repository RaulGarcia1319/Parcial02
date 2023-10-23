<?=$this->include('plantilla/header')?>
<body>

    <div class="container">

        <h1>Vista Genero</h1>
    
        
            <a class="btn btn-success" href="<?php echo base_url(); ?>genero/new">Nuevo Genero</a>
            <br><br>
            <div class="container-md">
                <table class="table table-bordered table-light table-striped text-center">
                    <thead>
                        <tr>
                            <th hidden>Id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>            
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($genero) && !empty($genero)): ?>
                    <?php foreach($genero as $data): ?>
                        <tr>
                            <td hidden><?php echo $data->id; ?></td>
                            <td><?php echo $data->nombre; ?></td>
                            <td><?php echo $data->descripcion; ?></td>
                        <td>
                        <a class="btn btn-danger" href="<?php echo base_url('delete/' . $data->id); ?>">Eliminar</a>
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