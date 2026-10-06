<?php

namespace WlSdk\Wl\Sms;

/**
 * Response from GET
 */
class SmsStatusGetResponse
{
    /**
     * Indicates if business phone number configured.
     *
     * @var bool|null
     */
    public ?bool $has_sms_number = null;

    /**
     * Indicates if the A2P10DLC registration for this business needs to be completed now.
     *
     * @var bool|null
     */
    public ?bool $is_a2p_registration_due = null;

    /**
     * Indicates if a regulatory bundle submission is required for this business.
     * `true` if the business locale requires a regulatory bundle (UK/Australia) and it has not been submitted yet.
     *
     * @var bool|null
     */
    public ?bool $is_regulatory_bundle_required = null;

    /**
     * Indicates if SMS is enabled for this business. Determines if SMS features are available.
     *
     * @var bool|null
     */
    public ?bool $is_sms_enable = null;

    /**
     * Indicates if SMS notifications are enabled for this business.
     *
     * @var bool|null
     */
    public ?bool $is_sms_notification_enable = null;

    /**
     * Returns the message to be displayed when A2P10DLC registration is due for a business and the user attempts
     * to access an SMS feature.
     * `null` if registration is not due.
     *
     * @var string|null
     */
    public ?string $text_a2p_registration_due_message = null;

    public function __construct(array $data)
    {
        $this->has_sms_number = isset($data['has_sms_number']) ? (bool)$data['has_sms_number'] : null;
        $this->is_a2p_registration_due = isset($data['is_a2p_registration_due']) ? (bool)$data['is_a2p_registration_due'] : null;
        $this->is_regulatory_bundle_required = isset($data['is_regulatory_bundle_required']) ? (bool)$data['is_regulatory_bundle_required'] : null;
        $this->is_sms_enable = isset($data['is_sms_enable']) ? (bool)$data['is_sms_enable'] : null;
        $this->is_sms_notification_enable = isset($data['is_sms_notification_enable']) ? (bool)$data['is_sms_notification_enable'] : null;
        $this->text_a2p_registration_due_message = isset($data['text_a2p_registration_due_message']) ? (string)$data['text_a2p_registration_due_message'] : null;
    }
}
