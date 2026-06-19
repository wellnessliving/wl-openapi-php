<?php
namespace WlSdk\Wl\Reception\Application;

class MemberInfoGetRequest
{
    /**
     * Primary keys of users whose information must be returned.
     * 
     * `null` if data of a single user is requested.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * List of dates for load additional information about users.
     * 
     * Key is UID of user. Value is date.
     * 
     * `null` if data of a single user is requested.
     *
     * @var string[]|null
     */
    public ?array $a_uid_date = null;

    /**
     * Date of the session, if we show it on the appointment info window or on the attendance list.
     *
     * @var string|null
     */
    public ?string $dt_date = null;

    /**
     * `true` - if API is being used from backend, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * If you need to return additional information set to `true` or `false` if not.
     *
     * @var bool|null
     */
    public ?bool $is_full = null;

    /**
     * The business ID required to access client information.
     * 
     * Specify this as `0` to retrieve the system-wide version of the information.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The location where the Self Check-In Web App is running.
     *
     * @var string|null
     */
    public ?string $k_location = null;

    /**
     * ID of the visit, if we show icons on the attendance list and information that depends on visit is required.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    /**
     * Key of the Check In application.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    /**
     * A list of icons with additional information about the business member.
     * If empty, all available icons will be displayed.
     * Comma separated values from [MemberInfoSid::idSid()](#/components/schemas/Wl.Member.Info.MemberInfoSid)
     * method.
     *
     * @var string|null
     */
    public ?string $s_show = null;

    /**
     * ID of a user to retrieve member information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_uid' => $this->a_uid,
            'a_uid_date' => $this->a_uid_date,
            'dt_date' => $this->dt_date,
            'is_backend' => $this->is_backend,
            'is_full' => $this->is_full,
            'k_business' => $this->k_business,
            'k_location' => $this->k_location,
            'k_visit' => $this->k_visit,
            's_secret' => $this->s_secret,
            's_show' => $this->s_show,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
