<?php headerAdmin($data); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php sidebarAdmin(); ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            <?php navbarAdmin(); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->

                        <div class="col-xl-3 col-md-6 mb-4 " title="Acá se irán Acumulando la cantidad de Chats en Total que se encuentran sin eliminar">

                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body" id="cardTotal">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                TOTAL</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="TotalSalas"></div>
                                        </div>
                                        <a href="" data-bs-toggle="modal" data-bs-target="#ModalTotal">
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                ABIERTOS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="SalasAbiertas"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comment-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1" i>
                                                CERRADAS
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="SalasCerradas"></div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-power-off fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                ASIGNADOS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="SalasAsignadas"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-5 wrapper border-bottom-warning">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Usuarios</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table id="TableDasboard" class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>
                                                Seleccionar
                                            </th>
                                            <th>
                                                Nombre
                                            </th>
                                            <th>
                                                Apellido
                                            </th>
                                            <th>
                                                Usuario
                                            </th>
                                            <th>
                                                Chat Pendientes
                                            </th>
                                            <th>
                                                Chat Abiertos
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody id="ChatAsignadosAgentes">

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

<?php footerAdmin($data); ?>