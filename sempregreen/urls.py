from django.contrib import admin
from django.urls import path, include
from core import views

admin.site.site_header = 'Administrativo'

urlpatterns = [
    path('admin/', include('loginas.urls')),
    path('admin/', admin.site.urls),
    path('', views.LoginView.as_view(), name='login'),
    path('logout', views.LogoutView.as_view(), name='logout'),
    path('refresh', views.RefreshView.as_view(), name='refresh'),
    path('register', views.RegisterView.as_view(), name='register'),
    path('dashboard', views.DashboardView.as_view(), name='dashboard'),
    path('odds', views.OddsView.as_view(), name='odds'),
    path('live', views.LiveView.as_view(), name='live'),
    path('redirect/<surebet_id>/<house>', views.RedirectView.as_view(), name='redirect'),
    path('calc/<surebet_id>/<house1>/<house2>', views.CalcView.as_view(), name='calc'),
    path('remove/<surebet_id>', views.RemoveView.as_view(), name='remove'),
    path('process_payment', views.ProcessPayment.as_view(), name='process-payment'),
    path('process_payment_card', views.ProcessPaymentCard.as_view(), name='process-payment-card'),
    path('r/<email>', views.RefererView.as_view(), name='referer'),
    path('add/<email>', views.ReferersView.as_view(), name='referer'),
    path('indications', views.IndicationsView.as_view(), name='indications'),
    path('addcliente', views.AddclienteView.as_view(), name='addcliente'),
    path('notification', views.PaymentNotification.as_view(), name='notification'),
    path("password_reset/", views.PasswordResetView.as_view(), name="password_reset"),
    path("password_reset/done/", views.PasswordResetDoneView.as_view(), name="password_reset_done",),
    path("reset/<uidb64>/<token>/", views.PasswordResetConfirmView.as_view(), name="password_reset_confirm",),
    path('cancel_plans/', views.cancel_plans, name='cancel_plans'),
    path('atualizar-expiracao-plano/', views.atualizar_expiracao_plano, name='atualizar_expiracao_plano'),
    path('relatorio/', views.relatorio_view, name='relatorio'),
    path('gerenciamento', views.GerenciamentoView.as_view(), name='gerenciamento'),
    path('calcteste/<surebet_id>/<house1>/<house2>', views.CalcTesteView.as_view(), name='calcteste'),
]
