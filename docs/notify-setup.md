# Setting up automatic SDK rebuild on spec change

When `stable/openapi.yaml`, `dev/openapi.yaml`, or `production/openapi.yaml` is updated in the
[wellnessliving/openapi](https://github.com/wellnessliving/openapi) repository,
the SDK can be rebuilt automatically via a `repository_dispatch` event.

## How it works

```
openapi repo                        wl-openapi-php repo
─────────────────────────────────   ──────────────────────────────────
push to stable/openapi.yaml    -->  repository_dispatch: openapi-updated
                                -->  php scripts/generate.php
                                -->  git commit stable/src/ dev/src/
                                -->  git push
                                -->  gh release create vX.X.XXXXXXXX
```

## Step 1 — Create a Personal Access Token

1. Go to **GitHub → Settings → Developer settings → Personal access tokens → Fine-grained tokens**.
2. Click **Generate new token**.
3. Set:
   - **Token name**: `wl-openapi-php dispatch`
   - **Expiration**: choose a suitable period (or "No expiration")
   - **Resource owner**: `wellnessliving`
   - **Repository access**: only `wl-openapi-php`
   - **Permissions**:
     - **Actions** — Read and write
     - **Contents** — Read and write
4. Click **Generate token** and copy the value — it will not be shown again.

## Step 2 — Add the token as a secret in the openapi repo

1. Open **github.com/wellnessliving/openapi → Settings → Secrets and variables → Actions**.
2. Click **New repository secret**.
3. Set:
   - **Name**: `SDK_PHP_DISPATCH_TOKEN`
   - **Value**: paste the token from Step 1.
4. Click **Add secret**.

## Step 3 — Add the notify workflow to the openapi repo

Create the file `.github/workflows/notify-sdk-php.yml` in the
`wellnessliving/openapi` repository with the following content:

```yaml
name: Notify PHP SDK repo

on:
  push:
    branches: [main]
    paths:
      - 'stable/openapi.yaml'
      - 'dev/openapi.yaml'
      - 'production/openapi.yaml'

jobs:
  dispatch:
    runs-on: ubuntu-latest
    steps:
      - name: Trigger PHP SDK rebuild
        uses: peter-evans/repository-dispatch@v3
        with:
          token: ${{ secrets.SDK_PHP_DISPATCH_TOKEN }}
          repository: wellnessliving/wl-openapi-php
          event-type: openapi-updated
```

## Step 4 — Verify

Push any change to `stable/openapi.yaml` in the openapi repo.
After a few seconds, a new workflow run should appear in
**github.com/wellnessliving/wl-openapi-php → Actions**.

Once the run completes, check:

- **Commits** — a new commit `chore: regenerate PHP SDK` should appear on `main`.
- **Releases** — a new release tagged `vX.X.XXXXXXXX` should appear under
  **github.com/wellnessliving/wl-openapi-php → Releases**.

If the spec version did not change, the release step is skipped
and only the commit is made.

## GitHub Release details

The release is created automatically by `build.yml` at the end of a successful build.

**Tag format:** `v{stable spec version}`, e.g. `v1.1.20260619090040`.

## Token expiry

If the token has an expiration date, set a calendar reminder to rotate it before
it expires. An expired token causes the dispatch step to fail silently — the daily
schedule fallback (`cron: '0 8 * * *'` in `build.yml`) will keep the SDK
updating in the meantime.
