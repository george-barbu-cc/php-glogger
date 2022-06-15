<?php

namespace GBLogger;

use Exception;

class EmptyLogger implements ILogger{

    public function log($source, $level, $data, $eol = true){
    }

    /**
     * @param string $source
     * @param Exception $ex
     * @return void
     */
    public function exception($source, $ex){
    }
}
