Part One: CSS Basics
=======

class命名
=======
header/main/footer/banner/sidebar/container

h5语义标签
=======
header/footer/nav/main/section/aside/article

directives
=======
@import url(css/style.css) // bad for performance
background-image: url(path/img.png)

selectors
=======
Tag Selectors
Class Selectors
ID Selectors
Attribute Selectors
    img[title]
    .icon[name="xxx"]
    a[href^="http://"] -- selects any external link
    ^= -- begins with
    $= -- ends with
    *= -- contains
------
Group Selectors
Universal Selector (Asterisk)
-------
Descendent Selectors
Child Selectors
    .a > .b

Sliblings
=======
slibling selector
-------
    h2 + p
general sibling combinatory selector
-------
    h2 ~p 

The :not() Selector
=======
p:not(.classy) -- can only be used once with a selector

Pseudo classes and Pseudo elements
=======
a:link
a:hover
a:active
a:visited

input:focus

Child Selectors
-------
li:first-child -- the li as first child
li:last-child
li:nth-child(odd/even/3n+2)

Child Type Selectors
-------
p:first-of-type
p:last-of-type
p:nth-of-type(odd/even/3n+2)

p::first-letter
p::first-line
p::before
p::after
::selection

Which Style Wins
=======
A tag selector is worth 1 point.
A class selector is worth 10 points.
An ID selector is worth 100 points.
An inline style is worth 1000 points.
when specificity equals, last style wins.

Eric Meyer's CSS Reset
=======
http://meyerweb.com/eric/tools/css/reset/


Part Two: Applied CSS
=======

Formatting Text
=======
Using Fonts
-------
    font-family:

Using Web Fonts
-------
    @font-face {
        font-family: 'webfont';
        src: url('//...') format('xxx');...
    }

Adding Color To Text
-------
color:
font-size:
font-style:
font-weight:
text-transform:
font-variant:normal/small-caps;
text-decoration:none/underline/overline/line-through/blink;
letter-spacing:-1px/.7em;
word-spacing:2px;
text-shadow:-4px 5px 3px #999999;
line-height:1.5/1.5em/150%/10px;
text-align:left/right/center/justify/inherit;
text-indent:5em/25px;

Styling Lists
-------
