<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             667883761741c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\x72\x65\141\144\143\x72\x75\x6d\x62\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\145\x66\157\x72\145\137\x63\x72\145\x61\164\x65\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto ksckqkmwiqggykke; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto mimacwyuueomgwwy; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); mimacwyuueomgwwy: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\x6c\x6c\157\x77\137\162\145\x6e\x64\145\x72", $cuakwceieagskoaa, $post); ksckqkmwiqggykke: return $cuakwceieagskoaa; } }
