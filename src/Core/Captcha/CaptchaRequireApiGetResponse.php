<?php
namespace WlSdk\Core\Captcha;

/**
 * Response from GET
 */
class CaptchaRequireApiGetResponse
{
    /**
     * `true` if enabled V3 captcha enabled.
     * `false` if only V2 captcha enable.
     *
     * @var bool|null
     */
    public ?bool $is_enable_v3 = null;

    /**
     * This will be `true` if a CAPTCHA is required. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_require = null;

    public function __construct(array $data)
    {
        $this->is_enable_v3 = isset($data['is_enable_v3']) ? (bool)$data['is_enable_v3'] : null;
        $this->is_require = isset($data['is_require']) ? (bool)$data['is_require'] : null;
    }
}
