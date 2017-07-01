Title: git github使用
Date: 2017-06-07 11:43:26
Modified: 2017-06-07 11:43:26
cat: linux
Tags: 
Slug: git
Authors: u0mo5 
Summary: 

**1.git初始化**
    git init  
    git add .  
    git commit -m "pelican static blog test"  
    git remote add origin git@github.com:你的github用户名/你的github用户名.github.io.git  
    # 例如我的就是：git@github.com:521xueweihan/521xueweihan.github.io.git  
    git push -u origin master  




**2.push 使用https或者ssh地址，不能使用http**
    Birdy-2:learnGit birdy$ git remote rm origin  
    Birdy-2:learnGit birdy$ git remote add origin git@github.com:timothysdp/learnGit.git  
    Birdy-2:learnGit birdy$ git push -u origin master  
    Counting objects: 12, done.  
    Delta compression using up to 8 threads.  
    Compressing objects: 100% (6/6), done.  
    Writing objects: 100% (12/12), 924 bytes | 0 bytes/s, done.  
    Total 12 (delta 0), reused 0 (delta 0)  
    To git@github.com:timothysdp/learnGit.git  
