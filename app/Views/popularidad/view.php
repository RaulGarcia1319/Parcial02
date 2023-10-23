<?=$this->include('plantilla/header')?>

<body>

    <div class="container">

        <h1>Vista Popularidad</h1>
           
            <br><br>
            <div class="col-4">
                <table class="table table-bordered table-light table-striped text-center">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(isset($popularidad) && !empty($popularidad)): ?>
                    <?php foreach($popularidad as $data): ?>
                        <tr>
                            <td><?php echo $data->id; ?></td>
                            <td><?php echo $data->namePopu; ?></td>
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