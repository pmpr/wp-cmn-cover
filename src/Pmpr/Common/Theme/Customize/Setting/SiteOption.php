<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6224edbd9ea49             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Theme\Customize\Setting; use Pmpr\Common\Foundation\Decorator\DecoratorOption; class SiteOption extends Setting { public $type = "\163\151\164\145\x5f\157\160\x74\x69\x6f\x6e"; protected function get_root_value($ggauoeuaesiymgee = null) { return DecoratorOption::kuaqqosyyoqiueym($this->id_data["\x62\x61\163\x65"], $ggauoeuaesiymgee); } protected function set_root_value($eqgoocgaqwqcimie) : bool { return DecoratorOption::okkueywgeygcooye($this->id_data["\x62\x61\163\145"], $eqgoocgaqwqcimie); } protected function update($eqgoocgaqwqcimie) : bool { return $this->set_root_value($eqgoocgaqwqcimie); } public function value() { return $this->get_root_value($this->default); } }
