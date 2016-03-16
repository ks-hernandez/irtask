
<!doctype html>
<!--[if IE 8]><html class="lt-ie10 lt-ie9" lang="en"><![endif]-->
<!--[if IE 9]><html class="lt-ie10" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="initial-scale=1,minimum-scale=1,maximum-scale=1">
    <title>Join BrightTALK for free</title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
</head>

<body data-ng-app="BTApp" data-ng-controller="Main" data-ng-init="init()" data-ng-class="{'user-logged-in': session.initialized && session.user}">

    <div data-snap-drawer="left" class="burger-menu-snap-drawer">

    <form id="burgerMenuSearchForm" class="burger-menu-search-form" action="/search" method="get">
    <div class="input-group input-group-search">
        <input type="text" name="q" class="search-form-term input-group-input" id="burgerMenuSearchField" placeholder="Find free videos and webinars">
        <button type="submit" class="burger-menu-search-form-submit input-group-icon">
            <i class="icon-search"></i>
        </button>
    </div>
    </form>

    <ul class="burger-menu">
        <li><a href="/webcasts" class="burger-menu-link all-brighttalk-webcasts-link">All BrightTALK</a></li>
        <li><a href="/business-management" class="burger-menu-link business-management-parent-community-link">Business Management</a></li>
        <li><a href="/finance" class="burger-menu-link finance-parent-community-link">Finance</a></li>
        <li><a href="/human-resources" class="burger-menu-link human-resources-parent-community-link">Human Resources</a></li>
        <li><a href="/information-technology" class="burger-menu-link it-parent-community-link">Information Technology</a></li>
        <li><a href="/legal" class="burger-menu-link legal-parent-community-link">Legal</a></li>
        <li><a href="/marketing" class="burger-menu-link marketing-parent-community-link">Marketing</a></li>
        <li><a href="/research-development" class="burger-menu-link research-development-parent-community-link">Research &amp; Development</a></li>
        <li><a href="/sales" class="burger-menu-link sales-parent-community-link">Sales</a></li>
    </ul>

    </div>

    <div data-snap-drawer="right" class="mobile-profile-menu-snap-drawer">
    <div class="mobile-profile-menu" data-snap-close-on-user-image-upload>
        <span class="profile-menu-user-name">Hi  [[ session.user.profile.firstName ]]</span>
        <ul class="profile-menu-options">
            <li class="profile-menu-option profile-menu-manage-option" data-ng-show="session.initialized && session.user.isManager">
                <a class="profile-menu-option-link profile-menu-manager-option-link" href="/admin/channel?utm_campaign=profile-dropdown-menu&amp;utm_content=Manage&amp;utm_source=brighttalk-portal&amp;utm_medium=web&amp;utm_term=">
                    <span class="profile-menu-option-link-text">Manage</span>
                </a>
            </li>
            <li class="profile-menu-option profile-menu-channels-i-own-option" data-ng-show="session.initialized && session.user.isChannelOwner">
                <a class="profile-menu-option-link profile-menu-channels-i-own-option-link" href="/mybrighttalk/own-channels?utm_campaign=profile-dropdown-menu&amp;utm_content=channels+I+own&amp;utm_source=brighttalk-portal&amp;utm_medium=web&amp;utm_term=">
                    <span class="profile-menu-option-link-text">Channels I own</span>
                </a>
            </li>
            <li class="profile-menu-option">
                <a class="profile-menu-option-link profile-menu-knowledge-feed-link" href="/mybrighttalk/knowledge-feed?utm_campaign=profile-dropdown-menu&amp;utm_content=My+feed&amp;utm_source=brighttalk-portal&amp;utm_medium=web&amp;utm_term=">
                    <span class="profile-menu-option-link-text">My feed</span>
                </a>
            </li>
            <li class="profile-menu-option">
                <a class="profile-menu-option-link profile-menu-my-viewing-history-link" href="/mybrighttalk/viewing-history?utm_campaign=profile-dropdown-menu&amp;utm_content=My+viewing+history&amp;utm_source=brighttalk-portal&amp;utm_medium=web&amp;utm_term=">
                    <span class="profile-menu-option-link-text">My viewing history</span>
                </a>
            </li>
            <li class="profile-menu-option">
                <a class="profile-menu-option-link profile-menu-my-channels-link" href="/mybrighttalk/channels?utm_campaign=profile-dropdown-menu&amp;utm_content=My+channels&amp;utm_source=brighttalk-portal&amp;utm_medium=web&amp;utm_term=">
                    <span class="profile-menu-option-link-text">My channels</span>
                </a>
            </li>
            <li class="profile-menu-option">
                <form novalidate method="post" enctype="multipart/form-data" class="profile-card-image-form">
                    <div class="profile-menu-option-link profile-menu-add-profile-photo">
                        <input type="file" name="mobile_profile_menu_profile_photo" class="profile-menu-add-profile-photo-button"
                        data-ng-class="{'profile-card-add-photo-button': !session.user.profile.photo, 'profile-card-change-photo-button': session.user.profile.photo}"
                        data-ng-file-select="onFileSelect($files)"
                        data-profile-photo-upload
                        data-ga-action="profile dropdown photo uploaded"
                        data-api-key="493291559361555"
                        data-upload-preset="core_profile_photo_upload"
                        data-cloud-name="brighttalkprod"
                        data-sign-url="/mybrighttalk/profile/photo/sign"
                        data-save-url="/mybrighttalk/profile/photo"
                        accept="image/*"
                        data-ga-click-tracker data-ga-click-tracker-action="profile dropdown upload photo" data-ga-click-tracker-category="Social"
                        data-snap-close>
                        <span class="profile-menu-option-link-text" data-ng-if="!session.user.profile.photo">Add profile photo</span>
                        <span class="profile-menu-option-link-text" data-ng-if="session.user.profile.photo">Change profile photo</span>
                    </div>
                </form>
            </li>
            <li class="profile-menu-option">
                <a class="profile-menu-option-link profile-menu-edit-profile-link" href="/mybrighttalk/profile/edit?utm_campaign=profile-dropdown-menu&amp;utm_content=Edit+profile&amp;utm_source=brighttalk-portal&amp;utm_medium=web&amp;utm_term=">
                    <span class="profile-menu-option-link-text">Edit profile</span>
                </a>
            </li>
            <li class="profile-menu-option">
                <a class="profile-menu-option-link profile-menu-logout-link" href="/logout">
                    <span class="profile-menu-option-link-text">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    </div>

    <div id="jsPageScrollTop" data-snap-content data-scroll-to-top-when="user-is-authorised-for-webcast">
    <div class="page-wrapper">
        <div class="container site-header clearfix">

            <nav id="userAuthenticationActions" class="auth-nav">
                <a href="/login" class="regular-login-link btn secondary x-large">Log in</a>
            </nav>


            <div class="logo-wrapper" itemscope itemtype="https://schema.org/Organization">

                <a href="/" class="logoLink" title="BrightTALK">    
                    <img src="/resources/images/logo_b.png?v=105492" width="43" height="41" class="logo" alt="BrightTALK" title="BrightTALK" itemprop="logo">
                </a>

            </div>
                
                
        </div>

        
        <div class="container">
            <div class="site-content">
                <h1 class="first-level-headline">Join BrightTALK&trade; for free</h1>

                <form name="user_registration" method="post" action="/register_check" id="joinForm" class="join-form" data-ng-app="JoinApp" data-ng-controller="JoinForm" data-ng-init="init()" data-ng-submit="submit()" data-ga-submit-tracker="" data-ga-submit-tracker-category="Join" data-ga-submit-tracker-action="Form submitted">
                    <input type="hidden" id="user_registration__token" name="user_registration[_token]" value="TLQjqUHMQlUysW3Lh9JrDjmC63QiCGfCpkrSSQanENM" />

                    <div class="form-control">
                        <label class="field-label required" for="user_registration_first_name">First name</label>
                        <input type="text" id="user_registration_first_name" name="user_registration[first_name]" required="required" maxlength="100" class="form-field input-text field-first-name" placeholder="First name" />
                    </div>

                    <div class="form-control">
                        <label class="field-label required" for="user_registration_last_name">Last name</label>
                        <input type="text" id="user_registration_last_name" name="user_registration[last_name]" required="required" maxlength="100" class="form-field input-text field-last-name" placeholder="Last name" />
                    </div>

                    <div class="form-control">
                        <label class="field-label required" for="user_registration_email_address">Email</label>
                        <input type="email" id="user_registration_email_address" name="user_registration[email_address]" required="required" maxlength="100" class="form-field input-text field-email " placeholder="Email" />

                    </div>

                    <div class="form-control">
                        <label class="field-label required" for="user_registration_timezone">Timezone</label>
                        <select id="user_registration_timezone" name="user_registration[timezone]" required="required" class="select form-field field-timezone" data-ng-model="userTimezone">
                            <option value="" selected="selected">-- Select time zone --</option>
                            <option value="America/Argentina/Buenos_Aires">Argentina - Buenos Aires</option>
                            <option value="Australia/Adelaide">Australia - Adelaide</option>
                            <option value="America/Caracas">Venezuela - Caracas</option>
                        </select>
                    </div>

                    <div class="form-control">
                        <label class="field-label required" for="user_registration_password">Password</label>
                        <input type="password" id="user_registration_password" name="user_registration[password]" required="required" maxlength="32" class="form-field input-text field-password" placeholder="Password" minlength="6" />
                    </div>

                    <p class="join-form-terms-conditions">By clicking "Join" or using BrightTALK, you confirm you have read,
                        understood and agree to our <a class="user-agreement-link"
                        href="/pages/user-agreement">User
                        agreement</a>, <a class="privacy-policy-link"
                        href="/pages/privacy-policy">Privacy policy</a>
                        and the use of cookies.
                    </p>

                    <button type="submit" class="btn primary x-large full-width join-button">Join</button>
                </form>
            </div>
        </div>

    </div>


    <div class="site-footer">
        <p class="site-footer-headline"><a class="site-footer-headline-link" id="site-footer-link-learn-more" href="/marketing-solutions/marketing-platform">Learn more</a> about BrightTALK's products and services.</p>
        <ul class="site-footer-link-list">
            <li class="site-footer-link-list-item"><a class="site-footer-link" id="site-footer-link-about-us" href="/pages/about-brighttalk/company">About us</a></li>
            <li class="site-footer-link-list-item"><a class="site-footer-link" id="site-footer-link-blog" href="http://blog.brighttalk.com">Blog</a></li>
            <li class="site-footer-link-list-item"><a class="site-footer-link" id="site-footer-link-user-agreement" href="/pages/user-agreement">User agreement</a></li>
            <li class="site-footer-link-list-item"><a class="site-footer-link" id="site-footer-link-privacy-policy" href="/pages/privacy-policy">Privacy policy</a></li>
            <li class="site-footer-link-list-item"><a class="site-footer-link" id="site-footer-link-support" href="https://support.brighttalk.com/home">Support</a></li>
            <li class="site-footer-link-list-item"><a class="site-footer-link" id="site-footer-link-presenter-access" href="/presenting">Presenter access</a></li>
        </ul>
        <p class="site-footer-copyright">&copy; 2016 BrightTALK</p>
    </div>

    </div>


    <!--[if lt IE 9]>
    <script src="/resources/vendor/style-guide/scripts/respond.js?v=105492"></script>
    <![endif]-->

    <script type="text/javascript">
    FileAPI = {
        jsUrl: '/resources/vendor/FileAPI/js/FileAPI.min.js?v=105492',
        flashUrl: '/resources/vendor/FileAPI/swf/FileAPI.flash.swf?v=105492'
    }
    </script>

    <script type="text/javascript" src="/bundles/brighttalkportal/js/Config/global_config.js?v=105492"></script>
    <script type="text/javascript" src="/compiled/js/responsive-base.js?v=105492"></script>

    <script type="text/javascript" src="/compiled/js/join.js?v=105492"></script>

</body>

</html>
