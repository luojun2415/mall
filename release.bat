@echo off
cd %~dp0
set tmp_dir=tmp_out

call fisp release -r Public/common -Dopm -d ./%tmp_dir%
call fisp release -r Public/default -oDpm -d ./%tmp_dir%

set /p deployName=请选择发布方式(local/test/remote):
copy /Y .htaccess tmp.htaccess
call fisp release -d %deployName%
del /Q tmp.htaccess
echo 开始清理临时目录%tmp_dir%
rd /s/q %tmp_dir%