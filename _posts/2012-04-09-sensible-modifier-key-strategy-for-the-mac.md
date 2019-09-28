---
layout: post
title: "Sensible Modifier Key Strategy for the Mac"
description: ""
category: 
tags: []
---

For [Quicksilver][1], I've been using Command-Space. This is probably the oldest trigger I've had. When Spotlight came out and tried to replace it, I got rid of Spotlight, and went right back to Command-Space for Quicksilver. Then [Omnifocus][2] became a big part of my life. Actually before Omnifocus I was using Kinkless GTD, and for that, I had Command-Shift-Space, which seemed fair. All of my HUD interfaces were crowding the space bar. This seemed fine. To my knowledge, Apps (we called them programs back then), typically used Command for keyboard shortcuts. And then I became a designer and the shit hit the fan. Adobe entered my life. A quick tour of Indesign shows Adobe's carelessness of keyboard shortcuts:

- F8 to open the Info Window
- Option-Shift-Command-0 to view the entire pasteboard
- Option-Shift-F11 for the Glyphs window
- Shift-Command-T for Tabs
- Command-T for Characters
- Option-Command-T for Paragraph window

Adobe, and especially inDesign, seems to want to mangle your hands and memory for an insane amount of key chording. So I think it's time to organize my modifier keys as much as humanly possible, and base my choices on a coherent collection that works with Application modifiers, as well as makes sense for the spirit of each modifier key. From Wiki:

- Command is for GUIs, as stated in the Macintosh Interface Guidlines
- If your App needs more keyboard shortcuts, use Option-Command 
- Option is for text (designers all know about the mid-dot or Option-8)
- Control is for control characters, which used to be signals sent to keyboards that produced no visible result, like eject, or terminal bell
- Function Keys are all over the place. It seems like they are the programmable keys, but OS X has decided to use them for OS matters, Adobe uses them for anything they damn well please.

In picking a modifier key strategy for all the HUDS and window resizing and calling of often used apps, I'm thinking the Control Key is the way to go. OS X guidelines tell Apps to stay off, and since I'm a ViM guy in the terminal, I don't need to worry too much about overstepping there. So I'm thinking:

- Control-Space for Quicksilver
- Control-t for Terminal
- Control-i for IRC
- Control-m to resize the current window to take up most of the screen (using [Moom][3])
- Control-Left-Arrow to resize to left of screen, etc etc
- Control-a in the terminal is for [Tmux][4]
- Control-b for browser (to create some App agnosticism incase I switch between Safari and Chrome etc)


[1]: http://qsapp.com/
[2]: http://www.omnigroup.com/products/omnifocus/
[3]: http://itunes.apple.com/us/app/moom/id419330170?mt=12
[4]: http://tmux.sourceforge.net/

