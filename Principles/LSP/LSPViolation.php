<?php


namespace SOLID\LSP;


class LSPViolation
{
    public function calculateSalerOfEmployee(LSPViolationType $type,$tax)
    {

        return $type->calculateSalary($tax);

    }
}