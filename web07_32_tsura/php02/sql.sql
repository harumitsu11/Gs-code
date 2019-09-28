INSERT INTO gs_an_table(name,email,naiyou,indate)VALUES('山崎','test1@jp','ないよ',sysdate())
INSERT INTO gs_an_table(name,email,naiyou,indate)VALUES('鈴木','test2@jp','ないよ',sysdate())
INSERT INTO gs_an_table(name,email,naiyou,indate)VALUES('田中','test10@jp','ないよ',sysdate())
INSERT INTO gs_an_table(name,email,naiyou,indate)VALUES('杉山','test20@jp','ないよ',sysdate())
INSERT INTO gs_an_table(name,email,naiyou,indate)VALUES('児玉','test30@jp','ないよ',sysdate())

SELECT * FROM gs_an_table
SELECT name,indate,email FROM gs_an_table
SELECT * FROM gs_an_table WHERE id=1 OR id=2
SELECT * FROM gs_an_table WHERE email LIKE '%TEST1%'
SELECT * FROM gs_an_table ORDER BY id DESC
SELECT * FROM gs_an_table ORDER BY id DESC LIMIT 3

INSERT INTO gs_an_table(name,email,naiyou,indate)VALUES(:name,:email,:naiyou,sysdate())
