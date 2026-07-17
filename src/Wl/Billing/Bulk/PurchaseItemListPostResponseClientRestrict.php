<?php

namespace WlSdk\Wl\Billing\Bulk;

class PurchaseItemListPostResponseClientRestrict
{
    /**
     * The clients that fail at least one restriction. Each element has the following structure:
     *
     * @var PurchaseItemListPostResponseClientRestrictClient|null
     */
    public ?PurchaseItemListPostResponseClientRestrictClient $a_client = null;

    /**
     * One warning per restricted item that at least one client fails to satisfy. Each element has the
     * following structure:
     *
     * @var PurchaseItemListPostResponseClientRestrictWarning|null
     */
    public ?PurchaseItemListPostResponseClientRestrictWarning $a_warning = null;

    /**
     * `true` if at least one client fails a member group restriction, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $has_client_group_restrict = null;

    /**
     * `true` if at least one client fails a login type restriction, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $has_client_type_restrict = null;

    public function __construct(array $data)
    {
        $this->a_client = isset($data['a_client']) ? new PurchaseItemListPostResponseClientRestrictClient((array)$data['a_client']) : null;
        $this->a_warning = isset($data['a_warning']) ? new PurchaseItemListPostResponseClientRestrictWarning((array)$data['a_warning']) : null;
        $this->has_client_group_restrict = isset($data['has_client_group_restrict']) ? (bool)$data['has_client_group_restrict'] : null;
        $this->has_client_type_restrict = isset($data['has_client_type_restrict']) ? (bool)$data['has_client_type_restrict'] : null;
    }
}
