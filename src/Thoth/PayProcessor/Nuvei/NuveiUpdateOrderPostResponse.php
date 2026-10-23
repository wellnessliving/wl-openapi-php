<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

/**
 * Response from POST
 */
class NuveiUpdateOrderPostResponse
{
    /**
     * Payment amount.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $m_amount = null;

    /**
     * Surcharge amount.
     *
     * `null` in case when not initialized yet, empty string or null for zero surcharge amount. See
     * AbstractTransactionStartupApi::$m_amount about a subclass correcting this value (SAL-1314).
     *
     * @var string|null
     */
    public ?string $m_surcharge = null;

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
        $this->m_amount = isset($data['m_amount']) ? (string)$data['m_amount'] : null;
        $this->m_surcharge = isset($data['m_surcharge']) ? (string)$data['m_surcharge'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
