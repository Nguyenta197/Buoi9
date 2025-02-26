<?php

use eftec\bladeone\BladeOne;

function view($viewFile, $data = []){
    $viewDir = "./app/Views";
    $storageDir = "./storage";
    $blade = new BladeOne($viewDir,$storageDir, BladeOne::MODE_DEBUG);
    echo $blade->run($viewFile, $data);
}