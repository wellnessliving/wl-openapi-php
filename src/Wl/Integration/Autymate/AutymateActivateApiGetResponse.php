<?php
namespace WlSdk\Wl\Integration\Autymate;

/**
 * Response from GET
 */
class AutymateActivateApiGetResponse
{
    /**
     * The new status of the enrollment. If `0`, the current status is returned.
     * 
     * One of [AutymateStatusSid](#/components/schemas/Wl.Integration.Autymate.AutymateStatusSid) constants.
     *
     * @var int|null
     */
    public ?int $id_status = null;

    public function __construct(array $data)
    {
        $this->id_status = isset($data['id_status']) ? (int)$data['id_status'] : null;
    }
}
