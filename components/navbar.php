<?hh // strict

class :navbar extends :x:element {

  protected function render(): XHPRoot {
    $title = <div>HHVM Site</div>;
    $title->addClass("header");

    $subtitle = <h3>with Routing and Autoloading </h3>;
    $subtitle->addClass("subtitle");

    $container = <div><main:logo/>{$title}{$subtitle}</div>;
    $container->addClass("container");

    $navbar = <div>{$container}</div>;
    $navbar->addClass("navbar");

    return $navbar;
  }

}
