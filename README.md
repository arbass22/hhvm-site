# hhvm-site
This is a boiler-plate HHVM site.  It includes auto-generated routing and can support auto-loading classes. To support the 
routing, HHVM should be setup behind a reverse-proxy such as nginx.

## Getting Started
1. Install and setup HHVM and nginx, good tutorial can be found [here](https://www.digitalocean.com/community/tutorials/how-to-install-hhvm-with-nginx-on-ubuntu-14-04).
We will make some changes to the nginx configuration to allow our routing to work properly.

## Usage
### Adding a new controller
If you want to add a new controller to the site you should extend `WebController`.  Subclasses will be included in the
url map generated by the router and thus will be able to be reach by a url.  In your new controller, you should override 
the `getUriPattern()` method and return your new `UrlPattern`.  A simple implementation might be:
```hack
  <<__Override>>
  public static function getUriPattern(): UriPattern {
    return (new UriPattern())
      ->literal('/users/')
      ->string('user_name');
  }
```
This controller would be invoked for urls such as www.yourdomain.com/users/arbass22. Whenever you add a controller or change
the implementation of this method you will need to regenerate the router.  From the project root, run `$ hhvm build_router.php`.

### Adding a new class
If you add a new .php class then you will want it to be autoloaded so you can reference it in different files without having to manually include it.  Whenever you add a new class you will have to regenerate the autoloader.  You should tell composer to dump its current autoload, so try runnng `$ hhvm composer.phar dump-autoload` or `$ hhvm /usr/local/bin/composer dump-autoload` referencing wherever the composer binary is installed.
