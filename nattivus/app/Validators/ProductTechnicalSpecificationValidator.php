<?php

namespace AgenciaS3\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class ProductTechnicalSpecificationValidator.
 *
 * @package namespace AgenciaS3\Validators;
 */
class ProductTechnicalSpecificationValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'product_id' => 'required|exists:products,id',
            'technical_id' => 'required|exists:technical_specifications,id'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'product_id' => 'required|exists:products,id',
            'technical_id' => 'required|exists:technical_specifications,id'
        ],
    ];
}
