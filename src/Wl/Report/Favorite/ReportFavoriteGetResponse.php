<?php

namespace WlSdk\Wl\Report\Favorite;

/**
 * Response from GET
 */
class ReportFavoriteGetResponse
{
    /**
     * Whether report is favorite.
     *
     * @var bool|null
     */
    public ?bool $is_favorite = null;

    public function __construct(array $data)
    {
        $this->is_favorite = isset($data['is_favorite']) ? (bool)$data['is_favorite'] : null;
    }
}
