@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20"
    style="background-image: url(/front/assets/images/support_warranty_thumbnail.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">{{__('front.tou')}}</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="{{route('front.index',['lang'=>$lang])}}" class="text-white-50">{{__('front.home')}}</a>
                    </li>
                    <li class="text-white-50">{{__('front.support')}}</li>
                    <li class="text-white text-truncate">{{__('front.tou')}}</li>
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
                    <p>Welcome to www.tektro.com. The www.tektro.com website (the “Site”) is comprised of various web pages operated by Tektro Technology Corp. www.tektro.com is offered to you conditioned on your acceptance without modification of the terms, conditions, and notices contained herein (the “Terms”). Your use of constitutes your agreement to all such Terms. Please read these terms carefully, and keep a copy of them for your reference.</p>
                    <p>www.tektro.com is an E-commerce Site engaged in the sale of premium bicycle components.</p>
                </div>
                <div class="mb-5">
                    <h3 class="title_h2">Privacy</h3>
                    <p>Your use of www.tektro.com is subject to Tektro and TRP Cycling Privacy Policy. Please review our Privacy Policy, which also governs the Site and informs users of our data collection practices.</p>
                </div>
                <div class="mb-5">
                    <h3 class="title_h2">Electronic Communications</h3>    
                    <p>Visiting www.tektro.com or sending emails to Tektro and TRP Cycling constitutes electronic communications. You consent to receive electronic communications and you agree that all agreements, notices, disclosures and other communications that we provide to you electronically, via email and on the Site, satisfy any legal requirement that such communications be in writing.</p>
                </div>
                <div class="mb-5">
                    <h3 class="title_h2">Your account</h3>
                    <p>If you use this site, you are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password. You may not assign or otherwise transfer your account to any other person or entity. You acknowledge that Tektro and TRP Cycling are not responsible for third party access to your account that results from theft or misappropriation of your account. Tektro and TRP Cycling reserve the right to refuse or cancel service, terminate accounts, or remove or edit content in our sole discretion.</p>
                    <p>Tektro and TRP Cycling does not knowingly collect, either online or offline, personal information from persons under the age of thirteen. If you are under 18, you may use www.tektro.com only with permission of a parent or guardian.</p>
                </div>
                <div class="mb-5">
                    <h3 class="title_h2">Links to third party sites/Third party services</h3>
                    <p>www.tektro.com may contain links to other websites (“Linked Sites”). The Linked Sites are not under the control of Tektro and TRP Cycling. And Tektro and TRP Cycling are not responsible for the contents of any Linked Site, including without limitation any link contained in a Linked Site, or any changes or updates to a Linked Site. Tektro and TRP Cycling are providing these links to you only as a convenience, and the inclusion of any link does not imply endorsement by Tektro and TRP Cycling of the site or any association with its operators.</p>
                    <p>Certain services made available via www.tektro.com are delivered by third party sites and organizations. By using any product, service or functionality originating from the www.tektro.com domain, you hereby acknowledge and consent that Tektro and TRP Cycling may share such information and data with any third party with whom Tektro and TRP Cycling has a contractual relationship to provide the requested product, service or functionality on behalf of www.tektro.com users and customers.</p>
                </div>
                <div class="mb-5">
                    <h3 class="title_h2">No unlawful or prohibited use/Intellectual Property</h3>
                    <p>You are granted a non-exclusive, non-transferable, revocable license to access and use www.tektro.com strictly in accordance with these terms of use. As a condition of your use of the Site, you warrant to Tektro and TRP Cycling that you will not use the Site for any purpose that is unlawful or prohibited by these Terms. You may not use the Site in any manner which could damage, disable, overburden, or impair the Site or interfere with any other party's use and enjoyment of the Site. You may not obtain or attempt to obtain any materials or information through any means not intentionally made available or provided for through the Site.</p>
                    <p>All content included as part of the Service, such as text, graphics, logos, images, as well as the compilation thereof, and any software used on the Site, is the property of Tektro and TRP Cycling or its suppliers and protected by copyright and other laws that protect intellectual property and proprietary rights. You agree to observe and abide by all copyright and other proprietary notices, legends or other restrictions contained in any such content and will not make any changes thereto</p>
                    <p>You will not modify, publish, transmit, reverse engineer, participate in the transfer or sale, create derivative works, or in any way exploit any of the content, in whole or in part, found on the Site. Tektro and TRP Cycling content are not for resale. Your use of the Site does not entitle you to make any unauthorized use of any protected content, and in particular you will not delete or alter any proprietary rights or attribution notices in any content. You will use protected content solely for your personal use, and will make no other use of the content without the express written permission of Tektro and TRP Cycling and the copyright owner. You agree that you do not acquire any ownership rights in any protected content. We do not grant you any licenses, express or implied, to the intellectual property of Tektro and TRP Cycling or our licensors except as expressly authorized by these Terms.</p>
                </div>
                <div class="mb-5">
                    <h3 class="title_h2">International Users</h3>
                    <p>The Service is controlled, operated and administered by Tektro and TRP Cycling from our offices within the TAIWAN. If you access the Service from a location outside the TAIWAN, you are responsible for compliance with all local laws. You agree that you will not use the Tektro and TRP Cycling Content accessed through www.tektro.com in any country or in any manner prohibited by any applicable laws, restrictions or regulations.</p>
                </div>
                <div class="mb-5">
                    <h3 class="title_h2">Indemnification</h3>
                    <p>You agree to indemnify, defend and hold harmless Tektro and TRP Cycling, its officers, directors, employees, agents and third parties, for any losses, costs, liabilities and expenses (including reasonable attorneys' fees) relating to or arising out of your use of or inability to use the Site or services, any user postings made by you, your violation of any terms of this Agreement or your violation of any rights of a third party, or your violation of any applicable laws, rules or regulations. Tektro and TRP Cycling reserves the right, at its own cost, to assume the exclusive defense and control of any matter otherwise subject to indemnification by you, in which event you will fully cooperate with Tektro and TRP Cycling in asserting any available defenses.</p>
                </div>
                <div class="mb-5">
                    <h3 class="title_h2">Liability disclaimer</h3>
                    <p>THE INFORMATION, SOFTWARE, PRODUCTS, AND SERVICES INCLUDED IN OR AVAILABLE THROUGH THE SITE MAY INCLUDE INACCURACIES OR TYPOGRAPHICAL ERRORS. CHANGES ARE PERIODICALLY ADDED TO THE INFORMATION HEREIN. Tektro Technology Corp. AND/OR ITS SUPPLIERS MAY MAKE IMPROVEMENTS AND/OR CHANGES IN THE SITE AT ANY TIME.</p>
                    <p>Tektro Technology Corp. AND/OR ITS SUPPLIERS MAKE NO REPRESENTATIONS ABOUT THE SUITABILITY, RELIABILITY, AVAILABILITY, TIMELINESS, AND ACCURACY OF THE INFORMATION, SOFTWARE, PRODUCTS, SERVICES AND RELATED GRAPHICS CONTAINED ON THE SITE FOR ANY PURPOSE. TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, ALL SUCH INFORMATION, SOFTWARE, PRODUCTS, SERVICES AND RELATED GRAPHICS ARE PROVIDED “AS IS” WITHOUT WARRANTY OR CONDITION OF ANY KIND. Tektro Technology Corp. AND/OR ITS SUPPLIERS HEREBY DISCLAIM ALL WARRANTIES AND CONDITIONS WITH REGARD TO THIS INFORMATION, SOFTWARE, PRODUCTS, SERVICES AND RELATED GRAPHICS, INCLUDING ALL IMPLIED WARRANTIES OR CONDITIONS OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE AND NON-INFRINGEMENT.</p>
                    <p>TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, IN NO EVENT SHALL Tektro Technology Corp. AND/OR ITS SUPPLIERS BE LIABLE FOR ANY DIRECT, INDIRECT, PUNITIVE, INCIDENTAL, SPECIAL, CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER INCLUDING, WITHOUT LIMITATION, DAMAGES FOR LOSS OF USE, DATA OR PROFITS, ARISING OUT OF OR IN ANY WAY CONNECTED WITH THE USE OR PERFORMANCE OF THE SITE, WITH THE DELAY OR INABILITY TO USE THE SITE OR RELATED SERVICES, THE PROVISION OF OR FAILURE TO PROVIDE SERVICES, OR FOR ANY INFORMATION, SOFTWARE, PRODUCTS, SERVICES AND RELATED GRAPHICS OBTAINED THROUGH THE SITE, OR OTHERWISE ARISING OUT OF THE USE OF THE SITE, WHETHER BASED ON CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY OR OTHERWISE, EVEN IF Tektro Technology Corp. OR ANY OF ITS SUPPLIERS HAS BEEN ADVISED OF THE POSSIBILITY OF DAMAGES. BECAUSE SOME STATES/JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, THE ABOVE LIMITATION MAY NOT APPLY TO YOU. IF YOU ARE DISSATISFIED WITH ANY PORTION OF THE SITE, OR WITH ANY OF THESE TERMS OF USE, YOUR SOLE AND EXCLUSIVE REMEDY IS TO DISCONTINUE USING THE SITE.</p>
                </div>
                <div class="mb-5">
                    <h3 class="title_h2">Termination/access restriction</h3>
                    <p>Tektro and TRP Cycling reserves the right, in its sole discretion, to terminate your access to the Site and the related services or any portion thereof at any time, without notice. To the maximum extent permitted by law, this agreement is governed by the laws of the TAIWAN and you hereby consent to the exclusive jurisdiction and venue of courts in TAIWAN in all disputes arising out of or relating to the use of the Site. Use of the Site is unauthorized in any jurisdiction that does not give effect to all provisions of these Terms, including, without limitation, this section.</p>
                    <p>You agree that no joint venture, partnership, employment, or agency relationship exists between you and Tektro and TRP Cycling as a result of this agreement or use of the Site. Tektro's and TRP Cycling's performance of this agreement are subject to existing laws and legal process, and nothing contained in this agreement is in derogation of Tektro's and TRP Cycling's right to comply with governmental, court and law enforcement requests or requirements relating to your use of the Site or information provided to or gathered by Tektro and TRP Cycling with respect to such use. If any part of this agreement is determined to be invalid or unenforceable pursuant to applicable law including, but not limited to, the warranty disclaimers and liability limitations set forth above, then the invalid or unenforceable provision will be deemed superseded by a valid, enforceable provision that most closely matches the intent of the original provision and the remainder of the agreement shall continue in effect.</p>
                    <p>Unless otherwise specified herein, this agreement constitutes the entire agreement between the user and Tektro and TRP Cycling with respect to the Site and it supersedes all prior or contemporaneous communications and proposals, whether electronic, oral or written, between the user and Tektro and TRP Cycling with respect to the Site. A printed version of this agreement and of any notice given in electronic form shall be admissible in judicial or administrative proceedings based upon or relating to this agreement to the same extent an d subject to the same conditions as other business documents and records originally generated and maintained in printed form. It is the express wish to the parties that this agreement and all related documents be written in English or Chinese.</p>
                </div>
                <div class="mb-5">
                    <h3 class="title_h2">Changes to Terms</h3>
                    <p>Tektro and TRP Cycling reserves the right, in its sole discretion, to change the Terms under which www.tektro.com is offered. The most current version of the Terms will supersede all previous versions. Tektro and TRP Cycling encourages you to periodically review the Terms to stay informed of our updates.</p>
                </div>
                <div class="mb-5">
                    <h3 class="title_h2">Contact Us</h3>
                    <p>Tektro and TRP Cycling welcomes your questions or comments regarding the Terms:</p>
                    <p>Tektro Technology Corp.</p>
                    <ul class="list_group">
                        <li>No. 138, Minzhu St., Xinshui Township, Changhua County 504, TAIWAN (R.O.C)</li>
                        <li><div style="display:flex"><div style="word-break: break-all;flex: 4;"><a href="tel:+8867683999">+8867683999</a></div></div></li>
                        <li><a href="{{route('front.contact.index',['lang'=>$lang])}}">contact us</a></li> 
                    </ul>
                </div>
                <a href="{{route('front.tou_app.index',['lang'=>$lang])}}" class="c_btn btn_outline_dark mt-3 mt-md-5 d-flex justify-content-end">
                    <div>{{__('front.tou_app')}}</div>
                    <i class="bx bx-right-arrow-alt fs-4 align-middle ms-2"></i>    
                </a>
        </div>
    </div>
</div>
@endsection