<?php

return [
    // layout.app.blade.php (Used everywhere)
    'app.submit' => 'Submit',
    'app.dashboard' => 'Dashboard',
    'app.dashboard.admin' => 'Admin Dashboard',
    'app.dashboard.admin.users' => 'Manage Users',
    'app.register' => 'Register',
    'app.login' => 'Login',
    'app.logout' => 'Logout',
    'app.credits' => 'Credits',
    'app.logs' => 'Logs',
    'app.messages_sent' => 'Messages Sent',
    'app.credits_per_message' => 'credits per message',
    'app.created_at' => 'Created',
    'app.profile' => 'Profile',
    'app.edit' => 'Edit',
    'app.delete' => 'Delete',
    'app.tos' => 'Terms of service',
    'app.update' => 'Update',
    'app.language' => 'Language',
    'app.blank' => 'Leave blank if no changes required',

    // Titles
    'title.terms' => 'Terms',
    'title.use_license' => 'Use License',
    'title.sms_messaging' => 'SMS Messaging',
    'title.sales' => 'Sales',
    'title.your_data' => 'Your data',
    'title.disclaimer' => 'Disclaimer',
    'title.limitations' => 'Limitations',
    'title.accuracy' => 'Accuracy',
    'title.links' => 'Links',
    'title.modifications' => 'Modifications',
    'title.law' => 'Governing Law',
    'title.country' => 'Country',
    'title.spoofing' => 'Spoofing',
    'title.note' => 'Note',

    // Form
    'app.send' => 'Send',
    'app.quicksend' => 'Quick Send',
    'app.to' => 'To',
    'app.from' => 'From',
    'app.message' => 'Message',

    // Welcome.balde.php
    'home.welcome' => "Send SMS with your own custom Sender IDs. SMSBleu is easy to use, but powerful and reliable enough for marketers and power-users.",

    // auth.register.blade.php
    // auth.login.blade.php
    'auth.heading.login' => 'Log into your account',
    'auth.heading.register' => 'Register an account',
    'auth.label.name' => 'Name',
    'auth.label.email' => 'Email address',
    'auth.label.password' => 'Password',
    'auth.placeholder.name' => 'Enter name',
    'auth.placeholder.email' => 'Enter email address',
    'auth.placeholder.password' => 'Enter password',

    // dashboard.index.blade.php
    'dashboard.tos' => 'Make sure you read our <a href="/terms">terms of service</a>, all SMS must comply with applicable laws and regulations. All URLs must be approved. To have your URL whitelisted, <a href="/contact">contact us</a>.',
    'dashboard.welcome' => 'Hey, welcome back :name (:email)',
    'dashboard.information' => "Here's some quick information regarding your account.",

    // dashboard.admin.index.blade.php
    'dashboard.admin.users_registered' => 'Users Registered',
    'dashboard.admin.total_credits' => 'Total Credits',
    'dashboard.admin.manage_users' => 'Manage Users',
    'dashboard.admin.all_logs' => 'All Logs',
    'dashboard.admin.user_email' => 'User Email',

    // Errors
    'error.no_logs' => 'No logs available',
    'error.no_credits' => "You don't have enough credits to complete this action",

    // Terms
    'tos.terms' => "By accessing the SMSBleu.com website, you agree to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with all applicable local laws. If you do not agree with any of these conditions, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark laws. Your SMSBleu account is subject to immediate termination if you fail to comply with any of these conditions.",
    'tos.license' => '<ol type="a">
                                <li>Permission is granted to temporarily download one copy of the materials (information
                                    or software) on
                                    SMSBleu\'s website for personal, non-commercial transitory viewing only. This is the
                                    grant of a
                                    license, not a
                                    transfer of title, and under this license you may not:
                                    <ol type="i">
                                        <li>modify or copy the materials;</li>
                                        <li>use the materials for any commercial purpose, or for any public display
                                            (commercial or
                                            non-commercial);</li>
                                        <li>attempt to decompile or reverse engineer any software contained on the
                                            SMSBleu website;</li>
                                        <li>remove any copyright or other proprietary notations from the materials; or
                                        </li>
                                        <li>transfer the materials to another person or "mirror" the materials on any
                                            other server.</li>
                                    </ol>
                                </li>
                                <li>This license shall automatically terminate if you violate any of these restrictions
                                    and may be
                                    terminated by
                                    SMSBleu at any time. Upon terminating your viewing of these materials or upon the
                                    termination of
                                    this
                                    license, you must destroy any downloaded materials in your possession whether in
                                    electronic or
                                    printed
                                    format.</li>
                            </ol>',
    'tos.messaging' => '<ol type="a">
                                <li>By using the SMSBleu service you agree to abide by the following terms and
                                    regulations when sending
                                    SMS with
                                    SMSBleu:
                                    <ol type="i">
                                        <li>sent SMS must comply with all applicable laws and regulations;</li>
                                        <li>you may not impersonate government bodies or financial institutions for
                                            malicious purposes;
                                        </li>
                                        <li>spamming, "SMS bombing", phishing, scamming, and any similar activities are
                                            strictly
                                            prohibited;
                                        </li>
                                        <li>you may not use the SMSBleu service to harass, harm, and/or threaten other
                                            persons and/or
                                            companies.
                                        </li>
                                    </ol>
                                </li>

                                <li>All URLs must be manually approved before being included in outgoing SMS. To have
                                    your URL
                                    whitelisted,
                                    please contact us. Link shorteners will not be whitelisted
                                    unless you own
                                    the
                                    domain.</li>
                            </ol>',
    'tos.sales' => '<ol type="a">
                                <li>All sales are final, but refunds may be issues based on our own discretion and if
                                    you meet the
                                    following
                                    criteria:
                                    <ol type="i">
                                        <li>your SMS messages are unable to reach your target number;</li>
                                        <li>your target country and/or network must be on our <a
                                                href="countries">list of
                                                supported countries</a>;</li>
                                        <li>if your complaint is not being able to use a custom sender ID, your target
                                            country/network
                                            must be
                                            <a href="countries">listed</a> to support "SMS Spoofing".
                                        </li>
                                    </ol>
                                </li>
                                <li>Harassing support staff will not be tolerated and may result in loss of refund
                                    eligibility and/or
                                    account
                                    suspension.</li>
                            </ol>',
    'tos.data' => '<ol type="a">
                                <li>How we treat your data, and general information about our policies
                                    <ol type="i">
                                        <li>all SMS messages are logged in our database to prevent abuse;</li>
                                        <li>SMS logs are only accessible by the sole owner, and will never be shared
                                            with any other
                                            entity
                                            except law enforcement when required;</li>
                                        <li>in the event SMSBleu is required by law to turn over log data to law
                                            enforcement, the
                                            affected
                                            user(s) will be notified by email and shall receive the same log data;</li>
                                        <li>SMSBleu stores the following obligatory user information: site activity,
                                            username, email,
                                            transaction
                                            logs and sms logs. IP addresses are masked.;</li>
                                        <li>SMSBleu also stores voluntary profile information. This information is not a
                                            requirement to
                                            use the
                                            SMSBleu service, and is provided at your own volition;</li>
                                        <li>you may request account deletion and/or your account data by <a
                                                href="contact">contacting
                                                us
                                                here</a>. Your SMS logs can be deleted from our servers, but for legal
                                            reasons they will
                                            remain
                                            stored in an offline volume only accessible by the sole owner;</li>
                                        <li>in the event SMSBleu is transferred to new ownership, all SMS logs will be
                                            deleted but
                                            remain
                                            stored
                                            at an offline volume only accessible by the previous sole owner.</li>
                                    </ol>
                                </li>
                            </ol>',
    'tos.disclaimer' => '<ol type="a">
                                <li>The materials on SMSBleu\'s website are provided on an \'as is\' basis. SMSBleu makes
                                    no warranties,
                                    expressed or
                                    implied, and hereby disclaims and negates all other warranties including, without
                                    limitation,
                                    implied
                                    warranties or conditions of merchantability, fitness for a particular purpose, or
                                    non-infringement
                                    of
                                    intellectual property or other violation of rights.</li>
                                <li>Further, SMSBleu does not warrant or make any representations concerning the
                                    accuracy, likely
                                    results, or
                                    reliability of the use of the materials on its website or otherwise relating to such
                                    materials or on
                                    any
                                    sites linked to this site.</li>
                            </ol>',
    'tos.limitations' => "In no event shall SMSBleu or its subsidiaries be liable for any damages (including,
                                without limitation,
                                damages
                                for loss of data or profit, or due to business interruption) arising out of the use or
                                inability to use
                                the
                                materials on SMSBleu's website, even if SMSBleu or a SMSBleu authorized representative
                                has been notified
                                orally or
                                in writing of the possibility of such damage. Because some jurisdictions do not allow
                                limitations on
                                implied
                                warranties, or limitations of liability for consequential or incidental damages, these
                                limitations may
                                not apply
                                to you.",
    'tos.accuracy' => "The materials appearing on SMSBleu's website could include technical, typographical, or
                                photographic
                                errors.
                                SMSBleu does not warrant that any of the materials on its website are accurate, complete
                                or current.
                                SMSBleu may
                                make changes to the materials contained on its website at any time without notice.
                                However SMSBleu does
                                not make
                                any commitment to update the materials.",
    'tos.links' => "SMSBleu has not reviewed all of the sites linked to its website and is not responsible
                                for the contents
                                of
                                any
                                such linked site. The inclusion of any link does not imply endorsement by SMSBleu of the
                                site. Use of
                                any
                                such
                                linked website is at the user's own risk.",
    'tos.modifications' => "SMSBleu may revise these terms of service for its website at any time without notice. By
                                using this
                                website you
                                are agreeing to be bound by the then current version of these terms of service.",
    'tos.law' => "These terms and conditions are governed by and construed in accordance with the laws of
                                Norway and you
                                irrevocably submit to the exclusive jurisdiction of the courts in that location.",


    // Country text
    'country.disclaimer' => 'Please note that the terms for SMS broadcasts in individual countries are constantly changing, and we therefore cannot be held responsible for incorrect information. However, we make every effort to ensure that all information is up-to-date.',
    'country.yes' => 'Yes',
    'country.yes_note' => 'Yes (see note)',
    'country.yes_star' => 'Yes*',
    'country.no' => 'No',
    'country.no_note' => 'No (see note)',
    'country.no_star' => 'No*',
    'country.sometimes' => 'Sometimes',
    'country.sometimes_star' => 'Sometimees*',
    'country.unknown' => 'Unknown',
];
