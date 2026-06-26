<?php

namespace WlSdk\Core\Spa\Model;

class ModelPoolPostRequest
{
    /**
     * A set of model objects that need to be synchronized.
     *
     * Key - concatenate string(model class name, model registry key)
     * Value - model data.
     *
     * @var array|null
     */
    public ?array $a_request = null;

    /**
     * The method (get, post, put, delete) that will be called on all given models.
     *
     * Currently only the "get" method is supported
     *
     * @var string|null
     */
    public ?string $s_method = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_request' => $this->a_request,
            's_method' => $this->s_method,
            ],
            static fn ($v) => $v !== null
        );
    }
}
