<?php
/**
 * Internationalisation file for extension Gadgets.
 *
 * @file
 * @ingroup Extensions
 * @author Daniel Kinzler, brightbyte.de
 * @copyright © 2007 Daniel Kinzler
 * @license GNU General Public Licence 2.0 or later
 */

$messages = array();

/** English
 * @author Daniel Kinzler, brightbyte.de
 */
$messages['en'] = array(
	# for Special:Version
	'gadgets-desc'      => 'Lets users select custom [[Special:Gadgets|CSS and JavaScript gadgets]] in their [[Special:Preferences#mw-prefsection-gadgets|preferences]]',

	# for Special:Preferences
	'prefs-gadgets'     => 'Gadgets',
	'gadgets-prefstext' => 'Below is a list of special gadgets you can enable for your account.
These gadgets are mostly based on JavaScript, so JavaScript has to be enabled in your browser for them to work.
Note that these gadgets will have no effect on this preferences page.

Also note that these special gadgets are not part of the MediaWiki software, and are usually developed and maintained by users on your local wiki.
Local administrators can edit the [[MediaWiki:Gadgets-definition|definitions]] and [[Special:Gadgets|descriptions]] of available gadgets.',

	# for Special:Gadgets
	'gadgets'           => 'Gadgets',
	'gadgets-definition' => '', # do not translate or duplicate this message to other languages
	'gadgets-title'     => 'Gadgets',
	'gadgets-pagetext'  => "Below is a list of special gadgets users can enable on their [[Special:Preferences#mw-prefsection-gadgets|preferences page]], as defined by the [[MediaWiki:Gadgets-definition|definitions]].
This overview provides easy access to the system message pages that define each gadget's description and code.",
	'gadgets-uses'      => 'Uses',
	'gadgets-required-rights' => 'Requires the following {{PLURAL:$2|right|rights}}:

$1',
	'gadgets-required-skins' => 'Available on the {{PLURAL:$2|$1 skin|following skins: $1}}.',
	'gadgets-default'   => 'Enabled for everyone by default.',
	'gadgets-export'    => 'Export',
	'gadgets-export-title' => 'Gadget export',
	'gadgets-not-found' => 'Gadget "$1" not found.',
	'gadgets-export-text' => 'To export the $1 gadget, click on "{{int:gadgets-export-download}}" button, save the downloaded file,
go to Special:Import on destination wiki and upload it. Then add the following to MediaWiki:Gadgets-definition page:
<pre>$2</pre>
You must have appropriate permissions on destination wiki (including the right to edit system messages) and import from file uploads must be enabled.',
	'gadgets-export-download' => 'Download',
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 * @author Jon Harald Søby
 * @author Kghbln
 * @author Lloffiwr
 * @author Mormegil
 * @author Purodha
 * @author SPQRobin
 * @author Shirayuki
 * @author Siebrand
 * @author The Evil IP address
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'gadgets-desc' => '{{desc|name=Gadgets|url=http://www.mediawiki.org/wiki/Extension:Gadgets}}',
	'prefs-gadgets' => 'In Gadgets extension. The name of a tab in [[Special:Preferences#mw-prefsection-gadgets|Special:Preferences]] where user set their preferences for the extension.

{{Identical|Gadgets}}',
	'gadgets-prefstext' => 'In Gadgets extension. This is the explanation text displayed under the Gadgets tab in [[Special:Preferences#mw-prefsection-gadgets|Special:Preferences]].',
	'gadgets' => '{{doc-special|Gadgets}}
{{Identical|Gadgets}}',
	'gadgets-definition' => '{{notranslate}}',
	'gadgets-title' => '{{Identical|Gadgets}}',
	'gadgets-pagetext' => 'Used as intro text in [[Special:Gadgets]].',
	'gadgets-uses' => "This is used as a verb in third-person singular. It appears in front of a script name. Example: \"''Uses: Gadget-UTCLiveClock.js''\"

See [[meta:Special:Gadgets|Gadgets page in meta.wikimedia.org]]",
	'gadgets-required-rights' => 'Parameters:
* $1 - a list in wikitext.
* $2 - the number of items in list $1 for PLURAL use.',
	'gadgets-required-skins' => 'Parameters:
* $1 - a comma separated list.
* $2 - the number of items in list $1 for PLURAL use.',
	'gadgets-default' => "Used in [[Special:Gadgets]], if the extension is enabled for everyone by the Wiki's default settings.",
	'gadgets-export' => 'Used on [[Special:Gadgets]]. This is a verb, not noun.
{{Identical|Export}}',
	'gadgets-export-title' => 'Used as page title. Example: [[Special:Gadgets/export/editbuttons]]',
	'gadgets-not-found' => 'Used as error message. Parameters:
* $1 - gadget name',
	'gadgets-export-text' => 'Used as page description in [[Special:Gadgets]].

Refers to {{msg-mw|Gadgets-export-download}}.

See example: [[Special:Gadgets/export/editbuttons]]

Followed by the "Export" form.

Parameters:
* $1 - gadget name
* $2 - gadget definition (code)',
	'gadgets-export-download' => 'Use the verb for this message. Submit button.
{{Identical|Download}}',
);

/** Achinese (Acèh)
 * @author Si Gam Acèh
 */
$messages['ace'] = array(
	'gadgets-desc' => 'Peujeuet ureueng nguy geupileh [[Special:Gadgets|peukakaih CSS ngon JavaScript]] rot [[Special:Preferences#mw-prefsection-gadgets|neuato]]geuh',
	'prefs-gadgets' => 'Alat',
	'gadgets-prefstext' => 'Di yup nyoe nakeuh dapeuta alat kusuih nyang jeuet neupeuudep keu akun droeneuh. Ban dum alat nyan ladom jinguy meubasis JavaScript nyankeuh jeuet Droeneuh suwah neupeuudep JavaScript bak alat buka web droeneuh mangat jeuet neupeujak. Neupeurati meunyo ban dum alat nyan hana peungaroh bak on neuato nyoe.

Neupeyrati cit meunyo alat kusuih nyoe bukonkeuh beunagi nibak alat leumiek MediaWiki ngon kayem geupeukeumang ngon geupeulahra le ureueng nguy bak wiki droeneuh mantong. Ureueng uroh sinan jeuet geuandam alat nyang na rot [[MediaWiki:Gadgets-definition]] ngon [[Special:Gadgets]].',
	'gadgets' => 'Alat',
	'gadgets-title' => 'Alat',
	'gadgets-uses' => 'Neunguy',
	'gadgets-required-rights' => 'Peureulee {{PLURAL:$2|hak|hak-hak}} nyoe:
$1',
	'gadgets-default' => 'Peujeuet keu ban dum ureueng meunurot neume',
	'gadgets-export' => 'Ekspor',
	'gadgets-export-title' => 'Ekspor alat',
	'gadgets-not-found' => 'Alat "$1" hana geuteumeung.',
	'gadgets-export-download' => 'Pasoe',
);

/** Afrikaans (Afrikaans)
 * @author Anrie
 * @author Naudefj
 */
$messages['af'] = array(
	'gadgets-desc' => 'Laat gebruikers toe om [[Special:Gadgets|CSS en JavaScripts]] geriewe te aktiveer in hulle [[Special:Preferences#mw-prefsection-gadgets|voorkeure]]',
	'prefs-gadgets' => 'Geriewe',
	'gadgets-prefstext' => "Hieronder is 'n lys van spesiale geriewe wat u kan aktiveer.
Hierdie geriewe maak hoofsaaklik van JavaScript gebruik. Dus moet JavaScript in u webblaaier geaktiveer wees.
Hierdie geriewe het geen invloed op hoe hierdie voorkeurbladsy vertoon nie.

Hierdie geriewe is nie deel van die MediaWiki-sagteware nie en word gewoonlik deur gebruikers op u tuiswiki ontwikkel en onderhou.
Plaaslike administrateurs kan die beskikbare geriewe by [[MediaWiki:Gadgets-definition|definisies]] en [[Special:Gadgets|beskrywings]] wysig.",
	'gadgets' => 'Geriewe',
	'gadgets-title' => 'Geriewe',
	'gadgets-pagetext' => "Hieronder is 'n lys van spesiale geriewe wat gebruikers deur hulle [[Special:Preferences#mw-prefsection-gadgets|voorkeure]] kan aktiveer, soos gedefinieer in [[MediaWiki:Gadgets-definition]].
Die oorsig bied maklike toegang tot die stelselboodskapblaaie wat elke gerief se beskrywing  en kode wys.",
	'gadgets-uses' => 'Gebruik',
	'gadgets-export' => 'Eksporteer',
	'gadgets-export-download' => 'Laai af',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'prefs-gadgets' => 'ተጨማሪ መሣርያዎች',
	'gadgets-prefstext' => 'ከዚህ ታች አንዳንድ ተጨማሪ መሣርያ ወይም መኪናነት በዝርዝር ሊገኝ ይችላል። እነዚህ በደንብ እንዲሠሩ በኮምፒውተርዎ ላይ ጃቫ-ስክሪፕት እንዲኖር አስፈላጊነት ነው።

የዚህ ዊኪ መጋቢዎች [[MediaWiki:Gadgets-definition]]
እና [[Special:Gadgets]] በመጠቀም አዲስ መሣርያ ሊጨምሩ ይቻላል።', # Fuzzy
	'gadgets' => 'ተጨማሪ መሣርያዎች',
	'gadgets-title' => 'ተጨማሪ መሣርያዎች',
	'gadgets-pagetext' => 'ተጨማሪ መሣርያዎች ወይም መኪናዎች በየዊኪ ፕሮዤ የለያያሉ።

ተጨማሪ መሣሪያዎች ለማግኘት፣ ወደ [[Special:Preferences#mw-prefsection-gadgets|ምርጫዎች]] ይሂዱ።

የዚህ ገጽ መራጃ በተለይ ለመጋቢዎችና አስተዳዳሪዎች ይጠቅማል።

በዚህ {{SITENAME}} የሚገኙት ተቸማሪ መሣርያዎች እነኚህ ናቸው፦', # Fuzzy
	'gadgets-uses' => 'የተጠቀመው ጃቫ-ስክሪፕት',
);

/** Aragonese (aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'gadgets-desc' => 'Deixa que os usuario seleccionen os [[Special:Gadgets|gadgets de CSS y JavaScript]] que quieran en as suyas [[Special:Preferences#mw-prefsection-gadgets|preferencias]]',
	'prefs-gadgets' => 'Trastes',
	'gadgets-prefstext' => "Contino ye una lista de trastes especials que puede fer servir en a suya cuenta.
Como quasi totz istos trastes son feitos en JavaScript, caldrá que tienga activato JavaScript en o suyo navegador ta que vaigan bien. Pare cuenta que istos trastes no tendrán garra efeuto en ista pachina de preferencias.

Pare cuenta tamién que istos trastes especials no fan parte d'o software MediaWiki, y que gosan estar desenvolicatos y mantenitos por usuarios d'a suya wiki local.
Os almenistradors locals pueden editar os trastes disponibles en as pachinas de [[MediaWiki:Gadgets-definition|definicions]] y de [[Special:Gadgets|descripcions]].",
	'gadgets' => 'Trastes',
	'gadgets-title' => 'Trastes',
	'gadgets-pagetext' => "Contino ye una lista de trastes especials que os usuarios pueden activar en a suya [[Special:Preferences#mw-prefsection-gadgets|pachina de preferencias]], como se define en a pachina de [[MediaWiki:Gadgets-definition|definicions]].
Ista lista premite ir facilment t'as pachinas de mensaches d'o sistema que definen a descripción y o codigo de cada traste.",
	'gadgets-uses' => 'Fa servir',
	'gadgets-required-rights' => 'Requiere {{PLURAL:$2|o siguient dreito|os siguients dreitos}}:

$1',
	'gadgets-required-skins' => "Disponible {{PLURAL:$2|en l'apariencia $1|en as siguients apariencias: $1}}.",
	'gadgets-default' => 'Activau ta totz de traza predeterminada.',
	'gadgets-export' => 'Exportar',
	'gadgets-export-title' => 'Exportación de gadget',
	'gadgets-not-found' => 'No s\'ha trobau o gadget "$1".',
	'gadgets-export-text' => 'Ta exportar o gadget $1, faiga click en o botón "{{int:gadgets-export-download}}", alce o fichero descargau,
vaiga ta Special:Importar un wiki de destín y puye-lo. Dimpués adhiba lo siguient a MediaWiki:Gadgets-definition page:
<pre>$2</pre>
Has de tener permisos apropiaus en o wiki de destín (incluindo o dreito a editar mensaches de sistema) y importación dende fichers puyaus debe estar habilitau.',
	'gadgets-export-download' => 'Descargar',
);

/** Arabic (العربية)
 * @author Aiman titi
 * @author DRIHEM
 * @author Meno25
 * @author OsamaK
 * @author روخو
 */
$messages['ar'] = array(
	'gadgets-desc' => 'يسمح للمستخدمين باختيار [[Special:Gadgets|إضافات سي إس إس وجافاسكريبت]] معدلة في [[Special:Preferences#mw-prefsection-gadgets|تفضيلاتهم]]',
	'prefs-gadgets' => 'الإضافات',
	'gadgets-prefstext' => 'بالأسفل قائمة بالإضافات الخاصة التي يمكن تفعيلها لحسابك.
هذه الإضافات مبنية على الأغلب على جافاسكريبت، لذا فالجافاسكريبت يجب أن تكون مفعلة في متصفحك لكي يعملوا.
لاحظ أن هذه الإضافات لن يكون لها أي تأثير على صفحة التفضيلات هذه.

أيضا لاحظ أن هذه الإضافات الخاصة ليست جزءا من برنامج ميدياويكي، وعادة يتم تطويرها وصيانتها بواسطة مستخدمين في الويكي المحلي الخاص بك.
الإداريون المحليون يمكنهم تعديل الإضافات المتوفرة باستخدام [[MediaWiki:Gadgets-definition|التعريفات]]
و [[Special:Gadgets|الوصوفات]].',
	'gadgets' => 'إضافات',
	'gadgets-title' => 'إضافات',
	'gadgets-pagetext' => 'بالأسفل قائمة بالإضافات الخاصة التي يمكن أن يقوم المستخدمون بتفعيلها على [[Special:Preferences#mw-prefsection-gadgets|صفحة تفضيلاتهم]]، معرفة بواسطة [[MediaWiki:Gadgets-definition|التعريفات]].
هذا العرض يوفر دخولا سهلا لصفحات رسائل النظام التي تعرف وصف وكود كل إضافة.',
	'gadgets-uses' => 'تستخدم',
	'gadgets-required-rights' => 'يتطلب {{PLURAL:$2|الحق|الحقوق}} التالية:

$1',
	'gadgets-required-skins' => 'متاحة على {{PLURAL:$2|$1 skin|following skins: $1}}.',
	'gadgets-default' => 'تمكين الجميع بشكل افتراضي.',
	'gadgets-export' => 'صدّر',
	'gadgets-export-title' => 'أداة تصدير',
	'gadgets-not-found' => 'الأداة "$1" لم يتم العثور عليها.',
	'gadgets-export-text' => 'لتصدير $1 الأداة، انقر فوق "{{int:gadgets-export-download}}" زر حفظ الملف الذي تم تحميله،
 الذهاب إلى الخاص: الاستيراد على واجهة الويكي وتحميله. قم بإضافة ما يلي إلى MediaWiki:Gadgets-definition الصفحة:
<pre>$2</pre>
يجب أن يكون لديك الأذونات المناسبة على الويكي (بما في ذلك الحق في تحرير رسائل النظام) ويجب أن يتم تمكين الاستيراد من تحميل الملف.',
	'gadgets-export-download' => 'نزّل',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'gadgets' => 'ܬܘܣܦܬ̈ܐ',
	'gadgets-title' => 'ܬܘܣܦܬ̈ܐ',
	'gadgets-export-download' => 'ܐܚܬ:',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 * @author Ramsis II
 */
$messages['arz'] = array(
	'gadgets-desc' => 'بيسمح لليوزرز انهم يختارو [[Special:Gadgets|اضافاتCSS وJavaScript]] فى [[Special:Preferences#mw-prefsection-gadgets|التفضيلات]] بتاعتهم',
	'prefs-gadgets' => 'اضافات',
	'gadgets-prefstext' => 'تحت فى لستة بالضافات المخصوصة اللى انت ممكن تفعلها فى الحساب بتاعك.
الاضافات دى غالبا ما بتبقى مبينة على الجافاسكريبت،و علشان كده لازم تفعل الجافاسطريبت فى البراوزر بتاعك علشتن يشتغلو.
اعمل حسابك ان الاضافات دى مش ح يكون ليها اى تاثير على صفحة التفضيلات دى.

كمان،خد بالك ان الاضافات المخصوصة دى مش جزء من  برامج الميدياويكى ،و غالبا بيطورها و يعملها صيانة اليوزرز اللى فى الويكى المحلى بتاعك.
الادارى المحلى ممكن يعدل الاضافات الموجودة باستخدام [[MediaWiki:Gadgets-definition|التعريفات]] و [[Special:Gadgets|التوصيفات]].',
	'gadgets' => 'إضافات',
	'gadgets-title' => 'إضافات',
	'gadgets-pagetext' => 'تحت فى لستة بالاضافات المخصوصة و اللى اليوزرز ممكن يفعلوها على  [[Special:Preferences#mw-prefsection-gadgets|صفحة التفضيلات]], زى ما بتعرفها [[MediaWiki:Gadgets-definition|التعريفات]].
العرض دا بيوفر دخول سهل لصفحات رسايل النظام و اللى بتعرف وصف و كود كل اضافة.',
	'gadgets-uses' => 'إستخدامات',
);

/** Assamese (অসমীয়া)
 * @author Bishnu Saikia
 * @author Gitartha.bordoloi
 */
$messages['as'] = array(
	'gadgets-desc' => "সদস্যসকলক তেওঁলোকৰ [[Special:Preferences#mw-prefsection-gadgets|পছন্দসমূহত]] কাষ্ট'ম [[Special:Gadgets|CSS আৰু JavaScript গেজেট]] বাছনি কৰাৰ সুযোগ দিয়ে",
	'prefs-gadgets' => 'গেজেট',
	'gadgets-prefstext' => "আপুনি এই একাউণ্টত সক্ৰিয় কৰিব পৰা বিশেষ গেজেটসমূহৰ তালিকা তলত দিয়া হ'ল।
এই গেজেটসমূহৰ বেছিভাগ জাভাস্ক্ৰিপ্ট ভিত্তিক, গতিকে সেইবোৰে কাম কৰিবলৈ আপোনাৰ ব্ৰাউজাৰৰ জাভাস্ক্ৰিপ্ট সক্ৰিয় হৈ থাকিব লাগিব।
মন কৰক যে এই পছন্দ পৃষ্ঠাত গেজেটসমূহে কোনো প্ৰভাৱ নেপেলায়।

লগতে মন কৰক যে এই বিশেষ গেজেটসমূহ মিডিয়াৱিকি ছফ্টৱেৰৰ অংশ নহয়, আৰু সাধাৰণতে এইবোৰ আপোনাৰ স্থানীয় ৱিকিত সদস্যসকলে বিকাশ আৰু চোৱাচিতা কৰে।
স্থানীয় প্ৰশাসকসকলে উপলব্ধ গেজেটসমূহৰ [[MediaWiki:Gadgets-definition|সংজ্ঞা]] আৰু [[Special:Gadgets|বিৱৰণ]] সম্পাদনা কৰিব পাৰে।",
	'gadgets' => 'গেজেটসমূহ',
	'gadgets-title' => 'গেজেটসমূহ',
	'gadgets-pagetext' => 'সদস্যসকলে তেওঁলোকৰ [[Special:Preferences#mw-prefsection-gadgets|পছন্দ পৃষ্ঠাত]] সক্ৰিয় কৰিব পৰা আৰু [[MediaWiki:Gadgets-definition|সংজ্ঞা থকা]] বিশেষ গেজেটসমূহৰ তালিকা তলত দিয়া হৈছে।
এই সাৰাংশই প্ৰতিটো গেজেটৰ বিৱৰণ আৰু সংকেত থকা প্ৰণালী বাৰ্তাসমূহলৈ প্ৰৱেশাধিকাৰ দিয়ে।',
	'gadgets-uses' => 'ব্যৱহাৰ',
	'gadgets-required-rights' => 'তলৰ {{PLURAL:$2|অধিকাৰৰ|অধিকাৰসমূহৰ}} প্ৰয়োজন:
$1',
	'gadgets-required-skins' => '{{PLURAL:$2|$1 আৱৰণত|এই আৱৰণসমূহত: $1}} উপলব্ধ।',
	'gadgets-default' => 'ডিফল্ট অনুযায়ী সকলোৰে বাবে সক্ৰিয়।',
	'gadgets-export' => 'ৰপ্তানি কৰক',
	'gadgets-export-title' => 'গেজেট ৰপ্তানি',
	'gadgets-not-found' => '"$1" গেজেট পোৱা নগ\'ল।',
	'gadgets-export-text' => '$1 গেজেটটো ৰপ্তানি কৰিবলৈ "{{int:gadgets-export-download}}" বুটামটোত ক্লিক কৰক, ডাউনল\'ড ফাইলটো সাঁচি ৰাখক,
গন্তব্য ৱিকিৰ Special:Importলৈ যাওক আৰু ইয়াক আপল\'ড কৰক। তাৰপিছত তলৰ কথাখিনি MediaWiki:Gadgets-definition পৃষ্ঠাত যোগ দিয়ক:
<pre>$2</pre>
গন্তব্য ৱিকিত আপোনাৰ যথাযথ অনুমতি থাকিব লাগিব (প্ৰণালী বাৰ্তা সম্পাদনা কৰাৰ অনুমতিসহ) আৰু ফাইলা আপল\'ডৰ পৰা আমদানি সক্ৰিয় থাকিব লাগিব।',
	'gadgets-export-download' => 'ডাউনল’ড',
);

/** Asturian (asturianu)
 * @author Esbardu
 * @author Xuacu
 */
$messages['ast'] = array(
	'gadgets-desc' => 'Permite a los usuarios seleicionar al gustu [[Special:Gadgets|accesorios CSS y JavaScript]] nes sos [[Special:Preferences#mw-prefsection-gadgets|preferencies]]',
	'prefs-gadgets' => 'Accesorios',
	'gadgets-prefstext' => "Embaxo amuésase una llista de los accesorios especiales que pues activar pa la to cuenta.
Estos accesorios tán mayormente basaos en JavaScript, polo qu'has tener activáu esti nel to navegador pa que funcionen.
Date cuenta de qu'estos accesorios nun tendrán efeutu nesta páxina de preferencies.

Has decatate tamién de qu'estos accesorios especiales nun son parte del software MediaWiki, y que normalmente son
desenrollaos y manteníos por usuarios de la to wiki llocal.
Los alministradores llocales puen editar los accesorios disponibles usando les [[MediaWiki:Gadgets-definition|definiciones]] y les [[Special:Gadgets|descripciones]].",
	'gadgets' => 'Accesorios',
	'gadgets-title' => 'Accesorios',
	'gadgets-pagetext' => 'Embaxo amuésase una llista de los accesorios especiales que los usuarios puen activar na so [[Special:Preferences#mw-prefsection-gadgets|páxina de preferencies]], según queden definíos poles [[MediaWiki:Gadgets-definition|definiciones]].
Esta visión xeneral proporciona un accesu fácil a les páxines de mensaxes del sistema que definen la descripción y el códigu de cada accesoriu.',
	'gadgets-uses' => 'Usa',
	'gadgets-required-rights' => 'Requier {{PLURAL:$2|el siguiente permisu|los siguientes permisos}}:

$1',
	'gadgets-required-skins' => 'Disponible {{PLURAL:$2|nel aspeutu $1|nos siguientes aspeutos: $1}}.',
	'gadgets-default' => 'Activáu para toos de mou predetermináu.',
	'gadgets-export' => 'Esportar',
	'gadgets-export-title' => "Esportación d'accesorios",
	'gadgets-not-found' => 'Nun s\'alcontró l\'accesoriu "$1".',
	'gadgets-export-text' => 'Pa esportar l\'accesoriu $1, calca nel botón "{{int:gadgets-export-download}}", guarda\'l ficheru descargáu,
vete a Special:Import na wiki de destín y xúbilu. Darréu amiesta lo siguiente na páxina MediaWiki:Gadgets-definition:
<pre>$2</pre>
Has de tener los permisos afayadizos na wiki de destín (incluyendo permisu pa editar los mensaxes del sistema) y tien de tar activada la importación dende los ficheros xubíos.',
	'gadgets-export-download' => 'Descargar',
);

/** Azerbaijani (azərbaycanca)
 * @author Cekli829
 * @author PPerviz
 * @author Vago
 * @author Vugar 1981
 */
$messages['az'] = array(
	'prefs-gadgets' => 'Qadjetlər',
	'gadgets' => 'Qadjetlər',
	'gadgets-title' => 'Qadjetlər',
	'gadgets-uses' => 'İstifadə',
	'gadgets-export' => 'İxrac',
	'gadgets-export-title' => 'Qadjet ixracı',
	'gadgets-not-found' => 'Qadjet "$1" tapılmadı.',
	'gadgets-export-download' => 'Yüklə',
);

/** South Azerbaijani (تورکجه)
 * @author Amir a57
 * @author Ebrahimi-amir
 * @author Mousa
 */
$messages['azb'] = array(
	'prefs-gadgets' => 'آلت‌لر',
	'gadgets-prefstext' => 'آشاغیدا ایستیفاده‌چی حسابینیز اوچون فعال ائده بیله‌جه‌گینیز اوزل آراجلاری گورورسونوز.
بو آراجلار عوموما جاوااسکریب اساسیندادیرلار، بونا اساسن بروزئرینیزینده جاوااسکریبی فعال ائتمه‌لیسینیز.
دیقتلی اولون بو آراجلار ترجیحلر صحیفه‌سین دَییشدیره بیلمز.

دیقتلی اولون بو آراجلار مئدیاویکی یازیلیملاریندان دئییللر و عوموما هر ویکی‌نین ایستیفاده‌چی‌لری طرفیندن یارانیب و ساخلانیرلار.
هر ویکی‌نین ایداره‌چیلری [[MediaWiki:Gadgets-definition|تعریف‌لر]] و [[Special:Gadgets|ایضاحات]]  دا بو آراجلاری دَییشدیره بیلرلر.',
	'gadgets' => 'آلت لر',
	'gadgets-title' => 'آلت‌لر',
	'gadgets-uses' => 'برنامه',
	'gadgets-export' => 'ائشیگه آپارماق',
	'gadgets-export-title' => 'آبزارلاری ائشیکه آپارما',
	'gadgets-not-found' => 'آلت "$1" تاپیلمادی.',
	'gadgets-export-download' => 'اندیر',
);

/** Bashkir (башҡортса)
 * @author Рустам Нурыев
 * @author ҒатаУлла
 */
$messages['ba'] = array(
	'prefs-gadgets' => 'Гаджеттар',
	'gadgets' => 'Гаджеттар',
	'gadgets-title' => 'Гаджеттар',
	'gadgets-uses' => 'Ҡулланыла',
	'gadgets-required-rights' => '{{PLURAL:$2|1=Хоҡуҡ талап ителә|Хоҡутар талап ителә}}:

$1', # Fuzzy
	'gadgets-export' => 'Сығарырға',
	'gadgets-not-found' => '"$1" гаджеты табылманы.',
	'gadgets-export-download' => 'Күсереп алырға',
);

/** Bavarian (Boarisch)
 * @author Mucalexx
 */
$messages['bar'] = array(
	'gadgets' => 'Gadgets (Helferlein)',
	'gadgets-title' => 'Gadgets (Helferlein)',
	'gadgets-export-download' => 'Owerloon',
);

/** Southern Balochi (بلوچی مکرانی)
 * @author Mostafadaneshvar
 */
$messages['bcc'] = array(
	'gadgets-desc' => 'اجازت دن کابرانء که انتخاب کنن دلواهی [[Special:Gadgets|گجت آنی سی اس اس و جاوا اسکرسپت]] ته وتی [[Special:Preferences#mw-prefsection-gadgets|ترجیحات]]',
	'prefs-gadgets' => 'گجت آن',
	'gadgets' => 'گجت آن',
	'gadgets-title' => 'گجت آن',
	'gadgets-uses' => 'استفاده بیت',
);

/** Bikol Central (Bikol Central)
 * @author Geopoet
 */
$messages['bcl'] = array(
	'gadgets-desc' => 'Minatugot sa mga paragamit na pumili nin kustombre [[Special:Gadgets|CSS and JavaScript gadgets]] sa saindang [[Special:Preferences#mw-prefsection-gadgets|preferences]]',
	'prefs-gadgets' => 'Mga gadyet',
	'gadgets-prefstext' => 'Sa ibaba yaon an sarong listahan kan espesyal na mga gadyet na saimong mapapagana para sa saimong panindog.
Ining mga gadyet haros nakabase sa JavaScript, kaya an JavaScript kaipong paganahon sa saimong kilyawan para an mga ini magagamit.
Tandai na ining mga gadyet mayo nin epekto kaining pahina nin mga kamuyahan.

Tandai man na ining mga espesyal na gadyet bakong parte kan panuklob nin MediaWiki, asin pirmehang pinagpauswag asin pinagmamantine nin mga paragamit sa saimong lokal na wiki.

An mga lokal na mga administrador makakaliwat kan  [[MediaWiki:Gadgets-definition|mga pakahulugan]] asin [[Special:Gadgets|mga deskripsyon]] kan yaon na mga gadyet.',
	'gadgets' => 'Mga gadyet',
	'gadgets-title' => 'Mga gadyet',
	'gadgets-pagetext' => 'Sa ibaba yaon an sarong listahan kan espesyal na mga gadyet na an mga paragamit mapapagana sa saindang [[Special:Preferences#mw-prefsection-gadgets|pahina nin mga kamuyahan]], siring sa pinapakahulugan kan [[MediaWiki:Gadgets-definition|mga pakahulugan]]. Ining patanawon minatao nin yanong langkayan sa mga pahina kan mensahe sa sistema na minakahulugan sa lambang deskripsyon nin gadyet asin koda.',
	'gadgets-uses' => 'Mga magagamitan',
	'gadgets-required-rights' => 'Minahagad kan minasunod {{PLURAL:$2|katanosan|mga katanosan}}:


$1',
	'gadgets-required-skins' => 'Makukua sa {{PLURAL:$2|$1 kublit|minasunod na mga kublit: $1}}.',
	'gadgets-default' => 'Tugmadong pinagpapagana para sa kagabsan.',
	'gadgets-export' => 'Eksport',
	'gadgets-export-title' => 'Gadyet eksport',
	'gadgets-not-found' => 'Gadyet na "$1" dae nanagboan.',
	'gadgets-export-text' => 'Tanganing ma-eksport an $1 na gadyet, paki-klik an "{{int:gadgets-export-download}}" pindutan, itagama an naikargang sagunson, magduman sa Espesyal:Importaron sa wiking destinasyon and ikarga ini. An sunod idugang an minasunod sa MediaWiki:Mga Gadyet-pakahulugang pahina: <pre>$2</pre> Ika dapat magkaigwa nin makanigong mga permiso sa wiking destination (kabali na an katanosan na magliwat nin pansistemang mga mensahe) asin an mag-importa gikan sa ikinakargang mga sagunson na dapat kaipong pinagpagana.',
	'gadgets-export-download' => 'Kargahon',
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author Cesco
 * @author EugeneZelenko
 * @author Jim-by
 * @author Red Winged Duck
 * @author Wizardist
 * @author Zedlik
 */
$messages['be-tarask'] = array(
	'gadgets-desc' => 'Дазваляе ўдзельнікам выбіраць [[Special:Gadgets|CSS і JavaScript-дадаткі]] ў сваіх [[Special:Preferences#mw-prefsection-gadgets|наладах]]',
	'prefs-gadgets' => 'Гаджэты',
	'gadgets-prefstext' => 'Ніжэй знаходзіцца сьпіс спэцыяльных гаджэтаў, якія Вы можаце ўключыць для свайго рахунка.
Гэтыя гаджэты, пераважна, заснаваныя на JavaScript, таму Вам неабходна ўключыць JavaScript у сваім браўзэры для таго, каб яны працавалі.
Заўважце, што гэтыя гаджэты не працуюць на старонцы наладаў.

Таксама заўважце, што гэтыя гаджэты не зьяўляюцца часткай праграмнага забесьпячэньня MediaWiki, і, звычайна, распрацоўваюцца ўдзельнікамі Вашай лякальнай вікі.
Лякальныя адміністратары маюць магчымасьць мяняць сьпіс гаджэтаў з дапамогай [[MediaWiki:Gadgets-definition|вызначэньняў]] і [[Special:Gadgets|апісаньняў]].',
	'gadgets' => 'Гаджэты',
	'gadgets-title' => 'Гаджэты',
	'gadgets-pagetext' => 'Ніжэй знаходзіцца сьпіс гаджэтаў, якія ўдзельнікі могуць уключыць у [[Special:Preferences#mw-prefsection-gadgets|сваіх наладах]], у адпаведнасьці са сьпісам на старонцы [[MediaWiki:Gadgets-definition|вызначэньняў]].
Гэты сьпіс дазваляе лёгка атрымаць доступ да старонак сыстэмных паведамленьняў, якія вызначаюць апісаньні і крынічныя коды гаджэтаў.',
	'gadgets-uses' => 'Выкарыстоўвае',
	'gadgets-required-rights' => '{{PLURAL:$2|1=Патрабуецца права|Патрабуюцца наступныя правы}}:

$1', # Fuzzy
	'gadgets-required-skins' => 'Даступны ў {{PLURAL:$2|1=тэме $1|наступных тэмах: $1}}.', # Fuzzy
	'gadgets-default' => 'Дазволеныя для ўсіх па змоўчваньні.',
	'gadgets-export' => 'Экспартаваць',
	'gadgets-export-title' => 'Экспарт гаджэта',
	'gadgets-not-found' => 'Гаджэт «$1» ня знойдзены.',
	'gadgets-export-text' => 'Каб экспартаваць гаджэт $1, націсьніце кнопку «{{int:gadgets-export-download}}», захавайце загружаны файл, зайдзіце на Special:Import у мэтавай вікі і загрузіце файл туды. Затым дадайце наступны зьмест на старонку MediaWiki:Gadgets-definition:
<pre>$2</pre>
Вы павінны мець адпаведныя правы ў мэтавай вікі (у тым ліку і правы на рэдагаваньне сыстэмных паведамленьняў), а ў вікі мусіць быць уключаная магчымасьць імпарту з файлаў.',
	'gadgets-export-download' => 'Загрузіць',
);

/** Bulgarian (български)
 * @author Borislav
 * @author DCLXVI
 * @author Spiritia
 * @author Turin
 */
$messages['bg'] = array(
	'gadgets-desc' => 'Позволява на потребителите да избират и активират [[Special:Gadgets|CSS и JavaScript джаджи]] от своите [[Special:Preferences#mw-prefsection-gadgets|настройки]]',
	'prefs-gadgets' => 'Джаджи',
	'gadgets-prefstext' => 'По-долу е списъкът на специалните джаджи, които можете да активирате на своята потребителска сметка.
Тъй като почти всички джаджи са базирани на Джаваскрипт, трябва да го активирате на браузъра си, за да могат те да работят.
Имайте предвид, че тези джаджи няма да окажат влияние на тази страница с настройки.

Също така, джаджите не са част от софтуера МедияУики, и обикновено се разработват и поддържат от потребители в локалното уики. Локалните администратори могат да редактират наличните джаджи посредством [[MediaWiki:Gadgets-definition|дефинициите]] и [[Special:Gadgets|описанията]].',
	'gadgets' => 'Джаджи',
	'gadgets-title' => 'Джаджи',
	'gadgets-pagetext' => 'По-долу е списъкът на специалните джаджи, които потребителите могат да активират чрез [[Special:Preferences#mw-prefsection-gadgets|страницата си с настройки]], както е указано на [[MediaWiki:Gadgets-definition]].
Този списък дава лесен достъп до страниците със системни съобщения, съдържащи описанието и кода на всяка джаджа.',
	'gadgets-uses' => 'Използва',
	'gadgets-default' => 'Активирана за всички по подразбиране.',
	'gadgets-export' => 'Изнасяне',
	'gadgets-export-title' => 'Експорт на джаджи',
	'gadgets-not-found' => 'Джаджа "$1" не беше намерена.',
	'gadgets-export-text' => 'За да експортирате джаджата $1, щракнете на бутона "{{int:gadgets-export-download/bg}}", запазете файла на диска си, отидете на страницата Special:Import в целевото уики и го качете там. След това добавете към страницата MediaWiki:Gadgets-definition:
<pre>$2</pre>
В целевото уики трябва да се ползвате от съответните права (в това число правото да редактирате системни съобщения) и трябва да са разрешени локалните файлови качвания.',
	'gadgets-export-download' => 'Изтегляне',
);

/** Bengali (বাংলা)
 * @author Bellayet
 * @author Nasir8891
 * @author Wikitanvir
 * @author Zaheen
 */
$messages['bn'] = array(
	'gadgets-desc' => 'ব্যবহারকারীদের তাদের [[Special:Preferences#mw-prefsection-gadgets|পছন্দে]] স্বনির্বাচিত [[Special:Gadgets|সিএসএস এবং জাভাস্ক্রিপ্ট গ্যাজেট]] নির্বাচনের সুযোগ দাও',
	'prefs-gadgets' => 'গ্যাজেটগুলি',
	'gadgets-prefstext' => 'নিচে কিছু বিশেষ গ্যাজেটের তালিকা দেওয়া হল, যেগুলি আপনি আপনার অ্যাকাউন্টের জন্য সক্রিয় করতে পারেন।
এই গ্যাজেটগুলি বেশিরভাগই জাভাস্ক্রিপ্ট-ভিত্তিক, তাই এগুলি কাজ করতে হলে আপনার ব্রাউজারে জাভাস্ক্রিপ্ট সক্রিয় থাকতে হবে।
লক্ষ্য করুন, এই গ্যাজেটগুলি এই পছন্দ পাতায় কোন প্রভাব ফেলবে না।

আরও লক্ষ্য করুন যে এই বিশেষ গ্যাজেটগুলি মিডিয়াউইকি সফটওয়্যারের অংশ নয়, এবং সাধারণত আপনার স্থানীয় উইকির ব্যবহারকারীরা এগুলি তৈরি করেন ও রক্ষণাবেক্ষণ করেন। স্থানীয় প্রশাসকেরা লভ্য গ্যাজেটগুলি [[MediaWiki:Gadgets-definition|সংজ্ঞা]] এবং [[Special:Gadgets|বর্ণনা]]-এর সাহায্যে সম্পাদনা করতে পারেন।',
	'gadgets' => 'গ্যাজেটগুলি',
	'gadgets-title' => 'গ্যাজেট',
	'gadgets-pagetext' => 'নিচে বিশেষ গ্যাজেটের একটি তালিকা রয়েছে, যা ব্যবহারকারী তাদের [[Special:Preferences#mw-prefsection-gadgets|প্রছন্দের পাতা]] থেকে সক্রিয় করে নিতে পারবেন এবং যা [[MediaWiki:Gadgets-definition|definitions]] পাতায় সংজ্ঞায়িত রয়েছে। পর্যালোচনা সিস্টেম বার্তা পাতায় সহজ প্রবেশাধিকার দিবে, যেখানে গ্যাজেটের বর্ণনা এবং কোড রয়েছে।',
	'gadgets-uses' => 'ব্যবহারসমূহ',
	'gadgets-required-rights' => 'নিচের {{PLURAL:$2|অধিকার|অধিকারগুলো}} প্রয়োজন:
$1',
	'gadgets-required-skins' => '{{PLURAL:$2|$1 স্কিন|স্কিনগুলো: $1}} থেকে ব্যবহার করা যাবে।',
	'gadgets-default' => 'সকলের জন্য সয়ংক্রিয়ভাবে সক্রিয়।',
	'gadgets-export' => 'রপ্তানি',
	'gadgets-export-title' => 'গ্যাজেট রফতানী',
	'gadgets-not-found' => 'গ্যাজেট "$1" খুজে পাওয়া যায়নি।',
	'gadgets-export-download' => 'ডাউনলোড',
);

/** Breton (brezhoneg)
 * @author Fulup
 * @author Gwendal
 * @author Y-M D
 */
$messages['br'] = array(
	'gadgets-desc' => 'Leuskel a ra an implijerien da bersonelaat [[Special:Gadgets|bitrakoù CSS ha JavaScript]] en o [[Special:Preferences#mw-prefsection-gadgets|fenndibaboù]]',
	'prefs-gadgets' => 'Bitrakoù',
	'gadgets-prefstext' => "A-is ez eus ur roll eus ar bitrakoù a c'hallit gweredekaat evit ho kont.
Evit ar pep brasañ eo diazezet ar bitrakoù-se war JavaScript, setu ma rank JavaScript bezañ gweredekaet war ho merdeer evit ma'z afent en-dro.
Notennit mat ne vo efed ebet gant ar bitrakoù-se war ar bajenn penndibaboù-mañ.

Notennit ivez n'eus ket eus ar bitrakoù-se tammoù eus meziant MediaWiki; peurliesañ ez int diorroet ha trezalc'het gant implijerien war ho wiki lec'hel.
Gallout a ra ar verourien lec'hel degas cheñchamantoù er bitrakoù en ur ober gant an [[MediaWiki:Gadgets-definition|termenadurioù]] hag an [[Special:Gadgets|deskrivadurioù]].",
	'gadgets' => 'Bitrakoù',
	'gadgets-title' => 'Bitrakoù',
	'gadgets-pagetext' => "A-is ez eus ur roll eus ar bitrakoù a c'hall bezañ gweredekaet gant an implijerien war o fajenn [[Special:Preferences#mw-prefsection-gadgets|penndibaboù]], evel m'eo termenet en [[MediaWiki:Gadgets-definition|termenadurioù]].
Ar sell hollek-mañ a bourchas ur moned aes d'ar pajennoù kemennadennoù reizhiad a dermen deskrivadur ha kod pep bitrak.",
	'gadgets-uses' => 'A implij',
	'gadgets-required-rights' => 'Rekis eo kaout an {{PLURAL:$2|aotre|aotreoù}} da-heul : 
$1',
	'gadgets-required-skins' => 'Hegerz gant ar {{PLURAL:$2|gwiskadur $1|gwiskadurioù da-heul : $1}}.',
	'gadgets-default' => 'Gweredekaet dre ziouer evit an holl.',
	'gadgets-export' => 'Ezporzhiañ',
	'gadgets-export-title' => 'Ezporzhiañ bitrakoù',
	'gadgets-not-found' => 'N\'eo ket bet kavet ar bitrak "$1".',
	'gadgets-export-text' => 'Evit ezporzhiañ ar bitrak $1, klikañ war ar bouton "{{int:gadgets-export-download}}", enrollañ ar restr pellgarget,
mont d\'ar bajenn Dibar :Enporzh ar wiki tal hag enporzhiañ. Goude-se ouzhpennañ an destenn da-heul e pajenn MediaWiki:Gadgets-definition :
<pre>$2</pre>
Rankout a rit kaout ar gwirioù a zere war ar wiki tal (en o zouez ar gwir da zegas kemmoù er c\'hemennadennoù reizhiad) ha ret eo d\'an enporzhiañ adalek restroù bezañ gweredekaet.',
	'gadgets-export-download' => 'Pellgargañ',
);

/** Bosnian (bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'gadgets-desc' => 'Omogućava korisnicima da odaberu vlastite [[Special:Gadgets|CSS i JavaScript dodatke]] (gadgets) u svojim [[Special:Preferences#mw-prefsection-gadgets|postavkama]]',
	'prefs-gadgets' => 'Dodaci',
	'gadgets-prefstext' => "Ovo je spisak specijalih gadgets (''dodataka'') koje možete omogućiti za Vaš korisnički račun. Ovi dodaci su najčešće bazirani na JavaScript, tako da se postavke JavaScript moraju omogućiti u Vašem web pregledniku da bi mogli raditi.
Zapamtite da ovi gadgets ne uzrokuju nikakve efekte na ovoj stranici za postavke.

Također morate obratiti pažnju da ovi specijalni dodaci nisu dio MediaWiki software-a, a obično ih prave i razvijaju korisnici na lokalnim wikijima.
Administratori mogu mijenjati dostupne gadgetse koristeći [[MediaWiki:Gadgets-definition|definicije]] i [[Special:Gadgets|opise]].",
	'gadgets' => 'Dodaci (gadgets)',
	'gadgets-title' => 'Dodaci',
	'gadgets-pagetext' => 'Ispod je spisak posebnih dodataka koje korisnici mogu omogućiti na svojim [[Special:Preferences#mw-prefsection-gadgets|postavkama]], kako je to definisano u [[MediaWiki:Gadgets-definition|definicijama dodataka]].
Ovaj pregled daje jednostavan pristup sistemu stranica poruka koje definišu svaki dodatak i njihov opis i kod.',
	'gadgets-uses' => 'Upotrebe',
	'gadgets-required-rights' => 'Zahtijeva {{PLURAL:$2|$1 pravo|slijedeća prava: $1}}.', # Fuzzy
	'gadgets-default' => 'Omogućeno za svakog po postavkama.',
	'gadgets-export' => 'Izvoz',
	'gadgets-export-title' => 'Izvoz dodatka',
	'gadgets-not-found' => 'Dodatak "$1" nije pronađen.',
	'gadgets-export-text' => 'Za izvoz dodatka $1, kliknite na dugme "{{int:gadgets-export-download}}", spremite skinutu datoteku,
idite na Posebno:Uvoz na odredišnu wiki i postavite je. Zatim dodajte slijedeće na stranicu MediaWiki:Gadgets-definition:
<pre>$2</pre>
Morate imati odgovarajuća prava na odredišnoj wiki (uključujući pravo da uređujete sistemske poruke) i uvoz iz postavljenih datoteka mora biti omogućen.',
	'gadgets-export-download' => 'Skidanje',
);

/** Catalan (català)
 * @author Aleator
 * @author Gemmaa
 * @author Paucabot
 * @author SMP
 * @author Toniher
 * @author Vriullop
 */
$messages['ca'] = array(
	'gadgets-desc' => 'Permet als usuaris personalitzar [[Special:Gadgets|ginys CSS i JavaScript]] a les seves [[Special:Preferences#mw-prefsection-gadgets|preferències]]',
	'prefs-gadgets' => 'Ginys',
	'gadgets-prefstext' => "A continuació teniu una llista de ginys especials que podeu activar al vostre compte.<br />
La majoria d'aquests ginys fan servir JavaScript, per tant l'haureu de tenir activat al vostre navegador per a que funcionin.
Tingueu en compte que aquests ginys no tenen cap efecte sobre aquesta pàgina de preferències.

Tingueu també present que aquests ginys especials no formen part del programari MediaWiki i que acostumen a estar fets i mantinguts per usuaris del vostre wiki local.<br />
Els administradors locals poden editar els ginys disponibles fent servir [[MediaWiki:Gadgets-definition|definicions]] i [[Special:Gadgets|descripcions]].",
	'gadgets' => 'Ginys',
	'gadgets-title' => 'Ginys',
	'gadgets-pagetext' => 'A continuació teniu una llista de ginys especials que els usuaris poden activar a la seva [[Special:Preferences#mw-prefsection-gadgets|pàgina de preferències]], segons les [[MediaWiki:Gadgets-definition|seves definicions]].
Aquesta llista permet un fàcil accés a les pàgines del sistema que defineixen la descripció i el codi de cada giny.',
	'gadgets-uses' => 'Usa',
	'gadgets-required-rights' => '{{PLURAL:$2|Es necessita el dret següent|Es necessiten els drets següents}}:

$1',
	'gadgets-required-skins' => 'Disponible a la  {{PLURAL:$2|   $1  skin|following skins:  $1 }}.',
	'gadgets-default' => 'Habilitat per a tothom per defecte.',
	'gadgets-export' => 'Exporta',
	'gadgets-export-title' => 'Exportació de ginys',
	'gadgets-not-found' => "No s'ha trobat el giny «$1».",
	'gadgets-export-text' => "Per a exportar el giny $1, feu clic al botó «{{int:gadgets-export-download}}», deseu el fitxer baixat,
aneu a Special:Import al wiki de destinació i pugeu-lo. Llavors afegiu el següent a la pàgina MediaWiki:Gadgets-definition:
<pre>$2</pre>
Heu de tenir els permisos adequats en el wiki de destinació (incloent-hi els permisos per editar missatges del sistema) i s'ha d'habilitar la importació de la pujada de fitxers.",
	'gadgets-export-download' => 'Baixa',
);

/** Chechen (нохчийн)
 * @author Sasan700
 * @author Умар
 */
$messages['ce'] = array(
	'gadgets-desc' => 'Атто бо декъашхошна харжам ба [[Special:Preferences#mw-prefsection-gadgets|гIирс нисбарца]] CSS- а JavaScript-хIоттончаш, лато лууш йерш', # Fuzzy
	'prefs-gadgets' => 'Гаджеташ',
	'gadgets-prefstext' => 'Лаххьа балийна леррина гаджеташ могӀам, шуьга шайга латалур йолуш хьай долахь долучу дакъан.
ХӀара гаджеташ дуккхачу хьолехь болх беш ю оцу JavaScript тӀехь, цундела аша латоеза JavaScript шай браузер чохь, цаьрга болх байта.
Диц маделаш, хӀара гаджеташ болх бяш яц хӀо гӀирс нисбо агӀон чохь.

Ишта диц маде, хӀара гаджеташ юкъа йогуш яц кху MediaWiki гlирсашна, мадарра аьльча шу санна декъашхоша шаьш йеш ю.
Адманкуьйгалхошка шайг хийцало и хlоттончи могlам, хlокх могlам гlонца [[MediaWiki:Gadgets-definition|къастам бало]] а [[Special:Gadgets|церах лаьцна]].',
	'gadgets' => 'Гаджеташ',
	'gadgets-title' => 'Гаджеташ',
	'gadgets-pagetext' => 'Гlирса хааман могlамаш, къастош йолу хlоттончи цlераш, хуьлаш йолу хIокху [[MediaWiki:Gadgets-definition|къастамца]]]].
ХIокху могIамо атто бо гIирсан хаамаш атта тIе кхочуш барца, цуьнах лаьцна хIоттош а йолш йолучу хIоттончи ишарца.', # Fuzzy
	'gadgets-uses' => 'Лелош ю',
	'gadgets-required-rights' => '{{PLURAL:$2|1=Оьшуш ю бакъо|Оьшуш ю бакъонаш}}:

$1', # Fuzzy
	'gadgets-default' => 'Латае массарна Iад йитарца.',
	'gadgets-export' => 'Экспорт ян',
	'gadgets-export-title' => 'Гаджет экспорт яр',
	'gadgets-export-text' => 'Гаджет $1 экспорт ян тӀетаӀае кнопка «{{int:gadgets-export-download}}», тӀакха чуяьккхина файл Ӏалаше,
Special:Import агӀона дехьа гӀой чуяккха файл. ТӀакха MediaWiki:Gadgets-definition агӀона чу билла лахара могӀа:
<pre>$2</pre>
И болх бан хьан бакъо хила еза (кхин системин хаамаш та ян бакъо а хила еза), кхи серверан чохь файлаш импорт йо гӀирс латина хила беза.',
	'gadgets-export-download' => 'Чуяккха',
);

/** Sorani Kurdish (کوردی)
 * @author Asoxor
 * @author Calak
 */
$messages['ckb'] = array(
	'prefs-gadgets' => 'ئامرازەکان',
	'gadgets-prefstext' => 'ژێرەوە پێرستێک لەم ئامرازە تایبەتانەیە کە دەتوانی بۆ ھەژماکەت چالاکی بکەی.
ئەم ئامرازانە لەسەر بنەمای جاڤاسکریپتن، کە وا بوو بۆ کەڵک لێ‌وەرگرتنیان دەبێ جاڤاسکریپتی وێبگەڕەکەت چالاک بکەی.
ئەمە بزانە ئەم ئامرازانە ھیچ کاریگەرییەکیان لەسەر پەڕەی ھەڵبژاردەکەتدا نییە.

ھەروەھا ئەمەش بزانە ئەم ئامرازە تایبەتانە بەشێک لە نەرمامێری میدیاویکی نین و زیاتر لە لایەن بەکارھێنەرانی ویکیی خۆماڵیی خۆت پەرەی پێ‌دەدرێت و دەپارێزرێت.
بەڕێوەبەرانی خۆماڵی دەتوانن [[MediaWiki:Gadgets-definition|پێناسەکان]] و [[Special:Gadgets|تێبینییەکانی]] ئامرازەکان دەستکاری بکەن.',
	'gadgets' => 'ئامرازەکان',
	'gadgets-title' => 'ئامرازەکان',
	'gadgets-pagetext' => 'ژێرەوە پێرستێک لەم ئامرازە تایبەتانەیە کە بەکارھینەران دەتوانن لە ڕێگەی [[Special:Preferences#mw-prefsection-gadgets|پەڕەی ھەڵبژاردەکەیان]]ەوە چالاکی بکەن کە لە [[MediaWiki:Gadgets-definition|پێناسەکان]]دا دەناسێنرێن.
ئەم کورتەیە دەست پێ‌ڕاگەییشتن بە پەڕکانی پەیامی سیستەم کە تێبینی و کۆدی ئامرازەکانی تێدا ھاتووە ئاسان دەکاتەوە.',
	'gadgets-uses' => 'بەکارگیراو',
	'gadgets-required-rights' => 'پێویستی بەم {{PLURAL:$2|مافەی|مافانەی}} ژێرەوە ھەیە:

$1',
	'gadgets-default' => 'بە شێوەی بەرگریمانە بۆ ھەموو کەس چالاکە.',
	'gadgets-export' => 'هەناردن',
	'gadgets-export-title' => 'ھەناردنی ئامراز',
	'gadgets-export-text' => 'بۆ ھەناردنی ئامرازی $1، لەسەر دوگمەی «{{int:gadgets-export-download}}» کرتە بکە، پەڕگە داگرتووەکە پاشەکەوت بکە،
بچۆ بۆ Special:Import لە ویکیی مەبەستدا و باری بکە. پاشان ئەمەی ژێرەوە بە پەڕەی MediaWiki:Gadgets-definition زیاد بکە:
<pre>$2</pre>
پێویستە لە ویکیی مەبەستدا مافی گونجاوت ھەبێ (وەک مافی دەستکاریی پەیامەکانی سیستەم) و ھاوردنی پەڕگە بارکراوەکان دەبێ چالاک کرابێ.',
	'gadgets-export-download' => 'دایبگرە',
);

/** Czech (čeština)
 * @author Danny B.
 * @author Li-sung
 * @author Mormegil
 */
$messages['cs'] = array(
	'gadgets-desc' => 'Umožňuje uživatelům vybrat si v [[Special:Preferences#mw-prefsection-gadgets|nastavení]] [[Special:Gadgets|CSSová a JavaScriptová udělátka]].',
	'prefs-gadgets' => 'Udělátka',
	'gadgets-prefstext' => 'Níže je přehled speciálních udělátek, která si můžete ve svém účtu zapnout.
Tato udělátka jsou založena převážně na JavaScriptu, takže je pro jejich funkčnost nutné mít v prohlížeči JavaScript zapnutý.
Udělátka nejsou aplikována na této stránce nastavení.

Uvědomte si také, že speciální udělátka nejsou součástí softwaru MediaWiki a&nbsp;jsou vytvářena a&nbsp;spravována uživateli této wiki.
Místní správci mohou upravovat [[MediaWiki:Gadgets-definition|definice]] a&nbsp;[[Special:Gadgets|popisy]] dostupných udělátek.',
	'gadgets' => 'Udělátka',
	'gadgets-title' => 'Udělátka',
	'gadgets-pagetext' => 'Níže je přehled speciálních udělátek, která si uživatelé mohou zapnout ve svém [[Special:Preferences#mw-prefsection-gadgets|nastavení]]. Jejich seznam lze upravovat na stránce [[MediaWiki:Gadgets-definition]].
Tento přehled poskytuje jednoduchý přístup k&nbsp;systémovým hlášením, která definují zdrojový kód a&nbsp;popis každého udělátka.',
	'gadgets-uses' => 'používá',
	'gadgets-required-rights' => 'Vyžaduje následující {{PLURAL:$2|oprávnění}}:

$1',
	'gadgets-required-skins' => 'Dostupné {{PLURAL:$2|pro vzhled $1|pro následující vzhledy: $1}}.',
	'gadgets-default' => 'Implicitně zapnuto všem.',
	'gadgets-export' => 'Exportovat',
	'gadgets-export-title' => 'Export udělátka',
	'gadgets-not-found' => 'Udělátko „$1“ nebylo nalezeno.',
	'gadgets-export-text' => 'Chcete-li exportovat udělátko $1, klikněte na tlačítko „{{int:gadgets-export-download}}“, uložte stažený soubor, na cílové wiki přejděte na stránku Special:Import a soubor načtěte. Poté na tamní stránku MediaWiki:Gadgets-definition přidejte následující:
<pre>$2</pre>
Na cílové wiki musíte mít příslušná oprávnění (včetně práva editovat systémová hlášení) a musí tam být povolen import načtením souboru.',
	'gadgets-export-download' => 'Stáhnout',
);

/** Church Slavic (словѣньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'gadgets-title' => 'доплънитєл҄ьнꙑ орѫдиꙗ',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'gadgets-desc' => 'Yn galluogi defnyddwyr i ddewis [[Special:Gadgets|teclynnau CSS a JavaScript]] yn eu [[Special:Preferences#mw-prefsection-gadgets|dewisiadau]]',
	'prefs-gadgets' => 'Teclynnau',
	'gadgets-prefstext' => "Ceir rhestr isod o'r teclynnau y gallwch eu galluogi.
Mae'r rhan fwyaf o'r teclynnau yn defnyddio JavaScript, felly mae'n rhaid galluogi JavaScript ar eich porwr er mwyn iddynt weithio.
Sylwer na gaiff y teclynnau hyn unrhyw effaith ar y dudalen hon o ddewisiadau.

Sylwer hefyd nad yw'r teclynnau hyn yn ran o feddalwedd MediaWiki; fel arfer defnyddwyr y wici hwn sydd wedi datblygu'r teclynnau ac sydd yn eu cynnal.
Mae gweinyddwyr y wici hwn yn gallu golygu [[MediaWiki:Gadgets-definition|diffiniadau]] a [[Special:Gadgets|disgrifiadau]]'r teclynnau sydd ar gael.",
	'gadgets' => 'Teclynnau',
	'gadgets-title' => 'Teclynnau',
	'gadgets-pagetext' => "Isod mae rhestr o declynnau arbennig y gall defnyddwyr eu galluogi ar eu [[Special:Preferences#mw-prefsection-gadgets|tudalennau dewisiadau]], sef rhestr a bennir yn y dudalen [[MediaWiki:Gadgets-definition|diffiniadau]].
Mae'r trosolwg hwn yn cynnig mynediad rhwydd at y tudalennau negeseuon sustem sy'n diffinio disgrifiad a chod pob teclyn.",
	'gadgets-uses' => 'Yn defnyddio',
	'gadgets-required-rights' => 'Mae gofyn cael y {{PLURAL:$2||gallu|galluoedd|galluoedd|galluoedd|galluoedd}}:

$1',
	'gadgets-required-skins' => 'Ar gael ar y {{PLURAL:$2|wedd $1|gweddau hyn: $1}}.',
	'gadgets-default' => 'Wedi ei alluogi i bawb yn ddiofyn.',
	'gadgets-export' => 'Allforio',
	'gadgets-export-title' => 'Allforio teclyn',
	'gadgets-not-found' => 'Heb ddod o hyd i\'r teclyn "$1".',
	'gadgets-export-text' => "I allforio'r teclyn \$1, pwyswch ar y botwm \"{{int:gadgets-export-download}}\", rhowch y ffeil a islwythir ar gadw, ewch i Special:Import ar wici'r pendraw a'i huwchlwytho. Yna ychwanegwch y canlynol at y dudalen MediaWiki:Gadgets-definition:
<pre>\$2</pre>
Mae'n rhaid bod y galluoedd pwrpasol gennych ar wici'r pendraw (gan gynnwys y gallu i olygu negeseuon y sustem), a rhaid bod mewnforio drwy uwchlwytho ffeiliau wedi ei alluogi.",
	'gadgets-export-download' => 'Islwyther',
);

/** Danish (dansk)
 * @author Byrial
 * @author Peter Alberti
 */
$messages['da'] = array(
	'gadgets-desc' => 'Lader brugere vælge brugerdefinerede [[Special:Gadgets|CSS og JavaScript gadgets]] i deres [[Special:Preferences#mw-prefsection-gadgets|indstillinger]]',
	'prefs-gadgets' => 'Gadgets',
	'gadgets-prefstext' => 'Nedenstående er en liste over de gadgets som du kan aktivere for din brugerkonto.
Da disse gadgets hovedsageligt er baseret på JavaScript skal du slå JavaScript til i din browser for at få dem til at virke.
Bemærk at disse gadgets ikke vil have nogen effekt på denne side (indstillinger).

Bemærk også at disse specielle gadgets ikke er en del af MediaWiki-softwaren og at de typisk bliver vedligeholdt af brugere på din lokale wiki.
Lokale administratorer kan redigere tilgængelige gadgets med [[MediaWiki:Gadgets-definition|definitioner]] og [[Special:Gadgets|beskrivelser]].',
	'gadgets' => 'Gadgets',
	'gadgets-title' => 'Gadgets',
	'gadgets-pagetext' => 'Nedenstående er en liste med de specielle gadgets som brugere kan aktivere i deres [[Special:Preferences#mw-prefsection-gadgets|indstillinger]], som defineret i [[MediaWiki:Gadgets-definition|definitionerne]].
Denne oversigtsside giver simpel adgang til de beskedsider som definerer hver gadgets beskrivelse og kode.',
	'gadgets-uses' => 'Bruger',
	'gadgets-required-rights' => 'Kræver {{PLURAL:$2|rettigheden|følgende rettigheder}}:

$1',
	'gadgets-required-skins' => 'Tilgængelig for {{PLURAL:$2|$1-udseendet|de følgende udseender: $1}}.',
	'gadgets-default' => 'Aktiveret for alle som standard.',
	'gadgets-export' => 'Eksporter',
	'gadgets-export-title' => 'Eksporter gadget',
	'gadgets-not-found' => 'Gadget "$1" ikke fundet.',
	'gadgets-export-text' => 'For at eksportere værktøjet $1, klik på knappen "{{int:gadgets-export-download}}", gem den downloadede fil, gå til Special:Import på destinationswikien og læg den op. Tilføj så følgende til siden MediaWiki:Gadgets-definition:
<pre>$2</pre>
Du skal have de nødvendige rettigheder på destinationswikien (herunder rettigheden til at redigere systemmeddelelser) og importering via oplægning af filer skal være slået til.',
	'gadgets-export-download' => 'Download',
);

/** German (Deutsch)
 * @author Daniel Kinzler, brightbyte.de
 * @author Geitost
 * @author Kghbln
 * @author Metalhead64
 * @author Raimond Spekking
 * @author The Evil IP address
 * @author Umherirrender
 * @author ✓
 */
$messages['de'] = array(
	'gadgets-desc' => 'Ermöglicht es Benutzern, in ihren [[Special:Preferences#mw-prefsection-gadgets|persönlichen Einstellungen]] vordefinierte [[Special:Gadgets|CSS- und JavaScript-Helferlein]] zu aktivieren',
	'prefs-gadgets' => 'Helferlein',
	'gadgets-prefstext' => 'Dies ist eine Liste spezieller Helferlein, die jeder Benutzer aktivieren kann.
Die Helferlein basieren zumeist auf JavaScript. Daher muss JavaScript im Browser aktiviert sein, damit sie funktionieren können.
Sie funktionieren allerdings nicht auf dieser Spezialseite mit den persönlichen Einstellungen.

Außerdem ist zu beachten, dass diese Helferlein im Allgemeinen nicht Teil von MediaWiki sind, sondern meist von Benutzern lokaler Wikis entwickelt und gewartet werden.
Lokale Administratoren können die verfügbaren Helferlein bearbeiten. Dafür stehen die [[MediaWiki:Gadgets-definition|Definitionen]] und [[Special:Gadgets|Beschreibungen]] zur Verfügung.',
	'gadgets' => 'Helferlein',
	'gadgets-title' => 'Helferlein',
	'gadgets-pagetext' => 'Liste besonderer, in [[MediaWiki:Gadgets-definition]] festgelegter Helferlein, die für jeden Benutzer in seinen [[Special:Preferences#mw-prefsection-gadgets|persönlichen Einstellungen]] verfügbar sind.
Diese Übersicht bietet direkten Zugang zu den MediaWiki-Systemnachrichten, welche die Beschreibung sowie den Programmcode jedes Helferlein enthalten.',
	'gadgets-uses' => 'Benutzt',
	'gadgets-required-rights' => 'Erfordert die {{PLURAL:$2|folgende Berechtigung|folgenden Berechtigungen}}:

$1',
	'gadgets-required-skins' => 'Verfügbar bei {{PLURAL:$2|der folgenden Benutzeroberfläche|den folgenden Benutzeroberflächen}}: $1.',
	'gadgets-default' => 'Für alle standardmäßig aktiviert.',
	'gadgets-export' => 'Export',
	'gadgets-export-title' => 'Export der Helferlein',
	'gadgets-not-found' => 'Helferlein „$1“ wurde nicht gefunden.',
	'gadgets-export-text' => 'Um das Helferlein $1 zu exportieren, klicke auf die Schaltfläche „{{int:gadgets-export-download}}“ und speichere die heruntergeladene Datei. Gehe sodann zur Spezialseite Spezial:Import auf dem für den Import vorgesehenen Wiki und lade die Datei hoch. Füge danach den folgenden Text zur Seite MediaWiki:Gadgets-definition hinzu:
<pre>$2</pre>
Du musst über die notwendigen Berechtigungen auf dem für den Import vorgesehenen Wiki verfügen (einschließlich der Berechtigung, MediaWiki-Systemnachrichten zu bearbeiten). Zudem muss der Import von Datei-Uploads aktiviert sein.',
	'gadgets-export-download' => 'Herunterladen',
);

/** Swiss High German (Schweizer Hochdeutsch)
 * @author Geitost
 */
$messages['de-ch'] = array(
	'gadgets-prefstext' => 'Dies ist eine Liste spezieller Helferlein, die jeder Benutzer aktivieren kann.
Die Helferlein basieren zumeist auf JavaScript. Daher muss JavaScript im Browser aktiviert sein, damit sie funktionieren können.
Sie funktionieren allerdings nicht auf dieser Spezialseite mit den persönlichen Einstellungen.

Ausserdem ist zu beachten, dass diese Helferlein im Allgemeinen nicht Teil von MediaWiki sind, sondern meist von Benutzern lokaler Wikis entwickelt und gewartet werden.
Lokale Administratoren können die verfügbaren Helferlein bearbeiten. Dafür stehen die [[MediaWiki:Gadgets-definition|Definitionen]] und [[Special:Gadgets|Beschreibungen]] zur Verfügung.',
	'gadgets-default' => 'Für alle standardmässig aktiviert.',
	'gadgets-export-text' => 'Um das Helferlein $1 zu exportieren, klicke auf die Schaltfläche «{{int:gadgets-export-download}}» und speichere die heruntergeladene Datei. Gehe sodann zur Spezialseite Spezial:Import auf dem für den Import vorgesehenen Wiki und lade die Datei hoch. Füge danach den folgenden Text zur Seite MediaWiki:Gadgets-definition hinzu:
<pre>$2</pre>
Du musst über die notwendigen Berechtigungen auf dem für den Import vorgesehenen Wiki verfügen (einschliesslich der Berechtigung, MediaWiki-Systemnachrichten zu bearbeiten). Zudem muss der Import von Datei-Uploads aktiviert sein.',
);

/** German (formal address) (Deutsch (Sie-Form)‎)
 * @author Geitost
 * @author Kghbln
 */
$messages['de-formal'] = array(
	'gadgets-export-text' => 'Um das Helferlein $1 zu exportieren, klicken Sie auf die Schaltfläche „{{int:gadgets-export-download}}“ und speichern Sie die heruntergeladene Datei. Gehen Sie sodann zur Spezialseite Spezial:Import auf dem für den Import vorgesehenen Wiki und laden die Datei hoch. Fügen Sie danach den folgenden Text zur Seite MediaWiki:Gadgets-definition hinzu:
<pre>$2</pre>
Sie müssen über die notwendigen Berechtigungen auf dem für den Import vorgesehenen Wiki verfügen (einschließlich der Berechtigung, MediaWiki-Systemnachrichten zu bearbeiten). Zudem muss der Import von Datei-Uploads aktiviert sein.',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 * @author Gorizon
 * @author Mirzali
 * @author Neribij
 * @author Olvörg
 * @author Xoser
 */
$messages['diq'] = array(
	'gadgets-desc' => "Karberan ré destur bidek [[Special:Preferences#mw-prefsection-gadgets|hesıbyayan]]'ra [[Special:Gadgets|Hacetanê CSS u JavaScriptî]] bışé weçiné",
	'prefs-gadgets' => 'Haleti',
	'gadgets-prefstext' => 'Cêr de yew lista hacetanê xasan esta ke tı şenay xesabê xo de a kerê.
Enê haceti JavaScript sero gureyenê, aye ra tı gani ageyrayoğê xo de JavaScript a kerê.
Ena pela opsiyoni de haceti tesir nêkenê.

Enê hacetê xasi parçê sofwarê Mediyawiki niyê, aye ra karberê locali enê haceti vırazenê.
İdarekarê meheli şenê be [[MediaWiki:Gadgets-definition|kıfşkerdeyan]] û [[Special:Gadgets|arezekerdışan]] ra hacetanê mınasıban bıvurnê.',
	'gadgets' => 'Haleti',
	'gadgets-title' => 'Haleti',
	'gadgets-pagetext' => 'Cêr de yew listeya hacetanê xasan esta ke ti eşkenî [[Special:Preferences#mw-prefsection-gadgets|xesabê xo]] de a bikî, seke [[MediaWiki:Gadgets-definition|definitions]] nîşan dîyayo.
No ewnîyayîşo pêroyî îmkan dano ke merdim bi asanî bireso pelanê mesajanê sistemî ke descripisyon û kodê her hacetî nawneno.',
	'gadgets-uses' => 'Karber',
	'gadgets-required-rights' => 'Cêrêni icab kenê {{PLURAL:$2|raşti|raşteya}}:

$1',
	'gadgets-required-skins' => 'Zerrey {{PLURAL:$2|$1 skin|skino ke pawêno: $1}} dı esto.',
	'gadgets-default' => 'Merduman pêron rê aktiv ke.',
	'gadgets-export' => 'Teber de',
	'gadgets-export-title' => 'Teberdayışê gadgeti',
	'gadgets-not-found' => 'Gadget "$1" nêvineya.',
	'gadgets-export-text' => 'Qande gadgeto $1 teber rê rusnayış ,"{{int:gadgets-export-download}}" rê hengnayış kerên,u dosya ke download biyo,star kerên.Wikiyê hedef de şo pela Special:Import rê and download kerên.Bahdo nuşteyê ke cerên de dero pela MediaWiki:Gadgets-definition rê bınuse:
<pre>$2</pre>
Wikiyê ke hedefo de desturê lazımo (vurnayışê mesacanê sistemi daxilo) u dosya ra zerê rê rusnayışi enabled lazımo.',
	'gadgets-export-download' => 'Ron',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'gadgets-desc' => 'Dowólujo wužywarjam w jich [[Special:Preferences#mw-prefsection-gadgets|nastajenjach]] [[Special:Gadgets|gadgets CSS a JavaScript]] wubraś',
	'prefs-gadgets' => 'Gadgets',
	'gadgets-prefstext' => 'Dołojce jo lisćina specielnych gadgetow, kótarež móžoš za swójo konto zmóžniś.
Toś te gadgety se zwětšego bazěruju na JavaScripśe, togodla musy JavaScript w twójom wobglědowaku zmóžnjony byś, aby funkcioněrowali.
Glědaj, až toś te gadgety njewustatkuju se na bok nastajenjow.

Glědaj teke, až toś te gadgety njejsu źěl softwary MediaWiki a se zwětšego wót wužywarjow na twójom lokalnem wikiju wuwijaju a wótwarduju.
Lokalne administratory mógu k dispoziciji stojece gadgety z pomocu [[MediaWiki:Gadgets-definition|definicijow ]] a [[Special:Gadgets|wopisanjow]] wobźełaś.',
	'gadgets' => 'Gadgets',
	'gadgets-title' => 'Gadgets',
	'gadgets-pagetext' => 'Dołojce jo lisćina specialnych gadgetow, kótarež wužywarje mógu w [[Special:Preferences#mw-prefsection-gadgets|swójich nastajenjach]] zmóžniś, kaž w [[MediaWiki:Gadgets-definition]] definiěrowane.
Toś ten pśeglěd bitujo lažki pśistup k bokam systemowych powěsćow, kótarež wopisanje a kod gadgeta definěruju.',
	'gadgets-uses' => 'Wužywa',
	'gadgets-required-rights' => 'Pomina se {{PLURAL:$2|slědujuce pšawo|slědujucej pšawje|slědujuce pšawa|slědujuce pšawa}}:

$1',
	'gadgets-required-skins' => 'Na {{PLURAL:$2|slědujucej drastwje|slědujucyma drastwoma|slědujucych drastwach|slědujucych drastwach}} k dispoziciji: $1',
	'gadgets-default' => 'Za wšych standardnje zmóžnjony.',
	'gadgets-export' => 'Eksportěrowaś',
	'gadgets-export-title' => 'Eksport specialneje funkcije',
	'gadgets-not-found' => 'Specialna funkcija "$1" njejo se namakała.',
	'gadgets-export-text' => 'Aby specialnu funkciju $1 eksportěrował, klikni na tłocašk "{{int:gadgets-export-download}}", składuj ześěgnjonu dataju, źi do Special:Import w celowem wikiju a nagraj ju. Pśidaj pótom slědujuce k bokoju MediaWiki:Gadgets-definition:
<pre>$2</pre>
Musyš trěbne pšawa na celowem wikiju měś (inkluziwnje pšawo za wobźěłowanje systemowych powěźeńkow) a import datajowych nagraśow musy znjemóžnjony byś.',
	'gadgets-export-download' => 'Ześěgnuś',
);

/** Greek (Ελληνικά)
 * @author AK
 * @author Badseed
 * @author Consta
 * @author Dead3y3
 * @author Glavkos
 * @author Lou
 * @author ZaDiak
 */
$messages['el'] = array(
	'gadgets-desc' => 'Επιτρέπει στους χρήστες να διαλέξουν [[Special:Gadgets|CSS και JavaScript συσκευές]] στις [[Special:Preferences#mw-prefsection-gadgets|προτιμήσεις]] τους',
	'prefs-gadgets' => 'Ειδικές επιλογές',
	'gadgets-prefstext' => 'Ακολουθεί μια λίστα με ειδικές επιλογές που μπορείτε να ενεργοποιήσειτε για το λογαριασμό σας.
Αυτές οι επιλογές είναι βασισμένες κυρίως σε JavaScript, οπότε αυτή θα πρέπει να ενεργοποιηθεί στον φυλλομετρητή σας για να δουλέψουν.
Σημειώστε ότι οι επιλογές αυτές δεν θα έχουν καμία επίδραση σε αυτή τη σελίδα προτιμήσεων.

Επίσης σημειώστε ότι αυτές οι ειδικές επιλογές δεν είναι μέρος του λογισμικού MediaWiki, και συνήθως αναπτύσσονται και συντηρούνται από χρήστες στο τοπικό σας wiki.
Οι τοπικοί διαχειριστές μπορούν να επεξεργαστούν τις διαθέσιμες επιλογές χρησιμοποιώντας τις σελίδες [[MediaWiki:Gadgets-definition]] και [[Special:Gadgets]].',
	'gadgets' => 'Ειδικές επιλογές',
	'gadgets-title' => 'Συσκευές',
	'gadgets-pagetext' => 'Παρακάτω βρίσκεται ένας κατάλογος με τις ειδικές λειτουργίες τις οποίες οι χρήστες μπορούν να ενεργοποιήσουν στη [[Special:Preferences#mw-prefsection-gadgets|σελίδα προτιμήσεών]] τους, όπως ορίζεται από τη σελίδα [[MediaWiki:Gadgets-definition|ορισμών]].<br />
Αυτή η επισκόπηση παρέχει εύκολη πρόσβαση στις σελίδες μηνυμάτων του συστήματος που ορίζουν την περιγραφή και τον κώδικα κάθε λειτουργίας.',
	'gadgets-uses' => 'Χρήσεις',
	'gadgets-required-rights' => 'Απαιτεί {{PLURAL:$2|το εξής δικαίωμα|τα εξής δικαιώματα}}:

$1',
	'gadgets-default' => 'Ενεργοποιήθηκε για τον καθένα από προεπιλογή.',
	'gadgets-export' => 'Εξαγωγή',
	'gadgets-export-title' => 'Μικροεφαρμογή εξαγωγής',
	'gadgets-not-found' => 'Μικροεφαρμογή "$1" δεν βρέθηκε.',
	'gadgets-export-text' => 'Για την εξαγωγή της μικροεφαρμογής (gadget) $1, κάντε κλικ στο κουμπί "{{int:gadgets-export-download}}", αποθηκεύστε το αρχείο που λάβατε, πάτε στο Special:Import του wiki προορισμού και ανεβάστε το. Μετά προσθέστε τα παρακάτω στη σελίδα ορισμού των MediaWiki:Gadgets:
<pre>$2</pre>
Πρέπει να έχετε τα κατάλληλα δικαιώματα στο wiki προορισμού (συμπεριλαμβανομένου και του δικαιώματος επεξεργασίας μηνυμάτων συστήματος) και να είναι ενεργοποιημένη η εισαγωγή αρχείων προς ανέβασμα.',
	'gadgets-export-download' => 'Λήψη',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'gadgets-desc' => 'Permesas al uzantoj elekti proprajn [[Special:Gadgets|CSS kaj JavaScript aldonaĵojn]] en ties [[Special:Preferences#mw-prefsection-gadgets|preferoj]].',
	'prefs-gadgets' => 'Aldonaĵoj',
	'gadgets-prefstext' => 'Jen listo de specialaj aldonaĵoj kiujn vi povas aktivigi por via uzulkonto.
Plej multaj el ili baziĝas sur Ĵavaskriptoj, sekve Ĵavaskripto nepre estu aktivigita por ke ili funkciu.
Notu ke tiuj aldonaĵoj ne efikos sur viaj preferoj.

Notu ankaŭ ke ili ne estas parto de la programaro MediaWiki, kaj estas kutime evoluigitaj kaj prizorgataj de uzuloj sur via loka vikio.
Lokaj administrantoj povas redakti liston de haveblaj aldonaĵoj per [[MediaWiki:Gadgets-definition|difinoj]] kaj [[Special:Gadgets|priskriboj]].',
	'gadgets' => 'Aldonaĵoj',
	'gadgets-title' => 'Aldonaĵoj',
	'gadgets-pagetext' => 'Jen listo da specialaj aldonaĵoj kiujn uzuloj povas aktivigi en [[Special:Preferences#mw-prefsection-gadgets|siaj preferoj]], kiel difinite en [[MediaWiki:Gadgets-definition|difinoj]].
Ĉi tiu superrigardo provizas facilan aliron al la sistemaj mesaĝoj kiuj difinas la priskribon kaj la kodon de ĉiuj aldonaĵoj.',
	'gadgets-uses' => 'uzas',
	'gadgets-required-rights' => 'Bezonas la {{PLURAL:$2|jenan rajton|jenajn rajtojn}}:

$1',
	'gadgets-required-skins' => 'Dispona kun la {{PLURAL:$2|$1 etoso|jenaj etosoj:$1}}.',
	'gadgets-default' => 'Ŝaltita por ĉiu defaŭlte.',
	'gadgets-export' => 'Eksporti',
	'gadgets-export-title' => 'Aldonaĵo-eksportado',
	'gadgets-not-found' => 'Aldonaĵo "$1" ne estis trovita.',
	'gadgets-export-text' => 'Eksporti la aldonaĵon $1, klaku butonon "{{int:gadgets-export-download}}", konservu la elŝutitan dosieron,
iru Special:Import en cela vikio kaj alŝutu ĝin. Poste aldonu la jenan signoĉenon al paĝo MediaWiki:Gadgets-definition:
<pre>$2</pre>
Vi nepras la taŭgajn rajtojn ĉe cela vikio (inkluzivante rajton redakti sistemajn mesaĝojn) kaj importebleco de dosieraj alŝutaĵojn devas esti ŝaltita.',
	'gadgets-export-download' => 'Elŝuti',
);

/** Spanish (español)
 * @author Crazymadlover
 * @author Fitoschido
 * @author Muro de Aguas
 * @author Remember the dot
 * @author Sanbec
 * @author Vivaelcelta
 */
$messages['es'] = array(
	'gadgets-desc' => 'Permite a los usuarios seleccionar [[Special:Gadgets|accesorios de CSS y JavaScript personailzados]]
en sus [[Special:Preferences#mw-prefsection-gadgets|preferencias]].',
	'prefs-gadgets' => 'Accesorios',
	'gadgets-prefstext' => 'Debajo hay una lista de accesorios que puedes activar a tu gusto.
Ten en cuenta que la mayoría de ellos utilizan JavaScript para funcionar, así que debes tenerlo activado en tu navegador si quieres que los accesorios que actives funcionen.

Ten en cuenta también que estos complementos no forman parte del software MediaWiki, y están desarrollados por usuarios de este wiki.

Los administradores pueden editar los accesorios que están disponibles en las páginas [[MediaWiki:Gadgets-definition]] y [[Special:Gadgets]].',
	'gadgets' => 'Accesorios',
	'gadgets-title' => 'Accesorios',
	'gadgets-pagetext' => 'Debajo hay una lista de accesorios especiales que los usuarios pueden activar en sus [[Special:Preferences#mw-prefsection-gadgets|preferencias]], según la [[MediaWiki:Gadgets-definition|lista de definición de accesorios]]. Esta vista provee un acceso fácil a las páginas de mensajes del sistema que definen la descripción y el código de cada accesorio.',
	'gadgets-uses' => 'Usos',
	'gadgets-required-rights' => 'Requiere {{PLURAL:$2|el siguiente derecho|los siguientes derechos}}:

$1',
	'gadgets-required-skins' => 'Disponible {{PLURAL:$2|en la apariencia $1|en las siguientes apariencias: $1}}.',
	'gadgets-default' => 'Activado para todos de manera predeterminada.',
	'gadgets-export' => 'Exportar',
	'gadgets-export-title' => 'Exportación de gadget',
	'gadgets-not-found' => 'Gadget "$1" no encontrado.',
	'gadgets-export-text' => 'Para exportar el gadget $1, haz click en el botón "{{int:gadgets-export-download}}", graba el archivo descargado,
ve a Special:Importar un wiki de destino y subirlo. Luego agrega lo siguiente a MediaWiki:Gadgets-definition page:
<pre>$2</pre>
Debes tener permisos apropiados en el wiki de destino (incluyendo el derecho a editar mensajes de sistema) e importación desde archivos subidos debe estar habilitado.',
	'gadgets-export-download' => 'Descargar',
);

/** Estonian (eesti)
 * @author Avjoska
 * @author Pikne
 */
$messages['et'] = array(
	'gadgets-desc' => 'Võimaldab kasutajal [[Special:Preferences#mw-prefsection-gadgets|eelistuste leheküljel]] erinevaid [[Special:Gadgets|CSS- ja JavaScript-tööriistu]] valida.',
	'prefs-gadgets' => 'Tööriistad',
	'gadgets-prefstext' => 'Allpool on nimekiri eririistadest, mida kasutajad saavad oma konto jaoks sisse lülitada.
Enamasti põhinevad need riistad JavaScriptil, seega peab nende töötamiseks sinu veebilehitsejas JavaScript lubatud olema.
Pane tähele, et need riistad ei mõjuta kuidagi seda eelistuste lehekülge.

Samuti pane tähele, et need eririistad ei ole osa MediaWiki tarkvarast ja on tavaliselt arendatud ja ülalpeetud sinu kohalikus vikis.
Kohalikud administraatorid saavad olemasolevaid riistu muuta [[MediaWiki:Gadgets-definition|määratluste]] ja [[Special:Gadgets|kirjelduste]] abil.',
	'gadgets' => 'Tööriistad',
	'gadgets-title' => 'Tööriistad',
	'gadgets-pagetext' => 'Allpool on nimekiri eririistadest, mida kasutajad saavad oma [[Special:Preferences#mw-prefsection-gadgets|eelistuste leheküljel]] sisse lülitada, nii nagu [[MediaWiki:Gadgets-definition|määratlustes]] määratletud. See ülevaade võimaldab kergesti ligi pääseda süsteemi sõnumilehekülgedele, milles on iga riista kirjeldus ja kood.',
	'gadgets-uses' => 'Kasutab',
	'gadgets-required-rights' => 'Tarvis on {{PLURAL:$2|järgmist õigust|järgmisi õigusi}}:

$1',
	'gadgets-required-skins' => 'Saadaval {{PLURAL:$2|järgmise kujundusega|järgmiste kujundustega}}: $1.',
	'gadgets-default' => 'Vaikimisi kõigile lubatud.',
	'gadgets-export' => 'Ekspordi',
	'gadgets-export-title' => 'Tööriista eksportimine',
	'gadgets-not-found' => 'Tööriista "$1" ei leidu.',
	'gadgets-export-text' => 'Klõpsa nuppu "{{int:gadgets-export-download}}", et eksportida tööriist $1; salvesta allalaaditav fail;
mine sihtvikis leheküljele Special:Import ja laadi see üles. Seejärel lisa järgnev leheküljele MediaWiki:Gadgets-definition:
<pre>$2</pre>
Sul peavad olema sihtvikis vajalikud õigused (kaasa arvatud õigus redigeerida süsteemi sõnumeid) ja üleslaaditavate failide kaudu importimine peab olema lubatud.',
	'gadgets-export-download' => 'Laadi alla',
);

/** Basque (euskara)
 * @author An13sa
 * @author Inorbez
 * @author Joxemai
 * @author Unai Fdz. de Betoño
 * @author පසිඳු කාවින්ද
 */
$messages['eu'] = array(
	'gadgets-desc' => 'Lankideek [[Special:Gadgets|CSS eta JavaScript gadgetak]] aukeratu ditzazkete beraien [[Special:Preferences#mw-prefsection-gadgets|hobespenetan]]',
	'prefs-gadgets' => 'Gadgetak',
	'gadgets-prefstext' => 'Zure kontuan erabili ditzakezun gadgeten zerrenda bat agertzen da behean.
JavaScript-en oinarritzen dira gehienbat gadget hauek; beraz, funtzionatzeko zure nabigatzailean JavaScript gaituta egon behar da.
Kontuan izan gadget hauek ez dutela eraginik izango hobespen orri honetan.

Kontuan izan baita gadget berezi hauek ez direla MediaWiki softwarearen zati bat. Gehienetan guneko wikietako garatzaileek sortu eta mantentzen dituzte.
Administratzaileek [[MediaWiki:Gadgets-definition|definizioak]] eta [[Special:Gadgets|deskribapenak]] erabiliz aldatu dezakete eskuragarri dauden gadgetak.',
	'gadgets' => 'Gadgetak',
	'gadgets-title' => 'Gadgetak',
	'gadgets-pagetext' => 'Erabiltzaile bakoitzak bere [[Special:Preferences#mw-prefsection-gadgets|hobespen orrian]] erabili ditzakeen gadgeten zerrenda bat agertzen da behean, [[MediaWiki:Gadgets-definition|definizioek]] zehaztu bezala.
Ikuspegi orokor honek gadget bakoitza definitzen duen deskribapen eta kode orrietarako lotura errazak eskaintzen ditu.',
	'gadgets-uses' => 'Erabilerak',
	'gadgets-export' => 'Esportatu',
	'gadgets-export-title' => 'Gadgeten esportazioa',
	'gadgets-export-download' => 'Jaitsi',
);

/** Extremaduran (estremeñu)
 * @author Better
 */
$messages['ext'] = array(
	'gadgets-uses' => 'Usus',
);

/** Persian (فارسی)
 * @author Bersam
 * @author Ebraminio
 * @author Huji
 * @author Ladsgroup
 * @author Reza1615
 * @author Wayiran
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'gadgets-desc' => 'به کاربرها امکان انتخاب [[Special:Gadgets|ابزارهای شخصی سی‌اس‌اس و جاوااسکریپت]] را از طریق صفحهٔ [[Special:Preferences#mw-prefsection-gadgets|ترجیحات]] می‌دهد',
	'prefs-gadgets' => 'ابزارها',
	'gadgets-prefstext' => 'در زیر فهرستی از ابزارهای ویژه‌ای که می‌توانید برای حساب کاربری‌تان فعال کنید را می‌بینید.
این ابزارها در بیشتر موارد مبتنی بر جاوااسکریپت هستند، پس برای استفاده از آن‌ها باید جاوااسکرپیت را در مرورگر خودتان فعال کنید.
توجه کنید که این ابزارها نمی‌توانند صفحهٔ ترجیحات را تغییر دهند.

دقت داشته باشد که این ابزارها جزئی از نرم‌افزار مدیاویکی نیستند، و معمولاً توسط کاربران هر ویکی ساخته و نگهداری می‌شوند.
مدیران هر ویکی می‌توانند با استفاده از صفحه‌های [[MediaWiki:Gadgets-definition|تعاریف]] و [[Special:Gadgets|توضیحات]] به ویرایش ابزارها بپردازند.',
	'gadgets' => 'ابزارها',
	'gadgets-title' => 'ابزارها',
	'gadgets-pagetext' => 'در زیر فهرستی از ابزارهای ویژه‌ای که کاربران می‌توانند از طریق [[Special:Preferences#mw-prefsection-gadgets|صفحهٔ ترجیحاتشان]] فعال کنند می‌بینید، که مطابق آن چه است که در صفحهٔ [[MediaWiki:Gadgets-definition|تعاریف]] تعریف شده‌است.
این خلاصه کمک می‌کند که به صفحه‌های پیغام سیستمی که توضیحات و کد هر ابزار را شامل می‌شوند به راحتی دست پیدا کنید.',
	'gadgets-uses' => 'برنامه',
	'gadgets-required-rights' => 'به {{PLURAL:$2|دسترسی|دسترسی‌های}} روبرو نیاز است:

$1',
	'gadgets-required-skins' => 'قابل دسترس در {{PLURAL:$2|پوستهٔ $1|پوسته‌های $1}}.',
	'gadgets-default' => 'به‌طور پیش‌فرض برای همه فعال است.',
	'gadgets-export' => 'برون‌بری',
	'gadgets-export-title' => 'برون‌بری ابزار',
	'gadgets-not-found' => 'ابزار «$1» یافت نشد.',
	'gadgets-export-text' => 'برای برون‌بری ابزار $1، بر دکمهٔ «{{int:gadgets-export-download}}» کلیک کنید، پروندهٔ بارگیری‌شده را ذخیره کنید، به ویژه:درون‌ریزی در ویکی مقصد بروید و بارگذاری‌اش کنید. سپس این را به صفحهٔ مدیاویکی:Gadgets-definition بیفزایید:
<pre>$2</pre>
لازم است تا در ویکی مقصد دسترسی‌های مناسب (شامل حق ویرایش پیغام‌های سامانه) را داشته باشید و درون‌ریزی از بارگذاری‌های پرونده باید فعال شده باشد.',
	'gadgets-export-download' => 'دریافت',
);

/** Finnish (suomi)
 * @author Crt
 * @author Nike
 * @author Olli
 * @author Stryn
 */
$messages['fi'] = array(
	'gadgets-desc' => 'Tarjoaa mahdollisuuden käyttäjille ottaa käyttöön [[Special:Gadgets|määritettyjä CSS- ja JavaScript-pienoisohjelmia]] omista [[Special:Preferences#mw-prefsection-gadgets|asetuksistaan]].',
	'prefs-gadgets' => 'Pienoisohjelmat',
	'gadgets-prefstext' => 'Alla on lista pienoisohjelmista, joita käyttäjät voivat ottaa käyttöön. Nämä pienoisohjelmat pohjautuvat usein JavaScriptiin, joten toimiakseen selaimessasi pitää olla JavaScript käytössä.

Huomioi myös, että nämä pienoisohjelmat eivät ole osa MediaWiki-ohjelmistoa – tavallisesti niitä kehittävät ja ylläpitävät paikallisen wikin käyttäjät. Paikalliset ylläpitäjät voivat muokata saatavilla olevia pienoisohjelmia [[MediaWiki:Gadgets-definition|määrityssivulla]] ja [[Special:Gadgets|kuvauksista]].',
	'gadgets' => 'Pienoisohjelmat',
	'gadgets-title' => 'Pienoisohjelmat',
	'gadgets-pagetext' => 'Alla on lista pienoisohjelmista, joita käyttäjät voivat ottaa käyttöön [[Special:Preferences#mw-prefsection-gadgets|asetussivulta]]. Pienoisohjelmat määritetään [[MediaWiki:Gadgets-definition|täältä]].

Tämä lista antaa helpon pääsyn järjestelmäviesteihin, jotka sisältävät pienoisohjelmien kuvauksen ja koodin.',
	'gadgets-uses' => 'Käyttää',
	'gadgets-required-rights' => 'Edellyttää {{PLURAL:$2|seuraavaa oikeutta|seuraavia oikeuksia}}:

$1',
	'gadgets-required-skins' => 'Saatavilla {{PLURAL:$2|seuraavaan ulkoasuun|seuraaviin ulkoasuihin}}: $1.',
	'gadgets-default' => 'Oletusarvoisesti käytössä kaikille.',
	'gadgets-export' => 'Vie',
	'gadgets-export-title' => 'Pienoisohjelmien vienti',
	'gadgets-not-found' => 'Pienoisohjelmaa $1 ei löytynyt.',
	'gadgets-export-text' => 'Jos haluat kopioida pienoisohjelman $1 omaan wikiisi, toimi seuraavasti: Napsauta »{{int:gadgets-export-download}}» ja tallenna tiedosto. Mene oman wikisi sivulle Special:Import ja syötä tallennettu tiedosto. Lisää seuraava koodinpätkä sivulle MediaWiki:Gadgets-definition omassa wikissäsi:
<pre>$2</pre>
Sinulla pitää olla tarvittavat oikeudet omassa wikissäsi, kuten järjestelmäviestien muokkaus ja sivujen tuonti tiedostoja tallentamalla.',
	'gadgets-export-download' => 'Lataa',
);

/** Faroese (føroyskt)
 * @author EileenSanda
 */
$messages['fo'] = array(
	'gadgets-uses' => 'Brúkar',
	'gadgets-required-rights' => 'Krevur fylgjandi {{PLURAL:$2|rættindi|rættindi}}:

$1',
	'gadgets-required-skins' => 'Tøk á {{PLURAL:$2|$1 útsjónd|fylgjandi útsjóndum: $1}}.',
	'gadgets-default' => 'Gjørt virkið fyri øllum sum standard',
	'gadgets-export' => 'Útflyt',
);

/** French (français)
 * @author Delhovlyn
 * @author Dr Brains
 * @author Grondin
 * @author IAlex
 * @author Meno25
 * @author Peter17
 * @author PieRRoMaN
 * @author Sherbrooke
 * @author Urhixidur
 * @author Zcqsc06
 * @author Zetud
 */
$messages['fr'] = array(
	'gadgets-desc' => 'Permet aux utilisateurs de choisir des [[Special:Gadgets|gadgets CSS et Javascripts]] personnalisés dans leurs [[Special:Preferences#mw-prefsection-gadgets|préférences]]',
	'prefs-gadgets' => 'Gadgets',
	'gadgets-prefstext' => 'Ci-dessous apparaît une liste de gadgets que vous pouvez activer pour votre compte. Ils font appel à JavaScript, lequel doit donc être activé pour votre navigateur Web.

Notez aussi que ces gadgets spéciaux ne font nullement partie du logiciel MediaWiki. De plus, ils sont généralement développés et maintenus par les utilisateurs sur votre wiki local. Les administrateurs locaux peuvent modifier les gadgets disponibles en utilisant [[MediaWiki:Gadgets-definition|les définitions]] et les [[Special:Gadgets|descriptions]].',
	'gadgets' => 'Gadgets',
	'gadgets-title' => 'Gadgets',
	'gadgets-pagetext' => 'Voici une liste de gadgets que les utilisateurs peuvent activer dans leur [[Special:Preferences#mw-prefsection-gadgets|page de préférences]], tel que défini dans les [[MediaWiki:Gadgets-definition|définitions]].
Cette vue d’ensemble donne un accès rapide aux pages de messages système qui définissent la description et le code de chaque gadget.',
	'gadgets-uses' => 'Utilise',
	'gadgets-required-rights' => 'Requiert {{PLURAL:$2|le droit suivant|les droits suivants}} : 

$1.',
	'gadgets-required-skins' => 'Disponible sur {{PLURAL:$2|l’habillage suivant|les habillages suivants}} : $1.',
	'gadgets-default' => 'Activé pour tout le monde par défaut.',
	'gadgets-export' => 'Exporter',
	'gadgets-export-title' => 'Export de gadget',
	'gadgets-not-found' => 'Gadget « $1 » non trouvé.',
	'gadgets-export-text' => 'Pour exporter le gadget $1, cliquez sur le bouton « {{int:gadgets-export-download}} », enregistrez le fichier téléchargé puis allez sur la page Special:Import du wiki de destination et importez-la. Ajoutez ensuite le texte suivant dans la page MediaWiki:Gadgets-definition :
<pre>$2</pre>
Il est nécessaire de disposer des droits correspondants sur le wiki de destination (y compris celui de modifier les messages système) et l’import depuis des fichiers doit être activé.',
	'gadgets-export-download' => 'Télécharger',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'gadgets-desc' => 'Pèrmèt ux usanciérs de chouèsir des [[Special:Gadgets|outils CSS et JavaScript]] pèrsonalisâs dens lors [[Special:Preferences#mw-prefsection-gadgets|prèferences]].',
	'prefs-gadgets' => 'Outils',
	'gadgets-prefstext' => 'Vê-que una lista d’outils que vos pouede activar por voutron compto.
Font apèl a JavaScript, que dêt vêr étre activâ sur voutron navigator por que fonccionont.
Notâd que celos outils ont gins de rèsultat sur ceta pâge de prèferences.

Notâd asse-ben que celos outils spèciâls sont pas du tot avouéc la programeria MediaWiki, et pués que sont en g·ènèral dèvelopâs et mantegnus per des usanciérs sur voutron vouiqui local.
Los administrators locals pôvont changiér los outils disponiblos en utilisent les [[MediaWiki:Gadgets-definition|dèfinicions]] et les [[Special:Gadgets|dèscripcions]].',
	'gadgets' => 'Outils',
	'gadgets-title' => 'Outils',
	'gadgets-pagetext' => 'Vê-que una lista d’outils que los usanciérs pôvont activar dens lor [[Special:Preferences#mw-prefsection-gadgets|pâge de prèferences]], coment dèfeni dens les [[MediaWiki:Gadgets-definition|dèfinicions]].
Ceti apèrçu balye un accès vito fêt a les pâges de mèssâjos sistèmo que dèfenéssont la dèscripcion et lo code de châque outil.',
	'gadgets-uses' => 'Utilise',
	'gadgets-required-rights' => 'At fôta de cet{{PLURAL:$2|i drêt|os drêts}} :

$1',
	'gadgets-required-skins' => 'Disponiblo sur {{PLURAL:$2|l’habelyâjo « $1 »|cetos habelyâjos : « $1 »}}.',
	'gadgets-default' => 'Activâ por tot lo mondo per dèfôt.',
	'gadgets-export' => 'Èxportacion',
	'gadgets-export-title' => 'Èxportacion d’outil',
	'gadgets-not-found' => 'Outil « $1 » pas trovâ.',
	'gadgets-export-text' => 'Por èxportar l’outil $1, clicar sur lo boton « {{int:gadgets-export-download}} », encartar lo fichiér tèlèchargiê,
pués alar sur la pâge « Spèciâl:Importacion du vouiqui de dèstinacion » et pués l’importar. Apondre aprés ceti tèxto dens la pâge « MediaWiki:Gadgets-definition » :
<pre>$2</pre>
O est nècèssèro de d’avêr los drêts corrèspondents sur lo vouiqui de dèstinacion (celi de changiér los mèssâjos sistèmo avouéc) et pués l’importacion dês des fichiérs dêt étre activâ.',
	'gadgets-export-download' => 'Tèlèchargiér',
);

/** Northern Frisian (Nordfriisk)
 * @author Murma174
 */
$messages['frr'] = array(
	'gadgets-desc' => 'Brükern kön uun hör [[Special:Preferences#mw-prefsection-gadgets|iinstelangen]] enkelt [[Special:Gadgets|CSS- an JavaScript-halpers]] aktiwiare',
	'prefs-gadgets' => 'Letj halpers',
	'gadgets-prefstext' => 'Diar stun enkelt letj halpers, diar arke brüke aktiwiare koon. Jo san miast uun JavaScript skrewen, an diaram kön jo bluas werke, wan JavaScript uun a browser aktiif as. Üüb detheer spezial-sidj werke jo oober ei.

Jodiar letj halpers san nään dial faan MediaWiki an wurd miast faan enkelt brükern ütjspekeliaret. Administratooren kön jo letj halpers bewerke. Diarför jaft at [[MediaWiki:Gadgets-definition|definitjuunen]] an [[Special:Gadgets|beskriiwangen]].',
	'gadgets' => 'Letj halpers',
	'gadgets-title' => 'Letj halpers',
	'gadgets-pagetext' => 'Diar stun letj halpers, diar uun det [[MediaWiki:Gadgets-definition|definitjuun]] fäästlaanj san an diar arke brüker uun sin [[Special:Preferences#mw-prefsection-gadgets|iinstelangen]] iinracht koon.

Auer detheer sidj komst dü tu a MediaWiki-süsteemnoorachten mä en beskriiwang an di program-code.',
	'gadgets-uses' => 'Tu brüken',
	'gadgets-required-rights' => 'Diarför brükst dü {{PLURAL:$2|detdiar brükerrocht|jodiar brükerrochten}}:

$1',
	'gadgets-required-skins' => 'Koon mä {{PLURAL:$2|didiar skak|jodiar skaker}} brükt wurd: $1.',
	'gadgets-default' => 'Det as faan began för arken aktiif.',
	'gadgets-export' => 'Eksport',
	'gadgets-export-title' => 'Eksport faan letj halpers',
	'gadgets-not-found' => 'Letj halper "$1" ei fünjen.',
	'gadgets-export-text' => 'Am di letj halper $1 tu eksportiarin, trak üüb „{{int:gadgets-export-download}}“ an seekre det datei üüb dan reegner. Do gung tu "Spezial:Import" üüb det wiki, huar di letj halper importiaret wurd skal an schüür det datei huuch. Skriiw do noch didiar tekst üüb det sidj MediaWiki:Gadgets-definition:
<pre>$2</pre>
Huar dü det importiare wel, brükst dü jo nuadag brükerrochten tu importiarin an uk det brükerrocht, am MediaWiki-süsteemnoorachten tu bewerkin. An do skal natüürelk det importiarin uun detdiar wiki aktiwiaret wees.',
	'gadgets-export-download' => 'Deelloose',
);

/** Irish (Gaeilge)
 * @author පසිඳු කාවින්ද
 */
$messages['ga'] = array(
	'gadgets-export' => 'Easportáil',
);

/** Galician (galego)
 * @author Alma
 * @author Toliño
 */
$messages['gl'] = array(
	'gadgets-desc' => 'Deixa que os usuarios seleccionen [[Special:Gadgets|trebellos CSS e JavaScript]] nas súas [[Special:Preferences#mw-prefsection-gadgets|preferencias]]',
	'prefs-gadgets' => 'Trebellos',
	'gadgets-prefstext' => 'A continuación hai unha lista de trebellos especiais que pode activar para a súa conta.
A maioría destes trebellos baséanse no JavaScript, así que ten que ter o JavaScript activado no seu navegador para que funcionen.
Teña en conta que estes trebellos non funcionarán nesta páxina de preferencias.

Teña tamén en conta que estes trebellos especiais non son parte do software de MediaWiki e que os crean e manteñen os usuarios no seu wiki local. Os administradores locais poden editar as [[MediaWiki:Gadgets-definition|definicións]] e [[Special:Gadgets|descricións]] dos trebellos dispoñibles.',
	'gadgets' => 'Trebellos',
	'gadgets-title' => 'Trebellos',
	'gadgets-pagetext' => 'Embaixo hai unha lista dos trebellos especiais que os usuarios poden habilitar na súa páxina de preferencias, tal e como se describe nas [[MediaWiki:Gadgets-definition|definicións]].
Este panorama xeral é de doado acceso ao sistema das páxinas de mensaxes que define cada descrición e código dos trebellos.',
	'gadgets-uses' => 'Usa',
	'gadgets-required-rights' => '{{PLURAL:$2|Cómpre o seguinte dereito|Cómpren os seguintes dereitos}}:

$1',
	'gadgets-required-skins' => 'Dispoñible {{PLURAL:$2|na aparencia $1|nas seguintes aparencias: $1}}.',
	'gadgets-default' => 'Activado para todos por defecto.',
	'gadgets-export' => 'Exportar',
	'gadgets-export-title' => 'Exportación de trebellos',
	'gadgets-not-found' => 'Non se atopou o trebello "$1".',
	'gadgets-export-text' => 'Para exportar o trebello $1, prema sobre o botón "{{int:gadgets-export-download}}", garde o ficheiro descargado,
vaia á páxina especial Special:Import do wiki de destino e cárgueo. A continuación, engada o seguinte texto na páxina MediaWiki:Gadgets-definition:
<pre>$2</pre>
Debe ter os permisos axeitados no wiki de destino (incluído o dereito de modificar as mensaxes do sistema) e a importación desde a carga de ficheiros debe estar activada.',
	'gadgets-export-download' => 'Descargar',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'prefs-gadgets' => 'Μηχανήματα',
	'gadgets' => 'Μηχανήματα',
	'gadgets-title' => 'Μηχανήματα',
	'gadgets-uses' => 'Χρήσεις',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 * @author Als-Holder
 */
$messages['gsw'] = array(
	'gadgets-desc' => 'Macht s Benutzer megli, in ihre [[Special:Preferences#mw-prefsection-gadgets|persenlige Yystellige]] vordefinierti [[Special:Gadgets|CSS- und JavaScript-Gadgets]] z aktiviere',
	'prefs-gadgets' => 'Gadgets',
	'gadgets-prefstext' => 'Unter git s e Lischt vu spezielle Gadgets, wu for jede Benutzer chenne aktiviert wäre.
D Gadgets basiere zmeischt uf JavaScript, wäge däm muess JavaScript im Browser aktiviert syy, ass si funktioniere.
D Gadgets funktionieren aber nit uf däre Syte mit persenlige Yystellige.

Mer muess au Acht gee, ass die Gadgets im Allgmeinen nit Teil vu MediaWiki sin, sundern meischt vu
Benutzer vum lokale Wikis entwicklet un gwartet wäre. Lokali Wiki-Ammanne chenne d Lischt vu dr verfiegbare Gadgets iber d Syte [[MediaWiki:Gadgets-definition]] un [[Special:Gadgets]] bearbeite',
	'gadgets' => 'Gadgets',
	'gadgets-title' => 'Gadgets',
	'gadgets-pagetext' => 'Lischt vu spezielle Gadgets, wu fir jede Benutzer in syyne [[Special:Preferences#mw-prefsection-gadgets|persenlige Yystellige]] verfiegbar sin, wie s [[MediaWiki:Gadgets-definition|definiert]] isch.
Die Ibersicht bietet e direkte Zuegang zue dr Syschtemnochrichte, wu d Bschryybig un dr Programmcode vu jedem Gadget din sin.',
	'gadgets-uses' => 'Bruucht',
	'gadgets-required-rights' => 'Brucht {{PLURAL:$2|des folgendi Rächt|die folgende Rächt}}:
$1',
	'gadgets-required-skins' => 'Verfiegbar uff {{PLURAL:$2|derre Benutzeroberflächi|dänne Benutzeroberflächene}}: $1.',
	'gadgets-default' => 'Fir alli standardmäßig aktiviert.',
	'gadgets-export' => 'Exportiere',
	'gadgets-export-title' => 'Hälferli exportiere',
	'gadgets-not-found' => 'Hälferli „$1“ isch nit gfunde wore.',
	'gadgets-export-text' => 'Go s Hälferli $1 exportiere, klick uf d Schaltflechi „{{int:gadgets-export-download}}“ un tue di abeglade Datei spychere. Gang derno uf d Spezialsyte Spezial:Import uf em Wiki, wu fir dr Import vorgsäh isch, un lad d Datei ufe. Derno fieg dää Text in d Syte MediaWiki:Gadgets-definition yy:
<pre>$2</pre>
Du muesch iber di notwändige Rächt uf em Wiki verfiege, wu fir dr Import vorgsäh isch (mitsamt em Rächt MediaWiki-Syschtemnochrichte z bearbeite). Derzue mueß dr Import vu Datei-Upload aktiviert syy.',
	'gadgets-export-download' => 'Abelade',
);

/** Gujarati (ગુજરાતી)
 * @author Dsvyas
 * @author KartikMistry
 * @author Sushant savla
 */
$messages['gu'] = array(
	'gadgets-desc' => 'સભ્યોને  [[Special:Preferences#mw-prefsection-gadgets|મારી પસંદ]] માં પોતાના [[Special:Gadgets|CSS અને JavaScript ગેજેટ્સ]]  પસંદ કરવા દે છે.',
	'prefs-gadgets' => 'યંત્રો/સાધનો',
	'gadgets-prefstext' => "નીચે એવા વિશેષ સાધનોની યાદી નીચે આપી છે જે તમે તમારા ખાતામાં સક્રિય કરી શકો છો.
આ સાધનો મહદ્ અંશે જાવા સ્ક્રિપ્ટ આધારિત છે માટે તે યોગ્ય રીતે કામ કરે તે માટે આપના બ્રાઉઝરમાં જાવા સ્ક્રિપ્ટ સક્રિય (ઍનેબલ) કરેલી હોવી જરૂરી છે.
એ બાબત નોંધમાં લેશો કે આ સાધનોની અસર તમારા 'મારી પસંદ'ના પાના ઉપર થશે નહી.

એ વાત પણ ધ્યાનમાં રાખશો કે આ વિશેષ સાધનો મિડિયાવિકિ સૉફ્ટવેરનો ભાગ નથી, સામાન્ય રીતે તે આપના સ્થાનીક વિકિના સભ્યો દ્વારા વિકસાવવામાં આવ્યા હોય છે અને તેઓજ તેનું ધ્યાન રાખે છે. સ્થાનિક પ્રબંધકો [[MediaWiki:Gadgets-definition|વ્યાખ્યા]] અને [[Special:Gadgets|વર્ણન]]નો ઉપયોગ કરીને આ સાધનોમાં ફેરફાર કરી શકે છે.",
	'gadgets' => 'યંત્રો/સાધનો',
	'gadgets-title' => 'યંત્રો/સાધનો',
	'gadgets-pagetext' => 'નીચે એવા વિશેષ સાધનોની યાદી આપી છે જેમાથી જરૂરીયાત પ્રમાણેના સાધનો સભ્ય તેમના [[Special:Preferences#mw-prefsection-gadgets|મારી પસંદ]] પાના ઉપર સક્રિય કરી શકે છે ([[MediaWiki:Gadgets-definition|વ્યાખ્યા]]મા વર્ણવ્યા મુજબ).

આ નિરિક્ષણથી સહેલાઇથી સિસ્ટમ સંદેશા વાળા પાના ખોલી શકશો જ્યાં દરેક સાધનનું વર્ણન અને તેનો કોડ આપેલો છે.',
	'gadgets-uses' => 'ઉપયોગો',
	'gadgets-required-rights' => 'નીચેના {{PLURAL:$2|હક્ક|હક્કો}} જરૂરી:

$1',
	'gadgets-required-skins' => '{{PLURAL:$2|$1 ત્વચા|નીચેની ત્વચા: $1}} માં મોજૂદ.',
	'gadgets-default' => 'મૂળ થકી સૌ માટે સક્રીય કરો',
	'gadgets-export' => 'નિકાસ',
	'gadgets-export-title' => 'સાધન નિકાસ',
	'gadgets-not-found' => 'સાધન જૂથ "$1" ન મળ્યું.',
	'gadgets-export-text' => '$1 યંત્રને નિકાસિત કરવા, "{{int:gadgets-export-download}}" બટન પર ક્લિક કરો, અને કાઉનલોડ કરેલી ફાઈલ સાચવો,
Special:Import નિયોજીત વિકિ પર Special:Import પર જાવ અને અપલોડ કરો. અને પછી નીચેનાને MediaWiki:Gadgets-definition page પર ઉમેરો:
<pre>$2</pre>
નોયોજિત વિકિ પર તમને યોગ્ય પરવાનગીઓ હોવી જોઈએ (સિસ્ટમ સંદેશામાં ફેરફાર કરવા સહિતની) અને ફાઈલ અપલોડ માં આયત વિકલ્પ સક્રીય હોવો જોઇએ',
	'gadgets-export-download' => 'ડાઉનલોડ',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Guycn1
 * @author Guycn2
 * @author Rotem Liss
 * @author YaronSh
 */
$messages['he'] = array(
	'gadgets-desc' => 'אפשרות למשתמשים לבחור [[Special:Gadgets|סקריפטים בקוד JavaScript וסגנונות בקוד CSS]] ב[[Special:Preferences#mw-prefsection-gadgets|העדפות]] שלהם',
	'prefs-gadgets' => "גאדג'טים",
	'gadgets-prefstext' => 'להלן רשימה של סקריפטים שתוכלו להתקין בחשבון שלכם.
הסקריפטים מבוססים ברובם על שפת JavaScript, ולכן יש לאפשר את הפעלתה בדפדפן כדי שהם יעבדו.
שימו לב שלא תהיה לסקריפטים כל השפעה על דף ההעדפות הזה.

כמו כן, הסקריפטים אינם חלק מתוכנת מדיה־ויקי, והם בדרך כלל מפותחים ומתוחזקים על ידי משתמשים בוויקי המקומי.
מפעילי המערכת יכולים לערוך את ב[[MediaWiki:Gadgets-definition|דף ההגדרות]] ו[[Special:Gadgets|התיאורים]] של הסקריפטים.',
	'gadgets' => "גאדג'טים",
	'gadgets-title' => 'סקריפטים',
	'gadgets-pagetext' => 'זוהי רשימה של סקריפטים שמשתמשים יכולים להתקין באמצעות [[Special:Preferences#mw-prefsection-gadgets|דף ההעדפות]] שלהם, כפי שהוגדרו ב[[MediaWiki:Gadgets-definition|הודעת המערכת המתאימה]].
מכאן ניתן לגשת בקלות לדפי הודעות המערכת שמגדירים את התיאור והקוד של כל סקריפט.',
	'gadgets-uses' => 'משתמש בדפים',
	'gadgets-required-rights' => '{{PLURAL:$2|נדרשת ההרשאה הבאה|נדרשות ההרשאות הבאות}}:

$1',
	'gadgets-required-skins' => 'זמין {{PLURAL:$2|בערכות העיצוב הבאות: $1|בערכת העיצוב $1}}',
	'gadgets-default' => 'מופעל לכולם כברירת מחדל.',
	'gadgets-export' => 'יצוא',
	'gadgets-export-title' => "יצוא גאדג'טים",
	'gadgets-not-found' => 'הגאדג׳ט "$1" לא נמצא.',
	'gadgets-export-text' => 'כדי לייצא את הגאדג׳ט $1, יש ללחוץ על הלחצן "{{int:gadgets-export-download}}", לשמור את הקובץ שהתקבל,
לגשת אל Special:Import באתר הוויקי המיועד ולהעלות אותו. ואז להוסיף את הדברים הבאים לדף MediaWiki:Gadgets-definition:
<pre>$2</pre>
עליך להיות עם הרשאות מתאימות באתר הוויקי המיועד (לרבות הרשאות לעריכת הודעות מערכת) והאפשרות לייבוא מקובץ חייבת להיות מופעלת.',
	'gadgets-export-download' => 'הורדה',
);

/** Hindi (हिन्दी)
 * @author Ansumang
 * @author Kaustubh
 * @author Mayur
 * @author Shyam
 * @author Siddhartha Ghai
 */
$messages['hi'] = array(
	'gadgets-desc' => 'सदस्यों को उनकी [[Special:Preferences#mw-prefsection-gadgets|वरीयताओं]] में से चुनिंदा [[Special:Gadgets|CSS और जावालिपि जुगत]] चुनने दो।',
	'prefs-gadgets' => 'उपकरण (गैजेट)',
	'gadgets-prefstext' => 'नीचे विशेष उपकरणों की सूची दी गई है, जिन्हें आप अपने खाते के लिये सक्षम कर सकते हैं।
ये उपकरण अधिकांशतः जावास्क्रिप्ट पर आधारित है, इसलिए इनके कार्यशील होने के लिए आपके ब्राउज़र में जावास्क्रिप्ट सक्षम होनी चाहिये।
ध्यान दें कि इन उपकरणों से आपके वरीयता पृष्ठ पर कोई असर नहीं होगा।

यह भी ध्यान दें कि ये विशेष उपकरण मीडियाविकी सॉफ़्टवेयर का भाग नहीं हैं, और प्रायः सदस्यों द्वारा उनकी स्थानीय विकी पर विकसित एवं अनुरक्षित किए जाते हैं।
स्थानीय प्रबंधक उपकरणों की [[MediaWiki:Gadgets-definition|परिभाषाएँ]] एवं [[Special:Gadgets|विवरण]] संपादित कर सकते हैं।',
	'gadgets' => 'उपकरण',
	'gadgets-title' => 'उपकरण',
	'gadgets-pagetext' => 'नीचे सभी [[MediaWiki:Gadgets-definition|परिभाषित]] विशेष उपकरणों की सूची दी गई है, जिन्हें सदस्य [[Special:Preferences#mw-prefsection-gadgets|अपनी वरीयताओं]] से सक्षम कर सकते हैं।
यह समीक्षा सभी उपकरणों के विवरण और कोड वाले अंतरफल संदेश पृष्ठों की कड़ियाँ प्रदान करती है।',
	'gadgets-uses' => 'उपयोग',
	'gadgets-required-rights' => 'निम्नलिखित की आबश्यकता है {{PLURAL:$2|अधिकार|अधिकार}}:

$1',
	'gadgets-required-skins' => 'उपलब्ध है {{PLURAL:$2|$1 स्किन|निम्नलिखित स्किन: $1}}.',
	'gadgets-default' => 'डिफ़ॉल्ट रूप से सभी के लिए सक्षम है।',
	'gadgets-export' => 'निर्यात',
	'gadgets-export-title' => 'गैजेट निर्यात',
	'gadgets-not-found' => 'गैजेट "$1" मिला नहीं ।',
	'gadgets-export-text' => '$1 उपकरण निर्यात करने के लिये "{{int:gadgets-export-download}}" बटन पर क्लिक करें, डाउनलोड की गई फ़ाइल सहेजें, लक्ष्य विकि पर Special:Import पर जाएँ और फ़ाइल अपलोड करें। तत्पश्चात MediaWiki:Gadgets-definition में निम्न पाठ जोड़ें:
<pre>$2</pre>
आपके पास लक्ष्य विकि पर उपयुक्त अधिकार होने चाहिये (जिसमें अंतरफल संदेशों को सम्पादित करने का अधिकार शामिल है) और विकि पर फ़ाइल द्वारा आयात सक्षम होना चाहिये।',
	'gadgets-export-download' => 'डाउनलोड',
);

/** Croatian (hrvatski)
 * @author Anton008
 * @author Dalibor Bosits
 * @author Ex13
 * @author MaGa
 * @author Roberta F.
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'gadgets-desc' => 'Omogućava suradnicama biranje osobnih [[Special:Gadgets|CSS i JavaScript dodataka]] u svojim [[Special:Preferences#mw-prefsection-gadgets|postavkama]]',
	'prefs-gadgets' => 'Dodaci',
	'gadgets-prefstext' => 'Slijedi popis posebnih dodataka koje možete omogućiti.
Većinom su napisani u JavaScriptu, stoga JavaScript mora biti omogućen u vašem web pregledniku da bi radili.
Nijedan dodatak nema učinka na ovu stranicu s postavkama.

Ovi posebni dodaci nisu dio MediaWiki softvera, najčešće ih razvijaju i održavaju suradnici na lokalnom wikiju.
Lokalni administratori mogu uređivati dostupne dodatke putem [[MediaWiki:Gadgets-definition|definicija]] i [[Special:Gadgets|opisa]].',
	'gadgets' => 'Dodaci',
	'gadgets-title' => 'Dodatci',
	'gadgets-pagetext' => 'Slijedi popis posebnih JavaScript dodataka koje suradnici mogu omogućiti u svojim [[Special:Preferences#mw-prefsection-gadgets|postavkama]], kako je definirano stranicom [[MediaWiki:Gadgets-definition|definicija]].
Ovaj pregled omogućava lak pristup porukama sustava koje opisuju dodatke i njihov kod.',
	'gadgets-uses' => 'Rabi',
	'gadgets-required-rights' => 'Zahtijeva {{PLURAL:$2|$1 pravo|sljedeća prava: $1}}.', # Fuzzy
	'gadgets-export' => 'Izvezi',
	'gadgets-export-title' => "Izvoz JS skripti (''gadgets'')",
	'gadgets-not-found' => "''Gadget'' \"\$1\" nije pronađen.",
	'gadgets-export-text' => 'Za izvoz $1 JavaScript pomoćne skripte (\'\'gadgeta\'\'), kliknite na "{{int:gadgets-export-download}}" gumb, snimiti preuzetu datoteku,
zatim idete na Special:Import na odredišnoj wiki i postavite skriptu tamo. Zatim dodajte sljedeće na "MediaWiki:Gadgets-definition stranici:
<pre>$2</pre>
Morate imati odgovarajuća prava na odredišnoj wiki (uključujući i pravo na uređivanje sistemskih poruka) i uvoz iz snimljenih datoteka mora biti omogućen.',
	'gadgets-export-download' => 'Preuzmi',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'gadgets-desc' => 'Zmóžnja wužiwarjam swójske [[Special:Gadgets|přisłuški za CSS a JavaScript]] w jich [[Special:Preferences#mw-prefsection-gadgets|nastajenjach]] wubrać',
	'prefs-gadgets' => 'Specialne funkcije',
	'gadgets-prefstext' => 'Deleka je lisćina specialnych funkcijow, kotrež móžeš za swoje wužiwarske konto zmóžnić. Tute specialne funkcije zwjetša na JavaScripće bazěruja, tohodla dyrbi JavaScript we wobhladowaku zmóžnjeny być, zo bychu fungowali.
Wobkedźbuj tež, zo so tute specialne funkcije na tutu stronu z wosobinskimi nastajenjemi njewuskutkuja.

Nimo toho wobkedźbuj, zo tute specialne funkcije dźěl softwary MediaWiki njejsu a so zwjetša wot wužiwarjow na jich lokalnym wikiju wuwiwaja a wothladuja. Lokalni administratorojo móža lisćinu k dispoziciji stejacych specialnych funkcijow z pomocu [[MediaWiki:Gadgets-definition|definicijow]] a [[Special:Gadgets|wopisanjow]] wobdźěłać.',
	'gadgets' => 'Specialne funkcije',
	'gadgets-title' => 'Specialne funkcije',
	'gadgets-pagetext' => 'Deleka je lisćina specialnych funkcijow, kotrež wužiwarjo móža na swojej [[Special:Preferences#mw-prefsection-gadgets|stronje nastajenjow]] zmóžnić, kaž přez [[MediaWiki:Gadgets-definition|definicije]] definowane.
Tutón přehlad skići lochki přistup k systemowym zdźělenkam, kotrež wopisanje a kod kóždeje specialneje funkcije definuja.',
	'gadgets-uses' => 'Wužiwa',
	'gadgets-required-rights' => 'Wužaduje sej {{PLURAL:$2|slědowace prawo|slědowacej prawje|slědowace prawa|slědowace prawa}}:

$1',
	'gadgets-required-skins' => 'Na {{PLURAL:$2|slědowacej drasće|slědowacymaj drastomaj|slědowacych drastach|slědowacych drastach}} k dispoziciji: $1',
	'gadgets-default' => 'Za wšěch standardnje zmóžnjeny.',
	'gadgets-export' => 'Eksportować',
	'gadgets-export-title' => 'Specialnu funkciju eksportować',
	'gadgets-not-found' => 'Specialna funkcija "$1" njeje so namakała.',
	'gadgets-export-text' => 'Zo by specialnu funkciju $1 eksportował, klikń na tłóčatko "{{int:gadgets-export-download}}", składuj sćehnjenu dataju, dźi do Special:Import w cilowym wikiju a nahraj ju. Přidaj potom slědowace k MediaWiki:Gadgets-definition:
<pre>$2</pre>
Dyrbiš trěbne prawa na cilowym wikiju měć (inkluziwnje prawo systemowe powěsće wobdźěłać) a a import datajowych nahraćow dyrbi zmóžnjeny być.',
	'gadgets-export-download' => 'Sćahnyć',
);

/** Hungarian (magyar)
 * @author Bináris
 * @author BáthoryPéter
 * @author Dani
 * @author Tgr
 * @author Vogone
 */
$messages['hu'] = array(
	'gadgets-desc' => 'A felhasználók saját [[Special:Gadgets|CSS és JavaScript eszközöket]] választhatnak ki a [[Special:Preferences#mw-prefsection-gadgets|beállításaiknál]]',
	'prefs-gadgets' => 'Segédeszközök',
	'gadgets-prefstext' => 'Az alábbi listában látható segédeszközök bekapcsolásával kényelmesebbé teheted a wiki használatát és szerkesztését.
Legtöbbjük JavaScriptet használ, így ezt engedélyezned kell a böngésződben, hogy működjenek.
A segédeszközök nem működnek ezen a beállításoldalon, így probléma esetén ki tudod őket kapcsolni.

Ezek az eszközök nem részei a MediaWiki szoftvernek, általában a wiki felhasználói tartják karban őket.
Az adminisztrátorok a [[MediaWiki:Gadgets-definition|definíciókat]] és a [[Special:Gadgets|leírásokat]] tartalmazó lapok segítségével tudják módosítani az elérhető eszközök listáját.',
	'gadgets' => 'Segédeszközök',
	'gadgets-title' => 'Segédeszközök',
	'gadgets-pagetext' => 'Itt látható azon segédeszközök listája, amiket a felhasználók bekapcsolhatnak a [[Special:Preferences#mw-prefsection-gadgets|beállításaiknál]]. A lista a [[MediaWiki:Gadgets-definition|definíciókat]] tartalmazó lapon módosítható.
Ez az áttekintő lap egyszerű hozzáférést nyújt az eszközök kódját, illetve leírását tartalmazó rendszerüzenet-lapokhoz.',
	'gadgets-uses' => 'Kód',
	'gadgets-required-rights' => 'A következő {{PLURAL:$2|jogosultságra|jogosultságokra}} van szükség:

$1',
	'gadgets-required-skins' => '{{PLURAL:$2|$1 felületen érhető el|Az alábbi felületeken érhető el: $1}}.',
	'gadgets-default' => 'Mindenki számára engedélyezett alapértelmezettként.',
	'gadgets-export' => 'Exportálás',
	'gadgets-export-title' => 'Segédeszköz exportálás',
	'gadgets-not-found' => 'A(z) „$1“ segédeszköz nem található.',
	'gadgets-export-text' => 'A(z) $1 segédeszköz exportálásához kattints a „{{int:gadgets-export-download}}“ gombra, mentsd el a fájlt, majd a célwikiben a Special:Import lapon töltsd fel. Ezután a MediaWiki:Gadgets-definition laphoz add hozzá a következőket:
<pre>$2</pre>
A célwikiben rendelkezned kell a megfelelő jogokkal (beleértve a rendszerüzenetek szerkesztését) és engedélyezve kell lennie a fájlimportálásnak.',
	'gadgets-export-download' => 'Letöltés',
);

/** Armenian (Հայերեն)
 * @author Xelgen
 */
$messages['hy'] = array(
	'gadgets-desc' => 'Թույլ է տալիս օգտագործողներին ընտրել հատուկ [[Special:Gadgets|ՍիԷսԷս և ՋավաՍկիրպտ (CSS and JavaScript) գադջեթներ]] իրանց [[Special:Preferences#mw-prefsection-gadgets|նախընտրությունների]] էջում։',
	'prefs-gadgets' => 'Գադջեթներ',
	'gadgets-prefstext' => 'Այստեղ բերված են հատուկ հավելումներ՝ գաջեթներ, որոնք դուք կարող եք միացնել ըստ ձեր ցանկության։
Հավելումները հիմնված են ՋավաՍկրիպտի վրա, ուստի հավելումների աշխատանքի համար անհրաժեշտ է, որ ձեր դիտարկչում ՋավաՍկրիպտը միացված լինի։
Հաշվի առեք, որ գադջեթների աշխատանքը այս էջում չի նկատվի։

Նկատի ունեցեք, որ ստորև բերված հավելումները ՄեդիաՎիքի ծրագրի մաս չեն հանդիսանում, և որպես կանոն իրանք ստեղծվում և սպասարկվում են ձեր վիքիի մասնակիցների կողմից։
Վիքիի ադմինիստրատորները կարող են խմբագրել հասանելի գադջեթների [[MediaWiki:Gadgets-definition|ցանկը]] և [[Special:Gadgets|նկարագրությունը]]։',
	'gadgets' => 'Գադջեթներ',
	'gadgets-title' => 'Գադջեթներ',
	'gadgets-uses' => 'Օգտագործում է',
	'gadgets-required-rights' => 'Անհրաժեշտ են հետևյալ {{PLURAL:$2|իրավունքը|իրավունքները}}:

$1',
	'gadgets-required-skins' => 'Հասանելի է {{PLURAL:$2|$1 արտաքին տեսքով|$1 արտաքին տեսքերով}}։',
	'gadgets-default' => 'Ի լռելյայն միացված է բոլորի համար։',
	'gadgets-export' => 'Արտահանել',
	'gadgets-export-title' => 'Գադջեթի արտահանում',
	'gadgets-not-found' => '$1 գադջեթը չի գտնվել',
	'gadgets-export-download' => 'Բեռնել',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'gadgets-desc' => 'Permitte que usatores selige [[Special:Gadgets|gadgets CSS e JavaScript]] personalisate in lor [[Special:Preferences#mw-prefsection-gadgets|preferentias]]',
	'prefs-gadgets' => 'Gadgets',
	'gadgets-prefstext' => 'Infra es un lista de gadgets special que tu pote activar in tu conto.
Iste gadgets se basa pro le major parte in JavaScript, ergo JavaScript debe esser active in tu navigator pro permitter que illos functiona.
Nota que iste gadgets non habera effecto in iste pagina de preferentias.

Nota etiam que iste gadgets special non face parte del software de MediaWiki, e es normalmente disveloppate e mantenite per usatores in tu wiki local.
Le administratores local pote modificar le gadgets disponibile per medio de [[MediaWiki:Gadgets-definition|definitiones]] e [[Special:Gadgets|descriptiones]].',
	'gadgets' => 'Gadgets',
	'gadgets-title' => 'Gadgets',
	'gadgets-pagetext' => 'Infra es un lista de gadgets special que le usatores pote activar in lor [[Special:Preferences#mw-prefsection-gadgets|paginas de preferentias]], secundo le [[MediaWiki:Gadgets-definition|definitiones]].
Iste supervista permitte le accesso commode al paginas de messages de systema que defini le description e codice de cata gadget.',
	'gadgets-uses' => 'Usa',
	'gadgets-required-rights' => 'Require le sequente {{PLURAL:$2|derecto|derectos}}:

$1',
	'gadgets-required-skins' => 'Disponibile con le {{PLURAL:$2|apparentia $1|sequente apparentias: $1}}.',
	'gadgets-default' => 'Activate pro omnes per predefinition.',
	'gadgets-export' => 'Exportar',
	'gadgets-export-title' => 'Exportation de gadget',
	'gadgets-not-found' => 'Gadget "$1" non trovate.',
	'gadgets-export-text' => 'Pro exportar le gadget $1, clicca super le button "{{int:gadgets-export-download}}", salveguarda le file discargate,
va a Special:Import in le wiki de destination e incarga lo. Postea adde lo sequente al pagina MediaWiki:Gadgets-definition:
<pre>$2</pre>
Tu debe haber le permissiones appropriate in le wiki de destination (includente le derecto de modificar le messages de systema) e le importation ex files incargate debe esser activate.',
	'gadgets-export-download' => 'Discargar',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Farras
 * @author IvanLanin
 * @author Kenrick95
 */
$messages['id'] = array(
	'gadgets-desc' => 'Memungkinkan pengguna memilih [[Special:Gadgets|perkakas CSS dan JavaScript]] melalui [[Special:Preferences#mw-prefsection-gadgets|preferensi]] mereka',
	'prefs-gadgets' => 'Perkakas',
	'gadgets-prefstext' => 'Berikut adalah daftar perkakas istimewa yang dapat Anda aktifkan untuk akun Anda. Semua perkakas tersebut sebagian besar berbasis JavaScript sehingga Anda harus mengaktifkan JavaScript pada penjelajah Anda untuk dapat menjalankannya. Perhatikan bahwa berbagai perkakas tersebut tidak memiliki pengaruh terhadap halaman preferensi ini.

Juga perhatikan bahwa perkakas istimewa ini bukanlah bagian dari perangkat lunak MediaWiki dan biasanya dikembangkan dan dipelihara oleh para pengguna di wiki lokal Anda. Pengurus lokal dapat menyunting perkakas yang tersedia melalui [[MediaWiki:Gadgets-definition]] dan [[Special:Gadgets]].',
	'gadgets' => 'Perkakas',
	'gadgets-title' => 'Perkakas',
	'gadgets-pagetext' => 'Berikut adalah daftar perkakas istimewa yang dapat diaktifkan pengguna melalui [[Special:Preferences#mw-prefsection-gadgets|halaman preferensi]] mereka sebagaimana didefinisikan oleh [[MediaWiki:Gadgets-definition]]. Tinjauan berikut memberikan kemudahan akses ke dalam halaman pesan sistem yang mendefinisikan deskripsi dan kode masing-masing perkakas.',
	'gadgets-uses' => 'Penggunaan',
	'gadgets-required-rights' => 'Memerlukan {{PLURAL:$2|hak|hak-hak}} berikut:

$1',
	'gadgets-required-skins' => 'Tersedia dalam {{PLURAL:$2|$1 kulit|kulit berikut: $1}}.',
	'gadgets-default' => 'Diaktifkan untuk semua orang secara bawaan.',
	'gadgets-export' => 'Ekspor',
	'gadgets-export-title' => 'Ekspor perkakas',
	'gadgets-not-found' => 'Perkakas "$1" tidak ditemukan.',
	'gadgets-export-text' => 'Untuk mengekspor perkakas $1, klik tombol "{{int:gadgets-export-download}}", simpan berkas yang diunduh,
tuju ke Special:Import pada wiki tujuan dan unggah berkas itu. Kemudian tambahkan berkas tersebut ke halaman MediaWiki:Gadgets-definition:
<pre>$2</pre>
Anda harus memeroleh izin pada wiki tujuan (termasuk hak menyunting pesan sistem) dan mengimpor dari unggahan berkas yang harus diaktifkan.',
	'gadgets-export-download' => 'Unduh',
);

/** Iloko (Ilokano)
 * @author Lam-ang
 */
$messages['ilo'] = array(
	'gadgets-desc' => 'Agpalubos kadagiti agar-aramat nga agpili kadagiti naiduma a [[Special:Gadgets|CSS ken JavaScript a gadget]] iti [[Special:Preferences#mw-prefsection-gadgets|kakaykayatanda]]',
	'prefs-gadgets' => 'Dagiti gadget',
	'gadgets-prefstext' => 'Dita baba ket listaan kadagiti naipangruna a gadget a mabalinmo a pakabaelan iti pakabilangam.
Dagitoy a gadget ket naibatay iti JavaScript, isunga masapul a pakabaelan ti  JavaScript idiay  "pagbasabasam" tapno agbalin dagitoy.
Laglagipen a dagitoy a gadget ket awan ti pagbanaganna iti daytoy panid ti kakaykayatan.

Laglagipen pay a dagitoy a naipangruna a gadget ket saan a paset ti sopwer ti MediaWiki, ken kadawyan a pinarang-ay ken tinartaripato babaen dagiti agar-aramat iti lokal a wiki.
Dagiti lokal nga administrador ket mabalinda nga urnosen dagiti [[MediaWiki:Gadgets-definition|panangipalplawag]] ken dagiti [[Special:Gadgets|deskripsion]] dagiti magun-od a gadget.',
	'gadgets' => 'Dagiti gadget',
	'gadgets-title' => 'Dagiti gadget',
	'gadgets-pagetext' => 'Dita baba ket listaan dagiti naipangruna a gadget a mabalin a pakabaelan dagiti agar-aramat iti bukodda a [[Special:Preferences#mw-prefsection-gadgets|panid ti kakaykayatan]], a kas naipalawag babaen dagiti [[MediaWiki:Gadgets-definition|pannakaipalawag]].
Daytoy a nakabuklan ket mangted ti nalaka a panagserrek kadagiti panid ti mensahe ti sistema a mangipalawag ti tungngal maysa a deskripsion ken kodigo ti gadget.',
	'gadgets-uses' => 'Usar',
	'gadgets-required-rights' => 'Masapul ti sumaganad a {{PLURAL:$2|karbengan|karkarbengan}}:

$1',
	'gadgets-required-skins' => 'Mabalin a magun-od {{PLURAL:$2|iti $1 a kudil|kadagiti sumaganad a kudil: $1}}.',
	'gadgets-default' => 'Pakabaelan a kasisigud para kadagiti amin.',
	'gadgets-export' => 'Agipan',
	'gadgets-export-title' => 'Agipan ti gadget',
	'gadgets-not-found' => 'Saan a nabirukan ti "$1" a gadget.',
	'gadgets-export-text' => 'Ti panag-ipan ti $1 a gadget, pinduten ti buton ti "{{int:gadgets-export-download}}", idulin ti naikarga a papeles,
mapan idiay Special:Import iti papanan a wiki ken ikarganto. Kalpasanna inayon dagiti sumaganad idiay panid ti MediaWiki:Gadgets-definition:
<pre>$2</pre>
Nasken nga addaanka ti maitunos a pammalubos iti papanan a wiki (mairaman ti karbengan a panag-urnos kadagiti mensahe ti sistema) ken nasken a napakabaelan ti panagikarga kadagiti papeles.',
	'gadgets-export-download' => 'Agikaraga',
);

/** Ido (Ido)
 * @author Malafaya
 */
$messages['io'] = array(
	'gadgets-uses' => 'Ol uzas',
);

/** Icelandic (íslenska)
 * @author Jóna Þórunn
 * @author Maxí
 * @author Snævar
 */
$messages['is'] = array(
	'gadgets-desc' => 'Gerir notendum kleift að velja [[Special:Gadgets|CSS og JavaScript-forrit]] í [[Special:Preferences#mw-prefsection-gadgets|stillingum sínum]]',
	'prefs-gadgets' => 'Smáforrit',
	'gadgets-prefstext' => 'Eftirfarandi er listi yfir smáforrit sem þú getur notað á notandareikningi þínum. Þessi forrit eru að mestu byggð á JavaScript svo vafrinn þarf að styðja JavaScript til að þau virki. Athugaðu einnig að forritin hafa engin áhrif á stillingasíðunni.

Forritin eru ekki hluti af MediaWiki-hugbúnaðinum heldur eru skrifuð og viðhaldin af notendum á þessu wiki-verkefni. Möppudýr geta breytt forritunum á [[MediaWiki:Gadgets-definition]] og [[Special:Gadgets]].',
	'gadgets' => 'Smáforrit',
	'gadgets-title' => 'Smáforrit',
	'gadgets-pagetext' => 'Eftirfarandi er listi yfir smáforrit sem notendur geta virkjað í [[Special:Preferences#mw-prefsection-gadgets|stillingunum sínum]] og eru tilgreind á [[MediaWiki:Gadgets-definition]].
Þessi listi veitir auðveldan aðgang að lýsingum á smáforritunum og kóðanum þeirra.',
	'gadgets-uses' => 'Notar',
	'gadgets-required-rights' => 'Þarfnast eftifarandi {{PLURAL:$2|réttinda}}:

$1',
	'gadgets-required-skins' => 'Aðgengileg með eftirfarandi {{PLURAL:$2|þema|$2 þemum}}: $1',
	'gadgets-default' => 'Virkt fyrir alla notendur.',
	'gadgets-export' => 'Flytja út',
	'gadgets-export-title' => 'Flytja út smától',
	'gadgets-not-found' => 'Smátólið "$1" fannst ekki.',
	'gadgets-export-text' => 'Til þess að flytja út smátólið $1, smelltu á "{{int:gadgets-export-download}}", vistaðu skránna,
farðu á þann wiki sem á að flytja smátólið á, farðu á kerfisíðuna Special:Import og hladdu því inn. Síðan bættu eftirfarandi við meldinguna MediaWiki:Gadgets-definition:
<pre>$2</pre>
Þú verður af hafa tilskilin réttindi á þeim wiki sem á að færa smátólið á (þar með talið réttindi til að breyta meldingum) og möguleikinn að flytja inn skrár þarf að vera virkur.',
	'gadgets-export-download' => 'Hlaða niður',
);

/** Italian (italiano)
 * @author Beta16
 * @author BrokenArrow
 * @author Darth Kule
 * @author Melos
 * @author Nemo bis
 */
$messages['it'] = array(
	'gadgets-desc' => 'Consente agli utenti di selezionare [[Special:Gadgets|accessori CSS e JavaScript]] nelle proprie [[Special:Preferences#mw-prefsection-gadgets|preferenze]]',
	'prefs-gadgets' => 'Accessori',
	'gadgets-prefstext' => "Di seguito viene presentata una lista di accessori speciali (''gadget'') che è possibile abilitare per la propria utenza.
La maggior parte di questi accessori è basata su JavaScript, è quindi necessario abilitare JavaScript nel proprio browser perché funzionino correttamente. Si noti che gli accessori non hanno alcun effetto in questa pagina di preferenze.

Inoltre, si noti che questi accessori speciali non sono compresi nel software MediaWiki e vengono di solito realizzati e gestiti dagli utenti di ciascun sito wiki. Gli amministratori del sito possono modificare la lista degli accessori disponibili tramite le pagine delle [[MediaWiki:Gadgets-definition|definizioni]] e delle [[Special:Gadgets|descrizioni]].",
	'gadgets' => 'Accessori',
	'gadgets-title' => 'Accessori',
	'gadgets-pagetext' => "Di seguito sono elencati gli accessori (''gadget'') che gli utenti possono abilitare sulla propria pagina delle [[Special:Preferences#mw-prefsection-gadgets|preferenze]], seguendo le [[MediaWiki:Gadgets-definition|definizioni]]. Questa panoramica fornisce un comodo meccanismo per accedere ai messaggi di sistema nei quali sono definiti la descrizione e il codice di ciascun accessorio.",
	'gadgets-uses' => 'Utilizza',
	'gadgets-required-rights' => 'Richiede {{PLURAL:$2|il seguente diritto|i seguenti diritti}}:

$1',
	'gadgets-required-skins' => 'Disponibile {{PLURAL:$2|per la skin $1|per le seguenti skin: $1}}.',
	'gadgets-default' => 'Attivato per tutti, per impostazione predefinita.',
	'gadgets-export' => 'Esporta',
	'gadgets-export-title' => 'Esporta accessorio',
	'gadgets-not-found' => 'Accessorio "$1" non trovato.',
	'gadgets-export-text' => 'Per esportare l\'accessorio $1, fai clic sul pulsante "{{int:gadgets-export-download}}", salva il file scaricato,
vai alla pagina Special:Import nella wiki di destinazione e carica il file. Poi aggiungi quanto segue alla pagina MediaWiki:Gadgets-definition:
<pre>$2</pre>
Devi disporre dei permessi appropriati nella wiki di destinazione (incluso il diritto di modificare i messaggi di sistema) e l\'importazione da file deve essere abilitata.',
	'gadgets-export-download' => 'Scarica',
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fryed-peach
 * @author JtFuruhata
 * @author Mzm5zbC3
 * @author Shirayuki
 * @author Whym
 * @author 青子守歌
 */
$messages['ja'] = array(
	'gadgets-desc' => '利用者が [[Special:Gadgets|CSS や JavaScript のカスタム ガジェット]]を[[Special:Preferences#mw-prefsection-gadgets|{{int:preferences}}]]で選択できるようにする',
	'prefs-gadgets' => 'ガジェット',
	'gadgets-prefstext' => '以下はあなたのアカウントで利用できるガジェットの一覧です。
これらのガジェットはほとんどが JavaScript ベースであるため、動作させるにはご使用中のブラウザーの JavaScript を有効にする必要があります。
{{int:preferences}}ページではこれらのガジェットが機能しないことにご注意ください。

また、これらのガジェットは MediaWiki ソフトウェアの一部ではなく、通常はローカルウィキの利用者が開発/メンテナンスをしていることにもご注意ください。
管理者は、利用できるガジェットについてその[[MediaWiki:Gadgets-definition|定義]]や[[Special:Gadgets|説明]]を編集できます。',
	'gadgets' => 'ガジェット',
	'gadgets-title' => 'ガジェット',
	'gadgets-pagetext' => '以下は、利用者が[[Special:Preferences#mw-prefsection-gadgets|{{int:preferences}}]]で有効化できるガジェットの一覧です。これらは[[MediaWiki:Gadgets-definition|定義ページ]]で定義されています。
この概要ページでは、各ガジェットの説明やプログラム コードを定義しているシステム メッセージ ページへの簡単なアクセスを提供します。',
	'gadgets-uses' => '使用するファイル',
	'gadgets-required-rights' => '以下の{{PLURAL:$2|権限}}が必要です:

$1',
	'gadgets-required-skins' => '{{PLURAL:$2|$1外装で利用できます|以下の外装で利用できます: $1}}。',
	'gadgets-default' => '既定では全員に有効です。',
	'gadgets-export' => '書き出し',
	'gadgets-export-title' => 'ガジェットの書き出し',
	'gadgets-not-found' => 'ガジェット「$1」が見つかりません。',
	'gadgets-export-text' => '$1 ガジェットを書き出すには、「{{int:gadgets-export-download}}」ボタンをクリックし、ダウンロードしたファイルを保存し、
配布先ウィキの Special:Import に行ってアップロードしてください。そして、以下を MediaWiki:Gadgets-definition ページに追加してください:
<pre>$2</pre>
この操作には、配布先のウィキで適切な権限 (システムメッセージの編集権限を含む) が必要で、さらにファイル アップロードによる取り込みが有効になっている必要があります。',
	'gadgets-export-download' => 'ダウンロード',
);

/** Jutish (jysk)
 * @author Huslåke
 */
$messages['jut'] = array(
	'prefs-gadgets' => 'Gøreter',
	'gadgets-prefstext' => 'Nedenstående er en liste over de gadgets som du kan aktivere for din brugerkonto. Da disse gadgets hovedsageligt er baseret på JavaScript skal du slå JavaScript til i din browser for at få dem til at virke. Bemærk at disse gadgets ikke vil have nogen effekt på denne side (indstillinger).

Bemærk også at disse specielle gadgets ikke er en del af MediaWiki-softwaren og at de typisk bliver vedligeholdt af brugere på din lokale wiki. Lokale administratorer kan redigere tilgængelige gadgets med [[MediaWiki:Gadgets-definition]] og [[Special:Gadgets]].', # Fuzzy
	'gadgets' => 'Gøreter',
	'gadgets-title' => 'Gøreter',
	'gadgets-pagetext' => 'Nedenstående er en liste med de specielle gadgets som brugere kan aktivere i deres indstillinger som defineret i [[MediaWiki:Gadgets-definition]]. Denne oversigtsside giver simpel adgang til de systembeskeder som definerer hver gadgets beskrivelse og kode.', # Fuzzy
	'gadgets-uses' => 'Brugere',
);

/** Javanese (Basa Jawa)
 * @author Bennylin
 * @author Meursault2004
 * @author NoiX180
 * @author Pras
 */
$messages['jv'] = array(
	'gadgets-desc' => 'Marengaké para panganggo milih [[Special:Gadgets|gadget CSS lan JavaScript]] ngliwati [[Special:Preferences#mw-prefsection-gadgets|préferènsi]] dhéwé-dhéwé.',
	'prefs-gadgets' => 'Gadget',
	'gadgets-prefstext' => 'Ing ngisor iki daftar gadget astaméwa sing bisa panjenangan aktifaké kanggo rékening panjenengan. Gadget-gadget iki sabagéyan gedhé adhedhasar JavaScript dadi panjenengan kudu ngaktifaké JavaScript ing panjlajah wèb panjenengan supaya bisa nglakokaké.
Mangga diwigatèkaké yèn gadget-gadget iki ora ndarbèni pangaruh marang kaca préferènsi iki.

Uga mangga diwigatèkaké yèn gadget astaméwa iki dudu bagéyan saka piranti empuk MediaWiki lan biasané dikembangaké lan diopèni déning panganggo-panganggo ing wiki lokal panjenengan. Pangurus lokal bisa nyunting gadget sing kasedyakaké nganggo [[MediaWiki:Gadgets-definition|dhéfinisi]] lan [[Special:Gadgets|uraian]].',
	'gadgets' => 'Gadget',
	'gadgets-title' => 'Gadget',
	'gadgets-pagetext' => 'Ing ngisor iki daftar gadget astaméwa sing bisa diaktifaké ing [[Special:Preferences#mw-prefsection-gadgets|kaca prèferènsi]] panganggo, kayadéné didéfinisi déning [[MediaWiki:Gadgets-definition|dhéfinisi]].
Tinjoan iki mènèhi aksès sing gampang menyang kaca-kaca pesen sistem sing ngawedhar saben gadget lan kodhe.',
	'gadgets-uses' => 'Kagunan',
	'gadgets-required-rights' => 'Mbutuhaké {{PLURAL:$2|hak|hak-hak}}:

$1',
	'gadgets-required-skins' => 'Sumadhiya nèng {{PLURAL:$2|$1 kulit|kulit-kulit iki: $1}}.',
	'gadgets-default' => 'Diurubaké kanggo kabèh wong sacara gawan.',
	'gadgets-export' => 'Èkspor',
	'gadgets-export-title' => 'Èkspor perkakas',
	'gadgets-not-found' => 'Perkasas "$1" ora ditemokaké.',
	'gadgets-export-text' => 'Untuk mengekspor perkakas $1, klik tombol "{{int:gadgets-export-download}}", simpan berkas yang diunduh,
tuju ke Special:Import pada wiki tujuan dan unggah berkas itu. Kemudian tambahkan berkas tersebut ke halaman MediaWiki:Gadgets-definition:
<pre>$2</pre>
Anda harus memeroleh izin pada wiki tujuan (termasuk hak menyunting pesan sistem) dan mengimpor dari unggahan berkas yang harus diaktifkan.',
	'gadgets-export-download' => 'Undhuh',
);

/** Georgian (ქართული)
 * @author BRUTE
 * @author David1010
 */
$messages['ka'] = array(
	'gadgets-desc' => 'მოხმარებლებს საშუალებას აძლევთ [[Special:Preferences#mw-prefsection-gadgets|კონფიგურაციაში]] აირჩიონ [[Special:Gadgets|CSS და JavaScript გაჯეტები]], რომელთა ჩართვაც სურთ',
	'prefs-gadgets' => 'გაჯეტები',
	'gadgets-prefstext' => 'ქვემოთ მოცემულია სპეციალური გაჯეტების სია, რომელთა ჩართვაც თქვენ შეგიძლიათ თქვენი ანგარიშისათვის.
ეს გაჯეტები უპირატესად დაფუძნებულია JavaScript-ზე, ამიტომ თქვენ უნდა ჩართოთ JavaScript თქვენ ბრაუზერში, რათა მათ იმუშაონ.
გაითვალისწინეთ, რომ ეს გაჯეტები არ მუშაობენ კონფიგურაციის გვერდზე.

აგრეთვე გაითვალისწინეთ, რომ ეს გაჯეტები არ წარმოადგენს MediaWiki-ს ნაწილს და ჩვეულებრივ მუშავდება და ნარჩუნდება თქვენი ლოკალური ვიკის მომხმარებლების მიერ.
ადმინისტრატორებს შეუძლიათ შეცვალონ გაჯეტების სია [[MediaWiki:Gadgets-definition|განმარტებებისა]] და [[Special:Gadgets|აღწერების]] გვერდების დახმარებით.',
	'gadgets' => 'გაჯეტები',
	'gadgets-title' => 'გაჯეტები',
	'gadgets-pagetext' => 'ქვემოთ მოცემულია სპეციალური გაჯეტების სია, რომლების ჩართვაც შეუძლიათ მომხმარებლებს თავიანთი [[Special:Preferences#mw-prefsection-gadgets|კონფიგურაციის გვერდზე]], სიის შესაბამისად [[MediaWiki:Gadgets-definition|განმარტებების]] გვერდზე.
ეს სია საშუალებას იძლევა მარტივად მივიღოთ სისტემური შეტყობინებების გვერდებთან წვდომა, რომლებიც განსაზღვრავენ გაჯეტების აღწერასა და გამავალ კოდებს.',
	'gadgets-uses' => 'გამოიყენება',
	'gadgets-required-rights' => '{{PLURAL:$2|საჭიროა უფლება|საჭიროა უფლება}}:

$1',
	'gadgets-required-skins' => 'ხელმისაწვდომია {{PLURAL:$2|გაფორმების თემისათვის $1|შემდეგი გაფორმების თემებისათვის: $1}}.',
	'gadgets-default' => 'ჩართულია ყველასათვის ნაგულისხმევად.',
	'gadgets-export' => 'ექსპორტი',
	'gadgets-export-title' => 'გაჯეტის ექსპორტი',
	'gadgets-not-found' => 'გაჯეტი "$1" ვერ მოიძებნა.',
	'gadgets-export-text' => 'გაჯეტი $1 ექსპორტისათვის, დააჭირეთ ღილაკს „{{int:gadgets-export-download}}“, შეინახეთ ჩამოტვირთული ფაილი,
გადადით გვერდზე Special:Import სამიზნო ვიკიში და ატვირთეთ ფაილი. შემდეგ დაამატეთ შემდეგი ხაზები MediaWiki:Gadgets-definition-ის გვერდზე:
<pre>$2</pre>
თქვენ უნდა გქონდეთ შესაბამისი უფლება სამიზნო ვიკიში (მათ შორის სისტემური შეტყობინებების თარგმნის უფლება), აგრეთვე სერვერზე ჩართული უნდა იყოს ფაილების იმპორტის პარამეტრები.',
	'gadgets-export-download' => 'ჩამოტვირთვა',
);

/** Kazakh (Arabic script) (قازاقشا (تٴوتە)‏)
 */
$messages['kk-arab'] = array(
	'prefs-gadgets' => 'قاجەت قۇرالدار',
	'gadgets-prefstext' => 'تومەندە ٴوز تىركەلگىڭىزدە قوسا الاتىن ارناۋلى قاجەت قۇرالدار ٴتىزىمى بەرىلەدى.
وسى قاجەت قۇرالدار كوبىنەسە JavaScript امىرلەرىنە نەگىزدەلىنەدى, سوندىقتان بۇلار جۇمىس ىستەۋى ٴۇشىن شولعىشىڭىزدا JavaScript قوسىلعان بولۋى كەرەك.
بۇل باپتاۋ بەتىنە وسى قاجەت قۇرالدار اسەر ەتپەيتىنىڭ ەسكەرىڭىز.

تاعى دا ەسكەرىڭىز: وسى قاجەت قۇرالدار MediaWiki باعدارلاماسىنىڭ بولىگى ەمەس, جانە دە بۇلاردى جايشىلىقتا جەرگىلىكتى ۋىيكىيدىڭ قاتىسۋشىلارى دامىتادى جانە قوشتايدى.
جەرگىلىكتى اكىمشىلەر جەتىمدى قاجەت نارسە ٴتىزىمىن [[{{ns:mediawiki}}:Gadgets-definition]] جانە [[{{ns:special}}:Gadgets]] بەتتەرى ارقىلى
وڭدەي الادى.', # Fuzzy
	'gadgets' => 'قاجەت قۇرالدار',
	'gadgets-title' => 'قاجەت قۇرالدار',
	'gadgets-pagetext' => 'تومەندە ارناۋلى قاجەت قۇرالدار ٴتىزىمى بەرىلەدى. [[{{ns:mediawiki}}:Gadgets-definition]] بەتىندە انىقتالعان قاجەت قۇرالداردى قاتىسۋشىلار ٴوزىنىڭ باپتاۋىندا قوسا الادى.
بۇل شولۋ بەتى ارقىلى ٴاربىر قاجەت قۇرالدىڭ سىيپاتتاماسى مەن ٴامىرىن انىقتايتىن جۇيە حابار بەتتەرىنە جەڭىل قاتىناي الاسىز.', # Fuzzy
	'gadgets-uses' => 'قولدانۋداعىلار',
);

/** Kazakh (Cyrillic script) (қазақша (кирил)‎)
 * @author Arystanbek
 */
$messages['kk-cyrl'] = array(
	'prefs-gadgets' => 'Қажет құралдар',
	'gadgets-prefstext' => 'Төменде өз тіркелгіңізде қоса алатын арнаулы қажет құралдар тізімі берілген.
Осы қажет құралдар көбінесе JavaScript әмірлеріне негізделеді, сондықтан бұлар жұмыс істеуі үшін шолғышыңызда JavaScript қосылған болуы керек.
Бұл баптау бетіне осы қажет құралдар әсер етпейтінін ескеріңіз.

Тағы да ескеріңіз: осы қажет құралдар MediaWiki бағдарламасының бөлігі емес және бұларды әдетте сіздің жергілікті уикиіңіздің қатысушылары дамытады және қоштайды.
Жергілікті әкімшілер жетімді гаджеттерді [[MediaWiki:Gadgets-definition]] және [[Special:Gadgets|сипаттама]] беттері арқылы
өңдей алады.', # Fuzzy
	'gadgets' => 'Қажет құралдар',
	'gadgets-title' => 'Қажет құралдар',
	'gadgets-pagetext' => 'Төменде қатысушылар өзінің [[Special:Preferences#mw-prefsection-gadgets|баптауларынан]] қоса алатын   арнаулы қажет құралдар тізімі берілген. [[MediaWiki:Gadgets-definition]] шолу беті арқылы әрбір қажет құралдың сипаттамасы мен әмірін анықтайтын жүйе хабар беттеріне жеңіл қатынай аласыз.',
	'gadgets-uses' => 'Қолданыстағылар',
	'gadgets-required-rights' => 'Келесі {{PLURAL:$2|құқықты|құқықтарды}} қажет етеді: $1',
	'gadgets-default' => 'Әркімге автоматты түрде қосылады.',
	'gadgets-export' => 'Экспорттау',
	'gadgets-export-title' => 'Гаджетті экспорттау',
	'gadgets-not-found' => '"$1" гаджеті табылмады.',
	'gadgets-export-download' => 'Түсіру',
);

/** Kazakh (Latin script) (qazaqşa (latın)‎)
 */
$messages['kk-latn'] = array(
	'prefs-gadgets' => 'Qajet quraldar',
	'gadgets-prefstext' => 'Tömende öz tirkelgiñizde qosa alatın arnawlı qajet quraldar tizimi beriledi.
Osı qajet quraldar köbinese JavaScript ämirlerine negizdelinedi, sondıqtan bular jumıs istewi üşin şolğışıñızda JavaScript qosılğan bolwı kerek.
Bul baptaw betine osı qajet quraldar äser etpeýtiniñ eskeriñiz.

Tağı da eskeriñiz: osı qajet quraldar MediaWiki bağdarlamasınıñ böligi emes, jäne de bulardı jaýşılıqta jergilikti wïkïdiñ qatıswşıları damıtadı jäne qoştaýdı.
Jergilikti äkimşiler jetimdi qajet närse tizimin [[{{ns:mediawiki}}:Gadgets-definition]] jäne [[{{ns:special}}:Gadgets]] betteri arqılı
öñdeý aladı.', # Fuzzy
	'gadgets' => 'Qajet quraldar',
	'gadgets-title' => 'Qajet quraldar',
	'gadgets-pagetext' => 'Tömende arnawlı qajet quraldar tizimi beriledi. [[{{ns:mediawiki}}:Gadgets-definition]] betinde anıqtalğan qajet quraldardı qatıswşılar öziniñ baptawında qosa aladı.
Bul şolw beti arqılı ärbir qajet quraldıñ sïpattaması men ämirin anıqtaýtın jüýe xabar betterine jeñil qatınaý alasız.', # Fuzzy
	'gadgets-uses' => 'Qoldanwdağılar',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Chhorran
 * @author Lovekhmer
 * @author Thearith
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'prefs-gadgets' => 'គ្រឿងបន្ទាប់បន្សំ',
	'gadgets' => 'គ្រឿងបន្ទាប់បន្សំ',
	'gadgets-title' => 'គ្រឿងបន្ទាប់បន្សំ',
	'gadgets-uses' => 'ប្រើ',
	'gadgets-export' => 'នាំចេញ​',
	'gadgets-export-download' => 'ទាញយក',
);

/** Korean (한국어)
 * @author Ficell
 * @author IRTC1015
 * @author Klutzy
 * @author Kwj2772
 * @author 아라
 */
$messages['ko'] = array(
	'gadgets-desc' => '각 사용자가 [[Special:Gadgets|CSS와 자바스크립트 소도구]]를 [[Special:Preferences#mw-prefsection-gadgets|사용자 환경 설정]]을 통해 사용할 수 있습니다',
	'prefs-gadgets' => '소도구',
	'gadgets-prefstext' => '아래 목록은 현재 사용 가능한 소도구의 목록입니다.
대부분의 소도구는 자바스크립트로 동작하며, 웹 브라우저에서 자바스크립트를 사용할 수 있어야 동작합니다.
소도구는 이 환경 설정 페이지에는 영향을 주지 않습니다.

이 소도구는 미디어위키의 기능이 아니며, 일반적으로 각 위키의 사용자가 개발 및 관리하고 있습니다.
각 위키의 관리자는 [[MediaWiki:Gadgets-definition|소도구 정의 문서]]와 [[Special:Gadgets|소도구 설명 문서]]를 통해 소도구를 관리할 수 있습니다.',
	'gadgets' => '소도구 목록',
	'gadgets-title' => '소도구',
	'gadgets-pagetext' => '[[Special:Preferences#mw-prefsection-gadgets|사용자 환경 설정]]에서 설정할 수 있는 소도구 목록입니다. 해당 목록은 [[MediaWiki:Gadgets-definition|소도구 정의]]에서 편집할 수 있습니다.
이 문서에서는 각 소도구의 각 설명 문서와 코드의 시스템 메시지 링크를 제공합니다.',
	'gadgets-uses' => '다음 코드를 사용',
	'gadgets-required-rights' => '다음 {{PLURAL:$2|권한}}이 필요합니다: 

$1',
	'gadgets-required-skins' => '{{PLURAL:$2|$1 스킨에서 사용 가능합니다.|다음 스킨에서 사용 가능합니다: $1}}',
	'gadgets-default' => '기본적으로 모든 사람에게 활성화되어 있습니다.',
	'gadgets-export' => '내보내기',
	'gadgets-export-title' => '소도구 내보내기',
	'gadgets-not-found' => '"$1" 소도구를 찾을 수 없습니다.',
	'gadgets-export-text' => '$1 소도구를 내보내려면 "{{int:gadgets-export-download}}" 버튼을 클릭하여 다운로드된 파일을 저장한 후,
내보내려는 위키에서 Special:Import로 가서 올리십시오. 그 다음 MediaWiki:Gadgets-definition 문서에 다음을 추가하세요:
<pre>$2</pre>
해당 위키에서 시스템 메시지 편집 등 특정 권한을 갖고 있어야 합니다. 또한 파일 올리기를 통한 가져오기 기능이 활성화되어 있어야 합니다.',
	'gadgets-export-download' => '다운로드',
);

/** Karachay-Balkar (къарачай-малкъар)
 * @author Iltever
 */
$messages['krc'] = array(
	'gadgets' => 'Гаджетле',
);

/** Colognian (Ripoarisch)
 * @author Hoo
 * @author Purodha
 */
$messages['ksh'] = array(
	'gadgets-desc' => 'En iere [[Special:Preferences#mw-prefsection-gadgets|Enstellunge]] künne Metmaacher [[Special:Gadgets|CSS- un JavaScrip-Gadgets]] en- un ußschallde.',
	'prefs-gadgets' => 'Gadgets',
	'gadgets-prefstext' => 'Hee is en Liss met bestemmpte <i lang="en">Gadgets</i>,
di för jede Metmaacher enjeschalldt wäde könne.
Di boue miets op Javascrip op, drom moß mer\'t em Brauser
enschallde, domet dat klapp.
<i lang="en">Gadgets</i> werke nimmohls op dä Sigg hee,
met Dinge persönleche Enstellunge.

Opjepaß! <i lang="en">Gadgets</i>, sin kei Schtöck vun MediaWiki,
söndern sin extra em Wiki installeet, un sin vun de Wiki-Bedriever
oder Metmaacher ußjedaach un enjerescht.
Wä et Rääsch doför hät, kann se övver de Sigge
[[MediaWiki:Gadgets-definition|<i lang="en">Gadgets</i> fäßlääje]]
un [[Special:Gadgets|<i lang="en">Gadgets</i> beschriewe]]
enreschte un ändere.',
	'gadgets' => '<i lang="en">Gadgets</i>',
	'gadgets-title' => '<i lang="en">Gadgets</i>',
	'gadgets-pagetext' => 'He kütt en Liss met spezielle <i lang="en">Gadgets</i>,
di jede Metmaacher övver sing
[[Special:Preferences#mw-prefsection-gadgets|päsönlije Enstellunge]] enschallte kann.
Se wääde övver [[MediaWiki:Gadgets-definition]] enjerecht.
Die Övverseech hee jit enne direkte Zohjang op di Texte em Wiki,
wo de Projramme, un de Erklierunge för de <i lang="en">Gadgets</i> dren enthallde
sin.',
	'gadgets-uses' => 'Bruch',
	'gadgets-required-rights' => 'Bruch {{PLURAL:$2|dat Rääsch:|de Rääschde:|kein besönder Rääschde.}}

$1',
	'gadgets-required-skins' => 'Kann jebruch wääde met {{PLURAL:$2|dä Bedeenbovverfläsch:|dä Bedeenbovverfläsche:|keine vun dä Bedeenbovverfläsche.}} $1',
	'gadgets-default' => 'Shtandattmääßesh för jeeder_ein ennjeschalldt.',
	'gadgets-export' => 'Expotteere',
	'gadgets-export-title' => '<i lang="en">Gadgets</i> expotteere',
	'gadgets-not-found' => '<i lang="en">Gadget</i> „$1“ nit jefonge.',
	'gadgets-export-text' => 'Öm dat <i lang="en">Gadget</i> „$1“ ze expotteere, donn op dä Knopp „{{int:gadgets-export-download}}“ klecke, un donn dann de eronger jelaade Dattei faßhallde. Dann jangk en dat Wiki, woh De dat empotteere wells, un doh op die Extrasigg <code lang="en">Spezial:Import</code>, un donn se huh laade. Dann deihs De en däm Wiki op dä Sigg <code lang="en">MediaWiki:Gadgets-definition</code> dat heh dobei:
<pre>$2</pre>
Do moß en däm Wiki de nüüdijje Rääschde han, och dat Rääsch, aan Täxte un Nohreeschte vum Systeem ze ändere, un et Empoteere vun huhjelaade Dateije moß zohjelohße sin.',
	'gadgets-export-download' => 'Eronger laade',
);

/** Kurdish (Latin script) (Kurdî (latînî)‎)
 * @author George Animal
 * @author Ghybu
 * @author Gomada
 */
$messages['ku-latn'] = array(
	'prefs-gadgets' => 'Amûr',
	'gadgets' => 'Amûr',
	'gadgets-title' => 'Amûr',
	'gadgets-uses' => 'Bikaranîn',
	'gadgets-required-rights' => '{{PLURAL:$2|Mafa|Mafên}} di dorê de pêwîst in:

$1',
	'gadgets-export' => 'Derxe',
	'gadgets-not-found' => ' Gadget "$1" nehate dîtin.',
	'gadgets-export-download' => 'Daxe',
);

/** Kyrgyz (Кыргызча)
 * @author Growingup
 */
$messages['ky'] = array(
	'gadgets-export' => 'Экспорттоо',
	'gadgets-not-found' => '«$1» гаджети табылган жок.',
	'gadgets-export-download' => 'Жүктөп алуу',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Les Meloures
 * @author Robby
 * @author Soued031
 */
$messages['lb'] = array(
	'gadgets-desc' => 'Erméiglecht de Benotzer et perséinlech [[Special:Gadgets|CSS a JavaScript Gadgeten]] an hiren [[Special:Preferences#mw-prefsection-gadgets|Astellunge]] festzeleeën.',
	'prefs-gadgets' => 'Gadgeten',
	'gadgets-prefstext' => "Lëscht vu spezielle Gadgeten déi fir Äre Benotzerkont aktivéiert kënne ginn.
D'Gadgete baséiere meeschtens op engem JavaScript, dofir muss JavaScript an Ärem Browser aktivéiert sinn, fir datt se funktionéieren.
D'Gadgete funktionéieren awer net op dëser Säit mat de perséinlechen Astellungen.

Ausserdeem sollt Dir wëssen, datt dës Gadgete generell net Deel vu MediaWiki sinn, a meeschtens vu Benotzer vu lokale Wikien entwéckelt an ënnerhale ginn.
Lokal Wiki-Administrateure kënnen d'Lëscht von den disponibele Gadgeten op de Säiten [[MediaWiki:Gadgets-definition|Definitioune vun Gadgeten]] a [[Special:Gadgets|Beschreiwunge vu Gadgeten]] änneren.",
	'gadgets' => 'Gadgeten',
	'gadgets-title' => 'Gadgeten',
	'gadgets-pagetext' => "Ënnendrënner ass eng Lëscht vun de spezielle Gadgeten déi d'Benotzer op hire [[Special:Preferences#mw-prefsection-gadgets|Benotzer-Astellungen]] aschalte kënnen, sou wéi dat op [[MediaWiki:Gadgets-definition|definéiert]] ass.
Dës Iwwersiicht gëtt einfachen Zougang zu de Systemmessage-Säiten, déi all Gadget beschreiwen an zum Programméiercode vun dem Gadget.",
	'gadgets-uses' => 'Benotzt',
	'gadgets-required-rights' => "Erfuerdert {{PLURAL:$2|d'Recht|dës Rechter}}: $1.",
	'gadgets-required-skins' => "Disponibel fir {{PLURAL:$2|d'Ausgesinn $1|dës $2 Ausgesinn: $1}}.",
	'gadgets-default' => 'Fir jiddwereen als Standard ageschalt.',
	'gadgets-export' => 'Export',
	'gadgets-export-title' => 'Export vu Gadgeten',
	'gadgets-not-found' => 'Gadget "$1" net fonnt.',
	'gadgets-export-text' => 'Fir de Gadget $1 z\'exportéieren klickt w.e.g. op de(n) "{{int:gadgets-export-download}}"-Knäppchen, späichert den erofgelueden Fichier, gitt op Spezial:Import op der Zil-Wiki a luet en do erop. Duerno setzt der op d\'MediaWiki:Gadgets-Definitiouns Säit dëst derbäi:<pre>$2</pre>
Dir musst déi erfuerdert Rechter(inklusiv d\'Recht fir Systemmessagen z\'änneren) op der Zil-Wiki hunn an den Import vun eropgelueden Fichiere muss ageschalt sinn.',
	'gadgets-export-download' => 'Eroflueden',
);

/** Lezghian (лезги)
 * @author Namik
 * @author Soul Train
 */
$messages['lez'] = array(
	'prefs-gadgets' => 'Гажетар',
	'gadgets' => 'Гаджетар',
	'gadgets-title' => 'Гажетар',
);

/** Limburgish (Limburgs)
 * @author Matthias
 * @author Ooswesthoesbes
 * @author Tibor
 */
$messages['li'] = array(
	'gadgets-desc' => 'Laot gebroekers [[Special:Gadgets|CSS en JavaScripts]] activere in häör  [[Special:Preferences#mw-prefsection-gadgets|veurkeure]]',
	'prefs-gadgets' => 'Biedènger',
	'gadgets-prefstext' => 'Hiejónger sjtaon de sjpeciaal oetbreijinge dies te veur dien gebroekersaccount kèns insjakele.
De oetbreijinge zeen veurnamelik gebaseerd op JavaScript, dus JavaScript mót veur diene browser ingesjakeld zeen óm die te laote wirke.
De oetbreijinge höbbe geine invlood op dees pazjena mit veurkäöre.

Dees sjpeciaal oetbreijinge zeen ouch gein óngerdeil van de MediaWiki-software en die mótte meistal óntwikkeld en óngerhauwe waere door gebroekers van diene wiki.
Lokaal beheerders kónne de besjikbaar oetbreijinge aangaeve in [[MediaWiki:Gadgets-definition]] en [[Special:Gadgets]].',
	'gadgets' => 'Oetbreijinger',
	'gadgets-title' => 'Oetbreijinger',
	'gadgets-pagetext' => 'Hiej ónger staon de speciaal oetbreijinger die gebroekers kinne insjakele via häöre [[Special:Preferences#mw-prefsection-gadgets|veurkeure]] wie ingesteldj is in [[MediaWiki:Gadgets-definition]].
Dit euverzich bi-jtj uch einvoudige toegank toet de systeemtekspazjena wo de besjrieving en de programmacode van edere oetbreijing steit.',
	'gadgets-uses' => 'Gebroek',
	'gadgets-required-rights' => "{{PLURAL:$2|'t Volgend rech is|De volgende rechte zeen}} vereis: $1.",
	'gadgets-required-skins' => 'Besjikbaar op de {{PLURAL:$2|vormgaeving $1|volgende vormgaevinge: $1}}.',
	'gadgets-default' => 'Standerd aan veur edert.',
	'gadgets-export' => 'Veur oet',
	'gadgets-export-title' => 'Exporteer oetbreijing',
	'gadgets-not-found' => 'Oetbreiding "$1" neet gevonje.',
	'gadgets-export-text' => 'Klik óppe knoep "{{int:gadgets-export-download}}" óm de oetbreiding "$1" oet te veure.
Slaon daonao \'t gedownloadj bestandj óp.
Gank nao "Special:Import" inne doelwiki en laaj \'t oetgeveurdj bestandj óp.
Veug daonao \'t vólgendje toe ane pagina "MediaWiki:Gadgets-definition":
<pre>$2</pre>
Doe mós de juuste rèchte höbben óppe doelwie, ouch óm bewirkinge aan systeemberichte te make en in te veure oet bestenj.',
	'gadgets-export-download' => 'Haol óp',
);

/** لوری (لوری)
 * @author Bonevarluri
 * @author Mogoeilor
 */
$messages['lrc'] = array(
	'prefs-gadgets' => 'چيا هنی',
	'gadgets' => 'گجت یا',
	'gadgets-title' => 'گجت یا',
	'gadgets-uses' => 'کاروردیا',
	'gadgets-export' => 'وه صحرا ديئن',
	'gadgets-not-found' => 'گجت  "$1" پیدا نبی.',
	'gadgets-export-download' => 'گرتن',
);

/** Lithuanian (lietuvių)
 * @author Eitvys200
 * @author Homo
 * @author Vpovilaitis
 */
$messages['lt'] = array(
	'gadgets-desc' => 'Leidžia naudotojams pasirinkti savo [[Special:Gadgets|CSS ir JavaScript priemones]] jų [[Special:Preferences#mw-prefsection-gadgets|nustatymuose]]',
	'prefs-gadgets' => 'Priemonės',
	'gadgets-prefstext' => 'Žemiau yra sąrašas specialių priemonių, kurias jūs galite įjungti naudojimui.
Šios priemonės daugiausiai yra sukurtos naudojant JavaScript, todėl, kad jos veiktų, jūsų naršyklėje turi būti įjungtas JavaScript palaikymas.
Atsiminkite, kad šios priemonės neturi įtakos jūsų nustatymų puslapiui.

Taip pat žinokite, kad šios specialios priemonės nėra MediaWiki programinės įrangos dalis ir yra sukurtos bei palaikomos vietinio vikiprojekto naudotojų. Vietiniai administratoriai gali redaguoti suteikiamų specialių priemonių sąrašą, naudodami puslapius [[MediaWiki:Gadgets-definition|priemonių aprašymas]] ir [[Special:Gadgets|priemonės]].',
	'gadgets' => 'Priemonės',
	'gadgets-title' => 'Priemonės',
	'gadgets-pagetext' => 'Žemiau yra sąrašas specialių priemonių, kurias naudotojai gali įjungti savo [[Special:Preferences#mw-prefsection-gadgets|nustatymų puslapyje]]. Jos apibūdintos [[MediaWiki:Gadgets-definition|priemonių aprašyme]]. Ši apžvalga suteikia lengvą priėjimą prie sisteminių pranešimų puslapių, kuriuose pateiktas kiekvienos priemonės trumpas aprašas ir kodas.',
	'gadgets-uses' => 'Panaudojimai',
	'gadgets-export' => 'Eksportas',
	'gadgets-export-title' => 'Įtaiso eksportas',
	'gadgets-not-found' => 'Įtaisas " $1 " nerastas.',
	'gadgets-export-download' => 'Parsisiųsti',
);

/** Mizo (Mizo ţawng)
 * @author RMizo
 */
$messages['lus'] = array(
	'gadgets-desc' => 'Hmangtute [[Special:Gadgets|CSS leh JavaScript hmanrelhte]] an [[Special:Preferences#mw-prefsection-gadgets|duhthlanna phêk]]a duhthlantir theihna.',
	'prefs-gadgets' => 'Hmanrelhte',
	'gadgets-prefstext' => 'A hnuaiah hian i siangchana hmanrelh i tihnun theihho kan rawn chhawp chhuak a.
Hêng hmanrelhte hi JavaScript-a innghat a ni deuh ber a, chuvang tak chuan hengte hman theihna tùrin i rangpuifannaah JavaScript i tihnun a ngai a ni.
Hë duhthlanna phêkah erawh hi chuan hêng hmanrelhte hian nghawng a nei lo vang tih hria ang che.

Hëng hmanrelh bîkte hi MediaWiki khawlthluak zinga mi a ni lo va, a tlangpuiin i khawsakna hmun wiki-a hmangtute duan leh enkawl a ni hlawm.
Chü wiki-a roreltute chuan hmanrelh hman theiha awmte [[MediaWiki:Gadgets-definition|hrilhfiahna]] leh [[Special:Gadgets|sawifiahna]] an siamṭha thei a ni.',
	'gadgets' => 'Hmanrelhte',
	'gadgets-title' => 'Hmanrelhte',
	'gadgets-uses' => 'Hmante',
	'gadgets-required-rights' => 'A hnuaia {{PLURAL:$2|dikna-chanvo|dikna-chanvote}} hi neih a ngái:

$1',
	'gadgets-required-skins' => 'A hnuaia {{PLURAL:$2|vunah hian a hman theih: $1 |vunahte hian a hman theih: $1}}.',
	'gadgets-default' => 'Mi zawng zawng tana tihnun sa vek a ni.',
	'gadgets-export' => 'Thawnchhuahna',
	'gadgets-export-title' => 'Hmanrelh thawnchhuah',
	'gadgets-not-found' => 'Hmanrelh "$1" hmuh a ni lo.',
	'gadgets-export-download' => 'Hnuhthlâkna',
);

/** Latvian (latviešu)
 * @author Marozols
 * @author Papuass
 */
$messages['lv'] = array(
	'prefs-gadgets' => 'Rīki',
	'gadgets' => 'Rīki',
	'gadgets-title' => 'Rīki',
	'gadgets-export-download' => 'Lejupielādēt',
);

/** Malagasy (Malagasy)
 * @author Jagwar
 */
$messages['mg'] = array(
	'gadgets' => 'Gadget',
	'gadgets-title' => 'Gadget',
	'gadgets-uses' => 'Mampiasa',
	'gadgets-export' => 'Hamoaka',
	'gadgets-export-title' => 'Famoahana gadget',
	'gadgets-not-found' => 'Tsy hita ny gadget « $1 ».',
	'gadgets-export-download' => 'Hampidina',
);

/** Minangkabau (Baso Minangkabau)
 * @author Iwan Novirion
 */
$messages['min'] = array(
	'gadgets-desc' => 'Mamungkinkan pangguno mamiliah [[Special:Gadgets|pakakeh CSS jo JavaScript]] malalui [[Special:Preferences#mw-prefsection-gadgets|pangaturan]]-nyo',
	'prefs-gadgets' => 'Pakakeh',
	'gadgets-prefstext' => 'Di bawah ko daftar pakakeh istimewa nan dapek Sanak aktipan untuak akun Sanak. Kasado pakakeh ko sabagian babasis JavaScript dek itu Sanak musti mangaktipan JavaScript pado paramban Sanak untuak dapek manjalankannyo. Paratikan kalau babagai pakakek ko indak ado pangaruahnyo pado laman pangaturan ko.

Salain tu paratikan juo kalau pakakeh ko bukanlah bagian dari parangkaik lunak MediaWiki dan biasonyo dikambangkan dan dijago dek pangguno di Wikipedia. Panguruih lokal dapek manyuntiang pakakeh nan ado malalui [[MediaWiki:Gadgets-definition|laman definisinyo]] ataupun pado [[Special:Gadgets|laman katarangannyo]].',
	'gadgets' => 'Pakakeh',
	'gadgets-title' => 'Pakakeh',
	'gadgets-pagetext' => 'Di bawah ko daftar pakakeh istimewa nan dapek diaktipan pangguno malalui [[Special:Preferences#mw-prefsection-gadgets|laman pangaturan]] saroman nan didefinisikan dek [[MediaWiki:Gadgets-definition|laman definisinyo]]. Tinjauan nan ko mangagiah akses ka laman pasan sistem nan mandefinisikan deskripsi jo kode masiang-masiang pakakeh.',
	'gadgets-uses' => 'Panggunoan',
	'gadgets-required-rights' => 'Mambutuahkan {{PLURAL:$2|hak-hak}} barikuik:

$1',
	'gadgets-required-skins' => 'Tasadio pado {{PLURAL:$2|kulik barikuik: $1}}.',
	'gadgets-default' => 'Diaktifkan untuak kasado urang sacaro bawaan.',
	'gadgets-export' => 'Ekspor',
	'gadgets-export-title' => 'Ekspor pakakeh',
	'gadgets-not-found' => 'Pakakeh "$1" indak basobok.',
	'gadgets-export-text' => 'Untuak mangekspor pakakeh $1, klik tombol "{{int:gadgets-export-download}}", simpan berkas nan didownload tu,
pai ka Special:Import pado wiki nan di tuju dan muek berkas tu. Sudah tu tambahkan berkas tasabuik ka laman MediaWiki:Gadgets-definition:
<pre>$2</pre>
Sanak musti punyo izin pado wiki nan di tuju (tamasuak hak manyuntiang pasan sistem) dan impor berkas haruslah aktif.',
	'gadgets-export-download' => 'Unduah',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 * @author Brest
 */
$messages['mk'] = array(
	'gadgets-desc' => 'Им овозможува на корисниците во нивните [[Special:Preferences#mw-prefsection-gadgets|нагодувања]] да одберат свои сопствени [[Special:Gadgets|CSS- и JavaScript-алатки]]',
	'prefs-gadgets' => 'Алатки',
	'gadgets-prefstext' => 'Ова е список на специјални алатки кои можете да ги активирате за вашата корисничка сметка.
Алатките се основани претежно на JavaScript, па затоа морате да имате овозможено JavaScript на вашиот прелистувач за да можат да работат.
Имајте предвид дека алатките нема да имаат никаков ефект врз оваа страница за нагодување.

Исто така имајте на ум дека овие специјални алатки не се дел од програмската опрема на МедијаВики и истите се создаваат и одржуваат од корисници на вашето локално вики.
Локалните администратори можат да ги уредуваат и прилагодуваат алатките користејќи се со [[MediaWiki:Gadgets-definition|определби]] и [[Special:Gadgets|описи]].',
	'gadgets' => 'Алатки',
	'gadgets-title' => 'Алатки',
	'gadgets-pagetext' => 'Ова е список на специјални алатки кои корисниците можат да ги активираат на нивната [[Special:Preferences#mw-prefsection-gadgets|страница за нагодување]], наведени во [[MediaWiki:Gadgets-definition|определувањата]].
Овој преглед дава лесен пристап до системските пораки кои го определуваат описот и кодот на секоја алатка.',
	'gadgets-uses' => 'Користи',
	'gadgets-required-rights' => '{{PLURAL:$2|Го бара следново право|Ги бара следниве права}}:

$1',
	'gadgets-required-skins' => 'Достапно во {{PLURAL:$2|рувото $1|следниве рува: $1}}.',
	'gadgets-default' => 'Достапно за сите по основно',
	'gadgets-export' => 'Извези',
	'gadgets-export-title' => 'Извоз на алатка',
	'gadgets-not-found' => 'Алатката „$1“ не е пронајдена.',
	'gadgets-export-text' => 'За да ја извезете алатката $1, стиснете на копчето „{{int:gadgets-export-download}}“, зачувајте ја преземената податотека,
одете на Special:Import на целното вики и подигнете ја. Потоа на страницата MediaWiki:Gadgets-definition внесете го следново:
<pre>$2</pre>
Мора да имате соодветни дозволи на целното вики (вклучувајќи го правото за уредување на системски пораки), и мора да биде овозможен увозот од подигања.',
	'gadgets-export-download' => 'Преземи',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 * @author Shijualex
 */
$messages['ml'] = array(
	'gadgets-desc' => 'ഉപയോക്താക്കൾ [[Special:Preferences#mw-prefsection-gadgets|ക്രമീകരണങ്ങളിൽ നിന്നു]] അവർക്കിഷ്ടമുള്ള [[Special:Gadgets|സി.എസ്.എസ്., ജാവാസ്ക്രിപ്റ്റ് ഗാഡ്ജറ്റുകൾ]] തിരഞ്ഞെടുക്കാൻ അനുവദിക്കൽ.',
	'prefs-gadgets' => 'ഗാഡ്ജറ്റ്',
	'gadgets-prefstext' => 'താങ്കളുടെ അംഗത്വത്തിനു ഉപയോഗിക്കാവുന്ന പ്രത്യേക ഗാഡ്ജറ്റുകളുടെ പട്ടികയാണ് താഴെയുള്ളത്.
ഈ ഗാഡ്‌‌ജറ്റുകൾ പ്രധാനമായും ജാവാസ്ക്രിപ്റ്റിൽ അധിഷ്ഠിതമായതിനാൽ ഇവ പ്രവർത്തിക്കുവാൻ താങ്കളുടെ ബ്രൗസറിൽ ജാവാസ്ക്രിപ്റ്റ് സജ്ജമാക്കി നൽകിയിരിക്കണം.
ഈ ക്രമീകരണങ്ങൾ താളിൽ ഈ ഗാഡ്ജറ്റുകൾക്ക് യാതൊരു സ്വാധീനവുമില്ലന്നറിയുക.

ഈ പ്രത്യേക ഗാഡ്‌‌ജറ്റുകൾ മീഡിയവിക്കി സോഫ്റ്റ്‌‌വേറിന്റെ ഭാഗമേയല്ല എന്നും മനസ്സിലാക്കുക, അവ വികസിപ്പിക്കുന്നതും പരിപാലിക്കുന്നതും താങ്കളുടെ പ്രാദേശിക വിക്കിയിലെ ഉപയോക്താക്കളായിരിക്കും.
പ്രാദേശിക കാര്യനിർവാഹകർക്ക് ലഭ്യമായ ഗാഡ്‌‌ജറ്റുകളെ [[MediaWiki:Gadgets-definition|നിർവചനങ്ങളും]] [[Special:Gadgets|വിവരണങ്ങളും]] ഉപയോഗിച്ച് തിരുത്താൻ കഴിയുന്നതാണ്.',
	'gadgets' => 'ഗാഡ്ജറ്റ്',
	'gadgets-title' => 'ഗാഡ്ജറ്റ്',
	'gadgets-pagetext' => 'ഉപയോക്താക്കൾക്ക് അവരുടെ [[Special:Preferences#mw-prefsection-gadgets|ക്രമീകരണങ്ങൾ താളിൽ]] നിന്നും സജ്ജമാക്കാവുന്ന ഗാഡ്ജറ്റുകളുടെ പട്ടിക [[MediaWiki:Gadgets-definition|അവ നിർവ്വചിക്കപ്പെട്ട പ്രകാരം]] താഴെ കൊടുത്തിരിക്കുന്നു.
ഓരോ ഗാഡ്ജറ്റിന്റേയും വിവരണവും കോഡും ഉള്ള സന്ദേശ താളുകളിലേക്കു പോകാനുള്ള എളുപ്പവഴി ഈ പട്ടിക നൽകുന്നു.',
	'gadgets-uses' => 'ഉപയോഗങ്ങൾ',
	'gadgets-required-rights' => 'താഴെപ്പറയുന്ന {{PLURAL:$2|അവകാശം|അവകാശങ്ങൾ}} ആവശ്യമാണ്:

$1',
	'gadgets-required-skins' => 'ലഭ്യമായ {{PLURAL:$2|ദൃശ്യരൂപം: $1|ദൃശ്യരൂപങ്ങൾ: $1}}.',
	'gadgets-default' => 'എല്ലാവർക്കും സ്വതേ പ്രവർത്തനസജ്ജമായിരിക്കും.',
	'gadgets-export' => 'കയറ്റുമതി ചെയ്യുക',
	'gadgets-export-title' => 'ഗാഡ്ജറ്റ് കയറ്റുമതി ചെയ്യുക',
	'gadgets-not-found' => 'ഗാഡ്ജറ്റ് "$1" കണ്ടെത്താനായില്ല.',
	'gadgets-export-text' => '$1 എന്ന ഗാഡ്ജറ്റ് കയറ്റുമതി ചെയ്യാൻ, "{{int:gadgets-export-download}}" എന്ന ബട്ടണിൽ ഞെക്കുക, ഡൗൺലോഡ് ചെയ്ത് ലഭിക്കുന്ന പ്രമാണം സേവ് ചെയ്യുക, ലക്ഷ്യവിക്കിയിലെ Special:Import എന്ന താളിൽ ചെന്ന ശേഷം അത് അവിടെ അപ്‌ലോഡ് ചെയ്യുക. താഴെ കൊടുത്തിരിക്കുന്നത് MediaWiki:Gadgets-definition താളിൽ ചേർക്കുക:
<pre>$2</pre>
ലക്ഷ്യവിക്കിയിൽ താങ്കൾക്ക് ആവശ്യമായ അനുമതികൾ (വ്യവസ്ഥാസന്ദേശങ്ങൾ തിരുത്താനുള്ള അവകാശമടക്കം) ഉണ്ടായിരിക്കണം ഒപ്പം പ്രമാണ അപ്‌ലോഡ് വഴിയുള്ള ഇറക്കുമതി അവിടെ പ്രവർത്തനസജ്ജമായിരിക്കുകയും വേണം.',
	'gadgets-export-download' => 'ഡൗൺലോഡ്',
);

/** Marathi (मराठी)
 * @author Kaustubh
 * @author Mahitgar
 * @author Rahuldeshmukh101
 * @author V.narsikar
 */
$messages['mr'] = array(
	'gadgets-desc' => 'सदस्यांना त्यांच्या [[Special:Preferences#mw-prefsection-gadgets|पसंतीची]] [[Special:Gadgets|CSS व जावास्क्रीप्ट गॅजेट्स]] निवडण्याची परवानगी देते.',
	'prefs-gadgets' => 'उपकरण(गॅजेट)',
	'gadgets-prefstext' => 'खाली तुम्ही तुमच्या सदस्यखात्यासाठी वापरू शकत असलेल्या गॅजेट्सची यादी दिलेली आहे. ही गॅजेट्स मुख्यत्वे जावास्क्रीप्टवर अवलंबून असल्यामुळे तुमच्या ब्राउझर मध्ये जावास्क्रीप्ट एनेबल असणे आवश्यक आहे. या गॅजेट्समुळे या पसंतीच्या पानावर कुठलेही परिणाम होणार नाहीत याची कृपया नोंद घ्यावी.

तसेच ही गॅजेट्स मीडियाविकी प्रणालीचा हिस्सा नाहीत, व ही मुख्यत्वे स्थानिक विकिवर सदस्यांद्वारे उपलब्ध केली जातात. 

स्थानिक प्रचालक उपलब्ध गॅजेट्स [[MediaWiki:Gadgets-definition|व्याख्या]] व [[Special:Gadgets|वर्णने]] वापरून बदलू शकतात.',
	'gadgets' => 'सुविधा (गॅजेट)',
	'gadgets-title' => 'गॅजेट',
	'gadgets-pagetext' => 'खाली तुम्ही तुमच्या सदस्यत्वासाठी [[Special:Preferences#mw-prefsection-gadgets|माझ्या पसंती]] पानावर वापरू शकत असलेल्या [[MediaWiki:Gadgets-definition|व्याख्या]]ने सांगितलेल्या गॅजेट्सची यादी दिलेली आहे. हे पान तुम्हाला प्रत्येक गॅजेट्सचा कोड व व्याख्या देणार्‍या पानासाठी सोपी संपर्क सुविधा पुरविते.',
	'gadgets-uses' => 'उपयोग',
	'gadgets-required-rights' => 'खालील {{PLURAL:$2|अधिकार}} हवेच :

$1',
	'gadgets-required-skins' => '{{PLURAL:$2|$1 skin|खालील देखाव्यांवर  : $1}} उपलब्ध आहेत',
	'gadgets-default' => 'सर्वांसाठी डिफॉल्ट उपलब्ध केले आहे',
	'gadgets-export' => 'निर्यात करा',
	'gadgets-export-title' => 'उपकरण निर्यात',
	'gadgets-not-found' => 'उपकरण "$1" सापडत नाही.',
	'gadgets-export-text' => '$1 उपकरण-सुविधा निर्यात करण्याकरिता, "{{int:gadgets-export-download}}" कळीवर टिचकी मारा, उतरवलेली संचिका-फाईल जतन करा
डेस्टिनेशन विकिच्या विशेष:आयात पानावर जाऊन संचिका-फाईल चढवावी.नंतर खालील MediaWiki:Gadgets-definition पान चढवावे :
<pre>$2</pre>
तुमच्याकडे डेस्टिनेशन विकिवर (सिस्टीम मेसेजेस सुद्धा संपादीत करण्यासहीत )  सुयोग्य परवानग्या उपलब्ध असणे अत्यावश्यक आहे आणि  चढवलेल्या संचिकाकरिता आयात सुविधा सक्षम असणे आवश्यक आहे.',
	'gadgets-export-download' => 'अधिभारण करा',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 * @author Aviator
 * @author Zamwan
 */
$messages['ms'] = array(
	'gadgets-desc' => 'Membolehkan pengguna memilih [[Special:Gadgets|gajet CSS dan JavaScript]] tempahan melalui [[Special:Preferences#mw-prefsection-gadgets|laman keutamaan]]',
	'prefs-gadgets' => 'Gajet',
	'gadgets-prefstext' => 'Yang berikut ialah senarai gajet khas yang anda boleh hidupkan untuk akaun anda. Kebanyakan daripada gajet-gajet ini memerlukan JavaScript, oleh itu anda perlu menghidupkan ciri JavaScript dalam pelayar web anda untuk menggunakannya. Sila ambil perhatian bahawa gajet-gajet ini tidak menjejaskan laman keutamaan ini.

Sila ambil perhatian juga bahawa gajet-gajet khas ini bukan sebahagian daripada perisian MediaWiki, dan biasanya dibangunkan dan diselenggara oleh para pengguna di wiki tempatan anda. Pentadbir tempatan boleh mengubah gajet-gajet yang sedia ada menggunakan [[MediaWiki:Gadgets-definition|takrif]] dan [[Special:Gadgets|keterangan]].',
	'gadgets' => 'Gajet',
	'gadgets-title' => 'Gajet',
	'gadgets-pagetext' => 'Yang berikut ialah senarai gajet khas yang boleh dihidupkan oleh pengguna melalui [[Special:Preferences#mw-prefsection-gadgets|laman keutamaan]], sebagai mana yang telah [[MediaWiki:Gadgets-definition|ditakrifkan]]. Laman ini menyediakan capaian mudah kepada laman pesanan sistem yang mentakrifkan setiap kod dan keterangan gajet.',
	'gadgets-uses' => 'Menggunakan',
	'gadgets-required-rights' => '{{PLURAL:$2|Hak|Hak-hak}} yang berikut diperlukan:

$1',
	'gadgets-required-skins' => 'Terdapat pada {{PLURAL:$2|kulit $1|kulit-kulit berikut: $1}}.',
	'gadgets-default' => 'Dihidupkan untuk semua orang secara sediaan.',
	'gadgets-export' => 'Eksport',
	'gadgets-export-title' => 'Eksport gajet',
	'gadgets-not-found' => 'Gajet "$1" tiada.',
	'gadgets-export-text' => 'Untuk mengeksport gajet $1, klik butang "{{int:gadgets-export-download}}", simpan fail yang dimuat turun, pergi ke Khas:Import di wiki sasaran dan muat naik fail tadi di situ. Kemudian tambah kod berikut dalam laman MediaWiki:Gadgets-definition:
<pre>$2</pre>
Anda hendaklah mempunyai keizinan yang bersesuaian di wiki sasaran (termasuklah hak untuk menyunting pesanan sistem) dan ciri import daripada fail muat naik hendaklah dibolehkan.',
	'gadgets-export-download' => 'Muat turun',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'gadgets-desc' => 'Tħalli lill-utenti jagħżlu [[Special:Gadgets|aċċessorji CSS u JavaScript]] fil-[[Special:Preferences#mw-prefsection-gadgets|preferenzi]] tagħhom',
	'prefs-gadgets' => 'Aċċessorji',
	'gadgets-prefstext' => "Hawn taħt hawn lista ta' aġġeġġi speċjali li inti tista' tippermetti għall-kont tiegħek.
Dawn l-aġġeġġi huma l-aktar ibbażati fuq JavaScript, u għalhekk il-JavaScript trid tkun awtorizzata fil-browżer tiegħek sabiex ikunu jistgħu jaħdmu.
Kun af li dawn l-aġġeġġi mhu se jħallu ebda effett fuq din il-paġna tal-preferenzi.

Għandek tkun taf ukoll li dawn l-aġġeġġi spe1jali mhumiex parti mis-softwer tal-MediaWiki, u huma ħafna drabi żviluppati u mantenuti minn utenti fuq il-wiki lokali tiegħek.
L-amministraturi lokali jistgħu jimmodifikaw id-[[MediaWiki:Gadgets-definition|definizzjonijiet]] u d-[[Special:Gadgets|deskrizzjonijiet]] tal-aġġeġġi disponibbli.",
	'gadgets' => 'Aċċessorji',
	'gadgets-title' => 'Aċċessorji',
	'gadgets-pagetext' => "Hawn taħt hawn lista ta' aġġeġġi speċjali li l-utenti jistgħu jippermettu fil-[[Special:Preferences#mw-prefsection-gadgets|paġna tal-preferenzi]], kif definit fid-[[MediaWiki:Gadgets-definition|definizzjonijiet]].
Din il-ħarsa tipprovdi aċċess faċli għall-messaġġi tas-sistema li fihom hemm deskrizzjoni u s-sors ta' kull aġġeġġ.",
	'gadgets-uses' => 'Juża',
	'gadgets-required-rights' => 'Għandu bżonn id-{{PLURAL:$2|dritt|drittijiet}} segwenti:

$1',
	'gadgets-required-skins' => 'Disponibbli fuq {{PLURAL:$2|l-iskema $1|l-iskemi segwenti: $1}}.',
	'gadgets-export' => 'Esporta',
	'gadgets-export-title' => 'Esporta aċċessorju',
	'gadgets-not-found' => 'L-aċċessorju "$1" ma nstabx.',
	'gadgets-export-download' => 'Niżżel',
);

/** Mazanderani (مازِرونی)
 * @author Mehdi
 */
$messages['mzn'] = array(
	'gadgets-prefstext' => 'پائین فهرست دله اته سری ابزارون درنه که شما بتوننی از شه کاروری خواستنی‌ئون، یان ره شه وسه فعال هاکنین.
این ابزارون ویشترشون جاوااسکریپت رو کار کننه، اگه خواننی یانه جا استفاده هاکنین ونه حتماً شه اینترنت مرورگر رو جاواسکریپت ره فعال هاکنین.
البته ونه توجه دارین که این ابزارون نتوننه شمه خواستنی‌ئون صفحه ره تغییر هادن.

توجه دارین که این ابزارون مدیاویکی نرم‌افزار جمع نینه، و معمولاً شمه ویکی کارورون دست (مدیرون) بسات بینه و نگهداری بوننه.
هرویکی مدیرون بتوننه از [[MediaWiki:Gadgets-definition|تعاریف]] و [[Special:Gadgets|توضیحات]] صفحات جا استفاده هاکنن و ابزارون ره تغییر هادن.',
	'gadgets' => 'ابزارون',
	'gadgets-title' => 'ابزارون',
);

/** Norwegian Bokmål (norsk bokmål)
 * @author Laaknor
 * @author Nghtwlkr
 * @author Sjurhamre
 */
$messages['nb'] = array(
	'gadgets-desc' => 'Lar brukere velge egendefinerte [[Special:Gadgets|CSS- og JavaScript-verktøy]] i [[Special:Preferences#mw-prefsection-gadgets|innstillingene sine]]',
	'prefs-gadgets' => 'Tilleggsfunksjoner',
	'gadgets-prefstext' => 'Nedenfor er en liste over tilleggsfunksjoner du kan slå på for kontoen din.
Disse funksjonene er for det meste basert på JavaScript, så du må ha dette slått på i nettleseren din for at de skal fungere.
Merk at funksjonene ikke vil ha noen innvirkning på denne innstillingssiden.

Merk også at disse verktøyene ikke er del av MediaWiki-programvaren, og vanligvis utvikles og vedlikeholdes av brukere på den lokale wikien. Lokale administratorer kan redigere tilgjengelig verktøy ved å endre [[MediaWiki:Gadgets-definition|definisjonene]] og [[Special:Gadgets|beskrivelsene]].',
	'gadgets' => 'Tilleggsfunksjoner',
	'gadgets-title' => 'Tilleggsfunksjoner',
	'gadgets-pagetext' => 'Nedenfor er en liste over tilleggsfunksjoner brukere kan slå på i [[Special:Preferences#mw-prefsection-gadgets|innstillingene]], som definert på [[MediaWiki:Gadgets-definition]]. Denne oversikten gir lett tilgang til systembeskjedsidene som definerer hvert verktøys beskrivelse og kode.',
	'gadgets-uses' => 'Bruk',
	'gadgets-required-rights' => 'Krever følgende {{PLURAL:$2|rettighet|rettigheter}}:

$1',
	'gadgets-required-skins' => 'Tilgjengelig i {{PLURAL:$2|drakta $1|følgende drakter: $1}}.',
	'gadgets-default' => 'Aktivert for alle som standard',
	'gadgets-export' => 'Eksporter',
	'gadgets-export-title' => 'Tilleggsfunksjon eksport',
	'gadgets-not-found' => 'Tilleggsfunksjon «$1» ikke funnet.',
	'gadgets-export-text' => 'For å eksportere verktøyet $1, klikk på «{{int:gadgets-export-download}}»-knappen, lagre den nedlastede filen, gå til Special:Import på destinasjonswikien og last den opp. Deretter legger du til følgende på siden MediaWiki:Gadgets-definition:
<pre>$2</pre>
Du må ha de nødvendige tillatelsene på destinasjonswikien (inkludert retten til å redigere systemmeldinger) og import fra filopplastinger må være aktivert.',
	'gadgets-export-download' => 'Last ned',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 */
$messages['nds'] = array(
	'gadgets-desc' => 'Lett Brukers vörgeven [[Special:Gadgets|CSS- un JavaScript-Gadgets]] in jemehr [[Special:Preferences#mw-prefsection-gadgets|Instellungen]] aktiveren',
	'prefs-gadgets' => 'Gadgets',
	'gadgets-prefstext' => 'Ünnen steit en List vun spezielle Warktüüch, de elkeen Bruker för sik anstellen kann.
Disse Warktüüch loopt tomehrst mit Javascript. Dat mutt also in’n Browser anstellt wesen, dat dat löppt.
Wees aver gewohr, dat de Warktüüch hier direkt op disse Sied mit de persönlichen Instellungen nix bewarkt.

De Warktüüch sünd denn ok keen offiziellen Deel vun MediaWiki, sünnern warrt normalerwies vun enkelte Brukers vun dat lokale Wiki schreven. De Administraters vun dat Wiki köönt de List mit de Warktüüch över de Sieden [[MediaWiki:Gadgets-definition]] un [[Special:Gadgets]] ännern.',
	'gadgets' => 'Gadgets',
	'gadgets-title' => 'Gadgets',
	'gadgets-pagetext' => 'Ünnen steit en List mit spezielle Warktüüch, de för all Brukers in de [[Special:Preferences#mw-prefsection-gadgets|Instellungen]] anstellt warrn köönt. Defineert sünd de Warktüüch in [[MediaWiki:Gadgets-definition]].
Disse Översicht gifft direkten Togang to de Systemnarichten, in de de Text to de Warktüüch un jemehr Programmkood steit.',
	'gadgets-uses' => 'Bruukt',
);

/** Low Saxon (Netherlands) (Nedersaksies)
 * @author Servien
 */
$messages['nds-nl'] = array(
	'gadgets-desc' => 'Laot gebrukers [[Special:Gadgets|CSS en JavaScripts]] aktiveren in der eigen [[Special:Preferences#mw-prefsection-gadgets|veurkeuren]]',
	'prefs-gadgets' => 'Technies spul',
	'gadgets-prefstext' => "Hieronder steet spesiaal techiniese spul da'j inschakelen kunnen.
't Is veurnamelik ebaseerd op JavaScript, dus JavaScript mö'j an hebben staon in joew webkieker um t te laoten warken.
Al dit techniese spul hef gien invleud op disse veurkeurenpagina.

Disse techniese snufjes maken oek gien deel uut van de MediaWiki-programmatuur, en t wörden meestentieds ontwikkeld en onderhouwen
deur gebrukers van joew eigen wiki.
Beheerders kunnen t beschikbaore techniese spul angeven in [[MediaWiki:Gadgets-definition|defenisies]] en [[Special:Gadgets|beschrievingen]].",
	'gadgets' => 'Technies spul',
	'gadgets-title' => 'Technies spul',
	'gadgets-pagetext' => 'Hieronder steet spesiaal technies spul die gebrukers in kunnen schakelen bie [[Special:Preferences#mw-prefsection-gadgets|mien veurkeuren]], zo as in-esteld in de [[MediaWiki:Gadgets-definition|defenisies]].
Dit overzichte biejt eenvoudige toegang tot de systeemtekstzied waor de beschrieving en de programmakode van elke technies snufjen steet.',
	'gadgets-uses' => 'Gebruuk',
);

/** Nepali (नेपाली)
 * @author Bhawani Gautam
 * @author Nirmal Dulal
 */
$messages['ne'] = array(
	'gadgets-desc' => 'प्रयोगकर्ताको [[Special:Preferences#mw-prefsection-gadgets|अभिरुचि अनुसार]]  [[Special:Gadgets|CSS र जाभास्क्रीप्ट उपकरणहरू]] छान्न दिनुहोस',
	'prefs-gadgets' => 'उपकरणहरू',
	'gadgets-prefstext' => 'विशेष उपकरणहरूको सूची तल दिइएकोछ तपाईंले आफ्नो खातामा सक्रिय पार्न सक्नुहुन्छ।
प्राय सबै उपकरणहरू जाभास्क्रीप्टमा आधारित छन्, यस कारण ब्राउजरमा काम गराउनको लागि जाभास्क्रीप्टलाई सक्रिय  गर्नु पर्छ।
याद राख्नुहोस् ती उपकरणहरूले अभिरुचि पृष्ठमा असर गर्दैनन्।
यो पनि याद राखुहोस् यी विशेष उपकरणहरू मीडिया विकि सफ्टवेयरभित्र पर्दैनन् र प्राय स्थानीय विकि प्रयोगकर्ताहरुले विकास यसको विकास र सञ्चालन गर्दछन्।                  स्थानीय प्रबन्धकहरूले उपलब्ध उपकरणहरूका [[MediaWiki:Gadgets-definition|परिभाषाहरू]] र [[Special:Gadgets|विवरणहरू]] सम्पादन गर्दछन्।',
	'gadgets' => 'उपकरणहरू',
	'gadgets-title' => 'उपकरणहरू',
	'gadgets-pagetext' => 'विशेष उपकरणहरुको सूची तल दिइएकोछ प्रयोगकर्ताहरुले  [[MediaWiki:Gadgets-definition|परिभाषाहरु]]मा जनाए अनुसार आफ्नो [[Special:Preferences#mw-prefsection-gadgets|अभिरुचि पृष्ठमा]],   सक्रिय पार्न सक्नेछन्।।
यस सिंहावलोकनले प्रणाली सन्देश पृष्ठ सजिलै प्राप्त गर्न  सकिनेछ जसले प्रत्येक उपकरणको विवरण र कोडलाई परिभाषित गरेको छ।',
	'gadgets-uses' => 'प्रयोगहरु',
	'gadgets-required-rights' => 'आवश्यकता छ {{PLURAL:$2|$1 अधिकारको|निम्न अधिकारहरुको: $1}}.', # Fuzzy
	'gadgets-default' => 'सबैको निम्ति सुरुदेखि नैं सक्रिय छ।',
	'gadgets-export' => 'निर्यात गर्ने',
	'gadgets-export-title' => 'उपकरण निर्यात',
	'gadgets-not-found' => 'उपकरण  "$1" पाइएन।',
	'gadgets-export-text' => '$1 उपरणलाई निर्यात गर्न,  "{{int:gadgets-export-download}}" बटनमा क्लिक गर्नुहोस्, डाउनलोड गरिएको फाइललाई संग्रह गर्नुहोस्,
जानुहोस् विशेष:लक्षित विकिमा निर्यात गर्नुहोस् र अपलोड गरुहोस्। त्यसपछि तल दिएका मीडियाविकि: उपकरण परिभाषाहरु परिभाषा पृष्ठमा थप्नुहोस्:
<pre>$2</pre>
तपाईंसित लक्षित विकिमा प्रणाली सन्देशहरु सम्पादन गर्ने अधिकार सहित आयात गर्ने समुचित अनुमति र फाइल अपलोड पनि सक्रिय गरिएको हुनुपर्छ।',
	'gadgets-export-download' => 'डाउनलोड गर्ने',
);

/** Dutch (Nederlands)
 * @author Annabel
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'gadgets-desc' => 'Laat gebruikers [[Special:Gadgets|CSS en JavaScripts]] activeren in hun [[Special:Preferences#mw-prefsection-gadgets|voorkeuren]]',
	'prefs-gadgets' => 'Uitbreidingen',
	'gadgets-prefstext' => 'Hieronder staan de speciale uitbreidingen die u kunt inschakelen.
De uitbreidingen zijn voornamelijk gebaseerd op JavaScript, dus JavaScript moet voor uw browser ingeschakeld zijn om ze te laten werken.
De uitbreidingen hebben geen invloed op deze pagina met voorkeuren.

Deze speciale uitbreidingen zijn geen onderdeel van de MediaWiki-software en worden meestal ontwikkeld en onderhouden door gebruikers van uw wiki.
Beheerders kunnen de beschikbare uitbreidingen opgeven in [[MediaWiki:Gadgets-definition|definities]] en [[Special:Gadgets|beschrijvingen]].',
	'gadgets' => 'Uitbreidingen',
	'gadgets-title' => 'Uitbreidingen',
	'gadgets-pagetext' => 'Hieronder staan de speciale uitbreidingen die gebruikers kunnen inschakelen via hun [[Special:Preferences#mw-prefsection-gadgets|voorkeuren]], zoals ingesteld in de [[MediaWiki:Gadgets-definition|definities]].
Dit overzicht biedt eenvoudige toegang tot de systeemtekstpagina waar de beschrijving en de programmacode van iedere uitbreiding staat.',
	'gadgets-uses' => 'Gebruikt',
	'gadgets-required-rights' => '{{PLURAL:$2|Het volgende recht is|De volgende rechten zijn}} vereist:

$1.',
	'gadgets-required-skins' => 'Beschikbaar in de {{PLURAL:$2|vormgeving $1|volgende vormgevingen: $1}}.',
	'gadgets-default' => 'Standaard ingeschakeld voor iedereen.',
	'gadgets-export' => 'Exporteren',
	'gadgets-export-title' => 'Uitbreiding exporteren',
	'gadgets-not-found' => 'Uitbreiding "$1" niet gevonden.',
	'gadgets-export-text' => 'Klik op de knop "{{int:gadgets-export-download}}" om de uitbreiding "$1" te exporteren.
Sla daarna het gedownloade bestand op.
Ga naar "Special:Import" in de doelwiki en upload het geëxporteerde bestand.
Voeg daarna het volgende toe aan de pagina "MediaWiki:Gadgets-definition":
<pre>$2</pre>
U moet de juiste rechten hebben op de doelwiki, inclusief het recht om bewerkingen te maken aan de systeemberichten, en importeren uit bestanden moet ingeschakeld zijn.',
	'gadgets-export-download' => 'Downloaden',
);

/** Nederlands (informeel)‎ (Nederlands (informeel)‎)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'gadgets-prefstext' => 'Hieronder staan de speciale uitbreidingen die je kunt inschakelen.
De uitbreidingen zijn voornamelijk gebaseerd op JavaScript, dus JavaScript moet voor je browser ingeschakeld zijn om ze te laten werken.
De uitbreidingen hebben geen invloed op deze pagina met voorkeuren.

Deze speciale uitbreidingen zijn geen onderdeel van de MediaWiki-software en worden meestal ontwikkeld en onderhouden door gebruikers van jouw wiki.
Beheerders kunnen de beschikbare uitbreidingen opgeven in [[MediaWiki:Gadgets-definition|definities]] en [[Special:Gadgets|beschrijvingen]].',
	'gadgets-export-text' => 'Klik op de knop "{{int:gadgets-export-download}}" om de uitbreiding "$1" te exporteren.
Sla daarna het gedownloade bestand op.
Ga naar "Special:Import" in de doelwiki en upload het geëxporteerde bestand.
Voeg daarna het volgende toe aan de pagina "MediaWiki:Gadgets-definition":
<pre>$2</pre>
Je moet de juiste rechten hebben op de doelwiki, inclusief het recht om bewerkingen te maken aan de systeemberichten, en importeren uit bestanden moet ingeschakeld zijn.',
);

/** Norwegian Nynorsk (norsk nynorsk)
 * @author Eirik
 * @author Harald Khan
 * @author Nghtwlkr
 * @author Njardarlogar
 */
$messages['nn'] = array(
	'gadgets-desc' => 'Lèt brukarane velje eigendefinerte [[Special:Gadgets|CSS- og JavaScript-verktøy]]  i [[Special:Preferences#mw-prefsection-gadgets|innstillingane sine]].',
	'prefs-gadgets' => 'Tilleggsfunksjonar',
	'gadgets-prefstext' => 'Under finn du ei liste over tilleggsfunksjonar som du kan slå på på kontoen din. Desse tilleggsfunksjonane er for det meste baserte på JavaScript, så JavaScript må vere slått på i nettlesaren din for at dei skal verke. Merk at desse tilleggsfunksjonane ikkje har nokon effekt på denne innstillingssida.

Merk også at tilleggsfunksjonane ikkje er ein del av MediaWiki-programvara, og at dei vanlegvis er utvikla og vedlikehaldne av brukarar på din lokale wiki. Lokale administratorar kan endre dei tilgjengelege tilleggsfunksjonane ved å endre [[MediaWiki:Gadgets-definition|definisjonane]] og [[Special:Gadgets|skildringane]].',
	'gadgets' => 'Tilleggsfunksjonar',
	'gadgets-title' => 'Tilleggsfunksjonar',
	'gadgets-pagetext' => 'Under finn du ei liste over tilleggsfunksjonar som brukarane kan slå på på [[Special:Preferences#mw-prefsection-gadgets|innstillingane]] sine, som oppgjevne i [[MediaWiki:Gadgets-definition|definisjonane]].
Dette oversynet gjev enkel tilgang til systemmeldingssidene som inneheld skildringa og koden til kvar enkelt tilleggsfunksjon.',
	'gadgets-uses' => 'Brukar',
	'gadgets-export' => 'Eksporter',
	'gadgets-export-download' => 'Last ned',
);

/** Occitan (occitan)
 * @author Boulaur
 * @author Cedric31
 */
$messages['oc'] = array(
	'gadgets-desc' => 'Daissa als utilizaires los [[Special:Gadgets|gadgets CSS e JavaScript]] dins lor [[Special:Preferences#mw-prefsection-gadgets|preferéncias]]',
	'prefs-gadgets' => 'Gadgets',
	'gadgets-prefstext' => "Çaijós apareis una lista de gadgets que podètz activar per vòstre compte. Fan apèl a JavaScript, deu doncas èsser activat per vòstre navigador Web.

An pas cap d'incidéncia sus aquesta pagina de preferéncias. E mai, son generalament desvolopats e mantenguts sus aqueste wiki.
Los administrators pòdon modificar los gadgets en passant per [[MediaWiki:Gadgets-definition|las definicions]] e las [[Special:Gadgets|descripcions]].",
	'gadgets' => 'Gadgets',
	'gadgets-title' => 'Gadgets',
	'gadgets-pagetext' => "Çaijós apareis una lista de gadgets que los utilizaires pòdon activar dins lor [[Special:Preferences#mw-prefsection-gadgets|pagina de preferéncias]], coma definit dins ''[[MediaWiki:Gadgets-definition|las definicions]]''.
Aqueste susvòl dona un accès rapid a las paginas de messatges del sistèma que definisson cada descripcion e cada còde dels gadgets.",
	'gadgets-uses' => 'Utiliza',
	'gadgets-export' => 'Exportar',
	'gadgets-export-download' => 'Telecargar',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Ansumang
 * @author Odisha1
 * @author Psubhashish
 */
$messages['or'] = array(
	'gadgets-desc' => 'ସଭ୍ୟମାନଙ୍କୁ ଆପଣା ମନପସନ୍ଦର [[Special:Gadgets|CSS ଓ ଜାଭାସ୍କ୍ରିପ୍ଟ ଗ୍ୟାଜେଟ]] ସେମାନଙ୍କର [[Special:Preferences#mw-prefsection-gadgets|ପସନ୍ଦସବୁ]]ରେ ବାଛିବାକୁ ଦିଅନ୍ତୁ',
	'prefs-gadgets' => 'ଗ୍ୟାଜେଟ',
	'gadgets-prefstext' => 'ତଳେ ଆପଣଙ୍କ ଖାତା ଲାଗି କେତେକ ବିଶେଷ ଗ୍ୟାଜେଟର ତାଲିକା ଦିଆଗଲା ।
ଏହି ଗ୍ୟାଜେଟମାନ ମୂଳତ ଜାଭାସ୍କ୍ରିପ୍ଟକୁ ଆଧାର କରି ତିଆରି, ତେଣୁ ସେମାନଙ୍କୁ ବ୍ୟବହାର କରିବା ପାଇଁ ଆପଣଙ୍କୁ ନିଜ ବ୍ରାଉଜରରେ ଜାଭାସ୍କ୍ରିପ୍ଟ ସଚଳ କରିବାକୁ ପଡ଼ିବ ।
ଜାଣିରଖନ୍ତୁ ଯେ ଏହିସବୁ ଗ୍ୟାଜେଟ ଆପଣଙ୍କର ପସନ୍ଦ ପୃଷ୍ଠା ଉପରେ କିଛି ପ୍ରଭାବ ପକାଇବେ ନାହିଁ ।

ଆହୁରି ଜାଣିରଖନ୍ତୁ ଯେ ଏହି ବିଶେଷ ଗ୍ୟାଜେଟସବୁ ମିଡ଼ିଆଉଇକି ସଫ୍ଟଵେର ଅନ୍ତଭୁକ୍ତ ନୁହଁନ୍ତି । ଏହିସବୁ ସାଧାରଣତ ଆପଣଙ୍କ ଆଞ୍ଚଳିକ ଉଇକିର ସଭ୍ୟ ମାନଙ୍କ ଦେଇ ତିଆରି ଓ ପରିଚାଳିତ ହୋଇଥାଏ ।
ଆଞ୍ଚଳିକ ପରିଚାଳକଗଣ ଗ୍ୟାଜେଟର [[MediaWiki:Gadgets-definition|ସଜ୍ଞା]] ଓ [[Special:Gadgets|ବିବରଣୀ]]ସବୁ ବଦଳାଇପାରିବେ ।',
	'gadgets' => 'ଗ୍ୟାଜେଟ',
	'gadgets-title' => 'ଗ୍ୟାଜେଟ',
	'gadgets-pagetext' => '[[MediaWiki:Gadgets-definition|ସଜ୍ଞା]] ଅନୁସାରେ ତଳେ ସଭ୍ୟମାନଙ୍କ [[Special:Preferences#mw-prefsection-gadgets|ପସନ୍ଦ ପୃଷ୍ଠା]]ରୁ ସଚଳ କରାଯାଇପାରିବା ଭଳି କେତେକ ବିଶେଷ ଗ୍ୟାଜେଟର ତାଲିକା ଦିଆଗଲା ।
ଏହି ଅବଲୋକନ ପ୍ରତ୍ୟେକ ଗ୍ୟାଜେଟର ବିବରଣୀ ଓ କୋଡ଼ ନିର୍ଦ୍ଧାରଣ କରୁଥିବା ସିଷ୍ଟମ  ମେସେଜ ପୃଷ୍ଠା ସବୁକୁ ସହଜ ଯିବାଆସିବାର ସୁବିଧା ଦେଇଥାଏ ।',
	'gadgets-uses' => 'ବ୍ୟବହାର',
	'gadgets-required-rights' => 'ଏହି {{PLURAL:$2|ଅଧିକାରଟି|ଅଧିକାରସମୂହ}} ଲୋଡ଼ା :

$1',
	'gadgets-required-skins' => '{{PLURAL:$2|$1 ବହିରାବରଣ|ଏହି ସବୁ ବହିରାବରଣରେ: $1}} ମିଳୁଅଛି ।',
	'gadgets-default' => 'ଆପେଆପେ ସଭିଙ୍କ ପାଇଁ ସଚଳ କରାଗଲା ।',
	'gadgets-export' => 'ରପ୍ତାନୀ',
	'gadgets-export-title' => 'ଗ୍ୟାଜେଟ ରପ୍ତାନି',
	'gadgets-not-found' => '"$1"  ଗ୍ୟାଜେଟଟି ମିଳିଲା ନାହିଁ ।',
	'gadgets-export-text' => '$1 ଗ୍ୟାଜେଟ ରପ୍ତାନି କରିବା ନିମନ୍ତେ "{{int:gadgets-export-download}}" ବୋତାମରେ କ୍ଲିକ କରି ଫାଇଲଟି ଆହରଣ କରନ୍ତୁ ଓ ସାଇତି ରଖନ୍ତୁ,
ମୁକାମ ଉଇକିରେ Special:Import କୁ ଯାଇ ଏହାକୁ ଅପଲୋଡ଼ କରନ୍ତୁ । ତାହାପରେ MediaWiki:Gadgets-definition ପୃଷ୍ଠାରେ ରେ ତଳ ଲେଖାଟିକୁ ଯୋଡ଼ନ୍ତୁ:
<pre>$2</pre>
ମୁକାମ ଉଇକିରେ ଆପଣଙ୍କ ପାଖରେ ଦରକାରୀ ଅନୁମୋଦନ ଥିବା ଲୋଡ଼ା (ସିଷ୍ଟମ ମେସେଜକୁ ବଦଲାଇବାର ଅଧିକାର ସହିତ) ତଥା ଫାଇଲ ଅପଲୋଡ଼ରୁ ଆହରଣ ମଧ୍ୟ ସଚଳ ହୋଇଥିବା ଲୋଡ଼ା ।',
	'gadgets-export-download' => 'ଡାଉନଲୋଡ଼',
);

/** Punjabi (ਪੰਜਾਬੀ)
 * @author Babanwalia
 */
$messages['pa'] = array(
	'prefs-gadgets' => 'ਗੈਜਟ',
	'gadgets' => 'ਗੈਜਟ',
	'gadgets-title' => 'ਗੈਜਟ',
	'gadgets-uses' => 'ਵਰਤਦਾ ਹੈ',
	'gadgets-default' => "ਮੂਲ ਤੌਰ 'ਤੇ ਸਾਰਿਆਂ ਲਈ ਚਾਲੂ ਹੈ।",
	'gadgets-export' => 'ਨਿਰਯਾਤ',
	'gadgets-export-title' => 'ਗੈਜਟ ਨਿਰਯਾਤ',
	'gadgets-not-found' => 'ਗੈਜਟ "$1" ਨਹੀਂ ਲੱਭਾ।',
	'gadgets-export-download' => 'ਡਾਊਨਲੋਡ ਕਰੋ',
);

/** Pampanga (Kapampangan)
 * @author Katimawan2005
 */
$messages['pam'] = array(
	'gadgets-desc' => 'Didinan nong tsansa/pamikatagun a mamiling pasadiang [[Special:Gadgets|CSS ampong JavaScript gadget]] ketang karelang [[Special:Preferences#mw-prefsection-gadgets|pinili]] (preferences)',
	'prefs-gadgets' => 'Deng gadget',
	'gadgets-prefstext' => 'Ating tala (listaan) da reng espesial a gadget a agamit mu ba meng apaliari (enable) ing kekang account.
Uling makabasi la king JavaScript deng keraklan kareting gadget, kailangan yang papaliari ing JavaScript king kekang browser ba lang gumada deti.
Tandanan mung ala lang epektu king bulung da ring pinili (preferences page) deng gadget a reti.

Tandanan mu muring e la kayabe king MediaWiki software deting gadget, at keraklan, gagawan da la ampong mamantinian deng talagamit ketang kekayung lokal a wiki.
Maliari lang makapag-edit deng talapanibala (administrator) kareng gadget a atiu nung gamitan de ing [[MediaWiki:Gadgets-definition]] ampo ing [[Special:Gadgets]].', # Fuzzy
	'gadgets' => 'Deng gadget',
	'gadgets-title' => 'Deng gadget',
	'gadgets-pagetext' => 'Makabili ya king lalam ing tala (listaan) da reng espesial a gadget a apaliari (enable) da reng talagamit ketang karelang bulung da ring pinili (preferences page), agpang king kabaldugan king [[MediaWiki:Gadgets-definition]].
Gawa nang malagua niting piyakitan (overview) ing pamanintun kareng bulung a maki system message a milalarawan king balang gadget at babie king kayang code.', # Fuzzy
	'gadgets-uses' => 'Gamit',
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'prefs-gadgets' => 'Gadgets',
	'gadgets' => 'Gadgets',
	'gadgets-title' => 'Gadgets',
	'gadgets-export-download' => 'Runnerdraage',
);

/** Polish (polski)
 * @author Chrumps
 * @author Derbeth
 * @author Marcin Łukasz Kiejzik
 * @author Matma Rex
 * @author Sovq
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'gadgets-desc' => 'Pozwala użytkownikom wybrać [[Special:Gadgets|gadżety CSS i JavaScript]] na [[Special:Preferences#mw-prefsection-gadgets|stronie preferencji]]',
	'prefs-gadgets' => 'Gadżety',
	'gadgets-prefstext' => 'Poniżej znajduje się lista specjalnych gadżetów, które możesz włączyć dla swojego konta użytkownika.
Gadżety najczęściej wykorzystują JavaScript, więc by działały, musisz mieć w swojej przeglądarce włączoną obsługę JavaScriptu. Gadżety nie mają wpływu na tę stronę preferencji.

Gadżety nie są częścią oprogramowania MediaWiki i najprawdopodobniej zostały stworzone przez użytkowników tej wiki.
Lokalni administratorzy mogą edytować dostępne gadżety używając stron [[MediaWiki:Gadgets-definition|Definicje gadżetów]] oraz [[Special:Gadgets|Gadżety]].',
	'gadgets' => 'Gadżety',
	'gadgets-title' => 'Gadżety',
	'gadgets-pagetext' => 'Poniżej znajduje się lista specjalnych gadżetów, które użytkownicy mogą włączyć na swojej [[Special:Preferences#mw-prefsection-gadgets|stronie preferencji]]. Lista ta jest zdefiniowana na stronie [[MediaWiki:Gadgets-definition|definicji]].
Poniższy przegląd ułatwia dostęp do komunikatów systemu, które definiują opis i kod każdego z gadżetów.',
	'gadgets-uses' => 'Używa',
	'gadgets-required-rights' => 'Wymaga {{PLURAL:$2|uprawnienia|następujących uprawnień:}}

$1',
	'gadgets-required-skins' => 'Działa wyłącznie ze {{PLURAL:$2|skórką $1|skórkami: $1}}.',
	'gadgets-default' => 'Domyślnie włączone dla wszystkich.',
	'gadgets-export' => 'Eksportuj',
	'gadgets-export-title' => 'Eksportowanie gadżetów',
	'gadgets-not-found' => 'Nie odnaleziono gadżetu „$1”.',
	'gadgets-export-text' => 'Jeśli chcesz wyeksportować gadżet „$1” kliknij na przycisk „{{int:gadgets-export-download}}”, zapisz pobrany plik, wejdź na stronę „Special:Import” w docelowej wiki i prześlij go. Następnie dodaj poniższy kod do strony MediaWiki:Gadgets-definition:
<pre>$2</pre>
Musisz mieć właściwe uprawnienia na wiki docelowej (w tym do edycji komunikatów systemowych) oraz musi być włączony import na serwer poprzez przesłanie pliku.',
	'gadgets-export-download' => 'Pobierz',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Bèrto 'd Sèra
 * @author Dragonòt
 */
$messages['pms'] = array(
	'gadgets-desc' => "A lassa che j'utent a selession-o dij [[Special:Gadgets|component CSS e JavaScript]]  ant ij [[Special:Preferences#mw-prefsection-gadgets|sò gust]]",
	'prefs-gadgets' => 'Component',
	'gadgets-prefstext' => "Ambelessì sota a-i é na lista ëd component ch'a peul vischesse ant sò cont personal.
Sti component-sì a son dzortut basà ansima a JavaScript, donca a venta anans tut che JavaScript a sia avisch ant sò navigator, s'a veul che ij component a travajo.
Ch'a ten-a present che sti component a l'han gnun efet ansima a la pàgina dij \"sò gust\".

Ch'a nòta ëdcò che a son nen part dël programa MediaWiki e che për sòlit a resto dësvlupà e mantnù da dj'utent dla wiki andova chiel/chila as treuva adess.
J'aministrator locaj a peulo regolé ij component disponibij ën dovrand le pàgine [[MediaWiki:Gadgets-definition|definission dij component]] e [[Special:Gadgets|component]].",
	'gadgets' => 'Component',
	'gadgets-title' => 'Component',
	'gadgets-pagetext' => "Ambelessì-sota a-i é na lista ëd component speciaj che j'utent a peulo butesse avisch ant ij [[Special:Preferences#mw-prefsection-gadgets|sò gust]], conforma a la [[MediaWiki:Gadgets-definition|definission dij component]].
Sta lista complessiva a smon na stra còmoda për rivé a le pàgine ëd messagi ëd sistema ch'a definisso descrission e còdes ëd minca component.",
	'gadgets-uses' => 'a dòvra',
	'gadgets-required-rights' => 'A ciama {{PLURAL:$1|ël drit|ij drit}} sì-dapress:

$2',
	'gadgets-required-skins' => 'Disponìbil an {{PLURAL:$2|$1 sla pel|sle pej sì-dapress: $1}}.',
	'gadgets-default' => 'Abilità për tuti coma stàndard',
	'gadgets-export' => 'Esporté',
	'gadgets-export-title' => "Esportassion d'acessòri",
	'gadgets-not-found' => 'Acessòri "$1" pa trovà.',
	'gadgets-export-text' => "Për esporté l'acessòri \$1, sgnaché an sël boton \"{{int:gadgets-export-download}}\", salvé l'archivi dëscarià, andé a Special:Import an sla wiki ëd destinassion e carielo. Peui gionté lòn ch'a-i é sì-sota a la pàgina MediaWiki:Gadgets-definition:
<pre>\$2</pre>
A-i é da manca d'avèj ij përmess aproprià an sla wiki ëd destinassion (comprèis ij drit për modifiché ij mëssagi ëd sistema) e l'amportassion da archivi carià a dev esse abilità.",
	'gadgets-export-download' => 'Dëscaria',
);

/** Western Punjabi (پنجابی)
 * @author Khalid Mahmood
 */
$messages['pnb'] = array(
	'gadgets-desc' => 'ورتن والیاں نوں کسٹم [[Special:Gadgets|CSS and JavaScript gadgets]] چنن دیو اپنیاں [[Special:Preferences#mw-prefsection-gadgets|تانگاں]] چ',
	'prefs-gadgets' => 'گیجٹ',
	'gadgets-prefstext' => 'تھلے خاص گیجٹ دی لسٹ اے  جینون تسیں اپنے کھاتے ج چلاسکدے او۔
ایہ گیجٹ جاواسکرپٹ تے چلدے نیں، ایس لئی جاواسکرپٹ تواڈے چ چلنا چائیدا اے اوناں نوں چلان لئی۔
ایہ گل یاد رکھنا جے ایناں گیجٹ دا اثر ایس تانگ صفے تے نئیں ہوندا۔

ایہ وی گل یاد رکھنا جے ایہ خاص گیجٹ میڈیاوکی سوفٹوئیر دا انگ نئیں، تے ایہ بناۓ جاندے نیں یا ورتن والے رکھدے نیں اپنے لوکل وکی تے۔
مکھۓ تبدیل کرسکدے نیں [[MediaWiki:Gadgets-definition|definitions]] تے [[Special:Gadgets|descriptions]]  اپنے کول ہیگے گیجٹاں چ۔',
	'gadgets' => 'گیجٹ',
	'gadgets-title' => 'گیجٹ',
	'gadgets-pagetext' => 'تھلے خاص گیجٹاں  دی اک لسٹ جینوں ورتن والے  اپنے [[Special:Preferences#mw-prefsection-gadgets|تانگاں والا صفہ]] ، جیویں کے [[MediaWiki:Gadgets-definition|ڈیفینیشن]] چ دسیا گیا اے۔
ایہ وکھالہ اسان راہ پربندھ سنیعہ دا راہ دسدا اے جیدے چ ہر گیجٹ دا کم کاج تے کوڈ دتا گیا اے۔',
	'gadgets-uses' => 'ورتن آلے',
	'gadgets-required-rights' => '{{PLURAL:$2|$1 حق|تھلے دتے گۓ حق: $1}} دی لوڑ اے۔',
	'gadgets-default' => 'ہر اک لئی ڈیفالٹ راہیں قابل کیتا گیا۔',
	'gadgets-export' => 'برامد کرو',
	'gadgets-export-title' => 'گیجٹ برامد کرو',
	'gadgets-not-found' => '"$1" گیجٹ نئیں لبیا',
	'gadgets-export-text' => '$1 گیجٹ نوں اگے پیجن لئی  "{{int:gadgets-export-download}}" بٹن تے کلک کرو، کاپی کیتیاں فاغلاں نوں بچاؤ،
Special:Import تے جاؤ وکی تے ، چرھاؤ اینوں۔ فیر تھلے دتے گۓ نوں MediaWiki:Gadgets-definition page گۓ نوں جوڑو: <pre>$2</pre>
تواڈے کول لازمی اجازت ہونی چائیدی وکی تے (پربندھ سنیعے نوں تبدیل کرن دا) تے لیاندے ہوۓ چڑھائیاں فائلاں نوں قابل کیتے۔',
	'gadgets-export-download' => 'ڈاؤنلوڈ',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'prefs-gadgets' => 'گاډجېټ',
	'gadgets-prefstext' => 'دلته لاندې د ځانگړو گاډجېټونو (هوښيارتوکي) يو لړليک دی چې تاسې يې خپل گڼون لپاره چارنولی شی.
دا گاډجېټونه د جاواسکرېپټ پر بنسټ جوړ شوي، نو د دې لپاره چې همدا گاډجېټونه سم کار وکړي نو ستاسې د کتنمل جاواسکرېپټ بايد چارند وي.
په پام کې مو اوسه چې دا گاډجېټونه به په همدې غوره توبونو هېڅ اغېزه و نه لري.

دا هم په پام کې ونيسئ چې دا ځانگړي گاډجېټونه د مېډياويکي د ساوترۍ برخه نه ده او دا اکثراً ستاسې د سيمه ايزې ويکي کارنانو لخوا پرمخ بېول کېږي.

سيمه ايز پازوالان کولی شي د شته گاډجېټونو [[MediaWiki:Gadgets-definition|پېژندنې]] او [[Special:Gadgets|څرگندونې]] سمې کړي.',
	'gadgets' => 'گاډجېټ',
	'gadgets-title' => 'گاډجېټ',
	'gadgets-uses' => 'کارونې',
	'gadgets-export' => 'صادرول',
	'gadgets-not-found' => 'د "$1" گاډجېټ و نه موندل شو.',
	'gadgets-export-download' => 'ښکته کول',
);

/** Portuguese (português)
 * @author Hamilton Abreu
 * @author Helder.wiki
 * @author Luckas
 * @author Malafaya
 * @author 555
 */
$messages['pt'] = array(
	'gadgets-desc' => "Permite que os utilizadores seleccionem [[Special:Gadgets|''\"gadgets\"'' em JavaScript e CSS]] personalizados nas suas [[Special:Preferences#mw-prefsection-gadgets|preferências]]",
	'prefs-gadgets' => 'Gadgets',
	'gadgets-prefstext' => "Segue-se uma lista de ''\"gadgets\"'' especiais que pode ativar na sua conta.
Estes ''gadgets'' são baseados principalmente em JavaScript, sendo necessário ativar o suporte a JavaScript no seu browser para que funcionem.
Note que não terão efeito nesta página de preferências.

Note também que estes ''gadgets'' especiais não fazem parte do programa MediaWiki, sendo geralmente desenvolvidos e mantidos por utilizadores na sua wiki local.
Administradores locais podem editar os ''gadgets'' disponíveis usando as [[MediaWiki:Gadgets-definition|definições]] e [[Special:Gadgets|descrições]].",
	'gadgets' => 'Gadgets',
	'gadgets-title' => 'Gadgets',
	'gadgets-pagetext' => "Segue-se uma lista de ''\"gadgets\"'' que podem ser ativados pelos utilizadores nas suas [[Special:Preferences#mw-prefsection-gadgets|preferências]], como estabelecido pelas [[MediaWiki:Gadgets-definition|definições]].
Este resumo proporciona acesso fácil às páginas das mensagens de sistema que definem a descrição e o código de cada ''gadget''.",
	'gadgets-uses' => 'Utiliza',
	'gadgets-required-rights' => 'Requer {{PLURAL:$2|o seguinte privilégio|os seguintes privilégios}}:

$1',
	'gadgets-required-skins' => 'Disponível {{PLURAL:$2|no tema $1|nos seguintes temas: $1}}',
	'gadgets-default' => 'Ativado para todos por padrão.',
	'gadgets-export' => 'Exportar',
	'gadgets-export-title' => 'Exportação de gadget',
	'gadgets-not-found' => 'O gadget "$1" não foi encontrado.',
	'gadgets-export-text' => 'Para exportar o gadget $1, clique o botão "{{int:gadgets-export-download}}", grave o ficheiro transferido,
vá à página Special:Import na wiki de destino e faça o upload do ficheiro. Depois adicione o seguinte à página MediaWiki:Gadgets-definition:
<pre>$2</pre>
Na wiki de destino, tem de ter as permissões necessárias (incluindo o privilégio de editar mensagens de sistema) e têm de ser permitidas importações por upload de ficheiros.',
	'gadgets-export-download' => 'Download',
);

/** Brazilian Portuguese (português do Brasil)
 * @author Eduardo.mps
 * @author Giro720
 * @author GoEThe
 * @author Helder.wiki
 * @author Rafael Vargas
 * @author 555
 */
$messages['pt-br'] = array(
	'gadgets-desc' => 'Permite que os usuários selecionem [[Special:Gadgets|"gadgets" JavaScript e CSS]] personalizados nas suas [[Special:Preferences#mw-prefsection-gadgets|preferências]]',
	'prefs-gadgets' => 'Gadgets',
	'gadgets-prefstext' => 'Segue-se uma lista de "gadgets" que podem ser ativados em sua conta.
Tais gadgets normalmente são baseados em JavaScript, o que faz com que seja necessário que o suporte a JavaScript esteja ativado em seu navegador para que os mesmos funcionem.
Note que os gadgets não possuem efeito nesta página (a página de preferências).

Repare também que tais gadgets não são parte do software MediaWiki, geralmente sendo desenvolvidos e mantidos por usuários de seu wiki local.
Administradores locais podem editar os gadgets disponíveis através de [[MediaWiki:Gadgets-definition|definições]] e [[Special:Gadgets|descrições]].',
	'gadgets' => 'Gadgets',
	'gadgets-title' => 'Gadgets',
	'gadgets-pagetext' => 'Segue-se uma lista de "gadgets" que podem ser ativados pelos usuários através de [[Special:Preferences#mw-prefsection-gadgets|suas páginas de preferências]], definidos em [[MediaWiki:Gadgets-definition|suas definições]].
Esta lista possibilita um acesso fácil para as mensagens de sistema que definem as descrições e códigos de cada um dos gadgets.',
	'gadgets-uses' => 'Usa',
	'gadgets-required-rights' => 'Requer {{PLURAL:$2|o seguinte privilégio|os seguintes privilégios}}:

$1',
	'gadgets-required-skins' => 'Disponível {{PLURAL:$2|no skin $1|nos seguintes skins: $1}}.',
	'gadgets-default' => 'Ativado para todos por padrão.',
	'gadgets-export' => 'Exportar',
	'gadgets-export-title' => 'Exportar gadgets',
	'gadgets-not-found' => 'O gadget "$1" não encontrado.',
	'gadgets-export-text' => 'Para exportar o gadget $1, clique no botão "{{int:gadgets-export-download}}", salve o arquivo transferido,
vá à página Special:Import no wiki de destino e faça o upload do arquivo. Depois, adicione o seguinte à página MediaWiki:Gadgets-definition:
<pre>$2</pre>
É necessário que você tenha, no wiki de destino, as permissões necessárias (incluindo o privilégio de editar mensagens de sistema) e a importação por upload de arquivos deve estar ativada.',
	'gadgets-export-download' => 'Fazer download',
);

/** Quechua (Runa Simi)
 * @author AlimanRuna
 */
$messages['qu'] = array(
	'prefs-gadgets' => 'Yanapaqchakuna',
	'gadgets' => 'Yanapaqchakuna',
	'gadgets-title' => 'Yanapaqchakuna',
);

/** Romanian (română)
 * @author Cin
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Minisarm
 * @author Stelistcristi
 */
$messages['ro'] = array(
	'gadgets-desc' => 'Permite utilizatorilor să își aleagă [[Special:Gadgets|gadgeturi CSS și JavaScript]] în [[Special:Preferences#mw-prefsection-gadgets|preferințele]] lor',
	'prefs-gadgets' => 'Gadgeturi',
	'gadgets' => 'Gadgeturi',
	'gadgets-title' => 'Gadgeturi',
	'gadgets-uses' => 'Utilizări',
	'gadgets-required-rights' => 'Necesită {{PLURAL:$2|următorul drept|următoarele drepturi}}:

$1',
	'gadgets-required-skins' => 'Disponibil pe {{PLURAL:$2|tema $1|următoarele teme: $1}}.',
	'gadgets-default' => 'Activat pentru toată lumea în mod implicit.',
	'gadgets-export' => 'Exportă',
	'gadgets-export-title' => 'Exportul de gadgeturi',
	'gadgets-not-found' => 'Gadgetul „$1” nu a fost găsit.',
	'gadgets-export-download' => 'Descarcă',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'gadgets-desc' => "Lasse scacchià a l'utinde le [[Special:Gadgets|gadget CSS e JavaScript]] personalizzate jndr'à le lore [[Special:Preferences#mw-prefsection-gadgets|preferenze]]",
	'prefs-gadgets' => 'Gadget',
	'gadgets-prefstext' => "Sotte stè 'n'elenghe de gadget speciale ca tu abbilità sus a 'u cunde tune.
Ste riale sò assaije basate sus a Javascript, accussì Javascript addà essere abbilitate jndr'à 'u browser tune pe le fà fatià.
Vide che ste riale non ge tènene effette sus a sta pàgene de preferenze.

Pò vide pure ca ste gadget non ge sonde parte d'u software de MediaUicchi e sonde normalmende sviluppate e mandenute da l'utinde d'a Uicchipèdie locale tune.
Le amministrature locale ponne cangià le gadget disponibbele ausanne le [[MediaWiki:Gadgets-definition|definiziune]] e le [[Special:Gadgets|descriziune]].",
	'gadgets' => 'Gadget',
	'gadgets-title' => 'Gadget',
	'gadgets-pagetext' => "Sotte stè 'n'elenghe de gadget speciale ca l'utinde ponne abbilità sus a lore [[Special:Preferences#mw-prefsection-gadgets|pàgene de le preferenze]], cumme definite da le [[MediaWiki:Gadgets-definition|definiziune]].
Stu riepileghe prevede 'nu facile facile accesse a le pàggene de le messagge d'u sisteme ca definiscene ogne descrizione e codece de le gadget.",
	'gadgets-uses' => 'Ause',
	'gadgets-required-rights' => 'Richiede {{PLURAL:$2|deritte|deritte}}:

$1',
	'gadgets-required-skins' => "Disponibbele sus a {{PLURAL:$2|$1 'u skin|le seguende skin: $1}}.",
	'gadgets-default' => 'Abbilete pe ogneune pe default.',
	'gadgets-export' => 'Esporte',
	'gadgets-export-title' => "Esporte 'u gadget",
	'gadgets-not-found' => 'Gadget "$1" none acchiate.',
	'gadgets-export-text' => "Pe esportà 'u \$1 gadget, cazze sus a 'u buttone \"{{int:gadgets-export-download}}\", reggistre 'u file scarecate, veje'a pàgene Special:Import sus 'a Uicchi de destinazione e carechele. Pò aggiunge 'a seguende pàgene MediaWiki:Gadgets-definition:
<pre>\$2</pre>
Tu a ave le permesse appropriate sus 'a Uicchi de destinazione (ingludenne le deritte a cangià le messagge d'u sisteme) e 'a 'mbortazione da file carecate adda essere abbilitate.",
	'gadgets-export-download' => 'Scareche',
);

/** Russian (русский)
 * @author Ahonc
 * @author Eleferen
 * @author Ignatus
 * @author Illusion
 * @author Kaganer
 * @author MaxSem
 * @author VasilievVV
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'gadgets-desc' => 'Позволяет участникам выбирать в своих [[Special:Preferences#mw-prefsection-gadgets|настройках]] те или иные [[Special:Gadgets|CSS- и JavaScript-гаджеты]]',
	'prefs-gadgets' => 'Гаджеты',
	'gadgets-prefstext' => 'Ниже приведён список специальных гаджетов, которые вы можете включить для своей учётной записи.
Эти гаджеты преимущественно основаны на JavaScript, поэтому вы должны включить JavaScript в своём браузере для того, чтобы они работали.
Учтите, что эти гаджеты не работают на странице настроек.

Также учтите, что эти гаджеты не являются частью MediaWiki и обычно разрабатываются и обслуживаются участниками вашей локальной вики.
Администраторы могут изменять список гаджетов с помощью страниц [[MediaWiki:Gadgets-definition|определений]] и [[Special:Gadgets|описаний]].',
	'gadgets' => 'Гаджеты',
	'gadgets-title' => 'Гаджеты',
	'gadgets-pagetext' => 'Ниже приведён список гаджетов, которые участники могут включить на своей странице настроек, в соответствии со списком на странице [[MediaWiki:Gadgets-definition|определений]].
Этот список позволяет легко получить доступ к страницам системных сообщений, определяющих описания и исходные коды гаджетов.',
	'gadgets-uses' => 'Использует',
	'gadgets-required-rights' => '{{PLURAL:$2|1=Требуется право|Требуются права}}:

$1',
	'gadgets-required-skins' => 'Доступен в {{PLURAL:$2|1=теме оформления «$1»|следующих темах оформления: $1}}.',
	'gadgets-default' => 'Включён для всех по умолчанию.',
	'gadgets-export' => 'Экспортировать',
	'gadgets-export-title' => 'Экспорт гаджета',
	'gadgets-not-found' => 'Гаджет «$1» не найден.',
	'gadgets-export-text' => 'Для экспорта гаджета $1, нажмите кнопку «{{int:gadgets-export-download}}», сохраните загруженный файл,
перейдите на страницу Special:Import целевой вики и загрузите файл. Затем добавьте следующие строки на страницу MediaWiki:Gadgets-definition:
<pre>$2</pre>
Вы должны иметь соответствующие разрешения в целевой вики (в том числе право на редактирование системных сообщений), также на сервере должна быть включена настройка импорта из файлов.',
	'gadgets-export-download' => 'Загрузить',
);

/** Rusyn (русиньскый)
 * @author Gazeb
 */
$messages['rue'] = array(
	'gadgets-desc' => 'Уможнює хоснователям собі выбрати [[Special:Gadgets|CSS і JavaScript додаток]] у своїм [[Special:Preferences#mw-prefsection-gadgets|наставлїню]].',
	'prefs-gadgets' => 'Додаткы',
	'gadgets-prefstext' => 'Ниже є перегляд шпеціалный додатків, котры собі можете у своїм контї запнути.
Тоты додаткы суть основаны переважно на JavaScript-і, также є про їх функчность треба мати запнутый JavaScript в переглядачі.
Додаткы не суть аплікованы на тій сторінцї наставлїня.

Усвідомте собі тыж, же шпеціалны додаткы не суть частёв софтверу MediaWiki і&nbsp;суть сторёваны і&nbsp;адміністрованы хоснователями той вікі.
Локалны адміністраторы можуть управляти [[MediaWiki:Gadgets-definition|дефініції]] і&nbsp;[[Special:Gadgets|пописы]] доступных додатків.',
	'gadgets' => 'Додаткы',
	'gadgets-title' => 'Додаткы',
	'gadgets-pagetext' => 'Ниже є перегляд шпеціалных додатків, котры собі хоснователї можуть запнути у своїм [[Special:Preferences#mw-prefsection-gadgets|наставлїню]]. Їх список ся дасть управляти на сторінцї [[MediaWiki:Gadgets-definition]].
Тот перегляд додавать простый приступ к&nbsp;сістемным повідомлїням, котры дефінують код і&nbsp;попис каждого додатку.',
	'gadgets-uses' => 'Хоснує',
	'gadgets-required-rights' => 'Потребує слїдуючі {{PLURAL:$2|права}}:

$1',
	'gadgets-required-skins' => 'Доступне {{PLURAL:$2|про взгляд $1|про слїдуючі взгляды: $1}}.',
	'gadgets-default' => 'Імпліцітно запнуте вшыткым.',
	'gadgets-export' => 'Експортовати',
	'gadgets-export-title' => 'Експорт додатку',
	'gadgets-not-found' => 'Додато „$1“ не найдженый.',
	'gadgets-export-text' => 'Кідь хочете експортовати додаток $1, кликните на клапку „{{int:gadgets-export-download}}“, уложте скачаный файл, на цілёвій вікі перейдьте на сторінку Special:Import і файл начітайте. Пак на сторінку MediaWiki:Gadgets-definition придайте наступне:
<pre>$2</pre>
На цілёвій вікі мусите мати одповідны права (шпеціално права едітовати сістемны повідомлїня) і мусить быти поволеный імпорт з файлу.',
	'gadgets-export-download' => 'Скачати',
);

/** Sanskrit (संस्कृतम्)
 * @author Shubha
 */
$messages['sa'] = array(
	'gadgets-desc' => 'योजकाः स्वस्य [[Special:Preferences#mw-prefsection-gadgets|इष्टतमानि]] इत्यत्र [[Special:Gadgets|CSS जावालिपि-उपकरणं च]] चीयताम् ।',
	'prefs-gadgets' => 'उपकरणानि',
	'gadgets-prefstext' => 'अधः विशेषोपकरणानां सूची प्रदत्ता अस्ति याः भवान् भवतः लेखायां सक्रियाः कर्तुम् अर्हति ।
एतानि जावालिप्याधारितानि विद्यन्ते, अतः कार्यकरणाय भवतः जालगवेषके जावालिपिः सक्रिया करणीया ।
ज्ञायतां यत् एतानि उपकरणानि भवतः इष्टतमानि इत्येतस्मिन् पृष्ठे कार्यं न कुर्वन्ति ।

इदमपि जानातु यत् एतानि विशेषोपकरणानि विकिमाध्यमतन्त्रांशस्य भागभूताः न, भवतः स्थानीयविक्यामेव योजकैः निर्मितं निरूह्यमानञ्च वर्तते ।
विद्यमानानाम् उपकरणानां  [[MediaWiki:Gadgets-definition|definitions]]  [[Special:Gadgets|descriptions]] च स्थानीयप्रबन्धकैः सम्पादयितुं शक्यते ।',
	'gadgets' => 'उपकरणानि',
	'gadgets-title' => 'उपकरणानि',
	'gadgets-pagetext' => '[[MediaWiki:Gadgets-definition|निर्वचन]]स्य अनुगुणम् अधः विशेषोपकरणानाम् अवली निर्दिष्टा अस्ति यानि भवतः [[Special:Preferences#mw-prefsection-gadgets|इष्टतमानि]] इत्यस्मिन् पृष्ठे सक्रियाणि कर्तुम् अर्हति ।
इयं समीक्षा सर्वेषाम् उपकरणानां विवरणं कूटसङ्ख्यां च तन्त्रसन्देशे सुलभतया प्राप्तुं सहकरोति ।',
	'gadgets-uses' => 'उपयोगः',
	'gadgets-required-rights' => 'अधोनिर्दिष्टम् अपेक्षते {{PLURAL:$2|अधिकारः|अधिकारः}}:

$1',
	'gadgets-required-skins' => 'उपलभ्यते {{PLURAL:$2|$1 विन्यासः|अधोनिर्दिष्टः विन्यासः: $1}}.',
	'gadgets-default' => 'पूर्वनिर्दिष्टरूपेण सर्वेषां कृते सक्रियं विद्यते।',
	'gadgets-export' => 'निर्यातः',
	'gadgets-export-title' => 'उपकरणनिर्यातः',
	'gadgets-not-found' => '"$1" उपकरणं न प्राप्तम् ।',
	'gadgets-export-text' => '$1 उपकरणस्य निर्याताय "{{int:gadgets-export-download}}" पिञ्जः नोदनीयः, अवारोपिता सञ्चिका रक्ष्यताम्, लक्ष्यविक्यां Special:Import प्रति गम्यताम् उपारोप्यताञ्च । तत्पश्चात् MediaWiki:Gadgets-definition इत्यस्मिन् अधोनिर्दिष्टं योज्यताम् : <pre>$2</pre>
लक्ष्यविक्यां भवतः उप्युक्ताधिकारः स्यात् (तन्त्रसन्देशसम्पादनस्य अधिकारः अन्तर्भूतः) सञ्चिकोपरोपणात् आयातः सक्षमः करणीयः',
	'gadgets-export-download' => 'अवतार्यताम्',
);

/** Sakha (саха тыла)
 * @author HalanTul
 */
$messages['sah'] = array(
	'gadgets-desc' => 'Бэйэлэрин [[Special:Preferences#mw-prefsection-gadgets|туруорууларыгар]] кыттааччылар [[Special:Gadgets|CSS уонна JavaScript гаджеттары]] холбонуохтарын сөп.',
	'prefs-gadgets' => 'Гаджеттар',
	'gadgets-prefstext' => 'Аллара аналлаах гаджеттар испииһэктэрэ көстөллөр. Балары бэйэҥ бэлиэтэммит ааккынан киирэн туһаныаххын сөп.
Бу үнүстүрүмүөннэр үксүлэрэ JavaScript көмөтүнэн үлэлииллэр, онон туһаныаххын баҕарар буоллаххына JavaScript холбоо.
Бу гаджеттар туроуорууларгын уларытар сирэйгэр үлэлээбэттэрин умнума.

Өссө маны умнума: бу гаджеттар MediaWiki сорҕото буолбатахтар, кинилэри кыттааччылар бэйэлэрэ айаллар уонна көрөллөр-истэллэр.  Дьаһабыллар гаджеттар испииһэктэрин [[MediaWiki:Gadgets-definition|быһаарыы сирэйдэр]] уонна [[Special:Gadgets|ойуулуур сирэйдэр]] көмөлөрүнэн уларытыахтарын сөп.',
	'gadgets' => 'Гаджеттар',
	'gadgets-title' => 'Гаджеттар',
	'gadgets-pagetext' => 'Манна [[MediaWiki:Gadgets-definition|быһаарыы сирэйигэр]] суруллубутун курдук [[Special:Preferences#mw-prefsection-gadgets|туруоруу сирэйин]] көмөтүнэн холбонуон сөптөөх гаджеттар тиһиктэрэ көрдөрүлүннэ.
Этот список позволяет легко получить доступ к страницам системных сообщений, определяющих описания и исходные коды гаджетов.',
	'gadgets-uses' => 'Туһанар',
	'gadgets-required-rights' => '$2 бэйэбил (быраап) ирдэнэр: «$1»', # Fuzzy
	'gadgets-default' => 'Барыларыгар холбоно сылдьар.',
	'gadgets-export' => 'Экспортаа',
	'gadgets-export-title' => 'Ҕааддьыты таһаарыы (экспорт)',
	'gadgets-not-found' => '"$1" ҕааддьыт көстүбэтэ.',
	'gadgets-export-text' => '$1 ҕааддьыты таһаарарга (экспорт), «{{int:gadgets-export-download}}» тимэҕи баттаа, хачайдаммыт билэни бигэргэт,
онтон угуохтаах биикиҥ Special:Import сирэйигэр киирэн уган кэбис. Ол кэннэ MediaWiki:Gadgets-definition сирэйгэ бу устуруокалары эп:
<pre>$2</pre>
Угуохтаах биикигэр аналлаах көҥүллээх буолуохтааххын (ол иһигэр тиһилик биллэриилэрин эрэдээксийэлиир кыах), эбиитин сиэрбэргэ билэни киллэрии көҥүллэммит буолуохтаах.',
	'gadgets-export-download' => 'Хачайдааһын',
);

/** Samogitian (žemaitėška)
 * @author Hugo.arg
 */
$messages['sgs'] = array(
	'gadgets' => 'Rakondā',
);

/** Serbo-Croatian (srpskohrvatski / српскохрватски)
 * @author Kolega2357
 */
$messages['sh'] = array(
	'gadgets' => 'Alatke / Алатке',
	'gadgets-title' => 'Alatke / Алатке',
	'gadgets-uses' => 'Upotrebe / Употребе',
);

/** Sinhala (සිංහල)
 * @author Budhajeewa
 * @author නන්දිමිතුරු
 * @author පසිඳු කාවින්ද
 * @author බිඟුවා
 */
$messages['si'] = array(
	'gadgets-desc' => 'උපයෝග්‍ය [[Special:Gadgets|CSS හා ජාවාස්ක්‍රිප්ට් මෙවලම්]] ඔවුන්ගේ [[Special:Preferences#mw-prefsection-gadgets|අභිරුචීන්හිදී]] තෝරාගැනුමට පරිශීලකයන් හට ඉඩ සලසයි',
	'prefs-gadgets' => 'මෙවලම්',
	'gadgets-prefstext' => 'පහත දැක්වෙන්නේ ඔබේ ගිණුම සඳහා සක්‍රීය කළ හැකි විශේෂ ගැජටයන් ලයිස්තුවකි.
මෙම ගැජටයන් බොහෝ විට JavaScript මත පදනම් වේ, එම නිසා ඒවා ක්‍රියාත්මක වීම සඳහා ඔබේ පිරික්සකයේ JavaScript සක්‍රීය කොට තිබිය යුතුය.
මෙම රිසිකෙරුම් පිටුව තුළ මෙම ගැජටයන් ක්‍රියාත්මක නොවන බව සලකන්න.

මෙම විශේෂ ගැජටයන් MediaWiki මෘදුකාංගයේ කොටසක් නොවන බව සලකන්න, බොහෝ විට ඒවා ඔබේ ප්‍රාදේශීය විකියේ පරිශීලකයන් විසින් නිර්මාණය කර නඩත්තු කරනු ලැබේ.
ප්‍රාදේශික පරිපාලකයන් හට ගැජටයන්හි [[MediaWiki:Gadgets-definition|අර්ථ දැක්වීම්]] හා [[Special:Gadgets|පැහැදිළිකෙරුම්]] වෙනස් කළ හැක.',
	'gadgets' => 'මෙවලම්',
	'gadgets-title' => 'මෙවලම්',
	'gadgets-pagetext' => 'පහත දැක්වෙන්නේ [[MediaWiki:Gadgets-definition|අර්ථදැක්වීම්]] කරන ලද ආකාරය අනුව පරිශීලකයන්ට ඔවුන්ගේ [[Special:Preferences#mw-prefsection-gadgets|රිසිකෙරුම් පිටුව]] මතදී සක්‍රීය කළ හැකි විශේෂ ගැජටයන් ලයිස්තුවකි.
මෙම දළ විශ්ලේෂණය සියළු ගැජටයන්ගේ විස්තර කෙරුම් හා කේතයන් අර්ථ දක්වන පද්ධති පණිවුඩ පිටු වෙත පහසු ළඟාවීම් ලබාදේ.',
	'gadgets-uses' => 'පරිශීලනය කරයි',
	'gadgets-required-rights' => 'මෙම {{PLURAL:$2|හිමිකම|හිමිකම්}} අවශ්‍ය වේ:

$1',
	'gadgets-required-skins' => '{{PLURAL:$2|$1 චර්මයෙන්|චර්මයන්ගෙන් ලබා ගත හැක: $1}}.',
	'gadgets-default' => 'සාමාන්‍යයෙන් සෑම දෙනාටම සක්‍රීය කර ඇත.',
	'gadgets-export' => 'අපනයනය කරන්න',
	'gadgets-export-title' => 'ගැජටය අපනයනය කරන්න',
	'gadgets-not-found' => '"$1" ගැජටය හමුවුනේ නැත.',
	'gadgets-export-text' => '$1 ගැජටය අපනයනය කෙරුමට, "{{int:gadgets-export-download}}" බොත්තම මත ක්ලික් කර අදාළ ගොනුව බා සුරැකගන්න. අනතුරුව ගමනාන්ත විකියේදී Special:Import වෙත ගොස් එය පටවන්න. පසුව MediaWiki:Gadgets-definition පිටුවට පහත දැක්වෙන්න ඇතුලත් කරන්න:

<pre>$2</pre>

මේ සඳහා ගමනාන්ත විකියේදී ඔබ සතුව අවසරයන් කිහිපයක් (පද්ධති පණිවුඩ වෙනස් කිරීම ඇතුළුව) සහ ගොනුවකින් ආනයනය කිරීම සක්‍රීයව තිබිය යුතුය.',
	'gadgets-export-download' => 'බාගන්න',
);

/** Slovak (slovenčina)
 * @author Helix84
 * @author Teslaton
 */
$messages['sk'] = array(
	'gadgets-desc' => 'Umožňuje používateľovi vybrať [[Special:Gadgets|CSS a JavaScriptové nástroje]] vo svojich [[Special:Preferences#mw-prefsection-gadgets|nastaveniach]]',
	'prefs-gadgets' => 'Nástroje',
	'gadgets-prefstext' => 'Dolu je zoznam špeciálnych nástrojov, ktoré môžete zapnúť v rámci svojho účtu.
Tieto nástroje sú zväčša založené na JavaScripte, takže aby fungovali, musíte mať v prehliadači JavaScript zapnutý.
Nástroje nemajú vplyv na túto stránku nastavení.

Majte tiež na pamäti, že tieto nástroje nie sú súčasťou MediaWiki a zvyčajne ich vyvíjajú a udržiavajú používatelia vašej lokálnej wiki.
Lokálni správcovia môžu upraviť zoznam dostupných nástrojov pomocou [[MediaWiki:Gadgets-definition|definícií]] a [[Special:Gadgets|popisov]].',
	'gadgets' => 'Nástroje',
	'gadgets-title' => 'Nástroje',
	'gadgets-pagetext' => 'Dolu je zoznam špeciálnych nástrojov, ktoré môžu používatelia zapnúť v rámci svojho účtu na svojej stránke [[Special:Preferences#mw-prefsection-gadgets|nastavení]]. Tento zoznam definuje stránka [[MediaWiki:Gadgets-definition]]. Tento prehľad poskytuje jednoduchý prístup k systémovým stránkam, ktoré definujú popis a kód každého z nástrojov.',
	'gadgets-uses' => 'Použitia',
	'gadgets-required-rights' => 'Vyžaduje nasledovné {{PLURAL:$2|právo|práva}}:

$1',
	'gadgets-required-skins' => 'Dostupné {{PLURAL:$2|pre tému vzhľadu $1|pre nasledovné témy vzhľadu: $1}}.',
	'gadgets-default' => 'Povolené pre každého v predvolenom nastavení.',
	'gadgets-export' => 'Exportovať',
	'gadgets-export-title' => 'Export nástroja',
	'gadgets-not-found' => 'Nástroj „$1” nebol nájdený.',
	'gadgets-export-text' => 'Ak chcete exportovať nástroj $1, kliknite na tlačidlo „{{int:gadgets-export-download}}“, uložte stiahnutý súbor,
 choďte na stránku Special:Import na cieľovej wiki a nahrajte ho. Potom pridajte nasledujúce na stránku MediaWiki:Gadgets-definition:
<pre>$2</pre>
Musíte mať príslušné oprávnenia na cieľovej wiki (vrátane práva na úpravu systémových správ) a import z nahraného súboru musí byť povolený.',
	'gadgets-export-download' => 'Stiahnuť',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 * @author Eleassar
 * @author Smihael
 */
$messages['sl'] = array(
	'gadgets-desc' => 'Omogoča uporabnikom, da vključijo [[Special:Gadgets|vtičnike CSS in JavaScript]] v [[Special:Preferences#mw-prefsection-gadgets|nastavitvah]]',
	'prefs-gadgets' => 'Vtičniki',
	'gadgets-prefstext' => 'Prikazan je seznam posebnih vtičnikov, ki jih lahko omogočite za vaš račun.
Večinoma temeljijo na JavaScriptu, zato mora biti za njihovo delovanje omogočen v vašem brskalniku.
Ti vtičniki nimajo nobenega vpliva na to nastavitveno stran.

Prav tako upoštevajte, da ti vtičniki niso del programja MediaWiki in jih običajno razvijajo ter vzdržujejo uporabniki na vašem lokalnem wikiju.
Administratorji lahko uredite seznam vtičnikov z uporabo [[MediaWiki:Gadgets-definition|opredelitev]] in [[Special:Gadgets|posebne strani]].',
	'gadgets' => 'Vtičniki',
	'gadgets-title' => 'Vtičniki',
	'gadgets-pagetext' => 'Spodaj je seznam posebnih vtičnikov (opredeljenih z [[MediaWiki:Gadgets-definition|definicijami]]), ki jih lahko uporabniki vključijo v svojih [[Special:Preferences#mw-prefsection-gadgets|nastavitvah]].
Ta pregled omogoča enostaven dostop do sistema za nastavljanje opisa in kode vsakega vtičnika posebej.',
	'gadgets-uses' => 'Uporablja',
	'gadgets-required-rights' => 'Zahteva {{PLURAL:$2|naslednjo pravico|naslednji pravici|naslednje pravice}}:

$1',
	'gadgets-required-skins' => 'Na voljo na {{PLURAL:$2|koži $1|naslednjih kožah: $1}}.',
	'gadgets-default' => 'Privzeto omogočeno za vsakogar.',
	'gadgets-export' => 'Izvozi',
	'gadgets-export-title' => 'Izvoz vtičnika',
	'gadgets-not-found' => 'Vtičnika »$1« ni mogoče najti.',
	'gadgets-export-text' => 'Za izvoz vtičnika $1 kliknite na gumb »{{int:gadgets-export-download}}«, shranite preneseno datoteko,
pojdite na Special:Import na ciljnem wikiju in jo naložite. Nato dodajte naslednjo vrstico na stran MediaWiki:Gadgets-definition:
<pre>$2</pre>
Na ciljnem wikiju morate imeti ustrezna dovoljenja (vključno s pravico urejanja sistemskih sporočil) in omogočeni morajo biti uvozi iz naloženih datotek.',
	'gadgets-export-download' => 'Prenesi',
);

/** Albanian (shqip)
 * @author Mikullovci11
 * @author Olsi
 * @author Vinie007
 */
$messages['sq'] = array(
	'gadgets-desc' => 'Lejin përdoruesit të zgjedhin [[Special:Gadgets|CSS dhe JavaScript gadgets]] në [[Special:Preferences#mw-prefsection-gadgets|preferencat]] e tyre',
	'prefs-gadgets' => 'Gadgets',
	'gadgets-prefstext' => "Më poshtë është një listë e mjeteve shtesë speciale që mund të aktivizohen për llogarinë tuaj.
Këto mjete shtesë janë të bazuara kryesisht në JavaScript, pra JavaScript-i duhet aktivizuar në shfletuesin tuaj që ato të punojnë.
Vini re se këto mjete shtesë nuk do të kenë efekt në këtë faqe preferencash.

Gjithashtu vini re se këto mjete shtesë speciale nuk janë pjesë e softuerit MediaWiki, dhe zakonisht janë zhvilluar dhe mirëmbajtur nga përdoruesit në wiki-n tuaj lokal.
Administratorët lokalë mund t'i ndryshojnë [[MediaWiki:Gadgets-definition|përkufizimet]] dhe [[Special:Gadgets|përshkrimet]] e mjeteve shtesë të mundshme.",
	'gadgets' => 'Gadgets',
	'gadgets-title' => 'Gadgets',
	'gadgets-pagetext' => 'Më poshtë është një listë e mjeteve shtesë speciale që mund të aktivizohen në [[Special:Preferences#mw-prefsection-gadgets|faqen e preferencave]] të tyre, siç është përcaktuar nga [[MediaWiki:Gadgets-definition|përkufizimet]].
Kjo pasqyrë siguron qasje të lehtë në faqet e mesazheve të sistemit që përkufizon përshkrimin e çdo mjeti shtesë dhe kodin.',
	'gadgets-uses' => 'Përdorues',
	'gadgets-required-rights' => 'Kërkon {{PLURAL:$2|të drejtën|të drejtat}} e mëposhtme:

$1',
	'gadgets-required-skins' => 'E mundshme në {{PLURAL:$2|$1 pamje|pamjet e mëposhtme: $1}}.',
	'gadgets-default' => 'Aktivizuar për të gjithë nga default.',
	'gadgets-export' => 'Eksporto',
	'gadgets-export-title' => 'Eksport mjetesh shtesë',
	'gadgets-not-found' => 'Mjeti shtesë "$1" nuk u gjet.',
	'gadgets-export-text' => 'Për eksportimin e mjetit shtesë $1, klikoni në butonin "{{int:gadgets-export-download}}", ruani skedën e shkarkuar,
shkoni tek Speciale:Import në wiki-n e destinuar dhe ngarkojeni. Më pas shtoni atë që shihni më poshtë tek MediaWiki:
<pre>$2</pre>
Ju duhet të keni leje të përshtatshme në wiki-n e destinuar (duke përfshirë të drejtën e redaktimit të mesazheve të sistemit) dhe importi nga ngarkimet e skedave duhet të jetë i aktizuar.',
	'gadgets-export-download' => 'Shkarko',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Milicevic01
 * @author Millosh
 * @author Nikola Smolenski
 * @author Rancher
 * @author Жељко Тодоровић
 */
$messages['sr-ec'] = array(
	'gadgets-desc' => 'Омогућава корисницима да изаберу прилагођене [[Special:Gadgets|CSS и јаваскрипт гаџете]] у својим [[Special:Preferences#mw-prefsection-gadgets|подешавањима]]',
	'prefs-gadgets' => 'Геџети',
	'gadgets-prefstext' => 'Испод се налази списак посебних гаџета које можете да омогућите на свом налогу.
Ове справице су углавном засноване на јаваскрипти, тако да она мора бити омогућена.
Гаџети неће утицати на страницу за подешавање.

Они нису део софтвера Медијавики, већ се развијају и одржавају од стране корисника на вашем локалном викију.
Администратори могу да измене [[MediaWiki:Gadgets-definition|значења]] и [[Special:Gadgets|описе]] доступних гаџета.',
	'gadgets' => 'Гаџети',
	'gadgets-title' => 'Гаџети',
	'gadgets-pagetext' => 'Испод је списак посебних гаџета које корисници могу да омогуће на својој [[Special:Preferences#mw-prefsection-gadgets|страници за подешавање]], као што је наведено у [[MediaWiki:Gadgets-definition|дефиницијама]].
Овај преглед пружа брз приступ системским порукама које дефинишу сваки опис и кoд гаџета.',
	'gadgets-uses' => 'Користи',
	'gadgets-required-rights' => 'Захтева {{PLURAL:$2|следеће право|следећа права}}:

$1',
	'gadgets-required-skins' => 'Доступно у {{PLURAL:$2|теми $1|следећим темама: $1}}.',
	'gadgets-default' => 'Подразумевано укључен за сваког.',
	'gadgets-export' => 'Извези',
	'gadgets-export-title' => 'Извоз гаџета',
	'gadgets-not-found' => 'Гаџет „$1“ није пронађен.',
	'gadgets-export-text' => "Да бисте извезли $1 гаџет, кликните на дугме „{{int:gadgets-export-download}}“, сачувајте преузету датотеку,
пређите на ''Special:Import'' на жељеној викији и пошаљите гаџет. Након тога, додајте следеће на ''MediaWiki:Gadgets-definition'' страницу:
<pre>$2</pre>
Морате имати одређене дозволе на наведеној викији (укључујући и право за уређивање системских порука), док увоз преко датотека мора бити омогућен.",
	'gadgets-export-download' => 'Преузми',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 * @author Michaello
 * @author Milicevic01
 * @author Жељко Тодоровић
 */
$messages['sr-el'] = array(
	'gadgets-desc' => 'Omogućava korisnicima da izaberu prilagođene [[Special:Gadgets|CSS i javaskript gadžete]] u svojim [[Special:Preferences#mw-prefsection-gadgets|podešavanjima]]',
	'prefs-gadgets' => 'Gedžeti',
	'gadgets-prefstext' => 'Ispod se nalazi spisak posebnih gadžeta koje možete da omogućite na svom nalogu.
Ove spravice su uglavnom zasnovane na javaskripti, tako da ona mora biti omogućena.
Gadžeti neće uticati na stranicu za podešavanje.

Oni nisu deo softvera Medijaviki, već se razvijaju i održavaju od strane korisnika na vašem lokalnom vikiju.
Administratori mogu da izmene [[MediaWiki:Gadgets-definition|značenja]] i [[Special:Gadgets|opise]] dostupnih gadžeta.',
	'gadgets' => 'gedžeti',
	'gadgets-title' => 'gedžeti',
	'gadgets-pagetext' => 'Ispod je spisak posebnih gadžeta koje korisnici mogu da omoguće na svojoj [[Special:Preferences#mw-prefsection-gadgets|stranici za podešavanje]], kao što je navedeno u [[MediaWiki:Gadgets-definition|definicijama]].
Ovaj pregled pruža brz pristup sistemskim porukama koje definišu svaki opis i kod gadžeta.',
	'gadgets-uses' => 'koristi se',
	'gadgets-required-rights' => 'Zahteva {{PLURAL:$2|sledeće pravo|sledeća prava}}:

$1',
	'gadgets-required-skins' => 'Dostupno u {{PLURAL:$2|temi $1|sledećim temama: $1}}.',
	'gadgets-default' => 'Podrazumevano uključen za svakog.',
	'gadgets-export' => 'Izvezi',
	'gadgets-export-title' => 'Izvoz gadžeta',
	'gadgets-not-found' => 'Gadžet „$1“ nije pronađen.',
	'gadgets-export-text' => "Da biste izvezli $1 gadžet, kliknite na dugme „{{int:gadgets-export-download}}“, sačuvajte preuzetu datoteku,
pređite na ''Special:Import'' na željenoj vikiji i pošaljite gadžet. Nakon toga, dodajte sledeće na ''MediaWiki:Gadgets-definition'' stranicu:
<pre>$2</pre>
Morate imati određene dozvole na navedenoj vikiji (uključujući i pravo za uređivanje sistemskih poruka), dok uvoz preko datoteka mora biti omogućen.",
	'gadgets-export-download' => 'Preuzmi',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 */
$messages['stq'] = array(
	'gadgets-desc' => 'Lät Benutsere in hiere [[Special:Preferences#mw-prefsection-gadgets|persöönelke Ienstaalengen]] foardefinierde [[Special:Gadgets|CSS- un JavaScript-Gadgets]] aktivierje',
	'prefs-gadgets' => 'Gadgets',
	'gadgets-prefstext' => 'Lieste fon spezielle Hälpere do der fon älken Benutser aktivierd wäide konnen.
Do Hälpere basierje maastens ap Javascript, deeruum mout Javascript in dän Browser aktivierd weese, uumdät jo funktionierje.
Do Hälpere funktionierje oawers nit ap disse Siede mäd persöönelke Ienstaalengen.

Buutendät is tou beoachtjen, dät disse Hälpere in Algemeenen nit Paat fon MediaWiki sunt, man maast fon
Benutsere fon lokoale Wikis äntwikkeld un fersuurged wäide. Lokoale Wiki-Administratore konnen do ferföichboare Hälpere beoarbaidje. Deerfoar stounde do [[MediaWiki:Gadgets-definition|Definitione]] un [[Special:Gadgets|Beskrieuwengen]] tou Ferföigenge.',
	'gadgets' => 'Gadgets',
	'gadgets-title' => 'Gadgets',
	'gadgets-pagetext' => 'Lieste fon spezielle Hälpere, do der foar älken Benutser in sien [[Special:Preferences#mw-prefsection-gadgets|persöönelke Ienstaalengen]] ferföichboar sunt, as [[MediaWiki:Gadgets-definition| definierd]].
Disse Uursicht bjut direkten Tougoang tou do Systemättergjuchte, do ju Beskrieuwenge as uk dän Programkode fon älken Hälper änthoolde.',
	'gadgets-uses' => 'Benutsed',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 */
$messages['su'] = array(
	'gadgets-desc' => 'Matak bisa pamaké milih [[Special:Gadgets|Gajet CSS sarta Javascript]] ngaliwatan [[Special:Preferences#mw-prefsection-gadgets|Préferénsi]] maranéhanana',
);

/** Swedish (svenska)
 * @author Ainali
 * @author Boivie
 * @author Cohan
 * @author Diupwijk
 * @author Lejonel
 * @author M.M.S.
 * @author Skalman
 */
$messages['sv'] = array(
	'gadgets-desc' => 'Låter användare aktivera personliga [[Special:Gadgets|CSS- och JavaScript-finesser]] genom sina [[Special:Preferences#mw-prefsection-gadgets|inställningar]]',
	'prefs-gadgets' => 'Finesser',
	'gadgets-prefstext' => 'Härunder finns en lista över finesser som du kan aktivera för ditt konto.
De flesta funktionerna är baserade på JavaScript, så du måste ha JavaScript aktiverat i din webbläsare för att de ska fungera.
Notera att de här tilläggsfunktionerna inte kommer ha någon effekt den här inställningssidan.

Notera också att dessa finesser inte är en del av MediaWiki-programvaran, och är för det mesta utvecklade och underhållna av användare på den här wikin.
Lokala administratörer kan redigera [[MediaWiki:Gadgets-definition|definitionerna]] och [[Special:Gadgets|beskrivningarna]] av de tillgängliga finesserna.',
	'gadgets' => 'Finesser',
	'gadgets-title' => 'Finesser',
	'gadgets-pagetext' => 'Härunder finns en lista över finesser som användare kan aktivera i sina [[Special:Preferences#mw-prefsection-gadgets|inställningar]], definierad av [[MediaWiki:Gadgets-definition|definitionerna]].
Den här översikten ger enkel åtkomst till de systemmeddelanden som definierar beskrivningarna och koden för varje finess.',
	'gadgets-uses' => 'Använder',
	'gadgets-required-rights' => 'Kräver följande {{PLURAL:$2|rättighet|rättigheter}}:

$1',
	'gadgets-required-skins' => 'Tillgängligt i {{PLURAL:$2|$1-utseendet|följande utseenden: $1}}.',
	'gadgets-default' => 'Som standard aktiverat för alla.',
	'gadgets-export' => 'Exportera',
	'gadgets-export-title' => 'Exportera finess',
	'gadgets-not-found' => 'Tillägg "$1" hittades inte.',
	'gadgets-export-text' => 'För att exportera tillägg $1, klicka på "{{int:gadgets-export-download}}"-knappen, spara den nedladdade filen, gå till Special:Importera på destinationswikin och ladda upp den. Lägg sedan till följande till MediaWiki:Gadgets-definition sidan:
<pre>$2</pre>
Du måste ha tillräckliga behörigheter på destinationswikin (inklusive möjlighet att ändra systemmeddelanden) och att importera från filuppladningar måste vara aktiverad.',
	'gadgets-export-download' => 'Ladda ner',
);

/** Swahili (Kiswahili)
 * @author Kwisha
 * @author Stephenwanjau
 */
$messages['sw'] = array(
	'gadgets' => 'Vifaa',
	'gadgets-title' => 'Vifaa',
	'gadgets-uses' => 'Inatumia',
	'gadgets-export-download' => 'Pakua',
);

/** Tamil (தமிழ்)
 * @author TRYPPN
 * @author மதனாஹரன்
 */
$messages['ta'] = array(
	'prefs-gadgets' => 'கருவிகள்',
	'gadgets' => 'கருவிகள்',
	'gadgets-title' => 'கருவிகள்',
	'gadgets-uses' => 'பயன்பாடுகள்',
	'gadgets-required-rights' => 'பின்வரும் {{PLURAL:$2|உரிமை|உரிமைகள்}} வேண்டப்படுகின்றன:

$1',
	'gadgets-required-skins' => '{{PLURAL:$2|$1 தோலில்|பின்வரும் தோல்களில்: $1} கிடைக்கும்.', # Fuzzy
	'gadgets-default' => 'இயல்பாக அனைவருக்கும் செயற்பட வைக்கப்பட்டது.',
	'gadgets-export' => 'ஏற்றுமதி செய்',
	'gadgets-export-title' => 'கருவியை ஏற்றுமதி செய்',
	'gadgets-not-found' => "''$1'' என்ற கருவி காணப்படவில்லை.",
	'gadgets-export-download' => 'பதிவிறக்கம் செய்',
);

/** Telugu (తెలుగు)
 * @author Kiranmayee
 * @author Mpradeep
 * @author Veeven
 */
$messages['te'] = array(
	'gadgets-desc' => 'వాడుకర్లను వారి [[Special:Preferences#mw-prefsection-gadgets|అభిరుచుల]]లో  ప్రత్యేక [[Special:Gadgets|CSS మరియు జావాస్క్రిప్ట్ గాడ్జెట్లను]] ఎంచుకోనిస్తుంది',
	'prefs-gadgets' => 'ఉపకరణాలు',
	'gadgets-prefstext' => 'ఈ దిగువ ఉన్న ప్రత్యేక ఉపకరణాల నుండి మీకు కావలసిన వాటికి టిక్కు పెట్టి మీ ఖాతాకు వీటిని చేతనం చేసుకొవచ్చు.
ఈ ఉపకరణాలు జావాస్క్రిప్టుపై ఆధారపడి పనిచేస్తాయి కాబట్టి ఇవి సరిగా పనిచెయ్యాలంటే మీ విహారిణిలో జావాస్క్రిప్టు చేతనం చేసి ఉండాలి.
ఈ ఉపకరణాలు అభిరుచుల పేజీపై ఎటువంటి ప్రభావాన్ని కలుగజేయవని గమనించాలి.

అలాగే ఈ ప్రత్యేక ఉపకరణాలు మీడియావికీ సాఫ్టువేరులో భాగము కాదని గమనించాలి. వీటిని సాధారణంగా మీ స్థానిక వికీలోని వాడుకరులే తయారుచేసి నిర్వహిస్తూ ఉంటారు. అందుబాటులో ఉన్న ఉపకరణాలకు [[MediaWiki:Gadgets-definition|ఉపకరణాల నిర్వచన]] మరియు [[Special:Gadgets|ఉపకరణాల వివరణ]] పేజీలను ఉపయోగించి స్థానిక వికీ నిర్వాహకులు మార్పులు చేయవచ్చు.',
	'gadgets' => 'ఉపకరణాలు',
	'gadgets-title' => 'ఉపకరణాలు',
	'gadgets-pagetext' => 'ఈ దిగువన ఉన్న ప్రత్యేక ఉపకరణాల నుండి సభ్యులు తమకు కావలసినవి తమ [[Special:Preferences#mw-prefsection-gadgets|అభిరుచులు పేజీ]]లోని ఉపకరణాల టాబులో టిక్కు పెట్టి ఎనేబుల్ చేసుకొనే అవకాశం ఉన్నది. వీటిని [[MediaWiki:Gadgets-definition|ఉపకరణాల నిర్వచన]] పేజీలో నిర్వచించడం జరిగింది. ఈ చిన్న పరిచయం ఆయా ఉపకరణాల నిర్వచన మరియు కోడుకు సంబంధించిన మీడియావికీ సందేశాలకు సులువుగా చేరుకునేందుకు లింకులను సమకూర్చుతుంది.',
	'gadgets-uses' => 'ఉపయోగించే ఫైళ్ళు',
	'gadgets-required-rights' => 'ఈ క్రింది {{PLURAL:$2|హక్కు|హక్కులు}} కావాలి:

$1',
	'gadgets-export' => 'ఎగుమతించు',
	'gadgets-not-found' => '"$1" ఉపకరణం కనబడలేదు.',
	'gadgets-export-download' => 'దింపుకోండి',
);

/** Tajik (Cyrillic script) (тоҷикӣ)
 * @author Ibrahim
 */
$messages['tg-cyrl'] = array(
	'gadgets-desc' => 'Аз тариқи саҳифаи [[Special:Preferences#mw-prefsection-gadgets|тарҷиҳот]] ба корбарон имконияти интихоби абзорҳои шахсии [[Special:Gadgets|CSS ва ҶаваСкрипт]]ро медиҳад.',
	'prefs-gadgets' => 'Абзорҳо',
	'gadgets-prefstext' => 'Дар зер феҳристи аз абзорҳои вижаеро мебинед, ки барои ҳисобатон метавонед фаъол кунед. Ин абзорҳо бештар дар асоси ҶаваСкрипт ҳастанд, пас барои истфода аз онҳо бояд ҶаваСкриптро дар мурургаратон фаъол кунед. Таваҷҷӯҳ кунед, ки ин абзорҳо наметавонанд саҳифаи тарҷиҳотро тағйир диҳанд.

Диққат дошта бошед, ки ин абзорҳои ҷузъӣ аз нармафзори МедиаВики нестанд ва ҳамчун яке аз қисмҳои он ба ҳисоб намераванд, ва одатан аз тарафи корбарони ҳар вики сохта ва нигаҳдорӣ мешаванд. Мудирони ҳар вики метавонанд бо истифода аз саҳифаҳои [[MediaWiki:Gadgets-definition]] ва [[Special:Gadgets]] ба вироиши абзорҳо бипардозанд.', # Fuzzy
	'gadgets' => 'Абзорҳо',
	'gadgets-title' => 'Абзорҳо',
	'gadgets-pagetext' => 'Дар зер феҳристи абзорҳои вижаро мебинед, ки корбарон метавонанд дар саҳифаи тарҷиҳоти худ мутобиқи [[MediaWiki:Gadgets-definition]] фаъол кунанд. Ин хулоса дастрасии осонро ба саҳифаи пайғомҳои системавӣ, ки шомили тавзеҳот ва коди ҳар абзор аст, пешкаш мекунад.', # Fuzzy
	'gadgets-uses' => 'Корбурдҳо',
);

/** Tajik (Latin script) (tojikī)
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'gadgets-desc' => 'Az tariqi sahifai [[Special:Preferences#mw-prefsection-gadgets|tarçihot]] ba korbaron imkonijati intixobi abzorhoi şaxsiji [[Special:Gadgets|CSS va ÇavaSkript]]ro medihad.',
	'prefs-gadgets' => 'Abzorho',
	'gadgets' => 'Abzorho',
	'gadgets-title' => 'Abzorho',
	'gadgets-uses' => 'Korburdho',
);

/** Thai (ไทย)
 * @author Ans
 * @author Passawuth
 */
$messages['th'] = array(
	'gadgets-desc' => 'ให้ผู้ใช้สามารถเลือกใช้ [[Special:Gadgets|CSS และ จาวาสคริปต์]] ที่สร้างขึ้นเป็นการเฉพาะ ในหน้า [[Special:Preferences#mw-prefsection-gadgets|ตั้งค่า]] ได้',
	'prefs-gadgets' => 'อุปกรณ์เสริม',
	'gadgets-prefstext' => 'ด้านล่างเป็นรายการอุปกรณ์เสริม ที่บัญชีผู้ใช้ของคุณสามารถเปิดใช้งานได้
อุปกรณ์เสริมเหล่านี้ส่วนใหญ่จะทำงานผ่านจาวาสคริปต์ ดังนั้นเบราเซอร์ของคุณต้องเปิดใช้งานจาวาสคริปต์จึงจะสามารถใช้อุปกรณ์เสริมเหล่านี้ได้
อย่างไรก็ตามอุปกรณ์เสริมเหล่านี้จะไม่ส่งผลหรือประมวลผลใดๆ ในหน้าตั้งค่านี้

นอกจากนี้อุปกรณ์เสริมพิเศษเหล่านี้ไม่ได้เป็นส่วนหนึ่งของซอฟต์แวร์มีเดียวิกิ แต่พัฒนาและดูแลโดยผู้ใช้งานในวิกิที่คุณใช้อยู่
โดยผู้ดูแลของวิกินั้นๆ สามารถแก้ไขอุปกรณ์เสริมที่มีอยู่ผ่านทางหน้า [[MediaWiki:Gadgets-definition|definition]] และ [[Special:Gadgets|คำอธิบาย]]',
	'gadgets' => 'อุปกรณ์เสริม',
	'gadgets-title' => 'อุปกรณ์เสริม',
	'gadgets-pagetext' => 'รายการด้านล่างเป็นรายการอุปกรณ์เสริมพิเศษที่ผู้ใช้สามารถเปิดใช้ในส่วน[[Special:Preferences#mw-prefsection-gadgets|การตั้งค่าส่วนตัว]] อุปกรณ์เสริมทั้งหมดได้ถูกกำหนดไว้ใน [[MediaWiki:Gadgets-definition|ส่วนกำหนดอุปกรณ์เสริม]]
ขณะที่หน้านี้จะกล่าวโดยรวมเกี่ยวกับ คำอธิบายการใช้งาน และ โค้ดของอุปกรณ์เสริมแต่ละตัว',
	'gadgets-uses' => 'เรียกใช้',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 */
$messages['tk'] = array(
	'gadgets-desc' => 'Ulanyjylaryň [[Special:Preferences#mw-prefsection-gadgets|ileri tutmalarynda]] ýörite [[Special:Gadgets|CSS we JavaScript gajetlerini]] saýlamaklaryna rugsat berýär',
	'prefs-gadgets' => 'Gajetler',
	'gadgets' => 'Gajetler',
	'gadgets-title' => 'Gajetler',
	'gadgets-uses' => 'Ulanýar',
	'gadgets-export' => 'Eksportirle',
	'gadgets-export-title' => 'Gajet eksporty',
	'gadgets-not-found' => '"$1" gajeti tapylmady.',
	'gadgets-export-download' => 'Göçürip al',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'gadgets-desc' => 'Nagpapahintulot sa mga tagagamit na makapili ng pinasadyang [[Special:Gadgets|mga gadyet na pang-CSS at pang-JavaScript]] sa kanilang [[Special:Preferences#mw-prefsection-gadgets|mga kagustuhan]]',
	'prefs-gadgets' => 'Mga gadyet (kasangkapan)',
	'gadgets-prefstext' => "Nasa ibaba ang isang talaan ng mga natatanging kasangkapan (gadyet) na maaari mong paganahin para sa iyong kuwenta/akawnt.
Karamihan sa mga gadyet na ito ang nakaugnay/nakabatay sa ''JavaScript'', kaya dapat na paandarin ang ''JavaScript'' sa iyong pantingin-tingin (''browser'') upang gumana.
Pakitandaang walang magiging epekto sa pahina ng mga kagustuhang ito ang ganitong mga gadyet.

Pakitandaan din na ang mga natatanging gadyet na ito ay hindi kabahagi ng sopwer ng MediaWiki, at karaniwang pinaunlad at pinananatili ng mga tagagamit sa katutubo/lokal mong wiki.
Maaaring baguhin ng pampook/lokal na mga tagapangasiwa ang makukuhang mga gadyet sa pamamagitan ng [[MediaWiki:Gadgets-definition|mga kahulugan]] at [[Special:Gadgets|mga paglalarawan]].",
	'gadgets' => 'Mga gadyet (kasangkapan)',
	'gadgets-title' => 'Mga gadyet (kasangkapan)',
	'gadgets-pagetext' => 'Nasa ibaba ang isang talaan ng natatanging mga kasangkapan (gadyet) na mapapagana ng mga tagagamit sa kanilang [[Special:Preferences#mw-prefsection-gadgets|pahina ng mga kagustuhan]], ayon sa nilalarawan ng [[MediaWiki:Gadgets-definition|mga kahulugan]].
Nagbibigay ang pagtalakay na ito ng magaang na daan/akseso patungo sa mga pahina ng sistemang pangmensahe na nagbibigay kahulugan sa paglalarawan at kodigo ng bawat gadyet.',
	'gadgets-uses' => 'Mga mapaggagamitan',
	'gadgets-required-rights' => 'Nangangailangan ng sumusunod na {{PLURAL:$2|karapatan|mga karapatan:}}:

$1',
	'gadgets-required-skins' => 'Makukuha sa ibabaw ng  {{PLURAL:$2|$1 na pabalat|sumusunod na mga pabalat: $1}}.',
	'gadgets-default' => 'Likas ang pagkakatakda na pinapagana para sa lahat.',
	'gadgets-export' => 'Iluwas',
	'gadgets-export-title' => 'Pagluluwas ng gadyet',
	'gadgets-not-found' => 'Hindi natagpuan ang gadyet na "$1".',
	'gadgets-export-text' => 'Upang iluwas ang gadyet na $1, pindutin ang pindutang "{{int:gadgets-export-download}}", sagipin ang talaksang ikinargang paibaba,
pumunta sa Special:Import na nasa kapupuntahang wiki at ikarga itong paitaas.  Pagkaraan ay idagdag ang sumusunod sa pahina ng MediaWiki:Gadgets-definition:
<pre>$2</pre>
Dapat kang mayroong nararapat na mga pahintulot sa kapupuntahang wiki (kasama ang karapatang mamatnugot ng mga mensahe ng sistema) at dapat na gumagana ang mga inangkat mula sa mga talaksang ikinargang paitaas',
	'gadgets-export-download' => 'Ikargang pababa',
);

/** Turkish (Türkçe)
 * @author Emperyan
 * @author Erkan Yilmaz
 * @author Incelemeelemani
 * @author Joseph
 * @author Karduelis
 * @author Koc61
 */
$messages['tr'] = array(
	'gadgets-desc' => 'Kullanıcıların [[Special:Preferences#mw-prefsection-gadgets|tercihlerinde]] özel [[Special:Gadgets|CSS ve JavaScript gadgetlerini]] seçmelerine izin verir',
	'prefs-gadgets' => 'Küçük araçlar',
	'gadgets-prefstext' => 'Aşağıdaki, hesabınız için etkinleştirebileceğiniz özel araçların listesidir. 
Bu küçük araçlar çoğunlukla JavaScript temellidir, bu yüzden çalışmaları için tarayıcınızda JavaScript etkinleştirilmelidir. Bu küçük araçların tercihler sayfasına bir etkisinin olmayacağını unutmayın.

Ayrıca unutmayın ki, bu özel araçlar MedyaViki yazılımının bir parçası değildir ve genellikle yerel vikinizdeki kullanıcılar tarafından geliştirilip, devam ettirilirler.
Yerel yöneticiler [[MediaWiki:Gadgets-definition|tanımları]] ve [[Special:Gadgets|açıklamaları]] kullanarak uygun araçları değiştirebilirler.',
	'gadgets' => 'Küçük araçlar',
	'gadgets-title' => 'Küçük araçlar',
	'gadgets-pagetext' => "Aşağıdaki, kullanıcıların [[Special:Preferences#mw-prefsection-gadgets|tercihler sayfasında]] etkin hale getirebileceği, [[MediaWiki:Gadgets-definition|tanımlarla]] belirtildiği gibi, özel gadgetlerin bir listesidir.
Bu genel bakış, her gadget'in tanımını ve kodunu belirten sistem mesaj sayfalarına kolay erişim sağlar.",
	'gadgets-uses' => 'Kullanıyor',
	'gadgets-required-rights' => 'Aşağıda gösterilen {{PLURAL:$2|hak|haklar}} gereklidir:

$1',
	'gadgets-required-skins' => 'Kullanılabilecek {{PLURAL:$2|$1 tema|temalar: $1}}.',
	'gadgets-default' => 'Herkes için varsayılan olarak etkindir.',
	'gadgets-export' => 'Dışa aktar',
	'gadgets-export-title' => 'Gadget dışa aktarımı',
	'gadgets-not-found' => 'Gadget "$1" bulunamadı.',
	'gadgets-export-text' => '$1 gadgetini dışa aktarmak için "{{int:gadgets-export-download}}" düğmesine tıklayın, yüklenen dosyayı kaydedin, hedef vikide Special:Import sayfasına gidin ve yükleyin. Sonra aşağıdakini MediaWiki:Gadgets-definition sayfasına ekleyin:
<pre>$2</pre>
Hedef vikide uygun izinlerinizin olması (sistem mesajlarını değiştirmek yetkisi dahil) ve dosyadan içe aktarmanın etkinleştirilmiş olması gerekir.',
	'gadgets-export-download' => 'İndir',
);

/** Tatar (Cyrillic script) (татарча)
 * @author Ильнар
 */
$messages['tt-cyrl'] = array(
	'prefs-gadgets' => 'Гаджетлар',
	'gadgets' => 'Гаджетлар',
	'gadgets-title' => 'Гаджетлар',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'gadgets-uses' => 'ئىشلىتىش',
	'gadgets-export' => 'چىقار',
	'gadgets-export-download' => 'چۈشۈر',
);

/** Ukrainian (українська)
 * @author AS
 * @author Ahonc
 * @author Andriykopanytsia
 * @author Dim Grits
 * @author Olvin
 * @author Prima klasy4na
 * @author RLuts
 * @author Riwnodennyk
 * @author Sodmy
 * @author Тест
 */
$messages['uk'] = array(
	'gadgets-desc' => 'Дозволяє користувачам обирати [[Special:Gadgets|CSS- та JavaScript-додатки]] у своїх [[Special:Preferences#mw-prefsection-gadgets|налаштуваннях]]',
	'prefs-gadgets' => 'Додатки',
	'gadgets-prefstext' => 'Нижче наведено перелік особливих додатків, які ви можете ввімкнути для свого облікового запису.
Ці додатки переважно засновані на JavaScript, тому ви маєте ввімкнути JavaScript для того, щоб вони працювали.
Зауважте, що на цій сторінці налаштувань такі додатки не працюватимуть.

Також зауважте, що ці додатки не є частиною MediaWiki й зазвичай розробляються та обслуговуються дописувачами цієї локальної вікі.
Адміністратори можуть змінювати перелік додатків за допомогою сторінок їх [[MediaWiki:Gadgets-definition|визначення]] та [[Special:Gadgets|опису]].',
	'gadgets' => 'Додатки',
	'gadgets-title' => 'Додатки',
	'gadgets-pagetext' => 'Нижче наведено перелік додатків, які можна ввімкнути на [[Special:Preferences#mw-prefsection-gadgets|сторінці налаштувань]]. Цей перелік задано на [[MediaWiki:Gadgets-definition|сторінці визначень]].
Таким чином, можна отримати простий доступ до системних сторінок, де задається опис кожного додатку та його код.',
	'gadgets-uses' => 'Використовує',
	'gadgets-required-rights' => '{{PLURAL:$2|1=Потрібне право|Потрібні такі права}}:

$1',
	'gadgets-required-skins' => 'Доступний на {{PLURAL:$2|1=$1 skin|наступних темах оформлення: $1}}.',
	'gadgets-default' => 'Увімкнено для всіх за замовчуванням.',
	'gadgets-export' => 'Експортувати',
	'gadgets-export-title' => 'Експорт додатка',
	'gadgets-not-found' => 'Додаток "$1" не знайдено.',
	'gadgets-export-text' => 'Аби експортувати додаток $1, натисніть «{{int:gadgets-export-download}}», збережіть завантажений файл,
перейдіть до Special:Import на потібній віці і відвантажте його там. Тоді додайте наступний текст на сторінку MediaWiki:Gadgets-definition:
<pre>$2</pre>
Ви повинні мати відповідні права на цільовій віці (зокрема на редагування системних повідомлень), окрім того має бути ввімкнена можливість імпорту з файлу.',
	'gadgets-export-download' => 'Завантажити',
);

/** Urdu (اردو)
 * @author Muhammad Shuaib
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'prefs-gadgets' => 'آلات',
	'gadgets' => 'آلات',
	'gadgets-title' => 'آلات',
	'gadgets-uses' => 'استعمال کرتا ہے',
	'gadgets-export' => 'برآمد',
	'gadgets-export-title' => 'برآمد آلہ',
);

/** Uzbek (oʻzbekcha)
 * @author CoderSI
 */
$messages['uz'] = array(
	'prefs-gadgets' => 'Gadjetlar',
	'gadgets' => 'Gadjetlar',
	'gadgets-title' => 'Gadjetlar',
);

/** vèneto (vèneto)
 * @author Candalua
 * @author GatoSelvadego
 */
$messages['vec'] = array(
	'gadgets-desc' => 'Consente ai utenti de selezionar [[Special:Gadgets|acessori CSS e JavaScript]] ne le proprie [[Special:Preferences#mw-prefsection-gadgets|preferense]]',
	'prefs-gadgets' => 'Acessori',
	'gadgets-prefstext' => "De seguito se cata na lista de acessori speciali (''gadget'') che se pol abilitar par el proprio account.
La mazor parte de sti acessori la se basa su JavaScript, e quindi te ghè da abilitar JavaScript sul to browser se te vol che i funsiona coretamente. Nota che i accessori no i gà nissun efeto in sta pagina de preferense.

Nota anca che sti acessori speciali no i fa parte del software MediaWiki e i vien de solito realizà e gestìi dai utenti de ogni sito wiki. I aministradori del sito i pol modificar la lista dei acessori disponibili tramite le pagine [[MediaWiki:Gadgets-definition|definissioni]] e [[Special:Gadgets|descrissioni]].",
	'gadgets' => 'Acessori',
	'gadgets-title' => 'Acessori',
	'gadgets-pagetext' => "De seguito vien presentà n'elenco de acessori (''gadget'') che i utenti i pol abilitar su la so [[Special:Preferences#mw-prefsection-gadgets|pagina de le preferenze]], seguendo le definizion riportà in [[MediaWiki:Gadgets-definition]].
Sta panoramica la fornisse un comodo mecanismo par accédar ai messagi de sistema nei quali xe definìo la descrizion e el codice de ciascun acessorio.",
	'gadgets-uses' => 'Dopara',
	'gadgets-required-rights' => 'Dimanda {{PLURAL:$2|el seguente dirito|i seguenti diriti}}:

$1',
	'gadgets-required-skins' => "Disponibiłe {{PLURAL:$2|pa' ła skin $1|pa' łe seguenti skin: $1}}.",
	'gadgets-default' => 'Ativà par tuti, par inpostasion predefinia.',
	'gadgets-export' => 'Esporta',
	'gadgets-export-title' => 'Esporta acessorio',
	'gadgets-not-found' => 'Acessorio "$1" mia catà.',
	'gadgets-export-text' => 'Par esportar el gadget $1, struca "{{int:gadgets-export-download}}", salva el file, va su Special:Import de la wiki de destinassion e carichelo. Dopo zonta sta roba qua su MediaWiki:Gadgets-definition:
<pre>$2</pre>
Te serve i parmessi su la wiki de destinassion (compreso quelo de modificar i messaji de sistema) e l\'inportassion dei file la deve essar ativà.',
	'gadgets-export-download' => 'Descarga',
);

/** Veps (vepsän kel’)
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'prefs-gadgets' => 'Gadžetad',
	'gadgets' => 'Gadžetad:',
	'gadgets-title' => 'Gadžetad',
	'gadgets-uses' => 'Kävutab',
	'gadgets-export' => 'Eksportiruida',
	'gadgets-export-title' => 'Gadžetan eksportiruind',
);

/** Vietnamese (Tiếng Việt)
 * @author Meno25
 * @author Minh Nguyen
 * @author Vinhtantran
 */
$messages['vi'] = array(
	'gadgets-desc' => 'Để các thành viên chọn những [[Special:Gadgets|công cụ đa năng]] đặc chế bằng CSS và JavaScript trong [[Special:Preferences#mw-prefsection-gadgets|tùy chọn]]',
	'prefs-gadgets' => 'Công cụ đa năng',
	'gadgets-prefstext' => 'Dưới đây là danh sách các công cụ đa năng đặc biệt mà bạn có thể kích hoạt cho tài khoản của mình.
Những công cụ này chủ yếu dựa trên JavaScript, do đó bạn phải kích hoạt JavaScript trong trình duyệt để các công cụ này hoạt động.
Chú ý rằng những công cụ đa năng này sẽ không có tác dụng trong trang tùy chọn cá nhân.

Cũng chú ý rằng những công cụ đặc biệt này không phải là một phần của phần mềm MediaWiki, mà thường được phát triển và bảo trì bởi những thành viên ở wiki của họ. Những quản lý ở từng ngôn ngữ có thể sửa đổi các công cụ đa năng có sẵn từ các danh sách [[MediaWiki:Gadgets-definition|định nghĩa]] và [[Special:Gadgets|miêu tả]].',
	'gadgets' => 'Công cụ đa năng',
	'gadgets-title' => 'Công cụ đa năng',
	'gadgets-pagetext' => 'Dưới đây là danh sách các công cụ đa năng đặc biệt mà thành viên có thể dùng tại [[Special:Preferences#mw-prefsection-gadgets|trang tùy chọn cá nhân]] của họ, theo [[MediaWiki:Gadgets-definition|định nghĩa]]. Trang tổng quan này cung cấp cách tiếp cận dễ dàng đến trang các thông điệp hệ thống để định nghĩa miêu tả và mã của từng công cụ.',
	'gadgets-uses' => 'Sử dụng',
	'gadgets-required-rights' => 'Cần {{PLURAL:$2|quyền|các quyền}} sau:

$1',
	'gadgets-required-skins' => 'Có sẵn trên {{PLURAL:$2|hình dạng $1|các hình dạng: $1}}.',
	'gadgets-default' => 'Được kích hoạt cho tất cả mọi người theo mặc định.',
	'gadgets-export' => 'Xuất',
	'gadgets-export-title' => 'Xuất công cụ đa năng',
	'gadgets-not-found' => 'Không tìm thấy công cụ đa năng “$1”.',
	'gadgets-export-text' => 'Để xuất công cụ đa năng $1, hãy bấm nút “{{int:gadgets-export-download}}”, lưu tập tin được tải về, mở trang Special:Import trên wiki đích và tải nó lên. Sau đó, thêm mã này vào trang MediaWiki:Gadgets-definition:
<pre>$2</pre>
Bạn phải có đủ quyền truy cập trên wiki đích (bao gồm quyền sửa đổi thông điệp hệ thống) và wiki phải bật chức năng xuất từ tập tin tải lên.',
	'gadgets-export-download' => 'Tải về',
);

/** Volapük (Volapük)
 * @author Smeira
 */
$messages['vo'] = array(
	'gadgets-uses' => 'Gebs',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'gadgets-desc' => 'דערמעגלעכט באניצער אויסקלייבן [[Special:Gadgets|CSS און JavaScript דזשימדזשיקעס]] אין זייערע [[Special:Preferences#mw-prefsection-gadgets|פרעפֿערענצן]]',
	'prefs-gadgets' => 'דזשימדזשיקעס',
	'gadgets' => 'דזשימדזשיקעס',
	'gadgets-title' => 'דזשימדזשיקעס',
	'gadgets-pagetext' => 'אונטן איז א רשימה פון דזשימדזשיקעס וואס באניצער קענען אקטיוויזירן דורך זיין [[Special:Preferences#mw-prefsection-gadgets|פרעפֿערענצן בלאט]], לויט ווי זיי זענען באשטימט אין די  [[MediaWiki:Gadgets-definition|דעפֿיניציעס]].
דער איבערבליק גיט א גרינגן צוטריט צו די סיסטעם בלעטער וואס דעפֿינירן די שילדערונג און קאד פון יעדן דזשימדזשיק.',
	'gadgets-uses' => 'באניצט',
	'gadgets-required-rights' => 'פֿאדערט {{PLURAL:$2|דאס פֿאלגנדע רעכט|די פֿאלגנדע רעכטן}}:

$1',
	'gadgets-required-skins' => 'פֿאראן ביי {{PLURAL:$2|$1 דער באניצער אייבערפֿלאך|פֿאלגנדע באניצער אייבערפֿלאכן: $1}}.',
	'gadgets-default' => 'אקטיווירט פֿאר אלעמען סטאנדארדמעסיק.',
	'gadgets-export' => 'עקספארטירן',
	'gadgets-export-title' => 'דזשימדזשיק עקספארט',
	'gadgets-not-found' => 'דזשימדזשיק "$1" נישט געטראפֿן.',
	'gadgets-export-text' => 'כדי צו עקספארטירן דעם $1 דזשימדזשיק, קליקט אויפן "{{int:gadgets-export-download}}" קנעפל, שפייכלערט איין די אראפגעלאדענע טעקע,
גייט צו Special:Import אין דער ציל וויקי און טוט זי ארויפלאדן. דערנאך לייגט צו דעם פאלגנד צום בלאט MediaWiki:Gadgets-definition page:
<pre>$2</pre>
איר דארפט האבן פאסיגע ערלויבנישן אויף דער ציל וויקי (כולל די רעכט צו רעדאקטירן סיסטעם מעלדונגען) און אימפארט פון טעקע ארויפלאדן מוז זיין אקטיווירט.',
	'gadgets-export-download' => 'אַראָפלאָדן',
);

/** Yoruba (Yorùbá)
 * @author Demmy
 */
$messages['yo'] = array(
	'gadgets-uses' => 'Àwọn ìlò',
	'gadgets-export' => 'Ìkójáde',
	'gadgets-export-download' => 'Ìrùsílẹ̀',
);

/** Cantonese (粵語)
 * @author Shinjiman
 */
$messages['yue'] = array(
	'gadgets-desc' => '畀用戶響佢哋嘅[[Special:Preferences#mw-prefsection-gadgets|喜好設定]]度設定自定嘅[[Special:Gadgets|CSS同埋JavaScript小工具]]',
	'prefs-gadgets' => '小工具',
	'gadgets-prefstext' => '下面係一個特別小工具，你可以響你個戶口度啟用。
呢啲小工具多數都係基於JavaScript建造，如果要開佢哋，噉個瀏覽器嘅JavaScript就需要啟用咗先至用得到。
要留意嘅就係呢啲小工具響呢個喜好設定版度係無效果嘅。

亦都同時留意呢啲小工具嘅特別頁唔係MediaWiki軟件嘅一部份，通常都係由你本地嘅wiki度開發同維護。本地管理員可以響[[MediaWiki:Gadgets-definition]]同埋[[Special:Gadgets]]編輯可以用到嘅小工具。',
	'gadgets' => '小工具',
	'gadgets-title' => '小工具',
	'gadgets-pagetext' => '下面係一個按照[[MediaWiki:Gadgets-definition]]嘅定義特別小工具清單，用戶可以響佢哋嘅喜好設定頁度開佢哋。
呢個概覽提供嘅系統信息頁嘅簡易存取，可以定義每個小工具嘅描述同埋碼。',
	'gadgets-uses' => '用',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Anakmalaysia
 * @author Bencmq
 * @author Gaoxuewei
 * @author Hydra
 * @author Liangent
 * @author Shinjiman
 * @author Xiaomingyan
 * @author Yfdyh000
 * @author 阿pp
 */
$messages['zh-hans'] = array(
	'gadgets-desc' => '允许用户在其[[Special:Preferences#mw-prefsection-gadgets|系统设置]]中选择自定义[[Special:Gadgets|CSS和JavaScript工具]]',
	'prefs-gadgets' => '小工具',
	'gadgets-prefstext' => '下面是你可以为你的账户启用的特殊小工具的列表。这些小工具大多数基于JavaScript，所以你必需使你的浏览器启用JavaScript以使它们工作。请注意这些小工具不会在这个设置页面上产生效果。

同时请注意，这些特殊小工具不是MediaWiki软件的组成部分，他们通常是由你的本地wiki的用户开发并维护的。本地管理员可以编辑可用小工具的[[MediaWiki:Gadgets-definition|定义]]和[[Special:Gadgets|说明]]。',
	'gadgets' => '小工具',
	'gadgets-title' => '小工具',
	'gadgets-pagetext' => '下面是用户可以在他们的[[Special:Preferences#mw-prefsection-gadgets|设置页面]]启用的特殊小工具的列表，由[[MediaWiki:Gadgets-definition|定义]]确定。这个概览提供便捷访问确定每个小工具的说明和代码的系统信息页面的途径。',
	'gadgets-uses' => '使用',
	'gadgets-required-rights' => '需要以下{{PLURAL:$2|权限|权限}}：

$1',
	'gadgets-required-skins' => '可用在{{PLURAL:$2|$1外观|以下外观：$1}}。',
	'gadgets-default' => '默认所有人启用。',
	'gadgets-export' => '导出',
	'gadgets-export-title' => '导出小工具',
	'gadgets-not-found' => '找不到“$1”小工具。',
	'gadgets-export-text' => '要导出 $1 小工具，请单击“{{int:gadgets-export-download}}”按钮，保存下载的文件，前往目标wiki的Special:Import并将文件上传。随后将以下内容加入MediaWiki:Gadgets-definition：
<pre>$2</pre>
您必须在目标wiki上具有适当的权限（包括编辑系统消息的权利），且站点必须启用由上传文件导入的功能。',
	'gadgets-export-download' => '下载',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Anakmalaysia
 * @author Danny0838
 * @author Gakmo
 * @author Horacewai2
 * @author Justincheng12345
 * @author Liangent
 * @author Mark85296341
 * @author Shinjiman
 * @author Waihorace
 */
$messages['zh-hant'] = array(
	'gadgets-desc' => '讓使用者可以於[[Special:Preferences#mw-prefsection-gadgets|偏好設定]]中自訂[[Special:Gadgets|CSS與JavaScript工具]]',
	'prefs-gadgets' => '小工具',
	'gadgets-prefstext' => '以下列出各種特殊小工具，可在您的帳戶中啟用之。小工具多使用了JavaScript，瀏覽器必須啟用JavaScript才能正常運作。請注意小工具的效果不會作用在這個偏好設定頁。

同時也請注意，這些特殊小工具並非MediaWiki軟體的一部份，通常是由本地wiki的使用者開發與維護。本地管理員可以編輯小工具的[[MediaWiki:Gadgets-definition|定義]]與[[Special:Gadgets|描述]]。',
	'gadgets' => '小工具',
	'gadgets-title' => '小工具',
	'gadgets-pagetext' => '以下是一個按照 [[MediaWiki:Gadgets-definition]] 的定義特殊小工具清單，用戶可以在它們的[[Special:Preferences#mw-prefsection-gadgets|偏好設定頁面]]中啟用它們。
這個概覽提供的系統資訊頁面的簡易存取，可以定義每個小工具的描述以及原始碼。',
	'gadgets-uses' => '使用',
	'gadgets-required-rights' => '需要以下{{PLURAL:$2|權限|權限}}：

$1',
	'gadgets-required-skins' => '可用在{{PLURAL:$2|$1面板|以下面板：$1}}。',
	'gadgets-default' => '預設所有人啟用。',
	'gadgets-export' => '匯出',
	'gadgets-export-title' => '匯出小工具',
	'gadgets-not-found' => '找不到「$1」小工具。',
	'gadgets-export-text' => '要匯出 $1 小工具，請點擊「{{int:gadgets-export-download}}」按鈕，儲存下載的檔案
轉到 Special:Import 目標 wiki 上並將其上傳。然後將以下新增到 MediaWiki:Gadgets-definition：
<pre>$2</pre>
您必須具有適當的權限 （包括編輯系統訊息的權利） 的目標維基上，必須啟用匯入的檔案上傳。',
	'gadgets-export-download' => '下載',
);
