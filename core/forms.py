from django import forms

from core.models import User


class UserForm(forms.Form):
    name = forms.CharField()
    email = forms.EmailField()
    whatsapp = forms.CharField()
    produto_link = forms.CharField()
    produto2_link = forms.CharField()
    produto3_link = forms.CharField()
    plan_id = forms.CharField()
    telsuporte = forms.CharField()
    plan_expire = forms.CharField()
    password = forms.CharField()
    confirm_password = forms.CharField()

    def clean_email(self):
        if User.objects.filter(email=self.data['email']).first():
            raise forms.ValidationError('Email já cadastrado')
        return self.data['email']

    def clean_confirm_password(self):
        if self.data['password'] != self.data['confirm_password']:
            raise forms.ValidationError('Senhas não conferem')
        return self.data['confirm_password']
