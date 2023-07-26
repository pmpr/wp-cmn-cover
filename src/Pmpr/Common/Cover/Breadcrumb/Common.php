<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64c1373b7ef7c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\x72\x65\x61\144\x63\x72\x75\155\142\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\145\146\x6f\162\x65\x5f\x63\x72\x65\x61\164\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(SettingSection::mgimioakqsosoqcc)) { goto gkyawqqcmigqgaiq; } $cuakwceieagskoaa = true; if (!($post = (string) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto wmywuusgukmmaams; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(SettingSection::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); wmywuusgukmmaams: $cuakwceieagskoaa = $this->ocksiywmkyaqseou(self::iukiayaokaiiicwo . "\141\154\x6c\x6f\167\x5f\162\145\x6e\144\x65\162", $cuakwceieagskoaa, $post); gkyawqqcmigqgaiq: return $cuakwceieagskoaa; } }
