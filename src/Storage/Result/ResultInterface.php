<?php

namespace Cityware\ParallelJobs\Storage\Result;

interface ResultInterface {

    /**
     * Get result
     * @param string
     */
    public function getResult();
}
