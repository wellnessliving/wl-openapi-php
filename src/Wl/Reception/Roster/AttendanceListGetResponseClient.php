<?php

namespace WlSdk\Wl\Reception\Roster;

class AttendanceListGetResponseClient
{
    /**
     * A list of the assets.
     *
     * @var AttendanceListGetResponseClientAsset|null
     */
    public ?AttendanceListGetResponseClientAsset $a_asset = null;

    /**
     * Gender SID. On of the {@link \WlSdk\Wl\Gender\GenderSid} constants.
     *
     * @var string|null
     */
    public ?string $sid_gender = null;

    /**
     * Client's first name.
     *
     * @var string|null
     */
    public ?string $text_first_name = null;

    /**
     * Client's last name.
     *
     * @var string|null
     */
    public ?string $text_last_name = null;

    /**
     * Mail of client.
     *
     * @var string|null
     */
    public ?string $text_mail = null;

    /**
     * Full name. Combination of the first and last names.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Whether client used Pass Promote to visit class.
     *
     * @var string|null
     */
    public ?string $text_pass_prospect = null;

    /**
     * Phone number of client.
     *
     * @var string|null
     */
    public ?string $text_phone = null;

    /**
     * State of visit. String representation of constants {@link \WlSdk\Wl\Visit\VisitSid}.
     *
     * @var string|null
     */
    public ?string $text_visit = null;

    /**
     * User identifier.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function __construct(array $data)
    {
        $this->a_asset = isset($data['a_asset']) ? new AttendanceListGetResponseClientAsset((array)$data['a_asset']) : null;
        $this->sid_gender = isset($data['sid_gender']) ? (string)$data['sid_gender'] : null;
        $this->text_first_name = isset($data['text_first_name']) ? (string)$data['text_first_name'] : null;
        $this->text_last_name = isset($data['text_last_name']) ? (string)$data['text_last_name'] : null;
        $this->text_mail = isset($data['text_mail']) ? (string)$data['text_mail'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->text_pass_prospect = isset($data['text_pass_prospect']) ? (string)$data['text_pass_prospect'] : null;
        $this->text_phone = isset($data['text_phone']) ? (string)$data['text_phone'] : null;
        $this->text_visit = isset($data['text_visit']) ? (string)$data['text_visit'] : null;
        $this->uid = isset($data['uid']) ? (string)$data['uid'] : null;
    }
}
