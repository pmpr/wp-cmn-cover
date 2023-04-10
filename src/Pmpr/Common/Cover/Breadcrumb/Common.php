<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643427399b410             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\x72\x65\141\144\143\x72\165\x6d\142\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\x65\146\157\x72\x65\137\143\x72\145\141\164\x65\x5f"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(MetaBox::mgimioakqsosoqcc)) { goto qmoocweoekqueuyy; } $cuakwceieagskoaa = true; if (!($post = (string) ManipulatePost::mwikyscisascoeea($post))) { goto mqiiqkuaoekeuswo; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(MetaBox::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); mqiiqkuaoekeuswo: $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\141\154\x6c\157\x77\x5f\x72\145\x6e\x64\145\162"), $cuakwceieagskoaa, $post); qmoocweoekqueuyy: return $cuakwceieagskoaa; } }
