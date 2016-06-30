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
Object

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
Object.setPrototypeOf(bar, foo) // ES6


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
in function, set this to undefined

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
var foo = (a) => { // fat arrow operator
  console.log(a);
};
inherits the this from outer scope -- like function expression.bind(this)
when be called, obey lexical scope


this & Object Prototypes
=======

this
-------
is not an author-time binding but a runtime binding
when a function is invoked, an activation record, otherwise known as an execution context, is created. -- call-site

new
-------
call a function with a new in front of it construct a new object

Objects
-------
var obj = {} // declarative (literal) form
var obj = new Object() // constructed form

Build-in Objects // actually just built-in functions
-------
String
Number
Boolean
Object
Function
Array
Date // Date values can only be created with their constructed object form
RegExp
Error
null and undefined have no object wrapper form, only their primitive values
In objects, property names are always strings -- String()

Arrays
-------
adding named properties does not change the reported length of the array
but if the property name looks like a number, it will end up instead as a numeric index
array.length is much like the capacity of the array

Duplicating Objects
-------
var newObj = JSON.parse( JSON.stringify( someObj ) ); // if Object is JSON safe
var newObj = Object.assign( {}, myObject ); // ES6 shallow copy
Object.getOwnPropertyDescriptor( myObject, property);
Object.defineProperty( myObject, property, {...});
Object.preventExtensions( myObject ); // prevent an object from having new properties
Object.seal(..) // preventExtensions and set configurable to false
Object.freeze(..) // seal and set writable to false

[[Get]]
-------
if [[Get]] not find, it returns the value undefined
reference a value that cant be resolved with the application lexical scope look-up, a ReferenceError is thrown

[[Put]]
-------

("a" in myObject); // property name -- check [[Prototype]]
myObject.hasOwnProperty("a");
Object.prototype.hasOwnProperty.call(myObject,"a");
Object.getOwnPropertyNames(..)

Enumeration
-------
myObject.propertyIsEnumerable("a");
It's a good idea to use for..in loops only on objects, and traditional for loops with numeric index iteration for the values stored in arrays. // for in will include enumerable properties

[[Prototype]]
-------
var myObject = Object.create( anotherObject ); // [[Prototype]] linkage
```
function Foo() {
    // ...
}
Foo.prototype.constructor === Foo; // true
var a = new Foo(); // constructor calls
Object.getPrototypeOf( a ) === Foo.prototype; // true
a.constructor === Foo;
```

Behavior Delegation
-------
all about objects being linked to other objects

Towards Delegation-Oriented Design
-------

type introspection
-------
Foo.isPrototypeOf( Bar );
Object.getPrototypeOf( Bar ) === Foo;

Types & Grammar
=======
Specifically, a function is referred to as a "callable object" -- an object that has an internal [[Call]] property that allows it to be invoked.

Strings
------
like Arrays
    str.lenght
    str.indexOf()
    str.concat()
str.charAt(x) -- str[x]

we can "borrow" non-mutation array methods against our string
-------
    arr.join()
    arr.map()
    Array.prototype.join.call( str, "-" );
arr.reverse() -- cant borrow(strings are immutable!)
str.split("").reverse().join("") instead
