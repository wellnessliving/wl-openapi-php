<?php

namespace WlSdk\Wl\Promotion\Editor;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * The Purchase Options of the requested page, in the requested order.
     * The fields marked "with a column" are in a row only when the column is asked in {@link
     * \WlSdk\Wl\Promotion\Editor\ListEndpoint}.
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
        $this->a_promotion = isset($data['a_promotion']) ? array_map(static fn ($item) => new ListGetResponsePromotion((array)$item), (array)$data['a_promotion']) : null;
        $this->i_total = isset($data['i_total']) ? (int)$data['i_total'] : null;
    }
}
