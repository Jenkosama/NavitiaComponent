<?php

namespace Navitia\Component\Exception\NotFound;

use Navitia\Component\Exception\NavitiaNotFoundException;
use Navitia\Component\Exception\ExceptionInterface;

class DateOutOfBoundsException extends NavitiaNotFoundException implements ExceptionInterface
{
}
