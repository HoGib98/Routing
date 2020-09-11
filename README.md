# Routing

#clone theme:
https://github.com/HoGib98/muty.git

#clone module:
https://github.com/HoGib98/Routing.git

#insert into my sql :
INSERT INTO `cms_block` (`block_id`, `title`, `identifier`, `content`, `creation_time`, `update_time`, `is_active`) VALUES
(200, 'Main-Banner-Img', 'main-banner-img', '<p><img src=\"{{media url=\"hero-4-02.png\"}}\" alt=\"\"></p>', '2020-09-07 23:22:24', '2020-09-07 23:52:33', 1),
(201, 'Banner-Main-Icon', 'banner-main-icon', '<p><img src=\"{{media url=&quot;wysiwyg/MacDermidConnect_logo_FINAL_Color_-_500.png&quot;}}\" alt=\"\" width=\"120\" height=\"120\"></p>', '2020-09-07 23:53:54', '2020-09-10 02:38:05', 1),
(202, 'Banner-Main-Title', 'banner-main-title', '<h1>Welcome to<br>MacDermid Connect</h1>', '2020-09-07 23:55:05', '2020-09-07 23:55:05', 1),
(203, 'Banner-Main-Content', 'banner-main-content', '<p class=\"block-content\" data-content-type=\"heading\" data-appearance=\"default\" data-element=\"main\">Please select a store before you begin</p>', '2020-09-07 23:57:21', '2020-09-07 23:57:21', 1),
(204, 'Banner-Main-Eu-Uk', 'banner-main-eu-uk', '<h2 data-content-type=\"heading\" data-appearance=\"default\" data-element=\"main\">EUROPE</h2>\r\n<div><a href=\"us\"><img src=\"{{media url=&quot;wysiwyg/image_1.png&quot;}}\" alt=\"\" /></a><a href=\"uk\"><img src=\"{{media url=&quot;wysiwyg/image_3.png&quot;}}\" alt=\"\" /></a></div>', '2020-09-08 00:01:27', '2020-09-10 02:36:32', 1),
(205, 'Banner-Main-Us', 'banner-main-us', '<h2 data-content-type=\"heading\" data-appearance=\"default\" data-element=\"main\">UNITED STATES</h2>\r\n<p><a href=\"eu\"><img src=\"{{media url=\"wysiwyg/image_2.png\"}}\" alt=\"\"></a></p>', '2020-09-08 00:05:59', '2020-09-10 02:33:52', 1);
