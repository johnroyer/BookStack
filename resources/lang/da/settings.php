<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Indstillinger',
    'settings_save' => 'Gem indstillinger',
    'settings_save_success' => 'Indstillinger gemt',

    // App Settings
    'app_customization' => 'Tilpasning',
    'app_features_security' => 'Funktioner & sikkerhed',
    'app_name' => 'Programnavn',
    'app_name_desc' => 'Dette er navnet vist i headeren og i systemafsendte E-Mails.',
    'app_name_header' => 'Vis navn i header',
    'app_public_access' => 'Offentlig adgang',
    'app_public_access_desc' => 'Aktivering af denne funktion giver besøgende, der ikke er logget ind, adgang til indhold i din BookStack-instans.',
    'app_public_access_desc_guest' => 'Adgang for ikke-registrerede besøgende kan kontrolleres via "Gæst" -brugeren.',
    'app_public_access_toggle' => 'Tillad offentlig adgang',
    'app_public_viewing' => 'Tillad offentlig visning?',
    'app_secure_images' => 'Højere sikkerhed for billeduploads',
    'app_secure_images_toggle' => 'Aktiver højere sikkerhed for billeduploads',
    'app_secure_images_desc' => 'Af ydeevneårsager er alle billeder offentlige. Denne funktion tilføjer en tilfældig, vanskelig at gætte streng foran billed-Url\'er. Sørg for, at mappeindekser ikke er aktiveret for at forhindre nem adgang.',
    'app_editor' => 'Sideeditor',
    'app_editor_desc' => 'Vælg hvilken editor der skal bruges af alle brugere til at redigere sider.',
    'app_custom_html' => 'Tilpasset HTML head-indhold',
    'app_custom_html_desc' => 'Al indhold tilføjet her, vil blive indsat i bunden af <head> sektionen på alle sider. Dette er brugbart til overskrivning af styling og tilføjelse af analysekode.',
    'app_custom_html_disabled_notice' => 'Brugerdefineret HTML-head indhold er deaktiveret på denne indstillingsside for at sikre, at ødelæggende ændringer kan rettes.',
    'app_custom_footer' => 'Custom HTML Footer',
    'app_custom_footer_desc' => 'You can put contact infomation, partner\'s links. Or you can also add a <a href="ihttps://creativecommons.org/">creative commoms here</a>',
    'app_logo' => 'Programlogo',
    'app_logo_desc' => 'Dette billede skal være 43px højt. <br> Større billeder vil blive skaleret ned.',
    'app_primary_color' => 'Primær programfarve',
    'app_primary_color_desc' => 'Sætter den primære farve for applikationen herunder banneret, knapper og links.',
    'app_homepage' => 'Programforside',
    'app_homepage_desc' => 'Vælg en visning, der skal vises på startsiden i stedet for standardvisningen. Sidetilladelser ignoreres for valgte sider.',
    'app_homepage_select' => 'Vælg en side',
    'app_disable_comments' => 'Deaktiver kommentarer',
    'app_disable_comments_toggle' => 'Deaktiver kommentar',
    'app_disable_comments_desc' => 'Deaktiverer kommentarer på tværs af alle sider i applikationen. <br> Eksisterende kommentarer vises ikke.',

    // Color settings
    'content_colors' => 'Indholdsfarver',
    'content_colors_desc' => 'Sætter farver for alle elementer i sideorganisationshierarkiet. Valg af farver med en lignende lysstyrke som standardfarverne anbefales af hensyn til læsbarhed.',
    'bookshelf_color' => 'Bogreolfarve',
    'book_color' => 'Bogfarve',
    'chapter_color' => 'Kapitelfarve',
    'page_color' => 'Sidefarve',
    'page_draft_color' => 'Sidekladdefarve',

    // Registration Settings
    'reg_settings' => 'Registrering',
    'reg_enable' => 'Aktivér tilmelding',
    'reg_enable_toggle' => 'Aktivér tilmelding',
    'reg_enable_desc' => 'Når registrering er aktiveret, vil alle kunne registrere sig som en applikationsbruger. Ved registrering får de en standardbrugerrolle.',
    'reg_default_role' => 'Standardrolle efter registrering',
    'reg_enable_external_warning' => 'Indstillingen ovenfor ignoreres, mens ekstern LDAP- eller SAML-godkendelse er aktiv. Brugerkonti for ikke-eksisterende medlemmer oprettes automatisk, hvis godkendelse mod det eksterne system, der er i brug, er vellykket.',
    'reg_email_confirmation' => 'Email bekræftelse',
    'reg_email_confirmation_toggle' => 'Kræv E-Mail bekræftelse',
    'reg_confirm_email_desc' => 'Hvis domænebegrænsning bruges, kræves e-mail-bekræftelse, og denne indstilling ignoreres.',
    'reg_confirm_restrict_domain' => 'Domæneregistrering',
    'reg_confirm_restrict_domain_desc' => 'Indtast en kommasepareret liste over e-mail-domæner, som du vil begrænse registreringen til. Brugere får en E-Mail for at bekræfte deres adresse, før de får tilladelse til at interagere med applikationen. <br> Bemærk, at brugere vil kunne ændre deres e-mail-adresser efter vellykket registrering.',
    'reg_confirm_restrict_domain_placeholder' => 'Ingen restriktion opsat',

    // Maintenance settings
    'maint' => 'Vedligeholdelse',
    'maint_image_cleanup' => 'Ryd op i billeder',
    'maint_image_cleanup_desc' => "Scanner side & revisionsindhold for at kontrollere, hvilke billeder og tegninger, der i øjeblikket er i brug, og hvilke billeder, der er overflødige. Sørg for, at du opretter en komplet database og billedbackup, før du kører dette.",
    'maint_delete_images_only_in_revisions' => 'Also delete images that only exist in old page revisions',
    'maint_image_cleanup_run' => 'Kør Oprydning',
    'maint_image_cleanup_warning' => 'der blev fundet :count potentielt ubrugte billeder. Er du sikker på, at du vil slette disse billeder?',
    'maint_image_cleanup_success' => ':count: potentielt ubrugte billeder fundet og slettet!',
    'maint_image_cleanup_nothing_found' => 'Ingen ubrugte billeder fundet, intet slettet!',
    'maint_send_test_email' => 'Send en Testemail',
    'maint_send_test_email_desc' => 'Dette sender en testmail til din mailadresse specificeret på din profil.',
    'maint_send_test_email_run' => 'Afsend test E-Mail',
    'maint_send_test_email_success' => 'E-Mail sendt til :address',
    'maint_send_test_email_mail_subject' => 'Test E-Mail',
    'maint_send_test_email_mail_greeting' => 'E-Mail levering ser ud til at virke!',
    'maint_send_test_email_mail_text' => 'Tillykke! Da du har modtaget denne mailnotifikation, ser det ud som om, at dine mailindstillinger er opsat korrekt.',
    'maint_recycle_bin_desc' => 'Deleted shelves, books, chapters & pages are sent to the recycle bin so they can be restored or permanently deleted. Older items in the recycle bin may be automatically removed after a while depending on system configuration.',
    'maint_recycle_bin_open' => 'Open Recycle Bin',

    // Recycle Bin
    'recycle_bin' => 'Recycle Bin',
    'recycle_bin_desc' => 'Here you can restore items that have been deleted or choose to permanently remove them from the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'recycle_bin_deleted_item' => 'Deleted Item',
    'recycle_bin_deleted_by' => 'Deleted By',
    'recycle_bin_deleted_at' => 'Deletion Time',
    'recycle_bin_permanently_delete' => 'Permanently Delete',
    'recycle_bin_restore' => 'Restore',
    'recycle_bin_contents_empty' => 'The recycle bin is currently empty',
    'recycle_bin_empty' => 'Empty Recycle Bin',
    'recycle_bin_empty_confirm' => 'This will permanently destroy all items in the recycle bin including content contained within each item. Are you sure you want to empty the recycle bin?',
    'recycle_bin_destroy_confirm' => 'This action will permanently delete this item, along with any child elements listed below, from the system and you will not be able to restore this content. Are you sure you want to permanently delete this item?',
    'recycle_bin_destroy_list' => 'Items to be Destroyed',
    'recycle_bin_restore_list' => 'Items to be Restored',
    'recycle_bin_restore_confirm' => 'This action will restore the deleted item, including any child elements, to their original location. If the original location has since been deleted, and is now in the recycle bin, the parent item will also need to be restored.',
    'recycle_bin_restore_deleted_parent' => 'The parent of this item has also been deleted. These will remain deleted until that parent is also restored.',
    'recycle_bin_destroy_notification' => 'Deleted :count total items from the recycle bin.',
    'recycle_bin_restore_notification' => 'Restored :count total items from the recycle bin.',

    // Audit Log
    'audit' => 'Audit Log',
    'audit_desc' => 'This audit log displays a list of activities tracked in the system. This list is unfiltered unlike similar activity lists in the system where permission filters are applied.',
    'audit_event_filter' => 'Event Filter',
    'audit_event_filter_no_filter' => 'No Filter',
    'audit_deleted_item' => 'Deleted Item',
    'audit_deleted_item_name' => 'Name: :name',
    'audit_table_user' => 'User',
    'audit_table_event' => 'Event',
    'audit_table_related' => 'Related Item or Detail',
    'audit_table_date' => 'Activity Date',
    'audit_date_from' => 'Date Range From',
    'audit_date_to' => 'Date Range To',

    // Role Settings
    'roles' => 'Roller',
    'role_user_roles' => 'Brugerroller',
    'role_create' => 'Opret en ny rolle',
    'role_create_success' => 'Rollen blev oprette korrekt',
    'role_delete' => 'Slet rolle',
    'role_delete_confirm' => 'Dette vil slette rollen med navnet \':roleName\'.',
    'role_delete_users_assigned' => 'Denne rolle er tildelt :userCount brugere. Hvis du vil rykke disse brugere fra denne rolle, kan du vælge en ny nedenunder.',
    'role_delete_no_migration' => "Ryk ikke brugere",
    'role_delete_sure' => 'Er du sikker på, at du vil slette denne rolle?',
    'role_delete_success' => 'Rollen blev slettet',
    'role_edit' => 'Rediger rolle',
    'role_details' => 'Rolledetaljer',
    'role_name' => 'Rollenavn',
    'role_desc' => 'Kort beskrivelse af rolle',
    'role_external_auth_id' => 'Eksterne godkendelses-IDer',
    'role_system' => 'Systemtilladelser',
    'role_manage_users' => 'Administrere brugere',
    'role_manage_roles' => 'Administrer roller & rollerettigheder',
    'role_manage_entity_permissions' => 'Administrer alle bog-, kapitel- & side-rettigheder',
    'role_manage_own_entity_permissions' => 'Administrer tilladelser på egne bøger, kapitler og sider',
    'role_manage_page_templates' => 'Administrer side-skabeloner',
    'role_access_api' => 'Tilgå system-API',
    'role_manage_settings' => 'Administrer app-indstillinger',
    'role_asset' => 'Tilladelser for medier og "assets"',
    'roles_system_warning' => 'Be aware that access to any of the above three permissions can allow a user to alter their own privileges or the privileges of others in the system. Only assign roles with these permissions to trusted users.',
    'role_asset_desc' => 'Disse tilladelser kontrollerer standardadgang til medier og "assets" i systemet. Tilladelser til bøger, kapitler og sider tilsidesætter disse tilladelser.',
    'role_asset_admins' => 'Administratorer får automatisk adgang til alt indhold, men disse indstillinger kan vise eller skjule UI-indstillinger.',
    'role_all' => 'Alle',
    'role_own' => 'Eget',
    'role_controlled_by_asset' => 'Styres af det medie/"asset", de uploades til',
    'role_save' => 'Gem rolle',
    'role_update_success' => 'Rollen blev opdateret',
    'role_users' => 'Brugere med denne rolle',
    'role_users_none' => 'Ingen brugere er i øjeblikket tildelt denne rolle',

    // Users
    'users' => 'Brugere',
    'user_profile' => 'Brugerprofil',
    'users_add_new' => 'Tilføj ny bruger',
    'users_search' => 'Søg efter brugere',
    'users_latest_activity' => 'Latest Activity',
    'users_details' => 'Brugeroplysninger',
    'users_details_desc' => 'Angiv et visningsnavn og en E-Mail-adresse for denne bruger. E-Mail-adressen bruges til at logge ind på applikationen.',
    'users_details_desc_no_email' => 'Sætter et visningsnavn for denne bruger, så andre kan genkende dem.',
    'users_role' => 'Brugerroller',
    'users_role_desc' => 'Vælg hvilke roller denne bruger skal tildeles. Hvis en bruger er tildelt flere roller, sammenføres tilladelserne fra disse roller, og de får alle evnerne fra de tildelte roller.',
    'users_password' => 'Brugeradgangskode',
    'users_password_desc' => 'Sæt et kodeord, der bruges til at logge på applikationen. Dette skal være mindst 6 tegn langt.',
    'users_send_invite_text' => 'Du kan vælge at sende denne bruger en invitation på E-Mail, som giver dem mulighed for at indstille deres egen adgangskode, ellers kan du indstille deres adgangskode selv.',
    'users_send_invite_option' => 'Send bruger en invitationsmail',
    'users_external_auth_id' => 'Ekstern godkendelses ID',
    'users_external_auth_id_desc' => 'Dette er det ID, der bruges til at matche denne bruger ved kommunikation med dit eksterne godkendelsessystem.',
    'users_password_warning' => 'Udfyld kun nedenstående, hvis du vil ændre din adgangskode.',
    'users_system_public' => 'Denne bruger repræsenterer alle gæstebrugere, der besøger din instans. Den kan ikke bruges til at logge på, men tildeles automatisk.',
    'users_delete' => 'Slet bruger',
    'users_delete_named' => 'Slet bruger :userName',
    'users_delete_warning' => 'Dette vil helt slette denne bruger med navnet \':userName\' fra systemet.',
    'users_delete_confirm' => 'Er du sikker på, at du vil slette denne bruger?',
    'users_migrate_ownership' => 'Migrate Ownership',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'No user selected',
    'users_delete_success' => 'User successfully removed',
    'users_edit' => 'Rediger bruger',
    'users_edit_profile' => 'Rediger profil',
    'users_edit_success' => 'Bruger suscesfuldt opdateret',
    'users_avatar' => 'Brugeravatar',
    'users_avatar_desc' => 'Vælg et billede for at repræsentere denne bruger. Dette skal være ca. 256px kvadratisk.',
    'users_preferred_language' => 'Foretrukket sprog',
    'users_preferred_language_desc' => 'Denne indstilling ændrer det sprog, der bruges til applikationens brugergrænseflade. Dette påvirker ikke noget brugeroprettet indhold.',
    'users_social_accounts' => 'Sociale konti',
    'users_social_accounts_info' => 'Her kan du forbinde dine andre konti for hurtigere og lettere login. Afbrydelse af en konto her tilbagekalder ikke tidligere autoriseret adgang. Tilbagekald adgang fra dine profilindstillinger på den tilsluttede sociale konto.',
    'users_social_connect' => 'Forbind konto',
    'users_social_disconnect' => 'Frakobl konto',
    'users_social_connected' => ':socialAccount kontoen blev knyttet til din profil.',
    'users_social_disconnected' => ':socialAccount kontoen blev afbrudt fra din profil.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_none' => 'Ingen API tokens er blevet oprettet for denne bruger',
    'users_api_tokens_create' => 'Opret Token',
    'users_api_tokens_expires' => 'Udløber',
    'users_api_tokens_docs' => 'API-dokumentation',

    // API Tokens
    'user_api_token_create' => 'Opret API-token',
    'user_api_token_name' => 'Navn',
    'user_api_token_name_desc' => 'Giv din token et læsbart navn som en fremtidig påmindelse om dets tilsigtede formål.',
    'user_api_token_expiry' => 'Udløbsdato',
    'user_api_token_expiry_desc' => 'Indstil en dato, hvorpå denne token udløber. Efter denne dato fungerer anmodninger, der er lavet med denne token, ikke længere. Hvis du lader dette felt være tomt, udløber den 100 år ud i fremtiden.',
    'user_api_token_create_secret_message' => 'Umiddelbart efter oprettelse af denne token genereres og vises et "Token-ID" og Token hemmelighed". Hemmeligheden vises kun en gang, så husk at kopiere værdien til et sikkert sted inden du fortsætter.',
    'user_api_token_create_success' => 'API token succesfuldt oprettet',
    'user_api_token_update_success' => 'API token succesfuldt opdateret',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token-ID',
    'user_api_token_id_desc' => 'Dette er en ikke-redigerbar systemgenereret identifikator for denne token, som skal sendes i API-anmodninger.',
    'user_api_token_secret' => 'Token hemmelighed',
    'user_api_token_secret_desc' => 'Dette er et system genereret hemmelighed for denne token, som skal sendes i API-anmodninger. Dette vises kun denne ene gang, så kopier denne værdi til et sikkert sted.',
    'user_api_token_created' => 'Token oprettet :timeAgo',
    'user_api_token_updated' => 'Token opdateret :timeAgo',
    'user_api_token_delete' => 'Slet Token',
    'user_api_token_delete_warning' => 'Dette vil helt slette API-token\'en med navnet \':tokenName\' fra systemet.',
    'user_api_token_delete_confirm' => 'Er du sikker på, at du vil slette denne API-token?',
    'user_api_token_delete_success' => 'API-token slettet',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'Hebraisk',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'nb' => 'Norsk (Bokmål)',
        'pl' => 'Polski',
        'pt_BR' => 'Português do Brasil',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ]
    //!////////////////////////////////
];
