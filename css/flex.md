flex(Flexible Box) 属性
==========
flex-grow flex-shrink flex-basis 属性的速记属性
默认 0 1 auto

flex-grow 项目相对其它灵活项目进行扩展的量
flex-shrik 项目相对其它灵活项目进行收缩的量
flex-basis 项目长度 auto|inherit|x%|xpx|xem

auto - 1 1 auto
none - 0 0 auto
initial - 0 1 auto (默认)
inherit - 继承父元素


.box {
	display: flex;
}
---------------------
设为flex布局以后,子元素的float、clear和vertical-align属性将失效
flex容器(flex container) 包含 flex项目(flex item)
![结构图](http://www.ruanyifeng.com/blogimg/asset/2015/bg2015071004.png)

容器的6个属性
-------------
- flex-direction  主轴方向 row|row-reverse|column|column-reverse
- flex-wrap  主轴换行 nowrap|wrap|wrap-reverse(第一行在下方)
- flex-flow  flex-direction 和 flex-wrap 的简写 默认 row nowrap
- justify-content  项目对齐方式 flex-start(默认-左对齐)|flex-end|center|space-between(两端对齐)|space-around
![结构图](http://www.ruanyifeng.com/blogimg/asset/2015/bg2015071010.png)
- align-items  项目在交叉轴上如何对齐 flex-start|flex-end|center|baseline|stretch
- align-content  定义多根轴线的对齐方式 flex-start|flex-end|center|space-between|space-around|strech

项目的6个属性
-------------
- order  排列顺序
- flex-grow 放大比例 默认0，有剩余空间也不放大
- flex-shrink 缩小比例，默认为1，设置为0时不缩小
- flex-basis flex-grow 和 flex-shrink 的缩写 可设置auto(1 1 auto) 和 none(0 0 auto)
- flex  flex-grow,flex-shrink和flex-basis的缩写 默认 0 1 auto
- align-self  单个项目不一样的对齐方式 auto|flex-start|flex-end|center|baseline|stretch
