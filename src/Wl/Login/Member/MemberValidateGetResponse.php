<?php
namespace WlSdk\Wl\Login\Member;

/**
 * Response from GET
 */
class MemberValidateGetResponse
{
    /**
     * List of fields if the user has empty profile fields, which are required for booking.
     *
     * @var string[]|null
     */
    public ?array $a_empty_fields_booking = null;

    /**
     * List of fields if the user has empty profile fields, which are required for registration.
     *
     * @var string[]|null
     */
    public ?array $a_empty_fields_registration = null;

    /**
     * `true` If the user has credit cards on profile, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $has_credit_card = null;

    /**
     * `true` if the user has an outstanding contract, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $has_outstanding_contract = null;

    /**
     * `true` If the user has an outstanding waiver for the business, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $has_outstanding_waiver = null;

    /**
     * `true` If the user has pending registration quizzes to complete, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $has_pending_quizzes = null;

    /**
     * `true` If the user has to provide credit card details before booking, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $is_booking_require_card = null;

    /**
     * `true` If the user has to provide credit card details to finish their registration, otherwise `false`.
     *
     * @var bool|null
     */
    public ?bool $is_register_require_card = null;

    /**
     * Home user`s location.
     * `null` if user has not home location.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    public function __construct(array $data)
    {
        $this->a_empty_fields_booking = isset($data['a_empty_fields_booking']) ? (array)$data['a_empty_fields_booking'] : null;
        $this->a_empty_fields_registration = isset($data['a_empty_fields_registration']) ? (array)$data['a_empty_fields_registration'] : null;
        $this->has_credit_card = isset($data['has_credit_card']) ? (bool)$data['has_credit_card'] : null;
        $this->has_outstanding_contract = isset($data['has_outstanding_contract']) ? (bool)$data['has_outstanding_contract'] : null;
        $this->has_outstanding_waiver = isset($data['has_outstanding_waiver']) ? (bool)$data['has_outstanding_waiver'] : null;
        $this->has_pending_quizzes = isset($data['has_pending_quizzes']) ? (bool)$data['has_pending_quizzes'] : null;
        $this->is_booking_require_card = isset($data['is_booking_require_card']) ? (bool)$data['is_booking_require_card'] : null;
        $this->is_register_require_card = isset($data['is_register_require_card']) ? (bool)$data['is_register_require_card'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
