<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="?controller=inicio">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SELECT</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="?controller=inicio">
            <i class="fas fa-home"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Herramientas</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Admin de Mensajes & chat:</h6>
                <a class="collapse-item" href="?controller=salasdechat"">Salas de chat</a>
                <a class=" collapse-item" href="?controller=ModulosChat">Modulos de Chat</a>
                <a class="collapse-item" href="?controller=PlantillasMensajes">Plantillas Mensajes</a>
                <a class="collapse-item" href="?controller=AccesWebToken">Tokens</a>
            </div>
        </div>
    </li>
    <div class="sidebar-heading">
        Administrar Permisos
    </div>
    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-users"></i>
            <span>Usuarios</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Usuarios & Roles:</h6>
                <a class="collapse-item" href="?controller=Agentes">Agentes</a>
                <a class="collapse-item" href="?controller=Roles">Roles</a>

            </div>
        </div>
    </li>
    <div class="sidebar-heading">
        Administrar Utilidades
    </div>
     <!-- Nav Item - Reportes Menu -->
     <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilidades" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-toolbox"></i>
            <span>Utilidades</span>
        </a>
        <div id="collapseUtilidades" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Notas & Seguimient6o:</h6>
                <a class="collapse-item" href="?controller=ModuloEnConstruccion">Notas</a>
            </div>
        </div>
    </li>

    <div class="sidebar-heading">
        Reportes
    </div>
    <!-- Nav Item - Reportes Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReportes" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-poll"></i>
            <span>Estadisticas</span>
        </a>
        <div id="collapseReportes" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Reportes & Graficas:</h6>
                <a class="collapse-item" href="?controller=ModuloEnConstruccion">Graficas</a>
                <a class="collapse-item" href="?controller=ModuloEnConstruccion">Reportes</a>

            </div>
        </div>
    </li>
    <div class="sidebar-heading">
        Gestor Archivos
    </div>
    <!-- Nav Item - Gestor de Archivos Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFileManager" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-archive"></i>
            <span>Gestor de Archivos</span>
        </a>
        <div id="collapseFileManager" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Archivos & Datos:</h6>
                <a class="collapse-item" href="?controller=ModuloEnConstruccion">Nube</a>
                

            </div>
        </div>
    </li>

    <div class="sidebar-heading">
        Sistema & Soporte
    </div>
    <!-- Nav Item - Gestor de Archivos Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-database"></i>
            <span>Soporte</span>
        </a>
        <div id="collapseSettings" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Bakup & Storage:</h6>
                <a class="collapse-item" href="?controller=CopiasDeSeguridad">Copias de Seguridad</a>
                <a class="collapse-item" href="?controller=ModuloEnConstruccion">Documentacion</a>
                

            </div>
        </div>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->