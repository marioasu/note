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

Formatting Words And Letters
-------
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
list-style-type:none;
list-style-position:outside/inside/inherit;
list-style-image:url(xxx);

Margins,Paddings And Borders
=======
margin-right: 20px;
padding-top: 3em;
margin-left/right/top/buttom: 10%; // when use percentages, spaces are calculated base on the width of the containing element.

Colliding Margins
-------
when margin collides, the larger one will be use.

Collapsing Margins
-------
when inner box's margin smaller than outer's, two margins actually become the outer one.
Horizontal (left and right) margins and margins between floating elements don’t collapse in this way.
Absolutely and relatively positioned elements don’t collapse either.

you can’t increase the height of the inline element with top or bottom padding or margins. -- except img tag
If you want top and bottom margins and padding to work for an inline element, you can use the display:inline-block instruction.

.divide-line {
    margin: 40px 0 20px;
    border-top: 1px solid #eaeaea;
}

Creating Rounded Corners
-------
border-radius:20px;
border-radius:40px/20px;

box-shadow: "horizontal offset" "vertical offset" "shadow radius" "shadow color";

rem -- font size of the root element

Determining Height And Width
-------
box-sizing: content-box/padding-box/border-box

overflow: visible/scroll/auto/hidden

negative margin pulls the element out toward the direction of the margin

