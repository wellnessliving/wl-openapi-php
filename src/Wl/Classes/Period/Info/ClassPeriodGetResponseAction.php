<?php

namespace WlSdk\Wl\Classes\Period\Info;

class ClassPeriodGetResponseAction
{
    /**
     * Any first found restriction message. Empty string if no restriction exists.
     *
     * @var string|null
     */
    public ?string $text_restriction_message = null;

    /**
     * Whether the class cannot be booked due to age restrictions.
     *
     * @var bool|null
     */
    public ?bool $is_age_restricted = null;

    /**
     * Whether the class can be bookable online.
     *   It does not take into account neither restriction of age nor restriction of prerequisites.
     *
     * @var bool|null
     */
    public ?bool $is_class_bookable = null;

    /**
     * Whether class is cancelled.
     *
     * @var bool|null
     */
    public ?bool $is_class_cancel = null;

    /**
     * Whether there are no free spots in the class.
     *
     * @var bool|null
     */
    public ?bool $is_class_full = null;

    /**
     * Whether current class session was in the past.
     *
     * @var bool|null
     */
    public ?bool $is_class_past = null;

    /**
     * Whether booking button must be disabled due to the class restrictions:
     * - Online Booking Disabled;
     * - Online Booking Allowed only for certain Client Types;
     * - Online Booking Allowed only for certain Member Groups;
     * - Age Restriction;
     * - Prerequisites Restriction.
     * It takes into account whether client is allowed to book for their relatives without switching profile.
     * But allowing family bookings does not affect the "Online Booking Disabled" restriction.
     *
     * @var bool|null
     */
    public ?bool $is_disable_by_restriction = null;

    /**
     * Whether current class was booked by current client.
     *
     * @var bool|null
     */
    public ?bool $is_visit_book = null;

    /**
     * Whether current user can take place in wait list only.
     *
     * @var bool|null
     */
    public ?bool $is_wait_list = null;

    /**
     * Direct link to start booking on Wellnessliving site.
     *
     * @var string|null
     */
    public ?string $url_visit_book = null;

    /**
     * Direct link to cancel booked session on Wellnessliving site.
     *
     * @var string|null
     */
    public ?string $url_visit_cancel = null;

    public function __construct(array $data)
    {
        $this->text_restriction_message = isset($data['text_restriction_message']) ? (string)$data['text_restriction_message'] : null;
        $this->is_age_restricted = isset($data['is_age_restricted']) ? (bool)$data['is_age_restricted'] : null;
        $this->is_class_bookable = isset($data['is_class_bookable']) ? (bool)$data['is_class_bookable'] : null;
        $this->is_class_cancel = isset($data['is_class_cancel']) ? (bool)$data['is_class_cancel'] : null;
        $this->is_class_full = isset($data['is_class_full']) ? (bool)$data['is_class_full'] : null;
        $this->is_class_past = isset($data['is_class_past']) ? (bool)$data['is_class_past'] : null;
        $this->is_disable_by_restriction = isset($data['is_disable_by_restriction']) ? (bool)$data['is_disable_by_restriction'] : null;
        $this->is_visit_book = isset($data['is_visit_book']) ? (bool)$data['is_visit_book'] : null;
        $this->is_wait_list = isset($data['is_wait_list']) ? (bool)$data['is_wait_list'] : null;
        $this->url_visit_book = isset($data['url_visit_book']) ? (string)$data['url_visit_book'] : null;
        $this->url_visit_cancel = isset($data['url_visit_cancel']) ? (string)$data['url_visit_cancel'] : null;
    }
}
