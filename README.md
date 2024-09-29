# Number Format Except Zero

<a href="https://packagist.org/packages/davidvandertuijn/number_format_except_zero"><img src="https://poser.pugx.org/davidvandertuijn/number_format_except_zero/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/davidvandertuijn/number_format_except_zero"><img src="https://poser.pugx.org/davidvandertuijn/number_format_except_zero/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/davidvandertuijn/number_format_except_zero"><img src="https://poser.pugx.org/davidvandertuijn/number_format_except_zero/license.svg" alt="License"></a>

![Number Format Except Zero](https://cdn.davidvandertuijn.nl/github/number_format_except_zero.png)

The “Number Format Except Zero” tool is designed to enhance the presentation of numerical data by formatting values while excluding zero entries. This functionality is particularly useful for creating clean and meaningful reports, visualizations, and data analyses.

[!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/davidvandertuijn)

## Install

```
composer require davidvandertuijn/number_format_except_zero
```

## Usage

```php
number_format_except_zero('1234.56', 2, ',', '.'); // 1.234,56
number_format_except_zero('0', 2, ',', '.'); // 0
```
