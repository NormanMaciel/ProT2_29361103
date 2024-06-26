<!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-success">
       <a class="navbar-brand" href="<?php echo base_url('inicio')?>">
         <img src="<?php echo base_url('assets/img/logo.png')?>" alt="Logotipo" height="30"></a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
       <div class="collapse navbar-collapse" id="navbarNav">
           <ul class="navbar-nav me-auto">
               <li class="nav-item active">
               <a class="nav-link" href="inicio">Principal</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="quienes_somos">Quiénes Somos</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="acerca_de">Acerca de</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="registro">Registrarse</a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="login">Login</a>
               </li>
           </ul>
         <form class="d-flex" role="search">
           <input class="form-control me-2" type="search" placeholder="Buscar.." aria-label="Search">
           <button class="btn btn-danger" type="submit">Buscar</button>
         </form>
       </div>
     </nav>
