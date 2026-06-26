<?php

namespace WlSdk\Wl\Report\Favorite;

class ReportFavoriteDeleteRequest
{
    /**
     * CID of the controller.
     *
     * Subclass of the {@link \WlSdk\Wl\Report\View\ReportViewControllerAbstract}.
     *
     * @var int|null
     * @see \WlSdk\Wl\Report\View\ReportViewControllerAbstract
     */
    public ?int $cid_controller = null;

    /**
     * Business key within which request is performed.
     *
     * Primary key in the RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Saved report key to manage.
     *
     * @var string|null
     */
    public ?string $k_report_save = null;

    /**
     * UID user's key of the actor.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    public function params(): array
    {
        return array_filter(
            [
            'cid_controller' => $this->cid_controller,
            'k_business' => $this->k_business,
            'k_report_save' => $this->k_report_save,
            'uid_actor' => $this->uid_actor,
            ],
            static fn ($v) => $v !== null
        );
    }
}
