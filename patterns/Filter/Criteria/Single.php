<?php

namespace Patterns\Filter\Criteria;

/**
 * Class Single.
 */
class Single implements Criteria
{
    /**
     * @param array $persons
     *
     * @return mixed
     */
    public function meet(array $persons)
    {
        $singlePerson = array();
        foreach ($persons as $person) {
            if (strcasecmp($person->getMaritalStatus(), 'SINGLE') === 0) {
                $singlePerson[] = $person;
            }
        }

        return $singlePerson;
    }
}
