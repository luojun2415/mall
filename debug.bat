@echo off
cd %~dp0
start fisp release -wDr Public/common -d ./res
start fisp release -wDr Public/default -d ./res
