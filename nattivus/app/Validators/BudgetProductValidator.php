<?php

namespace AgenciaS3\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class BudgetProductValidator.
 *
 * @package namespace AgenciaS3\Validators;
 */
class BudgetProductValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'budget_id' => 'required|exists:budgets,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'budget_id' => 'required|exists:budgets,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required'
        ],
    ];
}
