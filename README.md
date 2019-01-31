* 使用thinkph5.1搭建
### 使用说明
* 在config/app.php里面配置数据库的名称、用户名、密码。
* 在那个数据库中建立表`admin_user`,字段有二，`username`,`password`。`password`字段使用sha256加密密码。
* 在public/static/pv下面随意新建目录，每个新建的目录下随意放置视频。
* 在public/static/pc下面随意新建目录，每个新建的目录下随意放置图片。
接着会自动检测目录结构。
enjoy!
