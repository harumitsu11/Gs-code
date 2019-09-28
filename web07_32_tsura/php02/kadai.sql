INSERT INTO gs_bm_table(title,author,URL,feedback,indate)VALUES('老人と海','Earnest Hemmingway','hemmingway.com','傑作',sysdate())
INSERT INTO gs_bm_table(title,author,URL,feedback,indate)VALUES('1Q84','村上春樹','haruki.com','秀作',sysdate())
INSERT INTO gs_bm_table(title,author,URL,feedback,indate)VALUES('岳物語','椎名誠','seana.com','力作',sysdate())
INSERT INTO gs_bm_table(title,author,URL,feedback,indate)VALUES('金閣寺','三島由紀夫','mishima.com','逸作',sysdate())
INSERT INTO gs_bm_table(title,author,URL,feedback,indate)VALUES('百年の孤独','Garcia Marques','garciamar.com','名作',sysdate())

SELECT URL,indate FROM gs_bm_table
SELECT * FROM gs_bm_table WHERE id>=3


INSERT INTO gs_bm_table(title,author,URL,feedback,indate)VALUES(:title,:author,:URL,:feedback,sysdate())