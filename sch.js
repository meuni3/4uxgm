function searchTable() {
  // قم بالحصول على القيمة المدخلة في مربع البحث
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // اخفاء الصفوف التي لا تتوافق مع قيمة البحث
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4]; // ابحث في العمود الأول فقط (يمكنك تغييره إذا احتجت)
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
