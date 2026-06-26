<?php

namespace WlSdk\Wl\Profile\Setting\Delete;

class DeleteGetResponseErrorInfoReason
{
    /**
     * Additional data for reason text.
     *
     * @var string|null
     */
    public ?string $html_data = null;

    /**
     * Reason why client profile can't be deleted.
     *
     * @var string|null
     */
    public ?string $text_reason = null;

    public function __construct(array $data)
    {
        $this->html_data = isset($data['html_data']) ? (string)$data['html_data'] : null;
        $this->text_reason = isset($data['text_reason']) ? (string)$data['text_reason'] : null;
    }
}
