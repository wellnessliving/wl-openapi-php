<?php

namespace WlSdk\Wl\Pay\Bank\Ach\Add;

/**
 * Response from GET
 */
class AddGetResponse
{
    /**
     * The HTML form containing the fields required to add a card.
     *
     * @var string|null
     */
    public ?string $html_widget = null;

    /**
     * Transaction processor ID.
     *
     * @var int|null
     * @see \WlSdk\Thoth\PayProcessor\PayProcessorSid
     */
    public ?int $id_pay_processor = null;

    public function __construct(array $data)
    {
        $this->html_widget = isset($data['html_widget']) ? (string)$data['html_widget'] : null;
        $this->id_pay_processor = isset($data['id_pay_processor']) ? (int)$data['id_pay_processor'] : null;
    }
}
