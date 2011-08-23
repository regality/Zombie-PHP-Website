$(document).ready(function() {
   setAjaxUrl();
   undead.setupAjax();
   undead.resetMenu();
   if (typeof $(".active").attr("app") != "undefined") {
      undead.pushStack($(".active").attr("app"));
   }

   $("#console-clear").click(function() {
      $("#console-messages").html("");
   });

   $(".console-mesg-close").live('click', function() {
      $(this).parent().remove();
   });

   $(".app").live('click', function() {
      var app = $(this).attr("app");
      if (!$(this).hasClass("active")) {
         $(".item").removeClass("active");
         $(".item[app=" + app + "]").addClass("active");
      }
      if (undead.stackSize(app) == 0) {
         undead.pushStack(app);
      } else {
         undead.focusApp(app);
      }
   });

   $("#logout").unbind('click').live('click',function() {
      $.ajax({"data":{"app":"auth",
                      "logout":""},
              "success":function(data) {
                  window.location.reload();
              }
      });
   });

   $("#login-form").live('submit', function(e) {
      $.ajax({"data":{"app":"auth",
                      "username":$("#username").val(),
                      "password":hex_sha1($("#password").val())},
              "success":function(data) {
                  if (data.status == "success") {
                     undead.pushStack(data.app);
                     $.ajax({"data":{"app":"menu"},
                             "dataType":"html",
                             "success":function(data) {
                                 $("#sidenav").html(data);
                                 undead.resetMenu();
                             }
                     });
                  } else {
                     $("#login-error").hide()
                        .html("Error: wrong username or password").fadeIn();
                  }
              }
      });
      return false;
   });

});
