######################################################



# -- Attachmod
CREATE TABLE phpbb_attachments_desc (
CREATE TABLE phpbb_attachments (

# -- Easy Contact Form

CREATE TABLE phpbb_contact (
  ip_address char(8) NOT NULL default '',
  send_time int(11) NOT NULL default '0',
  KEY ip_address (ip_address)
);
# -- Table structure for table 'phpbb_contact_config'

CREATE TABLE phpbb_contact_config (
  config_name varchar(255) NOT NULL default '',
  config_value varchar(255) NOT NULL default '',
  PRIMARY KEY (config_name)
);

INSERT INTO phpbb_contact_config VALUES ('contact_admin_email', '');
INSERT INTO phpbb_contact_config VALUES ('contact_form_enable', '1');
INSERT INTO phpbb_contact_config VALUES ('contact_require_rname', '0');
INSERT INTO phpbb_contact_config VALUES ('contact_require_email', '1');
INSERT INTO phpbb_contact_config VALUES ('contact_require_comments', '1');
INSERT INTO phpbb_contact_config VALUES ('contact_permit_attachments', '0');
INSERT INTO phpbb_contact_config VALUES ('contact_max_file_size', '128');
INSERT INTO phpbb_contact_config VALUES ('contact_file_root', 'efiles');
INSERT INTO phpbb_contact_config VALUES ('contact_flood_limit', '8');
INSERT INTO phpbb_contact_config VALUES ('contact_char_limit', '255');
INSERT INTO phpbb_contact_config VALUES ('contact_prune', '1');
INSERT INTO phpbb_contact_config VALUES ('contact_hash', '1');
INSERT INTO phpbb_contact_config VALUES ('contact_auth_guest', '0');
INSERT INTO phpbb_contact_config VALUES ('contact_auth_user', '1');
INSERT INTO phpbb_contact_config VALUES ('contact_auth_mod', '1');
INSERT INTO phpbb_contact_config VALUES ('contact_auth_admin', '1');
INSERT INTO phpbb_contact_config VALUES ('contact_captcha', '1');
INSERT INTO phpbb_contact_config VALUES ('contact_captcha_type', '0');
INSERT INTO phpbb_contact_config VALUES ('contact_delete', '1');
INSERT INTO phpbb_contact_config VALUES ('contact_storage', '1');
INSERT INTO phpbb_contact_config VALUES ('contact_thankyou', '1');

# -- Table structure for table 'phpbb_contact_emails'

CREATE TABLE phpbb_contact_emails (
  email varchar(50) NOT NULL default '',
  sent int(1) NOT NULL default '0',
  lasttime int(11) NOT NULL default '0',
  PRIMARY KEY (email)
);

CREATE TABLE phpbb_contact_msgs (
  msg_id int(3) UNSIGNED NOT NULL auto_increment,
  sendtime int(11) NOT NULL default '0',
  username varchar(25) NOT NULL default '',
  realname varchar(30) NOT NULL default '',
  email varchar(50) NOT NULL default '',
  ip char(8) NOT NULL default '',
  message text NOT NULL,
  upfile varchar(255) NOT NULL default '',
  PRIMARY KEY (msg_id)
);
# -- Bot Indexing Mod

CREATE TABLE phpbb_bots (
  bot_id tinyint(3) unsigned NOT NULL auto_increment,
  bot_name varchar(255) DEFAULT '' NOT NULL,
  bot_agent text  DEFAULT '' NOT NULL,
  last_visit varchar(255) DEFAULT '' NOT NULL,
  bot_visits varchar(255) DEFAULT '0' NOT NULL,
  bot_pages varchar(255) DEFAULT '0' NOT NULL,
  pending_agent text DEFAULT '' NOT NULL,
  pending_ip text DEFAULT '' NOT NULL,
  bot_ip text DEFAULT '' NOT NULL,
  bot_style varchar(255) DEFAULT '1' NOT NULL,
  PRIMARY KEY  (bot_id)
);

ALTER TABLE phpbb_users ADD user_browser VARCHAR(100) DEFAULT '' NOT NULL;
ALTER TABLE phpbb_users ADD user_unread_topics TEXT;
ALTER TABLE phpbb_forums ADD forum_parent INT NOT NULL DEFAULT '0';
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_subforums', '0' );
ALTER TABLE phpbb_forums ADD forum_icon VARCHAR(255) DEFAULT NULL;
INSERT INTO phpbb_config (config_name, config_value) VALUES ('annonce_globale_index', '1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('simple_split_topic_type', '1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('users_qp_settings', '1-0-1-1-1-1');
CREATE TABLE phpbb_rcs (
CREATE TABLE phpbb_bbc_box (

CREATE TABLE phpbb_attachments_config (
CREATE TABLE phpbb_forbidden_extensions (
CREATE TABLE phpbb_extension_groups (
CREATE TABLE phpbb_extensions (
CREATE TABLE phpbb_quota_limits (
INSERT INTO phpbb_config VALUES ('board_disable_msg', 'En pleine MAJ');
INSERT INTO phpbb_bbc_box (bbc_name, bbc_value, bbc_auth, bbc_before, bbc_after, bbc_helpline, bbc_img, bbc_divider) VALUES ('hide', '1', '0', 'hide', 'hide', 'hide', 'hide', '0');
ALTER TABLE phpbb_users ADD user_birthday varchar(10) DEFAULT '' NOT NULL;
INSERT INTO phpbb_config  (config_name, config_value) 
ALTER TABLE phpbb_user_group ADD group_moderator TINYINT(1) NOT NULL;
ALTER TABLE phpbb_forums ADD forum_as_category MEDIUMINT(8) DEFAULT '0' NOT NULL;
ALTER TABLE phpbb_users ADD user_lastlogin INT(11) DEFAULT 0 NOT NULL;
INSERT INTO phpbb_config (config_name, config_value) VALUES ('registration_notify', '1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('images_max_size', '400');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('sub_title_length', '100');
ALTER TABLE phpbb_themes ADD rcs_botcolor varchar(6) DEFAULT '' NOT NULL;
ALTER TABLE phpbb_users ADD COLUMN user_acp_password VARCHAR(32) NOT NULL DEFAULT '' AFTER user_password;

# -- Seach Data
# -- add to ConviMod V1.4.8

CREATE TABLE `phpbb_search_phrases` (
  `search_id` mediumint(6) NOT NULL auto_increment,
  `search_user_id` smallint(4) NOT NULL default '0',
  `search_user_ip` varchar(8) NOT NULL default '0',
  `search_time` int(11) NOT NULL default '0',
  `search_phrase` varchar(255) NOT NULL default '',
  `search_author` varchar(25) NOT NULL default '',
  `search_referer` varchar(255) NOT NULL default '',
  `search_failed` tinyint(1) NOT NULL default '0',
  `search_terms` tinyint(1) NOT NULL default '0',
  `search_fields` tinyint(1) NOT NULL default '0',
  `search_return_chars` smallint(4) NOT NULL default '0',
  `search_cat` smallint(3) NOT NULL default '0',
  `search_forum` smallint(3) NOT NULL default '0',
  `search_sort_by` tinyint(1) NOT NULL default '0',
  `search_sort_dir` varchar(4) NOT NULL default '',
  PRIMARY KEY  (`search_id`)
);

ALTER TABLE phpbb_users ADD user_zodiac TINYINT(2) NOT NULL DEFAULT 0;

# -- QTE
# -- Table structure for table 'phpbb_attributes'
# -- add to ConviMod V1.4.8
# -- update in ConviMod V1.5.4

CREATE TABLE phpbb_attributes (
  `attribute_id` INT(11) NOT NULL auto_increment,
  `attribute_type` SMALLINT(1) NOT NULL DEFAULT '0',
  `attribute` VARCHAR(255) NOT NULL DEFAULT '',
  `attribute_image` VARCHAR(255) NOT NULL DEFAULT '',
  `attribute_color` VARCHAR(6) NOT NULL DEFAULT '',
  `attribute_date_format` VARCHAR(25) DEFAULT NULL,
  `attribute_position` TINYINT(1) NOT NULL DEFAULT '0',
  `attribute_administrator` TINYINT(1) DEFAULT '0',
  `attribute_moderator` TINYINT(1) DEFAULT '0',
  `attribute_author` TINYINT(1) DEFAULT '0',
  `attribute_order` INT(11) DEFAULT '0' NOT NULL,
  PRIMARY KEY (`attribute_id`)
);

INSERT INTO phpbb_config (config_name, config_value) VALUES ('qte_version', '1.6.2b');
ALTER TABLE phpbb_topics ADD topic_attribute VARCHAR(25);

INSERT INTO phpbb_config (config_name, config_value) VALUES ('convimod_version', '1.5.4');

# -- Forumtitle as weblink
# -- add to ConviMod V1.4.8
# -- update in ConviMod V1.5.4

ALTER TABLE phpbb_forums
	ADD title_is_link TINYINT(1) DEFAULT 0 NOT NULL,
	ADD weblink VARCHAR(200) NOT NULL,
	ADD forum_link_icon VARCHAR(200) NOT NULL,
	ADD forum_link_count MEDIUMINT(8) UNSIGNED NOT NULL,
	ADD forum_link_target TINYINT(1) DEFAULT 0 NOT NULL;

# -- Clone Post
# -- add to ConviMod V1.4.8
ALTER TABLE phpbb_forums ADD auth_cloneposts TINYINT(1) DEFAULT '0' NOT NULL;
ALTER TABLE phpbb_auth_access ADD auth_cloneposts TINYINT(1) DEFAULT '0' NOT NULL;

UPDATE phpbb_forums SET auth_cloneposts = auth_pollcreate;
UPDATE phpbb_auth_access SET auth_cloneposts = auth_pollcreate;

# -- Reorder ACP Categories
# -- add to ConviMod V1.4.8
CREATE TABLE `phpbb_admin_categories` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`cat_identifier` VARCHAR(255) NOT NULL,
	`cat_order` INT(11) NOT NULL DEFAULT '0',
	`cat_display` VARCHAR(255) DEFAULT NULL,
	PRIMARY KEY  (`id`)
);

# -- Adjustable board width
# -- add to ConviMod V1.4.8
INSERT INTO phpbb_config (config_name,config_value) VALUES ('forum_width','100%');

# -- Show All Edits
# -- add to ConviMod V1.4.8
ALTER TABLE phpbb_posts ADD post_edit_user_id mediumint(8) DEFAULT 0 NOT NULL;

# -- Rss Mod
# -- add to ConviMod V1.4.8
INSERT INTO phpbb_config (config_name, config_value) VALUES ('rss_image', '');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_rss_topics', '15');

# -- Tracks PMs
# -- Add to ConviMod V1.5.0
ALTER TABLE `phpbb_privmsgs` ADD `privmsgs_track_id` mediumint(8) UNSIGNED DEFAULT '0' NOT NULL;
UPDATE `phpbb_privmsgs` SET `privmsgs_track_id` = `privmsgs_id`;

# -- Approve Board Rules
# -- add to ConviMod V1.5.2
INSERT INTO phpbb_config (config_name, config_value) VALUES ('br_required', '0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('br_topic_id', '0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('forum_id_no_rules', '0');
ALTER TABLE phpbb_users ADD user_rules TINYINT(1) DEFAULT '0';

UPDATE phpbb_users SET user_style=1;
UPDATE phpbb_config SET config_value = '1' WHERE config_name = 'default_style' LIMIT 1 ;
TRUNCATE `phpbb_themes`;
INSERT INTO phpbb_themes (themes_id, template_name, style_name, head_stylesheet, body_background, body_bgcolor, body_text, body_link, body_vlink, body_alink, body_hlink, tr_color1, tr_color2, tr_color3, tr_class1, tr_class2, tr_class3, th_color1, th_color2, th_color3, th_class1, th_class2, th_class3, td_color1, td_color2, td_color3, td_class1, td_class2, td_class3, fontface1, fontface2, fontface3, fontsize1, fontsize2, fontsize3, fontcolor1, fontcolor2, fontcolor3, span_class1, span_class2, span_class3) VALUES (1, 'creamywhite', 'creamywhite', 'creamywhite.css', '', 'EBEBEB', '000000', '006699', '5493B4', '', '7A9EC5', 'EFEFEF', 'DEE3E7', 'D1D7DC', '', '', '', '98AAB1', '006699', 'FFFFFF', 'cellpic1.gif', 'cellpic3.gif', 'cellpic2.jpg', 'FAFAFA', 'FFFFFF', '', 'row1', 'row2', '', 'Verdana, Arial, Helvetica, sans-serif', 'Trebuchet MS', 'Courier, \'Courier New\', sans-serif', 10, 11, 12, '444444', '006600', 'FFA34F', '', '', '');