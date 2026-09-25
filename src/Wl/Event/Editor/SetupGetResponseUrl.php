<?php

namespace WlSdk\Wl\Event\Editor;

class SetupGetResponseUrl
{
    /**
     * List of store categories.
     *
     * @var string|null
     */
    public ?string $url_category_manage = null;

    /**
     * Client notifications.
     *
     * @var string|null
     */
    public ?string $url_notification_client = null;

    /**
     * Client confirmation notification of an event.
     *
     * @var string|null
     */
    public ?string $url_notification_confirmation = null;

    /**
     * Client reminder notification of an event.
     *
     * @var string|null
     */
    public ?string $url_notification_reminder = null;

    /**
     * Staff notifications.
     *
     * @var string|null
     */
    public ?string $url_notification_staff = null;

    /**
     * Default business policies.
     *
     * @var string|null
     */
    public ?string $url_policy_manage = null;

    /**
     * List of products.
     *
     * @var string|null
     */
    public ?string $url_product_manage = null;

    /**
     * List of Book-a-Spot assets.
     *
     * @var string|null
     */
    public ?string $url_resource_manage = null;

    /**
     * Store settings that require a card at sign-up.
     *
     * @var string|null
     */
    public ?string $url_ticket_card = null;

    /**
     * Online waiver settings.
     *
     * @var string|null
     */
    public ?string $url_ticket_waiver = null;

    public function __construct(array $data)
    {
        $this->url_category_manage = isset($data['url_category_manage']) ? (string)$data['url_category_manage'] : null;
        $this->url_notification_client = isset($data['url_notification_client']) ? (string)$data['url_notification_client'] : null;
        $this->url_notification_confirmation = isset($data['url_notification_confirmation']) ? (string)$data['url_notification_confirmation'] : null;
        $this->url_notification_reminder = isset($data['url_notification_reminder']) ? (string)$data['url_notification_reminder'] : null;
        $this->url_notification_staff = isset($data['url_notification_staff']) ? (string)$data['url_notification_staff'] : null;
        $this->url_policy_manage = isset($data['url_policy_manage']) ? (string)$data['url_policy_manage'] : null;
        $this->url_product_manage = isset($data['url_product_manage']) ? (string)$data['url_product_manage'] : null;
        $this->url_resource_manage = isset($data['url_resource_manage']) ? (string)$data['url_resource_manage'] : null;
        $this->url_ticket_card = isset($data['url_ticket_card']) ? (string)$data['url_ticket_card'] : null;
        $this->url_ticket_waiver = isset($data['url_ticket_waiver']) ? (string)$data['url_ticket_waiver'] : null;
    }
}
