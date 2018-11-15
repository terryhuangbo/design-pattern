<?php

namespace Patterns\Filter\Criteria;

/**
 * Class Single.
 */
class Single implements Criteria
{
    /**
     * @param \Patterns\Filter\Person[] $persons
     *
     * @return \Patterns\Filter\Person[] $persons
     */
    public function meet(array $persons)
    {
        $singlePerson = array();
        foreach ($persons as $person) {
            if (0 === strcasecmp($person->getMaritalStatus(), 'SINGLE')) {
                $singlePerson[] = $person;
            }
        }

        return $singlePerson;
    }
}
