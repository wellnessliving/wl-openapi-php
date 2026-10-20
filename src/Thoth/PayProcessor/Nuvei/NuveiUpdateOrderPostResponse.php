<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

/**
 * Response from POST
 */
class NuveiUpdateOrderPostResponse
{
    /**
     * Error message.
     *
     * `null` in case response has not received yet or request is not failed.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function __construct(array $data)
    {
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
