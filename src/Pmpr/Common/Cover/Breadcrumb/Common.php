<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f7d8e73847a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\162\x65\141\144\143\x72\165\155\x62\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\145\x66\x6f\162\145\x5f\x63\x72\145\x61\x74\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto kyggwyywiycksgqq; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto gyeayeuuyiemuwuq; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); gyeayeuuyiemuwuq: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\154\154\157\167\137\x72\x65\156\144\145\162", $cuakwceieagskoaa, $post); kyggwyywiycksgqq: return $cuakwceieagskoaa; } }
