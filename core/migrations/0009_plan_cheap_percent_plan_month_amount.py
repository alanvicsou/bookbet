# Generated by Django 4.1.5 on 2023-01-12 16:59

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('core', '0008_plan_amount_plan_months'),
    ]

    operations = [
        migrations.AddField(
            model_name='plan',
            name='cheap_percent',
            field=models.IntegerField(default=1, verbose_name='Você economiza'),
        ),
        migrations.AddField(
            model_name='plan',
            name='month_amount',
            field=models.DecimalField(decimal_places=2, default=1, max_digits=10, verbose_name='O mês sai por'),
        ),
    ]
