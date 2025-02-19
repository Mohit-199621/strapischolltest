<script type="text/javascript" src="{{ url('mobile/scripts/jquery_min.js') }}"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<?php 
$blogad='footer-page';
$ads=staticAd($blogad);
if(!empty($ads)){
foreach($ads as $new){    
$adtitle_id=$new->ad_title_id;
$product_blog=$new->product_blog;
$repeat_product=$new->repeat_product;
$demo_1=$new->demo_1;
$adbanner = App\Adbanner::select('ad_title','id','device','banner_size','ad_content')->where('id',$adtitle_id)->where('device','mobile')->get();
foreach($adbanner as $banner){
if(!empty($repeat_product)){
$str_arr = explode (";", $repeat_product);
}
if(!empty($product_blog)){
$exclude_arr = explode (";", $product_blog);
}
if(!empty($demo_1)){
$include_arr = explode (";", $demo_1);  
}
?>
<?php
if(empty($exclude_arr) && empty($include_arr) && empty($str_arr)){
 ?>
    <div class="content content-boxed" style="margin-bottom:5px;">
<div align="center">
{!!  $banner->ad_content !!}
</div>
</div>
<?php
} 
if(empty($exclude_arr) && empty($include_arr)){
if(!empty($str_arr)){
 if(in_array('10',$str_arr)){ ?>
    <div class="content content-boxed" style="margin-bottom:5px;">
<div align="center">
{!!  $banner->ad_content !!}
</div>
</div>
<?php
}}
} 
}
}
?>
<?php } ?>
@if(getMobileFooterContent(url()->current())) 
<div class="content footer-content-dynamic">
	<div class="row" style="min-height:10px; padding-top:10px;">
    <div class="col-md-12 container footer-contents" id="mini-footer-content">
  <p>{!! getMobileFooterContent(url()->current()) !!}</p>
</div>
  </div>
</div>
@endif

<?php 
$url1=str_replace('/hi/hi','/hi',url()->current());
$home_url='https://tractorgyan.com/hi';
$tyre_url='https://tractorgyan.com/hi/tractor-tyre-in-india';
?>
@if($url1==$home_url)
<div class="content">
    <div class="row footer-row1">
    <div class="col-md-12 container footer-contents">
  <p>ट्रैक्टर सिर्फ एक कृषि में उपलब्ध होने वाला उपकरण नहीं है यह किसानों का वह साधन है जो उन्हें रोजगार और आमदनी के साधन जुटाने में मदद करता है. ट्रैक्टर वह शक्ति है जिसके माध्यम से किसान अपनी रोजी-रोटी तो चलाता ही है साथ ही अन्य कामों में भी ट्रैक्टर किसान का सहायक होता है. ट्रैक्टर से किसान खेती से हर छोटे-बड़े कामों में इसका उपयोग कर सकता है. अब कईं कम्पनियां है जो हर तरीके के मॉडल वाले ट्रैक्टर का निर्माण करती है. लेकिन बिना जानकारी पाए किसी भी चीज को खरीदना नुकसान वाला साबित होता है. इसके लिए ट्रैक्टर ज्ञान (Tractor Gyan) आपके लिए लाया सही और सटीक जानकारी जो कि ट्रैक्टर के बारे में पूरी जानकारी देंगे.
<br><br>
सस्ते से सस्ते और महंगे ट्रैक्टर्स की सही कीमत :-
<br>
ट्रैक्टर के ब्रांड की बात करे तो भारत में लगभग 25 या उससे ज्यादा ट्रैक्टर के ब्रांड मौजूद है. भारत में ट्रैक्टर ली कीमत 2.50 लाख रुपए से लेकर लगभग 30 लाख रुपए रहत है. भारत में ट्रैक्टर की कीमत यहाँ के किसानों को लेकर ही निर्धारित की गई है. जानकरी के लिए बता दें की भारत में सबसे महंगा ट्रैक्टर जॉन डीयर का 6120 बी का है जो लगभग तीस लाख रुपयों का है. वहीं सबसे सस्ते ट्रैक्टर की बात करें तो इसमें महिंद्रा युवराज 215 एनएफटी का है जिसकी कीमत 2.50 लाख रुपए है.
अपनी सुविधा के अनुसार नए ट्रैक्टर, लोकप्रिय ट्रैक्टर और भी कई तरीके के सेगमेंट खोंजे है. आप अपने सपनों का ट्रैक्टर किफायती कीमत पर आसानी से प्राप्त कर सकते हैं. इसके साथ ही आप एचपी और ब्रांड नाम पर चाह्यक करके होम पेज पर आसानी से अपना ट्रैक्टर खोज सकते हैं. साथ ही आप ऑफर विवरण प्राप्त कर सकते है और होम पेज पर नया ट्रैक्टर भी लॉन्च किया गया है उसे भी देख सकते हैं.
<br><br>
ट्रैक्टर्स के फीचर्स, पार्ट्स, टायर्स सभी की जानकारी हमारे यहां :-
<br>
सभी तरीके की जानकरी के बारे में आप हमारे होमपेज पर जाकर पता कर सकते हैं. ट्रैक्टर के बारे में नए-नए जानकारी और नए फीचर्स भी हमारे पेज पर जाकर प्राप्त कर सकते हैं. इतना ही ट्रैक्टर्स के अनेक पार्ट के बारे में भी जानकरी प्राप्त कर सकते है. इनमे टायर्स, और भी अन्य पार्ट की जानकरी आप हमारे वेबसाइट के होमपेज पर जाकर प्राप्त सकते हैं. साथ ही कृषि ज्ञान के बारे में जानकारी मिल सकती है.
<br>
कृषि से जुड़े संसाधनों और नई योजनाओं की सम्पूर्ण जानकारी :-
इसके अलावा ट्रैक्टर ज्ञान पर आप कृषि से जुड़ी हर नई योजना, ऑफर और संसाधनों की सम्पूर्ण जानकारी प्राप्त कर सकते हैं. साथ ही नया ट्रैक्टर लेना हो तो उसके साथ के अन्य ब्रांड के ट्रैक्टर की तुलना कर सही जानकारी प्राप्त कर सकते है. ट्रैक्टर ज्ञान (Tractor Gyan) में आपको भारत में शीर्ष ट्रैक्टर ब्रांडों के बारे में सभी आवश्यक और महत्वपूर्ण जानकारी मिल जाएगी। यह महिंद्रा, मैसी फर्ग्यूसन, एस्कॉर्ट्स, और आयशर बनें, उनमें से सभी सर्वश्रेष्ठ और प्रवृत्ति-सेटिंग ट्रैक्टर का उत्पादन करते हैं। ये उपयोग में असाधारण हैं और कंपनियां बड़े पुरस्कार और प्रतिक्रियाओं के साथ बड़े बाजार हिस्सेदारी पर विजय प्राप्त करती हैं। ये ट्रैक्टर ब्रांड ट्रैक्टर उद्योग बाजार के लगभग 70% योगदान करते हैं और बाजार में लगभग 5.2 अरब डॉलर का मूल्यवान हैं। ट्रैक्टर ज्ञान पर आप इन ट्रैक्टरों के बारे में प्रत्येक और सबकुछ जान सकते हैं, हमारे पास भारत के 100+ ट्रैक्टर मॉडल वाले 10 + ट्रैक्टर ब्रांडों (Tractor brands) का समूह है जो चुनने के लिए एक विस्तृत श्रृंखला है।
<br><br>
इसके अतिरिक्त हमारे पास कृषि के बारे में आपके ज्ञान को अपडेट करने के लिए ब्लॉग, कृषि और ट्रैक्टर के समाचार है. इन खंडों में ट्रैक्टर मूल्य सूची पर लेख, कृषि सूचनात्मक ब्लॉग आदि सम्मिलित हैं.
इसके अलावा एक प्रमाणित डीलर, पूछताछ, ऑन रोड़ कीमत आदि के बारे में भी जानकरी मिलती है. इसके अलावा लोन, कृषि उपकरण, ऑफर, ब्रोकर डीलर आदि के लिए भी अलग अलग सेगमेंट है जिसके बारे में जानकारी मिलती है.
<br><br>
ऑनलाइन सही दामों पर खरीदे ट्रैक्टर्स :-
<br>
ट्रैक्टर ज्ञान में नए पुराने ट्रैक्टर की जानकारी भी दी जाती है. इसमें नए ट्रैक्टर की ऑनलाइन खरीदी भी की जा सकती है. ई एम आई की माध्यम से भी आप ट्रैक्टर की खरीदी कर सकते है. इसकी अधिक जानकारी के लिए हमारे होम पेज पर जा कर भी जानकारी बटोर सकते है. </p>
</div>
  </div>
</div>
@endif
@if($url1==$tyre_url)
<div class="content">
    <div class="row footer-row1">
    <div class="col-md-12 container footer-contents">
  <p>किसान भारत जैसे देश के लिए बहुत महत्वपूर्ण संपत्ति हैं, जहां 73% आबादी अभी भी गांवों में रह रही है, और कृषि राष्ट्रीय जीडीपी में 17% योगदान देती है। भारतीय किसानों और भारतीय कृषि स्थितियों की मांग को ध्यान में रखते हुए उचित ट्रैक्टर टायर का चयन करना बहुत महत्वपूर्ण है।
1 9 30 के दशक में रबर ट्रैक्टर टायर उम्र के आए थे। उसके बाद अधिकांश ट्रैक्टरों में धातु के लग्स के साथ स्टील पहियों थे। उन्होंने मैदान में काम करते समय उत्कृष्ट कर्षण प्रदान किया, लेकिन जब कठिन जमीन पर सवारी मोटा हो गई और अक्सर पक्की सड़कों को क्षतिग्रस्त कर दिया गया। रबर टायर्स पहले से ही सभी कारों पर उपयोग किए गए थे, और हरमन गॉर्टजेन ने तर्क दिया कि वे अधिक शक्तिशाली साबित होंगे, पेट्रोल की खपत में सुधार करेंगे, कम धूल को लात मारेंगे और इस्पात संस्करणों की तुलना में कहीं अधिक आरामदायक सवारी प्रदान करेंगे।
<br><br>
अपने टायर की खोज करने के लिए आपको आवश्यक टायर आकार को जानने की आवश्यकता है। टायर आकार कई अलग-अलग प्रारूपों में लिखा जा सकता है। आकार लगभग हमेशा टायर साइडवॉल पर लिखा जाता है और ट्रैक्टर टायर के लिए '16 .9-28 'या' 420/85r28 'जैसे कुछ दिखाई देगा। पहला प्रकार (16.9-28) इंच में लिखित इंपीरियल है, और दूसरा नया मेट्रिक अंकन अब कई निर्माताओं द्वारा अपनाया जा रहा है।
दोनों आकारों के साथ अंतिम संख्या रिम (टायर के बीच में छेद का व्यास) इंच में है। पहला नंबर टायर की चौड़ाई है, और हमारे उदाहरण में यह 16.9 इंच या 420 मिमी होगा। 'आर' यदि उपहार का मतलब है कि आपके पास रेडियल निर्माण का टायर है, और '-' यदि वर्तमान का मतलब है कि टायर क्रॉसली निर्माण का है।
मीट्रिक आकार (420/85 आर 28) आपको चौड़ाई के बाद प्रोफाइल प्रतिशत बताते हैं, यहां यह 85% प्रोफाइल है (इसका मतलब है कि टायर पर साइड दीवारें 85% टायर की चौड़ाई के रूप में लंबी हैं)। इस प्रोफ़ाइल को अनदेखा किया जा सकता है यदि आपके टायर का आकार इंपीरियल में लिखा गया है क्योंकि यह नहीं दिया गया है।
<br><br>
रेडियल टायरों का 1 9 46 में आविष्कार किया गया था और टायर के साइडवॉल और टायर को दो स्वतंत्र सुविधाओं के रूप में काम करने की अनुमति मिलती है। एक रेडियल टायर की लचीलापन, इसकी ताकत के साथ, दो संयुक्त कारक हैं जिनका अर्थ है एक रेडियल ट्रैक्टर टायर एक क्रॉसली टायर की तुलना में प्रभाव सदमे को प्रभावित करता है और अधिक प्रभावी ढंग से टक्कर देता है।
यह आपको और आपकी मशीन को अधिक आरामदायक सवारी देता है और ड्राइवर को लंबे समय तक काम करने की अनुमति देता है। साइडवेल की लचीलापन वाहन स्थिरता को बढ़ाती है और सड़क की सतह के साथ टायर के अधिकतम संपर्क प्रदान करती है। जमीन के साथ यह बेहतर संपर्क टायर ट्रेड पर पहनने को कम करता है जिसका अर्थ है रेडियल टायर क्रॉसप्ले टायर से अधिक समय तक चलते हैं। यह मिट्टी के टुकड़े को कम करने वाले जमीन पर वजन फैलाने में भी मदद करता है। रेडियल टायरों में उच्च गति रेटिंग होती है, इसलिए कुछ तेज सड़क चलने वाली मशीनों के लिए रेडियल टायर एकमात्र उपयोग योग्य विकल्प होते हैं। रैडियल टायर क्रॉसप्ले विकल्पों की तुलना में अधिक महंगा होते हैं, इसलिए एक निवेश के रूप में देखा जा सकता है जो लंबे समय तक भुगतान करेगा दौड़ना।
<br><br>
क्रॉसप्ले टायर बहुत लंबे समय तक रहे हैं और जबकि रेडियल टायर के फायदेमंद की पेशकश नहीं करते हैं, वे सस्ता हैं, और कुछ अनुप्रयोगों में पसंदीदा विकल्प हैं। क्रॉसप्ले टायरों में रेडियल टायर की तुलना में कठोर टायर के किनारे होते हैं, और इसलिए फुटपाथ पेंचर्स से बचने के लिए बेहतर होता है, उदाहरण के लिए वानिकी उपयोग में फायदे हैं। वे रेडियल टायर की तुलना में कम निलंबन भी देते हैं जो उदाहरण के लिए फोर्कलिफ्ट ट्रक और कैंची लिफ्टों पर एक फायदा हो सकता है जिसके लिए एक दृढ़ सवारी की आवश्यकता होती है। इस आलेख को पढ़कर रेडियल बनाम क्रॉसप्ली के बारे में और जानें।
<br><br>
एक प्लाई रेटिंग एक टायर लोड इंडेक्स के समान होती है और यह एक टायर की ताकत का संकेत / माप है, जो आपको अधिकतम वजन बता रहा है कि कृषि और औद्योगिक टायर सुरक्षित रूप से ले जा सकते हैं। एक उच्च प्लाई रेटिंग वाले टायर अधिक वजन लेते हैं लेकिन उनके बेहतर निर्माण और उपयोग की जाने वाली अतिरिक्त सामग्री के कारण अधिक लागत अधिक होती है। प्लाई रेटिंग आमतौर पर केवल क्रॉसप्ली निर्माण के टायर पर दी जाती है, नए रेडियल टायरों में इसके बजाय लोड इंडेक्स नंबर होना चाहिए। आम तौर पर, आपको वर्तमान में आपके पास कम प्लाई रेटिंग पर स्विच नहीं करना चाहिए। आप आमतौर पर इस्तेमाल किए गए टायर की प्लाई रेटिंग को बढ़ा सकते हैं, लेकिन उच्च टायर को ध्यान में रखते हुए एक टायर को रेटिंग करने के लिए एक टायर की रेटिंग आमतौर पर बन जाती है। यह टायर साइडवॉल में पेंचर से बचने में मदद करने में फायदेमंद हो सकता है, लेकिन निलंबन / कुशनिंग को कम कर सकता है जिसे आप अपनी मशीन की सवारी करते हैं।
<br><br>
लोड इंडेक्स अधिकतम वजन है जो ट्रैक्टर और कृषि टायर सुरक्षित रूप से समर्थन कर सकते हैं। यह एक संख्या द्वारा दर्शाया गया है: जितना अधिक यह संख्या टायर ले जा सकती है उतनी अधिक वजन है। वाहन की सुरक्षा के लिए यह अनिवार्य है और इसके निवासियों को उच्च पर्याप्त गति और लोड इंडेक्स के साथ टायर चुना जाता है। गति और लोड इंडेक्स और अन्य सभी टायर मार्किंग के बारे में और जानने के लिए, हमारे टायर आकार गाइड पर एक नज़र डालें।
<br><br>
ट्यूब (टीटी) और ट्यूबललेस (टीएल) ट्रैक्टर टायर क्या हैं?
ट्यूबेड प्रकार (टीटी) ट्रैक्टर और कृषि टायर के पास टायर के अंदर एक अलग ट्यूब लगाई जाती है जिसे अक्सर टायर के लिए अलग से खरीदा जाता है। ट्यूबललेस टायर्स (टीएल) का अपना आंतरिक लाइनर होता है जो रिम से लीक को रोकता है और पंचर द्वारा किए गए नुकसान को कम करता है। इसलिए उन्हें खरीदे जाने के लिए एक अलग ट्यूब की आवश्यकता नहीं होती है (यदि आप रिम्स अच्छी स्थिति में हैं)। ट्यूबललेस ट्रैक्टर टायर्स अति ताप करने के लिए अधिक प्रतिरोधी हैं, लेकिन यदि टायर ठीक से फिट नहीं किया गया है या यदि रिम्स पुराने या क्षतिग्रस्त हैं तो वायु रिसाव हो सकता है। ट्यूब-प्रकार और ट्यूबललेस टायर्स पर इस लेख को पढ़कर और जानें।
भारत में शीर्ष ट्रैक्टर टायर ब्रांड:
<br>
नीचे शीर्ष ट्रैक्टर टायर ब्रांड हैं जो किसानों के लिए बिल्कुल सही हैं। ये ब्रांड किसानों के आराम के लिए उन्नत टायर प्रदान करते हैं। इसलिए, वे खरीद के लिए उपयुक्त हैं।
<br><br>
अपोलो टायर<br>
बीकेटी टायर<br>
अच्छा साल टायर<br>
सीट टायर<br>
एमआरएफ टायर<br>
बिड़ला टायर<br>
जेके टायर<br>
<br>
अपने कृषि और औद्योगिक टायरों को गिट्टी करना आंशिक रूप से टायर या आंतरिक ट्यूब को पानी से भरना शामिल है। यह गुरुत्वाकर्षण के केंद्र को कम करने और असमान जमीन से निपटने में मदद करने के लिए मशीन को स्थिर करने के लिए किया जाता है। और अधिक जानकारी प्राप्त करें।
ओवर-फुलाए गए कृषि और कृषि टायर मिट्टी की संघनन, ईंधन की खपत और मशीन और टायर में पहनने में वृद्धि कर सकते हैं। मिट्टी और फसलों को भी खराब हो सकता है, जिसमें कॉम्पैक्शन परत को तोड़ने के लिए भारी निवेश की आवश्यकता होती है। इसके विपरीत, मुद्रास्फीति का अर्थ है कि गतिशीलता का सामना करना पड़ेगा और अपरिवर्तनीय क्षति आपके कृषि और औद्योगिक टायर के आवरणों को किया जाएगा। और अधिक जानकारी प्राप्त करें।</p>
</div>
  </div>
</div>
@endif
<div class="sort-icon" id="myBtn">
   <div class="sort-text">
   <img data-src="https://images.tractorgyan.com/uploads/103914/642fa913aa183_sort_icon.png" src="https://images.tractorgyan.com/uploads/lazy-load-tractorgyan.png" alt="sort icon" loading="lazy">
   <h4>{{ trans('mini-tractor.miniDetail.sort_hp') }}</h4>
</div>
<span class="line-in-function"></span>
<div class="mini-tractor-filter">
<img data-src="https://images.tractorgyan.com/uploads/104095/644ba61bb76fc_filter-(1).png" src="https://images.tractorgyan.com/uploads/lazy-load-tractorgyan.png" alt="filter icon" loading="lazy" class="filter-image">
  <h4>{{ trans('mini-tractor.miniDetail.filter') }}</h4>
</div>
<span class="line-in-function"></span>
<div class="sort-reset"><h4>{{ trans('mini-tractor.miniDetail.reset') }}</h4></div>
</div>
<div class="loader-section">
<div class="loader"></div>
</div>
  <a href="#" class="back-to-top-badge back-to-top-small"><i class="fa fa-angle-up"></i>Back to Top</a> </div>
 <!--trator load using ajax script-->
         <div class ="modal">
         <div class="sort-section">
         <i class="fa fa-times close-btn"></i>
         <h2  class="fs-18 t-a-c sort-heading"><strong>
          @if(Session::get('locale') == 'hi') 
          {{ trans('brand.brandPage.mini') }} {{ trans('brand.brandPage.hp_wise') }} {{ trans('brand.brandPage.sort') }}
          @else
          {{ trans('brand.brandPage.sort') }} {{ trans('brand.brandPage.mini') }} {{ trans('brand.brandPage.hp_wise') }}
          @endif
        </strong></h2>
         <div align="center" class="sort-section-popup">
            <ul style="padding : 0px !important">
            <li class="sort-list">
            <a class="sorting-tractor below-20" id="hp1"  href="javascript:void();" onclick="return hp_search(20, 'Below 20 HP Tractors')"><strong>{{ trans('home.topbreadcrumbs.20hp') }} </strong></a> 
            <a class="sorting-tractor bw-20-30" id="hp2" href="javascript:void();" onclick="return hp_search(30, '21 HP To 30 HP Tractors')"><strong>{{ trans('home.topbreadcrumbs.30hp') }}</strong></a> 
            </li>
            <li class="sort-list">
            <a class="sorting-tractor bw-30-40" id="hp3" href="javascript:void();" onclick="return hp_search(40, '31 HP To 40 HP Tractors')"><strong>{{ trans('home.topbreadcrumbs.40hp') }} </strong></a>
            </li>
         </ul>
         </p>
         </div>
         </div>
      </div>
      <div class="filter-modal">
      <div class="filter-section">
          <i class="fa fa-times close-btn"></i>
          <h2  class="fs-18 t-a-c sort-heading"><strong>
          @if(Session::get('locale') == 'hi') 
            {{ trans('brand.brandPage.mini') }} {{ trans('mini-tractor.miniDetail.brands') }} 
            @else
            {{ trans('mini-tractor.miniDetail.filter') }}  {{ trans('brand.brandPage.mini') }} {{ trans('mini-tractor.miniDetail.brands') }}
            @endif
          </strong></h2>
          <div align="center" class="sort-section-popup">
          <ul class="filter-ul-list">
            <li class="sort-list">
            <a href="{{url('/')}}/mini-tractors-in-india/mahindra" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.mahindra') }} </strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/swaraj" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.swaraj') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/farmtrac" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.farmtrac') }}</strong></a>
            </li>
            <li class="sort-list">
            <a href="{{url('/')}}/mini-tractors-in-india/eicher" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.eicher') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/john-deere" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.john-deer') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/new-holland" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.new-holland') }}</strong></a>
            </li>
            <li class="sort-list">
            <a href="{{url('/')}}/mini-tractors-in-india/massey-ferguson" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.massey-fergueson') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/cnh-industrial" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.cnh-industrial') }}</strong></a>  
            <a href="{{url('/')}}/mini-tractors-in-india/same-deutz-fahr" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.same-duez') }}</strong></a> 
            </li>
            <li class="sort-list">
            <a href="{{url('/')}}/mini-tractors-in-india/powertrac" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.power-track') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/preet" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.preet') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/vst-shakti" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.vst-shakti') }}</strong></a>
            </li>
            <li class="sort-list">
            <a href="{{url('/')}}/mini-tractors-in-india/standard" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.standard') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/sonalika" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.sonalika') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/hmt" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.hmt') }}</strong></a>
            </li>
            <li class="sort-list">
            <a href="{{url('/')}}/mini-tractors-in-india/trakstar" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.tracstar') }}</strong></a>
            <a href="{{url('/')}}/mini-tractors-in-india/force" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.force') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/kubota" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.kubota') }}</strong></a>
            </li>
            <li class="sort-list">
            <a href="{{url('/')}}/mini-tractors-in-india/ace" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.ace') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/captain" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.captain') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/escort" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.escort') }}</strong></a>
            </li>
            <li class="sort-list">
            <a href="{{url('/')}}/mini-tractors-in-india/josh" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.josh') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/digitrac" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.digitrac') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/solis" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.solis') }}</strong></a>
            </li>
            <li class="sort-list">
            <a href="{{url('/')}}/mini-tractors-in-india/hav" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.hav') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/cellestial" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.cellestial') }}</strong></a> 
            <a href="{{url('/')}}/mini-tractors-in-india/kartar" class="sorting-tractors filter-href"><strong>{{ trans('mini-tractor.miniDetail.kartar') }}</strong></a> 
            </li>
            <li>
            <a href="{{url('/')}}/mini-tractors-in-india/indo-farm" style="width : 27% !important;" class="sorting-tractors filter-href chn-industry"><strong>{{ trans('mini-tractor.miniDetail.indo-farm') }}</strong></a>
            </li>
         </ul>
          </div>
      </div>
      </div>
<div id="new-footer">
<div class="container-fluid headingfirst footer-row2">
    <div class="row footer-rows">
    <div class="col-6 popular_searches_left" id="pop-searches">
  <h3 class="footer-row-h4 footer-row-heading footer-two-heading">{{ trans('footer.popular_searches.title') }}</h3> 
    <a href="{{ url('') }}/tyre/mrf-tractor-tyre-in-india" title="MRF Tractor Tyres">{{ trans('footer.popular_searches.MRF_Tractor_Tyres') }}</a>
    <a href="{{ url('') }}/tractor-implements-in-india/rotavator" title="Rotavators">{{ trans('footer.popular_searches.Rotavators') }}</a>
    <a href="{{ url('') }}/tyre/apollo-tractor-tyre-in-india" title="Apollo Tractor Tyres">{{ trans('footer.popular_searches.Apollo_Tractor_Tyres') }}</a>
    <a href="{{ url('') }}/tractor-implements-in-india/backhoe-loader" title="Backhoe Loaders">{{ trans('footer.popular_searches.Backhoe_Loaders') }}</a>
    <a href="{{ url('') }}/tractor-implements/rotavator/shaktiman-regular-plus/38" title="Shaktiman Regular Plus Rotavator">{{ trans('footer.popular_searches.Shaktiman_Regular_Plus_Rotavator') }}</a>
    <a href="{{ url('') }}/tyre/mrf-tractor-front-3-rib-tyre-in-india/13" title="MRF 3 Rib Tractor Tyre">{{ trans('footer.popular_searches.MRF_3_Rib_Tractor_Tyre') }}</a>
    <a href="{{ url('') }}/tractor-implements-in-india/power-tiller" title="Power Tillers">{{ trans('footer.popular_searches.Power_Tillers') }}</a>
    <a href="{{ url('') }}/tractor-implements-in-india/combine-harvester" title="Combine Harvesters">{{ trans('footer.popular_searches.Combine_Harvesters') }}</a>
    <a href="{{ url('') }}/tractor-implements/backhoe-loader/jcb-3dx-xtra/8" title="JCB 3DX XTRA">{{ trans('footer.popular_searches.JCB_3DX_XTRA') }}</a>
    <a href="{{ url('') }}/tractor-implements-in-india/cultivator" title="Cultivators">{{ trans('footer.popular_searches.Cultivators') }}</a>
    <a href="{{ url('') }}/tyre/mrf-tractor-front-shakti-super-tyre-in-india/18" title="MRF Shakti Super Tractor Tyre ">{{ trans('footer.popular_searches.MRF_Shakti_Super_Tractor_Tyre') }} </a>
    <a href="{{ url('') }}/tractor-implements-in-india/tipping-trailer" title="Tipping Trailers">{{ trans('footer.popular_searches.Tipping_Trailers') }}</a>
    <a href="{{ url('') }}/tyre/ceat-tractor-tyre-in-india" title="Ceat Tractor Tyres">{{ trans('footer.popular_searches.Ceat_Tractor_Tyres') }}</a>
    <!-- <span class="popular_searches_left_see_more footer-see-more footer-arrow-link">></span>
    <span class="popular_searches_left_see_less footer-see-more footer-arrow-link"><a href="#new-footer">></a></span> -->
    </div>
    <div class="col-6 popular_searches_right" style="padding-left:15px!important;" id="top-india">
  <h4 class="footer-row-h4 footer-row-heading footer-two-heading top-footer-heading">{{ trans('footer.top_in_india.title') }}</h4> 
    <a href="{{ url('') }}/tractor/swaraj-855-fe/23" title="Swaraj 855">{{ trans('footer.top_in_india.Swaraj_855') }}</a>
    <a href="{{ url('') }}/tractor/mahindra-575-di-xp-plus/440" title="Mahindra 575">{{ trans('footer.top_in_india.Mahindra_575') }}</a>
    <a href="{{ url('') }}/tractor/john-deere-5310-gear-pro-4-wd-trem-iv/1029" title="John Deere 5310">{{ trans('footer.top_in_india.John_Deere_5310') }}</a>
    <a href="{{ url('') }}/tractor/new-holland-3630-tx-special-edition/1142" title="New holland 3630">{{ trans('footer.top_in_india.New_holland_3630') }}</a>
    <a href="{{ url('') }}/tractor/swaraj-744-fe/141" title="Swaraj 744">{{ trans('footer.top_in_india.Swaraj_744') }}</a>
    <a href="{{ url('') }}/tractor/powertrac-euro-50-powerhouse/1053" title="Powertrac Euro 50">{{ trans('footer.top_in_india.Powertrac_Euro_50') }}</a>
    <a href="{{ url('') }}/tractor/massey-ferguson-1035-di-maha-shakti/404" title="Massey Ferguson 1035">{{ trans('footer.top_in_india.Massey_Ferguson_1035') }}</a>
    <a href="{{ url('') }}/tractor/swaraj-735-fe-e/1034" title="Swaraj 735">{{ trans('footer.top_in_india.Swaraj_735') }}</a>
    <a href="{{ url('') }}/tractor/eicher-380-4wd-prima-g3/1074" title="Eicher 380">{{ trans('footer.top_in_india.Eicher_380') }}</a>
    <a href="{{ url('') }}/tractor/farmtrac-45-powermaxx/1155" title="Farmtrac 45">{{ trans('footer.top_in_india.Farmtrac_45') }}</a>
    <a href="{{ url('') }}/tractor/sonalika-di-750-iii-sikandar/519" title="Sonalika 750">{{ trans('footer.top_in_india.Sonalika_750') }}</a>
    <a href="{{ url('') }}/tractor/mahindra-475-di-xp-plus/467" title="Mahindra 475">{{ trans('footer.top_in_india.Mahindra_475') }}</a>
    </div>
    <div class="center-btn-arrow center-btn-arrow1">
    <span class="popular_searches_right_see_more footer-see-more footer-arrow-link">></span>
    <span class="popular_searches_right_see_less footer-see-more footer-arrow-link"><a href="#new-footer">></a></span>
</div>
</div>
</div>
<div class="container-fluid headingfirst footer-row2 m-b-footer">
    <div class="row footer-rows">
      <div class="col-6 popular_second_left  pop-second-hand" style="padding-left:15px!important;" id="pop-second">
  <h4 class="footer-row-h4 footer-row-heading footer-two-heading">{{ trans('footer.secondhandTractor.title') }}</h4> 
  <a href="{{ url('') }}/old-tractor/Mahindra-second-hand-old-tractor-in-all-condition-in-all-city-in-all-state"  title="Mahindra Second hand Tractors">{{ trans('footer.secondhandTractor.mahindra_oldtractor') }}</a>
  <a href="{{ url('') }}/old-tractor/Swaraj-second-hand-old-tractor-in-all-condition-in-all-city-in-all-state"  title="Swaraj Second hand Tractors">{{ trans('footer.secondhandTractor.swaraj_oldtractor') }}</a>
  <a href="{{ url('') }}/old-tractor/Eicher-second-hand-old-tractor-in-all-condition-in-all-city-in-all-state"  title="Eicher Second hand Tractors">{{ trans('footer.secondhandTractor.eicher_oldtractor') }}</a>
  <a href="{{ url('') }}/old-tractor/John-deere-second-hand-old-tractor-in-all-condition-in-all-city-in-all-state"  title="John deere Second hand Tractors">{{ trans('footer.secondhandTractor.johndeere_oldtractor') }}</a>
  <a href="{{ url('') }}/old-tractor/New-holland-second-hand-old-tractor-in-all-condition-in-all-city-in-all-state"  title="New holland Second hand Tractors">{{ trans('footer.secondhandTractor.newholland_oldtractor') }}</a>
  <a href="{{ url('') }}/old-tractor/Massey-ferguson-second-hand-old-tractor-in-all-condition-in-all-city-in-all-state"  title="Massey ferguson Second hand Tractors">{{ trans('footer.secondhandTractor.massey_oldtractor') }}</a>
  <a href="{{ url('') }}/old-tractor/Sonalika-second-hand-old-tractor-in-all-condition-in-all-city-in-all-state"  title="Sonalika Second hand Tractors">{{ trans('footer.secondhandTractor.sonalika_oldtractor') }}</a>
  <a href="{{ url('') }}/old-tractor/Farmtrac-second-hand-old-tractor-in-all-condition-in-all-city-in-all-state"  title="Farmtrac Second hand Tractors">{{ trans('footer.secondhandTractor.farmtrac_oldtractor') }}</a>
  <a href="{{ url('') }}/old-tractor/Kubota-second-hand-old-tractor-in-all-condition-in-all-city-in-all-state"  title="Kubota Second hand Tractors">{{ trans('footer.secondhandTractor.kubota_oldtractor') }}</a>
  <a href="{{ url('') }}/old-tractor/Powertrac-second-hand-old-tractor-in-all-condition-in-all-city-in-all-state"  title="Powertrac Second hand Tractors">{{ trans('footer.secondhandTractor.powertrac_oldtractor') }}</a>
</div>
<div class="col-6" style="padding-left:15px!important;" id="dealer-locate">
<div class="popular_second_right footer-row-col6">
<h4 class="footer-row2-h4 footer-row-heading footer-two-heading">{{ trans('footer.tractorDealer.title') }}</h4> 
<a href="{{ url('') }}/tractor-dealers/uttar-pradesh" target="_blank" title="Tractor Dealers/showroom in Uttar Pradesh">{{ trans('footer.tractorDealer.up_dealer') }}</a>
  <a href="{{ url('') }}/tractor-dealers/madhya-pradesh" target="_blank" title="Tractor Dealers/showroom in Madhya Pradesh">{{ trans('footer.tractorDealer.mp_dealer') }}</a>
  <a href="{{ url('') }}/tractor-dealers/maharashtra" target="_blank" title="Tractor Dealers/showroom in Maharashtra">{{ trans('footer.tractorDealer.maharashtra_dealer') }}</a>
  <a href="{{ url('') }}/tractor-dealers/rajasthan" target="_blank" title="Tractor Dealers/showroom in Rajasthan">{{ trans('footer.tractorDealer.rajasthan_dealer') }}</a>
   <a href="{{ url('') }}/tractor-dealers/haryana" target="_blank" title="Tractor Dealers/showroom in Haryana">{{ trans('footer.tractorDealer.haryana_dealer') }}</a>
   <a href="{{ url('') }}/tractor-dealers/karnataka" target="_blank" title="Tractor Dealers/showroom in Karnataka">{{ trans('footer.tractorDealer.karnataka_dealer') }}</a>
  <a href="{{ url('') }}/tractor-dealers/gujarat" target="_blank" title="Tractor Dealers/showroom in Gujarat">{{ trans('footer.tractorDealer.gujarat_dealer') }}</a>
  <a href="{{ url('') }}/tractor-dealers/telangana" target="_blank" title="Tractor Dealers/showroom in Telangana">{{ trans('footer.tractorDealer.telangana_dealer') }}</a>
  <a href="{{ url('') }}/tractor-dealers/bihar" target="_blank" title="Tractor Dealers/showroom in Bihar">{{ trans('footer.tractorDealer.bihar_dealer') }}</a>
</div>
</div>
<div class="center-btn-arrow center-btn-arrow2">
<span class="popular_second_right_see_more footer-see-more footer-arrow-link">></span>
  <span class="popular_second_right_see_less footer-see-more footer-arrow-link"><a href="#new-footer">></a></span>
</div>
  </div>
  </div>  
  <div class="container-fluid headingfirst footer-row2 m-b-footer">
    <div class="row footer-rows">
  <h4 class="footer-row2-h4 footer-row-heading">{{ trans('footer.top_in_india.quick_links') }}</h4> 

<div class="quick-link" style="padding-left:30px!important;">
<div class="footer-row-col6 quicks1">
<a href="{{url('/tractors')}}" title="New Tractors">{{ trans('footer.offering.new_tractors') }}</a>
<a href="{{url('/compare-tractors')}}" title="Compare Tractors">{{ trans('footer.offering.compare_tractors') }}</a>
<a href="{{url('/tractor-on-road-price')}}" title="Tractor Price">{{ trans('footer.offering.tractor_price') }}</a> 
<a href="{{url('/buy-old-tractor')}}" title="Buy second hand tractor">{{ trans('footer.offering.buy_tractors') }}</a> 
<a href="{{url('sell-old-tractor')}}" title="Sell second hand tractor">{{ trans('footer.offering.sell_tractors') }}</a> 
</div>
<div class="footer-row-col6">
<a href="{{url('mini-tractors-in-india') }}" title="Mini Tractor">{{ trans('footer.offering.mini_tractors') }}</a>
<a href="{{url('tractor-review') }}" title="Write Tractor Review">{{ trans('footer.offering.tractor_reviews') }}</a> 
<a href="{{url('tractor-dealers-in-india')}}" title="Find Tractor Dealer">{{ trans('footer.offering.tractor_dealers') }}</a> 
<a href="{{url('tractor-emi-calculator') }}" title="EMI Calculator">{{ trans('footer.offering.tractor_emi') }}</a>
<a href="{{url('tractor-industry-news-blogs/category/tractor-news') }}" title="Tractor News">{{ trans('footer.offering.tractor_news') }}</a> 
</div>
<div class="footer-row-col6">
<a href="{{url('4wd-tractors-in-india') }}" title="4WD Tractor">{{ trans('footer.offering.4wd_tractors') }}</a>
<a href="{{url('/tractor-videos') }}" title="Tractor Videos"> {{ trans('footer.offering.tractor_videos') }}</a> 
<a href="{{url('tractor-implements-in-india') }}" title="Tractor implements"> {{ trans('footer.offering.tractor_implements') }}</a>
<a href="{{url('tractor-tyre-in-india') }}" title="Tractor tyre"> {{ trans('footer.offering.tractor_tyres') }}</a>    
<a href="{{url('ac-tractors-in-india') }}" title="AC Tractor">   {{ trans('footer.offering.ac_tractors') }}</a>
</div>
  </div>
</div>
    </div>
  </div>  
<div class="footer footer-dark">
<div class="content">
<h4 class="footer-dark-h4">{{ trans('footer.toptractorBrand.title') }}</h4> 
<div class="store-links half-bottom footer-top" style="margin-left : 10%">
	<a href="{{ url('tractor/Mahindra')}}" title="Mahindra Tractors">
    <img class="fas lazyload class footer-top-brand-image" data-src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://images.tractorgyan.com/uploads/smm/images/tractor_Brand_logo/mahindra.png')) }}"  alt="Mahindra Tractors"><span class="footer-brands"> {{ trans('footer.toptractorBrand.mahindra') }}</span>
    </a>
	<a href="{{ url('tractor/Massey-ferguson')}}" title="Massey ferguson Tractors">
    <img class="fas lazyload class footer-top-brand-image" data-src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://images.tractorgyan.com/uploads/smm/images/tractor_Brand_logo/massey_ferguson.png')) }}" class="footer-top-brand-image"  alt="Massey ferguson Tractors"><span class="footer-brands">{{ trans('footer.toptractorBrand.massey_ferguson') }}</span>
    </a>	
    <a href="{{ url('tractor/Swaraj')}}" title="Swaraj Tractors">
    <img class="fas lazyload class footer-top-brand-image" data-src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://images.tractorgyan.com/uploads/smm/images/tractor_Brand_logo/Swaraj.png')) }}"  class="footer-top-brand-image"  alt="Swaraj Tractors"> <span class="footer-brands">{{ trans('footer.toptractorBrand.swaraj') }}</span>
    </a>
    <a href="{{ url('tractor/Sonalika')}}" title="Sonalika Tractors">
    <img class="fas lazyload class footer-top-brand-image" data-src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://images.tractorgyan.com/uploads/smm/images/tractor_Brand_logo/sonalika.png')) }}"  class="footer-top-brand-image"  alt="Sonalika Tractors"> <span class="footer-brands">{{ trans('footer.toptractorBrand.sonalika') }} </span>
    </a>
    <a href="{{ url('tractor/Eicher')}}" title="Eicher Tractors">
    <img class="fas lazyload class footer-top-brand-image" data-src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://images.tractorgyan.com/uploads/smm/images/tractor_Brand_logo/eicher-logo.png')) }}"  class="footer-top-brand-image"  alt="Eicher Tractors"> <span class="footer-brands">{{ trans('footer.toptractorBrand.eicher') }}</span>
    </a>
    <a href="{{ url('tractor/Farmtrac')}}" title="Farmtrac Tractors">
    <img class="fas lazyload class footer-top-brand-image" data-src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://images.tractorgyan.com/uploads/smm/images/tractor_Brand_logo/farmtrac.png')) }}"  class="footer-top-brand-image"  alt="Farmtrac Tractors"> <span class="footer-brands">{{ trans('footer.toptractorBrand.farmtrac') }}</span>
    </a>
    <a href="{{ url('tractor/John-deere')}}" title="John deere Tractors">
    <img class="fas lazyload class footer-top-brand-image" data-src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://images.tractorgyan.com/uploads/smm/images/tractor_Brand_logo/John_deere.jpg')) }}"  class="footer-top-brand-image"  alt="John deere Tractors"> <span class="footer-brands">{{ trans('footer.toptractorBrand.john_deere') }}</span>
    </a>
    <a href="{{ url('tractor/Kubota')}}" title="Kubota Tractors">
    <img class="fas lazyload class footer-top-brand-image" data-src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://images.tractorgyan.com/uploads/smm/images/tractor_Brand_logo/kubota.png')) }}"  class="footer-top-brand-image"  alt="Kubota Tractors"> <span class="footer-brands">{{ trans('footer.toptractorBrand.kubota') }}</span>
    </a>
    <a href="{{ url('tractor/New-holland')}}" title="New holland Tractors">
    <img class="fas lazyload class footer-top-brand-image" data-src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://images.tractorgyan.com/uploads/smm/images/tractor_Brand_logo/new_holland.png')) }}"  class="footer-top-brand-image"  alt="New holland Tractors"> <span class="footer-brands">{{ trans('footer.toptractorBrand.new_holland') }}</span>
    </a>
    <a href="{{ url('tractor/Powertrac')}}" title="Powertrac Tractors">
    <img class="fas lazyload class footer-top-brand-image" data-src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://images.tractorgyan.com/uploads/smm/images/tractor_Brand_logo/powertrac.png')) }}"  class="footer-top-brand-image"  alt="Powertrac Tractors"> <span class="footer-brands">{{ trans('footer.toptractorBrand.powertrac') }}</span>
    </a>
<div class="clear"></div>
	</div>	
<div class="clear"></div>
 </div>
<h5 class="top-brands-heading">{{ trans('footer.aboutUS.title') }}</h5> 
<div class="store-links half-bottom footer-top footer-top-div-10 footer-brand-link">
  <a href="{{ url('/about')}}">
  <picture>
  <source srcset="{{ str_replace('png','webp','https://tractorgyan.com/uploads/smm/icons/iconaboutus-01.png') }}" type="image/webp">
  <source srcset="{{ 'https://tractorgyan.com/uploads/smm/icons/iconaboutus-01.png' }}" type="image/png"> 
  <img src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://tractorgyan.com/uploads/smm/icons/iconaboutus-01.png')) }}" class="fas footer-second-image" width="20" height="20" alt="about us">
</picture> <span class="footer-brands3">{{ trans('footer.aboutUS.about_us') }}</span></a>
  <a href="{{ url('/our-contacts')}}">
 <picture>
  <source srcset="{{ str_replace('png','webp','https://tractorgyan.com/uploads/smm/icons/iconcontactus-01.png') }}" type="image/webp">
  <source srcset="{{ 'https://tractorgyan.com/uploads/smm/icons/iconcontactus-01.png' }}" type="image/png"> 
  <img src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://tractorgyan.com/uploads/smm/icons/iconcontactus-01.png')) }}" class="fas footer-second-image" width="20" height="20" alt="contact us">
</picture> <span class="footer-brands3">{{ trans('footer.aboutUS.contact_us') }}</span></a> 
  <a href="{{ url('/partner')}}">
   <picture>
  <source srcset="{{ str_replace('png','webp','https://tractorgyan.com/uploads/smm/icons/iconpartnerwithus-01.png') }}" type="image/webp">
  <source srcset="{{ 'https://tractorgyan.com/uploads/smm/icons/iconpartnerwithus-01.png' }}" type="image/png"> 
  <img src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://tractorgyan.com/uploads/smm/icons/iconpartnerwithus-01.png')) }}" class="fas footer-second-image" width="20" height="20" alt="partner with us">
</picture> <span class="footer-brands3">{{ trans('footer.aboutUS.partner') }}</span></a> 
  <a href="{{ url('/career')}}">
  <picture>
  <source srcset="{{ str_replace('png','webp','https://tractorgyan.com/uploads/smm/icons/iconscareer1-01.png') }}" type="image/webp">
  <source srcset="{{ 'https://tractorgyan.com/uploads/smm/icons/iconscareer1-01.png' }}" type="image/png"> 
  <img src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://tractorgyan.com/uploads/smm/icons/iconscareer1-01.png')) }}" class="fas footer-second-image" width="20" height="20" alt="career">
</picture> <span class="footer-brands3">{{ trans('footer.aboutUS.career') }}</span></a>
	  <a href="{{ url('/tractorjunction')}}">
   <picture>
  <source srcset="{{ str_replace('png','webp','https://tractorgyan.com/uploads/smm/icons/iconpartnerwithus-01.png') }}" type="image/webp">
  <source srcset="{{ 'https://tractorgyan.com/uploads/smm/icons/iconpartnerwithus-01.png' }}" type="image/png"> 
  <img src="{{ str_replace('.jpg','_small.webp',str_replace('.png','_small.webp','https://tractorgyan.com/uploads/smm/icons/iconpartnerwithus-01.png')) }}" class="fas footer-second-image" width="20" alt="tractorjunction">
</picture><span class="footer-brands3">{{ trans('footer.aboutUS.Tractor_Junction') }}</span></a> 
<div class="clear"></div>
 </div>
<h5 class="footer-dark-h5 footer-dark-h4">{{ trans('footer.newsletter.title') }} </h5> 
<div class="store-links half-bottom footer-top" style="">
 <form id="email_us" method="post" >
    <div class="emial-section">
    <input type="email"  name="email" class="contactField requiredField" id="email" placeholder="Enter Email" style="height: 45px;" required >
       <button type="submit" id="send_emailform" class=" button button-green subs-button ultrabold see-all-brands-href text-shadow" align="center" class="email-field">{{ trans('footer.newsletter.subscribe') }}</button>
    </div>
  </form>
 <div id="success_msg" class="ajax_response" style="color:#fff;"></div> 
 </div>
	<div class="clear"></div>	
<h5 class="footer-dark-h4">{{ trans('footer.follow.title') }}</h5> 
  <div style="width:100%; margin:5px auto 0px auto;padding-left:15px!important;" >
    <div>
      <center>
      <a href="https://www.facebook.com/TractorsGyan/" class="footer-social-icon scale-hover icon icon-round no-border icon-xs facebook-bg border-teal-3d" title="tractorgyan facebook"> <div class="bg-facebook"></div></a> 
		  <a href="https://twitter.com/TractorGyan" class="footer-social-icon scale-hover icon icon-round no-border icon-xs twitter-bg" title="tractorgyan twitter"> <div class="bg-twitter"></div></a> 
		  <a href="https://www.instagram.com/tractorgyan/" class="footer-social-icon scale-hover icon icon-round no-border icon-xs" title="tractorgyan instagram"><div class="bg-instagram"></div></a> 
		  <a href="https://wa.me/916263739990/?text=Hello TractorGyan!" class="footer-social-icon scale-hover icon icon-round no-border icon-xs" title="tractorgyan whatsapp"><div class="bg-whatsapp"></div></a> 
		  <a class="footer-social-icon scale-hover icon icon-round no-border icon-xs" href="https://www.youtube.com/tractorgyan/" title="tractorgyan youtube"><div class="bg-youtube"></div></a>         
      </center>
    </div>
  </div>
  <div style="width:100%; margin: 0px auto 5px auto; " align="">
    <p class="copyright-text" style="color:#FFFFFF;"> &copy;{{ date('Y') }} {{ trans('footer.follow.tractorGyan') }} | <a href="{{ url('') }}/terms-of-use" target="_blank" style="color: #fff;">{{ trans('footer.follow.terms_use') }}</a></p>
    <p class="disclaimer">The information provided by <a href="https://tractorgyan.com">TractorGyan</a> on  (the "Site") is for general informational purposes only. All the information on the Site is provided in good faith, however, we make no representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, validity, or completeness of any information on the Site.
   Third party logos and marks are registered trademarks of their respective owners. All rights reserved.</p>
  </div>	
</div>  
</div>
</div>
<div class="mobile-popup-otp" id="otpNum">
  <div class="otp-mobile-number-popup">
  <div class="close-otp">
         <span class="close-menu mb-0 close-miinu">
         <i class="fa fa-times"></i>
      </span>
   </div>
            <div class="otp-title" id="user-mob">Code has sent to</div>
            <form action="" class="otp-form">
              <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1 id=
			  'otpnumber1'>
              <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1 id=
			  'otpnumber2'>
              <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1 id=
			  'otpnumber3'>
              <input class="otp" type="text" oninput='digitValidate(this)'onkeyup='tabChange(4)' maxlength=1 id=
			  'otpnumber4'>
            </form>
            <button class='verify-mob-num' id="verify-mob-num">Verify</button>
            <div class="otp-timer" id="otp-timer"><span id="count">30</span> : Second</div>
            <div class="otp-sent" id="otp-sent">OTP Resent Successfully</div>
            <div class="otp-invalid" id="otp-invalid">Please Enter Valid OTP</div>
            <div class="not-recieved" id="not-recieved">Haven't recived the verification code ?</div>
            <button class='resend-otp-num' id="resend-otp-num" onclick="return inquiry_otp_resend()">Resend</button>
  </div>
</div>
<!--popup code here-->
<a data-deploy-menu="notification-modal-3" href="#" id="abc1" ></a>
<div class="delete-menu delete-menu-active" style="display: none;" id="active-menu"></div>
<?php $manufacture_brand = App\Manufaturedupli::select('name','id','image','url','name_en')->orderBy('sequence', 'asc')->get(); ?>
<div class="notifications-modals-3">
   <div id="notification-modal-3"  class="menu-wrapper menu-light2 menu-modal menu-models popup_enquiry-section">
      <div class="Enquiry-close-section">
      <div class="inquery-icon">
            <img loading="lazy" src="https://images.tractorgyan.com/uploads/103906/642e894982259_equairy-icon.webp" alt ="Enquiry icon">
         </div>
      <div class="close-section">
         <span class="close-menu mb-0 close-miinu">
         <i class="fa fa-times"></i>
      </span>
   </div>
      </div>
      <form action="/popup_enquiry" method="post" class="contactForm form" id="contactForm">
         {{ csrf_field() }}
         <div class="pop-up-heading">
         <h2 class=" center-text half-bottom second-same-colors enquiry-form-design">Enquiry Form</h2>
      </div>
         <div class="row contact-form sellheading mb-0 popup_enquiry-heading">
            <div class="col-6 inquiry-col-6 col-12-inquiry">
               <div class="store-product-select-box select-box select-box-2 half-bottom ">
			   <select name="manufacture_id" id="category" required="">
                  <option value="">Select Brand</option>
                  @foreach($manufacture_brand as $manufacture)
                      @if(isset($detail[0]->brand))
                        <option value="{{ trim($manufacture->name_en) }}">{{$manufacture->name}}</option>
                        @else
                        <option value="{{ $manufacture->name_en }}" >{{$manufacture->name}}</option>
                      @endif  
                    @endforeach
                </select>
               </div>
            </div>
            <div class="col-6 inquiry-col-6 col-12-inquiry">
               <div class="store-product-select-box select-box select-box-2 half-bottom ">
			   <select id="subcategory" required name="first">
                    <option value="">Select Model</option>
                </select>
               </div>
            </div>
            <div class="col-12 col-12-inquiry">
               <div class="input-col-12">
                  <div class="s-relative  form-control">
                     <input type="text" class="contactField input-field-col-12 requiredField" id="username" name="name" placeholder="Enter Your Name " required="" pattern="[a-zA-Z ]*$" title="Enter only Alphabates">
                  </div>
               </div>
               <div class="input-col-12">
                  <div class="s-relative  form-control">
                     <input type="number" id="usernumber" class="contactField input-field-col-12 requiredField" name="mobile_name" placeholder="Enter Mobile Number" required="" pattern="^\d{10}$" title="Enter 10 digit Number only (i.e. 98xxxxxx56)" onblur="getVal()">
                  </div>
               </div>
            </div>
            <div class="col-12 col-12-inquiry state-col">
               <div class="store-product-select-box select-box select-box-2 half-bottom ">
                  <select id="listBox" name="state" required="">
                     <option value="Select State">Select State</option>
                     <option value="Andhra Pradesh">Andhra Pradesh</option>
                     <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                     <option value="Assam">Assam</option>
                     <option value="Bihar">Bihar</option>
                     <option value="Chhattisgarh">Chhattisgarh</option>
                     <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                     <option value="Daman and Diu">Daman and Diu</option>
                     <option value="Delhi">Delhi</option>
                     <option value="Goa">Goa</option>
                     <option value="Gujarat">Gujarat</option>
                     <option value="Haryana">Haryana</option>
                     <option value="Himachal Pradesh">Himachal Pradesh</option>
                     <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                     <option value="Jharkhand">Jharkhand</option>
                     <option value="Karnataka">Karnataka</option>
                     <option value="Kerala">Kerala</option>
                     <option value="Madhya Pradesh">Madhya Pradesh</option>
                     <option value="Maharashtra">Maharashtra</option>
                     <option value="Manipur">Manipur</option>
                     <option value="Meghalaya">Meghalaya</option>
                     <option value="Mizoram">Mizoram</option>
                     <option value="Nagaland">Nagaland</option>
                     <option value="Orissa">Orissa</option>
                     <option value="Puducherry">Puducherry</option>
                     <option value="Punjab">Punjab</option>
                     <option value="Rajasthan">Rajasthan</option>
                     <option value="Sikkim">Sikkim</option>
                     <option value="Tamil Nadu">Tamil Nadu</option>
                     <option value="Telangana">Telangana</option>
                     <option value="Tripura">Tripura</option>
                     <option value="Uttar Pradesh">Uttar Pradesh</option>
                     <option value="Uttarakhand">Uttarakhand</option>
                     <option value="West Bengal">West Bengal</option>
                  </select>
               </div>
            </div>
            <div class="col-6 inquiry-col-6">
               <div class="store-product-select-box select-box select-box-2 half-bottom ">
                  <select id="district" name="district" placeholder="District" required="" >
                     <option value="">Select District</option>
                  </select>
               </div>
            </div>
            <div class="col-6 inquiry-col-6">
               <div class="store-product-select-box select-box select-box-2 half-bottom ">
                  <select id="tahsil" name="tahsil" placeholder="Tahsil" required="" >
                     <option value="">Select Tahsil</option>
                  </select>
               </div>
            </div>
            <div class="col-12 terms-click">
               <input type="checkbox" id="agree" class="" required="">
               <span class="terms-paragraph"><a href="/terms-of-use" target="_blank">By proceeding ahead you expressly agree to the TractorGyan Terms &amp; Condition</a></span>
            </div>
            <div class="submit-bts-pop">
               <input type="submit" id="submits" class="button uppercase" vlaue="Submit" data-formid="contactForm" onclick="start()">
            </div>
         </div>
      </form>
      <div class="modal-buttons">
      </div>
   </div>
</div>
<div id="whatsapp"><img loading="lazy" src="https://images.tractorgyan.com/uploads/105474/64afb529337b2_ezgif.com-optimize.gif" alt="whatsapp-icon"></div>


<script>
$(document).ready(function(){
$('#send_emailform').click(function(e){
    var email = $('#email').val();  
           if(email == '' )  
           {  
                $('#valid_msg').html('<span class="text-danger" style="color:red;">All Fields are required</span>');  
           }  
          else{  
   e.preventDefault();
   $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
   $('#send_emailform').html('Sending..');
      $.ajax({
      url: "{{ url('subscribe-newsletter')}}",
      method: 'post',
      data: $('#email_us').serialize(),
      success: function(data){
            $('#send_emailform').html('SUBSCRIBE');
           $('#success_msg').fadeIn().html(data);
                    setTimeout(function() {
                      $('#success_msg').fadeOut("slow");
                    }, 3000 );
            document.getElementById("email_us").reset(); 
      }});
      
          }
   });
});
$(document).ready(function(){
 $('#search_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         $.ajax({
          url:"{{ url('/search/autocomplete') }}",
          method:"POST",
          data:{query:query, "_token": "{{ csrf_token() }}"},
          success:function(data){
           $('#searchList').show();  
            $('#searchList').html(data);
          }
         });
        }else{
            $('#searchList').hide();  
        }
    });
    $(document).on('click', 'li', function(){  
        $('#search_name').val($(this).text());  
        $('#sList').submit();
    });  
});
$(document).ready(function () { 
            $('#listBox').on('change',function(e){
            console.log(e);
            var cat_id = e.target.value;
                $.get('/getdistrict/'+ cat_id,function(data){
                var subcat =  $('#district').empty();
                     $('#district option').remove();
              subcat.append('<option value = "">'+"Select District"+'</option>');
         $.each(data,function(create,subcatObj){
                    subcat.append('<option value ="'+subcatObj.district+'">'+subcatObj.district+'</option>');
                });
            });
        });
           
           
    });
$(document).ready(function () { 
            $('#district').on('change',function(e){
            console.log(e);
            var cat_id = e.target.value;
                $.get('/gettahsil/'+ cat_id,function(data){
                var subcat =  $('#tahsil').empty();
                     $('#tahsil option').remove();
              subcat.append('<option value = "">'+"Select Tahsil"+'</option>');
         $.each(data,function(create,subcatObj){
                    subcat.append('<option value ="'+subcatObj.Tehsil+'">'+subcatObj.Tehsil+'</option>');
                });
            });
        });
    });
</script>
<script src="{{url('')}}/js/lazysizes.min.js" async></script>
<script type="text/javascript" src="{{ url('mobile/scripts/plugins.js') }}"></script>
<script type="text/javascript" src="{{ url('mobile/scripts/all_common_custom.js') }}"></script>
<script type="text/javascript" src="{{ url('mobile/scripts/filter_jquery.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


