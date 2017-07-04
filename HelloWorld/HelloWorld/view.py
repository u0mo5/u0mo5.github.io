"""HelloWorld URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/1.11/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  url(r'^$', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  url(r'^$', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.conf.urls import url, include
    2. Add a URL to urlpatterns:  url(r'^blog/', include('blog.urls'))
"""
import json
import time
from django.http import HttpResponse
 
from django.shortcuts import render
import sqlite3

 
def hello(request):
    context          = {}
    context['hello'] = 'Hello World!'
    return render(request, 'hello.html', context)

def collect(request):
	title = request.GET.get('title')
	response_data = {}
	response_data['result'] = 'success'
	response_data['message'] = 'You messed up'
	response_data['data'] = title
	
	conn = sqlite3.connect('bookfuns.db')
	now = int(round(time.time()))
	conn.execute("INSERT INTO says (ID,TITLE,SOURCE) \
      VALUES ("+str(now)+", '"+title+"', 'u0mo5')");



	conn.commit()
	print "Records created successfully";
	conn.close()
	
	return HttpResponse(json.dumps(response_data), content_type="application/json")	