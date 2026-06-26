<?php

namespace WlSdk\Thoth\PayProcessor\Nuvei\Terminal\OMNIChannelApi;

/**
 * Response from POST
 */
class NuveiTerminalTransactionStartPostResponse
{
    /**
     * The response id. One of {@link \WlSdk\Thoth\PayProcessor\Nuvei\Code\CSResponseSid} constants.
     *
     * `null` in case when not initialized yet.
     *
     * @var int|null
     * @see \WlSdk\Thoth\PayProcessor\Nuvei\Code\CSResponseSid
     */
    public ?int $id_response = null;

    /**
     * Key of payment transaction that was created.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_pay_transaction = null;

    /**
     * The request exchange identification.
     *
     * `null` in case when not initialized yet.
     *
     * @var string|null
     */
    public ?string $s_exchange_identification = null;

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
        $this->id_response = isset($data['id_response']) ? (int)$data['id_response'] : null;
        $this->k_pay_transaction = isset($data['k_pay_transaction']) ? (string)$data['k_pay_transaction'] : null;
        $this->s_exchange_identification = isset($data['s_exchange_identification']) ? (string)$data['s_exchange_identification'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
    }
}
