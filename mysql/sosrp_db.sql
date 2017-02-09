/**
 * 用户表、主表
 * @type {[type]}
 */
create table sosrp_users(
	SRP_USER_ID int(11) not null primary key auto_increment,
	SRP_USER_FULLNAME varchar(32) not null comment '全称',
	SRP_USER_NAME varchar(32) not null comment '用户名',
	SRP_USER_PASS char(32) not null comment '密码',
	SRP_USER_HASH_ID char(32) not null comment '用户hash id'
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='用户表';

/**
 * 用户表、扩展表、信息
 * @type {[type]}
 */
create table sosrp_user_info(
	SRP_USER_HASH_ID char(32) not null primary key,
	SRP_USER_STATUS tinyint(1) not null comment '用户状态',
	SRP_USER_EMAIL text not null comment '邮箱地址',
	SRP_USER_CREATETIME datetime not null comment '创建时间',
	SRP_USER_LASTLOGIN datetime not null comment '最后登录时间',
	SRP_USER_PURVIEW tinyint(1) not null comment '权限级别（超级管理员、内部用户[研发、运维]、高管、安全人员）'
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='用户表(信息表)';

/**
 * 任务表、主表
 * @type {[type]}
 */
create table sosrp_scan_task(
	SRP_SCAN_ID int(11) not null primary key auto_increment,
	SRP_SCAN_NAME varchar(32) not null comment '扫描名称',
	SRP_SCAN_TYPE tinyint(1) not null comment '扫描类型',
	SRP_SCAN_CREATETIME datetime not null comment '开始时间',
	SRP_SCAN_FINISHTIME datetime not null comment '结束时间',
	SRP_SCAN_HASH_ID char(32) not null comment '任务的hash id'
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='任务表';

/**
 * 任务表（信息表）
 */
create table sosrp_scan_info(
	SRP_SCAN_HASH_ID char(32) not null primary key comment '任务的hash id',
	SRP_SCAN_USERAGENT text not null comment '用的useragent',
	SRP_SCAN_COOKIES text not null comment 'cookies',
	SRP_SCAN_TARGET text not null comment '扫描目标'
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='任务表(信息表)';

/**
 * 任务表（信息表）
 */
create table sosrp_scan_conf(
	SRP_SCAN_HASH_ID char(32) not null primary key comment '任务的hash id',
	SRP_SCAN_PROCESS int(3) not null comment '任务进度',
	SRP_SCAN_COUNT text not null comment '扫描请求次数统计'
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='任务表(信息表)';