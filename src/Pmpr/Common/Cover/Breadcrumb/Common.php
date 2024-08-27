<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce633b36061             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\162\x65\141\x64\143\162\x75\x6d\x62\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\x65\146\157\x72\145\137\x63\162\145\141\x74\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto ecouwqosmoyyqmkw; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto eckcqesiokgwkkiw; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); eckcqesiokgwkkiw: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\x6c\x6c\x6f\167\137\x72\145\x6e\x64\x65\162", $cuakwceieagskoaa, $post); ecouwqosmoyyqmkw: return $cuakwceieagskoaa; } }
