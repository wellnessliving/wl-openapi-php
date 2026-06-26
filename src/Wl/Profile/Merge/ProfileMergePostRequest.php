<?php

namespace WlSdk\Wl\Profile\Merge;

class ProfileMergePostRequest
{
    /**
     * List of fields to save.
     *
     * Keys are keys of fields. Primary key in the RsFieldSql table.
     * Values are keys of users from whose profile field value is needed save. Primary key in the PassportLoginSql
     * table.
     *
     * @var array|null
     */
    public ?array $a_field_save = null;

    /**
     * List of user keys to merge. One element is primary key in PassportLoginSql.
     *
     * @var string[]|null
     */
    public ?array $a_uid = null;

    /**
     * Key of current business. Primary key in RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'a_field_save' => $this->a_field_save,
            'a_uid' => $this->a_uid,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
