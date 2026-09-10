<?php

namespace WlSdk\Wl\Alert;

class AlertListGetResponseAlertList
{
    /**
     * CID of alert, a subclass of {@link \WlSdk\Wl\Alert\AlertAbstract}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Alert\AlertAbstract
     */
    public ?int $cid_alert = null;

    /**
     * Date and time in MySQL format, when an alert has been added.
     *
     * @var string|null
     */
    public ?string $dtl_create = null;

    /**
     * Quantity of seconds passed from an alert sending.
     *
     * @var int|null
     */
    public ?int $i_difference = null;

    /**
     * Determines whether the alert was read by the user.
     *
     * @var bool|null
     */
    public ?bool $is_read = null;

    /**
     * Alert key. Primary key in  table.
     *
     * @var string|null
     */
    public ?string $k_alert = null;

    /**
     * Business key. Primary key in  table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Icon class. See {@link \WlSdk\Wl\Alert\AlertAbstract}.
     *
     * @var string|null
     */
    public ?string $s_icon_class = null;

    /**
     * Alert message.
     *
     * @var string|null
     */
    public ?string $text_message = null;

    /**
     * Alert title.
     *
     * @var string|null
     */
    public ?string $text_title = null;

    /**
     * User key associated with this alert. Primary key in .`null` if user is walk-in.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    /**
     * A link to detail page related to the alert. Can be empty if the user had
     *    no access to this page at the time the alert was created.
     *
     * @var string|null
     */
    public ?string $url_detail = null;

    /**
     * Url to user's logo.
     *
     * @var string|null
     */
    public ?string $url_logo = null;

    public function __construct(array $data)
    {
        $this->cid_alert = isset($data['cid_alert']) ? (int)$data['cid_alert'] : null;
        $this->dtl_create = isset($data['dtl_create']) ? (string)$data['dtl_create'] : null;
        $this->i_difference = isset($data['i_difference']) ? (int)$data['i_difference'] : null;
        $this->is_read = isset($data['is_read']) ? (bool)$data['is_read'] : null;
        $this->k_alert = isset($data['k_alert']) ? (string)$data['k_alert'] : null;
        $this->k_business = isset($data['k_business']) ? (string)$data['k_business'] : null;
        $this->s_icon_class = isset($data['s_icon_class']) ? (string)$data['s_icon_class'] : null;
        $this->text_message = isset($data['text_message']) ? (string)$data['text_message'] : null;
        $this->text_title = isset($data['text_title']) ? (string)$data['text_title'] : null;
        $this->uid_client = isset($data['uid_client']) ? (string)$data['uid_client'] : null;
        $this->url_detail = isset($data['url_detail']) ? (string)$data['url_detail'] : null;
        $this->url_logo = isset($data['url_logo']) ? (string)$data['url_logo'] : null;
    }
}
