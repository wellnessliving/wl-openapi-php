<?php
namespace WlSdk\Wl\Schedule\Page;

class PageElementGetResponseAsset
{
    /**
     * Asset title that consists of the asset title itself concatenated with its index (in case of multiple assets)
     * by '#'.
     *
     * @var string|null
     */
    public ?string $s_name = null;

    /**
     * Number of sessions.
     *
     * @var string|null
     */
    public ?string $i_count = null;

    public function __construct(array $data)
    {
        $this->s_name = isset($data['s_name']) ? (string)$data['s_name'] : null;
        $this->i_count = isset($data['i_count']) ? (string)$data['i_count'] : null;
    }
}
