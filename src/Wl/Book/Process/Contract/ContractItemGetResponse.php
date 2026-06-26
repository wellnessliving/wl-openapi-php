<?php

namespace WlSdk\Wl\Book\Process\Contract;

/**
 * Response from GET
 */
class ContractItemGetResponse
{
    /**
     * HTML-ready text of the contract.
     *
     * @var string|null
     */
    public ?string $html_contract = null;

    /**
     * Type of purchase item, one of {@link \WlSdk\RsPurchaseItemSid}.
     *
     * @var int|null
     * @see \WlSdk\RsPurchaseItemSid
     */
    public ?int $id_purchase_item = null;

    /**
     * Whether client agrees to the contract.
     *
     * @var bool|null
     */
    public ?bool $is_agree = null;

    /**
     * Id of purchase item within its type (represented by `id_purchase_item`).
     *
     * @var string|null
     */
    public ?string $k_id = null;

    /**
     * User signature produced by Signature tool.
     *
     * @var string|null
     */
    public ?string $s_signature = null;

    /**
     * Text of the contract signed by the client.
     *
     * @var string|null
     */
    public ?string $text_contract = null;

    /**
     * Purchase item title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->html_contract = isset($data['html_contract']) ? (string)$data['html_contract'] : null;
        $this->id_purchase_item = isset($data['id_purchase_item']) ? (int)$data['id_purchase_item'] : null;
        $this->is_agree = isset($data['is_agree']) ? (bool)$data['is_agree'] : null;
        $this->k_id = isset($data['k_id']) ? (string)$data['k_id'] : null;
        $this->s_signature = isset($data['s_signature']) ? (string)$data['s_signature'] : null;
        $this->text_contract = isset($data['text_contract']) ? (string)$data['text_contract'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
