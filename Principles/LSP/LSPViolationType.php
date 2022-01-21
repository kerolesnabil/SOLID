<?php


namespace SOLID\LSP;


use phpDocumentor\Reflection\Types\This;

class LSPViolationType
{
    /**
     * @var int
     */
    protected $salary;

    /**
     * @param int $salary
     */
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    public function calculateSalary(int $tax)
    {
        var_dump($tax);

        if ($tax>10)
        {
            echo 'Sorry the tax must be more than 10%';
        }

        return $this->getSalary()-($this->getSalary()*$tax/100);
    }

}