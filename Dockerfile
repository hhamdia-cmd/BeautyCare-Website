# استخدام خادم ويب مع PHP لدعم contact.php
FROM php:8.2-apache
# تعيين مجلد العمل
WORKDIR /var/www/html
# نسخ ملفات المشروع
COPY src/ .
# تغيير صلاحيات الملفات
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html
# فتح المنفذ 80
EXPOSE 80
# تشغيل Apache في الواجهة الأمامية
CMD ["apache2-foreground"]