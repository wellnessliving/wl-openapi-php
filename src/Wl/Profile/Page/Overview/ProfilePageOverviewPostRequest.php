<?php

namespace WlSdk\Wl\Profile\Page\Overview;

class ProfilePageOverviewPostRequest
{
    /**
     * Client's profile overview summary cards settings. Each element has next structure:
     *
     * @var array[]|null
     */
    public ?array $a_summary_card_list = null;

    /**
     * Client's profile overview widgets settings. Each element has next structure:
     *
     * @var string|null
     */
    public ?string $json_widget_list = null;

    /**
     * Business key. Primary key in RsBusinessSql table.
     *
     * `null` if not initialized yet.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_summary_card_list' => $this->a_summary_card_list,
            'json_widget_list' => $this->json_widget_list,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
