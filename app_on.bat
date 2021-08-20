@echo off
@echo ----------- Demarrer -------------------------------------
symfony server:stop
@echo ----------------------------------------------------------
symfony server:start -d
@echo !!! NE FERMEZ PAS CETTE FENETRE AVANT D'AVOIR TERMINER !!!
pause