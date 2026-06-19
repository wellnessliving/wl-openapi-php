<?php
namespace WlSdk\Wl\Video;

class VideoListPutRequest
{
    /**
     * If `true`, the API is being used from backend. Otherwise, this will be `false`.
     *
     * @var bool|null
     */
    public ?bool $is_backend = null;

    /**
     * The business key.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * A list of shared video keys in their saved order.
     *
     * @var string[]|null
     */
    public ?array $a_order = null;

    public function params(): array
    {
        return array_filter(
            [
            'is_backend' => $this->is_backend,
            'k_business' => $this->k_business,
            'a_order' => $this->a_order,
            ],
            static fn($v) => $v !== null
        );
    }
}
