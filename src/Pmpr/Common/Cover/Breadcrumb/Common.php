<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             655dfe8a4a608             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\x72\145\141\x64\143\162\x75\155\x62\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\145\146\157\x72\145\137\143\162\145\x61\x74\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto qesqgumuouyymcwa; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto aqigiwmamkowomiw; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); aqigiwmamkowomiw: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\x6c\x6c\x6f\167\137\x72\x65\x6e\x64\145\162", $cuakwceieagskoaa, $post); qesqgumuouyymcwa: return $cuakwceieagskoaa; } }
