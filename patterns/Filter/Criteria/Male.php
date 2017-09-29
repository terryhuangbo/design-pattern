<?php

namespace Patterns\Filter\Criteria;

/**
 * Class Male.
 */
class Male implements Criteria
{
    /**
     * @param Person[] $persons
     *
     * @return mixed
     */
    public function meet(array $persons)
    {
        $malePerson = array();
        foreach ($persons as $person) {
            if (strcasecmp($person->getGender(), 'MALE') === 0) {
                $malePerson[] = $person;
            }
        }

        return $malePerson;
    }
}
