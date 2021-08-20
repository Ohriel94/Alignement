@echo off
@echo ----------- Mise a jour ----------------------------------
symfony server:stop
@echo ----------------------------------------------------------
symfony  security:check
symfony  local:security:check
@echo ----------------------------------------------------------
symfony self:update -Y
composer update "symfony/*" --with-all-dependencies -Y¸
@echo ----------------------------------------------------------
timeout 30