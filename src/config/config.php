<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME,'pt_br.uft-8', 'portuguese');

//Pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));


//Arquivos
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(MODEL_PATH . '/Model.php'));

 