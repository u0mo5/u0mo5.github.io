Title: eclipse使用
Date: 2017-06-22 11:43:26
Modified: 2017-06-22 11:43:26
cat: java
Tags: 
Slug: eclipse
Authors: u0mo5 
Summary: 




eclipse操作技巧
这里转载一些关于eclipse的使用技巧，eclipse是一个基于插件的开源项目，功能很强大，除了java外，通过安装插件可以编写大多数常用语言，可以说是一个非常强大，全面的ide开发工具。所以这里有必要介绍一下它的一些使用技巧，便于开发。  
这些技巧包括常用菜单、界面的操作和快捷键的使用。  
Eclipse可以建立多个工作区，每个工作区是一个文件目录，所有的相关文件都存放在这个目录下，在启动时会有对话框提示选择工作区。启动以后看到的就是工作台，工作台包含多个透视图，每个透视图又包含多个不同的窗口。  
Eclipse可以设置文件的关联打开程序，操作方法：Window->Preferences->General->Editors->File Associations.  
Eclipse可以以方法为独立的编辑单位和以类为编辑单位之间进行切换，操作方法：点击按钮[show source of selected Element only]。  
Eclipse的窗口可以通过点击右上角的标签大小化、恢复的操作，类似于Window的操作。  
Eclipse中可以实现目录折叠恢复功能，操作方法：点击视图上方的折叠、恢复标签。  
Eclipse提供了自动刷新功能以避免每次在Eclipse以外更改文件后手工刷新，操作方法：window->Preferences->General->Workspace->选中Refresh automatically。  
Eclipse中打开一个Java文件，鼠标点击一个元素（类、方法），会在Declarition窗口中直接显示这个元素的源代码，类似于以前的 Open Declarition功能（通过Ctrl+鼠标左键）。另外还可以在Javadoc视图中显示这个元素的javadoc。  
Eclipse中可以显示行号，操作方法：Window->Preference->General->Editors->Text Editors->选中show line numbers。  
Eclipse提供了强大的Java代码格式化功能，配置方法：Window-Preference->Java->Code Style->Formatter。  
Eclipse提供了注释隐藏功能，可以通过Window- Preference->Java->Editor->Folding->选中Enable folding配置，但是当隐藏后，调试代码时会出现代码行不一致的情况，所以还是建议不要使用此功能。  
Eclipse提供了所选元素动态高亮显示功能，选中一个元素以后编辑器中的该元素的所有调用被高亮显示，配置方法：Window-Preference->Java->Editor->Mark Occurrences。  
Eclipse中浏览窗口主要包括：Navigator、Package Explorer、Project Explorer、Hierarchy、  
Eclipse中常用的快捷键：Alt+Arrow Up(Down)、Ctrl+Shift+X(Y)、  
Eclipse中调试时可以直接在想要显示结果的变量上右击鼠标，在弹出的下拉菜单中进行相应操作，不需要到相应的窗口在进行操作。  
在Eclipse中调试时可以选择系统线程过滤器将系统线程从调试视图中过滤掉。  
Eclipse调试中可以直接在变量视图中修改变量的值，保存后即可生效。  
Eclipse中可以比较两个文件，方法是选择两个文件，右击鼠标，选择compare->each other。    
下面是快捷键的使用：  
Ctrl+1 快速修复(最经典的快捷键,就不用多说了)  
Ctrl+D: 删除当前行  
Ctrl+Alt+↓ 复制当前行到下一行(复制增加)  
Ctrl+Alt+↑ 复制当前行到上一行(复制增加)  
Alt+↓ 当前行和下面一行交互位置(特别实用,可以省去先剪切,再粘贴了)  
Alt+↑ 当前行和上面一行交互位置(同上)  
Alt+← 前一个编辑的页面 Alt+→ 下一个编辑的页面(当然是针对上面那条来说了)  
Alt+Enter 显示当前选择资源(工程,or 文件 or文件)的属性  
Shift+Enter 在当前行的下一行插入空行(这时鼠标可以在当前行的任一位置,不一定是最后)  
Shift+Ctrl+Enter 在当前行插入空行(原理同上条)  
Ctrl+Q 定位到最后编辑的地方 Ctrl+L 定位在某行 (对于程序超过100的人就有福音了)  
Ctrl+M 最大化当前的Edit或View (再按则反之)  
Ctrl+/ 注释当前行,再按则取消注释  
Ctrl+O 快速显示Outline  
Ctrl+T 快速显示当前类的继承结构  
Ctrl+W 关闭当前Editer  
Ctrl+K 参照选中的Word快速定位到下一个  
Ctrl+E 快速显示当前Editer的下拉列表(如果当前页面没有显示的用黑体表示)  
Ctrl+/(小键盘) 折叠当前类中的所有代码  
Ctrl+×(小键盘) 展开当前类中的所有代码  
Ctrl+Space 代码助手完成一些代码的插入(但一般和输入法有冲突,可以修改输入法的热键,也可以暂用Alt+/来代替)  
Ctrl+Shift+E 显示管理当前打开的所有的View的管理器(可以选择关闭,激活等操作)  
Ctrl+J 正向增量查找(按下Ctrl+J后,你所输入的每个字母编辑器都提供快速匹配定位到某个单词,如果没有,则在stutes line中显示没有找到了,查一个单词时,特别实用,这个功能Idea两年前就有了)  
Ctrl+Shift+J 反向增量查找(和上条相同,只不过是从后往前查)  
Ctrl+Shift+F4 关闭所有打开的Editer  
Ctrl+Shift+X 把当前选中的文本全部变味小写  
Ctrl+Shift+Y 把当前选中的文本全部变为小写  
Ctrl+Shift+F 格式化当前代码  
Ctrl+Shift+P 定位到对于的匹配符(譬如{}) (从前面定位后面时,光标要在匹配符里面,后面到前面,则反之) Ctrl+Shift+R 查找文件  
Ctrl+Shift+T 查找类 下面的快捷键是重构里面常用的,本人就自己喜欢且常用的整理一下(注:一般重构的快捷键都是Alt+Shift开头的了)  
Alt+Shift+R 重命名 (是我自己最爱用的一个了,尤其是变量和类的Rename,比手工方法能节省很多劳动力) Alt+Shift+M 抽取方法 (这是重构里面最常用的方法之一了,尤其是对一大堆泥团代码有用)  
Alt+Shift+C 修改函数结构(比较实用,有N个函数调用了这个方法,修改一次搞定)  
Alt+Shift+L 抽取本地变量( 可以直接把一些魔法数字和字符串抽取成一个变量,尤其是多处调用的时候) Alt+Shift+F 把Class中的local变量变为field变量 (比较实用的功能
) Alt+Shift+I 合并变量(可能这样说有点不妥Inline)  
Alt+Shift+V 移动函数和变量(不怎么常用)  
Alt+Shift+M 自定义成方法  
Alt+Shift+Z 重构的后悔药(Undo)  

清除配置文件 在工作目录中删除一下文件：  
.metadata  