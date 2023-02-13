-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 12:50 AM
-- Server version: 5.6.21
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel_articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
`id` bigint(20) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `article`, `image`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(12, 'Laravel 8 User Roles and Permissions', 'In this post, I will share how to implement the ACL method Roles & Permissions on Laravel 8 with a step-by-step guide that will help you to understand the flow. We know that implementing user roles and permissions is one of the basic functionality to implement in our web applications to restrict the specific user with only admin allowed to access. That''s why we need to implement role-based users with assigned permissions. In this example, I automatically read the route as permission via middleware so that you don''t need to add manually. We have also a feature in this example to add permission manually.\n\nBy following this tutorial it would be easier to implement Laravel permission and secure your user accounts.\n\nIn this example I added the following modules:\n\nUser Management\nCreating simple user management using Laravel 8 so that it will be easier for you to apply for Laravel permission.\nRoles Management\nA simple roles management that will help us to add roles for a user account and determine the user what assigned Laravel permission.\nPermissions Management\nA management for Laravel permission that will list all route names using a Laravel console command.\nProduct Management\nA simple product management and apply for the Laravel permissions with each role as a user.', NULL, 1, 3, '2023-02-01 19:49:52', '2023-02-01 19:49:52'),
(13, '10 GitHub repositories to advance your career as a Developer ', 'With over 100 million repositories on GitHub, it can be overwhelming to find the right repository for yourself.\nBut with a bit of research and some help from the GitHub community, you can easily find your way through the millions of repositories on GitHub.\n\nHere is a curated list of GitHub repositories that will really help you to advance your career as a Developer:\n\n1. Project Based Learning\nA list of programming tutorials in which aspiring software developers learn how to build an application from scratch. These tutorials are divided into different primary programming languages. Tutorials may involve multiple technologies and languages.\n\n2. Devops Exercises\nIf you want to work as a DevOps engineer, learning some of the concepts mentioned in this repository will be beneficial.\nThis repository Contains questions and exercises on a variety of technical DevOps and SRE topics.\n\n3. SRE Interview Preparation Guide\nThis repository is an attempt to consolidate useful resources for Site Reliability Engineer (SRE) interview preparation.', NULL, 2, 3, '2023-02-01 19:49:52', '2023-02-01 19:49:52'),
(14, 'Sending Emails With Python', 'You probably found this tutorial because you want to send emails using Python. Perhaps you want to receive email reminders from your code, send a confirmation email to users when they create an account, or send emails to members of your organization to remind them to pay their dues. Sending emails manually is a time-consuming and error-prone task, but it’s easy to automate with Python.', NULL, 3, 2, '2023-02-01 19:49:52', '2023-02-01 19:49:52'),
(15, 'Class-based vs Function-based Views in Django', '<p>In this article, we''ll look at the differences between Django''s class-based views (CBV) and function-based views (FBV). We''ll compare and contrast and dive into the pros and cons of each approach (along with Django''s built-in generic class-based views). By the end, you should have a good understanding of when to use one over the other</p>', '1675289688_Django_for_beginners.JPG', 1, 4, '2023-02-01 19:49:53', '2023-02-01 20:14:49'),
(16, 'Securely Deploy a Django App With Gunicorn, Nginx, & HTTPS', '<p>Taking a Django app from development to production is a demanding but rewarding process. This tutorial will take you through that process step by step, providing an in-depth guide that starts at square one with a no-frills Django application and adds in Gunicorn, Nginx, domain registration, and security-focused HTTP headers. After going over this tutorial, you’ll be better equipped to take your Django app into production and serve it to the world.</p>', '1675289827_we_are_Dajngo.JPG', 1, 3, '2023-02-01 19:49:53', '2023-02-01 20:17:07'),
(17, '9 Must-Know Rules for Writing Clean Code', 'Are you tired of staring at a mess of code that even your cat wouldn’t touch?\n\nLook no further. In this post, I will tell you 9 rules to turn your spaghetti code into a work of art.\n\nSo grab a cup of coffee, sit back and take charge of your code!\n\nRule#1 - Keep your code organized and easy to read\nDon’t organize your wardrobe but definitely organize your code. By keeping your code organized and easy to read, you can find what you need in a snap.\n\nCheck the below example:\n// Group related functions together\nfunction calculateTotal() {\n  // code\n}\n\nfunction calculateTax() {\n  // code\n}\n\nfunction calculateDiscount() {\n  // code\n}\n\n// Use comments to explain the purpose of the code\nfunction calculateTotal() {\n  // calculate subtotal\n  let subtotal = 0;\n  // add items\n  subtotal += item1.price;\n  subtotal += item2.price;\n  // return total\n  return subtotal;\n}\nAs you can see, a little bit of planning and a healthy dose of comments can make it a breeze to navigate your code.\n\nAt one glance, you get a good idea of the overall functionality even after it’s been a while since you worked on the code.\n\nIt’s not every day that you thank your past self for doing something good!\n\nRule#2 - Follow Established Coding Conventions and Standards\nI know it is tempting to be a rebel and chart your own course.\n\nBut sometimes, it pays to follow established coding conventions and standards. This includes things like naming conventions, commenting guidelines and more.\n\nSee the below snippet for wha', NULL, 4, 3, '2023-02-01 19:49:53', '2023-02-01 19:49:53'),
(18, 'Master Django Admin', '<p>Unde molestiae ipsa sed eum impedit ipsum earum laborum voluptate assumenda sunt quaerat quia nemo odit consequuntur suscipit voluptatem nobis facere sequi illo eum amet dolores commodi assumenda error consequatur id reprehenderit incidunt cum quia deserunt doloribus dicta fugit occaecati culpa temporibus enim dolor ut eligendi repellendus exercitationem corporis at fugiat voluptates ut ullam beatae consequuntur maiores mollitia maiores ad placeat inventore quae atque ex dignissimos omnis veritatis quisquam ut iure rerum dicta sunt dolorum eaque doloremque soluta aliquid eos inventore beatae accusamus vero soluta quibusdam rem porro ratione natus rem consequatur corrupti tempora quia blanditiis consequatur eligendi omnis minima quo neque corrupti vitae veniam tenetur et similique sit dolorem ut voluptates sit sed vero debitis voluptatem occaecati debitis dolorem est pariatur in facere non beatae vitae et reprehenderit recusandae eum veritatis iste aut omnis voluptas id necessitatibus corporis est debitis mollitia dolor a itaque neque ut et quod saepe laborum voluptate quis laboriosam in nisi voluptatibus veritatis pariatur rerum molestias consectetur doloribus minus vel.</p>', '1675289465_1674961679_djangoadmin.JPG', 5, 2, '2023-02-01 19:49:53', '2023-02-01 20:11:05'),
(19, 'Laravel Mix', '<p>Ut totam dolorem rem eos vel pariatur et aut provident natus inventore dolorem dolorem suscipit ea provident doloribus blanditiis vero esse qui rerum ullam et itaque distinctio est accusamus velit similique repellendus perspiciatis eius nisi occaecati deleniti debitis minus a ipsum impedit eligendi autem ex sit ea quia nisi excepturi ea delectus in optio est iusto ipsum officia et officiis sed commodi autem qui sed omnis repellendus mollitia non est est omnis exercitationem rem perferendis molestias necessitatibus nulla dignissimos incidunt eius alias consequatur unde voluptas et earum nulla odio et cupiditate et ex sed officia neque accusamus unde rerum labore molestias omnis sequi occaecati maiores necessitatibus quae laborum neque molestiae facilis consequatur deleniti corrupti magnam pariatur qui sit quisquam laudantium alias quia laudantium a reiciendis cumque sed est perferendis non qui assumenda temporibus sit sunt distinctio optio earum amet ut in autem impedit ad vitae sed autem libero praesentium aut delectus dolor nisi quam iste numquam qui consequatur animi voluptatem est consequatur expedita repellendus a repellendus quo velit id ex ipsa et delectus numquam consequatur laudantium aut accusamus facere possimus quasi id vel molestias itaque libero eos numquam ex ipsa quia aut dicta exercitationem aut voluptatem vel asperiores praesentium id facilis quisquam est.</p>', '1675289852_lara1png.png', 6, 6, '2023-02-01 19:49:53', '2023-02-01 20:17:32'),
(20, 'Django + Tailwindcss', 'Alias at voluptatibus pariatur vero et eum tenetur tempora quos earum rerum ut sit repudiandae ex laudantium exercitationem voluptates voluptas maiores praesentium perspiciatis illo odit est tempora quisquam eveniet consequatur et iste eligendi inventore eum et vitae voluptas nobis cum nulla nesciunt ex corrupti iure assumenda voluptatum earum id non sit dolorum architecto et quisquam et incidunt magnam aliquam velit molestias ut omnis autem qui est sed dolore quasi recusandae illum quis animi velit recusandae velit voluptas ipsam omnis illo quisquam labore error in id velit dolores nihil dolor aut voluptas labore maiores et soluta debitis at in accusantium sequi aperiam rerum magnam est alias est omnis modi illum libero exercitationem eius eligendi voluptates voluptas ut a doloribus aut quia dolore et aut quisquam voluptatem provident repellendus aperiam quos quam quia tempore similique labore delectus quo voluptas esse aut sunt esse consectetur autem qui voluptatem ducimus modi tenetur autem nemo dolores nisi omnis aut quia nemo excepturi repudiandae rerum doloribus corporis minus aut optio quam eligendi nulla id et commodi sit dolore consequatur architecto non dolorem libero ullam quibusdam harum molestiae consequatur ullam velit illum ipsum beatae qui aut reiciendis amet sint dicta ut quod ut repellat nobis rerum est mollitia autem et asperiores eos ea quo harum consequuntur ut tempora ea et recusandae animi iure omnis eos neque qui quia cum reprehenderit aliquam ea recusandae eligendi quia cum dolorem consectetur delectus eaque est consequatur repudiandae temporibus voluptate et eveniet alias alias quo dolor sed.', '1674600539_css.JPG', 2, 3, '2023-02-01 19:49:53', '2023-02-01 19:49:53'),
(21, 'django Vs Laravel', '<p>Saepe rerum eos impedit sapiente magnam blanditiis dolorem et vitae magni quidem nisi quis incidunt occaecati dolores quia doloremque vel qui est nisi nam aut dolorem ea vero vero porro non molestiae vel voluptatem deserunt hic doloremque illum sunt et adipisci enim optio id sit odio beatae et natus et quos ex earum omnis eos rem et odit ducimus eum ipsam eum repellendus voluptate aut voluptas odio sed perferendis itaque ipsa fugiat ex ad amet aut ut facilis voluptatem velit possimus praesentium sunt quibusdam sed iure ut qui delectus ea sint et ipsa sint fugiat eaque enim ullam ut porro repellendus hic et molestiae quia dolores dolorum sunt et aut amet porro dolores minima non et tenetur ipsum dolorem libero eos nihil natus libero minima dicta sed assumenda est quia quia aliquam quae maiores ut sint et vero aut rerum culpa quia autem pariatur sed magnam quos sunt reprehenderit impedit sit voluptatum praesentium.</p>', '1675289880_djl.png', 3, 3, '2023-02-01 19:49:53', '2023-02-01 20:18:00'),
(22, 'Django Rest Framework', '<p>Rem id harum delectus laudantium numquam ratione qui velit rerum est et hic eum consequatur ratione in ut sit doloremque nam dolorem repellat quasi aut ipsum beatae nihil laboriosam dolorem vitae sed voluptatem aliquam reprehenderit eum aliquid molestiae ut autem nam ut nihil et sit explicabo quia quas quod molestiae voluptatem qui quae ea voluptas temporibus modi temporibus quisquam ipsam labore laboriosam voluptas aut rerum et similique vero ipsa repellendus repellendus eos dolorem non odio sit eos sit eaque aspernatur aut aut esse omnis quo aut sit ullam perferendis temporibus non veniam atque quam officiis vel quibusdam aspernatur corporis voluptas culpa animi nesciunt dicta ex facilis magnam ipsa doloremque veritatis et nobis est odio quia quis possimus laboriosam omnis et est similique eveniet architecto assumenda ut ex temporibus pariatur est fugit molestiae aut accusantium laborum omnis est officia exercitationem dignissimos repellat perferendis ad.</p>', '1675289788_drf.png', 4, 6, '2023-02-01 19:49:53', '2023-02-01 20:16:29'),
(23, 'Laravel + Vue', '<p>n this tutorial I am going to show you how you can setup your own single page application using Laravel + Vue 3 using typescript and Vite. This is a manual way to add PWA on your laravel projects. We will not use InertiaJS or others like it, and we will not use the mix. We are manually going to implement our own VueJS frontend. STEP 1: Lets create our Laravel Project composer create-project laravel/laravel laravel-vue-manual STEP 2: Setup FrontEnd Inside our laravel project let us run a command using yarn, and choose vue and typescript. yarn create vite Set the Project name to: FrontEndApp Choose: Vue Choose: TypeScript Then Go to our FrontEndApp directory and run yarn or yarn install to install dependencies. Configure Vite Lets configure our vite config in FrontEndApp\\vite.config.ts</p>', '1675289532_lara1png.png', 5, 4, '2023-02-01 19:49:54', '2023-02-01 20:12:12'),
(24, 'Intro To Docker and Laravel', '<p><a href="https://github.com/laravel/sail">Laravel Sail</a> is a light-weight command-line interface for interacting with Laravel''s default Docker development environment. Sail provides a great starting point for building a Laravel application using PHP, MySQL, and Redis without requiring prior Docker experience.</p><p>At its heart, Sail is the docker-compose.yml file and the sail script that is stored at the root of your project. The sail script provides a CLI with convenient methods for interacting with the Docker containers defined by the docker-compose.yml file.</p><p>Laravel Sail is supported on macOS, Linux, and Windows (via <a href="https://docs.microsoft.com/en-us/windows/wsl/about">WSL2</a>).</p>', '1675551026_lara3.png', 1, 6, '2023-02-03 18:27:01', '2023-02-04 20:50:28'),
(25, 'reding time test', '<p>Creating a pull request<br>In this article<br>Changing the branch range and destination repository<br>Creating the pull request<br>Further reading<br>Create a pull request to propose and collaborate on changes to a repository. These changes are proposed in a branch, which ensures that the default branch only contains finished and approved work.</p><p>Who can use this feature<br>Anyone with read access to a repository can create a pull request.</p><p>Mac<br>Windows<br>GitHub CLI<br>Codespaces<br>Desktop<br>Web browser<br>If you want to create a new branch for your pull request and do not have write permissions to the repository, you can fork the repository first. For more information, see "Creating a pull request from a fork" and "About forks."</p><p>You can specify which branch you''d like to merge your changes into when you create your pull request. Pull requests can only be opened between two branches that are different.</p><p>Note: To open a pull request in a public repository, you must have write access to the head or the source branch or, for organization-owned repositories, you must be a member of the organization that owns the repository to open a pull request.</p><p>You can link a pull request to an issue to show that a fix is in progress and to automatically close the issue when someone merges the pull request. For more information, see "Linking a pull request to an issue."</p><p>Changing the branch range and destination repository<br>By default, pull requests are based on the parent repository''s default branch. For more information, see "About branches."</p><p>If the default parent repository isn''t correct, you can change both the parent repository and the branch with the drop-down lists. You can also swap your head and base branches with the drop-down lists to establish diffs between reference points. References here must be branch names in your GitHub repository.</p><p>Pull Request editing branches</p><p>When thinking about branches, remember that the base branch is where changes should be applied, the head branch contains what you would like to be applied.</p><p>When you change the base repository, you also change notifications for the pull request. Everyone that can push to the base repository will receive an email notification and see the new pull request in their dashboard the next time they sign in.</p><p>When you change any of the information in the branch range, the Commit and Files changed preview areas will update to show your new range.</p><p>Tips:</p><p>Using the compare view, you can set up comparisons across any timeframe. For more information, see "Comparing commits."<br>Project maintainers can add a pull request template for a repository. Templates include prompts for information in the body of a pull request. For more information, see "About issue and pull request templates."<br>Creating the pull request<br>On GitHub.com, navigate to the main page of the repository.<br>In the "Branch" menu, choose the branch that contains your commits.<br>Branch dropdown menu<br>Above the list of files, click &nbsp;Pull request.<br>"Pull request" link above list of files<br>Use the base branch dropdown menu to select the branch you''d like to merge your changes i</p>', NULL, 1, 1, '2023-02-08 18:10:58', '2023-02-08 18:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `article_comments`
--

CREATE TABLE IF NOT EXISTS `article_comments` (
`id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `article_id` bigint(20) unsigned NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_comments`
--

INSERT INTO `article_comments` (`id`, `user_id`, `article_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 11, 15, 'ok', '2023-02-04 20:03:43', '2023-02-04 20:03:43'),
(2, 11, 15, 'bho', '2023-02-04 20:04:21', '2023-02-04 20:04:21'),
(3, 1, 24, 'i see', '2023-02-08 17:46:21', '2023-02-08 17:46:21'),
(4, 1, 24, 'i see', '2023-02-08 17:47:54', '2023-02-08 17:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `article_likes`
--

CREATE TABLE IF NOT EXISTS `article_likes` (
`id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `article_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_likes`
--

INSERT INTO `article_likes` (`id`, `user_id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 1, 23, '2023-02-03 17:48:12', '2023-02-03 17:48:12'),
(2, 1, 24, '2023-02-08 17:43:32', '2023-02-08 17:43:32');

-- --------------------------------------------------------

--
-- Table structure for table `article_tag`
--

CREATE TABLE IF NOT EXISTS `article_tag` (
`id` bigint(20) unsigned NOT NULL,
  `article_id` bigint(20) unsigned NOT NULL,
  `tag_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_tag`
--

INSERT INTO `article_tag` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(9, 18, 1, NULL, NULL),
(10, 23, 2, NULL, NULL),
(11, 15, 1, NULL, NULL),
(12, 22, 1, NULL, NULL),
(13, 19, 2, NULL, NULL),
(14, 21, 1, NULL, NULL),
(15, 21, 2, NULL, NULL),
(16, 24, 2, NULL, NULL),
(17, 25, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` bigint(20) unsigned NOT NULL,
  `categoryname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryname`, `created_at`, `updated_at`) VALUES
(1, 'Programming', '2023-02-01 18:43:44', '2023-02-01 18:43:44'),
(2, 'Economics', '2023-02-01 20:45:53', '2023-02-01 20:45:56'),
(3, 'History', '2023-02-01 20:45:53', '2023-02-01 20:45:53'),
(4, 'Sports', '2023-02-01 21:37:40', '2023-02-01 21:37:37'),
(5, 'Food', '2023-02-01 21:37:53', '2023-02-01 21:37:51'),
(6, 'Entertainment', '2023-02-01 21:38:20', '2023-02-01 21:38:17'),
(7, 'TaShya Harris', '2023-02-03 18:41:15', '2023-02-03 18:41:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
`id` bigint(20) unsigned NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
`id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2023_01_13_101209_create_categories_table', 1),
(17, '2023_01_13_101954_create_articles_table', 1),
(18, '2023_01_14_205409_rename_cat_name_column_in_category_table', 1),
(19, '2023_01_21_010953_create_tags_table', 1),
(20, '2023_01_21_011142_articletagtable', 1),
(21, '2023_01_27_041958_create_comments_table', 1),
(22, '2023_01_28_003516_create_permission_tables', 1),
(23, '2023_01_31_221301_change__article_comment_table_name', 1),
(24, '2023_02_01_010712_create_article_likes_table', 1),
(25, '2023_02_03_211849_add_social_logins_to_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('kudam775@gmail.com', '$2y$10$0noIfFL/XCbBDihV.wyTMOYwGP/Gn4RDOTXKlqfcMk9ogIhQXKOCi', '2023-02-04 20:24:16');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Django', '2023-02-01 18:47:24', '2023-02-01 18:47:24'),
(2, 'Laravel', '2023-02-01 18:48:02', '2023-02-01 18:48:02'),
(3, 'Java ', '2023-02-01 20:48:37', '2023-02-01 20:48:34'),
(4, 'springboot', '2023-02-01 20:48:52', '2023-02-01 20:48:49'),
(5, 'Javascript', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `social_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `social_id`, `social_type`) VALUES
(1, 'Kudakwashe Masangomai', 'kudam775@gmail.com', NULL, '$2y$10$VgNhAnkZj1yhdyNDJ0yjDOetHfipm1skJb2oTeQBlkMrOT/64ae5y', 'W8zKF7x5vUsmvkvfM4E2xdapoxGd3PdS4X6kmkyBqP6st0aAHiMKQXzYn48s', '2023-02-01 18:42:07', '2023-02-04 20:09:35', NULL, NULL),
(2, 'Thelma Machinga', 'fisher.marguerite@example.net', '2023-02-01 19:39:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'RuRRoBCTDd', '2023-02-01 19:39:39', '2023-02-01 19:39:39', NULL, NULL),
(3, 'Kingsely Chirova', 'qking@example.org', '2023-02-01 19:39:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'g2A4Ldj6Xe', '2023-02-01 19:39:40', '2023-02-01 19:39:40', NULL, NULL),
(4, 'Garikai Mazuru', 'vance.heller@example.net', '2023-02-01 19:39:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '9E4m6mivZf', '2023-02-01 19:39:41', '2023-02-01 19:39:41', NULL, NULL),
(5, 'Kumbirai Nyamfeni', 'bell39@example.com', '2023-02-01 19:39:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XtVOCLju3G', '2023-02-01 19:39:41', '2023-02-01 19:39:41', NULL, NULL),
(6, 'Tamiranshe Ivanna', 'kpouros@example.net', '2023-02-01 19:39:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'm6kLAV9TUb', '2023-02-01 19:39:41', '2023-02-01 19:39:41', NULL, NULL),
(8, 'MasangomaiKudakwashe', 'masangomaikuda@gmail.com', NULL, NULL, NULL, '2023-02-03 21:58:46', '2023-02-03 21:58:46', '114576276', 'github'),
(10, 'kuda masangomai', 'masboyk@gmail.com', NULL, NULL, NULL, '2023-02-03 22:54:25', '2023-02-03 22:54:25', '102139318446839436914', 'google'),
(11, 'Tamiranashe', 'Tami@gmailcom', NULL, '$2y$10$5pR9CS3j9wRv5woYEPpMvOi.lRbtj7IhqhkJOFNuJuXZJ4bsWefwS', NULL, '2023-02-04 18:19:00', '2023-02-04 18:19:00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
 ADD PRIMARY KEY (`id`), ADD KEY `articles_user_id_foreign` (`user_id`), ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indexes for table `article_comments`
--
ALTER TABLE `article_comments`
 ADD PRIMARY KEY (`id`), ADD KEY `article_comment_user_id_foreign` (`user_id`), ADD KEY `article_comment_article_id_foreign` (`article_id`);

--
-- Indexes for table `article_likes`
--
ALTER TABLE `article_likes`
 ADD PRIMARY KEY (`id`), ADD KEY `article_likes_user_id_foreign` (`user_id`), ADD KEY `article_likes_article_id_foreign` (`article_id`);

--
-- Indexes for table `article_tag`
--
ALTER TABLE `article_tag`
 ADD PRIMARY KEY (`id`), ADD KEY `article_tag_article_id_foreign` (`article_id`), ADD KEY `article_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `categories_name_unique` (`categoryname`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
 ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`), ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
 ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`), ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
 ADD PRIMARY KEY (`permission_id`,`role_id`), ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `article_comments`
--
ALTER TABLE `article_comments`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `article_likes`
--
ALTER TABLE `article_likes`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `article_tag`
--
ALTER TABLE `article_tag`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `article_comments`
--
ALTER TABLE `article_comments`
ADD CONSTRAINT `article_comment_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `article_comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `article_likes`
--
ALTER TABLE `article_likes`
ADD CONSTRAINT `article_likes_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `article_likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `article_tag`
--
ALTER TABLE `article_tag`
ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
