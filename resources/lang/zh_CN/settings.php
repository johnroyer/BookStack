<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => '设置',
    'settings_save' => '保存设置',
    'settings_save_success' => '设置已保存',

    // App Settings
    'app_customization' => '定制',
    'app_features_security' => '功能与安全',
    'app_name' => '站点名称',
    'app_name_desc' => '此名称将在网页头部和Email中显示。',
    'app_name_header' => '在网页头部显示应用名？',
    'app_public_access' => '访问权限',
    'app_public_access_desc' => '启用此选项将允许未登录的用户访问站点内容。',
    'app_public_access_desc_guest' => '可以通过“访客”用户来控制公共访问者的访问。',
    'app_public_access_toggle' => '允许公众访问',
    'app_public_viewing' => '允许公众查看？',
    'app_secure_images' => '启用更高安全性的图片上传？',
    'app_secure_images_toggle' => '启用更高安全性的图片上传',
    'app_secure_images_desc' => '出于性能原因，所有图像都是公开的。这个选项会在图像的网址前添加一个随机的，难以猜测的字符串，从而使直接访问变得困难。',
    'app_editor' => '页面编辑器',
    'app_editor_desc' => '选择所有用户将使用哪个编辑器来编辑页面。',
    'app_custom_html' => '自定义HTML头部内容',
    'app_custom_html_desc' => '此处添加的任何内容都将插入到每个页面的<head>部分的底部，这对于覆盖样式或添加分析代码很方便。',
    'app_custom_html_disabled_notice' => '在此设置页面上禁用了自定义HTML标题内容，以确保可以恢复所有重大更改。',
    'app_custom_footer' => 'Custom HTML Footer',
    'app_custom_footer_desc' => 'You can put contact infomation, partner\'s links. Or you can also add a <a href="ihttps://creativecommons.org/">creative commoms here</a>',
    'app_logo' => '站点Logo',
    'app_logo_desc' => '这个图片的高度应该为43px。<br>大图片将会被缩小。',
    'app_primary_color' => '站点主色',
    'app_primary_color_desc' => '这应该是一个十六进制值。<br>保留为空以重置为默认颜色。',
    'app_homepage' => '站点主页',
    'app_homepage_desc' => '选择要在主页上显示的页面来替换默认的视图，选定页面的访问权限将被忽略。',
    'app_homepage_select' => '选择一个页面',
    'app_disable_comments' => '禁用评论',
    'app_disable_comments_toggle' => '禁用评论',
    'app_disable_comments_desc' => '在站点的所有页面上禁用评论，现有评论也不会显示出来。',

    // Color settings
    'content_colors' => '内容颜色',
    'content_colors_desc' => '设置页面组织层次中所有元素的颜色。建议选择与默认颜色相似的亮度的颜色。',
    'bookshelf_color' => '书架颜色',
    'book_color' => '图书颜色',
    'chapter_color' => '章节颜色',
    'page_color' => '页面颜色',
    'page_draft_color' => '页面草稿颜色',

    // Registration Settings
    'reg_settings' => '注册设置',
    'reg_enable' => '启用注册',
    'reg_enable_toggle' => '启用注册',
    'reg_enable_desc' => '启用注册后，用户将可以自己注册为站点用户。 注册后，他们将获得一个默认的单一用户角色。',
    'reg_default_role' => '注册后的默认用户角色',
    'reg_enable_external_warning' => '当启用外部LDAP或者SAML认证时，上面的选项会被忽略。当使用外部系统认证认证成功时，将自动创建非现有会员的用户账户。',
    'reg_email_confirmation' => '邮件确认',
    'reg_email_confirmation_toggle' => '需要电子邮件确认',
    'reg_confirm_email_desc' => '如果使用域名限制，则需要Email验证，并且该值将被忽略。',
    'reg_confirm_restrict_domain' => '域名限制',
    'reg_confirm_restrict_domain_desc' => '输入您想要限制注册的Email域名列表，用逗号隔开。在被允许与应用程序交互之前，用户将被发送一封Email来确认他们的地址。<br>注意用户在注册成功后可以修改他们的Email地址。',
    'reg_confirm_restrict_domain_placeholder' => '尚未设置限制',

    // Maintenance settings
    'maint' => '维护',
    'maint_image_cleanup' => '清理图像',
    'maint_image_cleanup_desc' => "扫描页面和修订内容以检查哪些图像是正在使用的以及哪些图像是多余的。确保在运行前创建完整的数据库和映像备份。",
    'maint_delete_images_only_in_revisions' => '同时删除只存在于旧页面版本中的图片',
    'maint_image_cleanup_run' => '运行清理',
    'maint_image_cleanup_warning' => '发现了 :count 张可能未使用的图像。您确定要删除这些图像吗？',
    'maint_image_cleanup_success' => '找到并删除了 :count 张可能未使用的图像！',
    'maint_image_cleanup_nothing_found' => '找不到未使用的图像，没有删除！',
    'maint_send_test_email' => '发送测试电子邮件',
    'maint_send_test_email_desc' => '这将发送测试邮件到您的个人资料中指定的电子邮件地址。',
    'maint_send_test_email_run' => '发送测试邮件',
    'maint_send_test_email_success' => '电子邮件已发送至 :address',
    'maint_send_test_email_mail_subject' => '测试电子邮件',
    'maint_send_test_email_mail_greeting' => '邮件发送功能看起来工作正常！',
    'maint_send_test_email_mail_text' => '恭喜！您收到了此邮件通知，您的电子邮件设置看起来已配置正确。',
    'maint_recycle_bin_desc' => '被删除的书架、书籍、章节和页面会被存入回收站，您可以还原或永久删除它们。回收站中较旧的项目可能会在系统设置的一段时间后被自动删除。',
    'maint_recycle_bin_open' => '打开回收站',

    // Recycle Bin
    'recycle_bin' => '回收站',
    'recycle_bin_desc' => '在这里，您可以还原已删除的项目，或选择将其从系统中永久删除。与系统中过滤过的类似的活动记录不同，这个表会显示所有操作。',
    'recycle_bin_deleted_item' => '被删除的项目',
    'recycle_bin_deleted_by' => '删除者',
    'recycle_bin_deleted_at' => '删除时间',
    'recycle_bin_permanently_delete' => '永久删除',
    'recycle_bin_restore' => '恢复',
    'recycle_bin_contents_empty' => '回收站当前为空',
    'recycle_bin_empty' => '清空回收站',
    'recycle_bin_empty_confirm' => '这将永久性销毁回收站中的所有项目（包括每个项目中包含的内容，例如图片）。您确定要清空回收站吗？',
    'recycle_bin_destroy_confirm' => '此操作将从系统中永久删除此项目以及下面列出的所有子元素，并且您将无法还原此内容。您确定要永久删除该项目吗？',
    'recycle_bin_destroy_list' => '要销毁的项目',
    'recycle_bin_restore_list' => '要恢复的项目',
    'recycle_bin_restore_confirm' => '此操作会将已删除的项目及其所有子元素恢复到原始位置。如果项目的原始位置已被删除，并且现在位于回收站中，则要恢复项目的上级项目也需要恢复。',
    'recycle_bin_restore_deleted_parent' => '该项目的上级项目也已被删除。这些项目将保持被删除状态，直到上级项目被恢复。',
    'recycle_bin_destroy_notification' => '从回收站中删除了 :count 个项目。',
    'recycle_bin_restore_notification' => '从回收站中恢复了 :count 个项目。',

    // Audit Log
    'audit' => '审核日志',
    'audit_desc' => '这份审核日志显示所有被系统跟踪的活动。与系统中过滤过的类似的活动记录不同，这个表会显示所有操作。',
    'audit_event_filter' => '事件过滤器',
    'audit_event_filter_no_filter' => '无过滤器',
    'audit_deleted_item' => '被删除的项目',
    'audit_deleted_item_name' => '名称: :name',
    'audit_table_user' => '用户',
    'audit_table_event' => '事件',
    'audit_table_related' => '相关项目或详细信息',
    'audit_table_date' => '活动日期',
    'audit_date_from' => '日期范围从',
    'audit_date_to' => '日期范围至',

    // Role Settings
    'roles' => '角色',
    'role_user_roles' => '用户角色',
    'role_create' => '创建角色',
    'role_create_success' => '角色创建成功',
    'role_delete' => '删除角色',
    'role_delete_confirm' => '这将会删除名为 \':roleName\' 的角色.',
    'role_delete_users_assigned' => '有:userCount位用户属于此角色。如果您想将此角色中的用户迁移，请在下面选择一个新角色。',
    'role_delete_no_migration' => "不要迁移用户",
    'role_delete_sure' => '您确定要删除这个角色？',
    'role_delete_success' => '角色删除成功',
    'role_edit' => '编辑角色',
    'role_details' => '角色详细信息',
    'role_name' => '角色名',
    'role_desc' => '角色简述',
    'role_external_auth_id' => '外部身份认证ID',
    'role_system' => '系统权限',
    'role_manage_users' => '管理用户',
    'role_manage_roles' => '管理角色与角色权限',
    'role_manage_entity_permissions' => '管理所有图书，章节和页面的权限',
    'role_manage_own_entity_permissions' => '管理自己的图书，章节和页面的权限',
    'role_manage_page_templates' => '管理页面模板',
    'role_access_api' => '访问系统 API',
    'role_manage_settings' => '管理App设置',
    'role_asset' => '资源许可',
    'roles_system_warning' => '请注意，具有上述三个权限中的任何一个都可以允许用户更改自己的特权或系统中其他人的特权。 只将具有这些权限的角色分配给受信任的用户。',
    'role_asset_desc' => '对系统内资源的默认访问许可将由这些权限控制。单独设置在书籍，章节和页面上的权限将覆盖这里的权限设定。',
    'role_asset_admins' => '管理员可自动获得对所有内容的访问权限，但这些选项可能会显示或隐藏UI选项。',
    'role_all' => '全部的',
    'role_own' => '拥有的',
    'role_controlled_by_asset' => '由其所在的资源来控制',
    'role_save' => '保存角色',
    'role_update_success' => '角色更新成功',
    'role_users' => '此角色的用户',
    'role_users_none' => '目前没有用户被分配到这个角色',

    // Users
    'users' => '用户',
    'user_profile' => '用户资料',
    'users_add_new' => '添加用户',
    'users_search' => '搜索用户',
    'users_latest_activity' => '最新活动',
    'users_details' => '用户详细资料',
    'users_details_desc' => '设置该用户的显示名称和电子邮件地址。 该电子邮件地址将用于登录本站。',
    'users_details_desc_no_email' => '设置此用户的昵称，以便其他人识别。',
    'users_role' => '用户角色',
    'users_role_desc' => '选择将分配给该用户的角色。 如果将一个用户分配给多个角色，则这些角色的权限将堆叠在一起，并且他们将获得分配的角色的所有功能。',
    'users_password' => '用户密码',
    'users_password_desc' => '设置用于登录应用程序的密码。 该长度必须至少为6个字符。',
    'users_send_invite_text' => '您可以向该用户发送邀请电子邮件，允许他们设置自己的密码，否则，您可以自己设置他们的密码。',
    'users_send_invite_option' => '发送邀请用户电子邮件',
    'users_external_auth_id' => '外部身份认证ID',
    'users_external_auth_id_desc' => '这是用于与您的外部身份验证系统通信时匹配此用户的ID。',
    'users_password_warning' => '如果您想更改密码，请填写以下内容：',
    'users_system_public' => '此用户代表访问您的App的任何访客。它不能用于登录，而是自动分配。',
    'users_delete' => '删除用户',
    'users_delete_named' => '删除用户 :userName',
    'users_delete_warning' => '这将从系统中完全删除名为 \':userName\' 的用户。',
    'users_delete_confirm' => '您确定要删除这个用户？',
    'users_migrate_ownership' => '迁移拥有权',
    'users_migrate_ownership_desc' => '如果您想要当前用户拥有的全部项目转移到另一个用户（更改拥有者），请在此处选择一个用户。',
    'users_none_selected' => '没有选中用户',
    'users_delete_success' => '已成功移除用户',
    'users_edit' => '编辑用户',
    'users_edit_profile' => '编辑资料',
    'users_edit_success' => '用户更新成功',
    'users_avatar' => '用户头像',
    'users_avatar_desc' => '当前图片应该为约256px的正方形。',
    'users_preferred_language' => '语言',
    'users_preferred_language_desc' => '此选项将更改用于应用程序用户界面的语言。 这不会影响任何用户创建的内容。',
    'users_social_accounts' => '社交账户',
    'users_social_accounts_info' => '在这里，您可以绑定您的其他帐户，以便更快更轻松地登录。如果您选择解除绑定，之后将不能通过此社交账户登录，请设置社交账户来取消本App的访问权限。',
    'users_social_connect' => '绑定账户',
    'users_social_disconnect' => '解除绑定账户',
    'users_social_connected' => ':socialAccount 账户已经成功绑定到您的资料。',
    'users_social_disconnected' => ':socialAccount 账户已经成功解除绑定。',
    'users_api_tokens' => 'API令牌',
    'users_api_tokens_none' => '没有创建任何API令牌给此用户',
    'users_api_tokens_create' => '创建令牌',
    'users_api_tokens_expires' => '过期',
    'users_api_tokens_docs' => 'API文档',

    // API Tokens
    'user_api_token_create' => '创建 API 令牌',
    'user_api_token_name' => '姓名',
    'user_api_token_name_desc' => '请给您的可读令牌一个命名以在未来提醒您它的预期用途',
    'user_api_token_expiry' => '过期期限',
    'user_api_token_expiry_desc' => '请设置一个此令牌的过期时间，过期后此令牌所给出的请求将失效，若将此处留为空白将自动设置过期时间为100年。',
    'user_api_token_create_secret_message' => '创建此令牌后会立即生成“令牌ID”和“令牌密钥”。该密钥只会显示一次，所以请确保在继续操作之前将密钥记录或复制到一个安全的地方。',
    'user_api_token_create_success' => '成功创建API令牌。',
    'user_api_token_update_success' => '成功更新API令牌。',
    'user_api_token' => 'API令牌',
    'user_api_token_id' => '令牌ID',
    'user_api_token_id_desc' => '这是系统生成的一个不可编辑的令牌标识符，需要在API请求中才能提供。',
    'user_api_token_secret' => '令牌密钥',
    'user_api_token_secret_desc' => '这是此令牌系统生成的密钥，需要在API请求中才可以提供。 这只会显示一次，因此请将其复制到安全的地方。',
    'user_api_token_created' => '创建的令牌:timeAgo',
    'user_api_token_updated' => '令牌更新:timeAgo',
    'user_api_token_delete' => '删除令牌',
    'user_api_token_delete_warning' => '这将会从系统中完全删除名为“令牌命名”的API令牌',
    'user_api_token_delete_confirm' => '您确定要删除此API令牌吗？',
    'user_api_token_delete_success' => '成功删除API令牌',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => '保加利亚语',
        'cs' => 'Česky',
        'da' => '丹麦',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'fr' => 'Français',
        'he' => 'עברית',
        'hu' => 'Magyar',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'nl' => 'Nederlands',
        'nb' => '挪威语 (Bokmål)',
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
