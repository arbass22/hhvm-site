<?hh

final class OtherController extends WebController {

  use PageWithNav;

  public static function getUriPattern(): Facebook\HackRouter\UriPattern {
    return (new Facebook\HackRouter\UriPattern())
      ->literal('/other');
  }

  <<__Override>>
  protected function getTitle(): string {
    return "Other page";
  }

  <<__Override>>
  protected function getCSS(): Set<string> {
    return Set{
      "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css",
      "css/main.css"
    };
  }

  <<__Override>>
  protected function getJS(): Set<string> {
    return Set{};
  }

  <<__Override>>
  public async function genRender(): Awaitable<:xhp> {
    return
      <div>
      {$this->getNav()}
      <h1>Other page</h1>
      </div>;
  }

}
