<?hh // strict

class :navbar extends :x:element {

  protected function render(): XHPRoot {
    $title = <div>UMass TextSwap</div>;
    $title->addClass("header");

    $container = <div><main:logo/>{$title}</div>;
    $container->addClass("container");

    $navbar = <div>{$container}</div>;
    $navbar->addClass("navbar");

    return $navbar;
  }

}
