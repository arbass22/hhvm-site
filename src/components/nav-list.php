<?hh

class :nav:list extends :x:element {

  protected function render(): XHPRoot {
    // Generate a link to the HomeController
    $link = HomeController::getUriBuilder()->getPath();
    return (
      <div class="navbar-list">
        <a class="navbar-link" href={HomeController::getUriBuilder()->getPath()}>
          Home
        </a>
        <a class="navbar-link" href={OtherController::getUriBuilder()->getPath()}>
          Other
        </a>
      </div>
    );
  }
}
