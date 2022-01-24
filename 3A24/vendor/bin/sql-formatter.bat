@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/../doctrine/sql-formatter/bin/sql-formatter
php "%BIN_TARGET%" %*
