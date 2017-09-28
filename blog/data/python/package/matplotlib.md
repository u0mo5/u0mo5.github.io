


#urllib





##1.urlopen
```
import urllib.request
response = urllib.request.urlopen('http://python.org/')
html = response.read()
```

##2.request
```
import urllib.request
 
req = urllib.request.Request('http://python.org/')
response = urllib.request.urlopen(req)
the_page = response.read()
```

##3.发送数据
```
#! /usr/bin/env python3
 
import urllib.parse
import urllib.request
 
url = 'http://localhost/login.php'
user_agent = 'Mozilla/4.0 (compatible; MSIE 5.5; Windows NT)'
values = {
          'act' : 'login',
          'login[email]' : 'yzhang@i9i8.com',
          'login[password]' : '123456'
         }
 
data = urllib.parse.urlencode(values)
req = urllib.request.Request(url, data)
req.add_header('Referer', 'http://www.python.org/')
response = urllib.request.urlopen(req)
the_page = response.read()
 
print(the_page.decode("utf8"))


```

##4.发送数据和header
```
#! /usr/bin/env python3
 
import urllib.parse
import urllib.request
 
url = 'http://localhost/login.php'
user_agent = 'Mozilla/4.0 (compatible; MSIE 5.5; Windows NT)'
values = {
          'act' : 'login',
          'login[email]' : 'yzhang@i9i8.com',
          'login[password]' : '123456'
         }
headers = { 'User-Agent' : user_agent }
 
data = urllib.parse.urlencode(values)
req = urllib.request.Request(url, data, headers)
response = urllib.request.urlopen(req)
the_page = response.read()
 
print(the_page.decode("utf8"))
```
 

 


