<?php

namespace WlSdk\Wl\Report\Dashboard\Manage;

/**
 * Response from GET
 */
class DashboardManageGetResponse
{
    /**
     * Selected staff roles of the dashboard.
     *
     * `null` if list of staff roles doesn't need to be updated.
     *
     * @var DashboardManageGetResponseStaffRole[]|null
     */
    public ?array $a_staff_role = null;

    /**
     * List of widgets that are displayed on the dashboard.
     *
     * `null` if list of widgets doesn't need to be updated.
     *
     * Structure of each item:
     *
     * @var DashboardManageGetResponseWidgetList[]|null
     */
    public ?array $a_widget_list = null;

    /**
     * Whether user can change share mode.
     *
     * @var bool|null
     */
    public ?bool $can_share = null;

    /**
     * Dashboard sharing mode. One of {@link \WlSdk\Wl\Share\ShareSid}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Share\ShareSid
     */
    public ?int $id_share = null;

    /**
     * Name of dashboard owner.
     *
     * @var string|null
     */
    public ?string $text_owner_name = null;

    /**
     * Dashboard title.
     *
     * `null` for read requests.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * The URL where the user photo can be retrieved.
     *
     * @var string|null
     */
    public ?string $url_owner_photo = null;

    public function __construct(array $data)
    {
        $this->a_staff_role = isset($data['a_staff_role']) ? array_map(static fn ($item) => new DashboardManageGetResponseStaffRole((array)$item), (array)$data['a_staff_role']) : null;
        $this->a_widget_list = isset($data['a_widget_list']) ? array_map(static fn ($item) => new DashboardManageGetResponseWidgetList((array)$item), (array)$data['a_widget_list']) : null;
        $this->can_share = isset($data['can_share']) ? (bool)$data['can_share'] : null;
        $this->id_share = isset($data['id_share']) ? (int)$data['id_share'] : null;
        $this->text_owner_name = isset($data['text_owner_name']) ? (string)$data['text_owner_name'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->url_owner_photo = isset($data['url_owner_photo']) ? (string)$data['url_owner_photo'] : null;
    }
}
