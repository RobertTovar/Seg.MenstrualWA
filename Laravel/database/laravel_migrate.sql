BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "migrations" (
	"id"	integer NOT NULL,
	"migration"	varchar NOT NULL,
	"batch"	integer NOT NULL,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "users" (
	"id"	integer NOT NULL,
	"name"	varchar NOT NULL,
	"email"	varchar NOT NULL,
	"survey_1"	tinyint(1) NOT NULL,
	"time_done_survey_1"	date,
	"survey_1_1"	tinyint(1) NOT NULL,
	"time_done_survey_1_1"	date,
	"survey_1_2"	tinyint(1) NOT NULL,
	"time_done_survey_1_2"	date,
	"survey_2"	tinyint(1) NOT NULL,
	"time_done_survey_2"	date,
	"survey_2_1"	tinyint(1) NOT NULL,
	"time_done_survey_2_1"	date,
	"survey_2_2"	tinyint(1) NOT NULL,
	"time_done_survey_2_2"	date,
	"survey_3"	tinyint(1) NOT NULL,
	"time_done_survey_3"	date,
	"survey_3_1"	tinyint(1) NOT NULL,
	"time_done_survey_3_1"	date,
	"survey_3_2"	tinyint(1) NOT NULL,
	"time_done_survey_3_2"	date,
	"email_verified_at"	datetime,
	"password"	varchar NOT NULL,
	"remember_token"	varchar,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "password_resets" (
	"email"	varchar NOT NULL,
	"token"	varchar NOT NULL,
	"created_at"	datetime
);
CREATE TABLE IF NOT EXISTS "failed_jobs" (
	"id"	integer NOT NULL,
	"uuid"	varchar NOT NULL,
	"connection"	text NOT NULL,
	"queue"	text NOT NULL,
	"payload"	text NOT NULL,
	"exception"	text NOT NULL,
	"failed_at"	datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY("id" AUTOINCREMENT)
);
CREATE TABLE IF NOT EXISTS "personal_access_tokens" (
	"id"	integer NOT NULL,
	"tokenable_type"	varchar NOT NULL,
	"tokenable_id"	integer NOT NULL,
	"name"	varchar NOT NULL,
	"token"	varchar NOT NULL,
	"abilities"	text,
	"last_used_at"	datetime,
	"created_at"	datetime,
	"updated_at"	datetime,
	PRIMARY KEY("id" AUTOINCREMENT)
);
INSERT INTO "migrations" VALUES (5,'2022_06_22_213738_user',2);
INSERT INTO "migrations" VALUES (6,'2022_06_22_214345_create_users_table',3);
INSERT INTO "migrations" VALUES (15,'2014_10_12_000000_create_users_table',4);
INSERT INTO "migrations" VALUES (16,'2014_10_12_100000_create_password_resets_table',4);
INSERT INTO "migrations" VALUES (17,'2019_08_19_000000_create_failed_jobs_table',4);
INSERT INTO "migrations" VALUES (18,'2019_12_14_000001_create_personal_access_tokens_table',4);
INSERT INTO "users" VALUES (4,'Roberto Tovar','robertotovar290501@gmail.com',1,'2022-06-26 04:07:43',0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,0,NULL,NULL,'$2y$10$ZGnXPzpSg1EEYBXngIfqS.XLbgSYVrIpJOP0NSIyibSg2ywx.PPWe',NULL,'2022-06-26 04:07:31','2022-06-26 04:07:43');
CREATE UNIQUE INDEX IF NOT EXISTS "users_email_unique" ON "users" (
	"email"
);
CREATE INDEX IF NOT EXISTS "password_resets_email_index" ON "password_resets" (
	"email"
);
CREATE UNIQUE INDEX IF NOT EXISTS "failed_jobs_uuid_unique" ON "failed_jobs" (
	"uuid"
);
CREATE INDEX IF NOT EXISTS "personal_access_tokens_tokenable_type_tokenable_id_index" ON "personal_access_tokens" (
	"tokenable_type",
	"tokenable_id"
);
CREATE UNIQUE INDEX IF NOT EXISTS "personal_access_tokens_token_unique" ON "personal_access_tokens" (
	"token"
);
COMMIT;
