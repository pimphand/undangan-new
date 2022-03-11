$(document).ready(function() {
  var $appAdminWrap = $(".app-admin-wrap");
  var $html = $("html");
  var $customizer = $(".customizer");
  var $sidebarColor = $(".sidebar-colors a.color");

  // Change Direction RTL/LTR
  $("#rtl-checkbox").change(function() {
    if (this.checked) {
      $html.attr("dir", "rtl");
    } else {
      $html.attr("dir", "ltr");
    }
  });

  let $themeLink = $("#gull-theme");
  initTheme("gull-theme");

  function initTheme(storageKey) {
    if (!localStorage) {
      return;
    }
    let fileUrl = localStorage.getItem(storageKey);
    if (fileUrl) {
      $themeLink.attr("href", fileUrl);
    }
  }

  $(".bootstrap-colors .color").on("click", function(e) {
    e.preventDefault();
    let color = $(this).attr("title");
    console.log(color);
    let fileUrl = "/assets/styles/css/themes/" + color + ".min.css";
    if (localStorage) {
      gullUtils.changeCssLink("gull-theme", fileUrl);
    } else {
      $themeLink.attr("href", fileUrl);
    }
  });

  // Toggle customizer
  $(".handle").on("click", function(e) {
    $customizer.toggleClass("open");
  });
});
