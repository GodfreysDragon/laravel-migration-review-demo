# laravel-migration-review demo

A stock Laravel app with [laravel-migration-review](https://github.com/GodfreysDragon/laravel-migration-review) installed, used to show its GitHub Actions annotations on a real pull request.

- [`.github/workflows/migration-review.yml`](.github/workflows/migration-review.yml) reviews the migrations a PR adds or changes, using the workflow from the package README.
- [PR #1](../../pull/1) adds a migration with several production risks. Open its **Files changed** tab to see the findings inline.

The workflow runs the static rules only; it has no Anthropic API key.
