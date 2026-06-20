<?php

namespace WlSdk\Wl\Profile\Edit;

class EditGetResponseErrorList
{
    /**
     * Error code identifying the type of validation failure.
     *
     * @var string|null
     */
    public ?string $code = null;

    /**
     * Field identifier that caused the error.
     *
     * @var string|null
     */
    public ?string $field = null;

    /**
     * Human-readable error message.
     *
     * @var string|null
     */
    public ?string $message = null;

    public function __construct(array $data)
    {
        $this->code = isset($data['code']) ? (string)$data['code'] : null;
        $this->field = isset($data['field']) ? (string)$data['field'] : null;
        $this->message = isset($data['message']) ? (string)$data['message'] : null;
    }
}
