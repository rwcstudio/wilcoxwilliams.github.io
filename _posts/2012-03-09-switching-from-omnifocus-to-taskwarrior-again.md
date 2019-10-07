---
layout: post
title: "Switching from Omnifocus to Taskwarrior, again"
description: ""
category: 
tags: []
---

The big reason why I've stuck with Omnifocus instead of switching was the fast entry of auto-completion. But after poking around with TW I found this [link][1] that shows how to have auto-completion. The problem is that this doc told me to put task_completion.sh into this folder:

    /etc/bash_completion.d

But I didn't have it. Anyway, I just did:

    brew install task-completion  
    source /usr/local/etc/bash_completion  

And everything works like a charm now.

[1]: http://taskwarrior.org/wiki/1/Tab_Completion

