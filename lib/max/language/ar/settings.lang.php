<?php

/*
  +---------------------------------------------------------------------------+
  | Revive Adserver                                                           |
  | http://www.revive-adserver.com                                            |
  |                                                                           |
  | Copyright: See the COPYRIGHT.txt file.                                    |
  | License: GPLv2 or later, see the LICENSE.txt file.                        |
  +---------------------------------------------------------------------------+
 */

// Installer translation strings
$GLOBALS['strInstall'] = "تنصيب";
$GLOBALS['strDatabaseSettings'] = "خيارات قواعد البيانات";
$GLOBALS['strAdminSettings'] = "خيارات المدير";
$GLOBALS['strAdminAccount'] = "حساب المدير";
$GLOBALS['strAdvancedSettings'] = "خيارات متقدمة";
$GLOBALS['strWarning'] = "تحذير";
$GLOBALS['strBtnContinue'] = "متابعة >>";
$GLOBALS['strBtnRecover'] = "إسترجاع >>";
$GLOBALS['strBtnStartAgain'] = "البدء بالتحديث من جديد >>";
$GLOBALS['strBtnGoBack'] = "<< الرجوع";
$GLOBALS['strBtnAgree'] = "موافق >>";
$GLOBALS['strBtnRetry'] = "فصح جديد";
$GLOBALS['strWarningRegisterArgcArv'] = "حتى تتم عملية الصيانة من خلال سطر الأوامر يجب أن يكون المتغير register_argc_argv مفعلاً في خيارات PHP.";
$GLOBALS['strTablesType'] = "نوع الجدول";


$GLOBALS['strRecoveryRequiredTitle'] = "عملية محاولة الترقية السابقة واجهت بعض المشاكل";
$GLOBALS['strRecoveryRequired'] = "حدثت مشكلة أثناء محاولة الترقية و سيقوم برنامج {$PRODUCT_NAME} بمحاولة إصلاح عملية الترقية. إضغط زر التصحيح بالأسفل.";

$GLOBALS['strDbSuccessIntro'] = "تم إنشاء قاعد بيانات لـ {$PRODUCT_NAME} . إضغط 'استمرار' لمتابعة تعديل الاعدادات.";

$GLOBALS['strErrorWritePermissions'] = "هناك خلل في تصاريح الملفات ، يجب عليك إصلاحه قبل الاستمرار.<br />لحل الأخطاء في نظام لينوكس ، قم بكتابة هذه الأوامر :";
$GLOBALS['strErrorFixPermissionsCommand'] = "<i>إعطاء التصريح a+w %s</i>";
$GLOBALS['strErrorFixPermissionsRCommand'] = "<i>إعطاء التصريح a+w %s</i>";

$GLOBALS['strErrorWritePermissionsWin'] = "هناك خلل في تصاريح الملفات ، يجب عليك إصلاحه قبل الاستمرار";
$GLOBALS['strCheckDocumentation'] = "لمزيد من التعليمات ، الرجاء الإطلاع على <وثائق مساعدة>. ";

$GLOBALS['strAdminUrlPrefix'] = "رابط لوحة التحكم";
$GLOBALS['strDeliveryUrlPrefix'] = "نظام التوزيع";
$GLOBALS['strDeliveryUrlPrefixSSL'] = "نظام التوزيع";
$GLOBALS['strImagesUrlPrefix'] = "رابط حفظ الصور";
$GLOBALS['strImagesUrlPrefixSSL'] = "رابط حفظ الصور (رابط آمن)";



/* ------------------------------------------------------- */
/* Configuration translations                            */
/* ------------------------------------------------------- */

// Global
$GLOBALS['strChooseSection'] = "إختيار قسم";
$GLOBALS['strEditConfigNotPossible'] = "It is not possible to edit all settings because the configuration file is locked for security reasons. " .
    "If you want to make changes, you may need to unlock the configuration file for this installation first.";
$GLOBALS['strEditConfigPossible'] = "It is possible to edit all settings because the configuration file is not locked, but this could lead to security issues. " .
    "If you want to secure your system, you need to lock the configuration file for this installation.";
$GLOBALS['strUnableToWriteConfig'] = "تعذر حفظ التعديلات في ملف الإعدادات";
$GLOBALS['strUnableToWritePrefs'] = "تعذر حفظ التعديلات في قاعدة البيانات";
$GLOBALS['strImageDirLockedDetected'] = "<b>ملجد الصور</b>غير قابل للكتابة. <br> يجب عليك إنشاء المجلد او تعديل صلاحياته قبل الاستمرار";

// Configuration Settings
$GLOBALS['strConfigurationSettings'] = "تعديل الاعدادات";

// Administrator Settings
$GLOBALS['strAdministratorSettings'] = "خيارات المدير";
$GLOBALS['strLoginCredentials'] = "معلومات الدخول";
$GLOBALS['strAdminUsername'] = "اسم المستخدم للمدير";
$GLOBALS['strAdminPassword'] = "كلمة السر للمدير";
$GLOBALS['strInvalidUsername'] = "اسم المستخدم غير صالح";
$GLOBALS['strBasicInformation'] = "معلومات أساسية";
$GLOBALS['strAdminFullName'] = "الاسم الكامل للمدير";
$GLOBALS['strAdminEmail'] = "البريد الالكتروني للمدير";
$GLOBALS['strAdministratorEmail'] = "البريد الالكتروني للمدير العام";
$GLOBALS['strCompanyName'] = "اسم الشركة";
$GLOBALS['strNovice'] = "نحتاج للتأكيد قبل الحذف كخطوة احترازية";
$GLOBALS['strUserlogEmail'] = "حفظ كل الرسائل الصادرة";
$GLOBALS['strTimezone'] = "المنطقة الزمنية";
$GLOBALS['strTimezoneEstimated'] = "المنطقة الزمنية المتوقعة";
$GLOBALS['strTimezoneGuessedValue'] = "المنطقة الزمنية للسيرفر غير مجهزة في إعدادات PHP";
$GLOBALS['strTimezoneSeeDocs'] = "الرجاء الإطلاع على %DOCS% بخصوص تجهيز هذا المتغير في PHP.";
$GLOBALS['strTimezoneDocumentation'] = "وثائق المساعدة";


// Database Settings
$GLOBALS['strDatabaseSettings'] = "خيارات قواعد البيانات";
$GLOBALS['strDatabaseServer'] = "الإعدادات العامة لمستضيف قاعدة البيانات";
$GLOBALS['strDbType'] = "نوع قاعدة البيانات";
$GLOBALS['strDbHost'] = "مستضيف قاعدة البيانات";
$GLOBALS['strDbPort'] = "رقم المنفذ (بورت) قاعدة البيانات";
$GLOBALS['strDbUser'] = "اسم مستخدم قاعدة البيانات";
$GLOBALS['strDbPassword'] = "كلمة سر قاعدة البيانات";
$GLOBALS['strDbName'] = "اسم قاعدة البيانات";
$GLOBALS['strPersistentConnections'] = "استخدام الاتصال المستمر";
$GLOBALS['strCantConnectToDb'] = "لا يمكن الاتصال بقاعدة البيانات";
$GLOBALS['strDemoDataInstall'] = "تركيب بيانات تجريبية";



// Email Settings

// Audit Trail Settings

// Debug Logging Settings
$GLOBALS['strProduction'] = "بيئة عمل";
$GLOBALS['strDebugTypeFile'] = "ملف";
$GLOBALS['strDebugTypeSql'] = "قاعدة بيانات SQL";
$GLOBALS['strDebugTypeSyslog'] = "سجل النظام";

// Delivery Settings
$GLOBALS['strWebPath'] = "$PRODUCT_NAME Server Access Paths";
$GLOBALS['strImagePath'] = "مسار الصور";
$GLOBALS['strImageSslPath'] = "مسار الصور (آمن)";
$GLOBALS['strImageStore'] = "مجلد الصور";
$GLOBALS['strTypeWebMode'] = "اسلوب التخزين";
$GLOBALS['strTypeWebModeLocal'] = "المجلد المحلي";
$GLOBALS['strTypeDirError'] = "المجلد المحلي غير قابل للكتابة";
$GLOBALS['strTypeWebModeFtp'] = "مستضيف FTP خارجي";
$GLOBALS['strTypeWebDir'] = "المجلد المحلي";
$GLOBALS['strTypeFTPHost'] = "مستضيف FTP";
$GLOBALS['strTypeFTPDirectory'] = "مجلد المستضيف";
$GLOBALS['strTypeFTPUsername'] = "اسم الدخول";
$GLOBALS['strTypeFTPPassword'] = "كلمة السر";
$GLOBALS['strTypeFTPPassive'] = "استخدام اسلوب passive FTP";
$GLOBALS['strTypeFTPErrorDir'] = "مجلد المستضيف غير موجود";
$GLOBALS['strTypeFTPErrorConnect'] = "لا يمكن الاتصال بمستضيف FTP ، الرجاء التحقق من اسم المستخدم او كلمة السر.";
$GLOBALS['strTypeFTPErrorHost'] = "عنوان مستضيف FTP غير صحيح";
$GLOBALS['strDeliveryFilenamesAdClick'] = "رابط الضغط على الإعلان";
$GLOBALS['strDeliveryFilenamesAdImage'] = "صورة الاعلان";




// General Settings

// Geotargeting Settings

// Interface Settings
$GLOBALS['strInventory'] = "المخزن";
$GLOBALS['strHideInactive'] = "إخفاء الغير فعّال";
$GLOBALS['strWeightDefaults'] = "الوزن الافتراضي";
$GLOBALS['strDefaultBannerWeight'] = "الوزن الافتراضي للبنر";
$GLOBALS['strDefaultCampaignWeight'] = "الوزن الافتراضي للحملة الاعلانية";

$GLOBALS['strPublisherDefaults'] = "الخيارات الافتراضية للموقع";
$GLOBALS['strModesOfPayment'] = "أساليب الدفع";
$GLOBALS['strCurrencies'] = "العملات";
$GLOBALS['strCategories'] = "الأقسام";
$GLOBALS['strHelpFiles'] = "ملفات التعليمات";
$GLOBALS['strHasTaxID'] = "رقم الضريبة";

// CSV Import Settings
$GLOBALS['strDefaultConversionStatus'] = "قوانين التحويل الإفتراضية";
$GLOBALS['strDefaultConversionType'] = "قوانين التحويل الإفتراضية";

/**
 * @todo remove strBannerSettings if banner is only configurable as a preference
 *       rename // Banner Settings to  // Banner Preferences
 */
// Invocation Settings

// Banner Delivery Settings

// Banner Logging Settings
$GLOBALS['strBannerLogging'] = "خيارات حجب تسجيل البنرات";
$GLOBALS['strLogAdRequests'] = "تسجيل وقت طلب البنر كل مرة يتم طلبه";
$GLOBALS['strLogAdImpressions'] = "زيادة مرات الظهور في كل مرة يتم عرض البنر";
$GLOBALS['strLogAdClicks'] = "زيادة مرات الضغطات في كل مرة يتم ضغط البنر";
$GLOBALS['strPreventLogging'] = "خيارات حجب تسجيل البنرات";

// Banner Storage Settings

// Campaign ECPM settings

// Statistics & Maintenance Settings
$GLOBALS['strMaintenanceOI'] = "توقيت عمليات الصيانة (كل × دقيقة)";
$GLOBALS['strMaintenanceOIError'] = "توقيت عمليات الصيانة غير صحيح - الرجاء الاطلاع على التعليمات لمعرفة القيم الصحيحة";
$GLOBALS['strPrioritySettings'] = "إعدادات الأهمية";
$GLOBALS['strWarnLimit'] = "ارسل تحذيراً عندما يكون عدد مرات الظهور أقل من الرقم المكتوب هنا";
$GLOBALS['strAllowEmail'] = "السماح بإرسال الإيميلات بشكل عام";
$GLOBALS['strEmailAddressFrom'] = "البريد الإلكتروني الذي يراد إرسال التقارير منه";
$GLOBALS['strEmailAddressName'] = "الشركة أو الإسم الذي يراد توقيع الرسائل الإلكترونية به";

// UI Settings
$GLOBALS['strGeneralSettings'] = "الإعدادات العامة";
$GLOBALS['strAppName'] = "اسم التطبيق";
$GLOBALS['strDefaultTrackerStatus'] = "النوع الافتراضي للمتتبع";
$GLOBALS['strDefaultTrackerType'] = "النوع الافتراضي للمتتبع";

$GLOBALS['strMyLogo'] = "اسم الشعار المخصص";
$GLOBALS['strMyLogoError'] = "ملف الشعار غير موجود في مجلد admin/images ";

$GLOBALS['strClientInterface'] = "واجهة المعلن";
$GLOBALS['strReportsInterface'] = "واجهة التقارير";
$GLOBALS['strClientWelcomeEnabled'] = "إتاحة رسالة الترحيب بالمعلن";
$GLOBALS['strClientWelcomeText'] = "نص الترحيب<br />(HTML متاح)";

$GLOBALS['strPublisherInterface'] = "واجهة الموقع";
$GLOBALS['strPublisherAgreementText'] = "نص تسجيل الدخول<br />(HTML متاح)";

// Regenerate Platfor Hash script

// Plugin Settings

/* ------------------------------------------------------- */
/* Unknown (unused?) translations                        */
/* ------------------------------------------------------- */


