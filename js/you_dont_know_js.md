Up & Going
=======

JavaScript has typed values, not typed variables
-------
string
number
boolean
null and undefined -- typeof null -> object (bug)
object -- have subtypes
    array
    function
symbol (new to ES6)

object wrapper
-------
String
Number
Boolean

explicit/implicit coercion
-------

Truthy & Falsy
-------
### falsy
'', "" (empty string)
0, -0, NaN (invalid number)
null, undefined
false

### truthy
'0'
[]
{}

none-primitive values are held by reference
arrays are by default coerced to strings by simply joining all the values with commas
