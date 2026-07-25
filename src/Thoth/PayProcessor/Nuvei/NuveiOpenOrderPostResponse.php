<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei;

/**
 * Response from POST
 */
class NuveiOpenOrderPostResponse
{
    /**
     * Key of payment transaction that was created.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * The order ID provided by Nuvei.
     *
     * `null` in case of errors.
     *
     * @var string|null
     */
    public ?string $s_nuvei_order = null;

    /**
     * The session identifier to be used by the request that processes the newly opened order.
     *
     * `null` in case of errors.
     *
     * @var string|null
     */
    public ?string $s_nuvei_session = null;

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
        $this->k_pay_transaction = isset($data['k_pay_transaction']) ? (string)$data['k_pay_transaction'] : null;
        $this->s_nuvei_order = isset($data['s_nuvei_order']) ? (string)$data['s_nuvei_order'] : null;
        $this->s_nuvei_session = isset($data['s_nuvei_session']) ? (string)$data['s_nuvei_session'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
