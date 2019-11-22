<?php

namespace AnthraxisBR\FastWorkValidator\Validator;


class Validator
{

    private $rule;

    public function make(Rule $rule)
    {

    }

    /**
     * @return mixed
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * @param mixed $rule
     */
    public function setRule($rule): void
    {
        $this->rule = $rule;
    }


}