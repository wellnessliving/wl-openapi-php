<?php

namespace WlSdk\Thoth\WlPay\Form;

class PayLogPostRequest
{
    /**
     * Additional data attached to the log item.
     *
     * JSON-encoded array mary arrives as a `string`.
     *
     * @var array|string|null
     */
    public $a_data = null;

    /**
     * Type of log item.
     *
     * @var int|null
     * @see \WlSdk\Core\Log\LogTypeSid
     */
    public ?int $id_log = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Message content.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_data' => $this->a_data,
            'id_log' => $this->id_log,
            'k_business' => $this->k_business,
            'text_message' => $this->text_message,
            ],
            static fn ($v) => $v !== null
        );
    }
}
