<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6c83ea60             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Cover\Woocommerce\Attribute; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class GlobalAttribute extends BaseAttribute { protected ?Model $model = null; public function __construct() { $this->name = "\147\154\157\142\x61\x6c"; $this->model = Model::symcgieuakksimmu(); parent::__construct(); $this->aoqwywcqmoqaukkq(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x77\157\x6f\x63\157\x6d\x6d\145\x72\143\x65\x5f\x61\164\x74\162\x69\142\x75\x74\x65\x5f\165\x70\x64\141\x74\145\144", [$this, "\163\x61\x76\145"])->qcsmikeggeemccuu("\x77\157\x6f\143\157\155\155\145\x72\143\145\x5f\x61\x66\164\x65\162\x5f\141\x64\x64\x5f\141\x74\x74\x72\x69\142\165\164\x65\x5f\146\151\x65\x6c\x64\163", [$this, "\x69\x69\x73\143\161\143\167\x61\151\x63\x65\157\x6b\x6f\x79\x75"])->qcsmikeggeemccuu("\x77\x6f\x6f\143\x6f\x6d\x6d\x65\x72\143\145\137\x61\x66\164\145\x72\137\x65\144\151\x74\x5f\141\164\x74\x72\151\x62\x75\164\145\x5f\x66\151\x65\x6c\144\x73", [$this, "\147\147\143\x79\147\x61\x79\143\155\143\x63\143\145\163\167\x6f"]); parent::wigskegsqequoeks(); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\167\x6f\157\x63\157\155\x6d\145\162\x63\145\137\141\x74\164\x72\x69\142\165\164\145\137\x74\141\x78\x6f\x6e\157\x6d\x69\145\163", [$this, "\147\163\x63\153\x71\171\163\x6f\x6b\x75\x6d\x6b\x77\x71\163\161"]); parent::kgquecmsgcouyaya(); } public function aoqwywcqmoqaukkq() { $iggakkcyoeakgcmq = $this->ocksiywmkyaqseou("\167\x6f\157\143\x6f\x6d\155\x65\x72\x63\145\137\141\x74\164\x72\151\142\165\164\145\137\x74\141\x78\x6f\156\157\155\151\x65\x73\137\166\x61\154\x75\145\x5f\x74\171\160\x65\163", [Constants::kumuoysauoagaiiy => __("\x44\x61\164\x65", PR__CMN__COVER), Constants::eymwucuaaiiciymc => __("\116\x75\x6d\x62\x65\x72", PR__CMN__COVER)]); $this->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec(Constants::kmywkmmykgoyyyoy)->gswweykyogmsyawy(__("\x56\141\x6c\165\145\40\164\171\160\145", PR__CMN__COVER))->acauweqyyugwisqc($iggakkcyoeakgcmq))->mkksewyosgeumwsa($this->caokeucsksukesyo()->wmkogisswkckmeua()->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\111\x63\157\156", PR__CMN__COVER))); } public function gsckqysokumkwqsq($oammesyieqmwuwyi) { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); if (!is_array($oammesyieqmwuwyi)) { goto oqckuigyqswmqcqg; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $mqeiemgcoiugcyuc = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, "\141\x74\164\x72\151\x62\x75\164\x65\x5f\x69\144"); if (!$mqeiemgcoiugcyuc) { goto ioiwoukauoeamuca; } foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { $qiuwqmysqigceouo = $aiowsaccomcoikus->mwikyscisascoeea(); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [$qiuwqmysqigceouo => $this->qooeaookuemoqecm($qiuwqmysqigceouo, $mqeiemgcoiugcyuc)]); cceggewquoaemcwq: } iuwccksomkkouogy: ioiwoukauoeamuca: $oammesyieqmwuwyi[$momcykaoccoymeig] = $igqsaukqcqscimok; mesesokuoomcioom: } aqwoykqaquewcaki: oqckuigyqswmqcqg: return $oammesyieqmwuwyi; } public function mgogaykgkoogasim() : ?Model { return $this->model; } public function uqsmmauywmsuqais($ymkomoccmymcoiea) : ?string { return $ymkomoccmymcoiea->get_id(); } public function save($aokagokqyuysuksm) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); foreach ($this->ugmceccgwaaaigiy() as $aiowsaccomcoikus) { if (!($aiowsaccomcoikus instanceof Field && ($ymqmyyeuycgmigyo = $aiowsaccomcoikus->mwikyscisascoeea()))) { goto qsaoyggkqwcgskwk; } if (!($eqgoocgaqwqcimie = $eiicaiwgqkgsekce->ayueggmoqeeukqmq($ymqmyyeuycgmigyo, ''))) { goto equwcsciiggsuiam; } $this->mgogaykgkoogasim()->aawsuyueaaimeqsm($aokagokqyuysuksm, $ymqmyyeuycgmigyo, $eqgoocgaqwqcimie); equwcsciiggsuiam: qsaoyggkqwcgskwk: oiywguooqeasueqq: } owismwmeqcmukagu: } public function qooeaookuemoqecm($qqgocisyeuuqmcwc, $ymkomoccmymcoiea) { return $this->mgogaykgkoogasim()->eukesgmuogimqwaa($ymkomoccmymcoiea, $qqgocisyeuuqmcwc); } public function iiscqcwaiceokoyu() { $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus); awkqcyusycccekwq: } myooisakyuggoggc: } public function ggcygaycmccceswo() { if (!($wwgeaeqgacgwooqi = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::awysmmukegasimmq))) { goto aqksouwmeckaqyaq; } $ikgwqyuyckaewsow = $this->ugmceccgwaaaigiy(); $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Field) { goto ykogqmmywykgouqy; } $aiowsaccomcoikus->iygyugseyaqwywyg($this->qooeaookuemoqecm($aiowsaccomcoikus->mwikyscisascoeea(), $wwgeaeqgacgwooqi)); echo $aoskwucuugeuaeus->qkauysqeioauswys($aiowsaccomcoikus, $wwgeaeqgacgwooqi); ykogqmmywykgouqy: kqwyogqqwumumiwg: } yugmwomumkosucsc: aqksouwmeckaqyaq: } }