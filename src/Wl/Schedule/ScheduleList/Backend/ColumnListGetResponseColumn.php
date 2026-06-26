<?php

namespace WlSdk\Wl\Schedule\ScheduleList\Backend;

class ColumnListGetResponseColumn
{
    /**
     * Whether column is fixed. Should not be hidden.
     *
     * @var bool|null
     */
    public ?bool $is_fix = null;

    /**
     * Whether column is hidden.
     *
     * @var bool|null
     */
    public ?bool $is_hide = null;

    /**
     * Column name.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * Column title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    public function __construct(array $data)
    {
        $this->is_fix = isset($data['is_fix']) ? (bool)$data['is_fix'] : null;
        $this->is_hide = isset($data['is_hide']) ? (bool)$data['is_hide'] : null;
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
    }
}
