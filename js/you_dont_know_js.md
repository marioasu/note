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

equality
-------
none-primitive values are held by reference
arrays are by default coerced to strings by simply joining all the values with commas

inequality
-------
if both values are strings, the comparison is made alphabetically like a dictionary
if one or both is not a string, then both value are coerced to be numbers
string is being coerced to the "invalid number value" - NaN

scopes
-------
### var function scope
### let block scope

immediately invoked function expression (IIFE)
-------
(function foo() {...})()

closure
-------
inner function has a closure over inner variables, meaning it will retain its access to them even after the outer function finishes running
there's a closure in the inner function keeping inner variables alive

this
-------
The this keyword is dynamically bound based on how the function in question is executed
this refer to the caller instead of the function itself
new foo() sets this to a brand new empty object

prototype
-------
var bar = Object.create(foo) // bar is prototype-linked to foo


Scope & Closures
=======

compiler theory
-------
Tokenizing/Lexing 标记/词法分析
Parsing 解析
    taking a stream (array) of tokens and turning it into a tree of nested elements called an "AST" (Abstract Syntax Tree)
Code-Generation 代码生成

"use strict"
-------
disallows the automatic/implict global variable creation
eval() do not actually modify the enclosing scope

Lexical Scope 词法作用域
-------

let
-------
implicitly hijacks any block's scope for its variable declaration
variable will be declared at each iteration in for-loop

const
-------
block scope and cant be change

var a = 2;
-------
var a; during the compilation phase
a = 2; during the execution phase

hoisting
-------
function declarations -- function expressions will not hoist
variables

closure
-------
inner function has a lexical scope closure over outer function, which keeps that scope alive for inner function to reference at any later time
inner function has a reference to outer scope, that reference is called closure
inner function closer over outer scope by accessing outer variable
inner function has a scope closure over the scope of outer function
so we can find variable via closure
inner function -- closured function
Closure is when a function can remember and access its lexical scope even when it's invoked outside its lexical scope

ES6 Module
-------
export exports an identifier to the public API for the current module
import func from file // import partial function
module file from file // import entire module

lexical scope & dynamic scope
-------
To be clear, JavaScript does not, in fact, have dynamic scope. It has lexical scope. Plain and simple. But the this mechanism is kind of like dynamic scope.

arrow function
-------
var foo = a => {
  console.log(a);
};
inherits the this from outer scope -- like function expression.bind(this)


this & Object Prototypes
=======
