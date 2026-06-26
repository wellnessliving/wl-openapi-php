<?php

namespace WlSdk\Core\Prg\SmartCache;

/**
 * Response from GET
 */
class SmartCacheGetResponse
{
    /**
     * See `is_change_js` for documentation.
     *
     * @var bool|null
     */
    public ?bool $is_change_js = null;

    /**
     * See `is_change_less` for documentation.
     *
     * @var bool|null
     */
    public ?bool $is_change_less = null;

    /**
     * See `is_change_opcache` for documentation.
     *
     * @var bool|null
     */
    public ?bool $is_change_opcache = null;

    public function __construct(array $data)
    {
        $this->is_change_js = isset($data['is_change_js']) ? (bool)$data['is_change_js'] : null;
        $this->is_change_less = isset($data['is_change_less']) ? (bool)$data['is_change_less'] : null;
        $this->is_change_opcache = isset($data['is_change_opcache']) ? (bool)$data['is_change_opcache'] : null;
    }
}
