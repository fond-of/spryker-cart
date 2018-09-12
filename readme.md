# fond-of-spryker/fond-of-spryker/cart
[![license](https://img.shields.io/github/license/mashape/apistatus.svg)](https://packagist.org/packages/fond-of-spryker/cart)

## Install

```
composer require fond-of-spryker/cart
```

New plugin which count total cart items. Just set in in your dependency provider, stored under:
Pyz\Client\Cart;

```
/**
 * @return \Spryker\Client\Cart\Dependency\Plugin\ItemCountPluginInterface
 */
protected function getItemCountPlugin()
{
    return new ItemCountPlugin();
}
```