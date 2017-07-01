#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

AUTHOR = u'u0mo5'
SITENAME = u'读书圈博客'
SITEURL = 'http://u0mo5.github.io/blog'
# SITEURL = ''
# SITEURL = 'http://127.0.0.1:43110/18nikLV3pMs6VGaUPGwr6TZuJKAFW4NezE'

PATH = 'content'

TIMEZONE = 'Asia/Shanghai'

DEFAULT_LANG = u'zh_CN'
USE_FOLDER_AS_CATEGORY = True
DEFAULT_CATEGORY = 'hide'

# Feed generation is usually not desired when developing
FEED_ALL_ATOM = None
CATEGORY_FEED_ATOM = None
TRANSLATION_FEED_ATOM = None
AUTHOR_FEED_ATOM = None
AUTHOR_FEED_RSS = None

# Blogroll
LINKS = (('Pelican', 'http://getpelican.com/'),
         ('Python.org', 'http://python.org/'),
         ('Jinja2', 'http://jinja.pocoo.org/'),
         ('You can modify those links in your config file', '#'),)

# Social widget
SOCIAL = (('读书圈', 'http://bookfuns.com'),
          ('网址大全', 'http://123.bookfuns.com'),)

DEFAULT_PAGINATION = 10
THEME = 'pelican-themes/gum'
# Uncomment following line if you want document-relative URLs when developing
#RELATIVE_URLS = True
