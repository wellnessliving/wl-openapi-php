<?php

namespace WlSdk\Wl\Catalog\StaffApp\CatalogCommission;

/**
 * Response from GET
 */
class CatalogCommissionGetResponse
{
    /**
     * Default staff commission for current client. Includes:
     *
     * @var CatalogCommissionGetResponseCommissionDefault[]|null
     */
    public ?array $a_commission_default = null;

    /**
     * List of staff with commission. Includes:
     *
     * @var CatalogCommissionGetResponseStaff[]|null
     */
    public ?array $a_staff = null;

    public function __construct(array $data)
    {
        $this->a_commission_default = isset($data['a_commission_default']) ? array_map(static fn ($item) => new CatalogCommissionGetResponseCommissionDefault((array)$item), (array)$data['a_commission_default']) : null;
        $this->a_staff = isset($data['a_staff']) ? array_map(static fn ($item) => new CatalogCommissionGetResponseStaff((array)$item), (array)$data['a_staff']) : null;
    }
}
