<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebd2b1ff7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\x72\x65\x61\x64\x63\162\x75\155\142\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\145\x66\x6f\162\x65\137\x63\162\145\141\164\x65\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto kocqqoyymosmuksu; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto iuuuususuuuaieem; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); iuuuususuuuaieem: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\154\154\x6f\167\x5f\x72\145\156\144\x65\162", $cuakwceieagskoaa, $post); kocqqoyymosmuksu: return $cuakwceieagskoaa; } }
