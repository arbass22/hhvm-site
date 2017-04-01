<?hh // strict

use Facebook\HackRouter\UriPattern;

final class HomeController extends WebController {

  /* Whenever you implement or change this method in a controller
    you must re-generate the router */
  <<__Override>>
  public static function getUriPattern(): UriPattern {
    return (new UriPattern())
      ->literal('/');
  }


  <<__Override>>
  protected function getTitle(): string {
    return "HomePage";
  }

  <<__Override>>
  public async function genRender(): Awaitable<:xhp> {
    return (
      <div>
        <h1>HomePage</h1>
      </div>
    );
  }
  
}
