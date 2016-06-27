alphanumeric characters
------------------------
console.log(Math.random().toString(36).substr(2));

trim
------------
String.method('trim', function() {
	return this.replace(/^\s+|\s+$/g, '');
});

原生js获取description属性
-------
document.querySelector('meta[name="description"]').getAttribute('content');

undefined
-------
var === void 0 // typeof var == 'undefined'

currying with `bind(..)`
-------
function foo(a,b) {
    console.log( "a:" + a + ", b:" + b );
}
var bar = foo.bind( null, 2 );
bar( 3 ); // a:2, b:3

禁止页面滚动
-------
document.body.style.overflow='hidden';
