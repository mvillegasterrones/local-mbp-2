<main class="main-content position-relative border-radius-lg instrumento" id="inst-01">

    <div class="container-fluid py-4">
        <div class="row mb-5">
            <div class="col-12">
                <div class="multisteps-form mb-5">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto my-4">
                            <h4>FICHA DE CONSUMO DE ALIMENTOS</h4>
                            <div class="card">
                                <div class="card-body">
                                    <div class="multisteps-form__progress">
                                        <button class="multisteps-form__progress-btn js-active" type="button" title="Información">
                                            <span>Información</span>
                                        </button>
                                        <button class="multisteps-form__progress-btn" type="button" title="Estudiante">
                                            <span>Estudiante</span>
                                        </button>
                                        <button class="multisteps-form__progress-btn" type="button" title="Address">
                                            Sección 1
                                        </button>
                                        <button class="multisteps-form__progress-btn" type="button" title="Socials">
                                            Sección 2
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form class="multisteps-form__form needs-validation was-validated mb-8" onsubmit="return false" novalidate>

                                <!-- // TODO: Section 1 - Información -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder mb-0">Información</h5>
                                    <p class="mb-0 text-sm">En las II. EE. con Modelo de Servicio Educativo Secundaria (MSE) en el ámbito rural </p>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <p>
                                                "<b>Objetivo</b> conocer la frecuencia de consumo de grupos de alimentos a fin de identificar los hábitos de consumo de los estudiantes. La finalidad es mejorar los hábitos de acuerdo a las necesidades de la etapa de desarrollo del estudiante, buscando que esta sea balanceada y saludable.
                                                </p>
                                                <p>
                                                <b>Indicaciones</b> se toma a una muestra de estudiantes buscando la representatividad y balance entre hombres y mujeres, tipos de lengua materna, grados entre otros.
                                                </p>
                                                <p>
                                                <b>*Sugerencia</b> <i>aplicar la encuesta en mayo y agosto a una muestra de 4 estudiantes por grado (2 mujeres y 2 hombres).</i>"													
                                                </p>
                                                <!--<input class="multisteps-form__input form-control" type="text" placeholder="eg. Michael" />-->
                                            </div>
                                        </div>
                                        
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                                Empezar
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- // TODO: Section 2 - Información del estudiante -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white text-uppercase" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder mb-0">Acerca del estudiante</h5>
                                    <p class="mb-0 text-sm">Todos los campos son obligatorios</p>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-6">
                                                <label>Nombres completos</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="Ingresar respuesta" name="" id="" required />
                                            </div>
                                            <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                <label>Apellidos</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="Ingresar respuesta" name="" id="" required />
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-3">
                                                <label>Edad</label>
                                                <input class="multisteps-form__input form-control" type="number" placeholder="Ingresar respuesta" name="" id="" required />
                                            </div>
                                            <div class="col-12 col-sm-3 mt-3 mt-sm-0">
                                                <label>Sexo</label>
                                                <!--<input class="multisteps-form__input form-control" type="email" placeholder="eg. argon@dashboard.com" />-->
                                                <select class="multisteps-form__input form-control" name="" id="" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="M">Masculino</option>
                                                    <option value="F">Femenino</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <label>Autoidentificación Étnica</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="Ingresar respuesta" name="" id="" required />
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-3">
                                                <label>¿Es Residente?</label>
                                                <select class="multisteps-form__input form-control" name="" id="" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-9 mt-3 mt-sm-0">
                                                <label>¿sueles quedarte los fines de semana (sábados y/o domingos)'?</label>
                                                <select class="multisteps-form__input form-control" name="" id="" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="Si">Si</option>
                                                    <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                                Siguiente
                                                <i class="fa-duotone fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- // TODO: Section 3 - FRECUENCIAS DE COMIDAS EN UN DÍA -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white text-uppercase" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">FRECUENCIAS DE COMIDAS EN UN DÍA</h5>
                                    <p class=",b-0 text-sm">1.1. ¿En este último mes con qué frecuencia has consumido …?</p>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-3">
                                                <label>Desayuno</label>
                                                <select class="multisteps-form__input form-control" id="" name="" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="0">Ocacional o nunca</option>
                                                    <option value="1">Diario</option>
                                                    <option value="2">Semanal (1 vez)</option>
                                                    <option value="3">Semanal (2 a 4 veces)</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <label>Almuerzo</label>
                                                <select class="multisteps-form__input form-control" id="" name="" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="0">Ocacional o nunca</option>
                                                    <option value="1">Diario</option>
                                                    <option value="2">Semanal (1 vez)</option>
                                                    <option value="3">Semanal (2 a 4 veces)</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <label>Cena</label>
                                                <select class="multisteps-form__input form-control" id="" name="" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="0">Ocacional o nunca</option>
                                                    <option value="1">Diario</option>
                                                    <option value="2">Semanal (1 vez)</option>
                                                    <option value="3">Semanal (2 a 4 veces)</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <label>Refrigerio media mañana</label>
                                                <select class="multisteps-form__input form-control" id="" name="" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="0">Ocacional o nunca</option>
                                                    <option value="1">Diario</option>
                                                    <option value="2">Semanal (1 vez)</option>
                                                    <option value="3">Semanal (2 a 4 veces)</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-3">
                                                <label>Refiregerio media tarde</label>
                                                <select class="multisteps-form__input form-control" id="" name="" required>
                                                    <option value="" selected disabled>.: Seleccione :.</option>
                                                    <option value="0">Ocacional o nunca</option>
                                                    <option value="1">Diario</option>
                                                    <option value="2">Semanal (1 vez)</option>
                                                    <option value="3">Semanal (2 a 4 veces)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">
                                            <i class="fa-duotone fa-arrow-left"></i>
                                                Regresar
                                            </button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next" onclick="questionario().get_preguntas_inst()">
                                                Siguiente
                                                <i class="fa-duotone fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- // TODO: Section 4 - FRECUENCIA DE CONSUMO DE ALIMENTOS FUENTES DE PROTEÍNAS, HIERRO Y VITAMINAS -->
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">FRECUENCIA DE CONSUMO DE ALIMENTOS FUENTES DE PROTEÍNAS, HIERRO Y VITAMINAS</h5>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <label>(*) ALGUNA VEZ HAS CONSUMIDO (NOMBRE DEL ALIMENTO) 1.SI 2.NO (SI LA RESPUESTA ES NO, PASE AL SIGUIENTE ALIMENTO)</label>
                                            <label>(**) EN EL ÚLTIMO MES ¿CON QUÉ FRECUENCIA HAS CONSUMIDO: (Nombre del alimento) diario, semanal o mensual?</label>
                                            <label>(***) EN UN DÍA GENERALMENTE CUÁNTAS VECES A CONSUMIDO EL/LA (NOMBRE DEL ALIMENTO)</label>
                                            <div class="table-responsive">
                                                <table class="table align-items-center mb-0" id="tbl-sec-2-inst-01">
                                                    <thead class="text-center">
                                                        <tr>
                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Item</th>
                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ALIMENTOS</th>
                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">(*)</th>
                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">(**)</th>
                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No.DIAS</th>
                                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">(***)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn bg-gradient-secondary mb-0 js-btn-prev" type="button" title="Prev">
                                                <i class="fa-duotone fa-arrow-left"></i>
                                                    Regresar
                                                </button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next" onclick="instrumento_01().save()">
                                                    Guardar
                                                    <i class="fa-duotone fa-save"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>