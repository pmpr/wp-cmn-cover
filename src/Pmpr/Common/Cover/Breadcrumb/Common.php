<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638bc0b520799             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\x62\162\x65\x61\x64\143\x72\165\155\142\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\145\x66\157\x72\145\x5f\x63\x72\x65\141\164\x65\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(MetaBox::mgimioakqsosoqcc)) { goto uiosisocuwokwkie; } $cuakwceieagskoaa = true; if (!($post = (string) ManipulatePost::mwikyscisascoeea($post))) { goto iikiiioqiyegyaak; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(MetaBox::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); iikiiioqiyegyaak: $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\x61\x6c\x6c\x6f\x77\137\x72\x65\156\x64\x65\x72"), $cuakwceieagskoaa, $post); uiosisocuwokwkie: return $cuakwceieagskoaa; } }
