<?hh

class :main:logo extends :x:element {

  private string $img_url = "http://static.wixstatic.com/media/03e4ae_491a6fdf5e444c4f8072e31ac246890c~mv2.png_srz_269_222_85_22_0.50_1.20_0.00_png_srz";

  protected function render(): XHPRoot {
    $link = HomeController::getUriBuilder()->getPath();
    return (
      <a href={$link}>
        <img src={$this->img_url} height={75} />
      </a>
    );
  }
}
