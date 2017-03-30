<?hh  // strict

require_once '../vendor/hh_autoload.php';

trait PageWithNav {
  public function getNav(): :xhp {
    return
      <navbar/>;
  }
}
