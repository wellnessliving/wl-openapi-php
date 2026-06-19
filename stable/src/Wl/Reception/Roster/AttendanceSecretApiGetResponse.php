<?php
namespace WlSdk\Wl\Reception\Roster;

/**
 * Response from GET
 */
class AttendanceSecretApiGetResponse
{
    /**
     * Secret string.
     *
     * @var string|null
     */
    public ?string $s_secret = null;

    public function __construct(array $data)
    {
        $this->s_secret = isset($data['s_secret']) ? (string)$data['s_secret'] : null;
    }
}
