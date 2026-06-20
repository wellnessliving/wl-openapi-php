<?php
namespace WlSdk\Wl\Resource\Layout;

class LayoutGetRequest
{
    /**
     * The key of the layout.
     *
     * @var string|null
     */
    public ?string $k_resource_layout = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_resource_layout' => $this->k_resource_layout,
            ],
            static fn($v) => $v !== null
        );
    }
}
