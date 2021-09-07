#
# Table structure for table 'tx_kaemmereislider_domain_model_record'
#
CREATE TABLE tx_kaemmereislider_domain_model_record (
	tablabel varchar(255) DEFAULT '' NOT NULL,
	toptitle varchar(255) DEFAULT '' NOT NULL,
	topdescription text,
	topimage int(11) unsigned NOT NULL default '0',
	middletitle varchar(255) DEFAULT '' NOT NULL,
	middledescription text,
	middleimage text,
	lefttoplabel varchar(255) DEFAULT '' NOT NULL,
	lefttopimages int(11) unsigned NOT NULL default '0',
	leftbottomlabel varchar(255) DEFAULT '' NOT NULL,
	leftbottomimages int(11) unsigned NOT NULL default '0',
	bottomimage int(11) unsigned NOT NULL default '0',
	sorting int(10) unsigned DEFAULT '0' NOT NULL
);
