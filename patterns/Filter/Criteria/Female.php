<?php

namespace Patterns\Filter\Criteria;

/**
 * Class Female.
 */
class Female implements Criteria
{
    /**
     * @param \Patterns\Filter\Person[] $persons
     *
     * @return \Patterns\Filter\Person[] $persons
     */
    public function meet(array $persons)
    {
        $femalePerson = array();
        foreach ($persons as $person) {
            if (0 === strcasecmp($person->getGender(), 'FEMALE')) {
                $femalePerson[] = $person;
            }
        }

        return $femalePerson;
    }
}
