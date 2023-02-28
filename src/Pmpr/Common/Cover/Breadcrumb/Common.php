<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63fe352cd71f1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\x62\x72\145\x61\x64\x63\x72\165\x6d\x62\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\145\146\157\162\x65\x5f\143\x72\145\x61\164\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(MetaBox::mgimioakqsosoqcc)) { goto cgiscsqwwgqqaeqi; } $cuakwceieagskoaa = true; if (!($post = (string) ManipulatePost::mwikyscisascoeea($post))) { goto skkamseieeusycye; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(MetaBox::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); skkamseieeusycye: $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\x61\x6c\x6c\157\167\x5f\162\x65\156\x64\145\162"), $cuakwceieagskoaa, $post); cgiscsqwwgqqaeqi: return $cuakwceieagskoaa; } }
