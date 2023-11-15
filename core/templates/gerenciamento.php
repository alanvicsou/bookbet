
{% load static %}

<!DOCTYPE html>
<html lang="pt">

<head>
    <title>Bookbet :: Apostas inteligentes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bookbet - Apostas inteligentes | Scanner de apostas seguras com lucros garantidos ">
    <meta name="keywords" content="Bookbet, Apostas, Apostas seguras, Surebets, Betting, Sportbook">
    <meta name="author" content="Bookbet">

    <link rel="icon" type="image/png" sizes="32x32" href="https://bookbet.com.br/static/bookbet-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://bookbet.com.br/static/bookbet-icon.png">
    <link rel="manifest" href="/panel/manifest.json"><meta name="theme-color" content="#090f1e">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#38226a">
    <meta name="apple-mobile-web-app-title" content="BookBet">
    <link rel="apple-touch-icon" href="https://bookbet.com.br/static/bookbet-icon.png">
    <link rel="mask-icon" href="https://bookbet.com.br/static/bookbet-icon.png" color=#090f1e>
    <meta name="msapplication-TileImage" content="https://bookbet.com.br/static/bookbet-icon.png">
    <meta name="msapplication-TileColor" content="#090f1e">

    <link rel="icon" href="https://bookbet.com.br/static/bookbet-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://bookbet.com.br/static/bbfiles/fonts/inter/inter.css" id="main-font-link" />
    <link rel="stylesheet" href="https://bookbet.com.br/static/bbfiles/fonts/tabler-icons.min.css" />
    <link rel="stylesheet" href="https://bookbet.com.br/static/bbfiles/fonts/feather.css" />
    <link rel="stylesheet" href="https://bookbet.com.br/static/bbfiles/fonts/fontawesome.css" />
    <link rel="stylesheet" href="https://bookbet.com.br/static/bbfiles/fonts/material.css" />
    <link rel="stylesheet" href="https://bookbet.com.br/static/bbfiles/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="https://bookbet.com.br/static/bbfiles/css/style-preset.css" />
    <link rel="stylesheet" href="https://bookbet.com.br/static/bbfiles/bootstrap-switch-button.min.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-14K1GBX9FG"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-14K1GBX9FG');
    </script>
    <script src="https://bookbet.com.br/static/bbfiles/bootstrap-switch-button.min.js"></script>
    <script>
      (function () {
        var switch_event = document.querySelector('#switch_event');

        switch_event.addEventListener('change', function () {
          if (switch_event.checked) {
            document.querySelector('#console_event').innerHTML = 'Switch Button Checked';
          } else {
            document.querySelector('#console_event').innerHTML = 'Switch Button Unchecked';
          }
        });
      })();
    </script>
    <script>
      !(function () {
        if (window.t4hto4) console.log('WiserNotify pixel installed multiple time in this page');
        else {
          window.t4hto4 = !0;
          var t = document,
            e = window,
            n = function () {
              var e = t.createElement('script');
              (e.type = 'text/javascript'),
                (e.async = !0),
                (e.src = '../../pt.wisernotify.com/pixel6d4c.js?ti=1jclj6jkfc4hhry'),
                document.body.appendChild(e);
            };
          'complete' === t.readyState ? n() : window.attachEvent ? e.attachEvent('onload', n) : e.addEventListener('load', n, !1);
        }
      })();
    </script>
    <!-- Microsoft clarity -->
    <script type="text/javascript">
      (function (c, l, a, r, i, t, y) {
        c[a] =
          c[a] ||
          function () {
            (c[a].q = c[a].q || []).push(arguments);
          };
        t = l.createElement(r);
        t.async = 1;
        t.src = 'https://www.clarity.ms/tag/' + i;
        y = l.getElementsByTagName(r)[0];
        y.parentNode.insertBefore(t, y);
      })(window, document, 'clarity', 'script', 'gkn6wuhrtb');
    </script>
    <style>
      body::-webkit-scrollbar-track {
                    background-color: none;
                }
                body::-webkit-scrollbar {
                    width: 6px;
                    background: none;
                    border-radius: 5px;
                }
                body::-webkit-scrollbar-thumb {
                    background: noneca87f;
                }
    </style>

  </head>

  <body data-pc-preset="preset-8" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="dark">
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>

<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="#" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="https://bookbet.com.br/static/bbfiles/images/bookbet-dark.png" style="max-width: 70%;;" />
        <span class="badge text-success rounded-pill bg-light-success ms-2 theme-version">v2.1</span>
      </a>
    </div>
    <div class="navbar-content">
      <div class="card pc-user-card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0">
              <img src="https://invenioptl.com/images/bot.gif" alt="user-image" class="user-avtar wid-45 rounded-circle" />
            </div>
            <div class="flex-grow-1 ms-3 me-2">
              <h6 class="mb-0">Olá, {{ user.first_name }}</h6>
              <small><div class="text-success d-inline-block me-2">
                <i class="fas fa-circle f-10"></i>
                Online
              </div></small>
            </div>
          </div>
        </div>
      </div>

      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>Aplicativos</label>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="{% url 'dashboard' %}" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-status-up"></use>
              </svg>
            </span>
            <span class="pc-mtext">Apostas</span>            
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a class="pc-link" href="https://bookbet.com.br/static/calculadora.html" onclick="window.open(this.href,'targetWindow','scrollbars=no,resizable=yes,status=no,location=no,toolbar=no,menubar=no,width=600,height=650,left=150,top=150'); return false;">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-note-1"></use> 
              </svg>
            </span>
            <span class="pc-mtext">Calculadora</span>
          </a>
        </li>
        {% if request.user.is_superuser %}
        <li class="pc-item pc-caption">
            <label>Parceiro</label>
        </li>
        <li class="pc-item pc-hasmenu">
          <a class="pc-link" href="r/{{ user.email }}"  >
            <span class="pc-micon">
            <svg class="pc-icon">
                  <use xlink:href="#custom-user-add"></use>
                </svg>
            </span>
            <span class="pc-mtext">Adicionar Afiliado </span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu  ">
            <a href="{% url 'indications' %}" class="pc-link">
              <span class="pc-micon">
                <svg class="pc-icon">
                  <use xlink:href="#custom-profile-2user-outline"></use>
                </svg>
              </span>
              <span class="pc-mtext">Indicações</span>            
            </a>
          </li>
        {% endif %}
        <li class="pc-item pc-caption">
            <label>Ferramentas</label>
        </li>
        <li class="pc-item pc-hasmenu active">
          <a href="{% url 'gerenciamento' %}" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-dollar-square"></use>
              </svg>
            </span>
            <span class="pc-mtext">Gerenciamento</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-message-2"></use>
              </svg>
            </span>
            <span class="pc-mtext">Facebet</span> <span class="badge text-warning rounded-pill bg-light-warning ms-2 theme-version text-xs">Breve</span>
          </a>
        </li>
        <li class="pc-item pc-hasmenu">
          <a class="pc-link" href="https://bookbet.com.br/static/bookbet.rar" target="_blank" >
            <span class="pc-micon">
              <i class="ti ti-download"></i>
            </span>
            <span class="pc-mtext">Baixar Extensão </span>
          </a>
        </li>
       
        <li class="pc-item pc-caption">
            <label>Suporte</label>
        </li>
        
        <li class="pc-item pc-hasmenu">
          <a href="https://api.whatsapp.com/send?phone={{ user.telsuporte }}&text=Ol%C3%A1%2C%20preciso%20de%20suporte%20com%20a%20plataforma%20Bookbet!%20%F0%9F%98%85" target="_blank" class="pc-link">
            <span class="pc-micon">
              <i class="ti ti-brand-whatsapp"></i>
            </span>
            <span class="pc-mtext">Suporte Whatsapp</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{% url 'logout' %}"  class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-logout-1-outline"></use>
              </svg>
            </span>
            <span class="pc-mtext">Sair</span></a>
        </li>
         <!-- <li class="pc-item pc-caption">
          <label>Pessoal</label>
          <svg class="pc-icon">
            <use xlink:href="#custom-presentation-chart"></use>
          </svg>
        </li>
        <li class="pc-item">
          <a href="#" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-folder-open"></use>
              </svg>
            </span>
            <span class="pc-mtext">Assinaturas</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="#" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-user"></use>
              </svg>
            </span>
            <span class="pc-mtext">Minha Conta</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="https://ableproadmin.com/widget/w_chart.html" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-security-safe"></use>
              </svg>
            </span>
            <span class="pc-mtext">Alterar Senha</span></a>
        </li>
        
        <li class="pc-item pc-caption">
          <label>Sistema</label>
          <svg class="pc-icon">
            <use xlink:href="#custom-presentation-chart"></use>
          </svg>
        </li>
        <li class="pc-item">
          <a href="#" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-search-normal-1"></use>
              </svg>
            </span>
            <span class="pc-mtext">Ajuda</span>
          </a>
        </li> -->
       
      </ul>
    </div>
  </div>
</nav>

<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <svg class="pc-icon">
          <use xlink:href="#custom-sun-1"></use>
        </svg>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
          <svg class="pc-icon">
            <use xlink:href="#custom-moon"></use>
          </svg>
          <span>Escuro</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
          <svg class="pc-icon">
            <use xlink:href="#custom-sun-1"></use>
          </svg>
          <span>Claro</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change_default()">
          <svg class="pc-icon">
            <use xlink:href="#custom-setting-2"></use>
          </svg>
          <span>Padrão</span>
        </a>
      </div>
    </li>
   
    <!-- <li class="dropdown pc-h-item">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        aria-expanded="false"
      >
        <svg class="pc-icon">
          <use xlink:href="#custom-notification"></use>
        </svg>
        <span class="badge bg-success pc-h-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Notifications</h5>
          <a href="#!" class="btn btn-link btn-sm">Mark all read</a>
        </div>
        <div class="dropdown-body text-wrap header-notification-scroll position-relative" style="max-height: calc(100vh - 215px)">
          <p class="text-span">Today</p>
          <div class="card mb-2">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <svg class="pc-icon text-primary">
                    <use xlink:href="#custom-layer"></use>
                  </svg>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">2 min ago</span>
                  <h5 class="text-body mb-2">UI/UX Design</h5>
                  <p class="mb-0"
                    >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type and scrambled it to make a type</p
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <svg class="pc-icon text-primary">
                    <use xlink:href="#custom-sms"></use>
                  </svg>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">1 hour ago</span>
                  <h5 class="text-body mb-2">Message</h5>
                  <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
                </div>
              </div>
            </div>
          </div>
          <p class="text-span">Yesterday</p>
          <div class="card mb-2">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <svg class="pc-icon text-primary">
                    <use xlink:href="#custom-document-text"></use>
                  </svg>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">2 hour ago</span>
                  <h5 class="text-body mb-2">Forms</h5>
                  <p class="mb-0"
                    >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type and scrambled it to make a type</p
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <svg class="pc-icon text-primary">
                    <use xlink:href="#custom-user-bold"></use>
                  </svg>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">12 hour ago</span>
                  <h5 class="text-body mb-2">Challenge invitation</h5>
                  <p class="mb-2"><span class="text-dark">Jonny aber</span> invites to join the challenge</p>
                  <button class="btn btn-sm btn-outline-secondary me-2">Decline</button>
                  <button class="btn btn-sm btn-primary">Accept</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-2">
            <div class="card-body">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <svg class="pc-icon text-primary">
                    <use xlink:href="#custom-security-safe"></use>
                  </svg>
                </div>
                <div class="flex-grow-1 ms-3">
                  <span class="float-end text-sm text-muted">5 hour ago</span>
                  <h5 class="text-body mb-2">Security</h5>
                  <p class="mb-0"
                    >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                    type and scrambled it to make a type</p
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center py-2">
          <a href="#!" class="link-danger">Clear all Notifications</a>
        </div>
      </div>
    </li> -->
    <li class="dropdown pc-h-item header-user-profile">
      <a
        class="pc-head-link dropdown-toggle arrow-none me-0"
        data-bs-toggle="dropdown"
        href="#"
        role="button"
        aria-haspopup="false"
        data-bs-auto-close="outside"
        aria-expanded="false"
      >
        <img src="https://invenioptl.com/images/bot.gif" alt="user-image" class="user-avtar" />
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Minha Conta</h5>
        </div>
        <div class="dropdown-body">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
            <div class="d-flex mb-1">
              <div class="flex-shrink-0">
                <img src="https://invenioptl.com/images/bot.gif" alt="user-image" class="user-avtar wid-35" />
              </div>
              <div class="flex-grow-1 ms-3">
                <h6 class="mb-1">{{ user.first_name }} 🖖</h6>
                <span>{{ user.email }}</span>
              </div>
            </div>
            <hr class="border-secondary border-opacity-50" />
            <div class="card">
              <div class="card-body py-3">
                <div class="flex-grow-1 ms-3">
                  <h6 class="mb-1">Sua conta expira dia:</h6>
                  <span>{{ user.plan_expire }}</span>
                </div>
              </div>
            </div>
             <!--<p class="text-span">Atalhos</p>
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2">
                  <use xlink:href="#custom-user-add"></use>
                </svg>
                <span>Indicações</span>
              </span>
            </a>
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2">
                  <use xlink:href="#custom-video-play"></use>
                </svg>
                <span>Tutoriais</span>
              </span>
            </a>
            <a href="#" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2">
                  <use xlink:href="#custom-lock-outline"></use>
                </svg>
                <span>Alterar senha</span>
              </span>
            </a>-->
            <hr class="border-secondary border-opacity-50" />
            <div class="d-grid mb-3">
            <a href="{% url 'logout' %}" ><button style="width: 100% !important;" class="btn btn-primary">
                <svg class="pc-icon me-2">
                  <use xlink:href="#custom-logout-1-outline"></use></svg>Sair
              </button></a>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</div>
 </div>
</header>

    <div class="pc-container">
      <div class="pc-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb mb-3">
                  <li class="breadcrumb-item"><a href="#">Pessoal</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Gerenciamento</a></li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
        {% block content %}
        <div class="row">
          
          <div class="col-sm-12">
            
            <div class="tab-content">
              <div class="tab-pane show active" id="profile-1" role="tabpanel" aria-labelledby="profile-tab-1">
                <div class="row">
                <div class="col-lg-3 col-xxl-3">

                <script>
                  function Mudarestado(el) {
                  var display = document.getElementById(el).style.display;
                  if (display == "none")
                    document.getElementById(el).style.display = 'block';
                  else
                    document.getElementById(el).style.filter= "blur(8px)";
                }
                </script>
                 
                <div class="card bg-primary available-balance-card">
                    <div class="card-body p-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <div>
                          <p class="mb-0 text-white text-opacity-75">Lucro de hoje:</p>
                          <div id="minhaDiv"><iframe src="https://crm.bookbet.com.br/gerenciamento/day.php?usuario={{ user.email }}" 
                      style=" color: #fff !important; width: auto !important; border: none !important; height: 30px;" scroll="none" frameborder="0">
                          </iframe></div>
                        </div>
                        <div class="avtar">
                          <i onclick="Mudarestado('minhaDiv')" class="ti ti-eye-off f-18"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card bg-secondary available-balance-card">
                    <div class="card-body p-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <div>
                          <p class="mb-0 text-white text-opacity-75">Lucro da semana:</p>
                          <h4 class="mb-0 text-white"><iframe src="https://crm.bookbet.com.br/gerenciamento/week.php?usuario={{ user.email }}" 
                      style=" color: #fff !important; width: auto !important; border: none !important; height: 30px;" scroll="none" frameborder="0"></iframe></h4>
                        </div>
                        <div class="avtar">
                          <i class="ti ti-currency-dollar f-18"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card bg-whiteavailable-balance-card">
                    <div class="card-body p-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <div>
                          <p class="mb-0 text-white text-opacity-75">Lucro do mês:</p>
                          <h4 class="mb-0 text-white"><iframe src="https://crm.bookbet.com.br/gerenciamento/month.php?usuario={{ user.email }}" 
                      style=" color: #fff !important; width: auto !important; border: none !important; height: 30px;" scroll="none" frameborder="0"></iframe> </h4>
                        </div>
                        <div class="avtar">
                          <i class="ti ti-currency-dollar f-18"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                          
                        </div>
                  <div class="col-lg-9 col-xxl-9">
                   <div class="card">
                      <div class="card-header">
                        <h5>Histórico de apostas</h5>
                      </div>
                      <div class="card-body">
                      <iframe src="https://crm.bookbet.com.br/gerenciamento/list.php?usuario={{ user.email }}" 
                      style=" width: 100% !important; border: none !important; min-height: 700px; padding: 5px;" frameborder="0"></iframe>
                      </div>
                    </div>
                    

                    
                  </div>
                </div>
              </div>
            
            </div>
          </div>
          
        </div>
      </div>
    </div>

    
    <div class="card-body p-0 pt-0 h-100 position-relative">
      {% endblock %}
  </div>
  
    <footer class="pc-footer">
      <div class="footer-wrapper container-fluid">
        <div class="row">
          <div class="col my-1">
            <p class="m-0">BookBet 2023 - Todos os Direitos Reservados</p>
          </div>
          <div class="col-auto my-1">
           
          </div>
        </div>
      </div>
    </footer>

    <script src="https://bookbet.com.br/static/bbfiles/js/plugins/apexcharts.min.js"></script>
    <script src="https://bookbet.com.br/static/bbfiles/js/pages/dashboard-default.js"></script>
    <script src="https://bookbet.com.br/static/bbfiles/js/plugins/popper.min.js"></script>
    <script src="https://bookbet.com.br/static/bbfiles/js/plugins/simplebar.min.js"></script>
    <script src="https://bookbet.com.br/static/bbfiles/js/plugins/bootstrap.min.js"></script>
    <script src="https://bookbet.com.br/static/bbfiles/js/fonts/custom-font.js"></script>
    <script src="https://bookbet.com.br/static/bbfiles/js/pcoded.js"></script>
    <script src="https://bookbet.com.br/static/bbfiles/js/plugins/feather.min.js"></script>
    <script src="https://bookbet.com.br/static/bbfiles/js/plugins/popper.min.js"></script>
    <script src="https://bookbet.com.br/static/bbfiles/js/plugins/clipboard.min.js"></script>
    <script src="https://bookbet.com.br/static/bbfiles/js/plugins/simplebar.min.js"></script>
    <script src="https://ableproadmin.com/assets/js/plugins/simple-datatables.js"></script>

     <script>
      const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
        sortable: false,
        perPage: 5
      });
    </script>
    <script>
        // basic example
        new ClipboardJS('[data-clipboard=true]').on('success', function (e) {
          e.clearSelection();
          alert('Copied!');
        });
      </script>
    

    <script>layout_change('dark');</script>
    <script>layout_sidebar_change('false');</script>
    <script>change_box_container('false');</script>
    <script>layout_caption_change('true');</script>
    <script>layout_rtl_change('false');</script>
    <script>preset_change("preset-8");</script>
    <script src="https://bookbet.com.br/static/bbfiles/js/plugins/choices.min.js"></script>
    

    
  
  </body>
</html>
