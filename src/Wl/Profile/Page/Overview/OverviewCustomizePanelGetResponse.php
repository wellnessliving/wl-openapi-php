<?php

namespace WlSdk\Wl\Profile\Page\Overview;

/**
 * Response from GET
 */
class OverviewCustomizePanelGetResponse
{
    /**
     * List of summary cards. Each element has next structure:
     *
     * @var OverviewCustomizePanelGetResponseSummaryCard[]|null
     */
    public ?array $a_summary_card = null;

    /**
     * List of widgets. Each element has next structure:
     *
     * @var OverviewCustomizePanelGetResponseWidget[]|null
     */
    public ?array $a_widget = null;

    public function __construct(array $data)
    {
        $this->a_summary_card = isset($data['a_summary_card']) ? array_map(static fn ($item) => new OverviewCustomizePanelGetResponseSummaryCard((array)$item), (array)$data['a_summary_card']) : null;
        $this->a_widget = isset($data['a_widget']) ? array_map(static fn ($item) => new OverviewCustomizePanelGetResponseWidget((array)$item), (array)$data['a_widget']) : null;
    }
}
