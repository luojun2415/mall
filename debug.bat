@echo off
cd %~dp0
set rootPath=Public
set destPath=res

for /f "delims=" %%i  in ('dir /ad/b "%rootPath%"') do (
start fisp release -wDr %rootPath%/%%i -d ./%destPath%)
