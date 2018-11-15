<?php

namespace Patterns\Filter\Criteria;

/**
 * Class AndCriteria.
 */
class AndCriteria implements Criteria
{
    protected $criteria;
    protected $otherCriteria;

    /**
     * AndCriteria constructor.
     *
     * @param Criteria $criteria
     * @param Criteria $otherCriteria
     */
    public function __construct(Criteria $criteria, Criteria $otherCriteria)
    {
        $this->criteria = $criteria;
        $this->otherCriteria = $otherCriteria;
    }

    /**
     * @param \Patterns\Filter\Person[] $persons
     *
     * @return \Patterns\Filter\Person[] $persons
     */
    public function meet(array $persons)
    {
        $firstCriteriaPersons = $this->criteria->meet($persons);
        $secondCriteriaPersons = $this->otherCriteria->meet($firstCriteriaPersons);

        return $secondCriteriaPersons;
    }
}
