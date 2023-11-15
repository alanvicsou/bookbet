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
                    background-color: #none;
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
              <img src="https://bookbet.com.br/static/bbfiles/bot.gif" alt="user-image" class="user-avtar wid-45 rounded-circle" />
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
        
        <li class="pc-item pc-hasmenu active">
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
        <li class="pc-item pc-hasmenu ">
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
        <li class="pc-item pc-hasmenu">
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
          <a class="pc-link" href="https://bookbet.com.br/static/EXT-Bookbet.zip" target="_blank" >
            <span class="pc-micon">
              <i class="ti ti-download"></i>
            </span>
            <span class="pc-mtext">Baixar Extensão </span>
          </a>
        </li>
        <!-- <li class="pc-item pc-hasmenu">
          <a class="pc-link" href="#"  >
            <span class="pc-micon">
              <i class="ti ti-trophy"></i>
            </span>
            <span class="pc-mtext">Top Casas </span>
          </a>
        </li> -->
        <li class="pc-item pc-caption">
            <label>Suporte</label>
        </li>
        <!--<li class="pc-item pc-hasmenu">
          <a href="#" class="pc-link">
            <span class="pc-micon">
              <svg class="pc-icon">
                <use xlink:href="#custom-video-play"></use>
              </svg>
            </span>
            <span class="pc-mtext">Treinamento</span>
          </a>
        </li> -->
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
{% block content %}
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
        <img src="https://bookbet.com.br/static/bbfiles/bot.gif" alt="user-image" class="user-avtar" />
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header d-flex align-items-center justify-content-between">
          <h5 class="m-0">Minha Conta</h5>
        </div>
        <div class="dropdown-body">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
            <div class="d-flex mb-1">
              <div class="flex-shrink-0">
                <img src="https://bookbet.com.br/static/bbfiles/bot.gif" alt="user-image" class="user-avtar wid-35" />
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
            <!-- <p class="text-span">Atalhos</p>
             <a href="#" class="dropdown-item">
              <span>
              <i class="ti ti-video  text-muted"></i>
                <span>Tutoriais</span>
              </span>
            </a>
            <a href="#" class="dropdown-item">
              <span>
                <i class="ti ti-trophy  text-warning"></i>
                <span>TOP Casas</span>
              </span>
            </a> -->
            <hr class="border-secondary border-opacity-50" />
            {% if request.user.is_superuser %}
            <p class="text-span">Parceiro</p>
            <a href="r/{{ user.email }}" class="dropdown-item">
              <span>
                <i class="ti ti-user-plus text-muted"></i>
                <span>Adicionar Usuário</span>
              </span>
            </a>
            <a href="{% url 'indications' %}" class="dropdown-item">
              <span>
                <i class="ti ti-users text-muted"></i>
                <span>Indicações</span>
              </span>
            </a>
            {% endif %}
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
{% endblock %}
<div class="offcanvas pc-announcement-offcanvas offcanvas-end" tabindex="-1" id="announcement" aria-labelledby="announcementLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="announcementLabel">Filtro</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <form class="row" method="post">
      {% csrf_token %}
      <div class="form-group">
        <label class="form-label">Data do evento:</label>
        <select class="form-select" id="time" name="time">
          <option value="a" {% if request.user.time == 'a' %}selected{% endif %}>Qualquer horário </option>
          <option value="12h" {% if request.user.time == '12h' %}selected{% endif %}>12 horas </option>
          <option value="16h" {% if request.user.time == '16h' %}selected{% endif %}>16 horas</option>
          <option value="24h" {% if request.user.time == '24h' %}selected{% endif %}>24 horas</option>
          <option value="48h" {% if request.user.time == '48h' %}selected{% endif %}>48 horas</option>
          <option value="1w" {% if request.user.time == '1w' %}selected{% endif %}>1 semana</option>
        </select>
        <small class="form-text text-muted">Selecione o intervalo de tempo dos eventos</small>
      </div>
      <div class="form-group">
        <label class="form-label">Classificar por:</label>
        <select class="form-select" id="order" name="order">
          <option value="minutes" {% if 'minutes' in request.user.order %}selected{% endif %}>Período</option>
          <option value="date" {% if 'date' in request.user.order %}selected{% endif %}>Horário de início</option>
          <option value="profit" {% if 'profit' in request.user.order %}selected{% endif %}>Lucro</option>
        </select>
        <small class="form-text text-muted">Selecione como deseja classificar os resultados</small>
      </div>
      <div class="input-group">
          <span class="input-group-text">Faixa de Lucro</span>
          <input name="profit_start" type="number" value="{{ request.user.profit_start|stringformat:".2f" }}"  aria-label="Min" class="form-control">
          <input name="profit_end" type="number" value="{{ request.user.profit_end|stringformat:".2f" }}"  aria-label="Máx" class="form-control">
      </div>
      <div class="form-group"><br><br>
        <label class="form-label">Esportes:</label>
        <a href="javascript:marcars()">Marcar Todos</a> | 
        <a href="javascript:desmarcars()">Desmarcar Todos</a>
        {% for sport in sports %}
          <div class="form-check">
              <input type="checkbox" class="form-check-input input-primary" name="sports[]" id="sport{{ forloop.counter0 }}" value="{{ sport }}"  {% if sport in user_sports %}checked{% endif %}>
              <label class="form-check-label" for="house{{ forloop.counter0 }}">{{ sport }}</label>
          </div>
        {% endfor %}
        <script language="JavaScript">
          function marcars(){
            var boxes = document.getElementsByName("sports[]");
            for(var i = 0; i < boxes.length; i++)
              boxes[i].checked = true;
          }
            
          function desmarcars(){
            var boxes = document.getElementsByName("sports[]");
            for(var i = 0; i < boxes.length; i++)
              boxes[i].checked = false;
          }
        </script>
      </div>
      <div class="form-group">
        <label class="form-label">Casas:</label>
        <a href="javascript:marcar()">Marcar Todas</a> | 
        <a href="javascript:desmarcar()">Desmarcar Todas</a>
        {% for house in houses %}
          <div class="form-check">
              <input type="checkbox" class="form-check-input input-primary"  name="houses[]" id="house{{ forloop.counter0 }}" value="{{ house }}" {% if house in user_houses %}checked{% endif %}>
              <label class="form-check-label" for="house{{ forloop.counter0 }}">{{ house }}</label>
          </div>
        {% endfor %}
        
          
        <script language="JavaScript">
          function marcar(){
            var boxes = document.getElementsByName("houses[]");
            for(var i = 0; i < boxes.length; i++)
              boxes[i].checked = true;
          }
            
          function desmarcar(){
            var boxes = document.getElementsByName("houses[]");
            for(var i = 0; i < boxes.length; i++)
              boxes[i].checked = false;
          }
        </script>
      </div>
      <div class="form-group">
        <button class="btn btn-primary" type="submit">
          <svg class="pc-icon me-2">
            <use xlink:href="#custom-logout-1-outline"></use></svg>Buscar
        </button>
      </div>
      
      
    </form>

    <div class="col-lg-3 col-12 pt-4"><br>
                
                

            </div>
           
  </div>
</div>
    <div class="pc-container">
      <div class="pc-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <ul class="breadcrumb mb-3">
                  <li class="breadcrumb-item"><a href="#">Aplicativos</a></li>
                  <li class="breadcrumb-item"><a href="javascript: void(0)">Apostas</a></li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
           {% if not request.user.plan_is_active %}
           <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Atenção!</strong> Seu plano expirou e está limitada a apenas 2 apostas de até 1% de lucro, escolha o plano que deseja contratar abaixo e ative os benefícios de ser um assinante.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
           <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="row justify-content-center align-items-center">
                  <div class="col-md-6 col-lg-4">
                    <div class="card price-card">
                      <div class="card-body">
                        <div class="price-head">
                          <h5 class="mb-0">Mensal</h5>
                          <p class="text-muted">De <s>R$147,00</s> por:</p>
                          <div class="price-price">R$ 127,00 <span class="text-muted">Por mês</span></div>
                          <div class="d-grid"><a class="btn btn-outline-secondary mt-4" target="_blank" href="{{user.produto_link }}">Contratar</a></div>
                        </div>
                        <ul class="list-group list-group-flush product-list">
                        <li class="list-group-item enable">1 mês Pré-live</li>
                          <li class="list-group-item enable">24h de sinais</li>
                          <li class="list-group-item enable">Apostas Pré-live</li>
                          <li class="list-group-item enable">Treinamento</li>
                          <li class="list-group-item enable">Calculadora Dinâmica</li>
                          <li class="list-group-item enable">Extensão</li>
                          <li class="list-group-item">Fraternidade </li>
                          <li class="list-group-item">Suporte Whatsapp</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="card price-card">
                      <div class="card-body">
                        <div class="price-head">
                          <h5 class="mb-0">Semestral</h5>
                          <p class="text-muted">Apenas 6x de:</p>
                          <div class="price-price">R$ 110,17 <span class="text-muted">ou R$ 597,00 a vista.</span></div>
                          <div class="d-grid"><a class="btn btn-outline-secondary mt-4" target="_blank" href="{{user.produto2_link }}">Contratar</a></div>
                        </div>
                        <ul class="list-group list-group-flush product-list">
                          <li class="list-group-item enable">6 Meses Pré-live</li>
                          <li class="list-group-item enable">24h de sinais</li>
                          <li class="list-group-item enable">Apostas Pré-live</li>
                          <li class="list-group-item enable">Treinamento</li>
                          <li class="list-group-item enable">Calculadora Dinâmica</li>
                          <li class="list-group-item enable">Extensão</li>
                          <li class="list-group-item enable">Suporte Whatsapp</li>
                          <li class="list-group-item ">Fraternidade </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-4">
                    <div class="card price-card price-popular">
                      <div class="card-body">
                        <div class="price-head">
                        <span class="badge f-12 bg-success mb-3">Popular</span>
                          <h5 class="mb-0">Anual</h5>
                          <p class="text-muted">Apenas 12x de:</p>
                          <div class="price-price">R$ 80,00 <span class="text-muted"> ou R$ 797,00 a vista.</span></div>
                          <div class="d-grid"><a class="btn btn-primary mt-4" target="_blank" href="{{user.produto3_link }}">Contratar</a></div>
                        </div>
                        <ul class="list-group list-group-flush product-list">
                        <li class="list-group-item enable">12 Meses Pré-live</li>
                          <li class="list-group-item enable">24h de sinais</li>
                          <li class="list-group-item enable">Apostas Pré-live</li>
                          <li class="list-group-item enable">Treinamento</li>
                          <li class="list-group-item enable">Calculadora Dinâmica</li>
                          <li class="list-group-item enable">Extensão</li>
                          <li class="list-group-item enable">Suporte Whatsapp</li>
                          <li class="list-group-item enable">Fraternidade </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>          
              </div>
            </div>
            {% endif %}
            



          </div>
          <!-- <script>
                window.onload = function () {
                    introJs().start();
                };
            </script>
            <link href="https://bookbet.com.br/static/bbfiles/css/introjs.min.css" rel="stylesheet"/>
            <script src="https://bookbet.com.br/static/bbfiles/js/intro.min.js"></script>  -->           
           
            
          <div class="col-lg-12">
            
            <div class="card" >
              <div class="card-header">
                <div class="d-flex align-items-center justify-content-between">
                  <h2 class="mb-0" data-step="1" data-intro="Temos uma nova atualização no livro de apostas">Livro de apostas</h2> 
                  <div class=" w-auto">
                    <div class="form-check form-switch custom-switch-v1 text-end ">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#announcement" aria-controls="announcement">
                      <button type="button" class="btn btn-success btn-sm d-inline-flex">
                        <i class="ti ti-search text-s p-1"></i> Filtrar
                      </button>
                    </a>
                    <div class="form-group" style="display: inline-block !important;">
                        <script> function atualiza(id){ window.location="{% url 'refresh' %}";} </script>
                        <a style="text-decoration: none !important;" href="{% url 'refresh' %}" data-bs-toggle="tooltip" data-bs-placement="bottom" class="btn-sm {% if request.session.refresh_page %}text-danger{% endif %}">
                          {% if request.session.refresh_page  %}
                          <input style="width: 20px !important;" class="btn btn-danger btn-sm d-inline-flex" onchange="atualiza();" type="checkbox" data-toggle="switchbutton" checked data-onlabel="Pausar" data-offlabel="Iniciar" data-onstyle="danger" data-offstyle="primary" >
                          {% else %}
                          <input style="width: 20px !important;" class="btn btn-success btn-sm d-inline-flex" onchange="atualiza();" type="checkbox" data-toggle="switchbutton" checked data-onlabel="Iniciar" data-offlabel="Pausar" data-onstyle="primary" data-offstyle="danger" >
                          {% endif %}
                        </a>
                    </div>                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="table-responsive" > 
              {% if user.plan.has_live or user.plan.live_only %}
                      <div style="margin-left: 25px !important; margin-bottom: 10px !important;">
                      <button type="button" id="pre-live-button" onclick="sessionStorage.sempregreen_type='pre-live'; location.reload();"  class="btn btn-outline-warning d-none">
                              <i class="ti ti-book me-1"></i> Mudar para Pré-live
                            </button>

                            <button type="button" id="live-button" onclick="sessionStorage.sempregreen_type='live'; location.reload();"  class="btn btn-outline-success d-none">
                              <i class="ti ti-player-play me-1"></i> Mudar para Ao vivo
                            </button>
                      </div>
                  {% endif %}
                  <iframe class="col-lg-12 col-md-12 col-sm-12 table-responsive table-xs" src=""  style=" width: 100% !important; border: none !important; min-height: 1000px; padding: 5px;" frameborder="0" ></iframe>

               <!-- <table class="table table-hover" id="pc-dt-simple">
                  <thead>
                    <tr>
                      <th>Lucro (%)</th>
                      <th>Casa</th>
                      <th>Evento</th>
                      <th>Esporte/Data</th>
                      <th class="text-end">Mercado</th>
                      <th class="text-end">Chance</th>
                      <th class="text-end">Visualizar</th>
                    </tr>
                  </thead>
                  <tbody>
                    {% for surebet_id, odds in odds.items %}
                     {% if forloop.counter < limit or limit == 0 %}
                    <tr>
                      <td>
                        <div class="col-auto pe-0">
                          <div class="flex-shrink-0">
                            <div class="avtar avtar-s text-success" style="width: 50px; height: 50px;">{{ odds.0.profit|floatformat:2 }}%</div>
                            <a onclick="window.open('{% url 'calc' odds.0.surebet_id odds.0.house odds.1.house %}', 'Calculadora', 'scrollbars=no,resizable=no,status=no,location=no,toolbar=no,menubar=no,width=800,height=450,left=150,top=150')">
                              <button type="button" class="btn btn-icon btn-light-secondary avtar-xs"><i class="ti ti-calculator text-sm"></i></button>
                            </a>
                            <a onclick="if (confirm('Deseja realmente ocultar esse registro?')){ location.href = '{% url 'remove' odds.0.surebet_id %}' }">
                              <button type="button" class="btn btn-icon btn-light-danger avtar-xs"><i class="ti ti-trash text-sm"></i></button>
                            </a>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="row align-items-center">
                          <div class="col">
                            <h6 class="mb-2"><span class="text-truncate w-100">
                              {% for item in odds %}
                                {{ item.house }}

                                {% if not forloop.last %}
                                <br class=""><br>
                                {% endif %}
                            {% endfor %}
                            </span></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="row align-items-center">
                          <div class="col">
                            <h6 class="mb-2"><span class="text-truncate w-100"><small>
                              {% for item in odds %}
                                {{ item.match }}
                            {% endfor %}
                            </small></span></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-2"><span class="text-truncate w-100">{{ odds.0.sport }}</span></h6>
                        <p class="text-muted f-12 mb-0"><span class="text-truncate w-100">
                          {% for item in odds %}
                                {{ odds.0.date|date:"d/m" }} {{ odds.0.hour|date:"H:i" }} 
                            {% endfor %}
                        </span></p>
                      </td>
                      <td class="text-end f-w-600">
                        {% for item in odds %}
                        <h6 class="mb-2"><span class="text-truncate w-100">{{ item.market|safe }}</span></h6>
                                
                        <h6 class="mb-2"><span class="text-truncate w-100">{% if not forloop.last %}</span></h6>
                                
                                {% endif %}
                            {% endfor %}
                      </td>
                      <td class="text-end f-w-600">
                        
                        <h6 class="mb-2"><span class="text-truncate w-100">{% for item in odds %}
                          {{ item.chance|floatformat:2 }}

                          {% if not forloop.last %}
                              <br>
                          {% endif %}
                      {% endfor %}</span></h6>
                      </td>
                      <td class="f-w-600 text-end">
                        <button type="button" class="btn btn-rounded btn-light-success"> <i class="ti ti-chevrons-right"></i></button>
                      </td>
                    </tr>
                    {% endif %}
                    {% endfor %}

                  </tbody>
                </table> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body p-0 pt-0 h-100 position-relative">
      
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

    <script>layout_change('dark');</script>
    <script>layout_sidebar_change('false');</script>
    <script>change_box_container('false');</script>
    <script>layout_caption_change('true');</script>
    <script>layout_rtl_change('false');</script>
    <script>preset_change("preset-8");</script>
    <script src="https://bookbet.com.br/static/bbfiles/js/plugins/choices.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var genericExamples = document.querySelectorAll('[data-trigger]');
        for (i = 0; i < genericExamples.length; ++i) {
          var element = genericExamples[i];
          new Choices(element, {
            placeholderValue: '',
            searchPlaceholderValue: 'Selecione as casas'
          });
        }

        var textRemove = new Choices(document.getElementById('choices-text-remove-button'), {
          delimiter: ',',
          editItems: true,
          maxItemCount: 5,
          removeItemButton: true
        });

        var text_Unique_Val = new Choices('#choices-text-unique-values', {
          paste: false,
          duplicateItemsAllowed: false,
          editItems: true
        });

        var text_i18n = new Choices('#choices-text-i18n', {
          paste: false,
          duplicateItemsAllowed: false,
          editItems: true,
          maxItemCount: 5,
          addItemText: function (value) {
            return 'Appuyez sur Entrée pour ajouter <b>"' + String(value) + '"</b>';
          },
          maxItemText: function (maxItemCount) {
            return String(maxItemCount) + 'valeurs peuvent être ajoutées';
          },
          uniqueItemText: 'Cette valeur est déjà présente'
        });

        var textEmailFilter = new Choices('#choices-text-email-filter', {
          editItems: true,
          addItemFilter: function (value) {
            if (!value) {
              return false;
            }

            const regex =
              /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            const expression = new RegExp(regex.source, 'i');
            return expression.test(value);
          }
        }).setValue(['joe@bloggs.com']);

        var textDisabled = new Choices('#choices-text-disabled', {
          addItems: false,
          removeItems: false
        }).disable();

        var textPrependAppendVal = new Choices('#choices-text-prepend-append-value', {
          prependValue: 'item-',
          appendValue: '-' + Date.now()
        }).removeActiveItems();

        var textPresetVal = new Choices('#choices-text-preset-values', {
          items: [
            'Josh Johnson',
            {
              value: 'joe@bloggs.co.uk',
              label: 'Joe Bloggs',
              customProperties: {
                description: 'Joe Blogg is such a generic name'
              }
            }
          ]
        });

        var multipleDefault = new Choices(document.getElementById('choices-multiple-groups'));

        var multipleFetch = new Choices('#choices-multiple-remote-fetch', {
          placeholder: true,
          placeholderValue: 'Pick an Strokes record',
          maxItemCount: 5
        }).setChoices(function () {
          return fetch('https://api.discogs.com/artists/55980/releases?token=QBRmstCkwXEvCjTclCpumbtNwvVkEzGAdELXyRyW')
            .then(function (response) {
              return response.json();
            })
            .then(function (data) {
              return data.releases.map(function (release) {
                return {
                  value: release.title,
                  label: release.title
                };
              });
            });
        });

        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
          removeItemButton: true
        });

        /* Use label on event */
        var choicesSelect = new Choices('#choices-multiple-labels', {
          removeItemButton: true,
          choices: [
            {
              value: 'One',
              label: 'Label One'
            },
            {
              value: 'Two',
              label: 'Label Two',
              disabled: true
            },
            {
              value: 'Three',
              label: 'Label Three'
            }
          ]
        }).setChoices(
          [
            {
              value: 'Four',
              label: 'Label Four',
              disabled: true
            },
            {
              value: 'Five',
              label: 'Label Five'
            },
            {
              value: 'Six',
              label: 'Label Six',
              selected: true
            }
          ],
          'value',
          'label',
          false
        );

        choicesSelect.passedElement.element.addEventListener('addItem', function (event) {
          document.getElementById('message').innerHTML =
            '<span class="badge bg-light-primary"> You just added "' + event.detail.label + '"</span>';
        });
        choicesSelect.passedElement.element.addEventListener('removeItem', function (event) {
          document.getElementById('message').innerHTML =
            '<span class="badge bg-light-danger"> You just removed "' + event.detail.label + '"</span>';
        });

        var singleFetch = new Choices('#choices-single-remote-fetch', {
          searchPlaceholderValue: 'Search for an Arctic Monkeys record'
        })
          .setChoices(function () {
            return fetch('https://api.discogs.com/artists/391170/releases?token=QBRmstCkwXEvCjTclCpumbtNwvVkEzGAdELXyRyW')
              .then(function (response) {
                return response.json();
              })
              .then(function (data) {
                return data.releases.map(function (release) {
                  return {
                    label: release.title,
                    value: release.title
                  };
                });
              });
          })
          .then(function (instance) {
            instance.setChoiceByValue('Fake Tales Of San Francisco');
          });

        var singleXhrRemove = new Choices('#choices-single-remove-xhr', {
          removeItemButton: true,
          searchPlaceholderValue: "Search for a Smiths' record"
        }).setChoices(function (callback) {
          return fetch('https://api.discogs.com/artists/83080/releases?token=QBRmstCkwXEvCjTclCpumbtNwvVkEzGAdELXyRyW')
            .then(function (res) {
              return res.json();
            })
            .then(function (data) {
              return data.releases.map(function (release) {
                return {
                  label: release.title,
                  value: release.title
                };
              });
            });
        });

        var singleNoSearch = new Choices('#choices-single-no-search', {
          searchEnabled: false,
          removeItemButton: true,
          choices: [
            {
              value: 'One',
              label: 'Label One'
            },
            {
              value: 'Two',
              label: 'Label Two',
              disabled: true
            },
            {
              value: 'Three',
              label: 'Label Three'
            }
          ]
        }).setChoices(
          [
            {
              value: 'Four',
              label: 'Label Four',
              disabled: true
            },
            {
              value: 'Five',
              label: 'Label Five'
            },
            {
              value: 'Six',
              label: 'Label Six',
              selected: true
            }
          ],
          'value',
          'label',
          false
        );

        var singlePresetOpts = new Choices('#choices-single-preset-options', {
          placeholder: true
        }).setChoices(
          [
            {
              label: 'Group one',
              id: 1,
              disabled: false,
              choices: [
                {
                  value: 'Child One',
                  label: 'Child One',
                  selected: true
                },
                {
                  value: 'Child Two',
                  label: 'Child Two',
                  disabled: true
                },
                {
                  value: 'Child Three',
                  label: 'Child Three'
                }
              ]
            },
            {
              label: 'Group two',
              id: 2,
              disabled: false,
              choices: [
                {
                  value: 'Child Four',
                  label: 'Child Four',
                  disabled: true
                },
                {
                  value: 'Child Five',
                  label: 'Child Five'
                },
                {
                  value: 'Child Six',
                  label: 'Child Six'
                }
              ]
            }
          ],
          'value',
          'label'
        );

        var singleSelectedOpt = new Choices('#choices-single-selected-option', {
          searchFields: ['label', 'value', 'customProperties.description'],
          choices: [
            {
              value: 'One',
              label: 'Label One',
              selected: true
            },
            {
              value: 'Two',
              label: 'Label Two',
              disabled: true
            },
            {
              value: 'Three',
              label: 'Label Three',
              customProperties: {
                description: 'This option is fantastic'
              }
            }
          ]
        }).setChoiceByValue('Two');

        var customChoicesPropertiesViaDataAttributes = new Choices('#choices-with-custom-props-via-html', {
          searchFields: ['label', 'value', 'customProperties']
        });

        var singleNoSorting = new Choices('#choices-single-no-sorting', {
          shouldSort: false
        });

        var cities = new Choices(document.getElementById('cities'));
        var tubeStations = new Choices(document.getElementById('tube-stations')).disable();

        cities.passedElement.element.addEventListener('change', function (e) {
          if (e.detail.value === 'London') {
            tubeStations.enable();
          } else {
            tubeStations.disable();
          }
        });

        var customTemplates = new Choices(document.getElementById('choices-single-custom-templates'), {
          callbackOnCreateTemplates: function (strToEl) {
            var classNames = this.config.classNames;
            var itemSelectText = this.config.itemSelectText;
            return {
              item: function (classNames, data) {
                return strToEl(
                  '\
                                <div\
                                class="' +
                    String(classNames.item) +
                    ' ' +
                    String(data.highlighted ? classNames.highlightedState : classNames.itemSelectable) +
                    '"\
                                data-item\
                                data-id="' +
                    String(data.id) +
                    '"\
                                data-value="' +
                    String(data.value) +
                    '"\
                                ' +
                    String(data.active ? 'aria-selected="true"' : '') +
                    '\
                                ' +
                    String(data.disabled ? 'aria-disabled="true"' : '') +
                    '\
                                >\
                                <span style="margin-right:10px;">🎉</span> ' +
                    String(data.label) +
                    '\
                                </div>\
                                '
                );
              },
              choice: function (classNames, data) {
                return strToEl(
                  '\
                                <div\
                                class="' +
                    String(classNames.item) +
                    ' ' +
                    String(classNames.itemChoice) +
                    ' ' +
                    String(data.disabled ? classNames.itemDisabled : classNames.itemSelectable) +
                    '"\
                                data-select-text="' +
                    String(itemSelectText) +
                    '"\
                                data-choice \
                                ' +
                    String(data.disabled ? 'data-choice-disabled aria-disabled="true"' : 'data-choice-selectable') +
                    '\
                                data-id="' +
                    String(data.id) +
                    '"\
                                data-value="' +
                    String(data.value) +
                    '"\
                                ' +
                    String(data.groupId > 0 ? 'role="treeitem"' : 'role="option"') +
                    '\
                                >\
                                <span style="margin-right:10px;">👉🏽</span> ' +
                    String(data.label) +
                    '\
                                </div>\
                                '
                );
              }
            };
          }
        });

        var resetSimple = new Choices(document.getElementById('reset-simple'));

        var resetMultiple = new Choices('#reset-multiple', {
          removeItemButton: true
        });
      });
    </script>

    
{% block scripts %}
<script>
    if (sessionStorage.sempregreen_type === undefined) {
        sessionStorage.sempregreen_type = 'pre-live';
    }
    {% if not user.plan.has_live and not user.plan.live_only %}
        sessionStorage.sempregreen_type = 'pre-live';
    {% endif %}
    if (sessionStorage.sempregreen_type === 'pre-live') {
        if (document.querySelector('#live-button')) {
            document.querySelector('#live-button').classList.remove('d-none');
        }
        document.querySelector('iframe').src = '{% url "odds" %}';
        document.querySelectorAll('.d-none-if-live').forEach(item => {
            item.classList.remove('d-none');
        });
    } else {
        if (document.querySelector('#pre-live-button')) {
            document.querySelector('#pre-live-button').classList.remove('d-none');
        }
        document.querySelector('iframe').src = '{% url "live" %}';
    }
    document.querySelectorAll('.dropdown-menu li label').forEach(el => {
        el.addEventListener('click', e => {
            e.stopPropagation();
        });
    });

    const checkAll = document.querySelector('#check-all');

    if (checkAll) {
        checkAll.addEventListener('click', e => {
            e.preventDefault();
            e.stopPropagation();

            document.querySelectorAll('.dropdown-menu li input[type=checkbox][name*="houses"]').forEach(el => {
                el.checked = true;
            });
        });
    }

    const checkAllSports = document.querySelector('#check-all-sports');

    if (checkAllSports) {
        checkAllSports.addEventListener('click', e => {
            e.preventDefault();
            e.stopPropagation();

            document.querySelectorAll('.dropdown-menu li input[type=checkbox][name*="sports"]').forEach(el => {
                el.checked = true;
            });
        });
    }

    const uncheckAll = document.querySelector('#uncheck-all');

    if (uncheckAll) {
        uncheckAll.addEventListener('click', e => {
            e.preventDefault();
            e.stopPropagation();

            document.querySelectorAll('.dropdown-menu li input[type=checkbox][name*="houses"]').forEach(el => {
                el.checked = false;
            });
        });
    }

    const uncheckAllSports = document.querySelector('#uncheck-all-sports');

    if (uncheckAllSports) {
        uncheckAllSports.addEventListener('click', e => {
            e.preventDefault();
            e.stopPropagation();

            document.querySelectorAll('.dropdown-menu li input[type=checkbox][name*="sports"]').forEach(el => {
                el.checked = false;
            });
        });
    }

    const checkout_pix = document.querySelector('#form-checkout-pix');

    if (checkout_pix) {
        checkout_pix.addEventListener('submit', e => {
            e.preventDefault();
            e.stopPropagation();
            e.target.submit();
            location.reload();
        });
    }

    document.querySelectorAll('.select-plan').forEach(item => {
        item.addEventListener('click', e => {
            e.preventDefault();
            e.stopPropagation();

            document.querySelectorAll('input[name=plan_id]').forEach(el => {
                el.value = item.dataset.plan;
            });

            document.querySelector('#pay-form').classList.remove('d-none');

            const cardForm = mp.cardForm({
                    amount: item.dataset.amount,
                    iframe: true,
                    form: {
                        id: "form-checkout",
                        cardNumber: {
                            id: "form-checkout__cardNumber",
                            placeholder: "Número do cartão",
                        },
                        expirationDate: {
                            id: "form-checkout__expirationDate",
                            placeholder: "MM/YY",
                        },
                        securityCode: {
                            id: "form-checkout__securityCode",
                            placeholder: "Código de segurança",
                        },
                        cardholderName: {
                            id: "form-checkout__cardholderName",
                            placeholder: "Titular do cartão",
                        },
                        issuer: {
                            id: "form-checkout__issuer",
                            placeholder: "Banco emissor",
                        },
                        installments: {
                            id: "form-checkout__installments",
                            placeholder: "Parcelas",
                        },
                        identificationType: {
                            id: "form-checkout__identificationType",
                            placeholder: "Tipo de documento",
                        },
                        identificationNumber: {
                            id: "form-checkout__identificationNumber",
                            placeholder: "Número do documento",
                        },
                        cardholderEmail: {
                            id: "form-checkout__cardholderEmail",
                            placeholder: "E-mail",
                        },
                    },
                    callbacks: {
                        onFormMounted: error => {
                            if (error) return console.warn("Form Mounted handling error: ", error);
                            console.log("Form mounted");
                        },
                        onSubmit: event => {
                            event.preventDefault();

                            const {
                                paymentMethodId: payment_method_id,
                                issuerId: issuer_id,
                                cardholderEmail: email,
                                amount,
                                token,
                                installments,
                                identificationNumber,
                                identificationType,
                            } = cardForm.getCardFormData();

                            fetch("{% url 'process-payment-card' %}", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                },
                                body: JSON.stringify({
                                    plan_id: item.dataset.plan,
                                    token,
                                    issuer_id,
                                    payment_method_id,
                                    transaction_amount: Number(amount),
                                    installments: Number(installments),
                                    payer: {
                                        email,
                                        identification: {
                                            type: identificationType,
                                            number: identificationNumber,
                                        },
                                    },
                                }),
                            }).then(response => {
                                if (response.status !== 201) {
                                    throw new Error('Something went wrong');
                                }
                                alert('Pagamento aprovado com sucesso! Clique no botão para ter acesso completo ao sistema.');
                                location.reload();
                            }).catch(_ => {
                                alert('ERRO! Verifique se os dados do cartão estão corretos, ou se você possui saldo no cartão.');
                            });
                        },
                        onFetching:
                            (resource) => {
                                console.log("Fetching resource: ", resource);

                                // Animate progress bar
                                const progressBar = document.querySelector(".progress-bar");
                                progressBar.removeAttribute("value");

                                return () => {
                                    progressBar.setAttribute("value", "0");
                                };
                            },
                        onError: (errors) => {
                            let errorsHTML = [];

                            errors.forEach(e => {
                                errorsHTML.push('<span>' + e.message + '</span>')
                                document.querySelector('#mp-errors').innerHTML = errorsHTML.join('<br>');
                            });
                        }
                    },
                })
            ;
        })
        ;
    });
    const mp = new MercadoPago("APP_USR-2f1d6fbf-33af-4dd7-855f-beb92c535c8b", {locale: 'pt-BR',});
    (async function getIdentificationTypes() {
        try {
            const identificationTypes = await mp.getIdentificationTypes();
            const identificationTypeElement = document.getElementById('form-checkoutpix__identificationType');

            createSelectOptions(identificationTypeElement, identificationTypes);
        } catch (e) {
            return console.error('Error getting identificationTypes: ', e);
        }
    })();

    function createSelectOptions(elem, options, labelsAndKeys = {label: "name", value: "id"}) {
        const {label, value} = labelsAndKeys;

        elem.options.length = 0;

        const tempOptions = document.createDocumentFragment();

        options.forEach(option => {
            const optValue = option[value];
            const optLabel = option[label];

            const opt = document.createElement('option');
            opt.value = optValue;
            opt.textContent = optLabel;

            tempOptions.appendChild(opt);
        });

        elem.appendChild(tempOptions);
    }
</script>
{% endblock %}
  <!-- Live Support Widget -->

<!-- end Live Support Widget -->
  </body>
</html>
