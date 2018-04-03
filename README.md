# Character collection

[![Latest Stable Version](http://img.shields.io/packagist/v/jeroendesloovere/character-collection.svg)](https://packagist.org/packages/jeroendesloovere/character-collection)
[![License](http://img.shields.io/badge/license-MIT-lightgrey.svg)](https://github.com/jeroendesloovere/character-collection/blob/master/LICENSE)
[![Build Status](https://travis-ci.org/jeroendesloovere/character-collection.svg?branch=new-version)](https://travis-ci.org/jeroendesloovere/character-collection)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jeroendesloovere/character-collection/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/jeroendesloovere/character-collection/?branch=new-version)

> Use this class to read a sentence and get all the characters from it in a collection. So you know exactly how many times a character is being used in a sentence.

## Installation

```
composer require jeroendesloovere/character-collection
```

## Example

```php
$collection = new CharacterCollection('This is my sentence.');
```

Which is a collection of all the characters that are used in your sentence + the positions that they are on.
Example off how to get the positions of t
```php
$collection->get('t')->getPositions();
```
> Will return `[0, 14]`.

## Documentation

The class is well documented inline. If you use a decent IDE you'll see that each method is documented with PHPDoc.

## Contributing

Contributions are **welcome** and will be fully **credited**.

### Pull Requests

> To add or update code

- **Coding Syntax** - Please keep the code syntax consistent with the rest of the package.
- **Add unit tests!** - Your patch won't be accepted if it doesn't have tests.
- **Document any change in behavior** - Make sure the README and any other relevant documentation are kept up-to-date.
- **Consider our release cycle** - We try to follow [semver](http://semver.org/). Randomly breaking public APIs is not an option.
- **Create topic branches** - Don't ask us to pull from your master branch.
- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.
- **Send coherent history** - Make sure each individual commit in your pull request is meaningful. If you had to make multiple intermediate commits while developing, please squash them before submitting.

### Issues

> For bug reporting or code discussions.

More info on how to work with GitHub on help.github.com.

### Coding Syntax

We use [squizlabs/php_codesniffer](https://packagist.org/packages/squizlabs/php_codesniffer) to maintain the code standards.
Type the following to execute them:
```bash
# To view the code errors
vendor/bin/phpcs --standard=psr2 --extensions=php --warning-severity=0 --report=full "src"

# OR to fix the code errors
vendor/bin/phpcbf --standard=psr2 --extensions=php --warning-severity=0 --report=full "src"
```
> [Read documentation about the code standards](https://github.com/squizlabs/PHP_CodeSniffer/wiki)

### Unit Tests

We have build in tests, type the following to execute them:
```bash
vendor/bin/phpunit tests
```

## Credits

- [Jeroen Desloovere](https://github.com/jeroendesloovere)
- [All Contributors](https://github.com/jeroendesloovere/character-collection/contributors)

## License

The module is licensed under [MIT](./LICENSE.md). In short, this license allows you to do everything as long as the copyright statement stays present.
