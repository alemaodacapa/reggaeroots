@echo off

rem -------------------------------------------------------------
rem  Yii command line bootstrap script for Windows.
rem
rem  @author Alemaodacapa <sac@reggaeroots.com.br>
rem  @link http://www.summerside.com.br/
rem  @copyright Copyright (c) 2008 Não ! Não tem Company NNT
rem  @license http://summerside.com.br/license
rem -------------------------------------------------------------

@setlocal

set YII_PATH=%~dp0

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "%YII_PATH%yii" %*

@endlocal


<!-- Only Example! -->
