#include "stdio.h"
// 首先 运行 file beijing shanghai 这行指令会给file文件中的main函数传递3个参数，第一个参数是文件名
int main(int argc, char const *argv[]) // argc 是一个整数,存放参数个数 argv是一个指向字符串的指针数组 argv[0]表示文件名 argv[1]表示第一个参数 以此类推
{
    while (argc > 1) {
        ++argv; // 先要明白argv是数组名，数组名存放数组中第一个元素的地址 ++表示第二个元素的地址 以此类推
        printf("%s\n", *argv); // *argv 取指针指向的值 （好像叫解引用）
        --argc;
    }

    // 定义c字符串的两种方式
    char arr[] = "abcdef"; // 字符数组
    char *str = "abcdef"; // 字符指针
    printf("%s\n", arr); // abcdef
    printf("%c\n", str[2]); // c

    return 0;
}
