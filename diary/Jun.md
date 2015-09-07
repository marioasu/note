6.3
==========
迪米特法则（Law of Demeter）又叫作最少知识原则（Least Knowledge Principle 简写LKP），就是说一个对象应当对其他对象有尽可能少的了解,不和陌生人说话。英文简写为: LoD.

6.6
=========
从哲学解析数学，指数是相同数字的乘法量变导致的质变产物；指数和对数是一对哲学范畴。

6.10
========
php -i // information

6.11
========
mysql 去html标签函数
---------------------
DELIMITER //
CREATE FUNCTION `strip_tags`($str text) RETURNS text
BEGIN
DECLARE $start, $end INT DEFAULT 1;
LOOP
SET $start = LOCATE("<", $str, $start);
IF (!$start) THEN RETURN $str; END IF;
SET $end = LOCATE(">", $str, $start);
IF (!$end) THEN SET $end = $start; END IF;
SET $str = INSERT($str, $start, $end - $start + 1, "");
END LOOP;
END;
//
DELIMITER ;

c
-------
'\n' 是单个字符
"\n" 是一个包含一个字符的字符串常量

6.18
=========
c
----------
'\0' 表示值为0的字符,也就是空字符(null)

6.24
=========
curl
---------
php curl 请求的时候注意对有+的数据urlencode 接收方会将接收到的+当作是空格编码后的值,而%2B会被理解为真正的+