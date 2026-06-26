<?php

namespace WlSdk\Wl\Virtual\Setting;

class SettingPutRequest
{
    /**
     * List of visit statuses who have access to uploaded videos.
     *
     * @var int[]|null
     */
    public ?array $a_visit_id = null;

    /**
     * Type of chime.
     *
     * @var int|null
     */
    public ?int $id_chime = null;

    /**
     * Type of automatic recording. One of {@link \WlSdk\Core\Zoom\SettingRecordingSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Core\Zoom\SettingRecordingSid
     */
    public ?int $id_recording = null;

    /**
     * Whether to notify the host with a sound when a participant joins the meeting is in waiting room waiting to
     * be admitted.
     *
     * @var bool|null
     */
    public ?bool $is_alert_join = null;

    /**
     * Whether chat is enable during meeting.
     *
     * @var bool|null
     */
    public ?bool $is_chat = null;

    /**
     * Whether participants can send messages in main chat or not.
     *
     * @var bool|null
     */
    public ?bool $is_chat_public = null;

    /**
     * Whether participants can send messages in main chat or not.
     *
     * @var bool|null
     */
    public ?bool $is_co_host = null;

    /**
     * Whether to start meetings with the host video on.
     *
     * @var bool|null
     */
    public ?bool $is_host_video = null;

    /**
     * Whether to include the passcode inside meeting link, so client will directly enter the meeting without
     * having to enter passcode explicitly.
     *
     * @var bool|null
     */
    public ?bool $is_include_passcode = null;

    /**
     * Whether link to join meeting should be secured.
     *
     * `true` if link should be secured. In this case secure phrase will be added to join link which allows user to
     * avoid credential enter step.
     * `false` if link should be common. In this case user will have to enter credentials before join meeting.
     *
     * @var bool|null
     */
    public ?bool $is_link_secure = null;

    /**
     * Whether to keep your participants muted once they enter the virtual session and all through it unless the
     * host unmute them.
     *
     * @var bool|null
     */
    public ?bool $is_mute_entry = null;

    /**
     * Whether to start meetings with the participant video on.
     *
     * @var bool|null
     */
    public ?bool $is_participant_video = null;

    /**
     * Whether to allow host to record and save meeting in the cloud.
     *
     * @var string|null
     */
    public ?string $is_recording_cloud = null;

    /**
     * Whether to allow only host to download cloud recordings.
     *
     * @var bool|null
     */
    public ?bool $is_recording_local = null;

    /**
     * Whether to enable waiting room for participants.
     *
     * @var bool|null
     */
    public ?bool $is_waiting_room = null;

    /**
     * Business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Whether to allow screen sharing (Only from staff to client).
     *
     * `false` will allow screen sharing from host to participants, `true` will disable screen sharing.
     *
     * @var bool|null
     */
    public ?bool $not_screen_sharing = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_visit_id' => $this->a_visit_id,
            'id_chime' => $this->id_chime,
            'id_recording' => $this->id_recording,
            'is_alert_join' => $this->is_alert_join,
            'is_chat' => $this->is_chat,
            'is_chat_public' => $this->is_chat_public,
            'is_co_host' => $this->is_co_host,
            'is_host_video' => $this->is_host_video,
            'is_include_passcode' => $this->is_include_passcode,
            'is_link_secure' => $this->is_link_secure,
            'is_mute_entry' => $this->is_mute_entry,
            'is_participant_video' => $this->is_participant_video,
            'is_recording_cloud' => $this->is_recording_cloud,
            'is_recording_local' => $this->is_recording_local,
            'is_waiting_room' => $this->is_waiting_room,
            'k_business' => $this->k_business,
            'not_screen_sharing' => $this->not_screen_sharing,
            ],
            static fn ($v) => $v !== null
        );
    }
}
