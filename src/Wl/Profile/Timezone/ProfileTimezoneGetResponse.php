<?php

namespace WlSdk\Wl\Profile\Timezone;

/**
 * Response from GET
 */
class ProfileTimezoneGetResponse
{
    /**
     * List of timezones. Keys - timezone keys; primary keys in AGeoTimezoneSql table.
     * Values - sub array with next keys:
     *
     * @var ProfileTimezoneGetResponseTimezone[]|null
     */
    public ?array $a_timezone = null;

    /**
     * Whether clients are allowed to adjust timezone.
     *
     * `true` if allowed, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_profile_timezone = null;

    /**
     * Key of the timezone which is currently selected.
     *
     * Primary key in AGeoTimezoneSql.
     *
     * @var string|null
     */
    public ?string $k_timezone_select = null;

    public function __construct(array $data)
    {
        $this->a_timezone = isset($data['a_timezone']) ? array_map(static fn ($item) => new ProfileTimezoneGetResponseTimezone((array)$item), (array)$data['a_timezone']) : null;
        $this->is_profile_timezone = isset($data['is_profile_timezone']) ? (bool)$data['is_profile_timezone'] : null;
        $this->k_timezone_select = isset($data['k_timezone_select']) ? (string)$data['k_timezone_select'] : null;
    }
}
