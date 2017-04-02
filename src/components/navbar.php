<?hh // strict

class :navbar extends :x:element {

  protected function render(): XHPRoot {
    return (
      <x:frag>
        <div class="navbar">
          <div class="container">
            <main:logo />
            <div class="header">HHVM Site2</div>
            <h3 class="subtitle">with Routing and Autoloading </h3>
            <nav:list />
          </div>
        </div>
      </x:frag>
    );
  }

}
