<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638c7bcb05372             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\x62\162\x65\141\x64\x63\x72\x75\x6d\142\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\145\x66\157\162\145\x5f\x63\162\145\141\x74\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(MetaBox::mgimioakqsosoqcc)) { goto cuumeogeomowqisc; } $cuakwceieagskoaa = true; if (!($post = (string) ManipulatePost::mwikyscisascoeea($post))) { goto uiosisocuwokwkie; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(MetaBox::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); uiosisocuwokwkie: $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\x61\x6c\x6c\x6f\167\x5f\162\145\156\x64\x65\162"), $cuakwceieagskoaa, $post); cuumeogeomowqisc: return $cuakwceieagskoaa; } }
