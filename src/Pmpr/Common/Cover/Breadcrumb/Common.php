<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a85407a67e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\x62\162\x65\x61\144\x63\162\165\155\142\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\145\x66\x6f\162\145\137\x63\162\145\x61\x74\x65\x5f"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(MetaBox::mgimioakqsosoqcc)) { goto uiosisocuwokwkie; } $cuakwceieagskoaa = true; if (!($post = (string) ManipulatePost::mwikyscisascoeea($post))) { goto iikiiioqiyegyaak; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(MetaBox::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); iikiiioqiyegyaak: $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\141\154\x6c\157\x77\137\x72\x65\x6e\x64\x65\162"), $cuakwceieagskoaa, $post); uiosisocuwokwkie: return $cuakwceieagskoaa; } }
