<?php

namespace WlSdk\Wl\Mail\Pattern\AutomatedMarketing\CustomTemplate;

class PatternGetResponseBusinessData
{
    /**
     * Business email address to `Reply TO`. `null` for system business.
     *
     * @var string|null
     */
    public ?string $text_business_reply_mail = null;

    /**
     * Business name to `Reply TO`. `null` for system business.
     *
     * @var string|null
     */
    public ?string $text_business_reply_name = null;

    public function __construct(array $data)
    {
        $this->text_business_reply_mail = isset($data['text_business_reply_mail']) ? (string)$data['text_business_reply_mail'] : null;
        $this->text_business_reply_name = isset($data['text_business_reply_name']) ? (string)$data['text_business_reply_name'] : null;
    }
}
