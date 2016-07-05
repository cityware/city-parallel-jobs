<?php

namespace Cityware\ParallelJobs\Storage\Results;

use Cityware\ParallelJobs\Exception\RuntimeException;
use Cityware\ParallelJobs\Storage\Result;

class Results implements ResultsInterface {

    /**
     * List of result
     * @var array
     */
    protected $results = array();

    /**
     * Results construction
     */
    public function __construct(array $results = null) {
        if ($results) {
            $this->results = $results;
        }
    }

    /**
     * add a result object
     */
    public function addResult($child, $result) {
        if (!$result instanceof Result\ResultInterface) {
            throw new RuntimeException('Result type must be implements ResultInterface');
        }
        $this->results[$child - 1] = $result;
    }

    /**
     * Get first child
     * @return int
     */
    public function getFirstChild() {
        return $this->getChild(1);
    }

    /**
     * Get child
     * @param int $num
     */
    public function getChild($num) {
        return $this->results[$num - 1];
    }

}
