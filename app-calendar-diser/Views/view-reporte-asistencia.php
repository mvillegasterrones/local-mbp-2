<div class="row mt-4 mb-0">
    <div class="col-12 col-lg-8 m-auto">
        <form class="multisteps-form__form needs-validation was-validated mb-0" id="form-registro-asistencia"
            name="form-registro-asistencia">
            <div class="card p-3 border-radius-xl js-active" data-animation="FadeIn">
                <h5 class="font-weight-bolder mb-0">
                    <img src="./assets/img/logos/logo-minedu.png" alt="">
                </h5>
                <p class="mb-0 text-sm">REPORTE DE ASISTENCIA</p>
                <div class="multisteps-form__content text-uppercase">
                    <div class="row mt-3">
                        <h5><?= $_REQUEST['denominacion'] ?></h5>
                        <h6 id="nro-participantes-programados"><i class="fas fa-users"></i> Participantes</h6>
                        <span class="mb-2"><i class="fa-solid fa-calendar-days text-warning"></i>
                            <?= $_REQUEST['fi'] . ' - ' . $_REQUEST['fe'] ?></span>
                        <label class="text-info text-muted" onclick="location.reload()">
                            <a href="javascript:;" style="color: yellow !important;">
                                <i class="fa-regular fa-arrows-rotate"></i> Actualizar</a>
                        </label>

                        <div class="col-12 col-sm-4">
                            <label for="">DRE PROGRAMADAS:</label>
                            <p class="text-xxs" id="dre-participantes-list"></p>
                        </div>
                        <div class="col-12 col-sm-4">
                            <label for="">UGEL PROGRAMADAS:</label>
                            <p class="text-xxs" id="ugel-participantes-list"></p>
                        </div>
                        <div class="col-12 col-sm-4">
                            <label for="">PARTICIPANTES PROGRAMADOS:</label>
                            <p class="text-xxs" id="cargo-participantes-list"></p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row mt-3">
    <div class="col-2"></div>
    <div class="col-lg-8 col-md-6 mb-4 mb-lg-0">
        <div class="card h-100">
            <div class="card-body p-3">
                <!--<label for="">Total participantes</label>-->
                <div class="d-flex mb-2">
                    <span class="me-2 text-sm font-weight-bold text-capitalize">PORCENTAJE DE REGISTRO</span>
                    <span class="ms-auto text-sm font-weight-bold" id="asistencia-porc">0%</span>
                </div>
                <div>
                    <div class="progress" id="asistencia-porc-progress">
                        <!--<div class="progress-bar bg-gradient-info w-80" role="progressbar" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100"></div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-2"></div>
    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="card h-100">
            <div class="card-body p-3" id="card-chart-region">
                <label id="cargando"><i class="fas fa-spinner fa-spin"></i> Cargando...</label>
                <h6 class="text-uppercase">asistencia POR DRE</h6>
                <div class="chart pt-3">
                    <canvas id="chart-region" class="chart-canvas h-100" height="250"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="card h-100" id="card-chart-cargo">

            <div class="card-header pb-0 p-3">
                <label id="cargando"><i class="fas fa-spinner fa-spin"></i> Cargando...</label>
                <div class="d-flex align-items-center">
                    <h6 class="mb-0 text-uppercase">Asistencia por cargo</h6>
                    <button type="button"
                        class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto"
                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Reporte de especialistas registrados por CARGO">
                        <i class="fas fa-info"></i>
                    </button>
                </div>
            </div>

            <div class="card-body p-3 mb-3">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center">
                        <div class="chart mt-2 text-white">
                            <canvas id="chart-cargo" class="chart-canvas text-white" height="250"></canvas>
                        </div>
                        <!--<a class="btn btn-sm bg-gradient-secondary mt-4">See all referrals</a>-->
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<div class="row mt-2 mb-10">
    <div class="col-12 mt-2 col-lg-8 m-auto mt-1">
        <div class="card" id="card-table-reporte">
            <div class="table-responsive">
                <label id="cargando"><i class="fas fa-spinner fa-spin"></i> Cargando...</label>
                <table class="table align-items-center mb-0" id="tbl-reporte-asistencia">
                    <thead class="text-center">
                        <tr>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">DRE/REGION
                            </th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">UGEL
                            </th>
                            <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">CARGO
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                CODMOD</th>
                            <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                DNI - APELLIDOS Y NOMBRES</th>
                            <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                CORREO
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                CELULAR
                            </th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>