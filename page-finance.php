<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/finance.css?v=1" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor/dsgvo-video-embed.min.css">
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/dsgvo-video-embed.min.js"></script>
<script>
require(["require.config"], function() {
	require(["bootstrap"])
});
</script>
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/finance-small.jpg">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/finance-small.jpg">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/finance-small.jpg">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/headers/finance-small.jpg">
</head>
<div class="finance-background second-menu">
    <div class="container-fluid background">
        <div class="container">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Financial services');?></h1>
				<h2><?php echo $l->t('FinTech for compliant data control');?></p>
			</div>
		</div>
	</div>
</div>

<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud offers a unique on-premises solution for financial services companies.');?></p>
            <p class="section--paragraph text-center"><?php echo $l->t('Growing regulatory pressure and fast moving technology forces the financial services industry to improve operational efficiency while avoiding the risks that come with a move to public and SaaS cloud technology.');?></p>
            <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud solves this without compromising security.');?></p>
            <p class="section--paragraph text-center"><div class="icon text-center"><a href="<?php echo home_url('gdpr') ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/gdpr-compliant-blue.svg" /></a></div></p>
		</div>
	</div>
</div>
</section>

<section class="section--overview">
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/manual.svg" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Improved productivity');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Modern collaboration technology is needed to stay ahead of the curve. Customers and employees demand data to be available anywhere through efficient sharing workflows.');?></p>
        </div>
		<div class="col-md-4">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/permissions.svg" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Ultimate security');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Choosing an on-premises product means you can guarantee your clients that data never leaves your company and remains 100% confidential.');?></p>
			<p class="section--paragraph text-center"><?php echo $l->t('Powerful server and client side encryption options provide ultimate protection for sensitive documents.');?></p>
		</div>
		<div class="col-md-4">
			<div class="icon text-center"><img src="<?php bloginfo('template_directory'); ?>/assets/img/icons/monitoring.svg" /></div>
			<h3 class="section--paragraph__title text-center"><?php echo $l->t('Complete control');?></h3>
			<p class="section--paragraph text-center"><?php echo $l->t('Knowing where data is and who has access is crucial in a heavily regulated industry. Nextcloud combines advanced data access controls with powerful monitoring and logging capabilities to ensure compliance and auditability.');?></p>
		</div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p class="text-center"><?php echo $l->t('Reduce risk, improve customer communication, develop new revenue sources and reduce operational expenses with the leading content collaboration platform.');?></p>
            <p class="text-center"><?php echo $l->t('Contact us to learn how we can help you.');?></p>
            <div class="text-center morebuttondiv">
                <a href="<?php echo home_url('buy') ?>" class="button button--blue button--large button--arrow"><?php echo $l->t('Contact us');?> <i class="icon-arrow-circle-o-right icon"></i></a>
            </div>
        </div>
    </div>
</div>
</section>

<section class="section--customerdetail">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/raiffeisen.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Raiffeisen and Hypo Banks in Austria');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Raiffeisen Informatik Center Steiermark provides the whole IT-Infrastructure as well as all financial applications for both Raiffeisen and Hypo Banks in Styria/Austria. As one of the largest IT companies in the Southern Region of Austria, they chose to provide Nextcloud to their employees because it has the most user-friendly (web) interface, meets their strict security requirements and is scalable and extensible.');?></p>
                <a href="https://nextcloud.com/blog/nextcloud-is-the-one-and-only-solution-we-are-providing-to-our-end-customers-florian-hausleitner/" class="button button--blue button--arrow button--large"><?php echo $l->t('Read the blog');?></a>
            </div>
        </div>
    </div>
</section>

<!--<section class="section--customers">
<div class="container">
    <h1 class="section--heading-1 text-center"><?php echo $l->t('Some of our customers');?></h1>
    <div class="row">
		<div class="col-sm-4 col-sm-offset-2 col-lg-3 customer">
            <div class="customer-logo">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/randv.png" />
            </div>
        </div>
        <div class="col-sm-4 col-lg-3 customer">
            <div class="customer-logo">
                <a href="https://nextcloud.com/blog/nextcloud-is-the-one-and-only-solution-we-are-providing-to-our-end-customers-florian-hausleitner/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/raiffeisen.png" /></a>
            </div>
        </div>
</div>
</section>-->

<section class="section--explanation">
<div class="container-fluid banner quote">
    <div class="container">
        <div class="col-md-6">
            <h2 class=""><?php echo $l->t('Advantages');?></h2>
            <div class="row">
                <div class="col-md-2 featureblock">
                    <i class="fa-commenting-o fa"></i>
                </div>
                <div class="col-md-10 featureblock">
                    <h3 class="section--paragraph__title"><?php echo $l->t('Client communication');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Benefit from modern, fast and secure data exchange while keeping customer intelligence in-house for analysis and monetization.');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 featureblock">
                    <i class="fa-tablet fa"></i>
                </div>
                <div class="col-md-10 featureblock">
                    <h3 class="section--paragraph__title"><?php echo $l->t('Decentralized collaboration');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Tokyo, London, New York - enable employees to access data and work together across devices without IT ever losing sight.');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 featureblock">
                    <i class="fa-money fa"></i>
                </div>
                <div class="col-md-10 featureblock">
                    <h3 class="section--paragraph__title"><?php echo $l->t('Protecting investment');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Leverage deep integration in existing infrastructure, building on existing hardware, software and processes to store, secure and track data.');?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 featureblock">
                    <i class="fa-server fa"></i>
                </div>
                <div class="col-md-10 featureblock">
                    <h3 class="section--paragraph__title"><?php echo $l->t('Compliant data handling');?></h3>
                    <p class="section--paragraph"><?php echo $l->t('Enable auditing of events and processes at any time, to deliver the standardized and transparent reporting that is required in the financial sector.');?></p>
                </div>
            </div>
        </div>
        <img class="big-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/legal2.jpg">
        <img class="small-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/headers/legal2-small.jpg">
    </div>
</div>
</section>

<section class="section--customerdetail">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/SCM_team.jpg" alt="SCM picture"/></a>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Nextcloud Talk offering secure corporate messaging for SCM LIMITED');?></h3>
                <p class="section--paragraph"><?php echo $l->t('When SCM was looking for a simple, secure and well designed messenger platform that could be hosted on-premises, a decision was made for Nextcloud Talk. A Professional Services project from Nextcloud GmbH provided several features SCM required and today, the legal, human resource, financial and PR experts of SCM can easily communicate and collaborate during their business trips.');?></p>
                <a href="https://nextcloud.com/blog/nextcloud-talk-offering-secure-corporate-messaging-for-scm-limited/" class="button button--blue button--arrow button--large"><?php echo $l->t('Read the blog');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--vdr">
    <div class="container">
        <div class="row feature-row">
            <div class="col-md-6 image--floated">
                <div data-type="youtube" data-video-id="nueL_hzDp-s"></div>
                <div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/556896875?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Secure view_ blocking downloads, watermarking and secure mailboxes in Nextcloud.mp4"></iframe></div>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Virtual Data Room');?></h3>
                <p class="section--paragraph"><?php echo $l->t('In settings where a firewall is needed between departments or organizations without impeding smooth and efficient collaboration, a separate Virtual Data Room can be set up. Nextcloud offers a wide range of unique features for VDR use and its on-premises nature offers unparalleled confidentiality and control.');?></p>
                <a href="<?php echo home_url('virtual-data-room') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Virtual Data Rooms');?></a>
            </div>
        </div>
    </div>
</section>

<!--<section class="section--whitepaper quote">
	<div class="container ">
        <div class="row">
			<div class="col-lg-8">
                <h2 class=""><?php echo $l->t('Stadtsparkasse Munich Switches to Local Cloud');?></h2>
                <form name="whitepaper" method="post" action="<?php echo home_url('whitepaper-submit') ?>">
                    <p><label for="email"><?php echo $l->t('Nextcloud partner HNK has provided this Munich city bank with a secure, compliant collaboration platform.');?><br>
                    <input type="hidden" name="segmentId" value="20">
                    <input type="hidden" name="firstname" value="">
                    <input type="hidden" name="requesttime" value="<?php echo time(); ?>">
                    <input class="mail" type="text" name="email" maxlength="80" placeholder="Enter your email"></label>
                    <div class="newsletter">
                        <input type="hidden" name="newsletter" value="0" />
                        <input type="hidden" name="moreinfo" value="0" />
                        <input type="checkbox" name="moreinfo" value="1"> <small><?php echo $l->t('Subscribe me to the monthly Nextcloud newsletter');?></small><br/>
                        <small><?php echo $l->t('See our');?> <a class="hyperlink" href="<?php echo home_url('privacy') ?>"><?php echo $l->t('privacy policy');?></a></small>
                    </div>
                    <input class="button button--large" type="submit" value=" Get the case study "></p>
                </form>
            </div>
        </div>
        <img class="responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/whitepapers/skmunich-thumbnail-banner.png"/>
	</div>
</section>-->

<section class="section--customerdetail">
	<div class="container">
         <div class="row feature-row">
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/customers/assicuro.png" alt="in action"/>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Assicuro Private Insurance');?></h3>
                <p class="section--paragraph"><blockquote><?php echo $l->t('Assicuro chose Nextcloud to ensure confidential data exchange with its over 3000 customers and partners, enabling customers to securily share confidential information e.g. insurance policies. Compared to other evaluated solutions, Nextcloud offered an easier user interface, and a professional and more secure, extensible platform.');?></blockquote></p>
            </div>
        </div>
    </div>
</section>

<?php require get_template_directory().'/onpremises.php';?>

<div class="separator"></div>

<section class="section--modern">
	<div class="container">
        <div class="row">
            <h3 class="section--intro text-center"><?php echo $l->t('Features');?></h3>
            <h1 class="section--heading-1 text-center"><?php echo $l->t('Everything you need');?></h1>
            <div class="modern--ilustration"></div>
            <h3 class="section--intro text-center"><?php echo $l->t('Nextcloud offers everything you need for efficient, secure document management.');?></h3>
        </div>
         <div class="row feature-row">
            <div class="col-md-6">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/mobileDesktop.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Universal document access');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Be confident that wherever your employees are, they have access to the documents they need in a moments notice, 100% secure. Tablets, mobile devices, laptops and desktops all have access to the same files thanks to first-class Nextcloud clients.');?></p>
                <a href="<?php echo home_url('clients') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Sync clients');?></a>
            </div>
        </div>
        <div class="row feature-row">
            <div class="col-md-6 image--floated">
                <div data-type="youtube" data-video-id="AhFnbB-a7ik"></div>
                <div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/556890169?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Nextcloud File Drop"></iframe></div>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Secure collaboration');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Your employees can easily share documents for review or joint editing. Thanks to enforced sharing settings and dedicated user and group management, everyone only sees what they really need to see.');?></p>
                <a href="<?php echo home_url('sharing') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('More about sharing');?></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 image">
                <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/securedrop-email-nw.png" alt="in action"/></a>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Secure file exchange');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Sharing files across the borders of your organization can be done easily and securely with our file-drop feature.');?></p>
                <p class="section--paragraph"><?php echo $l->t('IT stays in control at all times, enforcing security policy with the File Access Control capabilities.');?></p>
                <a href="<?php echo home_url('file-drop') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('File Drop');?></a>
            </div>
        </div>
        <div class="row feature-row">
            <div class="col-md-6 image--floated">
                <div data-type="youtube" data-video-id="jwhfeJlYBbM"></div>
                <div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/556108262?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Nextcloud Outlook Add-in"></iframe></div>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Integrated in email');?></h3>
                <p class="section--paragraph"><?php echo $l->t('To quickly and securely get data to your clients or receive documents from them, use the Nextcloud Secure Sharing Outlook Add-in. This avoids insecure and big attachments and instead provides a secure, trust-worthy file exchange that does not direct your clients to a third party but runs on your server and your domain.');?></p>
                <a href="<?php echo home_url('outlook') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Email integration');?></a>
            </div>
        </div>
    </div>
</section>

<section class="section--getstarted">
    <div class="quote">
    <div class="container">
        <div class="row">
            <div class ="col-md-12">
                <h2 class="text-center"><?php echo $l->t('Financial firms provide trust');?></h2>
                <p class="section--paragraph section--text--center"><?php echo $l->t('Banks, investment firms, insurance agencies and other financial service firms are entrusted with the most confidential knowledge of their clients. Breaking that trust, for example due to a data-leak, is a career-ending mistake.');?></p>
                <p class="section--paragraph section--text--center"><?php echo $l->t('Nextcloud enables you to focus on your work, taking care that your data stays private and completely under your control!');?></p>
                <p class="section--paragraph section--text--center"><?php echo $l->t('Take Nextcloud for a test drive now!!');?></p>
            </div>
        </div>
        <div class="row text-center">
            <a href="https://demo.nextcloud.com" class="button button--arrow button--large"><?php echo $l->t('Nextcloud Demo');?></a>
            <a href="<?php echo home_url('buy') ?>" class="button button--arrow button--large"><?php echo $l->t('Contact sales');?></a>
        </div>
    </div>
    </div>
</section>


<section class="section--secure">
<div class="container">
    <div class="row">
        <h3 class="section--intro text-center"><?php echo $l->t('Data protection');?></h3>
        <h1 class="section--heading-1 text-center"><?php echo $l->t('Secure your data');?></h1>
        <div class="distribution--ilustration"></div>
        <h3 class="section--intro text-center"><?php echo $l->t('
        While data needs to be at financial professionals\' finger tips at all times, the IT department must ensure that policies around securing and sharing sensitive documents are respected.');?></p>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1 feature--block">
            <p class="section--paragraph"><?php echo $l->t('Financial documents are extremely sensitive. Clients care deeply about their privacy and keeping their data secure while regulators give heavy penalties for data leaks. Nextcloud offers you the tools to keep data compliant and safe.');?></p>
            <p class="section--paragraph"><ul>
            <li><strong><?php echo $l->t('Legal compliance');?></strong><br/>
            <?php echo $l->t('Federal data protection and GDPR-compliant, protecting data sovereignty, keep the server location in your country.');?></li>
            <li><strong><?php echo $l->t('data security');?></strong><br />
            <?php echo $l->t('Multiple levels of encryption (HTTPS/SSL/TLS, AES-256 or stronger, server-side and end-to-end encryption) ensure the highest level of data protection from hacking.');?></li>
            <li><strong><?php echo $l->t('Client- and case related authorization');?></strong><br/>
            <?php echo $l->t('A dedicated user and group management as well as a rights system allows the assignment of access rights according to your requirements.');?></li>
            </ul>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud is a popular self-hosted solution in businesses dealing with financial documents for its ability to strictly control access to data and industry-leading security capabilities.');?></p>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-6">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/file-access-control-nw.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title"><?php echo $l->t('File Access Control');?></h3>
            <p class="section--paragraph"><?php echo $l->t('The File Access Control feature of Nextcloud enables IT to codify legal and policy requirements, blocking unauthorized users uploading or downloading data following defined rules. Criteria include IP address ranges, group membership, file type and size, time and more. Data retention can be controlled as well, enabling administrators to limit the lifetime of certain files.');?></p>
            <a href="<?php echo home_url('workflow') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('File Access Control');?></a>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-6 image--floated">
            <a><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/monitoring-nw.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title"><?php echo $l->t('Monitoring and auditing logs');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Nextcloud offers built-in powerful monitoring capabilities, enabling organizations to ensure smooth performance. Systems can be monitored using the web interface or through monitoring and systems intelligence tools like OpenNMS, Splunk, Nagios or others. A full auditing system logs all user actions, enabling fully compliant usage of file sync and share.');?></p>
            <a href="<?php echo home_url('monitoring') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Monitoring and auditing');?></a>
        </div>
    </div>
    <!--<div class="row feature-row">
        <div class="col-md-6 image--feature new-img">
            <a><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/ransomware-recovery.png" alt="in action"/></a>
        </div>
        <div class="col-md-6 feature--block">
            <h3 class="section--paragraph__title"><?php echo $l->t('Best Ransomware protection in the industry');?></h3>
            <p class="section--paragraph"><?php echo $l->t('Ransomware attacks are becoming more targetted as lots of money can be extracted from businesses and government organizations. While insurance can cover direct costs, the disruption to business is immense regardless. Nextcloud goes far beyond competing solutions, offering automated, one-click ransomware recovery tools.');?></p>
            <a href="https://nextcloud.com/blog/amidst-rising-ransomware-costs-another-us-city-pays-hundreds-of-thousands-to-recover-data/" class="button button--blue button--arrow button--large"><?php echo $l->t('Ransomware risks and protection');?></a>
        </div>
    </div>-->
    <div class="row feature-row">
        <div class="col-md-6 image--floated ">
            <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/endtoend-server-nw.png"><img class="img-responsive screenshot" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/endtoend-server-nw.png" alt="in action" /></a>
        </div>
        <div class="col-md-6">
            <h3 class="section--paragraph__title"><?php echo $l->t('Encryption');?></h3>
            <p class="section--paragraph">
                <?php echo $l->t('Nextcloud uses industry-standard SSL/TLS encryption for data in transfer. Data at rest in storage can be encrypted using a default military grade AES-256 encryption with server-based or custom key management. Optionally and on a per-folder base data can be');?> <a class="hyperlink" href="<?php echo home_url('endtoend') ?>"><?php echo $l->t('end-to-end encrypted');?></a> <?php echo $l->t('on the client with the server assisting in sharing and key management using a Zero-Knowledge model.');?>
            </p>
            <p class="section--paragraph">
                <?php echo $l->t('Seamless integration and ease of use with key features like offline recovery keys, auditing and HSM support make Nextcloud Encryption capabilities leading in the industry.');?>
            </p>
        </div>
    </div>
    <div class="row ncc--container">
            <blockquote class="ncc--paragraph">Nextcloud understands the necessity to provide core principle baseline security requirements, as such Nextcloud 11 is built on these security principles to ultimately deliver a secure solution to their customers</blockquote>
        <div class="ncc--brand">
            <div class="ncc--brand--logo"></div>
            <p class="ncc--brand--text">
                <?php echo $l->t('NCC Group');?>
            </p>
        </div>
    </div>
    <div class="row feature-row">
        <div class="col-md-10 col-md-offset-1 feature--block">
            <p class="section--paragraph"><?php echo $l->t('Nextcloud offers first-in-class, third-party verified security backed by a USD 10.000 Security Bug Bounty program protecting against unauthorized access.');?></p>
            <a href="<?php echo home_url('secure') ?>" class="button button--blue button--arrow button--large"><?php echo $l->t('Security in Nextcloud');?></a>
        </div>
    </div>
</div>
</section>

<div class="separator"></div>

<section class="section--features">
<div class="container-widest">
	<h1 class="section--heading-1 section--text--center"><?php echo $l->t('Key features in Nextcloud');?></h1>
    <div class="row">
        <div class="col-md-1 featureblock">
            <i class="fa-server fa"></i>
        </div>
        <div class="col-md-3 featureblock">
            <p class=""><?php echo $l->t('Fully self-hosted, meaning all data is under your control. Nextcloud can leverage your existing storage, security and privacy policies. There is no vendor lock-in or tracking by us of any kind!');?></p>
        </div>
        <div class="col-md-1 featureblock">
            <i class="fa-tags fa"></i>
        </div>
        <div class="col-md-3 featureblock">
            <p class=""><?php echo $l->t('Nextcloud offers an easy to use user interface which comes with powerful search functionality, trash and versioning, favorites, tags and more ways to quickly reach the files users need.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-mobile fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Desktop and mobile clients for Windows / macOS / Linux, Android and iOS complement the web interface, integrating in the file system. Nextcloud can also be reached through WebDAV.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-1 featureblock">
        <i class="fa-puzzle-piece fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Authentication through LDAP / Active Directory, Kerberos and Shibboleth / SAML 2.0 and more and external storage supporting NFS, Object Storage and other protocols ensure easy integration.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-shield fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('First-class security policies, extensive security hardening features and File Access Control to ensure legal and privacy regulations are enforced at all times. Nextcloud comes with integrated logging, two-factor authentication and NIST compliant password policy control functionalities.');?></p>
        </div>
        <div class="col-md-1 featureblock">
        <i class="fa-list fa"></i>
        </div>
        <div class="col-md-3 featureblock">
        <p class=""><?php echo $l->t('Nextcloud offers fine-grained control from mobile, desktop or the Web over data access and sharing capabilities. Advanced quota management with configurable accounting of external storage and configurable file retention policies.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 featureblock">
        <p class="text-center"><a class="hyperlink" href="<?php echo home_url('buy') ?>"><?php echo $l->t('First class enterprise support with custom integration and security consulting available</a>.');?></p>
        </div>
    </div>
</div>
</section>
