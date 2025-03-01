<?php
// الاتصال بقاعدة البيانات
$conn = mysqli_connect("localhost", "root", "", "database_name");

// التحقق من الاتصال
if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}

// تنفيذ الاستعلام
$query = "SELECT * FROM table_name WHERE column = 'value'";
$result = mysqli_query($conn, $query);

// التحقق من نجاح الاستعلام
if (!$result) {
    die("خطأ في الاستعلام: " . mysqli_error($conn));
}

// التأكد من أن النتيجة صالحة قبل استخدامها
if (mysqli_num_rows($result) > 0) {
    echo "تم العثور على بيانات.";
} else {
    echo "لم يتم العثور على بيانات.";
}

?>