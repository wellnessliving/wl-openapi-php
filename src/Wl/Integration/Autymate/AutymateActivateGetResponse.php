<?php
namespace WlSdk\Wl\Integration\Autymate;

/**
 * Response from GET
 */
class AutymateActivateGetResponse
{
    /**
     * The new status of the enrollment. If `0`, the current status is returned.
     * 
     * One of {@link \WlSdk\Wl\Integration\Autymate\AutymateStatusSid} constants.
     *
     * @var \WlSdk\Wl\Integration\Autymate\AutymateStatusSid|null
     */
    public ?\WlSdk\Wl\Integration\Autymate\AutymateStatusSid $id_status = null;

    public function __construct(array $data)
    {
        $this->id_status = isset($data['id_status']) ? \WlSdk\Wl\Integration\Autymate\AutymateStatusSid::tryFrom((int)$data['id_status']) : null;
    }
}
