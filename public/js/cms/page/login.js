$(document).ready(function(){
    $('#form-login').validate({
        rules: {
          email: {
            required: true
          },
          password: {
            required: true
          }
        },
        messages: {
            email: {
                required: "Kamu perlu mengisi email kamu"
            },
            password: {
                required: "Kamu perlu mengisi password kamu"
            }
        }
      });
});