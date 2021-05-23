drop table if exists 'account'
create table 'account'(
    'username' nvarchar(30) not null,
    'password' nvarchar(20) not null,

    primary key ('username')
) engine=InnoDB default charset=utf8

insert into account ('username', 'password') values ('hung', 'admin'), ('quan', 'user');
