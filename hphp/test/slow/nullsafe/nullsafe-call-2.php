<?hh // strict
class C {
  public function foo(): D {
    return new D();
  }
}
class D {}
function test(?C $c): D {
  return $c?->foo();
}
function main(): void {
  $c = new C();
  var_dump(test($c));
  var_dump(test(null));
}
main();
