<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6441752d7ba3f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\x72\x65\141\144\143\x72\x75\x6d\142\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\x65\146\x6f\162\x65\x5f\143\162\x65\x61\x74\x65\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto sqwuqegeiisoiiuq; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto eouwacqiommmeaqc; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); eouwacqiommmeaqc: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\x61\154\x6c\x6f\x77\x5f\x72\145\156\x64\x65\162", $cuakwceieagskoaa, $post); sqwuqegeiisoiiuq: return $cuakwceieagskoaa; } }
