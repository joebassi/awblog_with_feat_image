# awblog_with_feat_image
AWBlog (Magento) with Featured Image

Just the base AWBlog with a featured image. If you add this to an existing AWBlog instance, you'll need to added "ALTER TABLE `aw_blog` ADD `featured_image` VARCHAR(255) NULL DEFAULT NULL AFTER `title`;" otherwise this will create the column for you.

No frontend files. This assumes you'll add your own or use AW Blog's frontend files and modify.
