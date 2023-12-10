<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6576046f6e4ca             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\x62\162\145\x61\x64\143\x72\x75\x6d\142\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\x65\146\157\162\145\137\143\x72\145\141\x74\x65\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto qgeugwymkkiacwoc; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto mqicocmqegwukkwg; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); mqicocmqegwukkwg: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\154\x6c\x6f\167\x5f\162\145\x6e\x64\x65\162", $cuakwceieagskoaa, $post); qgeugwymkkiacwoc: return $cuakwceieagskoaa; } }
