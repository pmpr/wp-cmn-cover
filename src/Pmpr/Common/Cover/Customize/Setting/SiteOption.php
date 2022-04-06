<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             624d7f2ed469f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize\Setting; use Pmpr\Common\Foundation\Decorator\DecoratorOption; class SiteOption extends Setting { public $type = "\x73\151\x74\145\137\157\x70\164\x69\157\156"; protected function get_root_value($ggauoeuaesiymgee = null) { return DecoratorOption::kuaqqosyyoqiueym($this->id_data["\142\x61\163\145"], $ggauoeuaesiymgee); } protected function set_root_value($eqgoocgaqwqcimie) : bool { return DecoratorOption::okkueywgeygcooye($this->id_data["\x62\x61\x73\x65"], $eqgoocgaqwqcimie); } protected function update($eqgoocgaqwqcimie) : bool { return $this->set_root_value($eqgoocgaqwqcimie); } public function value() { return $this->get_root_value($this->default); } }
