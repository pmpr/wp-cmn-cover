<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65197b833f854             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\x62\162\x65\x61\x64\143\162\165\x6d\x62\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\145\146\x6f\x72\x65\137\x63\162\x65\141\x74\x65\x5f"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto cmegwsegsosyqcai; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto ewymsmkkiksgwysk; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); ewymsmkkiksgwysk: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\x6c\x6c\x6f\x77\137\x72\145\x6e\x64\145\x72", $cuakwceieagskoaa, $post); cmegwsegsosyqcai: return $cuakwceieagskoaa; } }
