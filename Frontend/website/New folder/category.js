
 function ajax() {
    var category = document.getElementById("category").value;
    $.ajax({
      url: "category.php",
      type: "POST",
      data: { category: category },
      success: function(data) {
          $('#item').html(data);
      },
  });
  }