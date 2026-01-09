//  1. رسالة ترحيب في الصفحة الرئيسية
if (window.location.pathname.includes("homepage.html")) {
   window.onload = function() {
   alert("مرحباً بك في موقع العناية بالبشرة!");
 };
}
//  2. تعريف متغيرات بأنواع مختلفة
let userName = "Haneen";
let userAge = 21;
let isMember = true;

console.log("اسم المستخدم:", userName);
console.log("العمر:", userAge);
console.log("عضو:", isMember);

// 3. مصفوفة + loop
let products = ["ماسك","غسول", "كريم", "سيروم", "واقي شمس"];
for (let i = 0; i < products.length; i++) {
 console.log("منتج:", products[i]);
}

//  4. العمليات الحسابية وعرضها داخل الصفحة الرئيسية
let a = 50, b = 20;
let resultHTML = `
 <h3>نتائج العمليات الحسابية:</h3>ّ 
 <p>جمع: ${a + b}</p>
 <p>طرح: ${a - b}</p> 
 <p>ضرب: ${a * b}</p>
 <p>قسمة: ${a / b}</p>
  `;
if (document.getElementById("mathResults")) {
 document.getElementById("mathResults").innerHTML = resultHTML;
}

//  5. تحقق من العمر في signup.html
if (window.location.pathname.includes("signup.html")) {
 let age = prompt("من فضلك أدخل عمرك:");
 if (age >= 18) {
  alert("أنت مؤهل للتسجيل.");
 } else {
 alert("يجب أن يكون عمرك 18 عامًا على الأقل للتسجيل.");
 }
}

//  6. طباعة الأرقام من 1 إلى 10 في Console
for (let i = 1; i <= 10; i++) {
 console.log(i);
}

//  7. زر تغيير الخلفية
function changeBackground() {
 document.body.style.backgroundColor = "#b2004c";
}

//  8. تحقق من البريد الإلكتروني
function validateForm() {
 let emailField = document.forms[0]["email"];
 let password = document.forms[0]["password"].value;
 let confirmPassword = document.forms[0]["confirm_password"].value;

if (!emailField || emailField.value.trim() === "") {
 alert("يرجى إدخال البريد الإلكتروني");
    return false;
 }
 if (password !== confirmPassword) {
 alert("كلمة المرور وتأكيد كلمة المرور غير متطابقين");
    return false;
 }

 return true;
}

