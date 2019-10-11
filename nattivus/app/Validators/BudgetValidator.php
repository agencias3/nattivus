<?php

namespace AgenciaS3\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class BudgetValidator.
 *
 * @package namespace AgenciaS3\Validators;
 */
class BudgetValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|max:191',
            'email' => 'required|email|max:191',
            'phone' => 'required|max:191',
            'view' => 'required'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required|max:191',
            'email' => 'required|email|max:191',
            'phone' => 'required|max:191',
            'view' => 'required'
        ],
    ];
}
