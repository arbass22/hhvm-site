<?hh // strict

class :navbar extends :x:element {

  private string $img_url = "http://static.wixstatic.com/media/03e4ae_491a6fdf5e444c4f8072e31ac246890c~mv2.png_srz_269_222_85_22_0.50_1.20_0.00_png_srz";

  protected function render(): XHPRoot {
    $title = <div>UMass TextSwap</div>;
    $title->addClass("header");

    $logo = <img src={$this->img_url} height={75} />;

    $container = <div>{$logo}{$title}</div>;
    $container->addClass("container");

    $navbar = <div>{$container}</div>;
    $navbar->addClass("navbar");

    return $navbar;
  }

}
