<?hh

final class OtherController extends WebController {

  public static function getUriPattern(): Facebook\HackRouter\UriPattern {
    return (new Facebook\HackRouter\UriPattern())
      ->literal('/other');
  }

  <<__Override>>
  protected function getTitle(): string {
    return "Other Page";
  }

  <<__Override>>
  public async function genRender(): Awaitable<:xhp> {
    return (
      <div>
        <h1>Other page</h1>
      </div>
    );
  }

}
