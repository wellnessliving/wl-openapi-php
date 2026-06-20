<?php

namespace WlSdk\Wl\Reception\Application;

/**
 * Response from POST
 */
class ReceptionSchedulePostResponse
{
    /**
     * Data for the confirmation screen with the following fields:
     *
     * @var ReceptionSchedulePostResponseConfirmationData|null
     */
    public ?ReceptionSchedulePostResponseConfirmationData $a_confirmation_data = null;

    /**
     * The confirmation template to be shown in the Self Check-In Web App for the selected user.
     *
     * @var string|null
     */
    public ?string $html_confirmation = null;

    /**
     * The visit key, which was added or checked in.
     *
     * @var string|null
     */
    public ?string $k_visit = null;

    public function __construct(array $data)
    {
        $this->a_confirmation_data = isset($data['a_confirmation_data']) ? new ReceptionSchedulePostResponseConfirmationData((array)$data['a_confirmation_data']) : null;
        $this->html_confirmation = isset($data['html_confirmation']) ? (string)$data['html_confirmation'] : null;
        $this->k_visit = isset($data['k_visit']) ? (string)$data['k_visit'] : null;
    }
}
