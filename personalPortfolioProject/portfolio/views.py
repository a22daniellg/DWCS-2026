from django.shortcuts import render
from .models import Project

# Create your views here.
def home(request):
    projects = Project.objects.order_by('title')[:2]
    return render(request, 'portfolio/home.html', {'projects':projects})