<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6236558843ba2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Customize\Setting; use Pmpr\Common\Foundation\Decorator\DecoratorOption; class SiteOption extends Setting { public $type = "\x73\151\164\x65\137\x6f\160\164\151\157\156"; protected function get_root_value($ggauoeuaesiymgee = null) { return DecoratorOption::kuaqqosyyoqiueym($this->id_data["\142\141\163\x65"], $ggauoeuaesiymgee); } protected function set_root_value($eqgoocgaqwqcimie) : bool { return DecoratorOption::okkueywgeygcooye($this->id_data["\x62\141\163\x65"], $eqgoocgaqwqcimie); } protected function update($eqgoocgaqwqcimie) : bool { return $this->set_root_value($eqgoocgaqwqcimie); } public function value() { return $this->get_root_value($this->default); } }
