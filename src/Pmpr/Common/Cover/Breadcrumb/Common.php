<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65782c408de8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\x62\x72\x65\x61\x64\143\x72\x75\155\142\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\x65\x66\x6f\x72\145\137\143\x72\145\141\x74\x65\x5f"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto qgeugwymkkiacwoc; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto mqicocmqegwukkwg; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); mqicocmqegwukkwg: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\154\154\157\167\x5f\x72\145\156\x64\145\x72", $cuakwceieagskoaa, $post); qgeugwymkkiacwoc: return $cuakwceieagskoaa; } }
