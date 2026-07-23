<?php

namespace WlSdk\Wl\Widget\Analytics;

class WidgetAnalyticsEventPostRequest
{
    /**
     * Event-specific payload.
     *
     * @var array|null
     */
    public ?array $a_payload = null;

    /**
     * Event schema version. Currently only {@link \WlSdk\Wl\Widget\Analytics\WidgetAnalyticsEventVersionSid} is
     * supported.
     *
     * @var int|null
     * @see \WlSdk\Wl\Widget\Analytics\WidgetAnalyticsEventVersionSid
     */
    public ?int $i_event_version = 1;

    /**
     * Event name. Initially only {@link \WlSdk\Wl\Widget\Analytics\WidgetAnalyticsEventSid} is supported.
     *
     * @var int|null
     * @see \WlSdk\Wl\Widget\Analytics\WidgetAnalyticsEventSid
     */
    public ?int $id_event_name = null;

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

    public function params(): array
    {
        return array_filter(
            [
            'a_payload' => $this->a_payload,
            'i_event_version' => $this->i_event_version,
            'id_event_name' => $this->id_event_name,
            'k_business' => $this->k_business,
            's_event_id' => $this->s_event_id,
            ],
            static fn ($v) => $v !== null
        );
    }
}
