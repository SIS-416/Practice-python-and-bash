from django import forms

class CalForm(forms.Form):
    n1 = forms.IntegerField()
    n2 = forms.IntegerField()
    
    