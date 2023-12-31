# Generated by Django 4.1.5 on 2023-02-02 12:06

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion
import django.utils.timezone
import model_utils.fields
import uuid


class Migration(migrations.Migration):

    dependencies = [
        ('core', '0018_payment_plan'),
    ]

    operations = [
        migrations.AlterField(
            model_name='payment',
            name='plan',
            field=models.ForeignKey(editable=False, null=True, on_delete=django.db.models.deletion.CASCADE, to='core.plan', verbose_name='Plano'),
        ),
        migrations.AlterField(
            model_name='payment',
            name='type',
            field=models.CharField(choices=[('CARD', 'Cartão'), ('PIX', 'Pix')], editable=False, max_length=100, verbose_name='Tipo'),
        ),
        migrations.AlterField(
            model_name='user',
            name='referer',
            field=models.ForeignKey(blank=True, null=True, on_delete=django.db.models.deletion.CASCADE, to=settings.AUTH_USER_MODEL, verbose_name='Indicado por'),
        ),
        migrations.CreateModel(
            name='Commission',
            fields=[
                ('created', model_utils.fields.AutoCreatedField(default=django.utils.timezone.now, editable=False, verbose_name='created')),
                ('modified', model_utils.fields.AutoLastModifiedField(default=django.utils.timezone.now, editable=False, verbose_name='modified')),
                ('id', model_utils.fields.UUIDField(default=uuid.uuid4, editable=False, primary_key=True, serialize=False)),
                ('status', models.CharField(choices=[('WAITING', 'Pendente de Pagamento'), ('PAID', 'Pago')], default='WAITING', editable=False, max_length=100, verbose_name='Status')),
                ('date', models.DateField(editable=False, null=True, verbose_name='Data de pagamento da comissão')),
                ('payment', models.ForeignKey(editable=False, null=True, on_delete=django.db.models.deletion.CASCADE, to='core.payment', verbose_name='Pagamento')),
            ],
            options={
                'verbose_name': 'Comissão',
                'verbose_name_plural': 'Comissões',
            },
        ),
    ]
