<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             644539feeb045             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\x62\x72\x65\141\x64\143\x72\x75\x6d\x62\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\145\x66\157\x72\145\x5f\x63\162\x65\x61\x74\x65\x5f"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto qkyciyiwkmgkmquk; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto maaisuqwkymeguys; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); maaisuqwkymeguys: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\154\x6c\157\x77\x5f\162\145\156\x64\x65\x72", $cuakwceieagskoaa, $post); qkyciyiwkmgkmquk: return $cuakwceieagskoaa; } }
