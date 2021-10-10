<?php
return [
    // layout.app.blade.php (Used everywhere)
    'app.submit' => 'Soumettre',
    'app.dashboard' => 'Tableau de bord',
    'app.dashboard.admin' => 'Tableau de bord administrateur',
    'app.dashboard.admin.users' => 'gérer les utilisateurs',
    'app.register' => "S'inscrire",
    'app.login' => 'Connexion',
    'app.logout' => 'Se déconnecter',
    'app.credits' => 'Crédits',
    'app.logs' => 'Logs',
    'app.messages_sent' => 'Messages envoyés',
    'app.credits_per_message' => 'crédits par message',
    'app.created_at' => 'Créé',
    'app.profile' => 'Profil',
    'app.edit' => 'Éditer',
    'app.delete' => 'Effacer',
    'app.tos' => 'Conditions d\'utilisation',
    'app.update' => 'Mettre à jour',
    'app.language' => 'Langue',
    'app.blank' => 'Laisser vide si aucune modification n\'est requise',

    // Titles
    'title.terms' => 'Terms',
    'title.use_license' => 'Utiliser la licence',
    'title.sms_messaging' => 'Messagerie SMS',
    'title.sales' => 'Ventes',
    'title.your_data' => 'Vos données',
    'title.disclaimer' => 'Avertissement',
    'title.limitations' => 'Limitations',
    'title.accuracy' => 'Précision',
    'title.links' => 'Liens',
    'title.modifications' => 'Modifications',
    'title.law' => 'Loi applicable',
    'title.country' => 'Pays',
    'title.spoofing' => 'Spoofing',
    'title.note' => 'Note',

    // Form
    'app.send' => 'Envoyer',
    'app.quicksend' => 'Envoi rapide',
    'app.to' => 'À',
    'app.from' => 'De',
    'app.message' => 'Un message',

    // Welcome.balde.php
    'home.welcome' => "Envoyez des SMS avec vos propres identifiants d'expéditeur personnalisés. SMSBleu est facile à utiliser, mais suffisamment puissant et fiable pour les spécialistes du marketing et les utilisateurs expérimentés.",

    // auth.register.blade.php
    // auth.login.blade.php
    'auth.heading.login' => 'Connectez-vous à votre compte',
    'auth.heading.register' => 'Enregistrez un compte',
    'auth.label.name' => 'Nom',
    'auth.label.email' => 'Adresse e-mail',
    'auth.label.password' => 'Mot de passe',
    'auth.placeholder.name' => 'Entrez le nom',
    'auth.placeholder.email' => "Entrer l'adresse e-mail",
    'auth.placeholder.password' => 'Entrer le mot de passe',

    // dashboard.index.blade.php
    'dashboard.tos' => 'Assurez-vous de lire nos <a href="/terms"> conditions d\'utilisation </a>, tous les SMS doivent être conformes aux lois et réglementations applicables. Toutes les URL doivent être approuvées. Pour que votre URL soit ajoutée à la liste blanche, <a href="/contact"> contactez-nous </a>.',
    'dashboard.welcome' => 'Hé, bon retour :name (:email)',
    'dashboard.information' => "Voici quelques informations rapides concernant votre compte.",

    // dashboard.admin.index.blade.php
    'dashboard.admin.users_registered' => 'Utilisateurs enregistrés',
    'dashboard.admin.total_credits' => 'Crédits totaux',
    'dashboard.admin.manage_users' => 'gérer les utilisateurs',
    'dashboard.admin.all_logs' => 'All Logs',
    'dashboard.admin.user_email' => "E-mail de l'utilisateur",

    // Errors
    'error.no_logs' => 'No logs available',
    'error.no_credits' => "Vous n'avez pas assez de crédits pour terminer cette action",

    'tos.terms' => "En accédant au site Web SMSBleu.com, vous acceptez d'être lié par ces conditions de service, toutes les lois et réglementations applicables, et acceptez que vous êtes responsable du respect de toutes les lois locales applicables. Si vous n'êtes pas d'accord avec l'une de ces conditions, il vous est interdit d'utiliser ou d'accéder à ce site. Les éléments contenus dans ce site Web sont protégés par les lois applicables sur le droit d'auteur et les marques de commerce. Votre compte SMSBleu est sujet à une résiliation immédiate si vous ne respectez pas l'une de ces conditions.",
    'tos.license' => '<ol type="a">
                                <li>La permission est accordée de télécharger temporairement une copie des documents (informations
                                    ou logiciel) sur
                                    Site Web de SMSBleu pour une consultation transitoire personnelle et non commerciale uniquement. C\'est le
                                    l\'octroi d\'un
                                    licence, pas un
                                    transfert de propriété, et en vertu de cette licence, vous ne pouvez pas :
                                    <ol type="i">
                                        <li>modifier ou copier les documents ;</li>
                                        <li>utiliser le matériel à des fins commerciales ou pour toute exposition publique
                                            (commerciale ou
                                            non commercial);</li>
                                        <li>tenter de décompiler ou de désosser tout logiciel contenu sur le
                                            Site Web SMSBleu ;</li>
                                        <li>supprimer tout droit d\'auteur ou autres mentions de propriété des documents ; ou
                                        </li>
                                        <li>transférer les éléments à une autre personne ou "mettre en miroir" les éléments sur n\'importe quel
                                            autre serveur.</li>
                                    </ol>
                                </li>
                                <li>Cette licence sera automatiquement résiliée si vous enfreignez l\'une de ces restrictions
                                    et peut-être
                                    terminé par
                                    SMSBleu à tout moment. À la fin de votre visionnage de ces documents ou à la
                                    résiliation de
                                    cette
                                    licence, vous devez détruire tout matériel téléchargé en votre possession, que ce soit en
                                    électronique ou
                                    imprimé
                                    formater.</li>
                            </ol>',
    'tos.messaging' => '<ol type="a">
                                <li>En utilisant le service SMSBleu, vous acceptez de respecter les conditions suivantes et
                                    règlement lors de l\'envoi
                                    SMS avec
                                    SMSBleu :
                                    <ol type="i">
                                        <li>les SMS envoyés doivent être conformes à toutes les lois et réglementations applicables ;</li>
                                        <li>vous ne pouvez pas usurper l\'identité d\'organismes gouvernementaux ou d\'institutions financières pour
                                            des fins malveillantes ;
                                        </li>
                                        <li>le spam, le "bombardement SMS", l\'hameçonnage, l\'escroquerie et toute activité similaire sont
                                            strictement
                                            interdit;
                                        </li>
                                        <li>vous ne pouvez pas utiliser le service SMSBleu pour harceler, blesser et/ou menacer d\'autres
                                            personnes et/ou
                                            entreprises.
                                        </li>
                                    </ol>
                                </li>

                                <li>Toutes les URL doivent être approuvées manuellement avant d\'être incluses dans les SMS sortants. Pour avoir
                                    votre URL
                                    en liste blanche,
                                    veuillez nous contacter. Les raccourcisseurs de liens ne seront pas ajoutés à la liste blanche
                                    sauf si vous possédez
                                    les
                                    domaine.</li>
                            </ol>',
    'tos.sales' => '<ol type="a">
                                <li>Toutes les ventes sont finales, mais les remboursements peuvent être des problèmes basés sur notre propre discrétion et si
                                    vous rencontrez le
                                    Suivant
                                    Critères:
                                    <ol type="i">
                                        <li>vos messages SMS ne parviennent pas à atteindre votre numéro cible ;</li>
                                        <li>votre pays et/ou réseau cible doit figurer sur notre <a
                                                href="countries">liste des
                                                pays pris en charge</a> ;</li>
                                        <li>si votre réclamation ne permet pas d\'utiliser un identifiant d\'expéditeur personnalisé, votre cible
                                            pays/réseau
                                            doit être
                                            <a href="countries">répertorié</a> pour prendre en charge le "SMS Spoofing".
                                        </li>
                                    </ol>
                                </li>
                                <li>Le harcèlement du personnel d\'assistance ne sera pas toléré et peut entraîner la perte du remboursement
                                    éligibilité et/ou
                                    Compte
                                    suspension.</li>
                            </ol>',
    'tos.data' => '<ol type="a">
                                <li>Comment nous traitons vos données et informations générales sur nos politiques
                                    <ol type="i">
                                        <li>tous les SMS sont enregistrés dans notre base de données pour éviter les abus ;</li>
                                        <li>Les journaux SMS ne sont accessibles que par le seul propriétaire et ne seront jamais partagés
                                            avec tout autre
                                            entité
                                            à l\'exception des forces de l\'ordre si nécessaire ;</li>
                                        <li>dans le cas où SMSBleu est tenu par la loi de remettre les données du journal à la loi
                                            l\'exécution, le
                                            affecté
                                            les utilisateurs seront avertis par e-mail et recevront les mêmes données de journal ;</li>
                                        <li>SMSBleu stocke les informations utilisateur obligatoires suivantes : activité du site,
                                            nom d\'utilisateur, e-mail,
                                            transaction
                                            journaux et journaux de SMS. Les adresses IP sont masquées.;</li>
                                        <li>SMSBleu stocke également les informations de profil volontaire. Ces informations ne sont pas un
                                            exigence de
                                            Utilisez le
                                            SMSBleu, et est fourni à votre propre gré ;</li>
                                        <li>vous pouvez demander la suppression de votre compte et/ou vos données de compte par <a
                                                href="contact">contacter
                                                nous
                                                ici</a>. Vos journaux SMS peuvent être supprimés de nos serveurs, mais pour des raisons légales
                                            raisons pour lesquelles ils
                                            rester
                                            stocké dans un volume hors ligne accessible uniquement par le seul propriétaire ;</li>
                                        <li>dans le cas où SMSBleu est transféré à un nouveau propriétaire, tous les journaux SMS seront
                                            supprimé mais
                                            rester
                                            stocké
                                            à un volume hors ligne uniquement accessible par l\'ancien propriétaire unique.</li>
                                    </ol>
                                </li>
                            </ol>',
    'tos.disclaimer' => '<ol type="a">
                                <li>Les documents sur le site Web de SMSBleu sont fournis "tels quels". SMSBleu fait
                                    aucune garantie,
                                    exprimé ou
                                    implicite, et par la présente décline et annule toutes les autres garanties, y compris, sans
                                    limitation,
                                    implicite
                                    des garanties ou des conditions de qualité marchande, d\'adéquation à un usage particulier, ou
                                    non-contrefaçon
                                    de
                                    propriété intellectuelle ou autre violation des droits.</li>
                                <li>En outre, SMSBleu ne garantit ni ne fait aucune déclaration concernant le
                                    précision, probablement
                                    résultats, ou
                                    la fiabilité de l\'utilisation des matériaux sur son site Web ou autrement liés à ces
                                    matériaux ou sur
                                    tout
                                    sites liés à ce site.</li>
                            </ol>',
    'tos.limitations' => "En aucun cas SMSBleu ou ses filiales ne pourront être tenus responsables de tout dommage (y compris,
                                sans limite,
                                dégâts
                                pour perte de données ou de profit, ou en raison d'une interruption d'activité) résultant de l'utilisation ou
                                incapacité à utiliser
                                les
                                documents sur le site Web de SMSBleu, même si SMSBleu ou un représentant autorisé de SMSBleu
                                a été notifié
                                oralement ou
                                par écrit de la possibilité de tels dommages. Parce que certaines juridictions ne permettent pas
                                limites sur
                                implicite
                                garanties ou limitations de responsabilité pour les dommages indirects ou accessoires, ces
                                les limitations peuvent
                                ne s'applique pas
                                pour vous.",
    'tos.accuracy' => "Les documents apparaissant sur le site Web de SMSBleu peuvent inclure des éléments techniques, typographiques ou
                                 photographique
                                 les erreurs.
                                 SMSBleu ne garantit pas que les éléments de son site Web sont exacts, complets
                                 ou courant.
                                 SMSBleu peut
                                 apporter des modifications aux documents contenus sur son site Web à tout moment et sans préavis.
                                 Cependant SMSBleu fait
                                 ne pas faire
                                 tout engagement de mise à jour du matériel.",
    'tos.links' => "SMSBleu n'a pas examiné tous les sites liés à son site Web et n'est pas responsable
                                 pour le contenu
                                 de
                                 tout
                                 tel site lié. L'inclusion de tout lien n'implique pas l'approbation par SMSBleu du
                                 placer. Utilisation de
                                 tout
                                 tel
                                 site Web lié est aux risques et périls de l'utilisateur.",
    'tos.modifications' => "SMSBleu peut réviser les présentes conditions d'utilisation de son site Web à tout moment et sans préavis. Par
                                 en utilisant ceci
                                 site Web vous
                                 acceptent d'être liés par la version alors en vigueur de ces conditions d'utilisation.",
    'tos.law' => "Ces termes et conditions sont régis et interprétés conformément aux lois de
                                 La Norvège et vous
                                 soumettre irrévocablement à la juridiction exclusive des tribunaux de cet endroit. Ces termes et conditions sont régis et interprétés conformément aux lois de
                                 France et toi
                                 soumettre irrévocablement à la compétence exclusive des tribunaux de cet endroit.",

    // Country text
    'country.disclaimer' => 'Veuillez noter que les conditions de diffusion des SMS dans chaque pays changent constamment, et nous ne pouvons donc être tenus responsables des informations incorrectes. Cependant, nous nous efforçons de nous assurer que toutes les informations sont à jour.',
    'country.yes' => 'Oui',
    'country.yes_note' => 'Oui (voir note)',
    'country.yes_star' => 'Oui*',
    'country.no' => 'Non',
    'country.no_note' => 'Non (voir note)',
    'country.no_star' => 'Non*',
    'country.sometimes' => 'Parfois',
    'country.sometimes_star' => 'Parfois*',
    'country.unknown' => 'Inconnu',
];
