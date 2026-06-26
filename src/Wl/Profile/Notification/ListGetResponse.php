<?php

namespace WlSdk\Wl\Profile\Notification;

/**
 * Response from GET
 */
class ListGetResponse
{
    /**
     * A list of notification items. Each value is a primary key in Sql.
     *
     * @var string[]|null
     */
    public ?array $a_notification = null;

    public function __construct(array $data)
    {
        $this->a_notification = isset($data['a_notification']) ? (array)$data['a_notification'] : null;
    }
}
