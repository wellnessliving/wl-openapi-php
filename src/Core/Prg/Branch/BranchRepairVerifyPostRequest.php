<?php

namespace WlSdk\Core\Prg\Branch;

class BranchRepairVerifyPostRequest
{
    /**
     * Local path to the SVN working copy to verify.
     *
     * @var string|null
     */
    public ?string $s_path_local = null;

    public function params(): array
    {
        return array_filter(
            [
            's_path_local' => $this->s_path_local,
            ],
            static fn ($v) => $v !== null
        );
    }
}
