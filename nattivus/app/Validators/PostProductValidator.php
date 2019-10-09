<?php

namespace AgenciaS3\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class PostProductValidator.
 *
 * @package namespace AgenciaS3\Validators;
 */
class PostProductValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'post_id' => 'required|exists:posts,id',
            'product_id' => 'required|exists:products,id'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'post_id' => 'required|exists:posts,id',
            'product_id' => 'required|exists:products,id'
        ],
    ];
}
