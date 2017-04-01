<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * To re-generate this file run /home/andrew/www/hhvm-site/build_router.php
 *
 *
 * @generated SignedSource<<1b56c24985eb661114dbef166a9d3cb2>>
 */

<<Codegen>>
final class Router
  extends \Facebook\HackRouter\BaseRouter<classname<\Facebook\HackRouter\IncludeInUriMap>> {

  <<__Override>>
  final public function getRoutes(
  ): ImmMap<\Facebook\HackRouter\HttpMethod, ImmMap<string, classname<\Facebook\HackRouter\IncludeInUriMap>>> {
    $map = ImmMap {
      \Facebook\HackRouter\HttpMethod::GET => ImmMap {
        '/' => \HomeController::class,
        '/notfound' => \NotFoundController::class,
        '/other' => \OtherController::class,
      },
    };
    return $map;
  }
}
