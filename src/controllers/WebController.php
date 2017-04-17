<?hh // strict

use Facebook\HackRouter\{
  IncludeInUriMap,
  SupportsGetRequests,
  HasUriPattern,
  GetUriBuilderFromUriPattern
};

abstract class WebController
  implements IncludeInUriMap, HasUriPattern, SupportsGetRequests {

  use GetUriBuilderFromUriPattern;

  abstract protected function getTitle(): string;
  abstract protected function genRender(): Awaitable<:xhp>;

  private function getCSS(): Set<string> {
    // These are the css classes that should be included on every page
    $set = Set{
      "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css",
      "css/main.css"
    };
    return $set->addAll($this->getExtraCSS());
  }

  private function getJS(): Set<string> {
    // These are the js files that should be indlude on every page,
    // feel free to include files from a CDN.
    $set = Set{};
    return $set->addAll($this->getExtraJS());
  }

  //Override this method to include extra css files
  protected function getExtraCSS(): Set<string> {
    return Set{};
  }

  // Override this method to include exta javascript files
  protected function getExtraJS(): Set<string> {
    return Set{};
  }

  final private function getHead(): :xhp {
    $css = $this->getCSS()->toVector()->map(
      ($css) ==> <link rel="stylesheet" type="text/css" href={$css} />
    );
    $js = $this->getJS()->toVector()->map(
      ($js) ==> <script src={$js} />
    );

    return
      <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>{$this->getTitle()}</title>
        {$css->toArray()}
        {$js->toArray()}
      </head>;
  }

  final public function renderTotalPage(): void {
    echo "<!DOCTYPE html>";
    echo $this->getHead();
    echo <navbar/>;
    echo \HH\Asio\join($this->genRender());
  }
}
