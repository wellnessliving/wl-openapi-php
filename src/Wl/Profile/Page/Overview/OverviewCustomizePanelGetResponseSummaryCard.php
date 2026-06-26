<?php

namespace WlSdk\Wl\Profile\Page\Overview;

class OverviewCustomizePanelGetResponseSummaryCard
{
    /**
     * Order of a summary cards on client's overview page.
     *
     * @var int|null
     */
    public ?int $i_order = null;

    /**
     * ID of a profile summary card. One of {@link \WlSdk\Wl\Profile\Page\Overview\SummaryCard\SummaryCardSid}
     * constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Profile\Page\Overview\SummaryCard\SummaryCardSid
     */
    public ?int $id_card = null;

    /**
     * Whether profile summary card is hidden. `true` - hidden, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_hide = null;

    public function __construct(array $data)
    {
        $this->i_order = isset($data['i_order']) ? (int)$data['i_order'] : null;
        $this->id_card = isset($data['id_card']) ? (int)$data['id_card'] : null;
        $this->is_hide = isset($data['is_hide']) ? (bool)$data['is_hide'] : null;
    }
}
