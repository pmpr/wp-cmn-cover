<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662d6d105d6a3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\x72\145\141\144\x63\x72\x75\155\x62\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\145\146\157\x72\145\x5f\143\162\145\141\164\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto uegouoiuyoqkcscg; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto mggeqkcksyaymcsa; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); mggeqkcksyaymcsa: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\154\x6c\157\x77\137\x72\x65\156\144\x65\x72", $cuakwceieagskoaa, $post); uegouoiuyoqkcscg: return $cuakwceieagskoaa; } }
