<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأكيد استلام الرسالة - موقع العناية بالبشرة</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .confirmation-box {
            background-color: #fff0f5;
            border: 2px solid #b2004c;
            border-radius: 15px;
            padding: 25px;
            margin: 30px auto;
            max-width: 600px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .confirmation-header {
            color: #b2004c;
            text-align: center;
            margin-bottom: 20px;
        }
        .message-details {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            margin: 15px 0;
        }
        .btn-home {
            display: inline-block;
            background-color: #b2004c;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 25px;
            margin: 10px 5px;
            transition: background-color 0.3s;
        }
        .btn-home:hover {
            background-color: #d72638;
        }
        .success-icon {
            font-size: 48px;
            color: #4CAF50;
            text-align: center;
            margin: 15px 0;
        }
    </style>
</head>
<body>

    <!-- نفس الهيدر المستخدم في جميع الصفحات -->
    <header>
        <img src="logo.png" alt="شعار الموقع" width="250"><br>
        <h1>موقع العناية بالبشرة</h1>
        <nav>
            <ul>
                <li><a href="homepage.html">الرئيسية</a></li>
                <li><a href="signup.html">إنشاء حساب</a></li>
                <li><a href="contact.html">تواصل معنا</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="confirmation-box">
            <?php
            // بداية معالجة PHP
            error_reporting(0); // إخفاء الأخطاء للعرض النظيف
            
            // التحقق من وجود بيانات
            $hasData = false;
            $name = $email = $subject = $message = '';
            
            if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET)) {
                $hasData = true;
                $name = htmlspecialchars($_GET['name'] ?? '');
                $email = htmlspecialchars($_GET['email'] ?? '');
                $subject = htmlspecialchars($_GET['subject'] ?? '');
                $message = htmlspecialchars($_GET['message'] ?? '');
            }
            elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
                $hasData = true;
                $name = htmlspecialchars($_POST['name'] ?? '');
                $email = htmlspecialchars($_POST['email'] ?? '');
                $subject = htmlspecialchars($_POST['subject'] ?? '');
                $message = htmlspecialchars($_POST['message'] ?? '');
            }
            
            if ($hasData):
                // التحقق من البيانات المطلوبة
                if (empty($name) || empty($email) || empty($message)) {
                    echo '<div class="success-icon">⚠️</div>';
                    echo '<h2 class="confirmation-header">بيانات ناقصة</h2>';
                    echo '<p>يرجى تعبئة جميع الحقول المطلوبة (*).</p>';
                } else {
                    // عرض رسالة النجاح
                    echo '<div class="success-icon">✅</div>';
                    echo '<h2 class="confirmation-header">تم استلام رسالتك بنجاح!</h2>';
                    echo '<p>شكراً لك <strong>' . $name . '</strong> على تواصلك معنا.</p>';
                    echo '<p>سنقوم بالرد على استفسارك في أقرب وقت ممكن.</p>';
                    
                    // عرض تفاصيل الرسالة
                    echo '<div class="message-details">';
                    echo '<h3>تفاصيل الرسالة:</h3>';
                    echo '<p><strong> البريد الإلكتروني:</strong> ' . $email . '</p>';
                    if (!empty($subject)) {
                        echo '<p><strong> الموضوع:</strong> ' . $subject . '</p>';
                    }
                    echo '<p><strong> نص الرسالة:</strong><br>' . nl2br($message) . '</p>';
                    
                    // معلومات إضافية
                    echo '<hr style="margin: 15px 0;">';
                    echo '<p><strong> تاريخ الإرسال:</strong> ' . date('Y/m/d') . '</p>';
                    echo '<p><strong> وقت الإرسال:</strong> ' . date('H:i') . '</p>';
                    echo '<p><strong> رقم المرجع:</strong> SC-' . rand(1000, 9999) . '</p>';
                    echo '</div>';
                    
                    echo '<p style="text-align: center; margin-top: 20px;">';
                    echo 'تم إرسال نسخة إلى بريدك: <strong>' . $email . '</strong>';
                    echo '</p>';
                }
            else:
                // إذا فتح الصفحة مباشرة بدون بيانات
                echo '<div class="success-icon"></div>';
                echo '<h2 class="confirmation-header">صفحة تأكيد الرسائل</h2>';
                echo '<p>هذه الصفحة تعرض تأكيد استلام الرسائل المرسلة عبر نموذج التواصل.</p>';
                echo '<p>لإرسال رسالة جديدة، يرجى استخدام <a href="contact.html">نموذج التواصل</a>.</p>';
            endif;
            ?>
            
            <div style="text-align: center; margin-top: 25px;">
                <a href="homepage.html" class="btn-home"> العودة للصفحة الرئيسية</a>
                <a href="contact.html" class="btn-home"> إرسال رسالة جديدة</a>
            </div>
        </div>
    </main>

    <!-- نفس الفوتر المستخدم في جميع الصفحات -->
    <footer>
        <h3>تواصل معنا</h3>
        <p>العنوان: شارع الرمال، غزة، فلسطين</p>
        <p>رقم الهاتف: +972 0592431987</p>
        <p>البريد الإلكتروني: haneen@gmail.com</p>
        
        <h4>تابعونا على مواقع التواصل</h4>
        <ul>
            <li><a href="https://www.facebook.com" target="_blank">فيسبوك</a></li>
            <li><a href="https://www.instagram.com" target="_blank">إنستغرام</a></li>
        </ul>
        
        <p>&copy; 2025 Skin Care. جميع الحقوق محفوظة.</p>
        <p><a href="#">سياسة الخصوصية</a></p>
    </footer>

</body>
</html>