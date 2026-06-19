<?php
namespace WlSdk\Wl\Profile\Edit\Email;

/**
 * Response from GET
 */
class EditEmail67ApiGetResponse
{
    /**
     * List of business keys where a user is already a member.
     *
     * @var string[]|null
     */
    public ?array $a_business_member_key = null;

    /**
     * No description.
     *
     * @var array[]|null
     */
    public ?array $a_user = null;

    /**
     * Shows, whether client was registered in the business: `true` if user was added to the business,
     * `false` if staff only received temporary access, because mandatory fields must be specified first.
     *
     * @var bool|null
     */
    public ?bool $is_added = null;

    /**
     * If `true`, user is already a member of current business, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_current_member = null;

    /**
     * If `true`, then the number of requests has exceeded the rate limit. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_limit = null;

    /**
     * If `true`, user, who has the specified email, has password set, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_password_set = null;

    /**
     * If `true`, user, who has the specified email, is staff in current business, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_staff = null;

    /**
     * If `true`, user, who has the specified email, is staff in any business, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_staff_any_business = null;

    /**
     * If `true`, then the specified email is in use. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_use = null;

    /**
     * The key of user who has the specified email.
     * This will be `0` if the email is free or if the rate limit has been reached.
     *
     * @var string|null
     */
    public ?string $uid_result = null;

    public function __construct(array $data)
    {
        $this->a_business_member_key = isset($data['a_business_member_key']) ? (array)$data['a_business_member_key'] : null;
        $this->a_user = isset($data['a_user']) ? (array)$data['a_user'] : null;
        $this->is_added = isset($data['is_added']) ? (bool)$data['is_added'] : null;
        $this->is_current_member = isset($data['is_current_member']) ? (bool)$data['is_current_member'] : null;
        $this->is_limit = isset($data['is_limit']) ? (bool)$data['is_limit'] : null;
        $this->is_password_set = isset($data['is_password_set']) ? (bool)$data['is_password_set'] : null;
        $this->is_staff = isset($data['is_staff']) ? (bool)$data['is_staff'] : null;
        $this->is_staff_any_business = isset($data['is_staff_any_business']) ? (bool)$data['is_staff_any_business'] : null;
        $this->is_use = isset($data['is_use']) ? (bool)$data['is_use'] : null;
        $this->uid_result = isset($data['uid_result']) ? (string)$data['uid_result'] : null;
    }
}
