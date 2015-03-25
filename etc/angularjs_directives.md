Angularjs
==========
运行自己的事件循环来检查数据模型变化
	事件循环 调用 $digest()循环
	过程被称作脏检查(dirty checking)

使用$预定义对象表示内部和内置的库函数
$scope -- 内部数据模型对象(model object)

视图和模型双向数据绑定(bi-directional) 用ng-model指令实现

ng-app声明AngularJS应用 ng-controller声明控制器

用模块封装代码 angular.module()声明模块
angular.module('myApp', []) 参数是模块名称和依赖列表

