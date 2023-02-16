<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63ee0eaf0b376             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\x72\x65\x61\x64\x63\x72\165\x6d\x62\137"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\145\x66\x6f\162\145\x5f\x63\162\x65\x61\x74\x65\137"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(MetaBox::mgimioakqsosoqcc)) { goto oocuemosmeeekgas; } $cuakwceieagskoaa = true; if (!($post = (string) ManipulatePost::mwikyscisascoeea($post))) { goto syuaummumssgwwee; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(MetaBox::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); syuaummumssgwwee: $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\141\x6c\x6c\157\167\137\x72\145\156\144\145\x72"), $cuakwceieagskoaa, $post); oocuemosmeeekgas: return $cuakwceieagskoaa; } }
