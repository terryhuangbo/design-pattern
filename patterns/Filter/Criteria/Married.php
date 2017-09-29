<?php

namespace Patterns\Filter\Criteria;

/**
 * Class Married.
 */
class Married implements Criteria
{
    /**
     * @param array $persons
     *
     * @return mixed
     */
    public function meet(array $persons)
    {
        $marriedPerson = array();
        foreach ($persons as $person) {
            if (strcasecmp($person->getMaritalStatus(), 'MARRIED') === 0) {
                $marriedPerson[] = $person;
            }
        }

        return $marriedPerson;
    }
}
