<?php

namespace WlSdk\Wl\Member\Progress\Log\Edit;

/**
 * Response from GET
 */
class LogGetResponse
{
    /**
     * Field log data.
     *
     * @var LogGetResponseFieldList[]|null
     */
    public ?array $a_field_list = null;

    /**
     * Last local date when the user entered progress values. `null` if the user had not entered progress data
     * before the [LogApi::$dt_date](/Wl/Member/Progress/Log/Edit/Log.json) date.
     *
     * @var string|null
     */
    public ?string $dt_last = null;

    /**
     * How we want to see this page. As a staff or as a user.
     *
     * @var bool|null
     */
    public ?bool $is_staff = null;

    public function __construct(array $data)
    {
        $this->a_field_list = isset($data['a_field_list']) ? array_map(static fn ($item) => new LogGetResponseFieldList((array)$item), (array)$data['a_field_list']) : null;
        $this->dt_last = isset($data['dt_last']) ? (string)$data['dt_last'] : null;
        $this->is_staff = isset($data['is_staff']) ? (bool)$data['is_staff'] : null;
    }
}
