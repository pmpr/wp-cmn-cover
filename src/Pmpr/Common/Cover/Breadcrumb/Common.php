<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64a18c10ab307             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\x72\x65\141\x64\x63\162\x75\x6d\142\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\x65\146\157\162\x65\137\143\162\x65\x61\164\145\x5f"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto qgoiooayqmqqsiok; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto qogqewiwmwiwskgm; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); qogqewiwmwiwskgm: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\154\154\x6f\x77\137\x72\x65\156\x64\x65\162", $cuakwceieagskoaa, $post); qgoiooayqmqqsiok: return $cuakwceieagskoaa; } }
