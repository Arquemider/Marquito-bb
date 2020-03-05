<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="../Obras/Principal.php">Constructora</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="../Obras/Obras.php#">Obras<span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="../Obras/wfrmAsignacion.php#">Asignacion<span class="sr-only">(current)</span></a>
            </li>
            
            </ul>
        </div>
        <li class="nav-item active">
                <a class="nav-link" href="../Obras/Login.php#">Cerrar sesion<span class="sr-only">(current)</span></a>
        </li>
        <h6 class="mt-2 text-right text-white">Sesion iniciada como: <?php echo $_SESSION['usuario']?> </h6>
</nav>