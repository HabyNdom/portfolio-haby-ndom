<?php
/**
 * Données structurées du portfolio (Projets, Compétences et Parcours)
 */

// 1. LISTE COMPLÈTE DES PROJETS
$projects = [
    'recrutement' => [
        'id' => 'recrutement',
        'title' => 'Plateforme de Recrutement — ESCOA',
        'subtitle' => 'Gestion du recrutement universitaire & candidatures professeurs',
        'badge' => '★ Projet Vedette · Full-Stack & Sécurité',
        'category' => 'backend app',
        'category_label' => 'Application Web Full-Stack',
        'search_terms' => 'plateforme recrutement escoa professeurs enseignement php mysql pdo sql csrf bcrypt mvc apache candidatures',
        'description' => "Système web complet de gestion du recrutement universitaire conçu pour moderniser le processus d'embauche des enseignants et intervenants. L'application gère l'intégralité du cycle de recrutement avec une haute exigence de sécurité et d'intégrité des données.",
        'image' => 'images/logo-recrutement.svg',
        'tech_tags' => ['PHP 8', 'MySQL / PDO', 'Architecture MVC', 'Sécurité CSRF & Bcrypt', 'Validation MIME', 'JavaScript ES6+', 'Apache (.htaccess)'],
        'accent_tags' => ['PHP 8', 'MySQL / PDO'],
        'github_url' => 'https://github.com/HabyNdom/plateforme-recrutement-escoa',
        'is_featured' => true,
        'highlights' => [
            ['title' => 'Sécurité de Niveau Production', 'desc' => 'Requêtes préparées PDO contre injections SQL, jetons CSRF systématiques, mots de passe hachés en Bcrypt, limitation anti force brute.'],
            ['title' => 'Gestion Documentaire Sécurisée', 'desc' => 'Vérification stricte du type MIME réel des CV/diplômes déposés, blocage de l\'exécution de code dans les uploads via .htaccess.'],
            ['title' => 'Double Espace Métier', 'desc' => 'Espace candidat (création de profil, suivi de dossier en direct) et Espace recruteur (tableaux de bord, annotations, workflow d\'évaluation).'],
            ['title' => 'Moteur de Filtrage Multi-Critères', 'desc' => 'Recherche instantanée d\'offres par filière, module de cours, niveau académique et type de contrat horaire ou permanent.']
        ]
    ],
    'qsen' => [
        'id' => 'qsen',
        'title' => 'Qsen — Quincaillerie Digitale',
        'subtitle' => 'Boutique en ligne d\'outillage & matériaux de construction',
        'badge' => 'E-Commerce',
        'category' => 'ecommerce',
        'category_label' => 'Boutique en ligne',
        'search_terms' => 'qsen boutique quincaillerie e-commerce outils materiaux panier html css javascript',
        'description' => "Boutique en ligne spécialisée dans les matériaux et l'outillage. Interface ergonomique pensée pour simplifier la sélection des articles, la constitution du panier et la commande en contexte local.",
        'image' => 'images/logo-qsen.svg',
        'tech_tags' => ['HTML5', 'CSS3 Grid', 'JavaScript', 'Panier Dynamique', 'Mobile-First'],
        'accent_tags' => ['HTML5', 'CSS3 Grid'],
        'github_url' => null,
        'is_featured' => false
    ],
    'fouta' => [
        'id' => 'fouta',
        'title' => 'LAAWOL — Mobilité Fouta ↔ AIBD / Dakar',
        'subtitle' => 'Plateforme de réservation et logistique de transport interurbain',
        'badge' => 'Transport & Mobilité',
        'category' => 'service',
        'category_label' => 'Mobilité & Services',
        'search_terms' => 'laawol fouta aibd dakar transport mobilite reservation voiture services trajets voyage',
        'description' => "Plateforme digitale facilitant la réservation de trajets interurbains reliant la région du Fouta à l'aéroport international Blaise Diagne et à Dakar. Structuration des itinéraires, tarification claire et planification de voyage.",
        'image' => 'images/logo-laawol.svg',
        'tech_tags' => ['JavaScript', 'Responsive Design', 'UX Thinking', 'Services'],
        'accent_tags' => ['JavaScript', 'UX Thinking'],
        'github_url' => null,
        'is_featured' => false
    ],
    'senquiz' => [
        'id' => 'senquiz',
        'title' => 'SenQuiz — Quiz Culturel Sénégalais',
        'subtitle' => 'Application éducative interactive et ludique',
        'badge' => 'Éducation & Culture',
        'category' => 'app',
        'category_label' => 'Application Éducative',
        'search_terms' => 'senquiz quizsenculture quiz senegal culture education histoire geographie javascript dom interactif',
        'description' => "Application web interactive ludique pour valoriser le patrimoine, l'histoire et la culture sénégalaise. Moteur de questions dynamiques, chronomètre interactif, calcul de score et restitution pédagogique.",
        'image' => 'images/logo-senquiz.svg',
        'tech_tags' => ['JavaScript ES6+', 'Manipulation DOM', 'Animations CSS', 'Gamification'],
        'accent_tags' => ['JavaScript ES6+'],
        'github_url' => 'https://github.com/HabyNdom/QuizSenCulture',
        'is_featured' => false
    ],
    'calculatrice' => [
        'id' => 'calculatrice',
        'title' => 'Calculatrice Web Interactive',
        'subtitle' => 'Outil arithmétique responsive avec gestion des raccourcis clavier',
        'badge' => 'Utilitaire Web',
        'category' => 'app',
        'category_label' => 'Application Web',
        'search_terms' => 'calculatrice application web math calcul operations arithmetiques javascript dom ecouteurs evenements',
        'description' => "Application arithmétique développée en JavaScript vanilla. Gestion précise des priorités d'opérations, prise en charge du clavier physique, gestion des erreurs mathématiques et affichage réactif.",
        'image' => 'images/logo-calculatrice.svg',
        'tech_tags' => ['JavaScript Vanilla', 'Logique Arithmétique', 'Key Events', 'CSS Flexbox'],
        'accent_tags' => ['JavaScript Vanilla'],
        'github_url' => 'https://github.com/HabyNdom/calculatrice',
        'is_featured' => false
    ],
    'marketing' => [
        'id' => 'marketing',
        'title' => 'Stratégie d\'Acquisition Digitale — ESCOA',
        'subtitle' => 'Campagnes publicitaires et optimisation de conversion',
        'badge' => 'Commerce & Digital',
        'category' => 'service',
        'category_label' => 'Commerce & Stratégie',
        'search_terms' => 'marketing digital campagne meta ads escoa conversion publicite analytics etudiants inscriptions',
        'description' => "Élaboration d'une stratégie de communication digitale et déploiement de campagnes Meta Ads pour promouvoir les filières académiques et optimiser le taux de conversion des inscriptions étudiantes.",
        'image' => null,
        'tech_tags' => ['Marketing Digital', 'Meta Ads', 'Tunnel de Conversion', 'Analytics'],
        'accent_tags' => ['Marketing Digital', 'Tunnel de Conversion'],
        'github_url' => null,
        'is_featured' => false
    ]
];

// 2. COMPÉTENCES TECHNIQUES (SANS REACT NI NODE.JS)
$technical_skills = [
    [
        'icon' => '🌐',
        'title' => 'Langages & Web Fondamental',
        'subtitle' => 'Normes W3C, logique client-serveur et programmation moderne',
        'skills' => [
            ['name' => 'HTML5 Sémantique & Accessibilité (a11y)', 'level' => 'Avancé', 'desc' => 'Structure sémantique irréprochable, balises ARIA, SEO on-page, conformité WCAG.'],
            ['name' => 'CSS3 Moderne, Flexbox & CSS Grid', 'level' => 'Avancé', 'desc' => 'Mise en page complexe, Custom Properties (variables CSS), Responsive Mobile-First, animations fluides.'],
            ['name' => 'JavaScript ES6+ Moderne', 'level' => 'Maîtrisé', 'desc' => 'Manipulation avancée du DOM, programmation asynchrone (Fetch, Promises, async/await), architecture modulaire, POO.'],
            ['name' => 'PHP 8 & Côté Serveur (Backend)', 'level' => 'Maîtrisé', 'desc' => 'Programmation Orientée Objet (POO), gestion rigoureuse des sessions, authentification, routage et séparation MVC.'],
            ['name' => 'Python', 'level' => 'Fondamentaux', 'desc' => 'Structures de données, logique algorithmique, traitement de fichiers et scripting d\'automatisation.']
        ]
    ],
    [
        'icon' => '🗄️',
        'title' => 'Bases de Données & Persistance',
        'subtitle' => 'Modélisation relationnelle, intégrité et requêtes optimisées',
        'skills' => [
            ['name' => 'Modélisation Relationnelle (MCD / MLD)', 'level' => 'Maîtrisé', 'desc' => 'Conception de schémas de bases de données normalisés (1NF à 3NF), intégrité référentielle, clés primaires/étrangères.'],
            ['name' => 'SQL, MySQL & MariaDB', 'level' => 'Avancé', 'desc' => 'Requêtes complexes, jointures (INNER/LEFT), agrégations, indexation, sous-requêtes et gestion phpMyAdmin/CLI.'],
            ['name' => 'Requêtes Préparées & PDO', 'level' => 'Avancé', 'desc' => 'Sécurisation totale des accès aux données via PDO, élimination systématique des vulnérabilités d\'injection SQL.'],
            ['name' => 'Transactions & Intégrité ACID', 'level' => 'Appliqué', 'desc' => 'Préservation de la cohérence des données lors d\'opérations multi-tables (inscriptions, candidatures, commandes).']
        ]
    ],
    [
        'icon' => '🛡️',
        'title' => 'Architecture, Sécurité & Qualité',
        'subtitle' => 'Conception robuste, protection des données et maintenabilité',
        'skills' => [
            ['name' => 'Architecture MVC & Modulaire', 'level' => 'Maîtrisé', 'desc' => 'Découpage net des responsabilités : logique métier séparée du rendu HTML et de l\'accès aux bases de données.'],
            ['name' => 'Sécurité Web Fondamentale', 'level' => 'Renforcé', 'desc' => 'Protection anti-CSRF (tokens uniques), hachage Bcrypt, assainissement XSS (htmlspecialchars), limitation anti brute force.'],
            ['name' => 'Validation Stricte des Fichiers (MIME)', 'level' => 'Appliqué', 'desc' => 'Vérification du contenu binaire réel des documents téléversés et verrouillage d\'exécution par .htaccess.'],
            ['name' => 'Clean Code & Principes DRY / KISS', 'level' => 'Standard', 'desc' => 'Code lisible, documenté, fonctions à responsabilité unique et convention de nommage claire.']
        ]
    ],
    [
        'icon' => '⚙️',
        'title' => 'Outils, Systèmes & Réseaux',
        'subtitle' => 'Environnement de travail professionnel et workflow moderne',
        'skills' => [
            ['name' => 'Git & GitHub (Version Control)', 'level' => 'Maîtrisé', 'desc' => 'Gestion de versions, branches de fonctionnalités, commits explicites, résolution de conflits et collaboration.'],
            ['name' => 'Ligne de Commande & Terminal (CLI)', 'level' => 'Maîtrisé', 'desc' => 'Environnements PowerShell et Bash sous Linux, manipulation de fichiers, gestion des permissions et scripts shell.'],
            ['name' => 'Serveurs Locaux & Apache (XAMPP / LAMP)', 'level' => 'Maîtrisé', 'desc' => 'Configuration d\'hôtes locaux, modules de réécriture Apache, virtualisation et environnements de test isolés.'],
            ['name' => 'Réseaux & Protocoles Web', 'level' => 'Acquis', 'desc' => 'Fonctionnement HTTP/HTTPS, codes d\'état, modèle OSI, adressage IP, DNS et simulation Cisco Packet Tracer.']
        ]
    ]
];

// 3. COMPÉTENCES TRANSVERSALES (SOFT SKILLS)
$soft_skills = [
    [
        'icon' => '🧠',
        'title' => 'Résolution Méthodique de Problèmes',
        'desc' => "Face à un bug ou une exigence technique complexe, j'adopte une démarche analytique : décomposition du problème en sous-composants, isolation des anomalies et validation rigoureuse des solutions.",
        'application' => 'Appliqué au durcissement sécuritaire de la plateforme ESCOA'
    ],
    [
        'icon' => '🎯',
        'title' => 'Rigueur & Sens du Détail',
        'desc' => "Attachement profond à la qualité du code produit : respect des standards, gestion préventive des cas d'erreur (edge cases) et finitions soignées tant sur le plan visuel que fonctionnel.",
        'application' => 'Validation des entrées formulaires et protection MIME'
    ],
    [
        'icon' => '🚀',
        'title' => 'Autonomie & Apprentissage Continu',
        'desc' => "Grande curiosité intellectuelle et capacité d'auto-formation rapide. Je consulte directement la documentation officielle pour assimiler de nouveaux concepts et résoudre des blocages en autonomie.",
        'application' => 'Auto-apprentissage continu et veille technologique'
    ],
    [
        'icon' => '💬',
        'title' => 'Communication Claire & Écoute',
        'desc' => "Aptitude à dialoguer avec des interlocuteurs non techniques pour traduire leurs besoins métiers en spécifications fonctionnelles claires, et rendre compte de l'avancement avec transparence.",
        'application' => 'Rédaction de documentations techniques et cahiers des charges'
    ],
    [
        'icon' => '🤝',
        'title' => 'Esprit d\'Équipe & Collaboration',
        'desc' => "Sens du travail collectif, esprit d'entraide, réceptivité aux retours constructifs et utilisation méthodique des outils de collaboration (Git, revues de code, planification par jalons).",
        'application' => 'Gestion collaborative de versions sous GitHub'
    ],
    [
        'icon' => '📈',
        'title' => 'Sens du Produit & Vision Métier',
        'desc' => "Ma double sensibilité en développement web et commerce digital me permet de ne jamais perdre de vue la finalité du logiciel : offrir une expérience fluide qui sert les objectifs économiques et réels.",
        'application' => 'Conception de parcours e-commerce et tunnels de conversion'
    ]
];

// 4. PARCOURS CHRONOLOGIQUE
$timeline = [
    [
        'year' => '2024',
        'badge' => '24',
        'title' => 'Les Fondations de l\'Ingénierie Informatique',
        'desc' => 'Découverte approfondie de la logique algorithmique, de l\'architecture des ordinateurs et des normes du web fondamental (HTML5 sémantique, CSS3 moderne). Premiers scripts et structuration rigoureuse de la pensée computationnelle.'
    ],
    [
        'year' => '2025',
        'badge' => '25',
        'title' => 'Développement d\'Applications & Modélisation de Données',
        'desc' => 'Conception et mise en production de projets web concrets : la boutique e-commerce Qsen (quincaillerie en ligne), la plateforme de mobilité LAAWOL (transport Fouta ↔ Dakar), et l\'application éducative SenQuiz. Maîtrise de la modélisation relationnelle SQL (MCD/MLD) et du DOM JavaScript.'
    ],
    [
        'year' => '2026',
        'badge' => '26',
        'title' => 'Systèmes Full-Stack, Sécurité Avancée & Professionnalisation',
        'desc' => 'Réalisation majeure avec la Plateforme de Recrutement — ESCOA (PHP 8, MySQL/PDO, architecture MVC, sécurité contre failles CSRF/SQLi, validation MIME). Approfondissement des pratiques d\'ingénierie logicielle et préparation active à une intégration en stage ou mission professionnelle.'
    ]
];
