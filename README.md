P3PCookieBundle
=============

The P3PCookieBundle adds support for cookie storage in iFrames for Internet Explorer. It solves an Issue, where cookies (for example for session storage) don't work for applications inside iFrames.

## Prerequisites

This version of the bundle requires Symfony 2.1+.

## Installation
Installation only requires two steps:

1. Download P3PCookieBundle using composer
2. Enable the Bundle

### Step 1: Download P3PCookieBundle

Add P3PCookieBundle to your composer.json

```js
{
    "require": {
        "pulpmedia/p3pcookiebundle": "~1.0@dev"
    }
}
``` 

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update pulpmedia/p3pcookiebundle
```

Composer will install the bundle to your project's `vendor/pulpmedia` directory.

### Step 2: Enable the bundle

Enable the bundle in the kernel:


``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Pulpmedia\P3PCookieBundle\PulpmediaP3PCookieBundle(),
    );
}
```


### Step 3: Done

Your response headers will have the required P3P settings to enable cookie storage inside iFrames for Internet Explorer

License
-------

This bundle is under the MIT license. 