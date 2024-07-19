<?php include_once "var_includes.php"; ?>
<!DOCTYPE html>
<!-- Last Published: Wed Jul 06 2022 15:53:36 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="<?=$empresa_dominio?>" data-wf-page="6254a50daf62985e48c003cd" data-wf-site="6254a50daf6298adb0c003ca">
<head>
    <meta charset="utf-8" />
    <title>Conócenos / <?=$empresa_nombre_solo?> - Inversiones</title>
    <meta content="Con <?=$empresa_nombre_solo?> invertir en el extranjero es de forma simple, segura y de la mano de expertos. Únete ahora." name="description" />
    <meta content="Conóncenos - <?=$empresa_nombre_solo?> - Invertir es simple" property="og:title" />
    <meta content="Con <?=$empresa_nombre_solo?> SAF invertir en el extranjero es de forma simple, segura y de la mano de expertos. Únete ahora." property="og:description" />
    <meta content="https://portal.miblum.com/img/blumbanner_png.png" property="og:image" />
    <meta content="Conóncenos - <?=$empresa_nombre_solo?> - Invertir es simple" property="twitter:title" />
    <meta content="Con <?=$empresa_nombre_solo?> invertir en el extranjero es de forma simple, segura y de la mano de expertos. Únete ahora." property="twitter:description" />
    <meta content="https://portal.miblum.com/img/blumbanner_png.png" property="twitter:image" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="iykbLtZgGAvzxPObcNdrE7SB-0_AthZneXtanwTZV-g" name="google-site-verification" />
    <link href="https://assets.website-files.com/6254a50daf6298adb0c003ca/css/miblum.630bbc33d.css" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
    ! function(o, c) {
        var n = c.documentElement,
            t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
    </script>
    <link href="<?= $empresa_icon ?>" rel="shortcut icon" type="image/x-icon" />
    <link href="<?= $empresa_icon ?>" rel="apple-touch-icon" />
    <style>.anti-flicker-hide { opacity: 0 !important}</style>
    <script type="text/javascript">
    (function(a, s, y, n, c, h, i, d, e) {
        s.className += ' ' + y;
        h.start = 1 * new Date;
        h.end = i = function() { s.className = s.className.replace(RegExp(' ?' + y), '') };
        (a[n] = a[n] || []).hide = h;
        setTimeout(function() {
            i();
            h.end = null
        }, c);
        h.timeout = c;
    })(window, document.documentElement, 'anti-flicker-hide', 'dataLayer', 4000, { 'OPT-ND6GV8G': true });
    </script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-210891041-1"></script>
    <script type="text/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() { dataLayer.push(arguments); } gtag('js', new Date());
    gtag('config', 'UA-210891041-1', { 'anonymize_ip': false, 'optimize_id': 'OPT-ND6GV8G' });
    </script>
    <script type="text/javascript">
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() { n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments) };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.agent = 'plwebflow';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '912103529658896');
    fbq('track', 'PageView');
    </script>
    <!--Amplitude Code-->
    <script type="text/javascript">
    (function(e, t) {
        var n = e.amplitude || { _q: [], _iq: {} };
        var r = t.createElement("script");
        r.type = "text/javascript";
        r.integrity = "sha384-+EO59vL/X7v6VE2s6/F4HxfHlK0nDUVWKVg8K9oUlvffAeeaShVBmbORTC2D3UF+";
        r.crossOrigin = "anonymous";
        r.async = true;
        r.src = "https://cdn.amplitude.com/libs/amplitude-8.17.0-min.gz.js";
        r.onload = function() {
            if (!e.amplitude.runQueuedFunctions) {
                console.log("[Amplitude] Error: could not load SDK")
            }
        };
        var i = t.getElementsByTagName("script")[0];
        i.parentNode.insertBefore(r, i);

        function s(e, t) {
            e.prototype[t] = function() {
                this._q.push([t].concat(Array.prototype.slice.call(arguments, 0)));
                return this
            }
        }
        var o = function() { this._q = []; return this };
        var a = ["add", "append", "clearAll", "prepend", "set", "setOnce", "unset", "preInsert", "postInsert", "remove"];
        for (var c = 0; c < a.length; c++) { s(o, a[c]) } n.Identify = o;
        var u = function() {
            this._q = [];
            return this
        };
        var l = ["setProductId", "setQuantity", "setPrice", "setRevenueType", "setEventProperties"];
        for (var p = 0; p < l.length; p++) { s(u, l[p]) } n.Revenue = u;
        var d = ["init", "logEvent", "logRevenue", "setUserId", "setUserProperties", "setOptOut", "setVersionName", "setDomain", "setDeviceId", "enableTracking", "setGlobalUserProperties", "identify", "clearUserProperties", "setGroup", "logRevenueV2", "regenerateDeviceId", "groupIdentify", "onInit", "logEventWithTimestamp", "logEventWithGroups", "setSessionId", "resetSessionId"];

        function v(e) {
            function t(t) {
                e[t] = function() {
                    e._q.push([t].concat(Array.prototype.slice.call(arguments, 0)))
                }
            }
            for (var n = 0; n < d.length; n++) { t(d[n]) }
        }
        v(n);
        n.getInstance = function(e) {
            e = (!e || e.length === 0 ? "$default_instance" : e).toLowerCase();
            if (!Object.prototype.hasOwnProperty.call(n._iq, e)) {
                n._iq[e] = { _q: [] };
                v(n._iq[e])
            }
            return n._iq[e]
        };
        e.amplitude = n
    })(window, document);

    amplitude.getInstance().init("0657847f7f1518d77c5d603092026b65");
    </script>
    <script>
    var eventProperties = {
        'page': window.location.pathname
    };
    amplitude.getInstance().logEvent('web:team', eventProperties);
    </script>
    <script type="text/javascript">
    window.__WEBFLOW_CURRENCY_SETTINGS = { "currencyCode": "USD", "$init": true, "symbol": "$", "decimal": ".", "fractionDigits": 2, "group": ",", "template": "{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}", "hideDecimalForWholeNumbers": false };
    </script>
</head>

<body>
    <div data-w-id="30e72098-383f-aa99-a958-3300d8704335" data-animation="default" data-collapse="medium" data-duration="200" data-easing="ease" data-easing2="ease" role="banner" class="header-wrapper w-nav">
      <?php include_once "views/sections/navbar.php" ?>
        <!--<div class="header-content">
            <div class="container-default header w-container">
                <div class="header-content-wrapper">
                    <div class="header-left-side"><a href="/" class="header-logo-link w-nav-brand"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6254aadcb32a48aa0e273106_log%2Bslogan.svg" alt="" class="header-logo" /></a></div>
                    <div class="header-right-side">
                        <nav role="navigation" class="header-nav-menu-wrapper w-nav-menu">
                            <ul role="list" class="header-nav-menu-list">
                                <li><a href="/" class="nav-link-2 w-nav-link"><span class="inicio">Inicio</span></a></li>
                                <li><a href="/conocenos" aria-current="page" class="nav-link-3 w-nav-link w--current"><span class="con-cenos">Conócenos</span></a></li>
                                <li><a href="/blog" class="nav-link-5 w-nav-link"><span class="blog">Blog</span></a></li>
                                <li class="list-item-6"><a href="/fondos" class="nav-link-4 w-nav-link"><span class="fondo-blum">Fondos <?=$empresa_nombre_solo?> Renta Global</span></a></li>
                                <li class="list-item-6"><a href="/fondos" class="nav-link-4 w-nav-link"><span class="fondo-blum">Fondos <?=$empresa_nombre_solo?> Cash</span></a></li>
                                <li class="list-item-7">
                                    <div data-hover="true" data-delay="0" class="dropdown-2 w-dropdown">
                                        <div class="dropdown w-dropdown-toggle">
                                            <div class="icon w-icon-dropdown-toggle"></div>
                                            <div class="text-block-57">Fondos</div>
                                        </div>
                                        <nav class="w-dropdown-list"><a href="http://www.miblum.com/fondos" target="_blank" class="dropdown-link-3 w-dropdown-link">Renta Global</a><a href="http://www.miblum.com/fondo-blum-cash" target="_blank" class="dropdown-link-5 w-dropdown-link">Cash</a><a href="#" class="dropdown-link w-dropdown-link">Link 3</a></nav>
                                    </div>
                                </li>
                                <li class="list-item-5"><a href="https://portal.miblum.com/" target="_blank" class="nav-link-5 w-nav-link"><span class="blog">Iniciar sesión</span></a></li>
                            </ul>
                        </nav>
                        <div class="buttons-row header">
                            <div class="btn-row-left header"><a href="https://portal.miblum.com/" target="_blank" class="btn-secondary small w-button">Iniciar sesión</a></div>
                            <div class="btn-row-right"><a id="btw_empezar_header" href="https://portal.miblum.com/create-customer" target="_blank" class="btn-primary small w-button">Empezar</a></div>
                        </div>
                        <div class="hamburger-menu-wrapper w-nav-button">
                            <div class="hamburger-menu-bar top"></div>
                            <div class="hamburger-menu-bar bottom"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
    <div class="section hero _02 bg-neutral-200 wf-section">
        <div class="container-default w-container">
            <div class="w-layout-grid grid-1-column gap-row-100px">
                <div id="w-node-_3d37dfec-28b2-58dd-e62f-54292d965eb2-48c003cd" class="inner-container _680px-tablet center">
                    <div class="w-layout-grid grid-2-columns hero-02">
                        <div class="text-center-tablet">
                            <div data-w-id="3d37dfec-28b2-58dd-e62f-54292d965eb5" style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform-style:preserve-3d;opacity:0" class="mg-bottom-22px">
                                <div class="text-block-3">Conócenos</div>
                            </div>
                            <h1 data-w-id="3d37dfec-28b2-58dd-e62f-54292d965eb8" style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform-style:preserve-3d;opacity:0" class="heading-8">Invertir es <span class="text-span-2">sobre ti</span></h1>
                            <div class="inner-container _590px center-tablet">
                                <p data-w-id="3d37dfec-28b2-58dd-e62f-54292d965ebd" style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform-style:preserve-3d;opacity:0" class="paragraph-3">Tus finanzas son tu futuro, y estamos aquí para ayudarte a lograr tus metas<br />
                                </p>
                            </div>
                        </div><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256c20ad96f901dfbe90289_Captura%20de%20Pantalla%202022-04-13%20a%20la(s)%2007.26.38.png" loading="lazy" width="471" id="w-node-_3d37dfec-28b2-58dd-e62f-54292d965ec0-48c003cd" sizes="(max-width: 479px) 60vw, (max-width: 767px) 64vw, (max-width: 991px) 413px, (max-width: 1439px) 30vw, 330.390625px" srcset="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256c20ad96f901dfbe90289_Captura%20de%20Pantalla%202022-04-13%20a%20la(s)%2007.26.38-p-500.png 500w, https://assets.website-files.com/6254a50daf6298adb0c003ca/6256c20ad96f901dfbe90289_Captura%20de%20Pantalla%202022-04-13%20a%20la(s)%2007.26.38-p-800.png 800w, https://assets.website-files.com/6254a50daf6298adb0c003ca/6256c20ad96f901dfbe90289_Captura%20de%20Pantalla%202022-04-13%20a%20la(s)%2007.26.38.png 860w" alt="" class="image-13" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-31-section1 wf-section">
        <div class="mg-bottom-64px">
            <div class="text-center">
                <h2 class="heading-9">Nuestro equipo <?=$empresa_nombre_solo?><span class="text-no-wrap"></span></h2>
            </div>
        </div>
        <div class="w-layout-grid d-32-grid4">
            <div data-w-id="8eab55bc-d1e4-5ed0-c7d9-0f1b3f18c772" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e6a1791469e41993b5_Alfonso.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Manuel Villegas </h4>
                        <h6 class="heading-12">CEO, Director</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Manuel<br /> Villegas</h3>
                        <p class="paragraph-5">- 22 años de experiencia en mercados globales.<br />- Gerente de Inversiones, Credicorp Capital.<br />- Fundador y Gerente de Inversiones; Creuza Advisors.<br />- Subgerente de Inversiones, Prima AFP.- BA, Dartmouth College.<br />- MBA, Stanford Graduate School of Business.<br /><br />‍</p>
                    </div>
                </div>
            </div>
            <div id="w-node-cf3c6643-3653-f719-28d9-5ab4dd333869-48c003cd" data-w-id="cf3c6643-3653-f719-28d9-5ab4dd333869" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625dedc6a9709b9921953bb1_Guillermo.png" loading="lazy" width="300" height="400" sizes="300px" srcset="https://assets.website-files.com/6254a50daf6298adb0c003ca/625dedc6a9709b9921953bb1_Guillermo-p-500.png 500w, https://assets.website-files.com/6254a50daf6298adb0c003ca/625dedc6a9709b9921953bb1_Guillermo-p-800.png 800w, https://assets.website-files.com/6254a50daf6298adb0c003ca/625dedc6a9709b9921953bb1_Guillermo.png 822w" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Peter Rivera</h4>
                        <h6 class="heading-12">Head Product &amp; Growth, Director</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Peter <br />Rivera</h3>
                        <p class="paragraph-5">- 22 años de experiencia en finanzas e inversiones. <br />- Inversionista de Venture Capital, Salkantay Ventures.<br />- Inversionista de Private Equity, Nexus Group.<br />- Banquero de Inversión, JPMorgan Chase.<br />- BA, Dartmouth College.<br />‍<br />‍<br />‍</p>
                    </div>
                </div>
            </div>
            <div data-w-id="0b488b93-c0a3-6147-a31c-d72bb8d72854" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e8285fddf0cb625195_Abner.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Jonathan Pacherrez</h4>
                        <h6 class="heading-12">Gerente de tecnología</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Jonathan <br />Pacherrez</h3>
                        <p class="paragraph-5">- 24 años de experiencia en tecnología; especialista en innovación y agilidad.<br />- Gerente del Centro de Excelencia de Agilidad, Belcorp.<br />- Gerente de Arquitectura Digital, InterbankHead de Agilidad &amp; Tecnología, Centro de InnovaCXión BCP.<br />- Ingeniería Informática, PUCP.<br />‍<br />‍</p>
                    </div>
                </div>
            </div>
            <!--<div data-w-id="1743da9e-40e0-843f-1706-e367c9a310ff" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e9873ed2a10b148b9d_Evanice.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Evanice Duran, CFA</h4>
                        <h6 class="heading-12">Gerente de Operaciones</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Evanice<br />Duran, CFA</h3>
                        <p class="paragraph-5">- 15 años de experiencia en Riesgos e Inversiones.<br />- VP Riesgo de Portafolio, Sura Investment Management. <br />-Directora de Inversiones, Sura Asset Management.<br />- Riesgos de Inversión, Seguros Sura, AFP Integra y Fondos Sura.<br />- Master Economía y Finanzas Internacionales, Université de Bordeaux.<br />- BA Economía, UNALM.</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="1b1de5a1-9484-07b3-8f72-5d9cd2aa28df" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e9a012edf4d01ce572_Magaly.jpg" loading="lazy" height="400" width="300" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Magaly Ventura</h4>
                        <h6 class="heading-12">Jefe de Control Interno y Riesgos</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Magaly <br />Ventura</h3>
                        <p class="paragraph-5">- 13 años de experiencia en Riesgos, Control Interno y Cumplimiento.<br />- Profesional de la Superintendencia Adjunta de Riesgos de la SMV.<br />- Responsable de Riesgos Operacionales, Fondos Sura y SAB Sura.<br />- Funcionaria de Control Interno, BBVA Continental BolsaInternal Control Certificate (COSO)<br />- MBA, Universidad ESANContadora Pública</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="658fd470-2e1a-f608-eff8-15e08c29cb7d" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e861eed36d7d935802_Jason.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Jason Bayes, CQF</h4>
                        <h6 class="heading-12">Portafolio Manager</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Jason<br />Bayes, CQF</h3>
                        <p class="paragraph-5">- 6 años de experiencia en el mercado capitales nacional e internacional.<br />- Analista de Riesgos de Inversión, Sura Investment Management.<br />- Analista de Inversiones, Inteligo SAB<br />- Certificate in Quantitative Finance (CQF).<br />- BSc. Ingeniería Económica, UNI<br /><br /><br /><br />‍</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="873deac4-e7b4-2e1d-8f4a-561032e3091a" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e9c31a1c45a417ab1d_Raquel.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Raquel Peña</h4>
                        <h6 class="heading-12">Coordinadora de Marketing</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Raquel <br />Peña</h3>
                        <p class="paragraph-5">- Especialista en Marketing Digital.<br />- 7 años de experiencia en comercio electrónico y negocios digitales.<br />- Coordinadora de Marketing Digital en Mercado Libre.<br />- Especialización en Marketing Digital, Universidad del Pacífico.<br />- Programa ejecutivo en Analítica Digital y Growth Hacking, Universidad del Pacífico.<br />- Comunicaciones, Universidad de Lima</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="413e0a0f-25c5-bc76-6de8-cf2ba5723cc9" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e9ffad5c24064e0a58_Nadia.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Nadia Breuer</h4>
                        <h6 class="heading-12">Senior Product Designer</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Nadia<br />Breuer</h3>
                        <p class="paragraph-5">- Diseñadora de Servicios y Experiencia de usuario.<br />- 8 años de experiencia en diseño de servicios y productos digitales.<br />- Design Lead en Crack The Code.<br />- Service Designer Senior en Pacífico.<br />- Design Researcher Lead en Agora.<br />- Strategic Leadership. MIT<br />- Dirección y Diseño Gráfico en Toulouse Lautrec.<br />‍</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="55742145-191f-6942-f6ea-ca7075bf946d" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e84f7bce140a4e6548_Carolina.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Carolina Rivas</h4>
                        <h6 class="heading-12">Analista de operaciones</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Carolina<br />Rivas</h3>
                        <p class="paragraph-5">- 8 años de experiencia en BackOffice de clientes e inversiones para FFMM y FI.<br />- Líder funcional en proyectos de RPA y de mejora de procesos basados en metodologías ágiles.<br />- Analista II de operaciones en Fondos SURA.<br />- Licenciada en Administración de la UNMSM<br />‍<br />‍</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="480895d5-9b24-db9b-9cdc-da6afafd0575" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e735d1a662c1e2f2e7_Bertha.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Bertha Vásquez</h4>
                        <h6 class="heading-12">Analista de operaciones</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Bertha <br />Vásquez</h3>
                        <p class="paragraph-5">- 8 años de experiencia en operaciones.<br />- Analista de Operaciones en Credicorp Capital.<br />- Administración de Empresas, USIL.<br /><br /><br /><br /><br />‍<br /><br />‍</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="0da3c5e4-3653-c579-ee41-7e19b8c2905c" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e8bdaa47e4dcab586e_Jose%20Fernandez.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Jose Fernandez</h4>
                        <h6 class="heading-12">Asistente de Admin y Finanzas</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Jose Antonio <br />Fernandez</h3>
                        <p class="paragraph-5">- Business Development en Futureco Bioscience.<br />- Business Management, University of Surrey.<br /><br /><br /><br /><br /><br /><br /><br />‍</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="6bdbe2a5-916e-5741-7a87-974024fe9a75" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e96e9f1df8120260f2_Jose%CC%81%20Paredes.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Jose Paredes</h4>
                        <h6 class="heading-12">Asistente de Riesgos y Control Interno</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Jose Antonio <br />Paredes</h3>
                        <p class="paragraph-5">- Bachiller en Ingeniería de Computación y Sistemas en la USMP.<br />- Practicante Profesional de Seguridad de la Información en el área SOC en Canvia.<br /><br /><br /><br /><br /><br /><br />‍</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="560f94b7-a238-5b96-1329-153b4517c6c2" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e9927ba26ff9acc918_Lizeth.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Lizeth La Serna</h4>
                        <h6 class="heading-12">Backend Dev</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Lizeth <br />La Serna</h3>
                        <p class="paragraph-5">- 3 años de experiencia desarrollando soluciones Web Full Stack.<br />- Analista Programador en ITB Solution para el HRA Ayacucho.BSc. <br />- Ingeniería de Sistemas, UNSCH.<br /><br /><br /><br /><br /><br />‍<br />‍</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="f3d80319-3b2b-2ebc-67d4-0ceb9fceadbe" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e861eed38660935803_Gedy.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Gedy Palomino</h4>
                        <h6 class="heading-12">Backend Dev</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Gedy<br />Palomino</h3>
                        <p class="paragraph-5">- 4 años de experiencia en desarrollo de aplicaciones fullstack con JavaScript / TypeScript.<br />- 3 años desarrollando aplicaciones fullstack como freelance.<br />- Bachiller en Ingeniería de Sistemas, UNSCH.<br /><br /><br /><br /><br />‍</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="132d2099-ff9e-ed08-f15b-c32fae28b500" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e91c96b0712704a33a_Luis.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Luis Isasi</h4>
                        <h6 class="heading-12">Frontend Dev</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Luis<br />Isasi</h3>
                        <p class="paragraph-5">- Desarrollador Frontend en el ecosistema de React por más de 2 años.<br />- Core Member en Google Developer Student Clubs UNICA.<br />- Estudiante de la Carrera de Ing. de Sistemas en la UNICA.<br /><br /><br /><br /><br />‍</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="86332896-28fd-012a-fac4-79a4ac8c327c" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/627534a0d15f2829a9c17cbd_Captura%20de%20Pantalla%202022-05-06%20a%20la(s)%2009.45.43.png" loading="lazy" width="300" height="400" sizes="300px" srcset="https://assets.website-files.com/6254a50daf6298adb0c003ca/627534a0d15f2829a9c17cbd_Captura%20de%20Pantalla%202022-05-06%20a%20la(s)%2009.45.43-p-500.png 500w, https://assets.website-files.com/6254a50daf6298adb0c003ca/627534a0d15f2829a9c17cbd_Captura%20de%20Pantalla%202022-05-06%20a%20la(s)%2009.45.43.png 726w" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Carlos Huamaní</h4>
                        <h6 class="heading-12">Frontend Dev</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Carlos <br />Huamaní</h3>
                        <p class="paragraph-5">- 11 años de experiencia en tecnología, especialista en el área de frontend e innovación<br />- Senior Frontend Developer en Auna<br />- Senior Frontend Developer, Chapter Frontend Lead en la Universidad Tecnológica del Perú<br />- Frontend Developer en el Grupo el Comercio<br />- Ingeniería de Sistemas, UPC</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="faa4318b-46ce-4b4e-fe5c-6122b91f64b5" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e95a40ef6173dfc0ca_Marti%CC%81n.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Martín Aspillaga</h4>
                        <h6 class="heading-12">Director</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Martín <br />Aspillaga</h3>
                        <p class="paragraph-5">- 22 años de experiencia en finanzas, inversiones, y consultoría.<br />- Inversionista de Venture Capital, Salkantay Ventures.<br />- Inversionista de Private Equity, Enfoca.<br />- Consultor, Bain &amp; CoBA, Universidad del Pacífico.<br />- MBA, Harvard Business School.<br /><br /><br />‍</p>
                    </div>
                </div>
            </div>-->
            <!--<div data-w-id="374298c9-0696-9002-f78c-07ddeee7cd86" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31eb21340b07ce41370a_Richard.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name"></div>
                        <h4 class="heading-11">Richard Custer</h4>
                        <h6 class="heading-12">Director Independiente</h6>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Richard<br />Custer</h3>
                        <p class="paragraph-5">- Presidente del Directorio y Director de Transformación, Lukoll SAC.<br />- Vice-Presidente Especialista de Banca Privada, BCP.<br />- Gerente de Estrategia Digital y Planeamiento, Centro de InnovaCXión (CIX) BCP.<br />- Gerente de Estrategia Digital en Canales Alternativos, BCP.<br />- MBA, Kellogg School of Management.<br />- BA, Babson College.</p>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
    <div class="d-31-section2 wf-section">
        <div class="mg-bottom-64px">
            <div class="text-center">
                <h2 class="heading-9"><span class="text-no-wrap">Comité de Inversiones</span></h2>
            </div>
        </div>
        <div class="w-layout-grid grid-11">
            <div data-w-id="65a7d8e3-a619-daad-b917-ddef02906f6e" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e6a1791469e41993b5_Alfonso.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name">
                            <h5 class="heading-13">Manuel Villegas</h5>
                        </div>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Manuel<br />Villegas</h3>
                        <p class="paragraph-5">- 22 años de experiencia en mercados globales.<br />- Gerente de Inversiones, Credicorp Capital.<br />- Fundador y Gerente de Inversiones; Creuza Advisors.<br />- Subgerente de Inversiones, Prima AFP.- BA, Dartmouth College.<br />- MBA, Stanford Graduate School of Business.<br /><br /></p>
                    </div>
                </div>
            </div>
            <div data-w-id="65a7d8e3-a619-daad-b917-ddef02906f9e" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e7daff9d7f37946148_Javier.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name">
                            <h5 class="heading-13">Peter Rivera</h5>
                        </div>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Peter <br />Rivera</h3>
                        <p class="paragraph-5">- Gerente de Planeamiento Corporativo, Entel Perú.<br />- VP Regional de Portafolio Solutions, Credicorp Capital.<br />- Jefe del Departamento de Indicadores Económicos, BCRP<br />- MPA, UC Berkeley.<br />- BA Economía, U.Pacífico<br /><br /><br />‍</p>
                    </div>
                </div>
            </div>
            <div id="w-node-_65a7d8e3-a619-daad-b917-ddef02906f86-48c003cd" data-w-id="65a7d8e3-a619-daad-b917-ddef02906f86" class="d-31-card-wrapper">
                <div class="d-31-card">
                    <div class="d-31-card-front"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/625f31e861eed36d7d935802_Jason.jpg" loading="lazy" width="300" height="400" alt="" class="d-31-card-image" />
                        <div class="d-32-card-name">
                            <h5 class="heading-13">Jonathan Pacherrez</h5>
                        </div>
                    </div>
                    <div class="d-31-card-back">
                        <h3 class="d-31-h3">Jonathan <br />Pacherrez</h3>
                        <p class="paragraph-5">- 6 años de experiencia en el mercado capitales nacional e internacional.<br />- Analista de Riesgos de Inversión, Sura Investment Management.<br />- Analista de Inversiones, Inteligo SAB<br />- Certificate in Quantitative Finance (CQF).<br />- BSc. Ingeniería Económica, UNI<br /><br /><br /><br /></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-31-section3 wf-section">
        <div class="container-3 w-container">
            <div class="w-layout-grid grid-1-column gap-row-100px">
                <div id="w-node-_787187c4-d6e2-31d1-dc45-b996633d785a-48c003cd" class="inner-container _680px-tablet center">
                    <div class="w-layout-grid grid-2-columns hero-02">
                        <div class="text-center-tablet">
                            <h1 data-w-id="787187c4-d6e2-31d1-dc45-b996633d7860" style="-webkit-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-moz-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);-ms-transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform:translate3d(0, 20px, 0) scale3d(1, 1, 1) rotateX(-20deg) rotateY(null) rotateZ(null) skew(0, 0);transform-style:preserve-3d;opacity:0" class="heading-8">¿Quieres <span class="text-span-4">conocernos</span> un poco más?<span class="text-span-2"></span></h1><a href="/blog" class="button-2 w-button">ir al blog</a>
                        </div><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256c20ad96f901dfbe90289_Captura%20de%20Pantalla%202022-04-13%20a%20la(s)%2007.26.38.png" loading="lazy" width="471" id="w-node-_787187c4-d6e2-31d1-dc45-b996633d7868-48c003cd" sizes="(max-width: 479px) 85vw, (max-width: 767px) 70vw, (max-width: 991px) 471px, 283.734375px" srcset="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256c20ad96f901dfbe90289_Captura%20de%20Pantalla%202022-04-13%20a%20la(s)%2007.26.38-p-500.png 500w, https://assets.website-files.com/6254a50daf6298adb0c003ca/6256c20ad96f901dfbe90289_Captura%20de%20Pantalla%202022-04-13%20a%20la(s)%2007.26.38-p-800.png 800w, https://assets.website-files.com/6254a50daf6298adb0c003ca/6256c20ad96f901dfbe90289_Captura%20de%20Pantalla%202022-04-13%20a%20la(s)%2007.26.38.png 860w" alt="" class="image-13" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "views/sections/footer.php"; ?>
    <!--<footer id="btn_invertir_footer" class="footer-wrapper">
        <div class="container-default w-container">
            <div data-w-id="9566e1e2-4862-c17d-08fa-fb50b8a31b45" class="footer-top">
                <div class="w-layout-grid grid-footer-2-column---logo-and-buttons">
                    <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b48-b8a31b43" class="inner-container _450px"><a href="/" class="footer-logo-wrapper w-inline-block"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/62682f45fec0408738096343_Logo%20Blanco.png" alt="" class="footer-logo" /></a></div>
                    <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b4f-b8a31b43" class="buttons-row download-app">
                        <div class="btn-row-left download-app"><a href="http://portal.miblum.com/create-customer" target="_blank" class="btn-primary download-app w-inline-block">
                                <div class="text-block">Invertir</div>
                            </a></div>
                    </div>
                </div>
                <p class="paragraph">Invierte en el extranjero de forma simple, segura y de la mano de expertos.</p>
            </div>
            <div data-w-id="9566e1e2-4862-c17d-08fa-fb50b8a31b5c" class="footer-middle">
                <div class="w-layout-grid grid-3-columns footer-nav-menu">
                    <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b5f-b8a31b43" class="inner-container _230px">
                        <div class="mg-bottom-40px">
                            <div class="text-300 bold color-neutral-800">Menú</div>
                        </div>
                        <div class="nav-menu-list-main-wrapper">
                            <ul role="list" class="nav-menu-list-wrapper">
                                <li class="nav-menu-list-item"><a href="/" class="text-200 menu-nav-link">Inicio</a></li>
                                <li class="nav-menu-list-item"><a href="/conocenos" aria-current="page" class="text-200 menu-nav-link w--current">Conócenos</a></li>
                                <li class="nav-menu-list-item"><a href="/fondos" class="text-200 menu-nav-link">Fondos Blum</a></li>
                                <li class="nav-menu-list-item"><a href="/blog" class="text-200 menu-nav-link">Blog</a></li>
                            </ul>
                            <ul role="list" class="nav-menu-list-wrapper last">
                                <li class="nav-menu-list-item"><a href="https://portal.miblum.com/" target="_blank" class="text-200 menu-nav-link">Entrar</a></li>
                                <li class="nav-menu-list-item"><a href="http://portal.miblum.com/create-customer" target="_blank" class="text-200 menu-nav-link">Invertir</a></li>
                                <li class="nav-menu-list-item"></li>
                                <li class="nav-menu-list-item"></li>
                            </ul>
                        </div>
                    </div>
                    <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b7e-b8a31b43" class="inner-container _230px">
                        <div class="mg-bottom-40px">
                            <div class="text-300 bold color-neutral-800">Información</div>
                        </div>
                        <div class="nav-menu-list-main-wrapper">
                            <ul role="list" class="nav-menu-list-wrapper last">
                                <li class="nav-menu-list-item"><a href="https://www.smv.gob.pe/Frm_InfoFinanFondosInversion?data=7C0FC602E6F9548CD5B5376D58EC9BD0119DC76FB2" target="_blank" class="text-200 menu-nav-link">Información financiera</a></li>
                                <li class="nav-menu-list-item"><a href="https://www.smv.gob.pe/Frm_Memorias.aspx?data=2621C038EC1F2286F1B4681A9C105FF3BFF6119339" target="_blank" class="text-200 menu-nav-link">Memorias</a></li>
                                <li class="nav-menu-list-item"><a href="https://www.smv.gob.pe/Frm_HechosDeImportancia.aspx?data=F9BED561C70CE3ABF0F44C66E159B45B5DE2AAF64E" target="_blank" class="text-200 menu-nav-link">Hechos de importancia</a></li>
                                <li class="nav-menu-list-item"><a href="https://admin.miblum.com/wp-content/uploads/2022/02/directores.pdf" target="_blank" class="text-200 menu-nav-link">Directores</a></li>
                                <li class="nav-menu-list-item"><a href="/fondos" target="_blank" class="text-200 menu-nav-link">BLUM RENTA GLOBAL</a></li>
                                <li class="nav-menu-list-item"></li>
                            </ul>
                        </div>
                    </div>
                    <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b96-b8a31b43" class="inner-container _502px">
                        <div class="mg-bottom-40px">
                            <div class="text-300 bold color-neutral-800">Redes sociales</div>
                        </div>
                        <div class="w-layout-grid grid-2-columns footer-country-available-service">
                            <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31b9b-b8a31b43" class="flex-horizontal align-center">
                                <div class="mg-right-18px">
                                    <div class="inner-container _78px width-100 responsive"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256f1e5d87607253d177dad_Group%201000002863.svg" loading="eager" alt="" class="image border-radius-24px responsive" /></div>
                                </div>
                                <div class="heading-h5-size country-available"><a href="https://www.linkedin.com/company/blum-inversiones" target="_blank" class="link">Linkedin</a></div>
                            </div>
                            <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31ba1-b8a31b43" class="flex-horizontal align-center">
                                <div class="mg-right-18px">
                                    <div class="inner-container _78px width-100 responsive"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256f1e54da668f8e5ebe904_Group.svg" loading="eager" alt="" class="image border-radius-24px responsive" /></div>
                                </div>
                                <div class="heading-h5-size country-available"><a href="https://www.facebook.com/bluminversiones" target="_blank" class="link-3">Facebook</a></div>
                            </div>
                            <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31ba7-b8a31b43" class="flex-horizontal align-center">
                                <div class="mg-right-18px">
                                    <div class="inner-container _78px width-100 responsive"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256f1e507cdbc31bb0a0ccb_Group-1.svg" loading="eager" alt="" class="image border-radius-24px responsive" /></div>
                                </div>
                                <div class="heading-h5-size country-available"><a href="https://www.instagram.com/bluminversiones/" target="_blank" class="link-2">Instagram</a></div>
                            </div>
                            <div id="w-node-_9566e1e2-4862-c17d-08fa-fb50b8a31bad-b8a31b43" class="flex-horizontal align-center">
                                <div class="mg-right-18px">
                                    <div class="inner-container _78px width-100 responsive"><img src="https://assets.website-files.com/6254a50daf6298adb0c003ca/6256f1e59e7c0eccbe7c88bf_Layer%203.svg" loading="eager" alt="" class="image border-radius-24px responsive" /></div>
                                </div>
                                <div class="heading-h5-size country-available"><a href="https://www.youtube.com/channel/UCNFIC_S8V_nOJl4Voqt4oHg/featured" target="_blank" class="link-4">Youtube</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-w-id="9566e1e2-4862-c17d-08fa-fb50b8a31bb3" class="footer-bottom">
                <p class="paragraph-14">Contacto@miblum.com | <?=$empresa_nombre_solo?> todos los derechos reservados 2022<a href="https://webflow.com/" target="_blank" class="text-decoration-none"></a></p>
            </div>
        </div>
    </footer>-->
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6254a50daf6298adb0c003ca" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://assets.website-files.com/6254a50daf6298adb0c003ca/js/miblum.cc1aa3d44.js" type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>

</html>