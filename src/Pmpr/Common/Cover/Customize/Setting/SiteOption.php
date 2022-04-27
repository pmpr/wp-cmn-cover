<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62698766eff8c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customize\Setting; use Pmpr\Common\Foundation\Decorator\DecoratorOption; class SiteOption extends Setting { public $type = "\163\151\164\145\137\157\160\x74\151\157\x6e"; protected function get_root_value($ggauoeuaesiymgee = null) { return DecoratorOption::kuaqqosyyoqiueym($this->id_data["\x62\141\163\x65"], $ggauoeuaesiymgee); } protected function set_root_value($eqgoocgaqwqcimie) : bool { return DecoratorOption::okkueywgeygcooye($this->id_data["\142\141\163\x65"], $eqgoocgaqwqcimie); } protected function update($eqgoocgaqwqcimie) : bool { return $this->set_root_value($eqgoocgaqwqcimie); } public function value() { return $this->get_root_value($this->default); } }
