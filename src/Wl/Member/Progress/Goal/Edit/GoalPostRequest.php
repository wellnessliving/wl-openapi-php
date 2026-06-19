<?php
namespace WlSdk\Wl\Member\Progress\Goal\Edit;

class GoalPostRequest
{
    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * User key.
     *
     * @var string|null
     */
    public ?string $uid = null;

    /**
     * List of fields.
     * 
     * Keys are field IDs ([ProgressFieldSid](#/components/schemas/Wl.Member.Progress.Field.ProgressFieldSid)
     * constants).
     * Values are new field values.
     * Structure of value completely defined by individual fields.
     *
     * @var int[]|null
     */
    public ?array $a_field_goal = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            'a_field_goal' => $this->a_field_goal,
            ],
            static fn($v) => $v !== null
        );
    }
}
