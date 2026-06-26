<?php

namespace WlSdk\Wl\Business\Account;

/**
 * Response from POST
 */
class BusinessAccountConfigPostResponse
{
    /**
     * Reason why subscription changes are rejected. Uses to show to a user who operates with subscription
     * settings.
     * When it is set it means that subscription changes are rejected and was not saved.
     *
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $text_reject = null;

    public function __construct(array $data)
    {
        $this->text_reject = isset($data['text_reject']) ? (string)$data['text_reject'] : null;
    }
}
