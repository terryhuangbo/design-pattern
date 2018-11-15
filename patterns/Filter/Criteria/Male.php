<?php

namespace Patterns\Filter\Criteria;

/**
 * Class Male.
 */
class Male implements Criteria
{
    /**
     * @param \Patterns\Filter\Person[] $persons
     *
     * @return \Patterns\Filter\Person[] $persons
     */
    public function meet(array $persons)
    {
        $malePerson = array();
        foreach ($persons as $person) {
            if (0 === strcasecmp($person->getGender(), 'MALE')) {
                $malePerson[] = $person;
            }
        }

        return $malePerson;
    }
}
