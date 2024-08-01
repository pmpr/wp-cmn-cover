<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ab90935bcac             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\162\145\141\144\143\x72\x75\155\x62\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\145\146\157\x72\x65\x5f\x63\162\145\x61\164\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto kiqogmwcgcamwiig; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto yowsmsiyimmimemc; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); yowsmsiyimmimemc: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\x6c\x6c\157\167\137\x72\x65\156\144\x65\x72", $cuakwceieagskoaa, $post); kiqogmwcgcamwiig: return $cuakwceieagskoaa; } }
