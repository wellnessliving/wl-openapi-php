<?php

namespace WlSdk\Wl\Insurance\Reimbursement\Import;

use WlSdk\WlSdkClient;

/**
 * API endpoint: /Wl/Insurance/Reimbursement/Import/FileImportSos.json
 */
class FileImportSos
{
    /** @var WlSdkClient */
    private $client;

    public function __construct(WlSdkClient $client)
    {
        $this->client = $client;
    }

    /**
     * Calls DELETE /Wl/Insurance/Reimbursement/Import/FileImportSos.json.
     *
     * @return FileImportSosDeleteResponse
     * @throws \WlSdk\WlSdkException On non-2xx HTTP response.
     * @throws \RuntimeException On network or cURL error.
     */
    public function delete(FileImportSosDeleteRequest $request): FileImportSosDeleteResponse
    {
        return new FileImportSosDeleteResponse($this->client->request('/Wl/Insurance/Reimbursement/Import/FileImportSos.json', $request->params(), 'DELETE'));
    }
}
