<?php

declare(strict_types=1);

defined('TYPO3') or die();

/*
 * gen_z - Gen Z Speak for TYPO3
 * Registers the new language "Gen Z Speak" and overrides
 * ALL labels in the TYPO3 backend with American Gen-Z internet slang.
 * Slay! No cap!
 */

// Register new locale 'en-X-GNZ' (Gen Z Speak)
// Uses BCP 47 private-use subtag: base 'en' (English) + private 'X-GNZ'
// IntlDateFormatter uses English date formats automatically
// IMPORTANT: The key must be in normalized form 'en-X-GNZ',
// as TYPO3's Locale class performs this normalization automatically
$GLOBALS['TYPO3_CONF_VARS']['SYS']['localization']['locales']['user']['en-X-GNZ'] = 'Gen Z Speak';

// Fallback to English if a label is not translated
$GLOBALS['TYPO3_CONF_VARS']['SYS']['localization']['locales']['dependencies']['en-X-GNZ'] = ['en'];

// Mark locale as available (appears in backend user dropdown)
$GLOBALS['TYPO3_CONF_VARS']['LANG']['availableLocales']['en-X-GNZ'] = 'en-X-GNZ';

// adminpanel
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:adminpanel/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/adminpanel/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:adminpanel/Resources/Private/Language/locallang_cache.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/adminpanel/en-X-GNZ.locallang_cache.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:adminpanel/Resources/Private/Language/locallang_debug.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/adminpanel/en-X-GNZ.locallang_debug.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:adminpanel/Resources/Private/Language/locallang_info.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/adminpanel/en-X-GNZ.locallang_info.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:adminpanel/Resources/Private/Language/locallang_preview.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/adminpanel/en-X-GNZ.locallang_preview.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:adminpanel/Resources/Private/Language/locallang_tsdebug.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/adminpanel/en-X-GNZ.locallang_tsdebug.xlf';

// backend
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Modules/about.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Modules/en-X-GNZ.about.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Modules/content-security-policy.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Modules/en-X-GNZ.content-security-policy.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Modules/layout.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Modules/en-X-GNZ.layout.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Modules/link_management.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Modules/en-X-GNZ.link_management.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Modules/list.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Modules/en-X-GNZ.list.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Modules/pagetsconfig.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Modules/en-X-GNZ.pagetsconfig.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Modules/pagetsconfig_active.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Modules/en-X-GNZ.pagetsconfig_active.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Modules/pagetsconfig_includes.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Modules/en-X-GNZ.pagetsconfig_includes.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Modules/pagetsconfig_pages.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Modules/en-X-GNZ.pagetsconfig_pages.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Modules/site_configuration.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Modules/en-X-GNZ.site_configuration.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Modules/site_settings.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Modules/en-X-GNZ.site_settings.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Modules/status.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Modules/en-X-GNZ.status.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Modules/user_settings.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Modules/en-X-GNZ.user_settings.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/SudoMode.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.SudoMode.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Wizards/general.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Wizards/en-X-GNZ.general.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Wizards/localization.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Wizards/en-X-GNZ.localization.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Wizards/move_content_elements.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Wizards/en-X-GNZ.move_content_elements.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Wizards/move_page.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Wizards/en-X-GNZ.move_page.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/Wizards/page.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/Wizards/en-X-GNZ.page.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/links.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.links.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_alt_doc.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_browse_links.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_browse_links.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_codeeditor.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_codeeditor.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_column_selector.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_column_selector.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_copytoclipboard.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_copytoclipboard.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_download.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_download.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_layout.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_layout.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_login.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_login.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_mfa.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_mfa.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_pages_new.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_pages_new.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_pages_sort.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_pages_sort.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_pagetsconfig.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_pagetsconfig.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_reset_password.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_reset_password.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_resource.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_resource.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_settingseditor.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_settingseditor.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_show_rechis.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_show_rechis.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_siteconfiguration.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_siteconfiguration.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_siteconfiguration_module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_siteconfiguration_module.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_siteconfiguration_tca.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_siteconfiguration_tca.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_sitesettings.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_sitesettings.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_sitesettings_module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_sitesettings_module.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_toolbar.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_toolbar.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/locallang_view_help.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.locallang_view_help.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/pages/messages.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/pages/en-X-GNZ.messages.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/qrcode.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.qrcode.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/siteconfiguration_fieldinformation.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.siteconfiguration_fieldinformation.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:backend/Resources/Private/Language/user_profile.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/backend/en-X-GNZ.user_profile.xlf';

// belog
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:belog/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/belog/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:belog/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/belog/en-X-GNZ.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:belog/Resources/Private/Language/module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/belog/en-X-GNZ.module.xlf';

// beuser
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:beuser/Resources/Private/Language/Modules/permissions.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/beuser/Modules/en-X-GNZ.permissions.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:beuser/Resources/Private/Language/Modules/user_management.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/beuser/Modules/en-X-GNZ.user_management.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:beuser/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/beuser/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:beuser/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/beuser/en-X-GNZ.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:beuser/Resources/Private/Language/locallang_mod_permission.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/beuser/en-X-GNZ.locallang_mod_permission.xlf';

// core
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/db/accounts.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/db/en-X-GNZ.accounts.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/db/general.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/db/en-X-GNZ.general.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/db/pages.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/db/en-X-GNZ.pages.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/db/sys_file_storage.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/db/en-X-GNZ.sys_file_storage.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/Form/en-X-GNZ.locallang_tabs.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/Form/palettes.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/Form/en-X-GNZ.palettes.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/Modules/content.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/Modules/en-X-GNZ.content.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/Modules/help.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/Modules/en-X-GNZ.help.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/Modules/integrations.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/Modules/en-X-GNZ.integrations.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/Modules/media.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/Modules/en-X-GNZ.media.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/Modules/site.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/Modules/en-X-GNZ.site.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/Modules/system.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/Modules/en-X-GNZ.system.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/Modules/user.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/Modules/en-X-GNZ.user.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/data_handler.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.data_handler.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/fileMessages.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.fileMessages.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_bookmarks.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_bookmarks.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_cache.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_cache.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_common.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_common.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_core.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_core.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_general.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_general.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_mfa_provider.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_mfa_provider.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_misc.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_misc.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_mod_admintools.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_mod_admintools.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_mod_file.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_mod_file.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_mod_help.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_mod_help.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_mod_site.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_mod_site.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_mod_system.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_mod_system.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_mod_usertools.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_mod_usertools.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_mod_web_list.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_password_policy.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_password_policy.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_tca.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_tca.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_tsfe.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_tsfe.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/locallang_wizards.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.locallang_wizards.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:core/Resources/Private/Language/wizard.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/core/en-X-GNZ.wizard.xlf';

// dashboard
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:dashboard/Resources/Private/Language/db.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/dashboard/en-X-GNZ.db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:dashboard/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/dashboard/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:dashboard/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/dashboard/en-X-GNZ.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:dashboard/Resources/Private/Language/locallang_widget_bookmarks.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/dashboard/en-X-GNZ.locallang_widget_bookmarks.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:dashboard/Resources/Private/Language/locallang_widget_rss.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/dashboard/en-X-GNZ.locallang_widget_rss.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:dashboard/Resources/Private/Language/module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/dashboard/en-X-GNZ.module.xlf';

// extbase
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:extbase/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/extbase/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:extbase/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/extbase/en-X-GNZ.locallang_db.xlf';

// extensionmanager
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:extensionmanager/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/extensionmanager/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:extensionmanager/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/extensionmanager/en-X-GNZ.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:extensionmanager/Resources/Private/Language/module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/extensionmanager/en-X-GNZ.module.xlf';

// felogin
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:felogin/Resources/Private/Language/Database.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/felogin/en-X-GNZ.Database.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:felogin/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/felogin/en-X-GNZ.locallang.xlf';

// filelist
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:filelist/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/filelist/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:filelist/Resources/Private/Language/locallang_mod_file_list.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/filelist/en-X-GNZ.locallang_mod_file_list.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:filelist/Resources/Private/Language/locallang_transfer_handler.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/filelist/en-X-GNZ.locallang_transfer_handler.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:filelist/Resources/Private/Language/module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/filelist/en-X-GNZ.module.xlf';

// filemetadata
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:filemetadata/Resources/Private/Language/db.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/filemetadata/en-X-GNZ.db.xlf';

// fluid
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:fluid/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/fluid/en-X-GNZ.locallang.xlf';

// fluid_styled_content
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:fluid_styled_content/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/fluid_styled_content/en-X-GNZ.locallang.xlf';

// form
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:form/Resources/Private/Language/Database.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/form/en-X-GNZ.Database.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:form/Resources/Private/Language/Modules/form_editor.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/form/Modules/en-X-GNZ.form_editor.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:form/Resources/Private/Language/Modules/form_manager.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/form/Modules/en-X-GNZ.form_manager.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:form/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/form/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:form/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/form/en-X-GNZ.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:form/Resources/Private/Language/locallang_formEditor_failSafeErrorHandling_javascript.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/form/en-X-GNZ.locallang_formEditor_failSafeErrorHandling_javascript.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:form/Resources/Private/Language/locallang_formManager_javascript.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/form/en-X-GNZ.locallang_formManager_javascript.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:form/Resources/Private/Language/locallang_form_editor_javascript.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/form/en-X-GNZ.locallang_form_editor_javascript.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:form/Resources/Private/Language/locallang_module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/form/en-X-GNZ.locallang_module.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:form/Resources/Private/Language/locallang_relative_date_editor.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/form/en-X-GNZ.locallang_relative_date_editor.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:form/Resources/Private/Language/module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/form/en-X-GNZ.module.xlf';

// frontend
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:frontend/Resources/Private/Language/db/tt_content.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/frontend/db/en-X-GNZ.tt_content.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:frontend/Resources/Private/Language/general.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/frontend/en-X-GNZ.general.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/frontend/en-X-GNZ.locallang_tca.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:frontend/Resources/Private/Language/locallang_ttc.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/frontend/en-X-GNZ.locallang_ttc.xlf';

// impexp
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:impexp/Resources/Private/Language/db.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/impexp/en-X-GNZ.db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:impexp/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/impexp/en-X-GNZ.locallang.xlf';

// indexed_search
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:indexed_search/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/indexed_search/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:indexed_search/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/indexed_search/en-X-GNZ.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:indexed_search/Resources/Private/Language/locallang_em.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/indexed_search/en-X-GNZ.locallang_em.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:indexed_search/Resources/Private/Language/locallang_main.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/indexed_search/en-X-GNZ.locallang_main.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:indexed_search/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/indexed_search/en-X-GNZ.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:indexed_search/Resources/Private/Language/module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/indexed_search/en-X-GNZ.module.xlf';

// info
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:info/Resources/Private/Language/Modules/overview.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/info/Modules/en-X-GNZ.overview.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:info/Resources/Private/Language/Modules/translations.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/info/Modules/en-X-GNZ.translations.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:info/Resources/Private/Language/locallang_mod_web_info.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/info/en-X-GNZ.locallang_mod_web_info.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:info/Resources/Private/Language/locallang_webinfo.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/info/en-X-GNZ.locallang_webinfo.xlf';

// install
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:install/Resources/Private/Language/BackendModule.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/install/en-X-GNZ.BackendModule.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:install/Resources/Private/Language/ModuleInstallEnvironment.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/install/en-X-GNZ.ModuleInstallEnvironment.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:install/Resources/Private/Language/ModuleInstallMaintenance.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/install/en-X-GNZ.ModuleInstallMaintenance.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:install/Resources/Private/Language/ModuleInstallSettings.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/install/en-X-GNZ.ModuleInstallSettings.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:install/Resources/Private/Language/ModuleInstallUpgrade.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/install/en-X-GNZ.ModuleInstallUpgrade.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:install/Resources/Private/Language/Modules/environment.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/install/Modules/en-X-GNZ.environment.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:install/Resources/Private/Language/Modules/maintenance.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/install/Modules/en-X-GNZ.maintenance.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:install/Resources/Private/Language/Modules/settings.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/install/Modules/en-X-GNZ.settings.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:install/Resources/Private/Language/Modules/upgrade.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/install/Modules/en-X-GNZ.upgrade.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:install/Resources/Private/Language/Report/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/install/Report/en-X-GNZ.locallang.xlf';

// linkvalidator
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:linkvalidator/Resources/Private/Language/Module/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/linkvalidator/Module/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:linkvalidator/Resources/Private/Language/Module/locallang_mod.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/linkvalidator/Module/en-X-GNZ.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:linkvalidator/Resources/Private/Language/db.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/linkvalidator/en-X-GNZ.db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:linkvalidator/Resources/Private/Language/module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/linkvalidator/en-X-GNZ.module.xlf';

// lowlevel
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:lowlevel/Resources/Private/Language/Modules/config.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/lowlevel/Modules/en-X-GNZ.config.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:lowlevel/Resources/Private/Language/Modules/database_integrity.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/lowlevel/Modules/en-X-GNZ.database_integrity.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:lowlevel/Resources/Private/Language/Modules/database_query.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/lowlevel/Modules/en-X-GNZ.database_query.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:lowlevel/Resources/Private/Language/Modules/database_raw.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/lowlevel/Modules/en-X-GNZ.database_raw.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:lowlevel/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/lowlevel/en-X-GNZ.locallang.xlf';

// opendocs
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:opendocs/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/opendocs/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:opendocs/Resources/Private/Language/locallang_widget_recentdocuments.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/opendocs/en-X-GNZ.locallang_widget_recentdocuments.xlf';

// reactions
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:reactions/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/reactions/en-X-GNZ.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:reactions/Resources/Private/Language/module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/reactions/en-X-GNZ.module.xlf';

// recycler
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:recycler/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/recycler/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:recycler/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/recycler/en-X-GNZ.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:recycler/Resources/Private/Language/locallang_tasks.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/recycler/en-X-GNZ.locallang_tasks.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:recycler/Resources/Private/Language/module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/recycler/en-X-GNZ.module.xlf';

// redirects
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:redirects/Resources/Private/Language/Modules/qrcodes.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/redirects/Modules/en-X-GNZ.qrcodes.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:redirects/Resources/Private/Language/Modules/redirects.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/redirects/Modules/en-X-GNZ.redirects.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:redirects/Resources/Private/Language/Modules/short_urls.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/redirects/Modules/en-X-GNZ.short_urls.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:redirects/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/redirects/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:redirects/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/redirects/en-X-GNZ.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:redirects/Resources/Private/Language/locallang_extconf.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/redirects/en-X-GNZ.locallang_extconf.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/redirects/en-X-GNZ.locallang_module_redirect.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:redirects/Resources/Private/Language/locallang_reports.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/redirects/en-X-GNZ.locallang_reports.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:redirects/Resources/Private/Language/locallang_slug_service.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/redirects/en-X-GNZ.locallang_slug_service.xlf';

// reports
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:reports/Resources/Private/Language/Modules/overview.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/reports/Modules/en-X-GNZ.overview.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:reports/Resources/Private/Language/Modules/statistics.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/reports/Modules/en-X-GNZ.statistics.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:reports/Resources/Private/Language/Modules/status.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/reports/Modules/en-X-GNZ.status.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:reports/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/reports/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:reports/Resources/Private/Language/locallang_reports.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/reports/en-X-GNZ.locallang_reports.xlf';

// scheduler
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:scheduler/Resources/Private/Language/label.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/scheduler/en-X-GNZ.label.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:scheduler/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/scheduler/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:scheduler/Resources/Private/Language/locallang_em.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/scheduler/en-X-GNZ.locallang_em.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:scheduler/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/scheduler/en-X-GNZ.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:scheduler/Resources/Private/Language/locallang_tca.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/scheduler/en-X-GNZ.locallang_tca.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:scheduler/Resources/Private/Language/module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/scheduler/en-X-GNZ.module.xlf';

// seo
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:seo/Resources/Private/Language/db.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/seo/en-X-GNZ.db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:seo/Resources/Private/Language/locallang_dashboard.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/seo/en-X-GNZ.locallang_dashboard.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:seo/Resources/Private/Language/locallang_webinfo.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/seo/en-X-GNZ.locallang_webinfo.xlf';

// styleguide
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:styleguide/Resources/Private/Language/Modules/components.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/styleguide/Modules/en-X-GNZ.components.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:styleguide/Resources/Private/Language/Modules/overview.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/styleguide/Modules/en-X-GNZ.overview.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:styleguide/Resources/Private/Language/Modules/pagetrees.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/styleguide/Modules/en-X-GNZ.pagetrees.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:styleguide/Resources/Private/Language/Modules/styles.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/styleguide/Modules/en-X-GNZ.styles.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:styleguide/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/styleguide/en-X-GNZ.locallang.xlf';

// sys_note
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:sys_note/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/sys_note/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:sys_note/Resources/Private/Language/locallang_tca.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/sys_note/en-X-GNZ.locallang_tca.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:sys_note/Resources/Private/Language/locallang_widget_pages_with_internal_note.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/sys_note/en-X-GNZ.locallang_widget_pages_with_internal_note.xlf';

// theme_camino
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:theme_camino/Resources/Private/Language/backend_fields.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/theme_camino/en-X-GNZ.backend_fields.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:theme_camino/Resources/Private/Language/backend_layouts.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/theme_camino/en-X-GNZ.backend_layouts.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:theme_camino/Resources/Private/Language/backend_previews.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/theme_camino/en-X-GNZ.backend_previews.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:theme_camino/Resources/Private/Language/messages.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/theme_camino/en-X-GNZ.messages.xlf';

// tstemplate
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:tstemplate/Resources/Private/Language/Modules/active.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/tstemplate/Modules/en-X-GNZ.active.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:tstemplate/Resources/Private/Language/Modules/analyzer.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/tstemplate/Modules/en-X-GNZ.analyzer.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:tstemplate/Resources/Private/Language/Modules/constanteditor.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/tstemplate/Modules/en-X-GNZ.constanteditor.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:tstemplate/Resources/Private/Language/Modules/infomodify.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/tstemplate/Modules/en-X-GNZ.infomodify.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:tstemplate/Resources/Private/Language/Modules/recordsoverview.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/tstemplate/Modules/en-X-GNZ.recordsoverview.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:tstemplate/Resources/Private/Language/Modules/ts.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/tstemplate/Modules/en-X-GNZ.ts.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:tstemplate/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/tstemplate/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:tstemplate/Resources/Private/Language/locallang_active.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/tstemplate/en-X-GNZ.locallang_active.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:tstemplate/Resources/Private/Language/locallang_analyzer.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/tstemplate/en-X-GNZ.locallang_analyzer.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:tstemplate/Resources/Private/Language/locallang_ceditor.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/tstemplate/en-X-GNZ.locallang_ceditor.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:tstemplate/Resources/Private/Language/locallang_info.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/tstemplate/en-X-GNZ.locallang_info.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:tstemplate/Resources/Private/Language/locallang_overview.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/tstemplate/en-X-GNZ.locallang_overview.xlf';

// viewpage
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:viewpage/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/viewpage/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:viewpage/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/viewpage/en-X-GNZ.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:viewpage/Resources/Private/Language/module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/viewpage/en-X-GNZ.module.xlf';

// webhooks
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:webhooks/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/webhooks/en-X-GNZ.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:webhooks/Resources/Private/Language/module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/webhooks/en-X-GNZ.module.xlf';

// workspaces
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:workspaces/Resources/Private/Language/locallang.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/workspaces/en-X-GNZ.locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:workspaces/Resources/Private/Language/locallang_db.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/workspaces/en-X-GNZ.locallang_db.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:workspaces/Resources/Private/Language/locallang_mod.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/workspaces/en-X-GNZ.locallang_mod.xlf';
$GLOBALS['TYPO3_CONF_VARS']['LANG']['resourceOverrides']['en-X-GNZ']['EXT:workspaces/Resources/Private/Language/module.xlf'][]
    = 'EXT:gen_z/Resources/Private/Language/workspaces/en-X-GNZ.module.xlf';
