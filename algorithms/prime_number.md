素数
=======
(也说质数) 数学上指在大于1的整数中只能被1和它本身整除的数 - 1既不是质数也不是合数

埃拉托色尼筛选法 - 埃式算法
-------
python描述
----
```python
def _int_iter():
    n = 1
    while True:
        n = n + 1
        yield n

def  _not_divisible(n):
    return lambda x:x % n > 0

def primes():
    it = _int_iter()
    while True:
        n = next(it)
        yield n
        it = filter(_not_divisible(n), it)
```
