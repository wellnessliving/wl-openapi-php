<?php
namespace WlSdk\Wl\User\Info;

class UserIntegrationGetResponseIntegration
{
    /**
     * `true` if user use the Classpass integration, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_classpass = null;

    /**
     * `true` if user use the Gympass integration, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_gympass = null;

    /**
     * `true` if user use the Reserve With Google integration, `false` - otherwise.
     *
     * @var bool|null
     */
    public ?bool $is_reserve_with_google = null;

    public function __construct(array $data)
    {
        $this->is_classpass = isset($data['is_classpass']) ? (bool)$data['is_classpass'] : null;
        $this->is_gympass = isset($data['is_gympass']) ? (bool)$data['is_gympass'] : null;
        $this->is_reserve_with_google = isset($data['is_reserve_with_google']) ? (bool)$data['is_reserve_with_google'] : null;
    }
}
