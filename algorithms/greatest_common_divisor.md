最大公约数
=======
欧几里德算法/辗转相除法
-------
java描述
---
```java
public static int gcd(int p, int q)
{
    if (q == 0) {
        return p;
    }
    int r = p % q;
    return gcd(q, r);
}
```
