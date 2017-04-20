# PHP Terminal style
[![Hex.pm](https://img.shields.io/hexpm/l/plug.svg?maxAge=2592000&style=flat-square)](https://github.com/bvanhoekelen/terminal-style/blob/master/LICENSE)
[![Packagist Prerelease](https://img.shields.io/packagist/vpre/bvanhoekelen/terminal-style.svg?style=flat-square)](https://packagist.org/packages/bvanhoekelen/terminal-style)
[![Packagist](https://img.shields.io/packagist/dt/bvanhoekelen/terminal-style.svg?style=flat-square)](https://packagist.org/packages/bvanhoekelen/terminal-style)
[![Github issues](https://img.shields.io/github/issues/bvanhoekelen/terminal-style.svg?style=flat-square)](https://github.com/bvanhoekelen/terminal-style/issues)

## Highlight
- The easiest way to style your text in the command line / terminal
- Change text color to red, green, yellow ...  » [Text color](#text-color)
- Change background color to red, green, yellow ...  » [Background color](#background-color)
- Change text style to bold, dim, underlined, blink ...  » [Text style](#text-style)
- Support for Laravel framework » [Laravel](https://laravel.com)
- Easy to install » [installation](#installation)
- Love feedback » [backlog](https://github.com/bvanhoekelen/performance/blob/master/BACKLOG.md) or [create issues](https://github.com/bvanhoekelen/performance/issues)

## Text color
<p align="center"><img src="/assets/terminal-text-color.png" alt="PHP Terminal style set text color" /></p>

### Code example
```php
// Print red text 
echo terminal_style('Here your text', 'red');
```

## Background color
<p align="center"><img src="/assets/terminal-background-color.png" alt="PHP Terminal style set background color" /></p>

### Code example
```php
// Print red background color
echo terminal_style('Here your text', null, 'red');
```

## Text style
<p align="center"><img src="/assets/terminal-text-style.png" alt="PHP Terminal style set style" /></p>

### Code example
```php
// Print text style bold
echo terminal_style('Here your text', null, null, 'bold');
```
### Test styls

Style|Example
--- | --- 
|`Bold`|echo terminal_style('Here your text', null, null, 'bold');


## Overview
<p align="center"><img src="/assets/terminal-all-styles.png" alt="PHP Terminal style all styles" /></p>

# Installation

## Install with Laravel
Get PHP terminal style tool by running the Composer command in the command line. 
```{r, engine='bash', count_lines}
 $ composer require bvanhoekelen/terminal-style
```

Open your file and use `terminal_style()`
```php
// Print red text 
echo terminal_style('Here your text', 'red');

```

## Install with composer
Get PHP terminal style tool by running the Composer command in the command line. 
```{r, engine='bash', count_lines}
 $ composer require bvanhoekelen/terminal-style
```

Open your file and use `terminal_style()`
```php
// Require vender autoload
require_once('../vendor/autoload.php');

// Print red text 
echo terminal_style('Here your text', 'red');

```