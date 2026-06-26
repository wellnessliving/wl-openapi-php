<?php

namespace WlSdk\Wl\Profile\Setting\Delete;

class DeleteGetResponseErrorInfo
{
    /**
     * List of reasons why client can not be deleted. Each value is:
     *
     * @var DeleteGetResponseErrorInfoReason|null
     */
    public ?DeleteGetResponseErrorInfoReason $a_reason = null;

    /**
     * `true` if only one reason exist, `false` otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_reason_single = null;

    /**
     * Client name.
     *
     * @var string|null
     */
    public ?string $text_name = null;

    /**
     * Link to the client profile.
     *
     * @var string|null
     */
    public ?string $url_profile = null;

    public function __construct(array $data)
    {
        $this->a_reason = isset($data['a_reason']) ? new DeleteGetResponseErrorInfoReason((array)$data['a_reason']) : null;
        $this->is_reason_single = isset($data['is_reason_single']) ? (bool)$data['is_reason_single'] : null;
        $this->text_name = isset($data['text_name']) ? (string)$data['text_name'] : null;
        $this->url_profile = isset($data['url_profile']) ? (string)$data['url_profile'] : null;
    }
}
