<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a6929f34ef             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\x62\x72\145\141\x64\143\162\165\x6d\142\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\x65\x66\x6f\162\145\137\143\x72\x65\x61\x74\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(MetaBox::mgimioakqsosoqcc)) { goto uiosisocuwokwkie; } $cuakwceieagskoaa = true; if (!($post = (string) ManipulatePost::mwikyscisascoeea($post))) { goto iikiiioqiyegyaak; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(MetaBox::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); iikiiioqiyegyaak: $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\x61\x6c\x6c\x6f\x77\137\162\145\x6e\x64\x65\162"), $cuakwceieagskoaa, $post); uiosisocuwokwkie: return $cuakwceieagskoaa; } }
