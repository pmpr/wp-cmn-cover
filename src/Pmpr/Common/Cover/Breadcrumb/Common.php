<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6562270dac5c4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\162\145\x61\x64\143\162\x75\x6d\142\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\x65\x66\157\162\x65\x5f\x63\x72\x65\x61\x74\x65\x5f"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto qesqgumuouyymcwa; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto aqigiwmamkowomiw; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); aqigiwmamkowomiw: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\x6c\154\157\167\x5f\x72\x65\156\144\x65\x72", $cuakwceieagskoaa, $post); qesqgumuouyymcwa: return $cuakwceieagskoaa; } }
