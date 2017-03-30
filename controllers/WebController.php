<?hh // strict

use Facebook\HackRouter\{
  IncludeInUriMap,
  SupportsGetRequests,
  HasUriPattern
};

abstract class WebController
  implements IncludeInUriMap, HasUriPattern, SupportsGetRequests {

  abstract protected function getCSS(): Set<string>;
  abstract protected function getJS(): Set<string>;
  abstract protected function getTitle(): string;
  abstract protected function genRender(): Awaitable<:xhp>;

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
    echo \HH\Asio\join($this->genRender());
  }
}
