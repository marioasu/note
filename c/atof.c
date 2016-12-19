#include "stdio.h" // 引入标准输入输出库头文件
#include "ctype.h" // 引入字符测试库头文件

// ascii to floating point numbers
double atof(char s[]) // 定义函数 atof ， 输入字符串 输出浮点数
{
    // 变量初始化
    double value=0.0, power=1.0; 
    int i=0, sign;

    for(; isspace(s[i]); i++); // 跳过输入前面的空格
    sign = s[i] == '-'  ? -1 : 1; // 根据输入的第一个字符是加号还是减号，判断是正数还是负数（+1或-1最后乘以结果）

    if (s[i]=='+' || s[i]=='-') i++; // 如果输入带了加减号 跳过它

    // 一位一位地读输入的整数部分，并乘以10（第一位相当于乘以0再加上第一位的数字）
    for (; isdigit(s[i]); i++) 
        value = 10.0 * value + (s[i] - '0'); // (s[i] - '0') 表示读到的字符和字符'0'的ascii码的差，相当于把字符转换成整数 eg：0的ascii码是48，1的ascii码是49,如果输入的最高位是字符'1',这里的结果就是整数1

    if (s[i] == '.') { // 如果存在小数部分
        i++; // 跳过小数点
        // 一位一位地计算小数部分
        for(; isdigit(s[i]); i++) {
            value = 10.0 * value + (s[i] - '0'); // 小数部分的值和整数部分计算方式一样儿一样儿的
            power *= 10; // 每计算一次小数部分就乘以10,最后再除回来
        }
    }
    return sign*value/power; // 返回最后结果 （带符号和还原小数部分）
}

// 测试函数
int main(int argc, char const *argv[])
{
    double a = atof("-23.456");
    printf("%f\n", a);
    return 0;
}
