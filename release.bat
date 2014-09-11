@echo off
cd %~dp0
set tmp_dir=tmp_out
set /p rootPath=��Դ�ļ���Ŀ¼(Ĭ��Public)��
if not defined rootPath set rootPath=Public
for /f "delims=" %%i  in ('dir /ad/b "%rootPath%"') do (echo release %%i 
call fisp release -r %rootPath%/%%i -Dopm -d ./%tmp_dir%)

set /p deployName=��ѡ�񷢲���ʽ(fis-conf.js��deploy���ã�Ĭ��local):
if not defined deployName set deployName=local
@copy /Y .htaccess tmp.htaccess > nul
call fisp release -d %deployName%
del /Q tmp.htaccess
rd /s/q %tmp_dir%
echo release success
pause