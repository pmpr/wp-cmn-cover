<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6575f4385d248             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\162\x65\141\144\x63\162\x75\155\142\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\145\146\157\162\x65\x5f\x63\162\x65\x61\164\145\x5f"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto qgeugwymkkiacwoc; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto mqicocmqegwukkwg; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); mqicocmqegwukkwg: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\154\154\157\x77\x5f\x72\145\x6e\x64\x65\x72", $cuakwceieagskoaa, $post); qgeugwymkkiacwoc: return $cuakwceieagskoaa; } }
