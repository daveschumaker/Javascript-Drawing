# Simple Javascript Drawing App

I've been playing around with some ideas on how to use a combination of Javascript and Node.js to create a realtime interactive drawing game. I still have a long way to go, but this is what I have so far, while trying to flesh out my ideas.

## Requirements

Right now, you'll "need" a server capable of running PHP, since this is needed to save any drawing output from the canvas as an image file. "Need" is in quotes since this app runs fine without it, otherwise. You can draw, change colors, and clear the canvas. You just can't save the image.

## Things to do

Well, get this up and running using Node.js and socket.io to start! I also need to write come pages to setup a game, get usernames, store scores (and images drawn).

The other thing I'm struggling with is how to dynamically resize a canvas element that's being used by jqScribble (a jQuery drawing library plugin). Just in case someone decides to resize their browser window (or flips orientation on their phone or tablet), I want the canvas to properly resize as well and have the user still able to draw.

Right now, after the user resizes the window / canvas, the actual mouse cursor (or touch spot) doesn't match where a new line is being drawn. I can't quite figure this out yet. Ah well.

## Other libraries used

* jQuery: http://jquery.com/
* jqScribble: https://github.com/jimdoescode/jqScribble
* Skeleton Boilerplate: http://getskeleton.com/
