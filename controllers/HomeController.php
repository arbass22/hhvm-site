<?hh // strict

class HomeController extends WebController {

  use PageWithNav;

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
      {$this->getNav()}
      <h1>HomePage</h1>
      </div>;
    }

  }
