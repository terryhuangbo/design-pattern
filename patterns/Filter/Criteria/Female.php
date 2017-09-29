<?php

namespace Patterns\Filter\Criteria;

/**
 * Class Female.
 */
class Female implements Criteria
{
    /**
     * @param Person[] $persons
     *
     * @return mixed
     */
    public function meet(array $persons)
    {
        $femalePerson = array();
        foreach ($persons as $person) {
            if (strcasecmp($person->getGender(), 'FEMALE') === 0) {
                $femalePerson[] = $person;
            }
        }

        return $femalePerson;
    }
}
