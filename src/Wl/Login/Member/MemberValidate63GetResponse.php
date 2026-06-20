<?php
namespace WlSdk\Wl\Login\Member;

/**
 * Response from GET
 */
class MemberValidate63GetResponse
{
    /**
     * No description.
     *
     * @var MemberValidate63GetResponseEmptyFieldsBooking[]|null
     */
    public ?array $a_empty_fields_booking = null;

    /**
     * No description.
     *
     * @var MemberValidate63GetResponseEmptyFieldsRegistration[]|null
     */
    public ?array $a_empty_fields_registration = null;

    /**
     * No description.
     *
     * @var MemberValidate63GetResponseEmptyFieldsRequired[]|null
     */
    public ?array $a_empty_fields_required = null;

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
        $this->a_empty_fields_booking = isset($data['a_empty_fields_booking']) ? array_map(static fn($item) => new MemberValidate63GetResponseEmptyFieldsBooking((array)$item), (array)$data['a_empty_fields_booking']) : null;
        $this->a_empty_fields_registration = isset($data['a_empty_fields_registration']) ? array_map(static fn($item) => new MemberValidate63GetResponseEmptyFieldsRegistration((array)$item), (array)$data['a_empty_fields_registration']) : null;
        $this->a_empty_fields_required = isset($data['a_empty_fields_required']) ? array_map(static fn($item) => new MemberValidate63GetResponseEmptyFieldsRequired((array)$item), (array)$data['a_empty_fields_required']) : null;
        $this->has_credit_card = isset($data['has_credit_card']) ? (bool)$data['has_credit_card'] : null;
        $this->has_outstanding_contract = isset($data['has_outstanding_contract']) ? (bool)$data['has_outstanding_contract'] : null;
        $this->has_outstanding_waiver = isset($data['has_outstanding_waiver']) ? (bool)$data['has_outstanding_waiver'] : null;
        $this->has_pending_quizzes = isset($data['has_pending_quizzes']) ? (bool)$data['has_pending_quizzes'] : null;
        $this->is_booking_require_card = isset($data['is_booking_require_card']) ? (bool)$data['is_booking_require_card'] : null;
        $this->is_register_require_card = isset($data['is_register_require_card']) ? (bool)$data['is_register_require_card'] : null;
        $this->k_location = isset($data['k_location']) ? (string)$data['k_location'] : null;
    }
}
