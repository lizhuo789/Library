### 一. 引入界面

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

### 二. 公共部分引入或修改
1.新建文件public(新建top和left)
2.index分离头部到top并删除
①在网页中找到源代码显示的头部，并删除;
②并在代码中添加{include file="public/top" /} -->又引入中右部；
3.index分离中右部到left并删除;
①在网页中找到源代码显示的中右部，并删除;
②并在代码中添加{include file="public/left" /} -->又引入中右部；

注意: top->代表网页中首部
         left->代表网页中部或者右部



### 三. 前台模板文件分离

1. 找到前台view，在公用文件放入新建的public

2. 格式放入，改名head footer

3. 前台首页分离

4. 引入头部，底部；引出头部，底部

5. 替换其他模板

6. 头部底部公共文件分离

   

   ### 四. 管理员添加功能

   说明：管理员的增删改查

   1. 首先，创建管理员的表

      ①新建数据页

      ②2.修改连接地址

      ③管理员添加（{:url('add')}   {:url('admin/lst')}）

      ④管理员密码 

      2.后台前台连接同一个数据库

      ①数据库配置相关信息（数据库地址，密码等等）

      ②数据库连接-->数据添加(在post里接收数据，在向admin里添加数据)注意：以数组的形式添加数据

### 五. 管理员数据查询方法

1. 查询数据

2. 数据库查询

   ①使用助手函数 

   ②Db:table('bk_admin')

   3.模型查询

   ①实例化对象，通过对象操作(初始化：_inltlalize（）)

   ②链式操作

### 六. 模型层修改与删除

1.模型层修改数据

①创建数据

②修改并返回，执行

2.删除当前模型

①修改list(修改链接地址)

②user->delete()

