<?php

namespace Patterns\Filter\Criteria;

/**
 * Interface Criteria.
 */
interface Criteria
{
    /**
     * @param array $persons
     *
     * @return array
     */
    public function meet(array $persons);
}
