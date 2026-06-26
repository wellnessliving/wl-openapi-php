<?php

namespace WlSdk\Wl\Promotion\Pay;

/**
 * Response from PUT
 */
class PromotionPayPauseListPutResponse
{
    /**
     * List of the login promotions which can not be put on hold in the selected period.
     *
     * @var array|null
     */
    public ?array $a_login_promotion_exclude = null;

    /**
     * List of the clients to which list of login promotion belong and have promotion payment pause on the selected
     * period.
     *
     * @var array|null
     */
    public ?array $a_user = null;

    /**
     * Number of all clients to which list of login promotion belong and have a promotion payment pause on the
     * selected period.
     *
     * @var int|null
     */
    public ?int $i_user = null;

    /**
     * Number of all clients to which list of login promotion belong and are impacted.
     *
     * @var int|null
     */
    public ?int $i_user_impact = null;

    /**
     * Whether or not to send email notification.
     *
     * `false` if not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_mail = null;

    /**
     * Whether or not to send push notification.
     *
     * `false` if not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_push = null;

    /**
     * Whether or not to send SMS notification.
     *
     * `false` if not initialized.
     *
     * @var bool|null
     */
    public ?bool $is_sms = null;

    /**
     * Key of the email pattern.
     *
     * @var array|null
     */
    public ?array $k_mail_pattern = null;

    public function __construct(array $data)
    {
        $this->a_login_promotion_exclude = isset($data['a_login_promotion_exclude']) ? (array)$data['a_login_promotion_exclude'] : null;
        $this->a_user = isset($data['a_user']) ? (array)$data['a_user'] : null;
        $this->i_user = isset($data['i_user']) ? (int)$data['i_user'] : null;
        $this->i_user_impact = isset($data['i_user_impact']) ? (int)$data['i_user_impact'] : null;
        $this->is_mail = isset($data['is_mail']) ? (bool)$data['is_mail'] : null;
        $this->is_push = isset($data['is_push']) ? (bool)$data['is_push'] : null;
        $this->is_sms = isset($data['is_sms']) ? (bool)$data['is_sms'] : null;
        $this->k_mail_pattern = isset($data['k_mail_pattern']) ? (array)$data['k_mail_pattern'] : null;
    }
}
