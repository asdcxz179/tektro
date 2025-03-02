@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20"
    style="background-image: url(/front/assets/images/support_warranty_thumbnail.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">{{__('front.policy')}}</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.home')}}</a>
                    </li>
                    <li class="text-white-50">{{__('front.support')}}</li>
                    <li class="text-white text-truncate">{{__('front.policy')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<div class="container">
    <div class="row mb-12 mb-md-20">
        <div class="offset-md-1 col-md-10">
            <p class="mb-5">The following information provides a simple overview of what happens to your personal data when you visit our website. Personal data are all data with which you can be personally identified. For detailed information on the subject of data protection, please refer to our data protection declaration listed below this text.</p>
            <div class="mb-5">
                <h3 class="title_h2">Your Data Security is Important to Us</h3>
                <p>Tektro and TRP Cycling recognizes privacy and security as being a concern for itself and individuals accessing the Internet. We want to explain our privacy policy and the security measures we take to protect personal information. By using our Website, you consent to the collection and use of your information by Tektro and TRP Cycling as set forth in the policy as in effect from time to time. If we decide to change our policy, the changes will be posted on the Website. You should check back periodically to ensure you have the most current policy.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">What information is collected?</h3>
                <p>Tektro and TRP Cycling may collect personally-identifiable information, including name, title, company, address, e-mail address, phone numbers, etc. We do not require this information to obtain access to any part of our Website. Our Website servers also collect the domain names of visitors to our Websites. This information is aggregated to measure number of visits, average time spent on the Tektro and TRP Cycling Web Site, pages viewed, etc. We use this information to measure the use of our Website and to improve content of our Website.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">Who is collecting the information?</h3>
                <p>When you are on a Tektro and TRP Cycling Website and are asked for personal information, you are sharing that information with Tektro and TRP Cycling, its subsidiaries and related companies. The Tektro and TRP Cycling Web Site may contain various links to third-party web sites. These sites may provide additional information, goods, services and/or promotions. These websites are owned and operated independently of Tektro and TRP Cycling, and have their own separate privacy and data collection practices. Any information you provide to these web sites will be governed under the terms of their privacy policy, if any. Tektro and TRP Cycling has no responsibility or liability whatsoever for the independent actions or policies of these independent sites, and is not responsible for the content or privacy practices of such sites.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">How is my information used?</h3>
                <p>Tektro and TRP Cycling will not provide your personal information to third-parties without your prior express consent. Tektro and TRP Cycling shares the information you provide with Tektro and TRP Cycling subsidiaries, related companies and services necessary to carry out functions of the Tektro and TRP Cycling Website such as payment gateways and processors. May match user information with third party data to help us better understand our customers (customer profiling). Tektro and TRP Cycling may also disclose aggregated user statistics in order to describe our Website to prospective business partners, advertisers, and other third parties, and for other lawful purposes. Part of the data is collected to ensure that the website is provided without errors. Other data can be used to analyze your user behavior.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">How can I manage my information?</h3>
                <p>You have the right to receive information free of charge about the origin, recipient and purpose of your stored personal data at any time. You also have the right to demand the correction, blocking or deletion of this data. For this purpose, as well as for further questions regarding data protection, you can contact us at any time at the address given below. Furthermore, you have the right to register a complaint to the responsible supervisory authority.</p>
                <a href="{{route('front.contact.index',['lang'=>$lang])}}" class="c_btn btn_dark">{{__('front.contact_form')}}</a>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">Analysis tools and third-party tools</h3>
                <p>Your personal data including information used during the online checkout process can be deleted at any time upon written request. When you visit our website, your browsing behavior can be statistically evaluated. This is mainly done with cookies and analysis programs. The analysis of your browsing behavior is usually anonymous; i.e. the browsing behavior cannot be traced back to you. You can object to this analysis or prevent it by not using certain tools. You will find detailed information on this in the following data protection declaration. You can contradict this analysis. We will inform you about the possibilities of objection in this data protection declaration.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">Data protection</h3>
                <p>The operators of these pages take the protection of your personal data very seriously. We treat your personal data confidentially and according to the legal data protection regulations as well as this privacy policy. When you use this website, various personal data is collected. Personal data is data with which you can be personally identified. This privacy policy explains what data we collect and what we use it for. It also explains how and for what purpose this is done. We would like to point out that data transmission over the Internet (e.g. communication by e-mail) can have security gaps. A complete protection of data against access by third parties is not possible. Note to the responsible authority: The party responsible for data processing on this website are: Tektro and TRP Cycling: No.138, Minzhu St., Xiushui Township, Changhua County 504, Taiwan (R.O.C)</p>
                <p>Responsible party is the natural or legal person who alone or jointly with others decides on the purposes and means of processing personal data (e.g. names, e-mail addresses, etc.).</p>
                <a href="{{route('front.contact.index',['lang'=>$lang])}}" class="c_btn btn_dark">{{__('front.contact_form')}}</a>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">Revocation of your consent to data processing</h3>
                <p>Many data processing operations are only possible with your express consent. You can revoke a previously given consent at any time. For this purpose an informal notification by e-mail to us is sufficient. The legality of the data processing carried out up to the time of revocation remains unaffected by the revocation.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">Right of complaint to the responsible supervisory authority</h3>
                <p>In the event of violations of data protection law, the person concerned has a right of appeal to the competent supervisory authority.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">Right to data portability</h3>
                <p>You have the right to have data which we process automatically on the basis of your consent or in fulfillment of a contract handed over to you or to a third party in a common, machine-readable format. If you request the direct transfer of the data to another responsible party, this will only take place to the extent that it is technically feasible.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">SSL or TLS Encryption</h3>
                <p>For security reasons and to protect the transmission of confidential content, such as orders or inquiries that you send to us as the site operator, this site uses SSL or TLS encryption. You can recognize an encrypted connection by the fact that the address line of the browser changes from “http://” to “https://” and by the lock symbol in your browser line. If the SSL or TLS encryption is activated, the data that you transmit to us cannot be read by third parties.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">Information, blocking, deletion</h3>
                <p>Within the framework of the applicable legal provisions, you have the right to obtain information free of charge at any time about your stored personal data, its origin and recipients and the purpose of the data processing and, if applicable, a right to correct, block or delete this data. For this purpose, as well as for further questions regarding personal data, you can contact us at any time. </p>
                <a href="{{route('front.contact.index',['lang'=>$lang])}}" class="c_btn btn_dark">{{__('front.contact_form')}}</a>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">Objection to advertising mails</h3>
                <p>The use of contact data published within the scope of the Website obligation for the transmission of not expressly requested advertising and information material is hereby contradicted. The operators of the website expressly reserve the right to take legal action in the event of unsolicited sending of advertising information, such as spam e-mails.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">Cookies</h3>
                <p>This Website uses cookies. Cookies do not damage your computer and do not contain viruses. Cookies serve to make our Website more user-friendly, more effective and safer. Cookies are small text files that are stored on your computer and saved by your browser. Most of the cookies we use are so-called “session cookies”. They are automatically deleted at the end of your visit. Other cookies remain stored on your end device until you delete them. These cookies enable us to recognize your browser on your next visit. You can set your browser so that you are informed about the setting of cookies and allow cookies only in individual cases, exclude the acceptance of cookies for certain cases or in general and activate the automatic deletion of cookies when closing the browser. If you deactivate cookies, the functionality of this website may be limited. Cookies that are required to carry out the electronic communication process or to provide certain functions that you have requested (e.g. shopping basket function) are stored on the basis of Art. 6 para. 1 lit. f DSGVO. The website operator has a legitimate interest in the storage of cookies for the technically error-free and optimized provision of his services. Insofar as other cookies (e.g. cookies for analyzing your surfing behavior) are stored, these are treated separately in this data protection declaration.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">Google Analytics</h3>
                <p>This website uses functions of the web analysis service Google Analytics. The provider is Google Inc, 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA. Google Analytics uses so-called “cookies”. These are text files which are stored on your computer and which enable an analysis of your use of the website. The information generated by the cookie about your use of this website is usually transferred to a Google server in the USA and stored there. The storage of Google Analytics cookies is based on Art. 6 para. 1 lit. f DSGVO. The website operator has a legitimate interest in the analysis of user behavior in order to optimize both his website and his advertising.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">Browser Plugin</h3>
                <p>You may refuse the use of cookies by selecting the appropriate settings on your browser, however please note that if you do this you may not be able to use the full functionality of this website. You can also prevent the collection of data generated by the cookie and related to your use of the website (including your IP address) to Google and the processing of this data by Google by downloading and installing the browser plugin available under the following link: <a href="https://tools.google.com/dlpage/gaoptout?hl=de" class="text-decoration-underline text-secondary" target="_blank">https://tools.google.com/dlpage/gaoptout?hl=de</a>. Opposition to data collection You can prevent Google Analytics from collecting your data by clicking on the following link. An opt-out cookie will be set to prevent the collection of your information on future visits to this site: Disable Google Analytics. For more information about how Google Analytics treats user information, please see the <a href="https://support.google.com/analytics/answer/6004245?hl=de" class="text-decoration-underline text-secondary" target="_blank">Google Privacy Policy</a> Order data processing This website uses the “demographic features” function of Google Analytics. This allows us to generate reports that contain information about the age, gender and interests of the site visitors. This data is derived from interest-based advertising by Google as well as from visitor data from third parties. This data cannot be assigned to a specific person. You can disable this feature at any time in the ad settings in your Google Account or generally prohibit Google Analytics from collecting your information as described in the “Opting out of data collection” section.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">Google reCAPTCHA</h3>
                <p>We use “Google reCAPTCHA” (hereinafter “reCAPTCHA”) on our websites. The provider is Google Inc, 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA (“Google”). The purpose of reCAPTCHA is to check whether the data input on our websites (e.g. in a contact form) is done by a human being or by an automated program. For this purpose, reCAPTCHA analyses the behavior of the website visitor on the basis of various characteristics. This analysis begins automatically as soon as the website visitor enters the website. For analysis purposes, reCAPTCHA evaluates various information (e.g. IP address, time spent on the website or mouse movements made by the user). The data collected during the analysis is forwarded to Google. The reCAPTCHA analyses run completely in the background. Website visitors are not informed that an analysis is taking place. For further information on Google reCAPTCHA and Google's privacy policy, please refer to the following links: <a href="https://www.google.com/intl/de/policies/privacy/" class="text-secondary text-decoration-underline" target="_blank">https://www.google.com/intl/de/policies/privacy/</a> and <a href="https://www.google.com/recaptcha/intro/android.html" class="text-secondary text-decoration-underline" target="_blank">https://www.google.com/recaptcha/intro/android.html</a>.</p>
            </div>
            <div class="mb-5">
                <h3 class="title_h2">Plugin & Tools</h3>
                <p>Google Maps This site uses the map service Google Maps via an API. Provider is Google Inc, 1600 Amphitheatre Parkway, Mountain View, CA 94043, USA. To use the functions of Google Maps it is necessary to save your IP address. This information is usually transferred to a Google server in the USA and stored there. The provider of this site has no influence on this data transfer. The use of Google Maps is in the interest of an attractive presentation of our online offers and an easy findability of the places we indicate on the website. This represents a legitimate interest in the sense of Art. 6 para. 1 lit. f DSGVO. More information on the handling of user data can be found in the Google data protection declaration: <a href="https://www.google.de/intl/de/policies/privacy/" class="text-secondary text-decoration-underline" target="_blank">https://www.google.de/intl/de/policies/privacy/</a>.</p>
            </div>
            <a href="{{route('front.policy_app.index',['lang'=>$lang])}}" class="c_btn btn_outline_dark mt-3 mt-md-5 d-flex justify-content-end">
                <div>{{__('front.policy_app')}}</div>
                <i class="bx bx-right-arrow-alt fs-4 align-middle ms-2"></i>    
            </a>
        </div>
    </div>
</div>
@endsection