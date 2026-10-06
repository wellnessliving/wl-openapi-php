<?php

namespace WlSdk\Wl\Business\Sms\Chat\Dialog;

/**
 * Response from GET
 */
class DialogListGetResponse
{
    /**
     * A list of clients' dialogs. Value has following structure:
     *
     * @var DialogListGetResponseDialogList|null
     */
    public ?DialogListGetResponseDialogList $a_dialog_list = null;

    public function __construct(array $data)
    {
        $this->a_dialog_list = isset($data['a_dialog_list']) ? new DialogListGetResponseDialogList((array)$data['a_dialog_list']) : null;
    }
}
