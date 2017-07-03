from django.http import HttpResponse



def index(request):
    return HttpResponse("Hello index ! ")
 
def hello(request):
    return HttpResponse("Hello world ! ")