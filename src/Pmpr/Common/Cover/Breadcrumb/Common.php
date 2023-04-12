<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6436caf32c6f6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\x72\145\141\144\x63\x72\x75\x6d\x62\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\145\146\157\x72\x65\x5f\143\162\145\141\x74\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(MetaBox::mgimioakqsosoqcc)) { goto sgiwoiscywusgmmm; } $cuakwceieagskoaa = true; if (!($post = (string) ManipulatePost::mwikyscisascoeea($post))) { goto qmoocweoekqueuyy; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(MetaBox::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); qmoocweoekqueuyy: $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\141\154\x6c\x6f\167\x5f\162\145\x6e\144\145\x72"), $cuakwceieagskoaa, $post); sgiwoiscywusgmmm: return $cuakwceieagskoaa; } }
