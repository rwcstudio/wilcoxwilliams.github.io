---
layout: post
title: "Getting the Noir Blog onto Heroku"
description: ""
category: 
tags: []
---

Continuing in my series of posts incase anything I'm doing breaks.

Fork [this on github][1]. I forked it from someone else who put a procfile into the folder so it would work OTB on heroku.

Then the usual from [here][2]:

    heroku create
    git push heroku master
    heroku ps:scale web=1

[1]:https://github.com/elliottw/Noir-blog
[2]:https://devcenter.heroku.com/articles/clojure/

