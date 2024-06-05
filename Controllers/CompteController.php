<?php

require_once '../Models/Comptes.php';

$comptes = fetchcomptes();

include '../Views/comptes/index.php';