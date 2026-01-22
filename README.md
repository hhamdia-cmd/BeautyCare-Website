BeautyCare Website
Docker containerization موقع ويب تجاري تفاعلي للعناية بالبشرة مع
   # المميزات
   
   - ثلاث صفحات رئيسية (الرئيسية، التسجيل،                                                                                                                                                                                       -تصميم متجاوب باللغة العربية مع دعم RTL    
                                                                                                                                                                                       javaScript  نموذج تواصل مع تحقق- 
   - معالج php لعرض تأكيد الرسائل  
   - صور عالية الجودة
   - فيديو تعليمي مدمج


#  التقنيات المستخدمة  
 .Frontend: HTML5, CSS3, JavaScript (ES6)
 .Backend: PHP 8.2 (لصفحة التأكيد)
 .Web Server: Apache HTTP Server
 .Containerization: Docker
 .Version Control: Git & GitHub      

 How to build and run using Docker   
 1) التأكد من وجود دوكر على جهازك عن طريق                                 
    [ docker --version]     
 2) dockerبناء صورة
   [ docker build -t beautycare-website .]
 3) Run the container [ docker run -d -p 8080:80 --name beautycare-app beautycare-website ]
 4) التحقق من التشغيل
       # رؤية الحاويات النشطة#
          [ docker ps ]
       # رؤية السجلات(logs) #
         [ docker logs beautycare-app ] 

 5) فتح الموقع في المتصفح    
        [ http://localhost:8080/index.html ]           

 How to stop the container and clean up
  .docker stop beautycare-app
  .docker rm beautycar-app

 Configuration notes:
  . Ports: (Container)المنفذ 80 : داخل الحاوية
  (Host)المنفذ8080 :على المضيف ( 8080:80): التعيين

How to test it:           
 -: افتح المتصفح واذهب إلى 
 1- [ http://localhost:8080/index.html ] :الصفحة الرئيسية 
     ## خطوات اختبار الصفحة الرئيسية ##
         ✓ يتم تحميل الصفحة
         ✓ الشعار يظهر
         ✓ القائمة العلوية تعمل
         ✓ الأزرار تستجيب
         ✓ عشر صور للنتجات تظهر 

2- [ http://localhost:8080/signup.html ] : صفحة التسجيل
    ## خطوات اختبار صفحة التسجيل ##
       -اذهب إلى صفحة التسجيل
       -حاول التسجيل بدون بيانات → يجب أن تظهر رسالة خطأ
       -أدخل بيانات صحيحة → يجب أن تعمل
       -اختبر عدم تطابق كلمات المرور → يجب أن تظهر رسالة خطأ

3- [ http://localhost:8080/contact.html ] : صفحة التوصيل
     ## خطوات اختبار صفحة التسجيل ##
        - اترك الحقول المطلوبة فارغة → يجب أن تظهر رسالة تحذير 
        - أدخل بريد إلكتروني غير صحيح → يجب أن تظهر رسالة خطأ
       - أرسل النموذج ببيانات صحيحة → يجب أن تنتقل إلى صفحة التأكيد



  Attribution:-
       (مشروع أصلي)انا من قمت بعمل هذا المشروع 


 Production Deployment
   The project is deployed using Docker on Render (VPS Cloud Platform). 
   Production URL: https://beautycare-website.onrender.com
                                                                                                                                                                                   


                                                                                                                                                                         
                                                                                                                                               
                                                                                                                                        
                                                                                                                                                  
                                                                                                                                                                          
                                                                                                                                                        
                                                                                                                                                      
                                                                                                                                                      
                                                                                                                                                       

                                                                                                                                                                           
                                                                                                                                                                             
                                                                                                                                                                            
                                                                                                                                                                         
                                                                                                                                                                      
                                                                                                                                                                               

                                                                                                                                                                                                 
  




