<div class="row">
    <div class="col-12 col-lg-8 m-auto">
        <form class="multisteps-form__form needs-validation was-validated mb-8" id="form-registro-asistencia"
            name="form-registro-asistencia">
            <div class="card p-3 border-radius-xl js-active" data-animation="FadeIn">
                <h5 class="font-weight-bolder mb-0">
                    <img src="./assets/img/logos/logo-minedu.png" alt="">
                </h5>
                <p class="mb-0 text-sm">REGISTRO DE ASISTENCIA</p>
                <div class="multisteps-form__content text-uppercase">
                    <div class="row mt-3">
                        <h5><?=$_REQUEST['denominacion']?></h5>
                        <span class="mb-4"><i class="fa-solid fa-calendar-days text-warning"></i>
                            <?=$_REQUEST['fi'] . ' - ' . $_REQUEST['fe']?></span>

                        <input type="hidden" id="id" name="id" value="0">
                        <input type="hidden" id="idAsistencia" name="idAsistencia" value="<?=$_REQUEST['id']?>">
                        <input type="hidden" id="action" name="action" value="save-registro-asistencia">

                        <div class="col-12 col-sm-4">
                            <label>DRE / Región</label>
                            <select class="multisteps-form__input form-control mb-2" id="seleccione_dre"
                                name="seleccione_dre" onchange="dre().get_ugel_by_dre()" required>
                            </select>
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                            <label>UGEL</label>
                            <select class="multisteps-form__input form-control mb-3" id="seleccione_ugel"
                                name="seleccione_ugel" required>
                                <option value="" selected disabled>- Seleccione UGEL -</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-4 mt-3 mt-sm-0">
                            <label>Cargo</label>
                            <select class="multisteps-form__input form-control mb-3" id="selecione_cargo"
                                name="seleccione_cargo" required>
                                <option value="" disabled selected>- Seleccione cargo -</option>
                                <?php
                                $n = 0;
                                do {
                                    echo '<option>' . htmlspecialchars($participantes_lista[$n]) . '</option>';
                                    $n++;
                                } while ($n <= count($participantes_lista) - 1);
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-0">
                        <div class="col-12 col-sm-2 mt-0 mt-sm-0">
                            <label>COD.Modular</label>
                            <input class="multisteps-form__input form-control mb-3" type="text"
                                placeholder="ej. 7777777" maxlength="7" pattern="^\d{7}$" id="cod_mod" name="cod_mod" required
                                title="Ingresar los 7 digitos del CÓDIGO MODULAR, de lo contrario escribir 0000000" />
                        </div>
                        <div class="col-12 col-sm-2 mt-0 mt-sm-0">
                            <label>Nro. DNI</label>
                            <input class="multisteps-form__input form-control mb-3" type="text" id="dni" name="dni"
                                placeholder="ej. 88888888" maxlength="8" pattern="^\d{8}$"
                                onblur="reniec().search_dni()" required
                                title="Ingresar los 8 digitos del número de DNI" />
                        </div>
                        <div class="col-12 col-sm-4 mt-0 mt-sm-0">
                            <label>Apellidos y Nombres</label>
                            <input class="multisteps-form__input form-control mb-3" type="text" id="apellidos_nombres"
                                name="apellidos_nombres" placeholder="Ingresar datos" required readonly />
                        </div>
                        <div class="col-12 col-sm-4 mt-0 mt-sm-0">
                            <label>Correo Electrónico</label>
                            <input class="multisteps-form__input form-control mb-3" type="text" id="correo"name="correo" placeholder="ej. correo@correo.com" required />
                        </div>
                        <div class="col-12 col-sm-2 mt-0 mt-sm-0">
                            <label>Nro. Celular</label>
                            <input class="multisteps-form__input form-control mb-3" type="text" maxlength="9" id="celular"name="celular" placeholder="Ej. 999999999" required />
                        </div>
                    </div>
                    <div class="row mt-3">

                    </div>
                    <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-primary ms-auto mb-0" type="button" title="Enviar formulario" onclick="asistencia().save()">
                            <i class="fas fa-check-circle"></i>
                            Enviar
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>

</div>