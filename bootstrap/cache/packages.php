<?php return array (
  'barryvdh/laravel-dompdf' => 
  array (
    'providers' => 
    array (
      0 => 'Barryvdh\\DomPDF\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'PDF' => 'Barryvdh\\DomPDF\\Facade',
    ),
  ),
  'botble/platform' => 
  array (
    'providers' => 
    array (
      0 => 'Botble\\Base\\Providers\\BaseServiceProvider',
      1 => 'Botble\\Base\\Providers\\CommandServiceProvider',
      2 => 'Botble\\Base\\Providers\\EventServiceProvider',
      3 => 'Botble\\Base\\Providers\\RouteServiceProvider',
      4 => 'Botble\\Base\\Providers\\BreadcrumbsServiceProvider',
      5 => 'Botble\\Base\\Providers\\ComposerServiceProvider',
      6 => 'Botble\\Base\\Providers\\MailConfigServiceProvider',
      7 => 'Botble\\Base\\Providers\\FormServiceProvider',
      8 => 'Botble\\Base\\Providers\\HookServiceProvider',
      9 => 'Botble\\Widget\\Providers\\WidgetServiceProvider',
      10 => 'Botble\\Support\\Providers\\SupportServiceProvider',
      11 => 'Botble\\Assets\\Providers\\AssetsServiceProvider',
      12 => 'Botble\\Shortcode\\Providers\\ShortcodeServiceProvider',
      13 => 'Botble\\Table\\Providers\\TableServiceProvider',
      14 => 'Botble\\ACL\\Providers\\AclServiceProvider',
      15 => 'Botble\\Dashboard\\Providers\\DashboardServiceProvider',
      16 => 'Botble\\Media\\Providers\\MediaServiceProvider',
      17 => 'Botble\\Menu\\Providers\\MenuServiceProvider',
      18 => 'Botble\\Page\\Providers\\PageServiceProvider',
      19 => 'Botble\\SeoHelper\\Providers\\SeoHelperServiceProvider',
      20 => 'Botble\\Theme\\Providers\\ThemeServiceProvider',
      21 => 'Botble\\Optimize\\Providers\\OptimizeServiceProvider',
      22 => 'Botble\\Slug\\Providers\\SlugServiceProvider',
    ),
    'aliases' => 
    array (
      'MetaBox' => 'Botble\\Base\\Facades\\MetaBoxFacade',
      'Action' => 'Botble\\Base\\Facades\\ActionFacade',
      'Filter' => 'Botble\\Base\\Facades\\FilterFacade',
      'EmailHandler' => 'Botble\\Base\\Facades\\EmailHandlerFacade',
      'AdminBar' => 'Botble\\Base\\Facades\\AdminBarFacade',
      'AdminBreadcrumb' => 'Botble\\Base\\Facades\\AdminBreadcrumbFacade',
      'DashboardMenu' => 'Botble\\Base\\Facades\\DashboardMenuFacade',
      'SiteMapManager' => 'Botble\\Base\\Facades\\SiteMapManagerFacade',
      'JsonFeedManager' => 'Botble\\Base\\Facades\\JsonFeedManagerFacade',
      'ChartBuilder' => 'Botble\\Base\\Facades\\ChartBuilderFacade',
      'MailVariable' => 'Botble\\Base\\Facades\\MailVariableFacade',
    ),
  ),
  'chumper/zipper' => 
  array (
    'providers' => 
    array (
      0 => 'Chumper\\Zipper\\ZipperServiceProvider',
    ),
    'aliases' => 
    array (
      'Zipper' => 'Chumper\\Zipper\\Zipper',
    ),
  ),
  'davejamesmiller/laravel-breadcrumbs' => 
  array (
    'providers' => 
    array (
      0 => 'DaveJamesMiller\\Breadcrumbs\\BreadcrumbsServiceProvider',
    ),
    'aliases' => 
    array (
      'Breadcrumbs' => 'DaveJamesMiller\\Breadcrumbs\\Facades\\Breadcrumbs',
    ),
  ),
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'intervention/image' => 
  array (
    'providers' => 
    array (
      0 => 'Intervention\\Image\\ImageServiceProvider',
    ),
    'aliases' => 
    array (
      'Image' => 'Intervention\\Image\\Facades\\Image',
    ),
  ),
  'ixudra/curl' => 
  array (
    'providers' => 
    array (
      0 => 'Ixudra\\Curl\\CurlServiceProvider',
    ),
    'aliases' => 
    array (
      'Curl' => 'Ixudra\\Curl\\Facades\\Curl',
    ),
  ),
  'kris/laravel-form-builder' => 
  array (
    'providers' => 
    array (
      0 => 'Kris\\LaravelFormBuilder\\FormBuilderServiceProvider',
    ),
    'aliases' => 
    array (
      'FormBuilder' => 'Kris\\LaravelFormBuilder\\Facades\\FormBuilder',
    ),
  ),
  'lab404/laravel-impersonate' => 
  array (
    'providers' => 
    array (
      0 => 'Lab404\\Impersonate\\ImpersonateServiceProvider',
    ),
  ),
  'laravel/passport' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Passport\\PassportServiceProvider',
    ),
  ),
  'laravel/socialite' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Socialite\\SocialiteServiceProvider',
    ),
    'aliases' => 
    array (
      'Socialite' => 'Laravel\\Socialite\\Facades\\Socialite',
    ),
  ),
  'laravelcollective/html' => 
  array (
    'providers' => 
    array (
      0 => 'Collective\\Html\\HtmlServiceProvider',
    ),
    'aliases' => 
    array (
      'Form' => 'Collective\\Html\\FormFacade',
      'Html' => 'Collective\\Html\\HtmlFacade',
    ),
  ),
  'laravelium/sitemap' => 
  array (
    'providers' => 
    array (
      0 => 'Laravelium\\Sitemap\\SitemapServiceProvider',
    ),
  ),
  'maatwebsite/excel' => 
  array (
    'providers' => 
    array (
      0 => 'Maatwebsite\\Excel\\ExcelServiceProvider',
    ),
    'aliases' => 
    array (
      'Excel' => 'Maatwebsite\\Excel\\Facades\\Excel',
    ),
  ),
  'nesbot/carbon' => 
  array (
    'providers' => 
    array (
      0 => 'Carbon\\Laravel\\ServiceProvider',
    ),
  ),
  'proengsoft/laravel-jsvalidation' => 
  array (
    'providers' => 
    array (
      0 => 'Proengsoft\\JsValidation\\JsValidationServiceProvider',
    ),
    'aliases' => 
    array (
      'JsValidator' => 'Proengsoft\\JsValidation\\Facades\\JsValidatorFacade',
    ),
  ),
  'tightenco/ziggy' => 
  array (
    'providers' => 
    array (
      0 => 'Tightenco\\Ziggy\\ZiggyServiceProvider',
    ),
  ),
  'yajra/laravel-datatables-buttons' => 
  array (
    'providers' => 
    array (
      0 => 'Yajra\\DataTables\\ButtonsServiceProvider',
    ),
  ),
  'yajra/laravel-datatables-html' => 
  array (
    'providers' => 
    array (
      0 => 'Yajra\\DataTables\\HtmlServiceProvider',
    ),
  ),
  'yajra/laravel-datatables-oracle' => 
  array (
    'providers' => 
    array (
      0 => 'Yajra\\DataTables\\DataTablesServiceProvider',
    ),
    'aliases' => 
    array (
      'DataTables' => 'Yajra\\DataTables\\Facades\\DataTables',
    ),
  ),
);