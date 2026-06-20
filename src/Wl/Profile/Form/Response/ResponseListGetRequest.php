<?php
namespace WlSdk\Wl\Profile\Form\Response;

class ResponseListGetRequest
{
    /**
     * Defines whether completed forms should not be included in result list of forms.
     * 
     * `true` to exclude completed forms from result.
     * `false` to include completed forms to result.
     *
     * @var bool|null
     */
    public ?bool $hide_completed = null;

    /**
     * Defines whether optional uncompleted forms should not be included in result list of forms.
     * 
     * `true` to exclude optional uncompleted forms from result.
     * `false` to include optional uncompleted forms to result.
     *
     * @var bool|null
     */
    public ?bool $hide_optional = null;

    /**
     * This will be `true` if the API is being used from the backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The key of the business to show information for.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * The key of the user to show information for.
     *
     * @var string|null
     */
    public ?string $uid = null;

    public function params(): array
    {
        return array_filter(
            [
            'hide_completed' => $this->hide_completed,
            'hide_optional' => $this->hide_optional,
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'uid' => $this->uid,
            ],
            static fn($v) => $v !== null
        );
    }
}
