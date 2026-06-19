<?php
namespace WlSdk\Thoth\WlPay\Bank\Card\Add;

/**
 * Response from GET
 */
class AddApiGetResponse
{
    /**
     * The HTML form containing the fields required to add a card.
     *
     * @var string|null
     */
    public ?string $html_widget = null;

    public function __construct(array $data)
    {
        $this->html_widget = isset($data['html_widget']) ? (string)$data['html_widget'] : null;
    }
}
