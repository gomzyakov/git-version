# GIT version getter

A helper class to get the current GIT version of the project.

## Installation

Require it in your project:

```bash
composer require gomzyakov/git-version
```

## Use

Everything is very simple. You can get the git version string with:

```php
$version = \Gomzyakov\GitVersion\GitVersion::getVersion();
```

### Recommended usage pattern

Ensure your git tags are pushed to your servers so that the versions are described properly.

During development and possibly in staging environments allow the version to be determined automatically (this is done via `git describe`).

<!--
As part of your production deployment procedure,
write a `version` file (perhaps via a command like
`git describe --always --tags --dirty >version`,
since this is the command this package would run otherwise).
When this `version` file exists the package will use its contents
rather than executing `git`, saving some processor and IO time.

Add `/version` to your `.gitignore` file
so your working tree stays clean and you don't accidentally commit it.

(git config --global --add safe.directory /var/www/html)

-->

## Support

If you find any package errors, please, [make an issue](https://github.com/gomzyakov/git-version/issues) in current repository.

## License

This is open-sourced software licensed under the [MIT License](https://github.com/gomzyakov/git-version/blob/main/LICENSE).
