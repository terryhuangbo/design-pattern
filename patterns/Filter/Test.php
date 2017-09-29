<?php

namespace Patterns\Filter;

use Patterns\Filter\Criteria\AndCriteria;
use Patterns\Filter\Criteria\Female;
use Patterns\Filter\Criteria\Male;
use Patterns\Filter\Criteria\Married;
use Patterns\Filter\Criteria\OrCriteria;
use Patterns\Filter\Criteria\Single;
use Patterns\TestInterface;

class Test implements TestInterface
{
    public function run($argument)
    {
        $persons = array();
        $persons[] = new Person('Robert', 'Male', 'Single');
        $persons[] = new Person('John', 'Male', 'Married');
        $persons[] = new Person('Laura', 'Female', 'Married');
        $persons[] = new Person('Diana', 'Female', 'Single');
        $persons[] = new Person('Mike', 'Male', 'Single');
        $persons[] = new Person('Bobby', 'Male', 'Single');

        $male = new Male();
        $female = new Female();
        $single = new Single();
        $married = new Married();

        $singleMale = new AndCriteria($male, $single);
        $singleOrFemale = new OrCriteria($female, $single);
        $marriedAndMale = new AndCriteria($male, $married);

        print_r('Males: <br>');
        $this->printPersons($male->meet($persons));

        print_r('<br>Females: <br>');
        $this->printPersons($female->meet($persons));

        print_r('<br>Single Males: <br>');
        $this->printPersons($singleMale->meet($persons));

        print_r('<br>Single Or Females: <br>');
        $this->printPersons($singleOrFemale->meet($persons));

        print_r('<br>Male and Married: <br>');
        $this->printPersons($marriedAndMale->meet($persons));
    }

    protected function printPersons(array $persons)
    {
        $str = '';
        foreach ($persons as $person) {
            $str .= 'Person: [Name: '.$person->getName();
            $str .= ', Gender: '.$person->getGender();
            $str .= ', Marital Status: '.$person->getMaritalStatus();
            $str .= ']<br>';
        }

        print_r($str);
    }
}
