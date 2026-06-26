<?php

namespace WlSdk\Wl\Schedule\ScheduleList\StaffApp\Filter\Edit;

class ScheduleListFilterEditPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * ID of saved filter. Primary key in RsScheduleConfigSql table.
     * `0` to create new filter.
     *
     * @var string|null
     */
    public ?string $k_schedule_config = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * Filter configuration:
     *
     * @var array|null
     */
    public ?array $a_config = null;

    /**
     * `true` - filter must be default; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_default = null;

    /**
     * `true` - filter must be public; `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_public = null;

    /**
     * JSON version of `a_config`.
     *
     * @var string|null
     */
    public ?string $json_config = null;

    /**
     * Filter title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'k_schedule_config' => $this->k_schedule_config,
            'uid' => $this->uid,
            'a_config' => $this->a_config,
            'is_default' => $this->is_default,
            'is_public' => $this->is_public,
            'json_config' => $this->json_config,
            'text_title' => $this->text_title,
            ],
            static fn ($v) => $v !== null
        );
    }
}
