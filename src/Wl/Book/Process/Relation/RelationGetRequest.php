<?php
namespace WlSdk\Wl\Book\Process\Relation;

class RelationGetRequest
{
    /**
     * List of check that must be skipped.
     * Each element must be a member of [ProcessCheckSid](#/components/schemas/Wl.Book.Process.ProcessCheckSid).
     *
     * @var int[]|null
     */
    public ?array $a_check_ignore = null;

    /**
     * The date/time of the session to check for booking availability.
     *
     * @var string|null
     */
    public ?string $dtu_date = null;

    /**
     * Checking whether the client has a credit card (if configured in the business) will be skipped if this flag
     * is set to `false`.
     * 
     * Use this field with caution.
     * The final booking will not use this flag and the check will still be performed.
     *
     * @var bool|null
     */
    public ?bool $is_credit_card_check = null;

    /**
     * The business where `uid_from` creates the new relative.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the session to check for booking availability.
     *
     * @var string|null
     */
    public ?string $k_class_period = null;

    /**
     * The user who's adding the new relative.
     *
     * @var string|null
     */
    public ?string $uid_from = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_check_ignore' => $this->a_check_ignore,
            'dtu_date' => $this->dtu_date,
            'is_credit_card_check' => $this->is_credit_card_check,
            'k_business' => $this->k_business,
            'k_class_period' => $this->k_class_period,
            'uid_from' => $this->uid_from,
            ],
            static fn($v) => $v !== null
        );
    }
}
