<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63cff74dd8c36             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\162\145\x61\x64\143\162\165\x6d\x62\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\142\x65\x66\x6f\x72\x65\x5f\x63\162\x65\x61\164\145\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(MetaBox::mgimioakqsosoqcc)) { goto sguskaeaaqcagqgc; } $cuakwceieagskoaa = true; if (!($post = (string) ManipulatePost::mwikyscisascoeea($post))) { goto yuuyikiacmmueosu; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(MetaBox::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); yuuyikiacmmueosu: $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\141\154\154\x6f\x77\x5f\162\145\156\144\145\162"), $cuakwceieagskoaa, $post); sguskaeaaqcagqgc: return $cuakwceieagskoaa; } }
