alphanumeric characters
------------------------
console.log(Math.random().toString(36).substr(2));

trim
------------
String.method('trim', function() {
	return this.replace(/^\s+|\s+$/g, '');
});