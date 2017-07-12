斐波那契数列
=======
python描述
-------
```python
def fibonacci():
    a, b = 0, 1
    while True:
        yield a
        a, b = b, a + b
```