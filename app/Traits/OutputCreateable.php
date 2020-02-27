<?php


namespace App\Traits;

trait OutputCreateable
{
    /**
     * Attributes that will be shown as output.
     *
     * @var array
     */
    protected $fields = [];

    /**
     * Get the model's information output.
     *
     * @return array
     */
    public function output()
    {
        return $this->only($this->fields);
    }
}
