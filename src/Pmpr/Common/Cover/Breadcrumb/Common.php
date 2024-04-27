<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             662d5a8e62a84             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { const iukiayaokaiiicwo = "\x62\162\145\141\144\143\x72\x75\x6d\142\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\145\x66\157\162\145\x5f\x63\x72\x65\x61\x74\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto uegouoiuyoqkcscg; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto mggeqkcksyaymcsa; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); mggeqkcksyaymcsa: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\154\154\157\167\x5f\162\145\156\x64\145\162", $cuakwceieagskoaa, $post); uegouoiuyoqkcscg: return $cuakwceieagskoaa; } }
