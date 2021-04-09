$(document).ready(function(){
    jQuery.validator.addMethod("emailstudent", function(value, element) {
        return this.optional(element) || /^.+@student.umn.ac.id$/.test(value);
    }, "Masukkan email student."
    );
    jQuery.validator.addMethod("regexeco", function(value, element) {
        return this.optional(element) || /^[\pL\s\-]+$/.test(value);
    }, "Masukkan email student."
    );
    $('.registerform form').validate({
        rules:{
            Firstname :{
                required: true,
                regexeco: true
            },
            Lastname:{
                regexeco: true
            },
            Student_id:{
                required: true,
                digits: true
            },
            Email :{
                required: true,
                emailstudent: true
            },
            Major :{
                required: true
            },
            Generation :{
                required: true
            },
            Instagram_account :{
                required: true
            },
            Line_id :{
                required: true
            },
            Phone_number:{
                required: true,
                minlength: 11,
                maxlength: 12,
                digits: true
            },
            Password:{
                required: true,
                minlength: 8,
                maxlength: 25
            },
            Password_confirmation:{
                required: true,
                minlength: 8,
                maxlength: 25,
                equalTo: "#Password"
            },
            Availability:{
                required: true
            }
        },
        messages:{
            Firstname :{
                required: 'Kamu perlu mengisi nama kamu',
                regexeco: 'Nama tidak boleh mengandung angka ataupun simbol'
            },
            Lastname :{
                regexeco: 'Nama tidak boleh mengandung angka ataupun simbol'
            },
            Student_id:{
                required: 'Kamu perlu mengisi NIM kamu',
                digits : 'NIM harus berupa angka'
            },
            Email :{
                required: 'Kamu perlu mengisi email kamu',
                emailstudent: 'Email harus menggunakan email student'
            },
            Major :{
                required: 'Kamu perlu mengisi jurusan kamu'
            },
            Generation :{
                required: 'Kamu perlu mengisi angkatan kamu'
            },
            Instagram_account :{
                required: 'Kamu perlu mengisi nama akun instagram kamu'
            },
            Line_id :{
                required: 'Kamu perlu mengisi id line kamu'
            },
            Phone_number:{
                required: 'Kamu perlu mengisi nomor telepon kamu',
                minlength: 'Nomor telepon terlalu pendek',
                maxlength: 'Nomor telepon terlalu panjang',
                digits: 'Nomor telepon harus berupa angka'
            },
            Password:{
                required: 'Kamu perlu mengisi password kamu',
                minlength: 'Password minimal terdiri dari 8 karakter',
                maxlength: 'Password maximal terdiri dari 25 karakter'
            },
            Password_confirmation:{
                required: 'Kamu perlu mengisi password kamu',
                minlength: 'Password minimal terdiri dari 8 karakter',
                maxlength: 'Password maximal terdiri dari 25 karakter',
                equalTo: 'Password tidak sama'
            },
            Availability:{
                required: 'Kamu perlu menyetujui ketentuan yang berlaku'
            }
        }
    });
});