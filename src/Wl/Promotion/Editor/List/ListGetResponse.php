<?php

namespace WlSdk\Wl\Promotion\Editor\List;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * The locations of the business that the list can be filtered by, in alphabetical order.
     *
     * It does not depend on the filters of the request, so a page that shows no Purchase Option still has the
     * options of
     * its filters. The locations that were removed are not in it.
     *
     * @var ListGetResponseFilterLocation[]|null
     */
    public ?array $a_filter_location = null;

    /**
     * The service categories that the list can be filtered by: the categories that are enabled for the business.
     *
     * @var ListGetResponseFilterProgramCategory[]|null
     */
    public ?array $a_filter_program_category = null;

    /**
     * The store categories that the list can be filtered by, in the order of the store. The system category of the
     * Purchase Options that are in no store category is not in it, see {@link
     * \WlSdk\Wl\Promotion\Editor\List\ListEndpoint}.
     *
     * @var ListGetResponseFilterShopCategory[]|null
     */
    public ?array $a_filter_shop_category = null;

    /**
     * The Purchase Options of the requested page, in the requested order.
     * The fields marked "with a column" are in a row only when the column is asked in {@link
     * \WlSdk\Wl\Promotion\Editor\List\ListEndpoint}.
     *
     * @var ListGetResponsePromotion[]|null
     */
    public ?array $a_promotion = null;

    /**
     * The number of the Purchase Options in the whole list, not only on the requested page.
     *
     * @var int|null
     */
    public ?int $i_total = null;

    public function __construct(array $data)
    {
        $this->a_filter_location = isset($data['a_filter_location']) ? array_map(static fn ($item) => new ListGetResponseFilterLocation((array)$item), (array)$data['a_filter_location']) : null;
        $this->a_filter_program_category = isset($data['a_filter_program_category']) ? array_map(static fn ($item) => new ListGetResponseFilterProgramCategory((array)$item), (array)$data['a_filter_program_category']) : null;
        $this->a_filter_shop_category = isset($data['a_filter_shop_category']) ? array_map(static fn ($item) => new ListGetResponseFilterShopCategory((array)$item), (array)$data['a_filter_shop_category']) : null;
        $this->a_promotion = isset($data['a_promotion']) ? array_map(static fn ($item) => new ListGetResponsePromotion((array)$item), (array)$data['a_promotion']) : null;
        $this->i_total = isset($data['i_total']) ? (int)$data['i_total'] : null;
    }
}
