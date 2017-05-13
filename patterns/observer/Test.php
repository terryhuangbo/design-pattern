<?php

namespace Patterns\Observer;

$subject = new Subject('My first Subject Object!');

$observer1 = new Observer1($subject);
$observer2 = new Observer2($subject);

$subject->change('I have changed!');
