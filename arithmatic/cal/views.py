from django.shortcuts import render
from . forms import CalForm 

# Create your views here.
def index(request):
  form = None
  answere = None
  if request.method == "POST": 
    form = CalForm(request.POST)
    n1 = int(form['n1'].value())
    n2 = int(form['n2'].value())
    add = n1 + n2
    subtraction = n1 - n2
    multiplication = n1 * n2
    divided = n1 / n2
    reminder = n1 % n2
    answere = [{ "addition":add, "subtraction":subtraction, 
                "multiplication":multiplication, 
                "divided":divided, "reminder":reminder}]
    
  context = {
        'form':CalForm(),
        'answere':answere
    }   
    
  return render(request, 'cal/index.html',context)
