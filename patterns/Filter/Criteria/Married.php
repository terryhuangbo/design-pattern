<?php

namespace Patterns\Filter\Criteria;

/**
 * Class Married.
 */
class Married implements Criteria
{
    /**
     * @param \Patterns\Filter\Person[] $persons
     *
     * @return \Patterns\Filter\Person[] $persons
     */
    public function meet(array $persons)
    {
        $marriedPerson = array();
        foreach ($persons as $person) {
            if (0 === strcasecmp($person->getMaritalStatus(), 'MARRIED')) {
                $marriedPerson[] = $person;
            }
        }

        return $marriedPerson;
    }
}
