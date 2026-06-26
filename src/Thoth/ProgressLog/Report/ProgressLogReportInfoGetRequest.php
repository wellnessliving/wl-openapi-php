<?php

namespace WlSdk\Thoth\ProgressLog\Report;

class ProgressLogReportInfoGetRequest
{
    /**
     * Key of the business, primary key in RsBusinessSql.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    /**
     * Key of the user, primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid_actor = null;

    /**
     * Key of the user, whose progress log profile page to render. Primary key in PassportLoginSql.
     *
     * @var string|null
     */
    public ?string $uid_client = null;

    public function params(): array
    {
        return array_filter(
            [
            'k_business' => $this->k_business,
            'uid_actor' => $this->uid_actor,
            'uid_client' => $this->uid_client,
            ],
            static fn ($v) => $v !== null
        );
    }
}
