<?php
session_start();
require_once '../Models/mQuestionario.php';
$instancia = new mQuestionario();
$accion = $_POST['action'];
switch ($accion) {
    // ! INICIO - Encuesta 02
    case 'delete-enc-02':
        $id       = $_POST['id'];
        $ejecutar = $instancia->delete_enc_02($id);
        echo json_encode($ejecutar);
        break;
    case 'get-reporte-enc-02':
        $cod_mod  = $_SESSION['cod_mod'];
        $ejecutar = $instancia->get_reporte_enc_02($cod_mod);
        echo json_encode($ejecutar);
        break;
    case 'save-update-enc-02':
        $id              = $_POST['id'];
        $action          = $_POST['action'];
        $region          = $_SESSION['d_dpto'];
        $cod_mod         = $_SESSION['cod_mod'];
        $txt_comu_nombre = $_POST['txt_comu_nombre'];
        $txt_comu_tipo   = $_POST['txt_comu_tipo'];
        $txt_mes_reporte = $_POST['txt_mes_reporte'];
        $txt_cargo       = $_POST['txt_cargo'];
        $txt_otro_nombre = $_POST['txt_otro_nombre'];
        $txt_otro_cargo  = $_POST['txt_otro_cargo'];
        $txt_1_multiple  = $_POST['txt_1_multiple'];
        $txt_2_multiple  = $_POST['txt_2_multiple'];
        $txt_2_otro      = $_POST['txt_2_otro'];
        $txt_3_multiple  = $_POST['txt_3_multiple'];
        $txt_3_otro      = $_POST['txt_3_otro'];
        $txt_4           = $_POST['txt_4'];
        $txt_5_multiple  = $_POST['txt_5_multiple'];
        $txt_5_otro      = $_POST['txt_5_otro'];
        $txt_6           = $_POST['txt_6'];
        $txt_6_otro      = $_POST['txt_6_otro'];
        $txt_7           = $_POST['txt_7'];
        $txt_7_otro      = $_POST['txt_7_otro'];
        $txt_8           = $_POST['txt_8'];
        $txt_9           = $_POST['txt_9'];
        $txt_10          = $_POST['txt_10'];
        $txt_11_multiple = $_POST['txt_11_multiple'];
        $txt_11_otro     = $_POST['txt_11_otro'];
        $txt_12          = $_POST['txt_12'];
        $txt_13          = $_POST['txt_13'];
        $txt_13_otro     = $_POST['txt_13_otro'];
        $txt_14          = $_POST['txt_14'];
        $txt_15_tv1      = $_POST['txt_15_tv1'];
        $txt_15_tv2      = $_POST['txt_15_tv2'];
        $txt_15_tv3      = $_POST['txt_15_tv3'];
        $txt_15_tv4      = $_POST['txt_15_tv4'];
        $txt_15_tv5      = $_POST['txt_15_tv5'];
        $txt_15_tv6      = $_POST['txt_15_tv6'];
        $txt_16          = $_POST['txt_16'];
        $txt_17_cr1      = $_POST['txt_17_cr1'];
        $txt_17_cr2      = $_POST['txt_17_cr2'];
        $txt_17_cr3      = $_POST['txt_17_cr3'];
        $txt_17_cr4      = $_POST['txt_17_cr4'];
        $txt_17_cr5      = $_POST['txt_17_cr5'];
        $txt_17_cr6      = $_POST['txt_17_cr6'];
        $txt_17_cr7      = $_POST['txt_17_cr7'];
        $txt_17_cr8      = $_POST['txt_17_cr8'];
        $txt_17_cr9      = $_POST['txt_17_cr9'];
        $txt_17_cr10     = $_POST['txt_17_cr10'];
        $txt_17_cr11     = $_POST['txt_17_cr11'];
        $txt_17_cr12     = $_POST['txt_17_cr12'];
        $txt_17_cr13     = $_POST['txt_17_cr13'];
        $txt_17_cr14     = $_POST['txt_17_cr14'];
        $txt_17_cr15     = $_POST['txt_17_cr15'];
        $txt_17_cr16     = $_POST['txt_17_cr16'];
        $txt_17_cr_otro  = $_POST['txt_17_cr_otro'];
        $txt_17_cr17     = $_POST['txt_17_cr17'];
        $txt_18          = $_POST['txt_18'];
        $txt_19_multiple = $_POST['txt_19_multiple'];
        $txt_19_otro     = $_POST['txt_19_otro'];
        $txt_20_multiple = $_POST['txt_20_multiple'];
        $txt_20_otro     = $_POST['txt_20_otro'];
        $txt_21_multiple = $_POST['txt_21_multiple'];
        $txt_21_otro     = $_POST['txt_21_otro'];

        $ejecuar = $instancia->set_encuesta_02($id, $action, $region, $cod_mod, $txt_comu_nombre, $txt_comu_tipo, $txt_mes_reporte, $txt_cargo, $txt_otro_nombre, $txt_otro_cargo, $txt_1_multiple, $txt_2_multiple, $txt_2_otro, $txt_3_multiple, $txt_3_otro, $txt_4, $txt_5_multiple, $txt_5_otro, $txt_6, $txt_6_otro, $txt_7, $txt_7_otro, $txt_8, $txt_9, $txt_10, $txt_11_multiple, $txt_11_otro, $txt_12, $txt_13, $txt_13_otro, $txt_14, $txt_15_tv1, $txt_15_tv2, $txt_15_tv3, $txt_15_tv4, $txt_15_tv5, $txt_15_tv6, $txt_16, $txt_17_cr1, $txt_17_cr2, $txt_17_cr3, $txt_17_cr4, $txt_17_cr5, $txt_17_cr6, $txt_17_cr7, $txt_17_cr8, $txt_17_cr9, $txt_17_cr10, $txt_17_cr11, $txt_17_cr12, $txt_17_cr13, $txt_17_cr14, $txt_17_cr15, $txt_17_cr16, $txt_17_cr_otro, $txt_17_cr17, $txt_18, $txt_19_multiple, $txt_19_otro, $txt_20_multiple, $txt_20_otro, $txt_21_multiple, $txt_21_otro);
        echo json_encode($ejecutar);
        break;
    // ! INICIO - Encuesta 01
    case 'delete-enc-01':
        $id = $_POST['id'];
        $ejecutar = $instancia->delete_enc_01($id);
        echo json_encode($ejecutar);
        break;
    case 'get-reporte-enc-01':
        $cod_mod  = $_SESSION['cod_mod'];
        $ejecutar = $instancia->get_reporte_enc_01($cod_mod);
        echo json_encode($ejecutar);
        break;
    case 'save-update-enc-01':
        $id            = $_POST['id'];
        $action        = $_POST['action'];
        $region        = $_SESSION['d_dpto'];
        $cod_mod       = $_SESSION['cod_mod'];
        $txt_edad      = $_POST['txt_edad'];
        $txt_sexo      = $_POST['txt_sexo'];
        $txt_lmaterna  = $_POST['txt_lmaterna'];
        $txt_grado     = $_POST['txt_grado'];
        $txt_racion    = $_POST['txt_racion'];
        $txt_tiempo    = $_POST['txt_tiempo'];
        $txt_1         = $_POST['txt_1'];
        $txt_2_1       = $_POST['txt_2_1'];
        $txt_2_2       = $_POST['txt_2_2'];
        $txt_2_3       = $_POST['txt_2_3'];
        $txt_2_4       = $_POST['txt_2_4'];
        $txt_2_5       = $_POST['txt_2_5'];
        $txt_3_1       = $_POST['txt_3_1'];
        $txt_3_2       = $_POST['txt_3_2'];
        $txt_3_3       = $_POST['txt_3_3'];
        $txt_3_4       = $_POST['txt_3_4'];
        $txt_3_5       = $_POST['txt_3_5'];
        $txt_3_6       = $_POST['txt_3_6'];
        $txt_3_7       = $_POST['txt_3_7'];
        $txt_3_8       = $_POST['txt_3_8'];
        $txt_3_9       = $_POST['txt_3_9'];
        $txt_3_10      = $_POST['txt_3_10'];
        $txt_3_11      = $_POST['txt_3_11'];
        $txt_3_12      = $_POST['txt_3_12'];
        $txt_3_13      = $_POST['txt_3_13'];
        $txt_3_14      = $_POST['txt_3_14'];
        $txt_3_15      = $_POST['txt_3_15'];
        $txt_3_16      = $_POST['txt_3_16'];
        $txt_3_17      = $_POST['txt_3_17'];
        $txt_3_18      = $_POST['txt_3_18'];
        $txt_3_19      = $_POST['txt_3_19'];
        $txt_3_20      = $_POST['txt_3_20'];
        $txt_3_21      = $_POST['txt_3_21'];
        $txt_3_22      = $_POST['txt_3_22'];
        $txt_3_23      = $_POST['txt_3_23'];
        $txt_3_24      = $_POST['txt_3_24'];
        $txt_4_mejoras = $_POST['txt_4_mejoras'];

        $ejecutar = $instancia->set_encuesta_01($id, $action, $region, $cod_mod, $txt_edad, $txt_sexo, $txt_lmaterna, $txt_grado, $txt_racion, $txt_tiempo, $txt_1, $txt_2_1, $txt_2_2, $txt_2_3, $txt_2_4, $txt_2_5, $txt_3_1, $txt_3_2, $txt_3_3, $txt_3_4, $txt_3_5, $txt_3_6, $txt_3_7, $txt_3_8, $txt_3_9, $txt_3_10, $txt_3_11, $txt_3_12, $txt_3_13, $txt_3_14, $txt_3_15, $txt_3_16, $txt_3_17, $txt_3_18, $txt_3_19, $txt_3_20, $txt_3_21, $txt_3_22, $txt_3_23, $txt_3_24, $txt_4_mejoras);
        echo json_encode($ejecutar);
        break;
    // ! INICIO - Instrumento Nro. 03
    case 'delete-int-03':
        $id = $_POST['id'];
        $ejecutar = $instancia->delete_inst_03($id);
        echo json_encode($ejecutar);
        break;
    case 'get-reporte-inst-03':
        $cod_mod = $_SESSION['cod_mod'];
        $ejecutar = $instancia->get_reporte_inst_03($cod_mod);
        echo json_encode($ejecutar);
        break;
    case 'save-update-inst-03':
        $id = $_POST['id'];
        $action = $_POST['action'];
        $region = $_SESSION['d_dpto'];
        $cod_mod = $_SESSION['cod_mod'];
        $txt_dni = $_POST['txt_dni'];
        $txt_ape_nomb = $_POST['txt_ape_nomb'];
        $txt_cargo = $_POST['txt_cargo'];
        $txt_mes_reporte = $_POST['txt_mes_reporte'];
        $txt_1_1 = $_POST['txt_1_1'];
        $txt_1_2 = $_POST['txt_1_2'];
        $txt_1_3 = $_POST['txt_1_3'];
        $txt_1_4 = $_POST['txt_1_4'];
        $txt_1_5 = $_POST['txt_1_5'];
        $txt_1_6 = $_POST['txt_1_6'];
        $txt_observaciones_1 = $_POST['txt_observaciones_1'];
        $txt_2_1 = $_POST['txt_2_1'];
        $txt_2_2 = $_POST['txt_2_2'];
        $txt_2_3 = $_POST['txt_2_3'];
        $txt_2_4 = $_POST['txt_2_4'];
        $txt_2_5 = $_POST['txt_2_5'];
        $txt_2_6 = $_POST['txt_2_6'];
        $txt_2_7 = $_POST['txt_2_7'];
        $txt_2_8 = $_POST['txt_2_8'];
        $txt_2_9 = $_POST['txt_2_9'];
        $txt_2_10 = $_POST['txt_2_10'];
        $txt_2_11 = $_POST['txt_2_11'];
        $txt_2_12 = $_POST['txt_2_12'];
        $txt_2_13 = $_POST['txt_2_13'];
        $txt_2_13_temas = $_POST['txt_2_13_temas'];
        $txt_2_14 = $_POST['txt_2_14'];
        $txt_2_15 = $_POST['txt_2_15'];
        $txt_2_15_otro = $_POST['txt_2_15_otro'];
        $txt_2_16 = $_POST['txt_2_16'];
        $txt_2_16_otro = $_POST['txt_2_16_otro'];
        $txt_2_17 = $_POST['txt_2_17'];
        $txt_2_17_otro = $_POST['txt_2_17_otro'];
        $txt_2_18 = $_POST['txt_2_18'];
        $txt_fecha_aplicacion = $_POST['txt_fecha_aplicacion'];

        $ejecutar = $instancia->set_instrumento_03($id, $action, $region, $cod_mod, $txt_dni, $txt_ape_nomb, $txt_cargo, $txt_mes_reporte, $txt_1_1, $txt_1_2, $txt_1_3, $txt_1_4, $txt_1_5, $txt_1_6, $txt_observaciones_1, $txt_2_1, $txt_2_2, $txt_2_3, $txt_2_4, $txt_2_5, $txt_2_6, $txt_2_7, $txt_2_8, $txt_2_9, $txt_2_10, $txt_2_11, $txt_2_12, $txt_2_13, $txt_2_13_temas, $txt_2_14, $txt_2_15, $txt_2_15_otro, $txt_2_16, $txt_2_16_otro, $txt_2_17, $txt_2_17_otro, $txt_2_18, $txt_fecha_aplicacion);
        echo json_encode($ejecutar);
        break;
    // ! FIN - Instrumento Nro. 03
    // ! INICIO - Instrumento Nro. 02
    case 'delete-int-02':
        $id = $_POST['id'];
        $ejecutar = $instancia->delete_inst_02($id);
        echo json_encode($ejecutar);
        break;
    case 'get-reporte-inst-02':
        $cod_mod = $_SESSION['cod_mod'];
        $ejecutar = $instancia->get_reporte_inst_02($cod_mod);
        echo json_encode($ejecutar);
        break;
    case 'save-update-inst-02':
        $id = $_POST['id'];
        $action = $_POST['action'];
        $region = $_SESSION['d_dpto'];
        $cod_mod = $_SESSION['cod_mod'];
        $txt_datos_aplicador = $_POST['txt_datos_aplicador'];
        $txt_cargo_aplicador = $_POST['txt_cargo_aplicador'];
        $txt_grado = $_POST['txt_grado'];
        $txt_tiempo_comida = $_POST['txt_tiempo_comida'];
        $txt_mes_reporte = $_POST['txt_mes_reporte'];
        $txt_fecha_aplicacion = $_POST['txt_fecha_aplicacion'];
        $txt_1_1 = $_POST['txt_1_1'];
        $txt_1_2 = $_POST['txt_1_2'];
        $txt_1_2_1 = $_POST['txt_1_2_1'];
        $txt_1_2_2 = $_POST['txt_1_2_2'];
        $txt_1_2_3 = $_POST['txt_1_2_3'];
        $txt_1_3 = $_POST['txt_1_3'];
        $txt_1_4 = $_POST['txt_1_4'];
        $txt_1_5 = $_POST['txt_1_5'];
        $txt_observaciones_1 = $_POST['txt_observaciones_1'];
        $txt_2_1 = $_POST['txt_2_1'];
        $txt_2_1_1 = $_POST['txt_2_1_1'];
        $txt_2_1_2 = $_POST['txt_2_1_2'];
        $txt_2_1_3 = $_POST['txt_2_1_3'];
        $txt_2_2 = $_POST['txt_2_2'];
        $txt_2_2_1 = $_POST['txt_2_2_1'];
        $txt_2_2_2 = $_POST['txt_2_2_2'];
        $txt_2_2_3 = $_POST['txt_2_2_3'];
        $txt_2_2_4 = $_POST['txt_2_2_4'];
        $txt_2_3 = $_POST['txt_2_3'];
        $txt_2_4 = $_POST['txt_2_4'];
        $txt_2_5 = $_POST['txt_2_5'];
        $txt_observaciones_2 = $_POST['txt_observaciones_2'];
        $txt_3_1 = $_POST['txt_3_1'];
        $txt_3_2 = $_POST['txt_3_2'];
        $txt_3_3 = $_POST['txt_3_3'];
        $txt_3_4 = $_POST['txt_3_4'];
        $txt_3_5 = $_POST['txt_3_5'];
        $txt_3_6 = $_POST['txt_3_6'];
        $txt_3_7 = $_POST['txt_3_7'];
        $txt_3_8 = $_POST['txt_3_8'];
        $txt_observaciones_3 = $_POST['txt_observaciones_3'];

        $ejecutar = $instancia->set_instrumento_02($id, $action, $region, $cod_mod, $txt_datos_aplicador, $txt_cargo_aplicador, $txt_grado, $txt_tiempo_comida, $txt_mes_reporte, $txt_fecha_aplicacion, $txt_1_1, $txt_1_2, $txt_1_2_1, $txt_1_2_2, $txt_1_2_3, $txt_1_3, $txt_1_4, $txt_1_5, $txt_observaciones_1, $txt_2_1, $txt_2_1_1, $txt_2_1_2, $txt_2_1_3, $txt_2_2, $txt_2_2_1, $txt_2_2_2, $txt_2_2_3, $txt_2_2_4, $txt_2_3, $txt_2_4, $txt_2_5, $txt_observaciones_2, $txt_3_1, $txt_3_2, $txt_3_3, $txt_3_4, $txt_3_5, $txt_3_6, $txt_3_7, $txt_3_8, $txt_observaciones_3);
        echo json_encode($ejecutar);
        break;
    // ! FIN - Instrumento Nro. 02
    // ! INICIO - Instrumento Nro. 01
    case 'delete-int-01':
        $id = $_POST['id'];
        $ejecutar = $instancia->delete_inst_01($id);
        echo json_encode($ejecutar);
        break;
    case 'get-reporte-inst-01-admin':
        $ejecutar = $instancia->get_reporte_inst_01_admin();
        echo json_encode($ejecutar);
        break;
    case 'get-reporte-inst-01':
        $cod_mod = $_SESSION['cod_mod'];
        $ejecutar = $instancia->get_reporte_inst_01($cod_mod);
        echo json_encode($ejecutar);
        break;
    case 'get-preguntas-inst-01':
        $instrumento = $_POST['instrumento'];
        $ejecutar = $instancia->get_preguntos_inst_01($instrumento);
        echo json_encode($ejecutar);
        break;
    case 'save-update-inst-01':
        $id = 0;
        $action               = $_POST['action'];
        $region               = $_SESSION['d_dpto'];
        $cod_mod              = $_SESSION['cod_mod'];
        $txt_est_apellidos    = $_POST['txt-est-apellidos'];
        $txt_est_nombres      = $_POST['txt-est-nombres'];
        $txt_est_edad         = $_POST['txt-est-edad'];
        $txt_est_sexo         = $_POST['txt-est-sexo'];
        $txt_est_etnica       = $_POST['txt-est-etnica'];
        $txt_est_residente    = $_POST['txt-est-residente'];
        $txt_est_findesemana  = $_POST['txt-est-findesemana'];
        $txt_mes_reporte      = $_POST['txt-mes-reporte'];
        $txt_desayuno         = $_POST['txt-desayuno'];
        $txt_almuerzo         = $_POST['txt-almuerzo'];
        $txt_cena             = $_POST['txt-cena'];
        $txt_refrigerio_1     = $_POST['txt-refrigerio-1'];
        $txt_refrigerio_2     = $_POST['txt-refrigerio-2'];
        $sel_opc_1            = $_POST['sel-opc-1'];
        $sel_opc_2_1          = $_POST['sel-opc-2-1'];
        $txt_valor_1          = $_POST['txt-valor-1'];
        $txt_valor_2_1        = $_POST['txt-valor-2-1'];
        $sel_opc_2            = $_POST['sel-opc-2'];
        $sel_opc_2_2          = $_POST['sel-opc-2-2'];
        $txt_valor_2          = $_POST['txt-valor-2'];
        $txt_valor_2_2        = $_POST['txt-valor-2-2'];
        $sel_opc_3            = $_POST['sel-opc-3'];
        $sel_opc_2_3          = $_POST['sel-opc-2-3'];
        $txt_valor_3          = $_POST['txt-valor-3'];
        $txt_valor_2_3        = $_POST['txt-valor-2-3'];
        $sel_opc_4            = $_POST['sel-opc-4'];
        $sel_opc_2_4          = $_POST['sel-opc-2-4'];
        $txt_valor_4          = $_POST['txt-valor-4'];
        $txt_valor_2_4        = $_POST['txt-valor-2-4'];
        $sel_opc_5            = $_POST['sel-opc-5'];
        $sel_opc_2_5          = $_POST['sel-opc-2-5'];
        $txt_valor_5          = $_POST['txt-valor-5'];
        $txt_valor_2_5        = $_POST['txt-valor-2-5'];
        $sel_opc_6            = $_POST['sel-opc-6'];
        $sel_opc_2_6          = $_POST['sel-opc-2-6'];
        $txt_valor_6          = $_POST['txt-valor-6'];
        $txt_valor_2_6        = $_POST['txt-valor-2-6'];
        $sel_opc_7            = $_POST['sel-opc-7'];
        $sel_opc_2_7          = $_POST['sel-opc-2-7'];
        $txt_valor_7          = $_POST['txt-valor-7'];
        $txt_valor_2_7        = $_POST['txt-valor-2-7'];
        $sel_opc_8            = $_POST['sel-opc-8'];
        $sel_opc_2_8          = $_POST['sel-opc-2-8'];
        $txt_valor_8          = $_POST['txt-valor-8'];
        $txt_valor_2_8        = $_POST['txt-valor-2-8'];
        $sel_opc_9            = $_POST['sel-opc-9'];
        $sel_opc_2_9          = $_POST['sel-opc-2-9'];
        $txt_valor_9          = $_POST['txt-valor-9'];
        $txt_valor_2_9        = $_POST['txt-valor-2-9'];
        $sel_opc_10           = $_POST['sel-opc-10'];
        $sel_opc_2_10         = $_POST['sel-opc-2-10'];
        $txt_valor_10         = $_POST['txt-valor-10'];
        $txt_valor_2_10       = $_POST['txt-valor-2-10'];
        $sel_opc_11           = $_POST['sel-opc-11'];
        $sel_opc_2_11         = $_POST['sel-opc-2-11'];
        $txt_valor_11         = $_POST['txt-valor-11'];
        $txt_valor_2_11       = $_POST['txt-valor-2-11'];
        $sel_opc_12           = $_POST['sel-opc-12'];
        $sel_opc_2_12         = $_POST['sel-opc-2-12'];
        $txt_valor_12         = $_POST['txt-valor-12'];
        $txt_valor_2_12       = $_POST['txt-valor-2-12'];
        $sel_opc_13           = $_POST['sel-opc-13'];
        $sel_opc_2_13         = $_POST['sel-opc-2-13'];
        $txt_valor_13         = $_POST['txt-valor-13'];
        $txt_valor_2_13       = $_POST['txt-valor-2-13'];
        $sel_opc_14           = $_POST['sel-opc-14'];
        $sel_opc_2_14         = $_POST['sel-opc-2-14'];
        $txt_valor_14         = $_POST['txt-valor-14'];
        $txt_valor_2_14       = $_POST['txt-valor-2-14'];
        $sel_opc_15           = $_POST['sel-opc-15'];
        $sel_opc_2_15         = $_POST['sel-opc-2-15'];
        $txt_valor_15         = $_POST['txt-valor-15'];
        $txt_valor_2_15       = $_POST['txt-valor-2-15'];
        $sel_opc_16           = $_POST['sel-opc-16'];
        $sel_opc_2_16         = $_POST['sel-opc-2-16'];
        $txt_valor_16         = $_POST['txt-valor-16'];
        $txt_valor_2_16       = $_POST['txt-valor-2-16'];
        $sel_opc_17           = $_POST['sel-opc-17'];
        $sel_opc_2_17         = $_POST['sel-opc-2-17'];
        $txt_valor_17         = $_POST['txt-valor-17'];
        $txt_valor_2_17       = $_POST['txt-valor-2-17'];
        $sel_opc_18           = $_POST['sel-opc-18'];
        $sel_opc_2_18         = $_POST['sel-opc-2-18'];
        $txt_valor_18         = $_POST['txt-valor-18'];
        $txt_valor_2_18       = $_POST['txt-valor-2-18'];
        $sel_opc_19           = $_POST['sel-opc-19'];
        $sel_opc_2_19         = $_POST['sel-opc-2-19'];
        $txt_valor_19         = $_POST['txt-valor-19'];
        $txt_valor_2_19       = $_POST['txt-valor-2-19'];
        $sel_opc_20           = $_POST['sel-opc-20'];
        $sel_opc_2_20         = $_POST['sel-opc-2-20'];
        $txt_valor_20         = $_POST['txt-valor-20'];
        $txt_valor_2_20       = $_POST['txt-valor-2-20'];
        $sel_opc_21           = $_POST['sel-opc-21'];
        $sel_opc_2_21         = $_POST['sel-opc-2-21'];
        $txt_valor_21         = $_POST['txt-valor-21'];
        $txt_valor_2_21       = $_POST['txt-valor-2-21'];
        $sel_opc_22           = $_POST['sel-opc-22'];
        $sel_opc_2_22         = $_POST['sel-opc-2-22'];
        $txt_valor_22         = $_POST['txt-valor-22'];
        $txt_valor_2_22       = $_POST['txt-valor-2-22'];
        $sel_opc_23           = $_POST['sel-opc-23'];
        $sel_opc_2_23         = $_POST['sel-opc-2-23'];
        $txt_valor_23         = $_POST['txt-valor-23'];
        $txt_valor_2_23       = $_POST['txt-valor-2-23'];
        $sel_opc_24           = $_POST['sel-opc-24'];
        $sel_opc_2_24         = $_POST['sel-opc-2-24'];
        $txt_valor_24         = $_POST['txt-valor-24'];
        $txt_valor_2_24       = $_POST['txt-valor-2-24'];
        $txt_otro_25          = $_POST['txt-otro-25'];
        $sel_opc_25           = $_POST['sel-opc-25'];
        $sel_opc_2_25         = $_POST['sel-opc-2-25'];
        $txt_valor_25         = $_POST['txt-valor-25'];
        $txt_valor_2_25       = $_POST['txt-valor-2-25'];
        $txt_otro_26          = $_POST['txt-otro-26'];
        $sel_opc_26           = $_POST['sel-opc-26'];
        $sel_opc_2_26         = $_POST['sel-opc-2-26'];
        $txt_valor_26         = $_POST['txt-valor-26'];
        $txt_valor_2_26       = $_POST['txt-valor-2-26'];
        $txt_otro_27          = $_POST['txt-otro-27'];
        $sel_opc_27           = $_POST['sel-opc-27'];
        $sel_opc_2_27         = $_POST['sel-opc-2-27'];
        $txt_valor_27         = $_POST['txt-valor-27'];
        $txt_valor_2_27       = $_POST['txt-valor-2-27'];
        $txt_fecha_aplicacion = $_POST['txt-fecha-aplicacion'];

        $ejecutar = $instancia->set_instrumento_01($id, $action, $region, $cod_mod, $txt_est_apellidos, $txt_est_nombres, $txt_est_edad, $txt_est_sexo, $txt_est_etnica, $txt_est_residente, $txt_est_findesemana, $txt_mes_reporte, $txt_desayuno, $txt_almuerzo, $txt_cena, $txt_refrigerio_1, $txt_refrigerio_2, $sel_opc_1, $sel_opc_2_1, $txt_valor_1, $txt_valor_2_1, $sel_opc_2, $sel_opc_2_2, $txt_valor_2, $txt_valor_2_2, $sel_opc_3, $sel_opc_2_3, $txt_valor_3, $txt_valor_2_3, $sel_opc_4, $sel_opc_2_4, $txt_valor_4, $txt_valor_2_4, $sel_opc_5, $sel_opc_2_5, $txt_valor_5, $txt_valor_2_5, $sel_opc_6, $sel_opc_2_6, $txt_valor_6, $txt_valor_2_6, $sel_opc_7, $sel_opc_2_7, $txt_valor_7, $txt_valor_2_7, $sel_opc_8, $sel_opc_2_8, $txt_valor_8, $txt_valor_2_8, $sel_opc_9, $sel_opc_2_9, $txt_valor_9, $txt_valor_2_9, $sel_opc_10, $sel_opc_2_10, $txt_valor_10, $txt_valor_2_10, $sel_opc_11, $sel_opc_2_11, $txt_valor_11, $txt_valor_2_11, $sel_opc_12, $sel_opc_2_12, $txt_valor_12, $txt_valor_2_12, $sel_opc_13, $sel_opc_2_13, $txt_valor_13, $txt_valor_2_13, $sel_opc_14, $sel_opc_2_14, $txt_valor_14, $txt_valor_2_14, $sel_opc_15, $sel_opc_2_15, $txt_valor_15, $txt_valor_2_15, $sel_opc_16, $sel_opc_2_16, $txt_valor_16, $txt_valor_2_16, $sel_opc_17, $sel_opc_2_17, $txt_valor_17, $txt_valor_2_17, $sel_opc_18, $sel_opc_2_18, $txt_valor_18, $txt_valor_2_18, $sel_opc_19, $sel_opc_2_19, $txt_valor_19, $txt_valor_2_19, $sel_opc_20, $sel_opc_2_20, $txt_valor_20, $txt_valor_2_20, $sel_opc_21, $sel_opc_2_21, $txt_valor_21, $txt_valor_2_21, $sel_opc_22, $sel_opc_2_22, $txt_valor_22, $txt_valor_2_22, $sel_opc_23, $sel_opc_2_23, $txt_valor_23, $txt_valor_2_23, $sel_opc_24, $sel_opc_2_24, $txt_valor_24, $txt_valor_2_24, $txt_otro_25, $sel_opc_25, $sel_opc_2_25, $txt_valor_25, $txt_valor_2_25, $txt_otro_26, $sel_opc_26, $sel_opc_2_26, $txt_valor_26, $txt_valor_2_26, $txt_otro_27, $sel_opc_27, $sel_opc_2_27, $txt_valor_27, $txt_valor_2_27, $txt_fecha_aplicacion);

        echo json_encode($ejecutar);
        break;
    // ! FIN - Instrumento Nro. 01
    default:
        break;
}