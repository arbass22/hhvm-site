<?hh // strict

use Facebook\HackRouter\UriPattern;

final class NotFoundController extends WebController {

  <<__Override>>
  public static function getUriPattern(): UriPattern {
    return (new UriPattern())
      ->literal('/notfound');
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
    protected function getTitle(): string {
      return "HomePage";
    }

    <<__Override>>
    public async function genRender(): Awaitable<:xhp> {
      return
      <div>
      <h1>404 - Whaaat??</h1>
      </div>;
    }

  }
