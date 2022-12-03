<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638b366f61e05             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\x62\x72\145\x61\x64\x63\162\x75\155\x62\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\x65\x66\157\162\145\137\x63\162\145\141\164\x65\x5f"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(MetaBox::mgimioakqsosoqcc)) { goto uiosisocuwokwkie; } $cuakwceieagskoaa = true; if (!($post = (string) ManipulatePost::mwikyscisascoeea($post))) { goto iikiiioqiyegyaak; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(MetaBox::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); iikiiioqiyegyaak: $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\141\x6c\x6c\x6f\167\x5f\162\145\156\144\x65\x72"), $cuakwceieagskoaa, $post); uiosisocuwokwkie: return $cuakwceieagskoaa; } }
