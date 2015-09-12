<?php

namespace Validation\Schema;

use Validation\Assertions;

class DateSchema extends AbstractSchema
{
    public function __construct()
    {
        $this->assert(new Assertions\IsDate());
    }

    public function dateTimeObject($convert = true)
    {
        $this->assert(new Assertions\DateTimeObject(['convert' => $convert]));

        return $this;
    }
}
