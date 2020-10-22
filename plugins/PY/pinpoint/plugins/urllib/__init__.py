#!/usr/bin/env python
# -*- coding: UTF-8 -*-
# Created by eeliu at 8/20/20
from ..common import Interceptor
try:
    import urllib.request
    from .UrlOpenPlugin import UrlOpenPlugin

    Interceptors = [
        Interceptor(urllib.request,'urlopen', UrlOpenPlugin)
    ]

    for interceptor in Interceptors:
        interceptor.enable()

except ImportError:
    pass


