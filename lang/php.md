# data type



# functions

## string functions

- int ord(string $str)

_return arscii value of character_

- string chr(int $ascii)

_return a specific character which specified by ascii,note that if the number is higher than 256(or less than 0), it will return the number mod 256_  
_man ascii 可以看到ascii表,php的转义字符表示方式可能和表中不同,另外php如果没有带取模函数的模块,可用取余(%)计算自己实现_

- string sprintf(string $format [, mixed $args [, mixed $...]])

_return a formatted string_  
_相似函数： print/printf/vprintf/sprintf/vsprintf 其中直接输出的函数returns the length of the outputted string_

