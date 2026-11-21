<?php

namespace WlSdk\Wl\Alert;

/**
 * Response from GET
 */
class AlertListGetResponse
{
    /**
     * List of alerts.
     *
     * @var AlertListGetResponseAlertList[]|null
     */
    public ?array $a_alert_list = null;

    /**
     * The tasks that are pinned to the top of the Alert Center: the open tasks that are overdue by 24 hours or
     * more, the
     * oldest due date first, at most 5. Empty unless {@link \WlSdk\Wl\Alert\AlertList} is set, and for a user who
     * gets no
     * "Task due" alert.
     *
     * @var AlertListGetResponsePinned[]|null
     */
    public ?array $a_pinned = null;

    /**
     * Whether more tasks are pinned than {@link \WlSdk\Wl\Alert\AlertListGetResponse::$a_pinned} has. `true` when
     * there are more, so the client
     * shows the link {@link \WlSdk\Wl\Alert\AlertListGetResponse::$url_pinned_more}, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_pinned_more = null;

    /**
     * The address of the page with every overdue task, the tab Overdue of the Task Manager. Empty when
     * {@link \WlSdk\Wl\Alert\AlertListGetResponse::$is_pinned_more} is `false`.
     *
     * @var string|null
     */
    public ?string $url_pinned_more = null;

    public function __construct(array $data)
    {
        $this->a_alert_list = isset($data['a_alert_list']) ? array_map(static fn ($item) => new AlertListGetResponseAlertList((array)$item), (array)$data['a_alert_list']) : null;
        $this->a_pinned = isset($data['a_pinned']) ? array_map(static fn ($item) => new AlertListGetResponsePinned((array)$item), (array)$data['a_pinned']) : null;
        $this->is_pinned_more = isset($data['is_pinned_more']) ? (bool)$data['is_pinned_more'] : null;
        $this->url_pinned_more = isset($data['url_pinned_more']) ? (string)$data['url_pinned_more'] : null;
    }
}
