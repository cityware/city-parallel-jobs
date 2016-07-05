<?php

namespace Cityware\ParallelJobs\Storage\Results;

interface ResultsInterface {

    /**
     * Get child
     * @param int
     */
    public function getChild($num);
}
