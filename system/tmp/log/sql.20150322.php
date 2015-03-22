<?php die();?> 
20150322 14:05:53: /juzishu/upgrade.php?m=upgrade&f=processSQL
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides'
  UPDATE eps_config SET  `value`  = '{\"title\":\"\\u5fc3\\u8336\\u793c\\u54c1\\u4e4b\\u5668\\u7269\",\"titleColor\":\"#FFF\",\"mainLink\":\"http:\\/\\/www.juzishu.org\\/index.php?m=page&amp;f=view&amp;articleID=48\",\"backgroundType\":\"image\",\"backgroundColor\":\"#114DAD\",\"height\":\"\",\"label\":[\"\"],\"buttonClass\":[\"primary\"],\"buttonUrl\":[\"\"],\"summary\":\"\",\"id\":\"736\",\"image\":\"\\/data\\/upload\\/201501\\/f_6d73da1d314b099590d79230521401db.jpg\",\"uid\":\"54cc707fb7d65\",\"target\":\"_self\",\"buttonTarget\":[\"_self\"]}' WHERE `key`  = '234'
  UPDATE eps_config SET  `value`  = '{\"title\":\"\\u4f20\\u7edf\\u6587\\u5316\\u7684\\u89c9\\u9192\",\"titleColor\":\"#FFF\",\"mainLink\":\"http:\\/\\/www.juzishu.org\\/index.php?m=product&amp;f=view&amp;id=25\",\"backgroundType\":\"image\",\"backgroundColor\":\"#114DAD\",\"height\":\"\",\"label\":[\"\"],\"buttonClass\":[\"primary\"],\"buttonUrl\":[\"\"],\"summary\":\"\",\"uid\":\"548f06d322a35\",\"image\":\"\\/data\\/upload\\/201412\\/f_f7a084d89151d669238dc5df47a7beb4.jpg\",\"target\":\"_self\",\"buttonTarget\":[\"_self\"]}' WHERE `key`  = '235'
  UPDATE eps_config SET  `value`  = '{\"title\":\"\\u6e05\\u6668\\u8428\\u8fbe\\u7eb3\",\"titleColor\":\"#FFF\",\"mainLink\":\"http:\\/\\/www.juzishu.org\\/index.php?m=product&amp;f=view&amp;id=14\",\"backgroundType\":\"image\",\"backgroundColor\":\"#114DAD\",\"height\":\"\",\"label\":[\"\"],\"buttonClass\":[\"primary\"],\"buttonUrl\":[\"\"],\"summary\":\"\",\"id\":\"292\",\"image\":\"\\/data\\/upload\\/201409\\/f_9d9969b70ac85eb5a5c447331699cb92.jpg\",\"uid\":\"54cc718e6b1e1\",\"target\":\"_self\",\"buttonTarget\":[\"_self\"]}' WHERE `key`  = '236'
  UPDATE eps_config SET  `value`  = '{\"title\":\"\\u6768\\u6c0f\\u8001\\u67b6\\u592a\\u6781\",\"titleColor\":\"#FFF\",\"mainLink\":\"http:\\/\\/www.juzishu.org\\/index.php?m=page&amp;f=view&amp;articleID=54\",\"backgroundType\":\"image\",\"backgroundColor\":\"#114DAD\",\"height\":\"\",\"label\":[\"\\u6768\\u6c0f\\u592a\\u6781\\u8001\\u67b6\"],\"buttonClass\":[\"primary\"],\"buttonUrl\":[\"http:\\/\\/www.juzishu.org\\/admin.php?m=article&amp;f=edit&amp;articleID=54&amp;type=page\"],\"summary\":\"\",\"id\":\"796\",\"image\":\"\\/data\\/upload\\/201502\\/f_6f687a7815b2d7a1cfcfa6d366ac92d6.jpg\",\"uid\":\"54e2d8459b976\",\"target\":\"_self\",\"buttonTarget\":[\"_self\"]}' WHERE `key`  = '237'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'product',`key` = 'currency',`value` = '￥'
  INSERT INTO eps_block SET `type` = 'followUs',`title` = '关注我们',`content` = '',`template` = 'default'
  SELECT * FROM eps_block WHERE type  = 'contact'
  INSERT INTO eps_layout SET  `page`  = 'company_index', `region` = 'side', `blocks` = '[{\"id\":\"9\"},{\"id\":\"15\"}]', `template` = 'default'
  UPDATE eps_config SET  `key`  = 'icpSN' WHERE `key`  = 'icp' AND section  = 'site'
  UPDATE eps_config SET  `key`  = 'modules' WHERE `key`  = 'moduleEnabled' AND section  = 'site'
  SELECT max(id) as maxID FROM eps_block
  SELECT max(id) as maxID FROM eps_block
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'global',`key` = 'version',`value` = '4.1.beta'
  DELETE FROM eps_package WHERE type  = 'patch'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'global',`key` = 'ignoreUpgrade',`value` = '0'

20150322 14:05:56: /juzishu/index.php
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page IN ('all','index_index') AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE alias  = '0' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE alias  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '27' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('27') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '29' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('29') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '26' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('26') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '28' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('28') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '33' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('33') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '59' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '59'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','59','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade
  SELECT * FROM eps_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides'  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `key`
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc  LIMIT 0, 6 
  SELECT t2.id, t2.name, t2.alias, t1.id AS product FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'product' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND objectID IN ('29','28','27','26','25','23') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT * FROM eps_wx_public  WHERE  eps_wx_public.lang in('zh-cn', 'all')  ORDER BY addedDate

20150322 14:06:00: /juzishu/index.php?m=product&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page IN ('all','product_index') AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 

20150322 14:06:02: /juzishu/index.php?m=product&f=browse&categoryID=0&pageID=1
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page IN ('all','product_browse') AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE alias  = '0' AND type  = 'product' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY `order` desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY `order` desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS product FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'product' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND objectID IN ('29','28','27','26','25','23','21','18','17','14','13') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '0' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE alias  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '27' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('27') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '29' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('29') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '26' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('26') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '28' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('28') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '33' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('33') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '59' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '59'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','59','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade
  SELECT * FROM eps_wx_public  WHERE  eps_wx_public.lang in('zh-cn', 'all')  ORDER BY addedDate

20150322 14:06:07: /juzishu/index.php?m=page&f=view&pageID=27
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page IN ('all','page_view') AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE alias  = '27' AND type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('27') ORDER BY `primary`, editor desc
  UPDATE eps_article SET  views = views + 1  WHERE id  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE alias  = '0' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE alias  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '27' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('27') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '29' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('29') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '26' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('26') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '28' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('28') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '33' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('33') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '59' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '59'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','59','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade
  SELECT * FROM eps_wx_public  WHERE  eps_wx_public.lang in('zh-cn', 'all')  ORDER BY addedDate

20150322 14:06:12: /juzishu/index.php?m=article&f=browse&categoryID=59
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE alias  = '59' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '59'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','59','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '59' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '59'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','59','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',59,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-03-22 14:06:12' AND t1.status  = 'normal' AND t2.category IN ('59')  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-03-22 14:06:12' AND t1.status  = 'normal' AND t2.category IN ('59')  AND  t1.lang in('zh-cn', 'all')  gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-03-22 14:06:12' AND t1.status  = 'normal' AND t2.category IN ('59')  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('51','50','30','23') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('51','50','30','23') AND status  = '1'  AND  eps_message.lang in('zh-cn', 'all')  GROUP BY objectID
  SELECT * FROM eps_category WHERE alias  = '0' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE alias  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '27' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('27') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '29' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('29') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '26' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('26') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '28' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('28') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '33' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('33') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '59' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '59'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','59','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade
  SELECT * FROM eps_category WHERE parent  = '0' AND type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order`
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-03-22 14:06:12' AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-03-22 14:06:12' AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-03-22 14:06:12' AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc  LIMIT 0, 7 
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('51','50','47','45','44','43','41') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('51','50','47','45','44','43','41') AND status  = '1'  AND  eps_message.lang in('zh-cn', 'all')  GROUP BY objectID
  SELECT * FROM eps_wx_public  WHERE  eps_wx_public.lang in('zh-cn', 'all')  ORDER BY addedDate

20150322 14:07:37: /juzishu/
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page IN ('all','index_index') AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE alias  = '0' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE alias  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '27' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('27') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '29' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('29') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '26' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('26') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '28' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('28') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '33' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('33') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '59' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '59'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','59','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade
  SELECT * FROM eps_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides'  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `key`
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc  LIMIT 0, 6 
  SELECT t2.id, t2.name, t2.alias, t1.id AS product FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'product' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND objectID IN ('29','28','27','26','25','23') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT * FROM eps_wx_public  WHERE  eps_wx_public.lang in('zh-cn', 'all')  ORDER BY addedDate

20150322 14:07:47: /juzishu/admin.php
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:07:52: /juzishu/admin.php?m=ui&f=setlogo
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:07:55: /juzishu/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:07:57: /juzishu/admin.php?m=ui&f=setlogo
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:08:00: /juzishu/admin.php?m=ui&f=setbasestyle
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:08:02: /juzishu/admin.php?m=ui&f=settemplate
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:14:04: /juzishu/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:16:00: /juzishu/admin.php?m=block&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_block wHeRe template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc

20150322 14:16:03: /juzishu/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:16:17: /juzishu/admin.php?m=links&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:19:57: /juzishu/admin.php?m=ui&f=setlogo
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:21:27: /juzishu/admin.php?m=block&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_block wHeRe template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc

20150322 14:21:30: /juzishu/admin.php?m=block&f=create&template=default
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:21:33: /juzishu/admin.php?m=block&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_block wHeRe template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc

20150322 14:21:38: /juzishu/admin.php?m=block&f=edit&template=default&blockID=13&type=voice
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '13'  AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '13'  AND  eps_block.lang in('zh-cn', 'all') 

20150322 14:21:42: /juzishu/admin.php?m=block&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_block wHeRe template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc

20150322 14:24:02: /juzishu/admin.php?m=block&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_block wHeRe template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc

20150322 14:24:07: /juzishu/admin.php?m=voice&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'voices'  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `key`

20150322 14:30:08: /juzishu/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:31:18: /juzishu/
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page IN ('all','index_index') AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE alias  = '0' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE alias  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '27' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('27') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '29' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('29') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '26' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('26') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '28' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('28') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '33' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('33') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '59' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '59'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','59','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade
  SELECT * FROM eps_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides'  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `key`
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc  LIMIT 0, 6 
  SELECT t2.id, t2.name, t2.alias, t1.id AS product FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'product' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND objectID IN ('29','28','27','26','25','23') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT * FROM eps_wx_public  WHERE  eps_wx_public.lang in('zh-cn', 'all')  ORDER BY addedDate

20150322 14:32:13: /juzishu/admin.php?m=ui&f=setlogo
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:32:16: /juzishu/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:32:19: /juzishu/admin.php?m=ui&f=setlogo
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:32:22: /juzishu/admin.php?m=voice&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'voices'  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `key`

20150322 14:32:30: /juzishu/admin.php?m=ui&f=setlogo
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:32:35: /juzishu/admin.php?m=voice&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'voices'  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `key`

20150322 14:32:39: /juzishu/admin.php?m=ui&f=setlogo
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:32:42: /juzishu/admin.php?m=block&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_block wHeRe template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc

20150322 14:32:47: /juzishu/admin.php?m=block&f=edit&template=default&blockID=13&type=voice
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '13'  AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '13'  AND  eps_block.lang in('zh-cn', 'all') 

20150322 14:33:24: /juzishu/admin.php?m=block&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_block wHeRe template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc

20150322 14:33:27: /juzishu/admin.php?m=block&f=edit&template=default&blockID=15&type=followUs
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '15'  AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '15'  AND  eps_block.lang in('zh-cn', 'all') 

20150322 14:33:38: /juzishu/admin.php?m=block&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_block wHeRe template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc

20150322 14:33:41: /juzishu/admin.php?m=block&f=edit&template=default&blockID=1&type=latestArticle
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '1'  AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '1'  AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade desc, `order`

20150322 14:34:12: /juzishu/admin.php?m=block&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_block wHeRe template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc

20150322 14:34:17: /juzishu/admin.php?m=block&f=edit&template=default&blockID=13&type=voice
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '13'  AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '13'  AND  eps_block.lang in('zh-cn', 'all') 

20150322 14:34:37: /juzishu/admin.php?m=block&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_block wHeRe template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  
  SELECT * FROM eps_block WHERE template  = 'default'  AND  eps_block.lang in('zh-cn', 'all')  ORDER BY id desc

20150322 14:34:45: /juzishu/admin.php?m=block&f=pages
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:34:50: /juzishu/admin.php?m=block&f=setregion&page=index_index&region=middle&template=default
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'index_index' AND region  = 'middle' AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 

20150322 14:35:09: /juzishu/admin.php?m=block&f=setregion&page=index_index&region=middle&template=default
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT count(*) as count FROM eps_layout WHERE page  = 'index_index' AND region  = 'middle' AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  UPDATE eps_layout SET `page` = 'index_index',`region` = 'middle',`template` = 'default',`blocks` = '[{\"id\":\"13\",\"grid\":\"12\",\"titleless\":\"1\",\"borderless\":\"0\"},{\"id\":\"3\",\"grid\":\"12\",\"titleless\":\"0\",\"borderless\":\"0\"}]',`lang` = 'zh-cn' WHERE page  = 'index_index' AND region  = 'middle' AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 

20150322 14:35:11: /juzishu/admin.php?m=block&f=pages&templat=default
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:35:14: /juzishu/
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page IN ('all','index_index') AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE alias  = '0' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE alias  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '27' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('27') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '29' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('29') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '26' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('26') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '28' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('28') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '33' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('33') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '59' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '59'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','59','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade
  SELECT * FROM eps_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides'  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `key`
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc  LIMIT 0, 6 
  SELECT t2.id, t2.name, t2.alias, t1.id AS product FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'product' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND objectID IN ('29','28','27','26','25','23') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT * FROM eps_wx_public  WHERE  eps_wx_public.lang in('zh-cn', 'all')  ORDER BY addedDate

20150322 14:35:22: /juzishu/admin.php?m=block&f=setregion&page=index_index&region=middle&template=default
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'index_index' AND region  = 'middle' AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 

20150322 14:36:35: /juzishu/index.php?m=product&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page IN ('all','product_index') AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 

20150322 14:36:36: /juzishu/index.php?m=product&f=browse&categoryID=0&pageID=1
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page IN ('all','product_browse') AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE alias  = '0' AND type  = 'product' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY `order` desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY `order` desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS product FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'product' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND objectID IN ('29','28','27','26','25','23','21','18','17','14','13') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '0' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE alias  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '27' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('27') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '29' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('29') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '26' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('26') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '28' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('28') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '33' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('33') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '59' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '59'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','59','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade
  SELECT * FROM eps_wx_public  WHERE  eps_wx_public.lang in('zh-cn', 'all')  ORDER BY addedDate

20150322 14:37:03: /juzishu/
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page IN ('all','index_index') AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE alias  = '0' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE alias  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '27' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('27') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '29' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('29') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '26' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('26') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '28' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('28') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '33' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('33') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '59' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '59'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','59','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade
  SELECT * FROM eps_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides'  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `key`
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc  LIMIT 0, 6 
  SELECT t2.id, t2.name, t2.alias, t1.id AS product FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'product' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND objectID IN ('29','28','27','26','25','23') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT * FROM eps_wx_public  WHERE  eps_wx_public.lang in('zh-cn', 'all')  ORDER BY addedDate

20150322 14:41:13: /juzishu/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:47:13: /juzishu/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 

20150322 14:52:58: /juzishu/
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'forum' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, alias FROM eps_category WHERE type  = 'blog' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page IN ('all','index_index') AND template  = 'default' AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE alias  = '0' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '0'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE alias  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '27' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '27' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('27') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '29' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '29' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('29') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '26' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '26' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('26') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '28' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '28' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('28') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '33' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '33' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('33') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '59' AND type  = 'article' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE `id` = '59'  AND  eps_category.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_category WHERE id IN ('','59','')  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY grade
  SELECT * FROM eps_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'slides'  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `key`
  SELECT * FROM eps_config WHERE owner  = 'system' AND module  = 'common' AND section  = 'voices'  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `key`
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE 1 = 1  AND t1.status  = 'normal'  AND  t1.lang in('zh-cn', 'all')  GROUP BY t2.id ORDER BY addedDate desc  LIMIT 0, 6 
  SELECT t2.id, t2.name, t2.alias, t1.id AS product FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'product' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'product' AND objectID IN ('29','28','27','26','25','23') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT * FROM eps_wx_public  WHERE  eps_wx_public.lang in('zh-cn', 'all')  ORDER BY addedDate

