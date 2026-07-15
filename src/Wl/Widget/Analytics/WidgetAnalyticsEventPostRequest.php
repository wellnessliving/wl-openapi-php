<?php

namespace WlSdk\Wl\Widget\Analytics;

class WidgetAnalyticsEventPostRequest
{
    /**
     * Event-specific payload.
     *
     * Structure:
     * - `a_item`: Selected checkout items.
     * - `id_checkout_type`: Checkout type.
     * - `k_location`: Location key.
     * - `k_skin`: Widget skin key, or `null`.
     * - `m_total`: Checkout total.
     * - `s_funnel_step`: Last funnel step reached.
     * - `s_session_id`: Widget checkout session identifier.
     * - `s_utm_campaign`: UTM campaign value.
     * - `s_utm_medium`: UTM medium value.
     * - `s_utm_source`: UTM source value.
     * - `uid`: User key.
     * - `url_continue`: Continuation URL.
     *
     * @var array|null
     */
    public $a_payload = null;

    /**
     * Event schema version.
     *
     * @var int|null
     */
    public ?int $i_event_version = 1;

    /**
     * Business key used for shard and datacenter routing.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Client-generated idempotency identifier.
     * A retry of the same logical event must use the same value.
     *
     * @var string|null
     */
    public ?string $s_event_id = null;

    /**
     * Event name. Initially only `abandoned_checkout` is supported.
     *
     * @var string|null
     */
    public ?string $s_event_name = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_payload' => $this->a_payload,
            'i_event_version' => $this->i_event_version,
            'k_business' => $this->k_business,
            's_event_id' => $this->s_event_id,
            's_event_name' => $this->s_event_name,
            ],
            static fn ($v) => $v !== null
        );
    }
}
