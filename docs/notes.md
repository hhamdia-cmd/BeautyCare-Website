short technical note:
The biggest Docker problem you faced and how you solved it? من المشاكل التي واجهتها عند بناء الصورة عدم القدرة على التحميل بسرعة بسبب ضعف الانترنت وايضا عندما فتحت على موقع المشروع في البداية لم يكن يفتح وكان يعطيني خطأ فقمت بتغيير   اسم الصفحة الرئيسية من بعد ذلك فتحت الصفحة بدون اي مشاكل (index.html) الى (homepage.html)

The most important Git/GitHub lesson you learned in this assignment? 
  ."Commit Message"
    كيفية توثيق تطور الكود أهم من الكود نفسه 
  . توفر ساعة شرح وتقدم انطباع احترافي يدوم

Deployment Challenges
During the deployment of the Dockerized project on Render, the main challenge was understanding how the platform handles Docker-based applications compared to a traditional VPS. At first, it was unclear how ports are detected automatically by Render, which caused some confusion during the setup. Another challenge was following the build and deployment logs to ensure that the container was running correctly. By reviewing the logs and confirming that the service status was marked as “Live,” the deployment was successfully verified. Overall, these challenges were resolved by checking the platform documentation and validating the application through the deployed URL [ https://beautycare-website.onrender.com ].