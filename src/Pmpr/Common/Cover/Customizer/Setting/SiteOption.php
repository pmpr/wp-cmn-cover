<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6884a9e043c30             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Customizer\Setting; class SiteOption extends Setting { public $type = 'site_option'; protected function get_root_value($ggauoeuaesiymgee = null) { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->kuaqqosyyoqiueym($this->id_data['base'], $ggauoeuaesiymgee); } protected function set_root_value($eqgoocgaqwqcimie) : bool { return $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq()->okkueywgeygcooye($this->id_data['base'], $eqgoocgaqwqcimie); } protected function update($eqgoocgaqwqcimie) : bool { return $this->set_root_value($eqgoocgaqwqcimie); } public function value() { return $this->get_root_value($this->default); } }
