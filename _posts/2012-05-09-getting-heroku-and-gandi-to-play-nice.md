---
layout: post
title: "Getting Heroku and Gandi to Play Nice"
description: ""
category: 
tags: []
---

in the command line:

    $ heroku domains:add www.titlecase.org
    $ heroku domains:add titlecase.org

and in gandi:

    @ 10800 IN A 174.129.212.2
    @ 10800 IN A 75.101.145.87
    @ 10800 IN A 75.101.163.44
    www 10800 IN CNAME titlecase.herokuapp.com.

notes:

Using Heroku's interface to change things, breaks things. Use the CLI. Be patient for changes to spread over the internet.

