<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668f1d166ebcf             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; abstract class Common extends Container { const iukiayaokaiiicwo = "\x62\162\x65\x61\x64\143\x72\x75\155\x62\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\145\146\x6f\x72\145\137\x63\x72\x65\141\164\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto wgewmqieuamsoayy; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto ugqaaewwmkocwwgy; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); ugqaaewwmkocwwgy: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\x6c\154\157\x77\137\x72\x65\156\144\x65\162", $cuakwceieagskoaa, $post); wgewmqieuamsoayy: return $cuakwceieagskoaa; } }
