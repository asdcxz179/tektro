@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20"
    style="background-image: url(/front/assets/images/support_warranty_thumbnail.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">{{__('front.tou_app')}}</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.home')}}</a>
                    </li>
                    <li class="text-white-50">{{__('front.support')}}</li>
                    <li class="text-white text-truncate">{{__('front.tou_app')}}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<div class="container">
    <div class="row mb-12 mb-md-20">
        <div class="offset-md-1 col-md-10">
            <div class="mb-5">
                <h3 class="title_h2 mb-4">Terms and Conditions of Use</h3>
                <p>Please read the following terms and conditions of use (“terms”) carefully before using any of the affiliated Tektro (TRP Cycling) application (collectively, the “app”)*.</p>
                <p>By entering the app, you, the user, acknowledge and agree that access to and use of the app are subject to the following terms and conditions of use, and the various disclaimers set forth herein.</p>
                <p>If you do not agree to these terms, do not access the app.</p>
                <p>Tektro (TRP Cycling) reserve the right to make revisions to these terms at any time, with or without notice to you. You agree to be bound by such revisions and should, therefore, periodically visit this page to review the current terms.</p>
                <p>You are responsible for compliance with any and all local laws applicable to your use of the app. Tektro (TRP Cycling) makes no representations or warranties that the materials contained on the app are appropriate for, or accessible from, all locations.</p>
                <p>Upon entering the app, you acknowledge and consent that your utilization of the app is undertaken at your own risk. Furthermore, you agree that none of the parties involved in the creation, production, or delivery of the app bear responsibility for any direct, incidental, consequential, indirect, or punitive damages. This includes, but is not limited to, any other losses, costs, or expenses of any kind (such as legal fees, expert fees, or other disbursements) that may arise, directly or indirectly, as a result of your access, use, or browsing of the app. This also encompasses the downloading of any materials, data, text, images, video, or audio from the app. Such potential issues include, but are not limited to, those caused by computer viruses or bugs, human action or inaction, computer system malfunctions, phone line issues, hardware or software malfunctions, or any other errors, failures, or delays in computer transmissions or network connections.</p>
            </div>
            <ul class="mb-5">
                <li class="mb-5">
                    <h3 class="title_h2">a. Ownership of the Tektro (TRP Cycling) application and license</h3>
                    <p class="ps-4">The Tektro (TRP Cycling) app is licensed, not sold or transferred to you by Tektro (TRP Cycling) (“Tektro”, "TRP cycling", "we", "our" or "us"). Subject to the terms, conditions and limitations set forth in these terms, Tektro (TRP Cycling) grants you a non-exclusive, worldwide, perpetual, non-transferable, revocable license to perform, display, and use the app solely for your personal entertainment purposes.</p>
                </li>
                <li class="mb-5">
                    <h3 class="title_h2">b. Limitations</h3>
                    <div class="ps-4">
                        <p>By using the app, you acknowledge and agree to adhere to its intended use in accordance with the specified terms. This includes refraining from engaging in activities such as renting, leasing, selling, or redistributing the app, as well as any attempts to copy, decompile, reverse engineer, or create derivative works. Modification of the app or removal of copyright and trademark notices is also prohibited. Any violation of these restrictions will result in unlicensed use, potentially infringing upon Tektro (TRP Cycling)'s copyright and other rights, leading to prosecution and damages. Tektro (TRP Cycling) expressly reserves all rights not granted explicitly in the agreement.</p>
                        <p>While using the app, it's important to note that Tektro (TRP Cycling) disclaims liability for various damages arising from your use or inability to use the app. These damages may include, but are not limited to, direct, incidental, special, indirect, consequential, or punitive damages. Even if Tektro (TRP Cycling) has been advised of the possibility of such damages, the company shall not be held responsible. Some states may not allow the exclusion or limitation of incidental or consequential damages, making this limitation inapplicable to certain users.</p>
                        <p>In the event of any liability, Tektro (TRP Cycling)'s total responsibility, whether in contract, warranty, tort, product liability, strict liability, or any other theory, arising from your use or inability to use the app, shall not exceed one dollar. These limitations remain applicable even if the provided remedy fails to achieve its essential purpose. It's crucial to understand and abide by these terms to ensure a lawful and responsible use of the app.</p>
                    </div>
                </li>
                <li class="mb-5">
                    <h3 class="title_h2">c.	Termination or modification</h3>
                    <p class="ps-4">Tektro (TRP Cycling) reserves the right, at its sole discretion and with or without notice, to modify, suspend, remove, or discontinue the app or any part of it. Additionally, Tektro (TRP Cycling) may disable your access to the app or terminate your license to use it, at any time and immediately upon notice, based on its sole discretion. Tektro (TRP Cycling) shall not incur any liability for these actions. It is crucial to note that any use of the app after termination is considered unlicensed and constitutes a violation of Tektro (TRP Cycling)'s copyright and other rights.</p>
                </li>
                <li class="mb-5">
                    <h3 class="title_h2">d. Responsibilities and assumption of risk</h3>
                    <div class="ps-4">
                        <div class="d-flex">
                            <div class="me-3">1.</div>
                            <p>To access the app with a login, you confirm that you have reached the legal age of majority in your jurisdiction. If you are below the legal age of majority, it is necessary to go through these terms with your parent or guardian. They must comprehend and consent to these terms for your use of the app to be permissible. In the event that you, or your parent or guardian, do not fully agree with these terms, refrain from accessing or using the app or any of its components.</p>
                        </div>
                        <div class="d-flex">
                            <div class="me-3">2.</div>
                            <p>You are solely responsible for any potential damages, as well as the quality and performance of the app. This includes assuming the risk related to any hardware, software, data, or other items affected by the copying of the app. Such risks encompass associated costs, including but not limited to repairs or replacement of any items or services. Additionally, you take responsibility for the accurate installation, use, and outcomes derived from the app, including any user-generated content on the platform.</p>
                        </div>
                        <div class="d-flex">
                            <div class="me-3">3.</div>
                            <p>You are responsible for indemnifying Tektro (TRP Cycling), its affiliates, subsidiaries, directors, officers, employees, suppliers, agents, and service providers against any failure on your part to adhere to the terms. This includes covering all losses, damages, reasonable expenses, and costs, including legal fees. Tektro (TRP Cycling) and its affiliates may seek indemnification for third-party claims stemming from the breach of your obligations under the provisions outlined in these terms.</p>
                        </div>
                        <div class="d-flex">
                            <div class="me-3">4.</div>
                            <p>You consent to Tektro (TRP Cycling) receiving, collecting, storing, and utilizing information throughout the registration process and while using the app. Tektro (TRP Cycling) will manage this information in accordance with applicable privacy and data protection laws, subject to amendments as they may occur over time.</p>
                        </div>
                    </div>
                </li>
                <li class="mb-5">
                    <h3 class="title_h2">e.	Disclaimers</h3>
                    <div class="ps-4">
                        <p>You explicitly recognize and consent that the utilization of the app carries inherent risks, and the entire responsibility for satisfactory quality, performance, safety, accuracy, and effort rests upon you. To the fullest extent permitted by applicable law, the app is provided "as is" and "as available," encompassing all imperfections and without any warranty. Tektro (TRP Cycling) hereby renounces all representations, warranties, and conditions related to the app, be they express, implied, or arising by law. This includes but is not limited to implied warranties and/or conditions of merchantability, fitness for a particular purpose, accuracy, completeness, quiet enjoyment, and non-infringement of third-party rights.</p>
                        <p>Tektro (TRP Cycling) does not assure that the functions within the app will be accurate or meet your requirements, that the app's operation will be uninterrupted or error-free, or that defects in the app will be rectified. No oral or written information, guidelines, or advice provided by Tektro (TRP Cycling) or its authorized representative shall establish a warranty. It's important to note that in some states, the exclusion of implied warranties may not be applicable to consumers, thus the above limitation might not apply to you.</p>
                    </div>
                </li>
                <li class="mb-5">
                    <h3 class="title_h2">f.	Inquiries; Collaboration with law enforcement</h3>
                    <p class="ps-4">Tektro (TRP Cycling) maintains the absolute authority to: (a) scrutinize any presumed breaches of its App security, information technology, or other systems or networks, (b) delve into any suspected infractions of these Terms, (c) actively participate and collaborate with law enforcement authorities in exploring such matters, and (d) pursue legal proceedings against individuals who violate these Terms, utilizing the full extent permissible by law.</p>
                </li>
                <li class="mb-5">
                    <h3 class="title_h2">g.	Amendments to these terms</h3>
                    <div class="ps-4">
                        <p>Tektro (TRP Cycling) retains the right to amend, substitute, or update these terms for valid reasons at any time. In the event of a substantial revision, Tektro (TRP Cycling) will offer a reasonable notice period before the implementation of new provisions. This requisite notice will be conveyed appropriately, either through the app or by other reasonable means.</p>
                        <p>By persisting in the use of the app, you signify your acceptance of the revised terms and consent to be bound by them. Should you disagree with the alterations or modifications to these terms, it is imperative that you promptly cease using the app.</p>
                    </div>
                </li>
                <li class="mb-5">
                    <h3 class="title_h2">h.	Notice</h3>
                    <div class="ps-4">
                        <p>All written notices, requests, directions, forms, or other communications from Tektro (TRP Cycling) to you, or vice versa, in accordance with these terms, should be directed to the intended recipient. In your case, the communication will be sent to the email address you provided during the installation and/or registration of the app. If you are sending the communication to Tektro (TRP Cycling), it should be addressed to:</p>
                        <p>
                        TEKTRO TECHNOLOGY CORP.
                        <br>
                        No. 138, Minzhu St.,
                        <br>
                        Xiushui Township,
                        <br>
                        Changhua County 504, Taiwan (R.O.C.)
                        </p>
                    </div>
                </li>
                <li class="mb-5">
                    <h3 class="title_h2">i.	Severability provision</h3>
                    <p class="ps-4">In the event that any provision within these terms is deemed unenforceable or invalid, efforts will be made to interpret the provision in a manner that fulfills its intended objectives to the maximum extent allowed by applicable law. If such an interpretation is not feasible, the provision will be considered inapplicable. However, the remaining provisions will remain valid and in effect, unless the non-applicable provision is deemed materially significant to your or Tektro (TRP Cycling)'s rights and benefits.</p>
                </li>
                <li class="mb-5">
                    <h3 class="title_h2">j. Comprehensive agreement</h3>
                    <div class="ps-4">These terms encompass the entire understanding between you and Tektro (TRP Cycling) regarding the subject matter herein. Any prior agreements, whether oral or written, pertaining to the same subject matter, are hereby rendered null and void.</div>
                </li>
                <li class="mb-5">
                    <h3 class="title_h2">k.	Responsibilities Concerning Export Regulations</h3>
                    <div class="ps-4">When exporting and utilizing the software outside the country where the software license was granted, you are obligated to adhere to all relevant export or import-related laws and regulations.</div>
                </li>
                <li class="mb-5">
                    <h3 class="title_h2">l. Applicable law and jurisdiction</h3>
                    <div class="ps-4">These terms, encompassing their validity, interpretation, enforceability, and the association between Tektro (TRP Cycling) and you, shall be governed by the laws of Taiwan, excluding (i) its conflicts of law provisions and (ii) the United Nations Convention on Contracts for the International Sale of Goods. Any disputes shall be resolved by the Changhua District Court in Taiwan. Tektro (TRP Cycling) is under no obligation and has no intention to engage in dispute settlement proceedings before a consumer mediation body.</div>
                </li>
                <li class="mb-5">
                    <h3 class="title_h2">m.	Further rights</h3>
                    <p class="ps-4">Any rights has not been allocated in this terms is reserved to Tektro (TRP cycling).</p>
                </li>
                <li class="mb-5">
                    <h3 class="title_h2">n.	The English language is the authoritative language of these terms. Any translation of these Terms is furnished to adhere to local requirements, and in cases of conflict or inconsistency between the English version and the translated text, the English version shall take precedence.</h3>
                </li>
            </ul>
            <a href="{{route('front.tou.index',['lang'=>$lang])}}" class="c_btn btn_outline_dark mt-3 mt-md-5 d-flex">
                <i class="bx bx-left-arrow-alt fs-4 align-middle ms-2"></i>    
                <div>{{__('front.back')}}</div>
            </a>
        </div>
    </div>
</div>
@endsection