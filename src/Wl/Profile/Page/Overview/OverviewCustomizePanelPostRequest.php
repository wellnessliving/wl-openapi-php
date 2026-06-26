<?php

namespace WlSdk\Wl\Profile\Page\Overview;

class OverviewCustomizePanelPostRequest
{
    /**
     * Key of the business. Primary key RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * List of summary cards. Each element has next structure:
     *
     * @var array[]|null
     */
    public ?array $a_summary_card = null;

    /**
     * List of widgets. Each element has next structure:
     *
     * @var array[]|null
     */
    public ?array $a_widget = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'a_summary_card' => $this->a_summary_card,
            'a_widget' => $this->a_widget,
            ],
            static fn ($v) => $v !== null
        );
    }
}
