<?php
/**
 * Created by PhpStorm
 * User: CESARJOSE39
 * Date: 14/10/2020
 * Time: 21:54
 */
?>
<!-- Begin Page Content -->
<div class="container-fluid">
<!--     Page Heading-->
<!--    <div class="d-sm-flex align-items-center justify-content-between mb-4">-->
<!--        <h1 class="h3 mb-0 text-gray-800">Inicio</h1>-->
<!--        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-download fa-sm text-white-50"></i> Generate Report</a>-->
<!--    </div>-->
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h3 class="card-title text-primary">Bienvenido a Quispe! 🎉</h3>

                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img
                                    src="<?= _SERVER_.'media/image/man.png' ?>"
                                    height="140"
                                    alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Total Revenue -->
        <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Total de Ventas</h5>
                        <div id="totalRevenueChart" class="px-2"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="dropdown">
                                    <button
                                            class="btn btn-sm btn-outline-primary dropdown-toggle"
                                            type="button"
                                            id="growthReportId"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                    >
                                        2022
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
                                        <a class="dropdown-item" href="javascript:void(0);">2021</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2020</a>
                                        <a class="dropdown-item" href="javascript:void(0);">2019</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="growthChart"></div>
                        <div class="text-center fw-semibold pt-3 mb-2">62% Crecimiento </div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2022</small>
                                    <h6 class="mb-0">s/. 32.5k</h6>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="me-2">
                                    <span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
                                </div>
                                <div class="d-flex flex-column">
                                    <small>2021</small>
                                    <h6 class="mb-0">S/. 41.2k</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Total Revenue -->
        <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
            <div class="row">
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="<?= _SERVER_._STYLES_bt5_ ?>assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button
                                            class="btn p-0"
                                            type="button"
                                            id="cardOpt4"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                    >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="d-block mb-1">Pagos</span>
                            <h4 class="card-title text-nowrap mb-2">s/. 2,456</h4>
                            <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img src="<?= _SERVER_._STYLES_bt5_ ?>assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
                                </div>
                                <div class="dropdown">
                                    <button
                                            class="btn p-0"
                                            type="button"
                                            id="cardOpt1"
                                            data-bs-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                    >
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="cardOpt1">
                                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <span class="fw-semibold d-block mb-1">Transacciones</span>
                            <h4 class="card-title mb-2">S/.14,857</h4>
                            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
                        </div>
                    </div>
                </div>
                <!-- </div>
<div class="row"> -->
                <div class="col-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Informe de Mensual</h5>
                                        <span class="badge bg-label-warning rounded-pill">Año 2021</span>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <small class="text-success text-nowrap fw-semibold"
                                        ><i class="bx bx-chevron-up"></i> 68.2%</small
                                        >
                                        <h3 class="mb-0">S/. 84,686k</h3>
                                    </div>
                                </div>
                                <div id="profileReportChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Order Statistics -->
        <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Estadistica de Ordenes</h5>
                        <small class="text-muted">42.82k Total Ventas</small>
                    </div>
                    <div class="dropdown">
                        <button
                                class="btn p-0"
                                type="button"
                                id="orederStatistics"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                        >
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column align-items-center gap-1">
                            <h2 class="mb-2">8,258</h2>
                            <span>Total Ordenes</span>
                        </div>
                        <div id="orderStatisticsChart"></div>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary"
                            ><i class="bx bx-mobile-alt"></i
                                ></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Electrónica</h6>
                                    <small class="text-muted">Telefonos, Audifonos, TV</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">82.5k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Moda</h6>
                                    <small class="text-muted">Polos, Jeans, Zapatos</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">23.8k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Decoración</h6>
                                    <small class="text-muted">Arte, Pinturas</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">849k</small>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-secondary"
                            ><i class="bx bx-football"></i
                                ></span>
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <h6 class="mb-0">Deporte</h6>
                                    <small class="text-muted">Futbol, kit Deportivos</small>
                                </div>
                                <div class="user-progress">
                                    <small class="fw-semibold">99</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Order Statistics -->

        <!-- Expense Overview -->
        <div class="col-md-6 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <button
                                    type="button"
                                    class="nav-link active"
                                    role="tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#navs-tabs-line-card-income"
                                    aria-controls="navs-tabs-line-card-income"
                                    aria-selected="true"
                            >
                                Ingresos
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab">Egresos</button>
                        </li>
                        <!--<li class="nav-item">
                            <button type="button" class="nav-link" role="tab">Ganancia</button>
                        </li>-->
                    </ul>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="<?= _SERVER_._STYLES_bt5_ ?>assets/img/icons/unicons/wallet.png" alt="User" />
                                </div>
                                <div>
                                    <small class="text-muted d-block">Balance Total </small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">S/. 459.10</h6>
                                        <small class="text-success fw-semibold">
                                            <i class="bx bx-chevron-up"></i>
                                            42.9%
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="incomeChart"></div>
                            <div class="d-flex justify-content-center pt-4 gap-2">
                                <div class="flex-shrink-0">
                                    <div id="expensesOfWeek"></div>
                                </div>
                                <div>
                                    <p class="mb-n1 mt-1">Gastos de esta semana</p>
                                    <small class="text-muted">$39 la ùltima semana</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Expense Overview -->

        <!-- Transactions -->
        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Transsacciones</h5>
                    <div class="dropdown">
                        <button
                                class="btn p-0"
                                type="button"
                                id="transactionID"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                        >
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="<?= _SERVER_._STYLES_bt5_ ?>assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Depositos</small>
                                    <h6 class="mb-0">Ingresos</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+82.6</h6>
                                    <span class="text-muted">PEN</span>
                                </div>
                            </div>
                        </li>
                        <!--<li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="<?/*= _SERVER_._STYLES_bt5_ */?>assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Mac'D</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+270.69</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>-->
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="<?= _SERVER_._STYLES_bt5_ ?>assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Transferencias</small>
                                    <h6 class="mb-0">Ingresos</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+637.91</h6>
                                    <span class="text-muted">PEN</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="<?= _SERVER_._STYLES_bt5_ ?>assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Tarjeta de Crédito</small>
                                    <h6 class="mb-0">Ingresos</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+838.71</h6>
                                    <span class="text-muted">PEN</span>
                                </div>
                            </div>
                        </li>
                        <!--<li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="<?/*= _SERVER_._STYLES_bt5_ */?>assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Wallet</small>
                                    <h6 class="mb-0">Starbucks</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+203.33</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="<?/*= _SERVER_._STYLES_bt5_ */?>assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded" />
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">Mastercard</small>
                                    <h6 class="mb-0">Ordered Food</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">-92.45</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
        <!--/ Transactions -->
    </div>
    <!-- 3 CARTAS -->
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <div class="card border_viajes container_hover m-2" style="background-image: url(<?= _SERVER_._STYLES_F_?>assets/img/39años.jpg);background-size: 185%;background-position: center; border-top-left-radius: 18px;border-top-right-radius: 18px; background-repeat: no-repeat;">
                        <!--                        <img src="--><?php //= _SERVER_._VIEW_PATH_ ?><!--media/paquetes/fondo2.jpg" class="card-img-top" alt="...">-->
                        <div class="fondo_cabeza">
                            <h5 class="card-title font-weight-bold text-white t_hover p-2 titulo_hover">TIENDA VIRTUAL QUISPE(BACKEND)</h5>
                        </div>
                        <div class="card-body">
                            <div class="w-100 " style="height: 150px;">
                                <img src="">
                            </div>
                        </div>
<!--                        <div class="w-100 d-flex align-items-lg-end justify-content-center">-->
<!--                            <label for="" style="color: #D4AF37;font-size: 20px">&#9733;</label>-->
<!--                            <label for="" style="color: #D4AF37;font-size: 20px">&#9733;</label>-->
<!--                            <label for="" style="color: #D4AF37;font-size: 20px">&#9733;</label>-->
<!--                            <label for="" style="color: #D4AF37;font-size: 20px">&#9733;</label>-->
<!--                            <label for="" style="color: #D4AF37;font-size: 20px">&#9733;</label>-->
<!--                        </div>-->
                    </div>
                </div>
                <div class="col-4">
                    <div class="card border_viajes container_hover m-2" style="background-image: url(<?= _SERVER_._STYLES_F_?>assets/img/Quispe_logo_facebook.jpg);background-size: 70%;background-position: center; border-top-left-radius: 18px;border-top-right-radius: 18px; background-repeat: no-repeat;">
                        <!--                        <img src="--><?php //= _SERVER_._VIEW_PATH_ ?><!--media/paquetes/fondo2.jpg" class="card-img-top" alt="...">-->
                        <div class="fondo_cabeza">
                            <h5 class="card-title font-weight-bold text-white t_hover p-2 titulo_hover">TIENDA VIRTUAL QUISPE(BACKEND)</h5>
                        </div>
                        <div class="card-body">
                            <div class="w-100 " style="height: 150px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card border_viajes container_hover m-2" style="background-image: url(<?= _SERVER_._STYLES_F_?>assets/img/fachada.jpg);background-size: 125%;background-position: center; border-top-left-radius: 18px;border-top-right-radius: 18px; background-repeat: no-repeat;">
                        <!--                        <img src="--><?php //= _SERVER_._VIEW_PATH_ ?><!--media/paquetes/fondo2.jpg" class="card-img-top" alt="...">-->
                        <div class="fondo_cabeza">
                            <h5 class="card-title font-weight-bold text-white t_hover p-2 titulo_hover">TIENDA VIRTUAL QUISPE(BACKEND)</h5>
                        </div>
                        <div class="card-body">
                            <div class="w-100 " style="height: 150px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Approach -->
<!--            <div class="card shadow mb-4 bg-gradient-success text-white">-->
<!--                <div class="card-header py-3">-->
<!--                    <h6 class="m-0 font-weight-bold text-primary">Bienvenido a EggPHP3, --><?php //echo $this->encriptar->desencriptar($_SESSION['p_n'],_FULL_KEY_) . ' ' . $this->encriptar->desencriptar($_SESSION['p_p'],_FULL_KEY_);?><!--</h6>-->
<!--                </div>-->
<!--                <div class="card-body" style="text-align: center;">-->
<!--                    <h2 style="padding-top: 20px;">Su Rol de Usuario es: --><?php //echo $this->encriptar->desencriptar($_SESSION['rn'],_FULL_KEY_);?><!--</h2><br>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>





    <!-- Content Row -->
    <!--<div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pedidos Por Atender</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pedidos Atendidos (Hoy)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-sticky-note fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Pedidos Atendidos (Mes)</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">30</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-clipboard fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Ingresos Pedidos del Mes</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">S/. 120</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-dollar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</div>
<!-- /.container-fluid -->

<style>
    .container_hover:hover{
        transform: scale(1.1);
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .fondo_cabeza{
        background: linear-gradient(140deg, rgba(0, 0, 0, 0.4) 100%, rgba(255, 255, 0, 0) 50%);
        font-family: monospace;
        border-top-left-radius: 18px;
        border-top-right-radius: 18px
    }
</style>
<script src="<?php echo _SERVER_ . _JS_;?>domain.js"></script>
<!-- End of Main Content -->