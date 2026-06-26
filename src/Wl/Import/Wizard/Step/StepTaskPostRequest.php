<?php

namespace WlSdk\Wl\Import\Wizard\Step;

class StepTaskPostRequest
{
    /**
     * Import wizard step. One of {@link \WlSdk\Wl\Import\Wizard\ImportWizardSid} constants.
     *
     * @var int|null
     * @see \WlSdk\Wl\Import\Wizard\ImportWizardSid
     */
    public ?int $id_import_wizard = null;

    /**
     * Key of the business where import goes. Primary key from RsBusinessSql table.
     *
     * @var string|null
     */
    public ?string $k_business = null;

    public function params(): array
    {
        return array_filter(
            [
            'id_import_wizard' => $this->id_import_wizard,
            'k_business' => $this->k_business,
            ],
            static fn ($v) => $v !== null
        );
    }
}
