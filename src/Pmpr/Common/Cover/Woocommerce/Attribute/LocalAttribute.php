<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6c83ea60             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Checkbox; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use WC_Product_Attribute; class LocalAttribute extends BaseAttribute { public function __construct() { $this->name = "\154\157\x63\x61\154"; parent::__construct(); } public function wigskegsqequoeks() { $this->koaegcswmcqsiykq("\167\157\157\x63\x6f\x6d\x6d\x65\x72\143\145\137\163\x61\x76\x65\137\141\x74\x74\162\x69\142\165\x74\x65\x73", [$this, "\163\x61\x76\x65"], 5)->qcsmikeggeemccuu("\167\157\x6f\x63\x6f\x6d\x6d\x65\162\x63\145\137\x61\x66\164\145\x72\x5f\160\x72\x6f\144\165\x63\x74\x5f\x61\164\x74\x72\x69\x62\x75\x74\x65\137\163\x65\164\164\151\x6e\147\x73", [$this, "\151\165\141\165\x63\165\x6f\x6f\153\147\x6f\161\x69\x69\151\x6f"], 10, 2); parent::wigskegsqequoeks(); } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->scemgqiggsykoisk($ymkomoccmymcoiea->get_name()); } public function save() { if (!$this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->mquqkouuagswyuuk("\x73\141\x76\x65\x2d\x61\x74\164\162\151\x62\x75\x74\x65\163", "\x73\145\x63\x75\x72\x69\x74\x79")) { goto rgaagksgsewuwgmo; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); parse_str($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uiwqcumqkgikqyue), $icwicymcioeyeyek); $aiwgcyaewwagisoo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, "\141\x74\x74\162\151\x62\x75\x74\x65\137\x6e\141\155\x65\163"); if (!($icwicymcioeyeyek && $aiwgcyaewwagisoo)) { goto kwayumouacgkgyas; } $product = $this->aqasygcsqysmmyke(); $ikgwqyuyckaewsow = array_merge($this->ugmceccgwaaaigiy($product), GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product)); [$ikgwqyuyckaewsow, $icwicymcioeyeyek] = $this->caokeucsksukesyo()->wmkogisswkckmeua()->yemoaoaqkmkigwis($ikgwqyuyckaewsow, $icwicymcioeyeyek); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto kgqgcggccmiwayua; } $aokagokqyuysuksm = $aiowsaccomcoikus->mwikyscisascoeea(); $qqswgiawgeaeoecu = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, $aokagokqyuysuksm, []); if (!(is_array($qqswgiawgeaeoecu) && $qqswgiawgeaeoecu)) { goto cwyaysecsakaqgew; } foreach ($aiwgcyaewwagisoo as $momcykaoccoymeig => $ymqmyyeuycgmigyo) { $uusmaiomayssaecw = $aokagokqyuysuksm . $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->scemgqiggsykoisk($ymqmyyeuycgmigyo); $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($qqswgiawgeaeoecu, $momcykaoccoymeig); if ($eqgoocgaqwqcimie) { goto wsqeiwkgoiekwasy; } $seumokooiykcomco->smqukgcyacswysqa($uusmaiomayssaecw, $product); goto swesqeqmagkicuws; wsqeiwkgoiekwasy: $seumokooiykcomco->ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $product); swesqeqmagkicuws: smmagoyuqoigoesc: } ayucsuwsiocgycww: cwyaysecsakaqgew: kgqgcggccmiwayua: eiicmcasqikiyasw: } gmsyoscesymiwwue: kwayumouacgkgyas: rgaagksgsewuwgmo: } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw($qqgocisyeuuqmcwc . $ymkomoccmymcoiea, $this->aqasygcsqysmmyke(), true); } public function iuaucuookgoqiiio($ymkomoccmymcoiea, $momcykaoccoymeig) { if (!$ymkomoccmymcoiea instanceof WC_Product_Attribute) { goto qysmyemoucigsmua; } $product = $this->aqasygcsqysmmyke(); $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy($product); if ($ymkomoccmymcoiea->is_taxonomy()) { goto mcmcocyuugueaeww; } $ikgwqyuyckaewsow = array_merge($ikgwqyuyckaewsow, GlobalAttribute::symcgieuakksimmu()->ugmceccgwaaaigiy($product)); mcmcocyuugueaeww: if (!($ikgwqyuyckaewsow = $this->uiwgikskqiusqook($ikgwqyuyckaewsow, $this->uqsmmauywmsuqais($ymkomoccmymcoiea), $momcykaoccoymeig))) { goto kygccamgawookukq; } $ikgwqyuyckaewsow = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ikgwqyuyckaewsow); $nsmgceoqaqogqmuw = ''; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto agsuaimomgsoyiem; } $aiowsaccomcoikus->ggiaseqygioygumq("{$aiowsaccomcoikus->mwikyscisascoeea()}\x5b{$momcykaoccoymeig}\x5d"); $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render(); agsuaimomgsoyiem: iwsaaiggkciigsmc: } eucakkcoiiwkwsme: echo $this->iuygowkemiiwqmiw("\146\x6f\x72\x6d", [Constants::gouqcwikiiygyasc => $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(5), Constants::qescuiwgsyuikume => __("\103\x75\163\x74\157\x6d\x20\106\151\x65\154\x64\x73", PR__CMN__COVER), Constants::ymckmcsiymwqucoq => $nsmgceoqaqogqmuw, "\x63\141\156\137\x61\x64\x64\137\152\163" => $this->caokeucsksukesyo()->owicscwgeuqcqaig()->mcgoysmkqsqooceq(), "\141\x6c\x65\162\164\x5f\x6d\x65\x73\x73\141\x67\145" => __("\x43\141\156\40\x6e\157\x74\x20\162\x65\x6e\144\145\x72\40\x66\151\x65\x6c\144\x73\x20\143\x6f\x72\162\145\143\x74\154\x79\x2c\40\160\154\x65\141\163\x65\x20\162\145\x66\162\x65\163\x68\x20\160\141\147\x65\40\x6d\x61\x6e\x75\x61\154\x6c\x79\56", PR__CMN__COVER), "\163\x75\x63\143\145\x73\163\137\155\145\x73\163\141\x67\145" => __("\146\x69\x65\154\x64\163\40\154\x6f\141\x64\145\144\x20\x63\x6f\162\x72\x65\x63\164\154\x79\56", PR__CMN__COVER)]); kygccamgawookukq: qysmyemoucigsmua: } public function uiwgikskqiusqook($ikgwqyuyckaewsow = [], $ymqmyyeuycgmigyo = '', $momcykaoccoymeig = 0) : array { if (!$ikgwqyuyckaewsow) { goto gcaykgmmmqomsyis; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); parse_str($this->caokeucsksukesyo()->giiecckwoyiawoyy()->ayueggmoqeeukqmq(Constants::uiwqcumqkgikqyue), $icwicymcioeyeyek); $product = $this->aqasygcsqysmmyke(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ocwouquuwsaqakae; } $uusmaiomayssaecw = $aiowsaccomcoikus->mwikyscisascoeea(); $eqgoocgaqwqcimie = false; if ($icwicymcioeyeyek && isset($icwicymcioeyeyek[$uusmaiomayssaecw])) { goto qoacckkkwsqkokye; } if (!$product) { goto tagquiiokseckkqs; } $eqgoocgaqwqcimie = $this->qooeaookuemoqecm($uusmaiomayssaecw, $ymqmyyeuycgmigyo); tagquiiokseckkqs: goto swuggqyiaiqywgge; qoacckkkwsqkokye: if ($aiowsaccomcoikus instanceof Checkbox) { goto gkeymcqqsewayscs; } $eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($icwicymcioeyeyek[$uusmaiomayssaecw], $momcykaoccoymeig, $icwicymcioeyeyek[$uusmaiomayssaecw]); goto qwiyicoywcekgyce; gkeymcqqsewayscs: $eqgoocgaqwqcimie = isset($icwicymcioeyeyek[$uusmaiomayssaecw][$momcykaoccoymeig]); qwiyicoywcekgyce: swuggqyiaiqywgge: $aiowsaccomcoikus->iygyugseyaqwywyg($eqgoocgaqwqcimie); ocwouquuwsaqakae: ooooceiweeackgie: } kuaiscyqkgcouiye: gcaykgmmmqomsyis: return $ikgwqyuyckaewsow; } }