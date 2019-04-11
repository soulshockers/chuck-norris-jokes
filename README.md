# Chuck Norris Jokes
[![Build Status](https://travis-ci.org/soulshockers/chuck-norris-jokes.svg?branch=master)](https://travis-ci.org/soulshockers/chuck-norris-jokes)
[![StyleCI](https://github.styleci.io/repos/180788405/shield?branch=master)](https://github.styleci.io/repos/180788405)

Create Chuck Norris jokes in your next PHP project

## Installation

Require the package using composer:

```bash
composer require soulshockers/chuck-norris-jokes
```

## Usage

```php
use SoulShockers\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Credits

- [Vasyl Sovyak](https://github.com/soulshockers)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.