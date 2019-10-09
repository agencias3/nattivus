<?php

namespace AgenciaS3\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class ProductRelatedValidator.
 *
 * @package namespace AgenciaS3\Validators;
 */
class ProductRelatedValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'product_id' => 'required|exists:products,id',
            'product_related_id' => 'required|exists:products,id',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'product_id' => 'required|exists:products,id',
            'product_related_id' => 'required|exists:products,id',
        ],
    ];
}
