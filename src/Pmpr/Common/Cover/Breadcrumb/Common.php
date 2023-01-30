<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63d8301100b18             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Breadcrumb; use Pmpr\Common\Cover\Container; use Pmpr\Common\Cover\Setting; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; abstract class Common extends Container { const iukiayaokaiiicwo = "\142\162\x65\141\144\x63\x72\x75\x6d\142\x5f"; const ggcmgaccygaquiwu = self::iukiayaokaiiicwo . "\x62\145\x66\x6f\x72\x65\137\143\x72\x65\141\164\x65\x5f"; public function uiqcwsowwswommka($post = null) : bool { $cuakwceieagskoaa = false; if (!Setting::eiwcuqigayigimak(MetaBox::mgimioakqsosoqcc)) { goto oocuemosmeeekgas; } $cuakwceieagskoaa = true; if (!($post = (string) ManipulatePost::mwikyscisascoeea($post))) { goto syuaummumssgwwee; } $couiucmsqaieciue = Setting::eiwcuqigayigimak(MetaBox::gsqueoqmwgwgykuy, []); $cuakwceieagskoaa = !in_array($post, $couiucmsqaieciue, true); syuaummumssgwwee: $cuakwceieagskoaa = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw(self::iukiayaokaiiicwo . "\x61\x6c\x6c\157\167\137\x72\145\x6e\x64\145\x72"), $cuakwceieagskoaa, $post); oocuemosmeeekgas: return $cuakwceieagskoaa; } }
