二. 映入界面
1. 第二种use think\controller(继承Controller类）
①引入命名空间
②继承命名空间->使用方法
感想：代码越简单越好
2. 建立列表界面
3. 添加add界面
①在WWW\bick\application\admin\view\admin中admin.php建立add
②会建立一个新的页面
修改图片，和以前一样
4. 编辑editor界面，如上


注意：关键词不能乱用，修改词

三. 公共部分引入或修改
1.新建文件public(新建top和left)
2.index分离头部到top并删除
①在网页中找到源代码显示的头部，并删除;
②并在代码中添加{include file="public/top" /} -->又引入中右部；
3.index分离中右部到left并删除;
①在网页中找到源代码显示的中右部，并删除;
②并在代码中添加{include file="public/left" /} -->又引入中右部；

注意: top->代表网页中首部
         left->代表网页中部或者右部