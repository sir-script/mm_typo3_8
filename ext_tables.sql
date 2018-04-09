

#
# Table structure for table 'tx_mmrelations_domain_model_season'
#
CREATE TABLE tx_mmrelations_domain_model_season (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '1' NOT NULL,
	
	name varchar(255) DEFAULT '' NOT NULL,
    pricetables int(11) NOT NULL default '0',
    
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,


	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_mmrelations_domain_model_pricetable'
#
CREATE TABLE tx_mmrelations_domain_model_pricetable (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '1' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	seasons int(11) unsigned DEFAULT '0' NOT NULL,
	
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY language (l10n_parent,sys_language_uid)

);

#
# Table structure for table 'tx_mmrelations_pricetable_season_mm'
#
CREATE TABLE tx_mmrelations_pricetable_season_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	tablenames varchar(30) DEFAULT '' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);



