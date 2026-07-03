<?php

namespace WlSdk\Thoth\WlPay\Bank\Card;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * A list of bank cards.
     * The array keys are the card `k_pay_bank` IDs.
     * Each element has the following keys:
     *
     * @var ListGetResponseBankCard|null
     */
    public ?ListGetResponseBankCard $a_bank_card = null;

    /**
     * List of bank cards.
     * Duplicate of [ListApi::$a_bank_card](/Thoth/WlPay/Bank/Card/List.json) as a flat indexed array.
     *
     * @var ListGetResponseList[]|null
     */
    public ?array $a_list = null;

    /**
     * Whether new card can be added.
     *
     * `true` if new cards can be added.
     * `false` if new cards can not be added.
     *
     * @var bool|null
     */
    public ?bool $can_add = null;

    public function __construct(array $data)
    {
        $this->a_bank_card = isset($data['a_bank_card']) ? new ListGetResponseBankCard((array)$data['a_bank_card']) : null;
        $this->a_list = isset($data['a_list']) ? array_map(static fn ($item) => new ListGetResponseList((array)$item), (array)$data['a_list']) : null;
        $this->can_add = isset($data['can_add']) ? (bool)$data['can_add'] : null;
    }
}
