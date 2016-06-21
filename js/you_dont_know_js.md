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

