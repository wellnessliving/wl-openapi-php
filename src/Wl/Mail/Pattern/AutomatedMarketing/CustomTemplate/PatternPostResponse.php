<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

/**
 * Response from POST
 */
class PatternPostResponse
{
    /**
     * Mail pattern key.
     *
     * @var string|null
     */
    public ?string $k_mail_pattern = null;

    public function __construct(array $data)
    {
        $this->k_mail_pattern = isset($data['k_mail_pattern']) ? (string)$data['k_mail_pattern'] : null;
    }
}
